<?php
$dalTabledocument_projet = array();
$dalTabledocument_projet["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabledocument_projet["id_projet"] = array("type"=>3,"varname"=>"id_projet", "name" => "id_projet", "autoInc" => "0");
$dalTabledocument_projet["nom_fichier"] = array("type"=>200,"varname"=>"nom_fichier", "name" => "nom_fichier", "autoInc" => "0");
$dalTabledocument_projet["type_document"] = array("type"=>129,"varname"=>"type_document", "name" => "type_document", "autoInc" => "0");
$dalTabledocument_projet["auteur_id"] = array("type"=>3,"varname"=>"auteur_id", "name" => "auteur_id", "autoInc" => "0");
$dalTabledocument_projet["chemin"] = array("type"=>200,"varname"=>"chemin", "name" => "chemin", "autoInc" => "0");
$dalTabledocument_projet["date_ajout"] = array("type"=>135,"varname"=>"date_ajout", "name" => "date_ajout", "autoInc" => "0");
$dalTabledocument_projet["id"]["key"]=true;

$dal_info["sigpppportefeuilleatlocalhost__document_projet"] = &$dalTabledocument_projet;
?>