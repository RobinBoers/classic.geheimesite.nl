<!DOCTYPE html>
<html>
    <head>
        <title>
            Start - geheimesite.nl | Robin Boers
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include "php/header_nl.php";
        ?>
        <main>
            <div class="w3-row">
                <div class="w3-col l8 s12">
                    <section class="w3-container">
                        <h2>Welkom op geheimesite.nl!</h2>
                        <p>Hoi, ik ben Robin en dit is mijn website.<br>Je kunt hier inloggen met een geheimesite-account, nindo-account of GeheimAgent-account. Verder kun je mijn projecten bekijken.</p>
                    </section>
                    <hr>
                    <section class="w3-container">
                        <?php
                            include "php/blog.php";
                        ?>
                    </section><hr>
                    <section>
                        <div class="w3-container">
                            <h3>Projecten</h3>
                        </div>
                        <div class="w3-row-padding">
                            <div class="w3-col l6 m6 w3-margin-bottom">
                              <div class="w3-display-container">
                                <a href="/projects/wb.php"><div class="w3-display-topleft w3-black w3-padding">Website bouwer</div>
                                <img src="/images/projects/wb.png" alt="House" style="width:100%"></a>
                              </div>
                            </div>
                            <div class="w3-col l6 m6 w3-margin-bottom">
                              <div class="w3-display-container">
                                <a href="/projects/platformgame.php"><div class="w3-display-topleft w3-black w3-padding">Platform Game</div>
                                <img src="/images/projects/platformgame.png" alt="House" style="width:100%"></a>
                              </div>
                            </div>
                        </div>
                        <div class="w3-row-padding">
                            <div class="w3-col l6 m6 w3-margin-bottom">
                              <div class="w3-display-container">
                                <a href="/projects/websites/groendoenerij.php"><div class="w3-display-topleft w3-black w3-padding">Groendoenerij</div>
                                <img src="/images/projects/groendoenerij.png" alt="House" style="width:100%"></a>
                              </div>
                            </div>
                            <div class="w3-col l6 m6 w3-margin-bottom">
                              <div class="w3-display-container">
                                <a href="/projects/websites/sterrenkruid.php"><div class="w3-display-topleft w3-black w3-padding">Sterrenkruid</div>
                                <img src="/images/projects/sterrenkruid.png" alt="House" style="width:100%"></a>
                              </div>
                            </div>
                        </div>
                        <div class="w3-row-padding">
                            <div class="w3-col l6 m6 w3-margin-bottom">
                              <div class="w3-display-container">
                                <a href="/projects/secretsitecode.php"><div class="w3-display-topleft w3-black w3-padding">SecretSiteCode</div>
                                <img src="/images/projects/secret_site_code.png" alt="House" style="width:100%"></a>
                              </div>
                            </div>
                            <div class="w3-col l6 m6 w3-margin-bottom">
                              <div class="w3-display-container">
                                <a href="https://geheimesite.nl/website/nindo"><div class="w3-display-topleft w3-black w3-padding">Nindo</div>
                                <img src="/images/projects/nindo.png" alt="House" style="width:100%"></a>
                              </div>
                            </div>
                        </div>
                        <div class="w3-row-padding">
                            <div class="w3-col l6 m6 w3-margin-bottom">
                              <div class="w3-display-container">
                                <a href="/projects/cmd.php"><div class="w3-display-topleft w3-black w3-padding">CMD</div>
                                <img src="/images/projects/cmd.png" alt="House" style="width:100%"></a>
                              </div>
                            </div>
                            <div class="w3-col l6 m6 w3-margin-bottom">
                              <div class="w3-display-container">
                                <a href="/projects/os.php"><div class="w3-display-topleft w3-black w3-padding">OS</div>
                                <img src="/images/projects/os.png" alt="House" style="width:100%"></a>
                              </div>
                            </div>
                        </div>
                        <div class="w3-row-padding">
                            <div class="w3-col l6 m6 w3-margin-bottom">
                              <div class="w3-display-container">
                                <a href="/projects/websites/hetgg.php"><div class="w3-display-topleft w3-black w3-padding">Het GG</div>
                                <img src="/images/projects/hetgg.png" alt="House" style="width:100%"></a>
                              </div>
                            </div>
                            <div class="w3-col l6 m6 w3-margin-bottom">
                              <div class="w3-display-container">
                                <a href="/projects/file_eXplorer.php"><div class="w3-display-topleft w3-black w3-padding">File eXplorer</div>
                                <img src="/images/projects/File_eXplorer.png" alt="House" style="width:100%"></a>
                              </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="w3-col l4">
                    <?php 
                        include "php/sidebar_nl.php";
                    ?>
                </div>
            </div><br>
        </main>
        <footer class="pagefooter w3-center">
            <p>Gemaakt door Robin Boers. Beginnend Webdesigner en programmeur sinds 2017. Gemaakt met HTML5 en CSS3</p>
        </footer>
    </body>
</html>