<?php
require 'php/common.php';
$page = 'login';

if (isset($_GET['page'])) {
    $page = $_GET['page'];}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Welkom pagina</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.23.1" />
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div style="padding:20px;background-color:#1abc9c;height:1500px;">
    <div class="main">
        <br><br>
        <?php
        include 'inc/navbar.inc.php';
        include 'inc/' . $page . '.inc.php';
        ?>
        <br/>
    </div>
</div>
<script src="js/popup.js" type="text/javascript"></script>
</body>
</html>