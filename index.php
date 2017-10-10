<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Air France - interactive </title>
    <link rel="icon" href="web/favicon.png" />

    <!-- css -->
    <link rel="stylesheet" href="lib/css/mycss.css">

    <!-- javascript -->
    <script src="lib/js/myjs.js"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
</head>

<?php
require_once "function/src/Controller.php";
?>

<body>
<?php
    $controller = new Controller();
    $controller->Univers();
?>

</body>
</html>
