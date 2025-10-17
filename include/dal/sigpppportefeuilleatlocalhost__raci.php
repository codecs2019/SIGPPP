<?php
$dalTableraci = array();
$dalTableraci["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableraci["id_projet"] = array("type"=>3,"varname"=>"id_projet", "name" => "id_projet", "autoInc" => "0");
$dalTableraci["id_utilisateur"] = array("type"=>3,"varname"=>"id_utilisateur", "name" => "id_utilisateur", "autoInc" => "0");
$dalTableraci["role_raci"] = array("type"=>129,"varname"=>"role_raci", "name" => "role_raci", "autoInc" => "0");
$dalTableraci["commentaire"] = array("type"=>200,"varname"=>"commentaire", "name" => "commentaire", "autoInc" => "0");
$dalTableraci["id"]["key"]=true;

$dal_info["sigpppportefeuilleatlocalhost__raci"] = &$dalTableraci;
?>