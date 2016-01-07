<?php
		$Main_Title=addslashes($_POST['Main_Title']);
		$Title=addslashes($_POST['Title']);
		$Info=addslashes($_POST['Info']);
		if(isset($_FILES["Product_Image"]))
		if ($_FILES["Product_Image"]["error"] > 0)
			{
				echo "Error in uploading Product Image:" . $_FILES["Product_Image"]["error"] . "<br>";
			}
		else if($_FILES["Table"]["error"] > 0)
			{
				echo "Error uploading Table Image" . $_FILES["Table"]["error"] . "<br>";
			}
		else
			{
				if(!$_FILES["Product_Image"]["type"] == "image/jpeg"  || !$_FILES["Product_Image"]["type"] == "image/png" || !$_FILES["Product_Image"]["type"] == "image/jpg" || !$_FILES["Table"]["type"] == "image/jpeg"  || !$_FILES["Table"]["type"] == "image/png" || !$_FILES["Table"]["type"] == "image/jpg")
					{
						echo "Upload Only Jpeg, Jpg or png Image";
					}
				else
					{
						$Product_Image_Type=end(explode(".", $_FILES["Product_Image"]["name"]));
						$Table_Type=end(explode(".", $_FILES["Table"]["name"]));
						
						move_uploaded_file($_FILES["Product_Image"]["tmp_name"],"images/product images/" . $Main_Title.".".$Product_Image_Type);
						move_uploaded_file($_FILES["Table"]["tmp_name"],"images/tables/" . $Main_Title.".".$Table_Type);
						
					//Database	
						
						$con=mysqli_connect("localhost","root","","honey");
						// Check connection
						if (mysqli_connect_errno())
							{
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
						else
							{
								$result=mysqli_query($con,"select max(priority) as max from plastic");
								$row = mysqli_fetch_row($result);
								$max=$row[0]['max']+1;
								$Sql_Query="Insert into plastic (Main_Title,Title,Info,Image,Table_Image,Priority) values('".$Main_Title."','".$Title."','".$Info."','".$Main_Title.".".$Product_Image_Type."','".$Main_Title.".".$Table_Type."',".$max.")";
								if (!mysqli_query($con,$Sql_Query))
								{
									die('Error: ' . mysqli_error($con));
								}
								echo "1 Product added";
								header( "refresh:2; AdderPage.php" );
								
								mysqli_close($con);
							}
						  
					}
					
			}

?>