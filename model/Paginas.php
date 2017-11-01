<?php
class Paginas{
    public static function getView($action){
        if($action == "menu"){
            return "view/modules/menu.php";
        }else if($action == "crear"){
            return "view/modules/crear.php";
        }else if($action == "listar"){
            return "view/modules/listar.php";
        }    
        return "index.php";
    }
}
?>