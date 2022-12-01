<html>


    <body>
        <main>
            <?php
                foreach($data["spaceship"] as $spaceship){
                    echo "{$spaceship->spaceship}";
                    echo "{$spaceship->message}";
                }
            ?>
        </main>


    </body>
</html>