<?php
$dsn = 'mysql:host=localhost;dbname=cs602db';
$username = 'cs602_user';
$password = 'cs602_secret';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}



//implement the template for the header when called in each page
function template_header() {


    echo <<<EOT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>CS602_TermProject_Teeters</title>
            <link href="style.css" rel="stylesheet" type="text/css">

            <!--cart image-->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        </head>
        <body>
            <header>
                <div class="content-wrapper">
                    <h1></h1>
                    <nav>
                        <a href="index.php">Home</a>
                        <a href="index.php?page=products">Books</a>
                        <a href="index.php?page=admin">Admin</a>
                    </nav>
                    <div class="link-icons">
                        <a href="index.php?page=cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </header>
            <main>
    EOT;
    }
    //implement the template for the closing tags when called in each page
    function template_closing() {
    echo <<<EOT
            </main>
        </body>
    </html>
    EOT;
    }
?>