<?php
require_once("get_request.php");
function create_route()
{
    $base = "../modules/";
    $path = get_request("p");
    $module = get_request("u");
    if (!is_dir($base . $path)) mkdir($base . $path);

    if ($path) {
        if (!file_exists($base . $path . "/" . $module . ".php")) {
            fopen($base . $path . "/" . $module . ".php", 'w');
            $data = "<h1>Rota criada com sucesso.</h1><br />Edite o arquivo <br /> internal/modules/" . $path . "/" . $module . ".php";
            $handle = fopen($base . $path . "/" . $module . ".php", 'w');
            fwrite($handle, $data);
            fclose($handle);
            header("location: ./" . $path . "/" . $module);
        }
    } else {
        fopen($base . "/" . $module . ".php", 'w');
        $data = "<h1>Rota criada com sucesso.</h1><br />Edite o arquivo <br / >internal/modules/". $module . ".php";
        $handle = fopen($base . "/" . $module . ".php", 'w');
        fwrite($handle, $data);
        fclose($handle);
        header("location: ./" . $module);
    }

}

create_route();
