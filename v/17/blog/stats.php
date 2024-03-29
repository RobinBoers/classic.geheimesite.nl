<!-- Trick tailwind to include footnotes and highlight code blocks when building. This comment containing those words makes it happen :) -->
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog Statistics — Webdevelopment-En-Meer | Robin Boers</title>

        <link rel="stylesheet" href="/v/17/assets/css/main.css" title="default" />
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3/dist/chart.min.js"></script>

        <script>
            String.prototype.toRGB = function() {
                var hash = 0;
                if (this.length === 0) return hash;
                for (var i = 0; i < this.length; i++) {
                    hash = this.charCodeAt(i) + ((hash << 5) - hash);
                    hash = hash & hash;
                }
                var rgb = [0, 0, 0];
                for (var i = 0; i < 3; i++) {
                    var value = (hash >> (i * 8)) & 255;
                    rgb[i] = value;
                }
                return `rgb(${rgb[0]}, ${rgb[1]}, ${rgb[2]})`;
            }

            let lastPartOfURL = function(str) {
                let parts = str.split('/');
                let lastSegment = parts.pop() || parts.pop();

                return lastSegment;
            }
        </script>

        <?php
            include "connection.php";

            $year = $_GET['y'];
            $month = $_GET['m'];
            $total = isset($_GET['total']);

            if($year == "") $year = date("Y");
            if($month == "") $month = date("m");

            $selected_month = "$year-$month-01";
            $monthly_query = "SELECT * FROM viewcount WHERE month='$selected_month'";
            $total_query = "SELECT * FROM viewcount";

            if($total) {
                $query = $total_query;
            } else {
                $query = $monthly_query;
            }

            $result = $conn->query($query);

            $data = new stdClass();
            $monthly_views = 0;
            $total_views = 0;

            if($result->num_rows !== 0) { while($row = $result->fetch_object()) {
                    $monthly_views += $row->views;

                    $url = $row->url;
                    $data->$url += $row->views;
            } }

            $total_query = "SELECT * FROM viewcount";
            $result = $conn->query($total_query);

            if($result->num_rows !== 0) { while($row = $result->fetch_object()) {
                $total_views += $row->views;
            } }

            // Add views from old Blogger-based blog
            $total_views += 3804;

            $data = json_encode($data);

            function statsURLForMonth($month) {
                return explode("?", $_SERVER['REQUEST_URI'])[0] . "?m=" . date("m", $month) . "&y=" . date("Y", $month);
            }

            function statsURLForTotal() {
                return explode("?", $_SERVER['REQUEST_URI'])[0] . "?total";
            }
        ?>
    </head>
    <body>
        <a class="skip-nav" href="#content">Skip navigation</a>
        <header class="page-header">
            <p class="title"><a href="/v/17/en/">Robin Boers</a></p>

            <img src="/v/17/assets/images/ui/menu.svg" alt="menu button" class="menu-button" hidden />

            <nav>
                <ul class="menu">
                    <li><a href="/v/17/en/">Home</a></li>
                    <li><a href="/v/17/en/about">About me</a></li>
                    <li><a href="/v/17/en/projects">Projects</a></li>
                    <li><a href="/v/17/en/books">Books</a></li>
                    <li><a href="https://blog.geheimesite.nl/en">Blog</a></li>
                    <li><a href="/v/17/en/more">More</a></li>
                </ul>
            </nav>
        </header>
        <main id="content" class="page-content mt-0 md:mt-6">
            <section>
                <h1 class="mb-0">Blog statistics</h1>
                <p>
                    <?php 
                        if(!$total) {
                            ?>
                                <small class="supplement">
                                    (<a href='<?= statsURLForTotal() ?>'
                                    >switch to total view</a>)
                                </small>
                            <?php
                        } else {
                            ?>
                                <small class="supplement">
                                    (<a href='<?= statsURLForMonth(strtotime($selected_month)) ?>'
                                    >switch to monthly view</a>)
                                </small>
                            <?php
                        }
                    ?>
                </p>

                <p>
                    Showing stats for <span class="bold">Webdevelopment-En-Meer</span> from <?php if(!$total) { echo date("$year-$month"); } else { echo "all time"; } ?> using data from PhpMyAdmin.
                </p>

                <p>
                    Views this month: <span class="bold"><?php if(!$total) { echo $monthly_views; } else { echo "??"; } ?></span><br>
                    Total views: <span class="bold"><?= $total_views ?></span> 
                </p>

                <p class="supplement">
                    <?php 
                        $previous_month = 
                            strtotime('-1 month', strtotime($selected_month));
                    ?>

                    <a href='<?= statsURLForMonth($previous_month) ?>'>
                        ← Previous month
                    </a>

                    <?php 
                        $current_month = date("Y-m-d");

                        if($selected_month != $current_month) {
                            $next_month = 
                                strtotime('+1 month', strtotime($selected_month));

                            ?>
                             | <a href='<?= statsURLForMonth($next_month) ?>'>
                                Next month →
                               </a>
                            <?php
                        }
                    ?>
                </p>

                <h3>Views per post</h3>
            </section>
            
            <div class="relative max-w-sm mx-auto my-5">
                <canvas class="pieChart">
                    <p>Your browser doesn't seem to support rendering to a canvas :(</p>

                    <noscript>
                        Please enable JS for my fancy diagram to wo
                    </noscript>

                    <code>
                        <?= $data ?>
                    </code>
                </canvas>
            </div>

            <script defer>
                let json = <?= $data ?>;
                let urls = [];
                let views = [];
                let colors = [];

                Object.keys(json).forEach(url => {
                    urls.push(lastPartOfURL(url));
                    views.push(json[url]);
                    colors.push(url.toRGB());
                });

                const data = {
                    labels: urls,
                    datasets: [{
                        label: 'Views per post',
                        data: views,
                        backgroundColor: colors,
                        hoverOffset: 4
                    }]
                };

                const config = {
                    type: 'pie',
                    data: data,
                    responsive: true,
                    options: {
                        plugins: {
                            legend: {
                                display: false,
                                position: 'bottom',
                            }
                        }
                    }
                };

                const ctx = document.querySelector('.pieChart').getContext('2d');
                const pieChart = new Chart(ctx, config);
            </script>

        </main>

        <footer class="page-footer">
            Created by Robin Boers using <a href="https://www.chartjs.org">Chart.js</a>, which is licensed as <a href="https://opensource.org/licenses/MIT">MIT</a>.
        </footer>
    </body>
</html>
