<?php
$dalTableactivite = array();
$dalTableactivite["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableactivite["id_projet"] = array("type"=>3,"varname"=>"id_projet", "name" => "id_projet", "autoInc" => "0");
$dalTableactivite["nom"] = array("type"=>200,"varname"=>"nom", "name" => "nom", "autoInc" => "0");
$dalTableactivite["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableactivite["date_debut"] = array("type"=>7,"varname"=>"date_debut", "name" => "date_debut", "autoInc" => "0");
$dalTableactivite["date_fin"] = array("type"=>7,"varname"=>"date_fin", "name" => "date_fin", "autoInc" => "0");
$dalTableactivite["etat"] = array("type"=>129,"varname"=>"etat", "name" => "etat", "autoInc" => "0");
$dalTableactivite["avancement"] = array("type"=>14,"varname"=>"avancement", "name" => "avancement", "autoInc" => "0");
$dalTableactivite["id"]["key"]=true;

$dal_info["sigpppportefeuilleatlocalhost__activite"] = &$dalTableactivite;
?>