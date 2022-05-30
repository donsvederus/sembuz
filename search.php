<?php
include("config.php");
include("classes/SiteResultsProvider.php");

    $term = isset($_GET["term"]) ? $_GET["term"] : exit("You must enter a search term.");

    $type = isset($_GET["type"]) ? $_GET["type"] : "sites";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="image" href="images/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="wrapper">

        <div class="header">

            <div class="headerContent">

                <div class="logoContainer">

                    <a href="index.php">
                        <img src="images/sembuz-logo-800x500.jpg" alt="Logo">
                    </a>

                </div>

                <div class="searchContainer">

                    <form action="search.php" method="GET">
                        <div class="searchBarContainer">
                            <input type="text" class="searchBox" name="term" value="<?php echo $term; ?>">
                            <button class="searchButton">
                                <img src="images/search.png">
                            </button>
                        </div>
                    </form>

                </div>

            </div>

            <div class="tabsContainer">

                <ul class="tabList">

                    <li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
                        <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
                        Sites
                        </a>
                    </li>

                    <li class="<?php echo $type == 'images' ? 'active' : '' ?>">
                        <a href='<?php echo "search.php?term=$term&type=images"; ?>'>
                        Images
                        </a>
                    </li>

                </ul>  

            </div>
        </div>

        <div class="mainResultsSection siteResults">

            <?php
                $resultsProvider = new SiteResultsProvider($con);

                

                $numResults = $resultsProvider->getNumResults($term);

                echo "<p class='resultsCount'>$numResults results found</p>";

                echo $resultsProvider->getResultsHtml(1, 20, $term);
            ?>

        </div>


    </div> 
</body>
</html>