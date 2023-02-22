<html><body><?php include 'ecobricks_env.php';?> 

			<div class="gallery10-content-block">
								
				<div class="flex-container10">
						
					<?php
					$sql = "SELECT * FROM vw_top_10_last_month ;";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {

					echo '
					<div class="gal-photo10">
					<a href="details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["ecobrick_full_photo_url"].'?v=1"  alt="Ecobrick '.$row["ecobrick_unique_id"].' Dari '.$row["ecobrick_owner"].' di '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' di '.$row["ecobrick_owner"].' di '.$row["location"].'" loading="lazy"/></a>';
					echo '<div class="gal10-photo-text"><b>Ecobrick '.$row["ecobrick_unique_id"].'</b><br>Dari '.$row["ecobrick_owner"].'<br>'.$row["location"].'</div></div>';

					}

					} else {
					echo "Gagal terhubung ke database Brikchain";
					}

					?>
							
				</div>
		
			</div>

				</body>
				</html>