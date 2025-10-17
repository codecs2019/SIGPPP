<?php
$dalTableprojet = array();
$dalTableprojet["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableprojet["id_programme"] = array("type"=>3,"varname"=>"id_programme", "name" => "id_programme", "autoInc" => "0");
$dalTableprojet["code_projet"] = array("type"=>200,"varname"=>"code_projet", "name" => "code_projet", "autoInc" => "0");
$dalTableprojet["nom"] = array("type"=>200,"varname"=>"nom", "name" => "nom", "autoInc" => "0");
$dalTableprojet["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableprojet["categorie"] = array("type"=>129,"varname"=>"categorie", "name" => "categorie", "autoInc" => "0");
$dalTableprojet["direction_responsable"] = array("type"=>200,"varname"=>"direction_responsable", "name" => "direction_responsable", "autoInc" => "0");
$dalTableprojet["chef_projet_id"] = array("type"=>3,"varname"=>"chef_projet_id", "name" => "chef_projet_id", "autoInc" => "0");
$dalTableprojet["niveau_maturite"] = array("type"=>129,"varname"=>"niveau_maturite", "name" => "niveau_maturite", "autoInc" => "0");
$dalTableprojet["statut"] = array("type"=>129,"varname"=>"statut", "name" => "statut", "autoInc" => "0");
$dalTableprojet["date_debut"] = array("type"=>7,"varname"=>"date_debut", "name" => "date_debut", "autoInc" => "0");
$dalTableprojet["date_fin"] = array("type"=>7,"varname"=>"date_fin", "name" => "date_fin", "autoInc" => "0");
$dalTableprojet["localisation"] = array("type"=>200,"varname"=>"localisation", "name" => "localisation", "autoInc" => "0");
$dalTableprojet["objectif"] = array("type"=>201,"varname"=>"objectif", "name" => "objectif", "autoInc" => "0");
$dalTableprojet["id"]["key"]=true;

$dal_info["sigpppportefeuilleatlocalhost__projet"] = &$dalTableprojet;
?>