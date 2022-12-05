<?php
        require_once("Components/layout.php");
        require_once("Components/header.php");

?>

<html>
<body>
        <main>
                <h2>New report</h2>
                <a href="./index.php"><button type="button" id="button-cancel">Cancel</button></a>

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
                        <div>
                                <img src="public/cohete.png">
                                
                        </div>
                        
        </main>

        <?php
      
        require_once("Components/footer.php");

        ?>
</body>
</html>