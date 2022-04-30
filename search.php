<?php

    if(isset($_GET["term"])) {
        $term = $_GET["term"];
    } else {
        exit("You must enter a search term.");
    }

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

                            <input type="text" class="searchBox" name="term">
                            <button class="searchButton">
                                <img src="images/search.png">
                            </button>

                        </div>

                    </form>
                        

                </div>

            </div>

            <div class="tabsContainer">
                <ul class="tabList">
                    <li>
                        <a href='<?php echo "search.php?term=$term"; ?>'>Sites</a>
                    </li>
                    <li>
                        <a href='<?php echo "search.php?term=$term"; ?>'>Images</a>
                    </li>
                </ul>
            </div>

        </div>

    </div> 
</body>
</html>