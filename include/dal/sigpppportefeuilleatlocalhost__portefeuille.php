<?php
$dalTableportefeuille = array();
$dalTableportefeuille["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableportefeuille["annee"] = array("type"=>2,"varname"=>"annee", "name" => "annee", "autoInc" => "0");
$dalTableportefeuille["nom"] = array("type"=>200,"varname"=>"nom", "name" => "nom", "autoInc" => "0");
$dalTableportefeuille["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableportefeuille["date_creation"] = array("type"=>135,"varname"=>"date_creation", "name" => "date_creation", "autoInc" => "0");
$dalTableportefeuille["id"]["key"]=true;

$dal_info["sigpppportefeuilleatlocalhost__portefeuille"] = &$dalTableportefeuille;
?>