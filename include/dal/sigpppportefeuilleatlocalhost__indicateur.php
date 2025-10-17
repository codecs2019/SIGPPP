<?php
$dalTableindicateur = array();
$dalTableindicateur["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableindicateur["id_projet"] = array("type"=>3,"varname"=>"id_projet", "name" => "id_projet", "autoInc" => "0");
$dalTableindicateur["type"] = array("type"=>129,"varname"=>"type", "name" => "type", "autoInc" => "0");
$dalTableindicateur["nom"] = array("type"=>200,"varname"=>"nom", "name" => "nom", "autoInc" => "0");
$dalTableindicateur["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableindicateur["unite"] = array("type"=>200,"varname"=>"unite", "name" => "unite", "autoInc" => "0");
$dalTableindicateur["cible"] = array("type"=>14,"varname"=>"cible", "name" => "cible", "autoInc" => "0");
$dalTableindicateur["valeur_actuelle"] = array("type"=>14,"varname"=>"valeur_actuelle", "name" => "valeur_actuelle", "autoInc" => "0");
$dalTableindicateur["periode"] = array("type"=>200,"varname"=>"periode", "name" => "periode", "autoInc" => "0");
$dalTableindicateur["id"]["key"]=true;

$dal_info["sigpppportefeuilleatlocalhost__indicateur"] = &$dalTableindicateur;
?>