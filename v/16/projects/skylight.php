<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project: SkyLight Website Builder — geheimesite.nl | Robin Boers</title>

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
                <h1>Project: SkyLight</h1>
                <p>
                    Dit is mijn favoriete project. Ik werk er al aan sinds 2018 en ik ben er erg trots op. Het is een DIY website bouwer gemaakt met HTML, CSS, PHP en JavaScript. Het heeft ondersteuning voor third-party themes en is heel flexibel.
                </p>

                <p class="text-warning">SkyLight is geschreven voor PHP7 en werkt niet in PHP8!</p>

                <h2>Features</h2>

                <ul>
                    <li>Overzichtelijk dashboard</li>
                    <li>Logo</li>
                    <li>Analytics</li>
                    <li>Theming API</li>
                    <li>Blogfunctionaliteit</li>
                    <li>Meerdere standaard thema's</li>
                    <li>Menu's</li>
                    <li>Online updaten</li>
                    <li>Encrypted passwords</li>
                    <li>RSS feed</li>
                    <li>Custom CSS Styling</li>
                </ul>

                <h2>Installatie</h2>

                <p>
                    Je kan de beta downloaden op de releases page van de <a href="https://github.com/RobinBoers/SkyLight-Website-Editor">GitHub repo</a>.
                </p>

                <p>
                    Extract de ZIP op je webserver. Je kan het in de rootmap van je server plaatsen of in een subdirectory. Als je SkyLight in een subdirectory installeerd moet je wel het correcte path in de geavanceerde instellingen invullen na de installatie.
                </p>

                <p class="text-warning">
                    LET OP! Download de "Source code (zip)" en niet de package.zip! Package.zip is voor online updaten en werkt niet in zijn eentje.
                </p>

                <p>
                    Als je een developer preview wil testen, git clone from master:
                </p>

                <pre><code>git clone https://github.com/RobinBoers/SkyLight-Website-Editor</code></pre>

                <p>
                    Het standaard wachtwoord is root. Je kan het met elke username gebruiken. Ik heb namelijk geen account toegevoegd en plan ook niet dat te doen. De username wordt puur gebruikt om te laten zien wie welke post/comment heeft gepost, maar heeft geen andere effecten.
                </p>

                <p>
                    Zie de <a href="https://github.com/RobinBoers/SkyLight-Website-Editor/wiki/Installation-Guide">Installation Guide</a> voor meer informatie.
                </p>

                <h2>Hulp of suggesties</h2>

                <p>Wil je helpen met ontwikkelen of heb je een cool idee? Dan kan je me mailen op <a href="mailto:hello@geheimesite.nl">hello@geheimesite.nl</a> or een issue aanmaken op de <a href="https://github.com/RobinBoers/SkyLight-Website-Editor/issues/new">bugtracker</a>.</p>

                <h2>Handige links</h2>

                <ul>
                    <li><a href="https://github.com/RobinBoers/SkyLight-themelibrary">Theme Library</a></li>
                    <li><a href="https://robinboers.github.io/SkyLight-themelibrary/">Theme Picker</a></li>
                    <li><a href="https://robinboers.github.io/SkyLight-themelibrary/">Basetheme (voor themedevelopment)</a></li>
                    <li><a href="https://docs.geheimesite.nl/SkyLight-Website-Editor/">Wiki</a></li>
                    <li><a href="https://github.com/RobinBoers/SkyLight-Website-Editor/issues">Bugtracker</a></li>
                </ul>

            </section>
            <img class="w-full" src="/v/16/assets/images/projects/wb.png" alt="Screenshot" />
        </article>
    </main>
    <footer class="page-footer">
        &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en Elixir programmeur sinds 2017.
    </footer>
</body>

</html>