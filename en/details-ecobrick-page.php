
<!DOCTYPE html>
<?php $lang='en';?>

<head lang="en">

<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
<!--PAGE LANGUAGE:  ENGLISH
Special Ecobrick View Page: v.1.0.1-->

<!--Content Page template: v.1.0.0-->



<?php require_once ("header.php");?>

<?php
   
$servername = "localhost";
$username = "ecobricks_brikchain_viewer";
$password = "desperate-like-the-Dawn";
$dbname = "ecobricks_gobrik_msql_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<?php

/*
 * Helper functions for building a DataTables server-side processing SQL query
 *
 * The static functions in this class are just helper functions to help build
 * the SQL used in the DataTables demo server-side processing scripts. These
 * functions obviously do not represent all that can be done with server-side
 * processing, they are intentionally simple to show how it works. More complex
 * server-side processing operations will likely require a custom script.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */


// Please Remove below 4 lines as this is use in Datatatables test environment for your local or live environment please remove it or else it will not work
$file = $_SERVER['DOCUMENT_ROOT'].'/datatables/pdo.php';
if ( is_file( $file ) ) {
	include( $file );
}


class SSP {
	/**
	 * Create the data output array for the DataTables rows
	 *
	 *  @param  array $columns Column information array
	 *  @param  array $data    Data from the SQL get
	 *  @return array          Formatted data in a row based format
	 */
	static function data_output ( $columns, $data )
	{
		$out = array();

		for ( $i=0, $ien=count($data) ; $i<$ien ; $i++ ) {
			$row = array();

			for ( $j=0, $jen=count($columns) ; $j<$jen ; $j++ ) {
				$column = $columns[$j];

				// Is there a formatter?
				if ( isset( $column['formatter'] ) ) {
                    if(empty($column['db'])){
                        $row[ $column['dt'] ] = $column['formatter']( $data[$i] );
                    }
                    else{
                        $row[ $column['dt'] ] = $column['formatter']( $data[$i][ $column['db'] ], $data[$i] );
                    }
				}
				else {
                    if(!empty($column['db'])){
                        $row[ $column['dt'] ] = $data[$i][ $columns[$j]['db'] ];
                    }
                    else{
                        $row[ $column['dt'] ] = "";
                    }
				}
			}

			$out[] = $row;
		}

		return $out;
	}


	/**
	 * Database connection
	 *
	 * Obtain an PHP PDO connection from a connection details array
	 *
	 *  @param  array $conn SQL connection details. The array should have
	 *    the following properties
	 *     * host - host name
	 *     * db   - database name
	 *     * user - user name
	 *     * pass - user password
	 *  @return resource PDO connection
	 */
	static function db ( $conn )
	{
		if ( is_array( $conn ) ) {
			return self::sql_connect( $conn );
		}

		return $conn;
	}


	/**
	 * Paging
	 *
	 * Construct the LIMIT clause for server-side processing SQL query
	 *
	 *  @param  array $request Data sent to server by DataTables
	 *  @param  array $columns Column information array
	 *  @return string SQL limit clause
	 */
	static function limit ( $request, $columns )
	{
		$limit = '';

		if ( isset($request['start']) && $request['length'] != -1 ) {
			$limit = "LIMIT ".intval($request['start']).", ".intval($request['length']);
		}

		return $limit;
	}


	/**
	 * Ordering
	 *
	 * Construct the ORDER BY clause for server-side processing SQL query
	 *
	 *  @param  array $request Data sent to server by DataTables
	 *  @param  array $columns Column information array
	 *  @return string SQL order by clause
	 */
	static function order ( $request, $columns )
	{
		$order = '';

		if ( isset($request['order']) && count($request['order']) ) {
			$orderBy = array();
			$dtColumns = self::pluck( $columns, 'dt' );

			for ( $i=0, $ien=count($request['order']) ; $i<$ien ; $i++ ) {
				// Convert the column index into the column data property
				$columnIdx = intval($request['order'][$i]['column']);
				$requestColumn = $request['columns'][$columnIdx];

				$columnIdx = array_search( $requestColumn['data'], $dtColumns );
				$column = $columns[ $columnIdx ];

				if ( $requestColumn['orderable'] == 'true' ) {
					$dir = $request['order'][$i]['dir'] === 'asc' ?
						'ASC' :
						'DESC';

					$orderBy[] = '`'.$column['db'].'` '.$dir;
				}
			}

			if ( count( $orderBy ) ) {
				$order = 'ORDER BY '.implode(', ', $orderBy);
			}
		}

		return $order;
	}


