<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <header>
            <div class="container">
                <nav>
                    <a href="#">
                        <img src="images/logo.png" style="width: 200px;">
                    </a>
                    <ul>
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="pages/PostOffer.php">Post Offers</a></li>
                        <li><a href = "pages/PlaceEvents.php">Place Events</a></li>
                        <li><a href = "pages/Pricing.php">Pricing</a></li>
                    </ul>
                    <div>
                        <form action="php/Logout.inc.php" method="post">
                            <button name="logout_in" class="logout-btn" name="logout_submit">Logout</button>
                        </form>
                    </div>
                    
                </nav>
            </div>
        </header>

    </body>
</html>