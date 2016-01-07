<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DuraTron</title>
        <?php require_once 'template/commonJS.php'; ?>

    </head>

    <body background="images/6.png"  style=" background-attachment:fixed;">
        <?php require_once 'template/header.php'; ?>
        <div class="row-fluid section" id="about">
            <div class="container"> 

                <div class="explain" style="margin-left:400px">
                    <h2 style="color:black">Inquiry</h2>
						<form action="#" method="post" id="contact-form" >
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
                                    <div class="field span8">
                                        <input type="text" value="" class="input-text m-wrap m-ctrl-large" id="firstName" name="firstName" placeholder="Name"/>
                                    </div>
                                    <div class="field span8">
                                        <input type="text" value="" class="input-text m-wrap m-ctrl-large" id="companyName" name="companyName" placeholder="Company Name"/>
                                    </div>
                                    <div class="field span8">
                                        <input type="text" value="" class="input-text m-wrap m-ctrl-large" id="address" name="address" placeholder="Address"/>
                                    </div>
                                    <div class="field span8">
                                        <input type="text" value="" class="input-text m-wrap m-ctrl-large" id="email" name="email" placeholder="Email Address"/>
                                    </div>
                                    <div class="field span8">
                                        <input type="text" value="" class="input-text m-wrap m-ctrl-large" id="city" name="city" placeholder="City"/>
                                    </div>
                                    <div class="field span8">
                                        <input type="text" value="" class="input-text m-wrap m-ctrl-large" id="country" name="country" placeholder="Country"/>
                                    </div>
                                    <div class="field span8">
                                        <input type="text" value="" class="input-text m-wrap m-ctrl-large" id="mobile" name="mobile" placeholder="Telephone/mobile"/>
                                    </div>
                                    <div class="field span8">
                                        <textarea  class="input-textarea m-wrap m-ctrl-large" id="message" name="message" placeholder="Your Message" ></textarea>
                                    </div>
                                    <div class="field span8">
                                        <input type="submit" class="m-btn" value="Submit" />
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