	/**
	 * Searching / Filtering
	 *
	 * Construct the WHERE clause for server-side processing SQL query.
	 *
	 * NOTE this does not match the built-in DataTables filtering which does it
	 * word by word on any field. It's possible to do here performance on large
	 * databases would be very poor
	 *
	 *  @param  array $request Data sent to server by DataTables
	 *  @param  array $columns Column information array
	 *  @param  array $bindings Array of values for PDO bindings, used in the
	 *    sql_exec() function
	 *  @return string SQL where clause
	 */
	static function filter ( $request, $columns, &$bindings )
	{
		$globalSearch = array();
		$columnSearch = array();
		$dtColumns = self::pluck( $columns, 'dt' );

		if ( isset($request['search']) && $request['search']['value'] != '' ) {
			$str = $request['search']['value'];

			for ( $i=0, $ien=count($request['columns']) ; $i<$ien ; $i++ ) {
				$requestColumn = $request['columns'][$i];
				$columnIdx = array_search( $requestColumn['data'], $dtColumns );
				$column = $columns[ $columnIdx ];

				if ( $requestColumn['searchable'] == 'true' ) {
					if(!empty($column['db'])){
						$binding = self::bind( $bindings, '%'.$str.'%', PDO::PARAM_STR );
						$globalSearch[] = "`".$column['db']."` LIKE ".$binding;
					}
				}
			}
		}

		// Individual column filtering
		if ( isset( $request['columns'] ) ) {
			for ( $i=0, $ien=count($request['columns']) ; $i<$ien ; $i++ ) {
				$requestColumn = $request['columns'][$i];
				$columnIdx = array_search( $requestColumn['data'], $dtColumns );
				$column = $columns[ $columnIdx ];

				$str = $requestColumn['search']['value'];

				if ( $requestColumn['searchable'] == 'true' &&
				 $str != '' ) {
					if(!empty($column['db'])){
						$binding = self::bind( $bindings, '%'.$str.'%', PDO::PARAM_STR );
						$columnSearch[] = "`".$column['db']."` LIKE ".$binding;
					}
				}
			}
		}

		// Combine the filters into a single string
		$where = '';

		if ( count( $globalSearch ) ) {
			$where = '('.implode(' OR ', $globalSearch).')';
		}

		if ( count( $columnSearch ) ) {
			$where = $where === '' ?
				implode(' AND ', $columnSearch) :
				$where .' AND '. implode(' AND ', $columnSearch);
		}

		if ( $where !== '' ) {
			$where = 'WHERE '.$where;
		}

		return $where;
	}


	/**
	 * Perform the SQL queries needed for an server-side processing requested,
	 * utilising the helper functions of this class, limit(), order() and
	 * filter() among others. The returned array is ready to be encoded as JSON
	 * in response to an SSP request, or can be modified if needed before
	 * sending back to the client.
	 *
	 *  @param  array $request Data sent to server by DataTables
	 *  @param  array|PDO $conn PDO connection resource or connection parameters array
	 *  @param  string $table SQL table to query
	 *  @param  string $primaryKey Primary key of the table
	 *  @param  array $columns Column information array
	 *  @return array          Server-side processing response array
	 */
	static function simple ( $request, $conn, $table, $primaryKey, $columns )
	{
		$bindings = array();
		$db = self::db( $conn );

		// Build the SQL query string from the request
		$limit = self::limit( $request, $columns );
		$order = self::order( $request, $columns );
		$where = self::filter( $request, $columns, $bindings );

		// Main query to actually get the data
		$data = self::sql_exec( $db, $bindings,
			"SELECT `".implode("`, `", self::pluck($columns, 'db'))."`
			 FROM `$table`
			 $where
			 $order
			 $limit"
		);

		// Data set length after filtering
		$resFilterLength = self::sql_exec( $db, $bindings,
			"SELECT COUNT(`{$primaryKey}`)
			 FROM   `$table`
			 $where"
		);
		$recordsFiltered = $resFilterLength[0][0];

		// Total data set length
		$resTotalLength = self::sql_exec( $db,
			"SELECT COUNT(`{$primaryKey}`)
			 FROM   `$table`"
		);
		$recordsTotal = $resTotalLength[0][0];

		/*
		 * Output
		 */
		return array(
			"draw"            => isset ( $request['draw'] ) ?
				intval( $request['draw'] ) :
				0,
			"recordsTotal"    => intval( $recordsTotal ),
			"recordsFiltered" => intval( $recordsFiltered ),
			"data"            => self::data_output( $columns, $data )
		);
	}


