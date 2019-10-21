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
            echo "<h1 style=\"margin-bottom:20px\">This route doesn't exist yet.</h1>";
            echo "<div>You're trying to load \"{$load}\" and this file can't be found.</div>";
            echo "<div><b>You can create it now!</b> <a href=\"routing?p=$folder&u=$module_page\">Click here to create this route.</a></div>";
        }
    }else{
        $load = "internal/modules/index.php";
        if(file_exists($load)) {
            require_once($load);
        }else{
            echo "<h1 style=\"margin-bottom:20px\">This route doesn't exist yet.</h1>";
            echo "<div>You're trying to load \"{$load}\" and this file can't be found.</div>";
            echo "<div><b>You can create it now!</b> <a href=\"routing?p=$folder&u=$module_page\">Click here to create this route.</a></div>";
        }
    }
}