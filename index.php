<?php

/*Llama al nucleo del sistema*/
require('core/core.php');
/*Condicion para establecer URLs para posteriormente enviarlas al controlador*/
    if(isset($_GET['view'])){
        if(file_exists('core/controllers/' . strtolower($_GET['view']) . 'Controller.php')){
            include('core/controllers/' . strtolower($_GET['view']) . 'Controller.php');
        }else{
            include('core/controllers/errorController.php');
        }
    }else{
        include('core/controllers/indexController.php');
    }

 ?>
