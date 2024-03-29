<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Music: my favorite tracks — geheimesite.nl | Robin Boers</title>
        
        <link rel="stylesheet" href="/v/16/assets/css/main.css" title="default" />
        <script defer src="/v/16/assets/js/menu.js"></script>

        <style>
            :root {
                --foreground: 34, 35, 35;
                --background: 240, 240, 246;
                --primary: 40, 213, 118;
            }

            @media (prefers-color-scheme: dark) {
                :root {
                    --foreground: 240, 240, 246;
                    --background: 34, 35, 35;
                    --primary: 40, 213, 118;
                }
            }
            
            html {
                background: 
                    linear-gradient(to right, lightskyblue, lime),
                    url("/assets/images/content/cassettes.jpg");
                background-blend-mode: hard-light, normal;
                background-position: center;
                background-size: 120%;
            }

            body {
                background: 
                    linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
            }

            .music-list {
                counter-reset: item;
                padding: 0;
                max-width: 740px;
                margin: 0 auto;
            }

            .music-list li {
                display: flex;
                gap: 0.5rem;
            }

            .music-list li h3.new::after {
                content: "new";
                line-height: 2px !important;
                font-size: 0.875rem;
                line-height: 1.25rem;
                border-radius: 0.375rem;
                padding: 0.125rem;
                margin-left: 0.25rem;
                vertical-align: middle;
                background-color: rgba(var(--primary), 0.2);
                color: rgb(var(--primary));
            }

            .music-list li .track-artist {
                font-size: 0.875rem;
                line-height: 1.25rem;
            }

            .music-list li div {
                padding-top: 0.375rem;
                padding-bottom: 0.375rem;
            }

            .music-list li div * {
                display: inline;
            }

            .music-list li::before {
                content: counter(item);
                counter-increment: item;
                font-size: 3rem;
                line-height: 1;
                font-weight: 700;
                vertical-align: middle;
                font-family: var(--font-sans);
            }
        </style>
    </head>
    <body class="text-background dark:text-foreground h-full">
        <a class="skip-nav" href="#content">Skip navigation</a>
        <header class="flex flex-col sm:flex-row-reverse items-center justify-around">
            <p class="title"><a href="/v/16/en/">Robin Boers</a></p>

            <nav>
                <a href="/v/16/en/" class="text-background dark:text-foreground">❮ Back</a>
            </div>
        </header>

        <main id="content" class="page-content text-foreground bg-background pt-[50px] pb-[27px] border-x-0 border-solid border-t-[7px] border-primary">
            <article>
                <section>
                    <h1>Music</h1>

                    <p>
                        These are my favorite tracks ever. <a href="https://open.spotify.com/playlist/6vsurOP4dQ6ViTeOegLwgl?si=e0a3a51c6a8843bc">Stream 'em on Spotify</a>. Download 'em as using <a href="https://github.com/spotdl/spotify-downloader"><code>spotdl</code></a>.
                    </p>
                </section>

                <hr class="my-5 border-none">

                <h2 hidden>
                    cool underrated garbage
                </h2>

                <ol class="music-list">
                    <li>
                        <div>
                            <h3 class="track-title">Afraid of the dark</h3>
                            <p class="track-artist">Chef'Special</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Lemon Tree</h3>
                            <p class="track-artist">Fools Garden</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Demons</h3>
                            <p class="track-artist">Imagine Dragons</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">7 Years</h3>
                            <p class="track-artist">Lukas Graham</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Symphony</h3>
                            <p class="track-artist">Clean Bandit <span class="supplement">&</span> Zara Larsson</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">All I Wanna Do</h3>
                            <p class="track-artist">Martin Jensen</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Shower</h3>
                            <p class="track-artist">Becky G</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title new">Impossible</h3>
                            <p class="track-artist">James Arthur</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Cover Me In Sunshine</h3>
                            <p class="track-artist">P!nk <span class="supplement">&</span> Willow Sage Hart</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title new">Zij Wil Mij</h3>
                            <p class="track-artist">FLEMMING</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title new">Vluchtstrook</h3>
                            <p class="track-artist">Kris Kross Amsterdam <span class="supplement">&</span> Antoon <span class="supplement">&</span> Sigourney K</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">The Ocean</h3>
                            <p class="track-artist">Mike Perry <span class="supplement">&</span> SHY Martin</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">abcdefu</h3>
                            <p class="track-artist">GAYLE</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">traitor</h3>
                            <p class="track-artist">Olivia Rodrigo</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Bad Habits</h3>
                            <p class="track-artist">Ed Sheeran</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Polaroid</h3>
                            <p class="track-artist">Jonas Blue <span class="supplement">&</span> Liam Payne <span class="supplement">&</span> Lennon Stella</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Legends Never Die</h3>
                            <p class="track-artist">League of Legends <span class="supplement">&</span> Against The Current</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Beggin'</h3>
                            <p class="track-artist">Måneskin</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Hey</h3>
                            <p class="track-artist">FÄIS <span class="supplement">&</span> Afrojack</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title new">Ms. Jackson</h3>
                            <p class="track-artist">Outkast</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Dangerous</h3>
                            <p class="track-artist">David Guetta <span class="supplement">&</span> Sam Martin</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Rockabye</h3>
                            <p class="track-artist">Clean Bandit <span class="supplement">&</span> Sean Paul <span class="supplement">&</span> Anne-Marie</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Hey Brother</h3>
                            <p class="track-artist">Acicii</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Yours</h3>
                            <p class="track-artist">Andrew Huang</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Someone To You</h3>
                            <p class="track-artist">BANNERS</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title new">Heat Waves</h3>
                            <p class="track-artist">Glass Animals</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">Young, Wild and Free</h3>
                            <p class="track-artist">Snoop Dogg <span class="supplement">&</span> Wiz Khalifa <span class="supplement">&</span> Bruno Mars</p>
                        </div>
                    </li>
                    <li>
                       <div>
                            <h3 class="track-title">Champagne & Sunshine</h3>
                            <p class="track-artist">PLVTINUM <span class="supplement">&</span> Tarro</p>
                       </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title new">Remember</h3>
                            <p class="track-artist">Becky Hill <span class="supplement">&</span> David Guetta</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3 class="track-title">A Drop In The Ocean</h3>
                            <p class="track-artist">Ron Pope</p>
                        </div>
                    </li>
                </ol>
            </article>
        </main>

        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en Elixir programmeur sinds 2017.
        </footer>
    </body>
</html>
