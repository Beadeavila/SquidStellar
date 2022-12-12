![SQUID GIF 1 photorise](https://user-images.githubusercontent.com/116545851/207058098-3db717bc-91a9-4fd5-8470-8ac078714f37.gif)

## Project name: 
SquidStellar (A SquidCoders project)
***

## Description:

Following the previous project SquidCoders, we maintained the name SQUID in this new project but change it to Squid Stellar.

Our goal was to build a CRUD (Create, Read,Update and Delete) project in PHP and MySQL using the MVC (Model-View-Controller) pattern, where you can:

* Find a Homepage where you can read all the messages received from different fictional spaceships 🚀.
* Create a new report by pressing the New Report button: a  HTML form appears where you can upload reports from your spaceship to our space (data)base.
* Modify or delete reports by simply clicking a button.
* In case of clicking on modify,an HTML form to modify reports appears on screen loading the already uploaded data from the database.
* The  whole project is designed for desktop view exclusively.
***

## Group members:

  * Alesia Baldeon https://github.com/AlesiaCoder
  * Beatriz de Avila https://github.com/Beadeavila
  * Lola Garcia https://github.com/LolaGM 
  * Leidy Villamil https://github.com/leidyvi
  * Natalia Palomo https://github.com/Nataliaplm  
***

## Screenshots:

* Figma Sketch <a href="https://www.figma.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/figma/figma-icon.svg" alt="figma" width="40" height="40"/> </a> 

![Sketch captura](https://user-images.githubusercontent.com/116545851/205132984-f4f00e36-69f5-4a9e-88dd-d680617aed73.PNG)

* Figma project <a href="https://www.figma.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/figma/figma-icon.svg" alt="figma" width="40" height="40"/> </a> 

![image](https://user-images.githubusercontent.com/116545731/207113666-3a13de58-2794-4202-b543-cf73c079639b.png)

## Stacks:

  * Frontend: 
  <p align="left"><a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a>
   <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a>
   <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a></p>
  
  * Backend: 
  <p align="left"> <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> </p>
  
  * Libraries used:
  <p align="left"> <a href="https://getbootstrap.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg" alt="bootstrap" width="40" height="40"/> </a></p>
  
  * Other technologies used:
<p align ="left"><a href="https://git-scm.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/> </a> 
<a href="https://code.visualstudio.com/" target="_blank" rel="noreferrer"> <img src="https://user-images.githubusercontent.com/116545851/206753577-40777644-bb10-428b-ae9c-597a54a58df6.png" alt="visual studio" width="40" height="40"/></a> 
<a href="https://www.adobe.com/in/products/illustrator.html" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/adobe_illustrator/adobe_illustrator-icon.svg" alt="illustrator" width="40" height="40"/> </a> 
</p>

***
## Tests:

* To execute these tests use this command on Terminal > Git Bash from *Visual Studio Code*: <br>
$ vendor/bin/phpunit tests/FleetTest.php


* Results: OK (5 tests, 5 assertions) <br>
![tests results](https://user-images.githubusercontent.com/116545851/207085637-050ee5e2-1d06-4603-ad3d-825da01ce144.PNG)

***

## Methodology:

* Agile with SCRUM in *Mob and Pair programming*

***

## Next steps:

* Implement responsive view 
* Add a video background
* Add a sound effect

***

## How to install:

Requirements: 

* Visual Studio Code (or similar code editor)
* PHP
* MySQL
* Composer ⬇️ Download COMPOSER (Dependency manager for PHP) from https://getcomposer.org/ on the Download section

Please follow these instructions:

* Open Visual Studio Code and press new Terminal + Git Bash 
* Run Composer-Setup.exe. Choose Installation for all users
* Go back to Visual Studio Code in New Terminal and write:
* $ git clone https://github.com/Beadeavila/SquidStellar.git
* $ composer install
* Create your local database in phpmyadmin (MySQL) with the name *stellarcommander*
* import SQL table from route: public/database/reports.sql