	/**
	 * The difference between this method and the `simple` one, is that you can
	 * apply additional `where` conditions to the SQL queries. These can be in
	 * one of two forms:
	 *
	 * * 'Result condition' - This is applied to the result set, but not the
	 *   overall paging information query - i.e. it will not effect the number
	 *   of records that a user sees they can have access to. This should be
	 *   used when you want apply a filtering condition that the user has sent.
	 * * 'All condition' - This is applied to all queries that are made and
	 *   reduces the number of records that the user can access. This should be
	 *   used in conditions where you don't want the user to ever have access to
	 *   particular records (for example, restricting by a login id).
	 *
	 *  @param  array $request Data sent to server by DataTables
	 *  @param  array|PDO $conn PDO connection resource or connection parameters array
	 *  @param  string $table SQL table to query
	 *  @param  string $primaryKey Primary key of the table
	 *  @param  array $columns Column information array
	 *  @param  string $whereResult WHERE condition to apply to the result set
	 *  @param  string $whereAll WHERE condition to apply to all queries
	 *  @return array          Server-side processing response array
	 */
	static function complex ( $request, $conn, $table, $primaryKey, $columns, $whereResult=null, $whereAll=null )
	{
		$bindings = array();
		$db = self::db( $conn );
		$localWhereResult = array();
		$localWhereAll = array();
		$whereAllSql = '';

		// Build the SQL query string from the request
		$limit = self::limit( $request, $columns );
		$order = self::order( $request, $columns );
		$where = self::filter( $request, $columns, $bindings );

		$whereResult = self::_flatten( $whereResult );
		$whereAll = self::_flatten( $whereAll );

		if ( $whereResult ) {
			$where = $where ?
				$where .' AND '.$whereResult :
				'WHERE '.$whereResult;
		}

		if ( $whereAll ) {
			$where = $where ?
				$where .' AND '.$whereAll :
				'WHERE '.$whereAll;

			$whereAllSql = 'WHERE '.$whereAll;
		}

		// Main query to actually get the data
		$data = self::sql_exec( $db, $bindings,
			"SELECT `".implode("`, `", self::pluck($columns, 'db'))."`
			 FROM `$table`
			 $where
			 $order
			 $limit"
		);

		// Data set length after filtering
		$resFilterLength = self::sql_exec( $db, $bindings,
			"SELECT COUNT(`{$primaryKey}`)
			 FROM   `$table`
			 $where"
		);
		$recordsFiltered = $resFilterLength[0][0];

		// Total data set length
		$resTotalLength = self::sql_exec( $db, $bindings,
			"SELECT COUNT(`{$primaryKey}`)
			 FROM   `$table` ".
			$whereAllSql
		);
		$recordsTotal = $resTotalLength[0][0];

		/*
		 * Output
		 */
		return array(
			"draw"            => isset ( $request['draw'] ) ?
				intval( $request['draw'] ) :
				0,
			"recordsTotal"    => intval( $recordsTotal ),
			"recordsFiltered" => intval( $recordsFiltered ),
			"data"            => self::data_output( $columns, $data )
		);
	}


	/**
	 * Connect to the database
	 *
	 * @param  array $sql_details SQL server connection details array, with the
	 *   properties:
	 *     * host - host name
	 *     * db   - database name
	 *     * user - user name
	 *     * pass - user password
	 *     Alan added charset=utf8mb4; to new PDO
	 * @return resource Database connection handle
	 */
	static function sql_connect ( $sql_details )
	{
		try {
			$db = @new PDO(
				"mysql:host={$sql_details['host']};dbname={$sql_details['db']};charset=utf8mb4;",
				$sql_details['user'],
				$sql_details['pass'],
				array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION )
			);
		}
		catch (PDOException $e) {
			self::fatal(
				"An error occurred while connecting to the database. ".
				"The error reported by the server was: ".$e->getMessage()
			);
		}

