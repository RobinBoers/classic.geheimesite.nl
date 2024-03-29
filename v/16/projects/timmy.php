<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Project: AutoReddit Bot "Timmy" — geheimesite.nl | Robin Boers</title>

        <link rel="stylesheet" href="/v/16/assets/css/main.css" title="default" />
        <script defer src="/v/16/assets/js/menu.js"></script>
    </head>
    <body>
        <a class="skip-nav" href="#content">Skip navigation</a>
        <header class="pageheader">
            <p class="title"><a href="/v/16/">Robin Boers</a></p>

            <img src="/v/16/assets/images/menu.svg" alt="menu button" class="menu-button" hidden />
            <nav>
                <ul class="menu">
                    <li><a href="/v/16/">Home</a></li>
                    <li><a href="/v/16/over-mij">Over mij</a></li>
                    <li><a href="/v/16/projecten">Projecten</a></li>
                    <li><a href="/v/16/boeken">Boeken</a></li>
                    <li><a href="https://blog.geheimesite.nl">Blog</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1>Project: AutoReddit Bot “Timmy”</h1>
                    <p>
                        Dit is een bot die ik weer voor de discordserver van mij en mijn vrienden heb gemaakt. Deze bot kan content van een subreddit halen op een zelf gekozen interval. Hiermee kan je bijvoorbeeld automatisch memes posten in een channel.
                    </p>
                    <p>
                        De bot werkt zo: je opent het uitvoerbare bestand, en dan ga je naar <code class="bold">localhost:5665?token=123456</code> in je browser. Je krijgt dan een controlpanel waar je een server, channel, subreddit en interval moet invoeren. Als je dan op start klikt, begint de bot met posten. In de demo executable die ik heb gepubliceerd zit alleen een voorbeeld bot. Maar je kan de code downloaden en de config veranderen zodat ie met jouw server werkt. 
                    </p>
                    <p>
                        <a href="https://github.com/RobinBoers/Timmy">Download op GitHub</a>
                    </p>
                </section>
                <img class="w-full" src="/v/16/assets/images/projects/timmy.png" alt="Screenshot" />
            </article>
        </main>
        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en Elixir programmeur sinds 2017.
        </footer>
    </body>
</html>