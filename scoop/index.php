<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>myIM Scoop - Newsletters & Updates</title>
    <script type="text/javascript" src="https://files.imss.work/assets/library/head.js/head.min.js"></script>
    <script type="text/javascript" src="https://files.imss.work/assets/library/head.js/packageloader-mdlbootstrap.js"></script>
</head>
<body>
    <?php  include 'includes/modules/nav-f.php'; ?>
    <?php
        error_reporting(0);
        $current_url1 = explode("?", $_SERVER['REQUEST_URI']);
        $version = explode("=", $current_url1[1]);
        $version=$version[1];
        if (!isset($version)){
            $version=date("y").date("m");
        }
        date("Y-m-d",strtotime("$version"));
        $JSONversion=date("Y-m-d",strtotime("$version"));
        $url_scoop_make_employee_details="http://182.71.249.210:5100/scoop/getMonthlyScoopList/".$JSONversion;
        //$url_scoop_make_employee_details="http://172.16.2.10:5100/scoop/getMonthlyScoopList/".$JSONversion;
        $url_scoop_make_updates="includes/archives/scoop-archive-".$version.".php";
    ?>
    <main class="container">
        <?php 
            include $url_scoop_make_updates;
            $module_heading="Birthdays";
            include 'includes/modules/card-deck.php';
            $module_heading="New Joinees";
            include 'includes/modules/card-deck.php';
        ?>
    </main>
    <footer class="page-footer font-small mdb-color lighten-3 pt-4 mt-4">
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="imss.co.in"> Integra Micro Software Services </a>
        </div>
    </footer>
</body>
</html>
