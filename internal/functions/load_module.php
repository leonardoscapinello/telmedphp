<?php
function load_module(){
    if(get_request("module")){
        $module_path = "internal/modules/";
        $module_page = get_request("module");
        $folder = get_request("path");
        if($folder){
            $load = $module_path . $folder . "/" . $module_page . ".php";
        }else{
            $load = $module_path . $module_page . ".php";
        }
        if(file_exists($load)){
            require_once($load);
        }else{
            echo "<h1 style=\"margin-bottom:20px\">Essa rota ainda não existe.</h1>";
            echo "<div>Você tentou acessar o arquivo \"{$load}\" mas não foi possível encontra-lo.<br /></div>";
            echo "<div><br /><b>Para criar o arquivo de forma automática </b> <a href=\"routing?p=$folder&u=$module_page\">Clique aqui</a></div>";
        }
    }else{
        $load = "internal/modules/index.php";
        if(file_exists($load)) {
            require_once($load);
        }else{
            echo "<h1 style=\"margin-bottom:20px\">Essa rota ainda não existe.</h1>";
            echo "<div>Você tentou acessar o arquivo \"{$load}\" mas não foi possível encontra-lo.<br /></div>";
            echo "<div><br /><b>Para criar o arquivo de forma automática </b> <a href=\"routing?u=$module_page\">Clique aqui</a></div>";
        }
    }
}