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
            echo "<h1>404</h1>";
            echo "<div>File not exists</div>";
            echo "<div>You're trying to load \"{$load}\" and this file can't be found.</div>";
        }
    }else{
        $load = "internal/modules/index.php";
        if(file_exists($load)) {
            require_once($load);
        }else{
            echo "<h1>404</h1>";
            echo "<div>File not exists</div>";
            echo "<div>You're trying to load \"{$load}\" and this file can't be found.</div>";
        }
    }
}