<?php
        require_once("Components/layout.php");
        require_once("Components/header.php");

?>

<html>
<body>
        <main>
                <div class="formContainer">          
                        <h2 class="formTitle">New report</h2>
                        <a class="cancelButton" href="./index.php"><button type="button" id="button-cancel">Cancel</button></a>

                        <img src='public/images/border-yutani-top.svg'>


                                <form action='?action=store' method="post">
                                <div>
                                        <span>Spaceship</span>
                                        <input type="text" name="spaceship" required placeholder="Here goes the name of the ship">
                                </div>
                                <div>
                                        <span>Commander</span>
                                        <input type="text" name="commander" required placeholder="Here goes the name of the commander">
                                </div>
                                <div>
                                        <span>Message</span>
                                        <textarea area-label="With textarea" type="text" name="message" required placeholder="Here goes the message"></textarea>
                                </div>
                                <div>
                                        <span>Sector</span>
                                        <input class="form-control" type="text" name="sector" required placeholder="Here goes the sector name">
                                </div>
                                <div>
                                        <input type="submit" value="Create report">
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