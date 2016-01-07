<?php
if(isset($_POST['id']))
	{
	$con=mysqli_connect("localhost","root","","honey");
								
								$error=0;
								$counter=1;
								if (mysqli_connect_errno())
									{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
										$error++;
										
									}
								else
								{
									foreach(explode("&&",$_POST['id']) as $value)
										{
											if($value!=null)
											{
											mysqli_query($con,"UPDATE plastic SET Priority=".$counter++." WHERE id=".$value);
											}
										}
								}
								if($error==0)
									{
										echo "true";
									}
								else
									{
										echo "false";
									}
	}
	else
	echo "false";
?>