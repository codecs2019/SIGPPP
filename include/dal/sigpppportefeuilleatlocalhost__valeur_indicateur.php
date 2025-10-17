<?php
$dalTablevaleur_indicateur = array();
$dalTablevaleur_indicateur["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablevaleur_indicateur["id_indicateur"] = array("type"=>3,"varname"=>"id_indicateur", "name" => "id_indicateur", "autoInc" => "0");
$dalTablevaleur_indicateur["valeur"] = array("type"=>14,"varname"=>"valeur", "name" => "valeur", "autoInc" => "0");
$dalTablevaleur_indicateur["date_saisie"] = array("type"=>135,"varname"=>"date_saisie", "name" => "date_saisie", "autoInc" => "0");
$dalTablevaleur_indicateur["saisi_par"] = array("type"=>3,"varname"=>"saisi_par", "name" => "saisi_par", "autoInc" => "0");
$dalTablevaleur_indicateur["id"]["key"]=true;

$dal_info["sigpppportefeuilleatlocalhost__valeur_indicateur"] = &$dalTablevaleur_indicateur;
?>