

<?php include ("../ecobrick_env.php");?>


  <!-- <div class="grey-gradient" style="background-image: linear-gradient(grey,grey, #30FFFF);height:60vh;margin-bottom:-60vh;max-height:fit-content;"></div>

-->

 <!--   echo '
            <div class="brik-co2">'.$row["ecobrick_brk_amt"].' BRK<br>'.$row["weight_in_g"].'g<br>'.$row["CO2_kg"].' CO2e
                    </div>
                    </div>'; ORDER BY ecobrick_unique_id ASC-->
            



                    <div class="flex-container">

<?php

$sql = "SELECT ecobrick_unique_id, thumb_url, ecobrick_owner, location FROM vw_gallery_feed LIMIT 80;";  // Updated to select only necessary columns
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="gal-photo">
            <div class="photo-box">
                <a href="details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["thumb_url"].'?v=2" loading="lazy" alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'"></a>
            </div>
        </div>';
    }

    $result->free(); // Free the result set
    $conn->close();  // Close the database connection

} else {
    echo "Failed to connect to the Brikchain database";
}

?>

</div>

           


  
