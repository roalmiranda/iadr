<?php
use App\Models\Config;

function urlGes(){
    $config = Config::findOrFail(1);
    return $config->action;
    // return "https://ges.iadr-bolivia.com/";
    // return "http://iadr-admin.test/";
}