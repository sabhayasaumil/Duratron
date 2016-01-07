<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DuraTron</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Starter Twitter Bootstrap Template. This starter template is a great place to start your Bootstrap Projects.">
        <meta name="author" content="LittleSparkVT">
        <?php require_once 'template/commonJS.php'; ?>		
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js">
		</script>

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
					<span id="ajaxmsg"></span>
                    <nav class="primary m-btn-group toggle-buttons clearfix"> 
                        <br/>
						<ul id="sortable"> 
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
										?><li class="sortable" id=<?php echo $row['id'];?> > <a class="m-btn" style="width:550px" href='#'><?php echo $row['Main_Title'];?></a></li>
										<?php
									}
								}
							?>
							
                        </ul> 
                    </nav>
                </div>
				</br>
				<span><input type="submit" id="update" value="update" style="width:1157px"></span>
            </div>
        </div>
        <!-- End PORTFOLIO -->
       <?php require_once 'template/footer.php'; ?> 
		<script>
			$(document).ready(function(){
				var ids="";
				$("#sortable").sortable();
				$("#update").click(function(){
					var ids="";
					$(".sortable").each(function(){
						ids+=$(this).attr("id")+"&&";
					});
					
					
					$.ajax({
						type: "POST",
						url: "Updatingpriority.php",
						data: { id:ids },
						success: function(success){
										if(success=="true")
											{
												$("#ajaxmsg").html("</br>Priority Updated");
											}
										else
											{
												$("#ajaxmsg").html("</br>Priority Failed To Update");
											}
									}
						})
				
				
				
				});
			
			});
		</script>
    </body>
</html>
