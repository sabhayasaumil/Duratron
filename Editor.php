<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DuraTron</title>
        <?php require_once 'template/commonJS.php'; ?>
	<?php
		if(!isset($_GET['product_id']))
		{
			echo "error page";
			exit;
		}
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
							$id=$row['id'];
							$Main_Title=$row['Main_Title'];
							$Title=$row['Title'];
							$Info=$row['Info'];
						}
					}
		mysqli_close($con);
	
	
	?>
	</head>

    <body>
        <?php require_once 'template/header.php'; ?>
        <div class="row-fluid section" id="about">
            <div class="container"> 

                <div class="explain" style="margin-left:400px">
                    <h2>Edit Content</h2>
						<form action="update.php" method="post" id="contact-form" enctype="multipart/form-data">
                            <fieldset>
                                <div class="row"> 
                                    <div class="holder span8">
                                        <div class="message">
                                            <div class="top"></div>
                                            <div class="contents">
                                                <div id="alert"></div>
                                            </div>
                                            <div class="bottom"></div>
                                        </div>
                                    </div>
									<input type="hidden" name="id" value=<?php echo $id;?>>
                                    <div class="field span8">
                                        <input type="text" value="<?php echo $Main_Title;?>" class="input-text m-wrap m-ctrl-large" id="Main_Title" name="Main_Title" placeholder="Main_Title" />
                                    </div>
                                    <div class="field span8">
                                        <input type="text" value="<?php echo $Title;?>" class="input-text m-wrap m-ctrl-large" id="Title" name="Title" placeholder="Title" />
                                    </div>
                                    <div class="field span8">
                                        <textarea type="text" value="" rows="10" class="m-wrap m-ctrl-large" id="Info" name="Info" placeholder="Info"><?php echo $Info;?></textarea>
                                    </div>
                                    <div class="field span8">
                                        <b>Product Image:</b><input type="File" class="m-wrap m-ctrl-large" id="Product_Image" name="Product_Image" placeholder="Product Image"/>
                                    </div>
                                    <div class="field span8">
                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										Table:</b><input type="File" class="m-wrap m-ctrl-large" id="Table" name="Table" placeholder="Table"/>
                                    </div>
                                    <div class="field span8">
                                        <input type="submit" class="m-btn" value="Update" />
                                    </div>
                                </div>
                                    
                            </fieldset>
                        </form>
                    </div> 
                </div>
            </div>

        <!-- FOOTER -->
        <?php require_once 'template/footer.php'; ?>
    </body>
</html>
