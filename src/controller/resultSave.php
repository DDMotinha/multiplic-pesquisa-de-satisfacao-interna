<?php

require_once 'dbConnection.php';

   if(isset($_POST['submit'])):
    $answ1 = mysqli_escape_string($conn, $_POST['answ1']);
    $answ2 = mysqli_escape_string($conn, $_POST['answ2']);
    $answ3 = mysqli_escape_string($conn, $_POST['answ3']);
    $answ4 = mysqli_escape_string($conn, $_POST['answ4']);
    $answ5 = mysqli_escape_string($conn, $_POST['answ5']);
    $answ6 = mysqli_escape_string($conn, $_POST['answ6']);
    $answ7 = mysqli_escape_string($conn, $_POST['answ7']);
    $answ8 = mysqli_escape_string($conn, $_POST['answ8']);
    
    $sql = "INSERT INTO aswr_quest (answ1, answ2, answ3, answ4, answ5, answ6, answ7, answ8) VALUES ('$answ1', '$answ2', '$answ3', '$answ4', '$answ5', '$answ6', '$answ7', '$answ8')";
    
    //connexão com o DB

    if(mysqli_query($conn, $sql)):
        header('Location: final.php?enviado');
    endif;  
endif;

?>