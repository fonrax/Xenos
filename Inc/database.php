<?php

    session_start();
    
    $host_name  = "admin";
    $database   = "id20120289_wp_e28e61282a99acdb214327db19d85081";
    $user_name  = "ziole";
    $password   = "desirezoe12";

    try {
        $bdd = new PDO('mysql:host='.$host_name.';dbname='.$database, $user_name, $password);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>"; die();
    }
    
    catch(Exception $e)
    {
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
    }
?>
