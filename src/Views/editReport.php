<?php
        require_once("Components/layout.php");
        require_once("Components/header.php");

?>
<html>
<body>
        <main>
                <h2>Modify report</h2>
                <a href="./index.php"><button type="button" id="button-cancel">Cancel</button></a>

                        <form action='?action=update&id=<?php echo $data["spaceship"]->getId() ?>' method="post">
                        <div>
                                <span>Spaceship</span>
                                <input type="text" name="spaceship" required value="<?php echo $data["spaceship"]->getSpaceship() ?>">
                        </div>
                        <div>
                                <span>Commander</span>
                                <input type="text" name="commander" required value="<?php echo $data["spaceship"]->getCommander() ?>">
                        </div>
                        <div>
                                <span>Message</span>
                                <textarea type="text" name="message"><?php echo $data["spaceship"]->getMessage() ?></textarea>
                        </div>
                        <div>
                                <span>Sector</span>
                                <input class="form-control" type="text" name="sector" required value="<?php echo $data["spaceship"]->getSector() ?>">
                        </div>
                        <div>
                                <input type="submit" value="Modify report">
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