		return $db;
	}


	/**
	 * Execute an SQL query on the database
	 *
	 * @param  resource $db  Database handler
	 * @param  array    $bindings Array of PDO binding values from bind() to be
	 *   used for safely escaping strings. Note that this can be given as the
	 *   SQL query string if no bindings are required.
	 * @param  string   $sql SQL query to execute.
	 * @return array         Result from the query (all rows)
	 */
	static function sql_exec ( $db, $bindings, $sql=null )
	{
		// Argument shifting
		if ( $sql === null ) {
			$sql = $bindings;
		}

		$stmt = $db->prepare( $sql );
		//echo $sql;

		// Bind parameters
		if ( is_array( $bindings ) ) {
			for ( $i=0, $ien=count($bindings) ; $i<$ien ; $i++ ) {
				$binding = $bindings[$i];
				$stmt->bindValue( $binding['key'], $binding['val'], $binding['type'] );
			}
		}

		// Execute
		try {
			$stmt->execute();
		}
		catch (PDOException $e) {
			self::fatal( "An SQL error occurred: ".$e->getMessage() );
		}

		// Return all
		return $stmt->fetchAll( PDO::FETCH_BOTH );
	}


	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Internal methods
	 */

	/**
	 * Throw a fatal error.
	 *
	 * This writes out an error message in a JSON string which DataTables will
	 * see and show to the user in the browser.
	 *
	 * @param  string $msg Message to send to the client
	 */
	static function fatal ( $msg )
	{
		echo json_encode( array( 
			"error" => $msg
		) );

		exit(0);
	}

	/**
	 * Create a PDO binding key which can be used for escaping variables safely
	 * when executing a query with sql_exec()
	 *
	 * @param  array &$a    Array of bindings
	 * @param  *      $val  Value to bind
	 * @param  int    $type PDO field type
	 * @return string       Bound key to be used in the SQL where this parameter
	 *   would be used.
	 */
	static function bind ( &$a, $val, $type )
	{
		$key = ':binding_'.count( $a );

		$a[] = array(
			'key' => $key,
			'val' => $val,
			'type' => $type
		);

		return $key;
	}


	/**
	 * Pull a particular property from each assoc. array in a numeric array, 
	 * returning and array of the property values from each item.
	 *
	 *  @param  array  $a    Array to get data from
	 *  @param  string $prop Property to read
	 *  @return array        Array of property values
	 */
	static function pluck ( $a, $prop )
	{
		$out = array();

		for ( $i=0, $len=count($a) ; $i<$len ; $i++ ) {
            if(empty($a[$i][$prop])){
                continue;
			}
			//removing the $out array index confuses the filter method in doing proper binding,
			//adding it ensures that the array data are mapped correctly
			$out[$i] = $a[$i][$prop];
		}

		return $out;
	}


	/**
	 * Return a string from an array or a string
	 *
	 * @param  array|string $a Array to join
	 * @param  string $join Glue for the concatenation
	 * @return string Joined string
	 */
	static function _flatten ( $a, $join = ' AND ' )
	{
		if ( ! $a ) {
			return '';
		}
		else if ( $a && is_array($a) ) {
			return implode( $join, $a );
		}
		return $a;
	}
}
?>

<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = " . $serialNo;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {

		echo '<title>Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .'g of plastic sequestered by '. $array["owner"] .' in '. $array["location_full"] .'.</title>';

        echo '<meta name="description" content="An authenticated ecobrick that was published and archived on the brikcoin manual blockchain on ' . $array["last_validation_ts"] .'">';

        if ( isset($array["vision"]) && $array["vision"] != '' ) {
            echo '<meta name="description" content="'. $array["vision"] .'">';
    
        }

		echo '<meta name="keywords" content="ecobrick, serial '. $array["owner"] .', '. $array["owner"] .', brikchain, brikcoin, brik record, plastic sequestration, recycling, alternative, sequestration of plastic, plastic offsetting, aes plastic, carbon sequestration. '. $array["location_full"] .'">';

        echo '<meta property="og:url"           content="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='. $array["serial_no"] .'"/>' ;
        echo '<meta property="og:title"         content="Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .'g of plastic sequestered by '. $array["owner"] .' in '. $array["location_full"] .'.">';
        echo '<meta property="og:description"   content="An authenticated ecobrick that was published and archived on the brikcoin manual blockchain on ' . $array["last_validation_ts"] .'"/>';
        echo '<meta property="og:image"         content="'. $array["ecobrick_full_photo_url"] .'"/>';
        echo '<meta property="og:image:alt"     content="The brikchain record of an authenticated ecobrick on the brikchain"/>';
        echo '<meta property="og:locale" content="en_GB" />';
        echo '<meta property="og:type"          content="website">';
 	   

        echo '<meta property="og:type" content="article" />
        <meta property="og:site_name" content="Ecobricks.org" />
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" />
        <meta property="article:modified_time" content="'. $array["last_validation_ts"] .'" />
        <meta property="og:image:type" content="image/png" />
        <meta name="author" content="Global Ecobrick Alliance" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:label1" content="Est. reading time" />
        <meta name="twitter:data1" content="15 minutes" /> ';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>No Ecobrick Found | Ecobricks.org</title>';
    echo '<meta name="description" content="No data found for this ecobrick serial number.  Most likely this is because the brikchain data is still in migration."> ';
}
$conn->close();

