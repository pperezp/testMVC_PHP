<?php
class EnlaceController{
    public function actionController(){
        if(isset($_REQUEST["action"])){
            $action = $_REQUEST["action"];
        }else{
            $action = "menu";
        }

        include Paginas::getView($action);
    }
}
?>