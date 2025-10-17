<?php
$dalTabledepense = array();
$dalTabledepense["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabledepense["id_projet"] = array("type"=>3,"varname"=>"id_projet", "name" => "id_projet", "autoInc" => "0");
$dalTabledepense["description"] = array("type"=>200,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTabledepense["montant"] = array("type"=>14,"varname"=>"montant", "name" => "montant", "autoInc" => "0");
$dalTabledepense["date_depense"] = array("type"=>7,"varname"=>"date_depense", "name" => "date_depense", "autoInc" => "0");
$dalTabledepense["id"]["key"]=true;

$dal_info["sigpppportefeuilleatlocalhost__depense"] = &$dalTabledepense;
?>