?>

<!-- Required script for something?? -->


<STYLE>


.vision-quote {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #222222;
  font-weight: 300;
  text-shadow: 0 0 10px #fff;
}
@media screen and (max-width: 769px) {
	.vision-quote {
      font-size: 2.4em;
      line-height: 1.2;
      padding: 10px 6% 0px 6%;
	  margin-bottom: -18px;
  }
}
@media screen and (min-width: 769px) {
	.vision-quote {
      font-size: 4em;
      line-height: 1.3;
      padding: 15px;
	  margin-top: -40px;
	  margin-bottom: -20px;
  }
}

/* Sidebar/right column */

.row-details {  
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box;
}

@media screen and (min-width: 700px) {
.main-details {
  flex: 60%;

  padding: 0px;
  box-sizing: border-box;
}
}

@media screen and (max-width: 700px) {
.main-details {
  flex: 100%;
  box-sizing: border-box;
}
}

@media screen and (min-width: 700px) {
	.side-details {
	flex: 40%;
	padding-left: 10px;
	box-sizing: border-box;
	margin-top: 30px;
	background: #ECECEC;
	padding: 10px;
	height: fit-content;
		}
	}

@media screen and (max-width: 700px) {
	.side-details {
	flex: 90%;
	margin: 0px 5% 0px 5%;
	box-sizing: border-box;
	background: #ECECEC;
	padding: 10px;
	
	
	}
	}

#data-chunk {margin: 16px;}

	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		min-height: 73vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
       
		background: url(../svgs/brik-market-banner3.svg) bottom;
        background-color: #2A91DA;
		
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	position: relative;

	}
}

@media screen and (min-width: 700px) { 
	.splash-content-block {
		text-align: left;
		min-height: 70vh;
		padding: 0px 7% 0px 7%;
		z-index: 5;
		position: relative;
		
        
		background: url(https://ecobricks.org/svgs/brik-market-banner3.svg) bottom;
        background-color: #2A91DA;
		
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;
		  background-size: cover;

	position: relative;


}
}


@media screen and (min-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: center;
  flex: 35%;
	padding: 0px;
	box-sizing: border-box;
	margin: auto;
}
}


@media screen and (min-width: 700px) { 
.splash-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 10px 30px 0px 0px;
	box-sizing: border-box;
	text-align: left;
    margin: auto;
}
}



@media screen and (max-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: left;

  width: 100%;
	padding: 0px;
	box-sizing: border-box;
	margin: 32px 8% -25px 4%;
}
}



@media screen and (max-width: 700px) { 
.splash-box {
	position: relative;
    flex: 100%;
	padding: 10px 10px 0px 0px;
	box-sizing: border-box;
	text-align: right;
    margin: auto;
}
}



.splash-heading { 
    /*font-family: 'Mulish', Arial, Helvetica, sans-serif;*/
    font-family: Arvo, serif;
  color: white;
  font-weight: 500;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 3.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 4em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.splash-sub {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #fff;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
  text-shadow: 0 0 7px black;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.25em;
		line-height: 1.25;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.5em;
		line-height: 1.3;
		font-weight: 400;
  }
}


#splash-bar {
	margin-top: -50px;
	width: 100%;
	
	height:100px;	
	
	position: relative;
	z-index: 0;

box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
    background-color: #2A91DA;

	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);
	margin-bottom: 40px;

}

hr {border: gray;
border-style: dashed;
border-width: 1px;
margin-top: 31px;
margin-bottom: 31px;}



#main-content {
  margin: auto;
  box-sizing: border-box;
}
@media screen and (max-width: 700px) {
  #main-content {
      width: 100%;
	  margin-top: 0px;
  }
}
@media screen and (min-width: 700px) and (max-width: 1024px) {
  #main-content {
      width: 85%;
  }
}
@media screen and (min-width: 1024px) {
  #main-content {
      width: 77%;
  }
}


/* COLUMN DESIGN */


.row {  
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box;
}


/* Main column */

@media screen and (min-width: 700px) {
.main {
  flex: 70%;

  padding: 15px 40px 15px 0px;
  box-sizing: border-box;
}
}

@media screen and (max-width: 700px) {
.main {
  flex: 100%;

  box-sizing: border-box;
}
}



@media screen and (max-width: 700px) {
	.lead-panel-paragraph {
      font-size: 1.35em;
      line-height: 1.4;
      margin: 20px 0% 25px 0%;
  }
}

