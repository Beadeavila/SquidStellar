<html>
    <?php
        require_once("Components/layout.php");
        require_once("Components/header.php");
    ?>

    <body>

        <main>
            <a class="addReportButton" href="?action=create">
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
                    
                    <div class='card mb-3'>
                        <div class='row g-0'>
                                <div class=' imgContainer col-md-4'>
                                    <img src='public/images/squidAvatar.svg' class='img-fluid rounded-start' alt='logo squid'>
                                </div>
                            <div class='dataContainer col-md-8'>
                                <div class='spaceshipData'>
                                    <h2 class='card-title'>{$spaceship->getSpaceship()}</h2>
                                    <p class='card-text spaceshipCommander'>{$spaceship->getCommander()}</p>
                                    <p class='card-text spaceshipMessage'>{$spaceship->getMessage()}</p>
                                    <p class='card-text spaceshipDate'><small class='text-muted'>{$spaceship->getDate()}</small></p>
                                </div>
                                <div class='spaceshipActions'>
                                    <p class='card-text spaceshipSector'>{$spaceship->getSector()}</p>
                                    <div>
                                    <a href='?action= delete&id={$spaceship->getId()}'><button onclick='confirmDelete()' type='button' >Delete</button></a>
                                    <a href='?action=edit&id={$spaceship->getId()}'><button type='button'>Modify</button></a>
                                    </div>
                                </div>
                            </div>
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