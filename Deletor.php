<?php
		if(isset($_GET['product_id']) && isset($_GET['product_name']))
		{
			$id=addslashes($_GET['product_id']);
			$con=mysqli_connect("localhost","root","","honey");
						// Check connection
						if (mysqli_connect_errno())
							{
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
						else
							{
								$Query="select * from plastic where id=".$id." ";
								$result = mysqli_query($con,$Query);
								while($row = mysqli_fetch_array($result))
								{
									$id=$row['id'];
									$Main_Title=$row['Main_Title'];
									$product_image=$row['Image'];
									$table_image=$row['Table_Image'];
								}
								if(isset($Main_Title) && $Main_Title==$_GET['product_name'])
								{
									if(file_exists("images/product images/".$product_image))
										{
											unlink("images/product images/".$product_image);
										}
									if(file_exists("images/Tables/".$table_image))
										{
											unlink("images/Tables/".$table_image);
										}
									mysqli_query($con,"Delete from plastic where id=".$id);
									echo $Main_Title." is Deleted";
									header( "refresh:2; honeydudhatra.php" );
									
								}
								else
								{
									echo "No product Exist With Such Name";
									header( "refresh:2; index.php" );
								}
									
							}
		}
		else
		{
			echo "no data for product delete";
			header( "refresh:2; index.php" );
		}
?>