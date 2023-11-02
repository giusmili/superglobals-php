<?php

    if(isset($_GET['page'])){

        $_page = $_GET['page'];

        if($_page == 1){
            include_once "./pages/css.inc.php";
        }
        if($_page == 2){
            include_once "./pages/html.inc.php";
        }
        if($_page == 3){
            include_once "./pages/java.inc.php";
        }
        elseif($_page > 3 || $_page <=0){
            http_response_code(404);
            print '<p class="button-delete-color">La page n\'existe pas!!!</p>';
            exit;
        }


    }
    else{
        print "<p> Vous êtes à l'accueil</p>";
    }