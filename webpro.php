<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';
switch ($module) {
    case 'home' : default:
        include('home.php') ;
        break;
    case 'mapel':
        include('mapel/index.php');
        break;
    }
