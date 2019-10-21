<?php
function get_request($request_index){
    if(isset($_REQUEST[$request_index])){
        if($_REQUEST[$request_index] !== null && $_REQUEST[$request_index] !== ""){
            return $_REQUEST[$request_index];
        }
    }
    return false;
}