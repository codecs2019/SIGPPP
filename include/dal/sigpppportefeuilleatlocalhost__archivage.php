<?php
$dalTablearchivage = array();
$dalTablearchivage["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablearchivage["id_projet"] = array("type"=>3,"varname"=>"id_projet", "name" => "id_projet", "autoInc" => "0");
$dalTablearchivage["date_cloture"] = array("type"=>7,"varname"=>"date_cloture", "name" => "date_cloture", "autoInc" => "0");
$dalTablearchivage["valide_par"] = array("type"=>3,"varname"=>"valide_par", "name" => "valide_par", "autoInc" => "0");
$dalTablearchivage["rapport_final"] = array("type"=>201,"varname"=>"rapport_final", "name" => "rapport_final", "autoInc" => "0");
$dalTablearchivage["fichier_archive"] = array("type"=>200,"varname"=>"fichier_archive", "name" => "fichier_archive", "autoInc" => "0");
$dalTablearchivage["id"]["key"]=true;

$dal_info["sigpppportefeuilleatlocalhost__archivage"] = &$dalTablearchivage;
?>