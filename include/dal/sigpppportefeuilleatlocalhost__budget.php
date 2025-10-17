<?php
$dalTablebudget = array();
$dalTablebudget["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablebudget["id_projet"] = array("type"=>3,"varname"=>"id_projet", "name" => "id_projet", "autoInc" => "0");
$dalTablebudget["montant_prevu"] = array("type"=>14,"varname"=>"montant_prevu", "name" => "montant_prevu", "autoInc" => "0");
$dalTablebudget["montant_engage"] = array("type"=>14,"varname"=>"montant_engage", "name" => "montant_engage", "autoInc" => "0");
$dalTablebudget["montant_paye"] = array("type"=>14,"varname"=>"montant_paye", "name" => "montant_paye", "autoInc" => "0");
$dalTablebudget["source_financement"] = array("type"=>200,"varname"=>"source_financement", "name" => "source_financement", "autoInc" => "0");
$dalTablebudget["derniere_mise_a_jour"] = array("type"=>135,"varname"=>"derniere_mise_a_jour", "name" => "derniere_mise_a_jour", "autoInc" => "0");
$dalTablebudget["id"]["key"]=true;

$dal_info["sigpppportefeuilleatlocalhost__budget"] = &$dalTablebudget;
?>