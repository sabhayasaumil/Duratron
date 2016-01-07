<head>
        <?php require_once 'template/commonJS.php'; ?>
</head>

<div align='center'>
<div style="width:800px;float:'centre'" align="center">
<?php
	if(isset($_GET["product_id"]))
		{
			$con=mysqli_connect("localhost","root","","honey");
						// Check connection
						if (mysqli_connect_errno())
							{
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
						else
							{
								
								$Sql_Query="select * from plastic where id=".$_GET['product_id'];
								$result = mysqli_query($con,$Sql_Query);
								while($row = mysqli_fetch_array($result))
								{
									$a=0;
									echo "<div width=800px class='row-fluid section explain container' align='centre'><h1>".$row['Title']."</h1></div></br>";
									/*echo "<div style=\"width:800px;text-align:'justify';float:'right'\"><div style=\"float:'left';width:390px;\"><img src='images/product images/".$row['Image']."' width=400px style=\"float:'left';\"></div>".$row['Info']."</div>";
									//echo $row['Info']."</div>";*/
									?>
									<div class="span9 blog_entry" style="width:800px">
										<div style="float:left; width:390px">
											<img src='images/product images/<?php echo $row['Image'];?>' alt="" style="float:left;margin-right:10px;" class="view_images"/>
										</div>
										<div class="article-body" style="float:left;width:370px;text-align:justify;margin:15px" align=left>
											<?php echo $row['Info'];?>
										</div>
									</div>
									
									<?php
									echo "</br>";
									echo "<div width=800px><img src='images/tables/".$row['Table_Image']."' width='760px' style='margin:17px;'></div>";
									
								}
								if(!isset($a))
									{
										echo "No Product Found";
									}
								mysqli_close($con);
							}
		
		
		}
	else
		{
			echo "No Product Found";
		}


?>
</div>
</div>
