<?php
    include_once('../utils/init.php');
    include_once('../database/status.php');

    if(statusAlreadyExists(htmlentities($_POST["new_status"]))){
        header("Location:../pages/add_entities.php");
    }
    else if(addNewStatus(htmlentities($_POST["new_status"])) !== -1){
        header("Location:../pages/add_entities.php");
    }
    else{
        header("Location:../pages/add_entities.php");  
    }
?>