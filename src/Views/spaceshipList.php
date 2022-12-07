<html>
    <?php
        require_once("Components/layout.php");
    
    ?>

    <body>
        <?php
            require_once("Components/header.php");
        
        ?>
        <main>
            <a href="?action=create">
               <button type="button">New report</button> 
            </a>

            <?php

                foreach($data["spaceship"] as $spaceship){
                    /* echo "{$spaceship->getId()}";
                    echo "{$spaceship->getSpaceship()}";
                    echo "{$spaceship->getCommander()}";
                    echo "{$spaceship->getMessage()}";
                    echo "{$spaceship->getSector()}";
                    echo "{$spaceship->getDate()}";*/
                    
                    
                    echo "
                    
                    <div class='card mb-3' style='max-width: 80%;' >
                        <div class='row g-0'>
                                <div class='col-md-4'>
                                    <img src='public/cohete.png' class='img-fluid rounded-start' alt='logo squid'>
                                </div>
                            <div class='col-md-8'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$spaceship->getSpaceship()}</h5>
                                    <p class='card-text'>{$spaceship->getCommander()}</p>
                                    <p class='card-text'>{$spaceship->getMessage()}</p>
                                    <p class='card-text'>{$spaceship->getSector()}</p>
                                    <p class='card-text'><small class='text-muted'>{$spaceship->getDate()}</small></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href='?action=delete&id={$spaceship->getId()}' onclick='ConfirmDelete()'><button type='button'>Delete</button></a>
                            <a href='?action=edit&id={$spaceship->getId()}'><button type='button'>Modify</button></a>
                        </div>
                    </div>
                    ";

                }
                ?>
            
        </main>

        <?php
            require_once("Components/footer.php");
    
        ?>
        <script src="js/index.js"></script>
    </body>
</html>