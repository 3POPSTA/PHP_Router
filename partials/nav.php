<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            <?php 
                if($_SERVER["REQUEST_URI"] === "/") echo "Home";
                else if( $_SERVER["REQUEST_URI"] === "/about") echo "About";
                else if( $_SERVER["REQUEST_URI"] === "/contact") echo "Contact";
            ?>
        </title>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <nav class="navbar container">
            <a href="/" class="logo">LOGO</a>
            <input type="checkbox" id="toggler" />
            <label for="toggler"><i class="ri-menu-line">==</i></label>
            <div class="menu">
                <ul class="list">
                    <li><a href="/" class="<?= $_SERVER["REQUEST_URI"] === "/" ? "active" : "" ?>">Home</a></li>
                    <li><a href="/about" class="<?= $_SERVER["REQUEST_URI"] === "/about" ? "active" : "" ?>">About</a></li>
                    <li><a href="/contact" class="<?= $_SERVER["REQUEST_URI"] === "/contact" ? "active" : "" ?>">Contact</a></li>
                </ul>
            </div>
        </nav>
