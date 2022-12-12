<?php
        require_once("Components/layout.php");
        require_once("Components/header.php");

?>
<html>
<body>
        <main>
                <div class="formContainer">  
                        <h2 class="formTitle">Modify report</h2>
                        <a class="cancelButton" href="./index.php"><button type="button" id="button-cancel">Cancel</button></a>

                        <img src='public/images/border-yutani-top.svg'>

                                <form action='?action=update&id=<?php echo $data["spaceship"]->getId() ?>' method="post">
                                        <div class = "formReportContainer">
                                                <div class="formDataContainer">
                                                        <span>Spaceship</span>
                                                        <input type="text" name="spaceship" style="color:#91becb" required value="<?php echo $data["spaceship"]->getSpaceship() ?>">
                                                        <span>Commander</span>
                                                        <input type="text" name="commander" style="color:#91becb" required value="<?php echo $data["spaceship"]->getCommander() ?>">
                                                        <span>Message</span>
                                                        <textarea type="text" name="message" style="color:#91becb"><?php echo $data["spaceship"]->getMessage() ?></textarea>
                                                        <span>Sector</span>
                                                        <input class="form-control" type="text" name="sector" style="color:#91becb" required value="<?php echo $data["spaceship"]->getSector() ?>">
                                                </div>
                                                <div class= "formImgContainer"><img src='public/images/squidAvatar.svg' alt='logo squid'></div>
                                        </div>
                                        <div class="formButtonContainer">
                                                <input type="submit" value="Modify report">
                                                <input type="reset" value="Reset report">
                                        </div>
                                </form>   
                        <img src='public/images/border-yutani.svg'>
                </div>        
        </main>

        <?php

        require_once("Components/footer.php");

        ?>
</body>
</html>