@media screen and (min-width: 700px) {
	.lead-panel-paragraph {
      font-size: 1.4em;
      line-height: 1.5;
      margin: 17px 0px 23px 0px;
  }
}




 

@media screen and (max-width: 700px) {


  .lead-page-paragraph p {
    font-size: 1.45em;
    line-height: 1.4;
    margin: 35px 6% 25px 6%;
}
}

@media screen and (max-width: 700px) {

  .page-paragraph p {
    font-size: 1.15em;
    line-height: 1.4;
    margin: 20px 6% 30px 6%;
}
}

@media screen and (max-width: 700px) {
	.page-paragraph-reg {
      font-size: 1em;
      line-height: 1.3;
      margin: 20px 4% 20px 4%;
  }
}


@media screen and (min-width: 700px) {
	.lead-page-paragraph {
      font-size: 1.4em;
      line-height: 1.5;
      margin: 25px 10px 5px 10px;
  }
}


@media screen and (min-width: 700px) {
	.page-paragraph {
      font-size: 1.15em;
      line-height: 1.4;
      margin: 25px 10px 50px 10px;
  }
}

@media screen and (min-width: 700px) {
	.page-paragraph-reg {
      font-size: 1em;
      line-height: 1.3;
      margin: 20px 7px 50px 7px;
  }
}


@media screen and (max-width: 700px)  {
		.reg-content-block {
		text-align: left;
		padding: 15px 7% 15px 7%;
		border-radius: 0px;
		margin: 35px 0px 0px 0px;
/*
		border-color: grey;
		border-width: 1px;
		border-style: dashed;*/
}
	}


	@media screen and (min-width: 700px) {
		.reg-content-block {
			text-align: left;
			padding: 18px 5% 22px 5%;
			border-radius: 15px;
			margin: 30px 0px 20px 0px;
			
			border-color: grey;
			border-width: 1px;
			border-style: dashed;
 
}
	}


#data-chunk {
  padding: 15px;
  background: #e6f3ff;}


.ecobrick-data p {
	font-size: 0.9em;
	font-family: 'Courier New', monospace !important;
  	color: #222222;
  	line-height: 1.3;
	margin-top: 12px;
	font-weight: 300;
  background: aliceblue;
padding: 10px;
border-radius: 5px;
}


/* Sidebar/right column */

@media screen and (min-width: 700px) {
	.side {
	flex: 24%;
	padding: 70px 20px 0px 20px;
	box-sizing: border-box;
	margin-top: -80px;
	background: rgb(212,212,212);
	background: linear-gradient(126deg, rgba(212,212,212,1) 10%, rgba(251,251,251,1) 71%);
  border-radius: 20px;
	}
	}

@media screen and (max-width: 700px) {
	.side {
	flex: 24%;
	padding: 20px;
	box-sizing: border-box;
	
	}
	}
</style>

</head>


											  

<body id="full-page" class="accessibility-plugin-ac">

				

	<div id="header" class="top-menu">


        <div><button type="button" class="main-menu-button" onclick="openMenu()" aria-label="Login to Gobrik"></button></div>

		<div><button type="button" class="gobrik-logo" onclick="closeKnack()" aria-label="Return to Home page"></button></div>
        
       
		
        <div class="button-list" style="display:flex;position:absolute;right:0;width:fit-content;margin-right:15px;flex-flow:row;margin-top:22px;"m>
          
            
                <div id="top-menu-login-button"><button type="button" class="top-menu-login-button" onclick="openKnack()" >
                    login
                </button></div>

                <div><button type="button" class="top-settings-button" onclick="openSettings()" aria-label="Click to open settings page"></button></div>

               <!-- <div><button type="button" style="background: none;border: none;" class="settings-">
                    <img src="../svgs/language-button2.svg" height="30px">
                </button></div>-->
                   
		    </div>
        </div>
    </div> 



							  
											  


 
<?php 



// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = '" . $serialNo . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {




echo 
'<div class="splash-content-block">
	<div class="splash-box">

		<div class="splash-heading">Ecobrick ' . $array["serial_no"] .'</div>
		
		<div class="splash-sub">'. $array["weight_authenticated_kg"] .'&#8202;kg of plastic has been secured out of the biosphere in '. $array["location_full"] .'.</div>
	</div>
	
	<div class="splash-image">
		<a href="ecobrick_full_photo_url"><img src="'. $array["ecobrick_full_photo_url"] .'" style="	border-width: 10px;
	border-color: #97C4E3;
	width: 85%;
	margin-top:-20px;
	box-shadow: 0 0px 10px rgba(85, 84, 84, 0.8);
	border-style: solid;" alt="Ecobrick Serial '. $array["serial_no"] .' was made in '. $array["location_full"] .' and authenticated on ' . $array["last_validation_ts"] .'"
	title="Ecobrick Serial '. $array["serial_no"] .' was made in '. $array["location_full"] .' and authenticated on ' . $array["last_validation_ts"] .'"></a>
	</div>	
