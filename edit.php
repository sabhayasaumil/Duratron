<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DuraTron</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Starter Twitter Bootstrap Template. This starter template is a great place to start your Bootstrap Projects.">
        <meta name="author" content="LittleSparkVT">
        <?php require_once 'template/commonJS.php'; ?>		

    </head>
<body>
        <!-- HEADER CONTAINER -->
        <?php require_once 'template/header.php'; ?>
        <!-- PORTFOLIO -->
        <div class="row-fluid section" id="portfolio">
            <div class="container"> 
                <div class="explain"><br/>
                    <span class="intro">Products</span>
                    <!-- Start Portfolio Navigation -->
                    <nav class="primary m-btn-group toggle-buttons clearfix"> 
                        <br/>
						<ul> 
							<?php
								
								$con=mysqli_connect("localhost","root","","honey");
								// Check connection
								if (mysqli_connect_errno())
									{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
								else
								{
									$Sql_Query="select id,Main_Title from plastic order by Priority";
									$result = mysqli_query($con,$Sql_Query);
									while($row = mysqli_fetch_array($result))
									{
										?><li> <a class="m-btn" style="width:550px" href='editor.php?product_id=<?php echo $row['id']."' >".$row['Main_Title'];?></a></li>
										<?php
									}
								}
							?>
							
                        </ul> 
                    </nav>
                </div>
            </div>
        </div>
        <!-- End PORTFOLIO -->
       <?php require_once 'template/footer.php'; ?> 

    </body>
</html>
