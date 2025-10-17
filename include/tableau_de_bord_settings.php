<?php
require_once(getabspath("classes/cipherer.php"));



$tdatatableau_de_bord = array();
$tdatatableau_de_bord[".ShortName"] = "tableau_de_bord";

$tdatatableau_de_bord[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatatableau_de_bord[".originalPagesByType"] = $tdatatableau_de_bord[".pagesByType"];
$tdatatableau_de_bord[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatatableau_de_bord[".originalPages"] = $tdatatableau_de_bord[".pages"];
$tdatatableau_de_bord[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatatableau_de_bord[".originalDefaultPages"] = $tdatatableau_de_bord[".defaultPages"];


//	field labels
$fieldLabelstableau_de_bord = array();
$pageTitlestableau_de_bord = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelstableau_de_bord["French"] = array();
	$fieldLabelstableau_de_bord["French"]["kpi_ProjetsEnCours_projets_en_cours"] = "Projets En Cours";
	$fieldLabelstableau_de_bord["French"]["kpi_BudgetGlobal_budget_global"] = "Budget Global";
	$fieldLabelstableau_de_bord["French"]["kpi_projets_termines_activites_en_cours"] = "Activites En Cours";
	$fieldLabelstableau_de_bord["French"]["kpi_activites_terminees_projets_termines"] = "Projets Termines";
	$fieldLabelstableau_de_bord["French"]["kpi_projets_depassement_budget_projets_depassement_budget"] = "Projets Depassement Budget";
	$fieldLabelstableau_de_bord["French"]["kpi_taux_execution_budgetaire_taux_execution_budgetaire"] = "Taux Execution Budgetaire";
}

/*
//	search fields
$tdatatableau_de_bord[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"kpi_ProjetsEnCours", "field"=>"projets_en_cours" );
$tdatatableau_de_bord[".searchFields"]["kpi_ProjetsEnCours_projets_en_cours"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"kpi_BudgetGlobal", "field"=>"budget_global" );
$tdatatableau_de_bord[".searchFields"]["kpi_BudgetGlobal_budget_global"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"kpi_projets_termines", "field"=>"activites_en_cours" );
$tdatatableau_de_bord[".searchFields"]["kpi_projets_termines_activites_en_cours"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"kpi_activites_terminees", "field"=>"projets_termines" );
$tdatatableau_de_bord[".searchFields"]["kpi_activites_terminees_projets_termines"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"kpi_projets_depassement_budget", "field"=>"projets_depassement_budget" );
$tdatatableau_de_bord[".searchFields"]["kpi_projets_depassement_budget_projets_depassement_budget"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"kpi_taux_execution_budgetaire", "field"=>"taux_execution_budgetaire" );
$tdatatableau_de_bord[".searchFields"]["kpi_taux_execution_budgetaire_taux_execution_budgetaire"] = $dashField;

// all search fields
$tdatatableau_de_bord[".allSearchFields"] = array();
$tdatatableau_de_bord[".allSearchFields"][] = "kpi_ProjetsEnCours_projets_en_cours";
$tdatatableau_de_bord[".allSearchFields"][] = "kpi_BudgetGlobal_budget_global";
$tdatatableau_de_bord[".allSearchFields"][] = "kpi_projets_termines_activites_en_cours";
$tdatatableau_de_bord[".allSearchFields"][] = "kpi_activites_terminees_projets_termines";
$tdatatableau_de_bord[".allSearchFields"][] = "kpi_projets_depassement_budget_projets_depassement_budget";
$tdatatableau_de_bord[".allSearchFields"][] = "kpi_taux_execution_budgetaire_taux_execution_budgetaire";

// good like search fields
$tdatatableau_de_bord[".googleLikeFields"] = array();
$tdatatableau_de_bord[".googleLikeFields"][] = "kpi_ProjetsEnCours_projets_en_cours";
*/

/*
$tdatatableau_de_bord[".dashElements"] = array();

	$dbelement = array( "elementName" => "kpi_ProjetsEnCours_grid", "table" => "kpi_ProjetsEnCours",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatatableau_de_bord[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "kpi_ActivitesEnCours_grid", "table" => "kpi_ActivitesEnCours",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatatableau_de_bord[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "kpi_BudgetGlobal_grid", "table" => "kpi_BudgetGlobal",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatatableau_de_bord[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "kpi_projets_termines_grid", "table" => "kpi_projets_termines",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatatableau_de_bord[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "kpi_activites_terminees_grid", "table" => "kpi_activites_terminees",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatatableau_de_bord[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "kpi_projets_depassement_budget_grid", "table" => "kpi_projets_depassement_budget",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatatableau_de_bord[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "kpi_projets_en_retard_grid", "table" => "kpi_projets_en_retard",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatatableau_de_bord[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "kpi_activites_en_retard_grid", "table" => "kpi_activites_en_retard",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatatableau_de_bord[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "kpi_depenses_realisees_grid", "table" => "kpi_depenses_realisees",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatatableau_de_bord[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "kpi_budget_restant_grid", "table" => "kpi_budget_restant",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatatableau_de_bord[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "kpi_taux_execution_budgetaire_grid", "table" => "kpi_taux_execution_budgetaire",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatatableau_de_bord[".dashElements"][] = $dbelement;
*/
$tdatatableau_de_bord[".shortTableName"] = "tableau_de_bord";
$tdatatableau_de_bord[".entityType"] = 4;




$tdatatableau_de_bord[".hasEvents"] = false;


$tdatatableau_de_bord[".tableType"] = "dashboard";



$tdatatableau_de_bord[".addPageEvents"] = false;

$tdatatableau_de_bord[".isUseAjaxSuggest"] = true;

$tables_data["Tableau_De_Bord"]=&$tdatatableau_de_bord;
$field_labels["Tableau_De_Bord"] = &$fieldLabelstableau_de_bord;
$page_titles["Tableau_De_Bord"] = &$pageTitlestableau_de_bord;

?>