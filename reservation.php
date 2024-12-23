<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel = "stylesheet" href = "/css/style-reservation.css">
</head>
<body>
    <div class = "page">
        <div class = "left">
            <div class = "middle">
                <h2 class = "higher">Book a Table</h2>
                <h1 class = "lower">Reservation</h1>
            </div>
            <div class = "navbar">
                <div class = "inner">
                    <div class = "icon">
                        <img class = "icon-image" src = "img/icon.png">
                    </div>
                    <div class = "menu">
                        <button class = "menu-button" onclick="window.location.href = 'menu.html';">Menu</button>
                        <button class = "restaurant-button" onclick="window.location.href = 'index.html';">Restaurant</button>
                        <button class = "contact-button">Contact</button>
                    </div>
                    <button class = "navbar-button" onclick="window.location.href = 'reservation.php';">BOOK A TABLE</button>
                </div>
            </div>
        </div>
        <div class = "right">
            <div class = "main">
                <div class = "upper-text">Book a table</div>
                <div class = "lower-text">Our dining atmosphere is casual and comfortable. To reflect this environment, we maintain a formal dress.</div>
                <form class = "form" id = "form" method = "get">
                    <div class = "form-item">
                        <label class = "form-label" for = "name">Name</label><br>
                        <input class = "form-input" type = "text" id = "name" name = "name" pattern="[A-Za-z]+" placeholder = "Name" required><br>
                    </div>
                    <div class = "form-item">
                        <label class = "form-label" for = "guests">Number of guests</label><br>
                        <input class = "form-input" type = "text" id = "guests" name = "guests" pattern="([1-9]|1[0-9]|20)" placeholder = "Number from 1 to 20" required><br>
                    </div>
                    <div class = "datetime">
                        <div class = "form-item">
                            <label class = "form-label" for = "date">Date</label><br>
                            <input class = "form-input-datetime" type = "text" id = "date" name = "date" placeholder="DD.MM.YYYY" pattern="^(3[01]|[12][0-9]|0?[1-9]).(1[0-2]|0?[1-9]).20[2-3][0-9]$" required><br>
                        </div>
                        <div class = "form-item">
                            <label class = "form-label" for = "time">Time</label><br>
                            <input class = "form-input-datetime" type = "text" id = "time" name = "time" placeholder="HH:MM" pattern="^(1[2-9]|2[0-3]):[0-5][0-9]" required><br>
                        </div>
                    </div>
                </form>
                <button class = "confirm-button" type = "submit" form = "form">BOOK A TABLE</button>
                <div class = "message">
                    <?php
                    if ($_GET["name"] != "")
                    {
                        echo '<span style = "color: #FFFFFF; width: 100%; text-align: center; font-family: ChillaxReg; font-size: 18px; margin-top: 20px;">Greetings, ' . $_GET["name"] . ', thank you for making a reservation. Your table for ' . $_GET["guests"] . ' person';
                        if ($_GET["guests"] > 1)
                        {
                            echo 's';
                        }
                        echo '<br> will be awaiting you on ' . $_GET["date"] . ' at ' . $_GET["time"] . '.</span>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>