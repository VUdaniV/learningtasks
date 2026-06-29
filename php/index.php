<html>
    <head>
        <title>Index</title>
    </head>
    <body>
        <a href="index.php?page=home.php">Home</a>
        <a href="index.php?page=gallery.php">Gallery</a>
        <a href="index.php?page=About us.php">About us</a>
        <?php
        switch(@$_GET['page']){
            case 'home':
                include (home.php);
                break;
            case 'gallery':
                include (gallery.php);
                break;
            case 'about us':
                include (about us.php);
                break;
            default:
                include (home.php);
                break;
        }
    </body>
    </html>