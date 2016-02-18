  <?php
						$ch = curl_init();
						
						curl_setopt_array(
							$ch, array( 
							CURLOPT_URL => 'http://www.performa360.com/blog.php',
							CURLOPT_RETURNTRANSFER => true
						));

						$output = curl_exec($ch);
						echo $output;
  ?>