</div>

<div id="splash-bar"></div>
';

echo '
<a name="top"></a>
<div id="main-content">
	<div class="row">
		<div class="main">
			<div class="row-details">';

	if ( isset($array["vision"]) && $array["vision"] != '' ) {
			//	echo '<p><div class="vision-quote">'. $array["vision"] .'</div></p>';
		                echo '<p><div class="vision-quote"> '. str_replace('"', "", $array["vision"]) . '  </div></p>';
			}
	
			
			echo '<div class="lead-page-paragraph">
						<p><b>'. $array["owner"] .' has ecobricked '. $array["weight_g"] .'&#8202;g of used plastic in '. $array["location_city"] .', '. $array["location_country"] .' using a '. $array["volume_ml"] .' bottle to make a '. $array["sequestration_type"].'.</b></p>
					</div>';

	

				

			echo ' <div class="main-details">
					
					
					
					<div class="page-paragraph">
						<p>This ecobrick was completed with a density of '. $array["density"] .'&#8202;g/ml and represents '. $array["CO2_kg"] .'&#8202;kg of sequestered C02. The ecobrick is permanently marked with Serial Number '. $array["serial_no"] .' and on '. $array["date_logged_ts"] .' was automatically added to the validation queue.  Based in '. $array["location_region"] .', '. $array["owner"] .' and their community '. $array["community_name"] .', are working hard to keep plastic out of the biosphere in '. $array["location_country"] .'. </p>

						<p>On '. $array["date_logged_ts"] .' the ecobrick was authenticated with an average validation score of '. $array["final_validation_score"] .'. The ecobrick’s authentication generated '. $array["ecobrick_dec_brk_val"] .'&#8202;ß. The ecobrick was ranked with the score of '. $array["validation_score_avg"] .'.</p>
						<br>
					</div>
				</div>';

			

			if ( isset($array["selfie_photo_url"]) && $array["selfie_photo_url"] != '' ) {
				echo '<div class="side-details">
				<img src="'. $array["selfie_photo_url"] .'" width="100%">
			</div>
		';
			}
				

			echo '
			
			</div>
			<div id="data-chunk">
				<div class="ecobrick-data">
					<p style="margin-left: -32px;font-weight: bold;">>> Raw Brikchain Data Record</p><br>
					<p>--------------------</p>
					<p>BEGIN BRIK RECORD ></p>';
			echo ' <p><b>Link to brk trans:</b><var>  No link yet</var></p>' ;
			echo ' <p><b>Logged:</b> ' . $array["date_logged_ts"] .'</p>' ;
			echo ' <p><b>Volume:</b> <var>'. $array["volume_ml"] .' &#8202;ml</var></p>' ;
			echo ' <p><b>Weight:</b> <var>' . $array["weight_g"] .'&#8202;g</var></p>' ;
			echo ' <p><b>Density:</b> <var>' . $array["density"] .'&#8202;g/ml</var></p>' ;
			echo ' <p><b>CO2e:</b>  <var>' . $array["CO2_kg"] .' &#8202;kg</var></p>' ;
			
			echo ' <p><b>Brikcoin value:</b> <var>' . $array["ecobrick_dec_brk_val"] .'&#8202;ß</var></p>' ;

			echo ' <p><b>Maker:</b> <var><i>' . $array["owner"] .'</i></var> </p>' ;
			echo ' <p><b>Sequestration:</b> <var>' . $array["sequestration_type"].'</var></p>' ;
			echo ' <p><b>Brand:</b> <var>' . $array["brand_name"] .'</var></p>' ;
			echo ' <p><b>Bottom colour:</b> ' . $array["bottom_colour"] .'</p>' ;

			echo ' <p><b>Plastic source:</b>  ' . $array["plastic_from"] .'</p>' ;

			echo ' <p><b>Community:</b> <var>' . $array["community_name"] .'</var></p>' ;
			echo ' <p><b>City:</b> <var>' . $array["location_city"] .'</var></p>' ;
			echo ' <p><b>Region:</b> <var>' . $array["location_region"] .'</var></p>' ;
			echo ' <p><b>Country:</b> ' . $array["location_country"] .'</p>' ;
			echo ' <p><b>Full location:</b> <var>' . $array["location_full"] .'</var></p>' ;


			echo ' <p><b>Validation:</b> ' . $array["last_validation_ts"] .'</var></p>' ;
			echo ' <p><b>Validator 1:</b> <var>' . $array["validator_1"] .'</var> </p>' ;
			echo ' <p><b>Validator 2:</b> <var>' . $array["validator_2"] .'</var> </p>' ;
			echo ' <p><b>Validator 3:</b> <var>' . $array["validator_3"] .'</var> </p>' ;
			echo ' <p><b>Validation score avg.:</b> <var>' . $array["validation_score_avg"] .'</var></p>' ;

			echo ' <p><b>Validation score final:</b> <var>' . $array["final_validation_score"] .'</var></p>' ;
			echo ' <p><b>Authenticated weight:</b> <var> ' . $array["weight_authenticated_kg"] .'&#8202;kg</p>
			<p>> END RECORD.</p>
				</div>
			</div>
			' ;

			echo '
			<br><hr><br> 
			<div class="page-paragraph">
				<h3><p>The Brikchain</p></h3>
			
				<p>When an ecobrick is authenticated, like the one above, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find this ecobrick and all the other ecobricks, blocks and transactions that underpin the Brickoin complimentary currency.</p>

			<p>As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
				<br><br>
				<p><a class="action-btn-blue" href="brikchain.php">🔎 Browse the Brikchain</a></p>
				<p style="font-size: 0.85em; margin-top:20px;">The live chain of transactions and ecobricks.</a></p>
				</div>
			</div>';
			
			echo '	<div class="side">

			<div id="side-module-desktop-mobile">
					<img src="pngs/authenticated-ecobrick.png" width="90%" alt="Following the Earths example through eco bricking">
					<br><h4>Authenticated!</h4>
					<h5>This ecobrick has been authenticated by three independent validators that it meets the standards of plastic sequestration.</h5><br>
					<a class="module-btn" href="/about">About Ecobricks</a>
					<br><br>
				</div>   ';

	}


} else {
    echo '<META NAME="robots" CONTENT="noindex">';

	echo '

</head>

<BODY id="full-page">

<!--MENU INSERT-->

	  ';





echo '
<div class="splash-content-block">
		<div class="splash-box">
			<div class="splash-heading">';
	
			echo 'Sorry! :-(</div>
			<div class="splash-sub">No results for ecobrick '. $serialNo .' in the Brikchain.  Most likely this is because the Brikchain data is still in migration.</div>
		</div>
		<div class="splash-image"><img src="../webp/empty-ecobrick-450px.webp?v2" style="width: 80%; margin-top:20px;" alt="empty ecobrick"></div>	
	</div>
	<div id="splash-bar"></div>

	<a name="top"></a>

	<div id="main-content">
		<div class="row">
			<div class="main">
				<br><br>

				
			
			<div class="ecobrick-data">
			<p>🚧 The data for ecobrick '. $serialNo .' has not yet been migrated to the blockchain.
				</p></div><br><br><br><br>
				
				<div class="page-paragraph">
				<p><h3>The Brikchain</h3></p>
			
				<p>When an ecobrick is authenticated, like the one above, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find this ecobrick and all the other ecobricks, blocks and transactions that underpin the Brickoin complimentary currency.</p>

			<p>As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
				<br><br><br>
				<p><a class="action-btn-blue" href="brikchain.php">🔎 Browse the Brikchain</a></p>
				<p style="font-size: 0.85em; margin-top:20px;">The live chain of transactions and ecobricks.</a></p>
				</div>
			</div>

			<div class="side">
		  
		';
		}
		$conn->close();

		?>



				
	

			
			

		
	

            <div id="side-module-desktop-mobile">
				<img src="../webp/aes-400px.webp" width="80%" alt="For-Earth Enterprise through eco bricking">
				<!--<h4>AES Plastic</h4>-->
				<h5>The weight of the plastic inside an authenticated ecobrick is what we call Authenticated Ecobricked Plastic (AES plastic) for short.</h5><br>
				<a class="module-btn" href="/aes" target="_blank">About AES</a><br><br>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="../webp/2-brikcoins-450px.webp" width="75%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Brikcoins</h4>
				<h5>When an ecobrick is authenticated brikcoins are generated to represent the ecological value of its AES plastic.</h5><br>
				<a class="module-btn" href="brikcoins.php">About Brikcoins</a><br><br>
			</div>



		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("footer.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system
<script src="accordion-scripts.js" defer></script>-->


</div>
</body>
</html>
