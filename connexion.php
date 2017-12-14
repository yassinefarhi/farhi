<?php

    /**
     * Nous créons deux variables : $username et $password qui valent respectivement "Sdz" et "salut"
     */

    $username = "Sdz";
    $password = "salut";

    if( isset($_POST['login']) && isset($_POST['password']) ){

        if($_POST['login'] == $username && $_POST['password'] == $password){ // Si les infos correspondent...
            session_start();
            $_SESSION['user'] = $username;
            echo "Success";        
        }
        else{ // Sinon
            echo "Failed";
        }

    }

?>
