<?php
		if(isset($_POST['id']))
		{
		$id=addslashes($_POST['id']);
		$Main_Title=addslashes($_POST['Main_Title']);
		$Title=addslashes($_POST['Title']);
		$Info=addslashes($_POST['Info']);
		
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
									//$Main_Title=$row['Main_Title'];
									//$Title=$row['Title'];
									//$Info=$row['Info'];
									$product_image=$row['Image'];
									$table_image=$row['Table_Image'];
									$Sql_Query="update plastic SET Main_Title='".$Main_Title."', Title='".$Title."', Info='".$Info."' ";
									$sql_query_suffix=" where id=".$id;

								}
								
								if(isset($_FILES['Product_Image']) && $_FILES["Product_Image"]["name"]!=NULL)
									{
										if ($_FILES["Product_Image"]["error"] > 0)
											{
												echo $_FILES['Product_Image']['name']."</br>Error in uploading Product Image:" . $_FILES["Product_Image"]["error"] . "<br>";
											}
										else
											{
												if(!$_FILES["Product_Image"]["type"] == "image/jpeg"  || !$_FILES["Product_Image"]["type"] == "image/png" || !$_FILES["Product_Image"]["type"] == "image/jpg")
													{
														echo "Upload Only Product in Jpeg, Jpg or png Format";
														exit();
													}
												else
													{
														$Table_Type=end(explode(".", $_FILES["Product_Image"]["name"]));
														$uploading=$Main_Title.".".$Table_Type;
														if(file_exists("images/Product images/".$product_image))
														unlink("images/Product images/".$product_image);
														move_uploaded_file($_FILES["Product_Image"]["tmp_name"],"images/Product images/" .$uploading);
														$Sql_Query.=" ,Image='".$uploading."' ";
													}
													
											}
									}
								
								
								
								if(isset($_FILES['Table']) && $_FILES["Table"]["name"]!=NULL)
									{
										if ($_FILES["Table"]["error"] > 0)
											{
												echo "Error in uploading Table Image:" . $_FILES["Table"]["error"] . "<br>";
											}
										else
											{
												if(!$_FILES["Table"]["type"] == "image/jpeg"  || !$_FILES["Table"]["type"] == "image/png" || !$_FILES["Table"]["type"] == "image/jpg")
													{
														echo "Upload Only Jpeg, Jpg or png Image";
														exit();
													}
												else
													{
														$Table_Type=end(explode(".", $_FILES["Table"]["name"]));
														$uploading=$Main_Title.".".$Table_Type;
														if(file_exists("images/Tables/".$table_image))
														unlink("images/Tables/" .$table_image);
														move_uploaded_file($_FILES["Table"]["tmp_name"],"images/Tables/" .$uploading);
														$Sql_Query.=" ,Table_Image='".$uploading."' ";
													}
													
											}
									}
									
							}
		if(isset($Sql_Query) && isset($sql_query_suffix))
		{
			if (!mysqli_query($con,$Sql_Query.$sql_query_suffix))
				{
					
					die('Error: ' . mysqli_error($con));
				}
				echo "Product Updated";
				header( "refresh:2; honeydudhatra.php" );
				
				mysqli_close($con);
		}
		else
		{
		echo "no product to update";
		header( "refresh:2; index.php" );
		}
		}
		else
		{
			echo "no data for product update";
			header( "refresh:2; index.php" );
		}
?>