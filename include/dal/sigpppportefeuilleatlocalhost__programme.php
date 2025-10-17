<?php
$dalTableprogramme = array();
$dalTableprogramme["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableprogramme["id_portefeuille"] = array("type"=>3,"varname"=>"id_portefeuille", "name" => "id_portefeuille", "autoInc" => "0");
$dalTableprogramme["nom"] = array("type"=>200,"varname"=>"nom", "name" => "nom", "autoInc" => "0");
$dalTableprogramme["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableprogramme["axe_strategique"] = array("type"=>200,"varname"=>"axe_strategique", "name" => "axe_strategique", "autoInc" => "0");
$dalTableprogramme["id"]["key"]=true;

$dal_info["sigpppportefeuilleatlocalhost__programme"] = &$dalTableprogramme;
?>