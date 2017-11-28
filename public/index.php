<?php
//require'../pages/profil/header.html';
require '../app/autoloader.php';
//require '../app/app.php';

App\autoloader::register();


if (isset($_GET['p'])) {
    $p=$_GET['p'];

}

else {

    $p='home';
}

ob_start();
//mb_internal_encoding('UTF-8');
switch($p){
    case 'home':
        require '../pages/index.php';
        break;
    case 'about':
        require '../pages/about.php';
        break;
    case 'support':
        require '../pages/support.php';
        break;
    case 'contact':
        require '../pages/contact.php';
        break;
    default :
        require '../pages/index.php';

}


$content = ob_get_clean();
require '../pages/template/default.php';
