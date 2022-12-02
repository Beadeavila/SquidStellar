<html>


    <body>
        <main>
            <?php
                foreach($data["spaceship"] as $spaceship){
                    echo "{$spaceship->getId()}";
                    echo "{$spaceship->getSpaceship()}";
                    echo "{$spaceship->getCommander()}";
                    echo "{$spaceship->getMessage()}";
                    echo "{$spaceship->getSector()}";
                    echo "{$spaceship->getDate()}";
                
                }
            ?>
        </main>


    </body>
</html>