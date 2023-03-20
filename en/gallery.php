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


  <!-- <div class="grey-gradient" style="background-image: linear-gradient(grey,grey, #30FFFF);height:60vh;margin-bottom:-60vh;max-height:fit-content;"></div>

-->

 <!--   echo '
            <div class="brik-co2">'.$row["ecobrick_brk_amt"].' BRK<br>'.$row["weight_in_g"].'g<br>'.$row["CO2_kg"].' CO2e
                    </div>
                    </div>';-->
            



            
            <div class="flex-container">

                <?php

                $sql = "SELECT * FROM vw_gallery_feed ;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                   array_reverse ($result);
                // output data of each row
                while( $row= $result->fetch_assoc()) {

                echo '
                <div class="gal-photo">
                    <div class="photo-box">
                        <a href="details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["thumb_url"].'?v=2" loading="lazy" alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'"></a>
                    </div>
                </div>';
        
                }

                } else {
                echo "Failed to connect to the Brikchain database";
                }

                ?>

            </div>
           


  
