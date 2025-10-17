<?php
$tdatavue_kpi_portefeuille = array();
$tdatavue_kpi_portefeuille[".searchableFields"] = array();
$tdatavue_kpi_portefeuille[".ShortName"] = "vue_kpi_portefeuille";
$tdatavue_kpi_portefeuille[".OwnerID"] = "";
$tdatavue_kpi_portefeuille[".OriginalTable"] = "vue_kpi_portefeuille";


$tdatavue_kpi_portefeuille[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavue_kpi_portefeuille[".originalPagesByType"] = $tdatavue_kpi_portefeuille[".pagesByType"];
$tdatavue_kpi_portefeuille[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavue_kpi_portefeuille[".originalPages"] = $tdatavue_kpi_portefeuille[".pages"];
$tdatavue_kpi_portefeuille[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavue_kpi_portefeuille[".originalDefaultPages"] = $tdatavue_kpi_portefeuille[".defaultPages"];

//	field labels
$fieldLabelsvue_kpi_portefeuille = array();
$fieldToolTipsvue_kpi_portefeuille = array();
$pageTitlesvue_kpi_portefeuille = array();
$placeHoldersvue_kpi_portefeuille = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvue_kpi_portefeuille["French"] = array();
	$fieldToolTipsvue_kpi_portefeuille["French"] = array();
	$placeHoldersvue_kpi_portefeuille["French"] = array();
	$pageTitlesvue_kpi_portefeuille["French"] = array();
	$fieldLabelsvue_kpi_portefeuille["French"]["projets_en_cours"] = "Projets En Cours";
	$fieldToolTipsvue_kpi_portefeuille["French"]["projets_en_cours"] = "";
	$placeHoldersvue_kpi_portefeuille["French"]["projets_en_cours"] = "";
	$fieldLabelsvue_kpi_portefeuille["French"]["projets_termines"] = "Projets Termines";
	$fieldToolTipsvue_kpi_portefeuille["French"]["projets_termines"] = "";
	$placeHoldersvue_kpi_portefeuille["French"]["projets_termines"] = "";
	$fieldLabelsvue_kpi_portefeuille["French"]["projets_en_retard"] = "Projets En Retard";
	$fieldToolTipsvue_kpi_portefeuille["French"]["projets_en_retard"] = "";
	$placeHoldersvue_kpi_portefeuille["French"]["projets_en_retard"] = "";
	$fieldLabelsvue_kpi_portefeuille["French"]["projets_depassement_budget"] = "Projets Depassement Budget";
	$fieldToolTipsvue_kpi_portefeuille["French"]["projets_depassement_budget"] = "";
	$placeHoldersvue_kpi_portefeuille["French"]["projets_depassement_budget"] = "";
	$fieldLabelsvue_kpi_portefeuille["French"]["activites_en_cours"] = "Activites En Cours";
	$fieldToolTipsvue_kpi_portefeuille["French"]["activites_en_cours"] = "";
	$placeHoldersvue_kpi_portefeuille["French"]["activites_en_cours"] = "";
	$fieldLabelsvue_kpi_portefeuille["French"]["activites_en_retard"] = "Activites En Retard";
	$fieldToolTipsvue_kpi_portefeuille["French"]["activites_en_retard"] = "";
	$placeHoldersvue_kpi_portefeuille["French"]["activites_en_retard"] = "";
	$fieldLabelsvue_kpi_portefeuille["French"]["activites_terminees"] = "Activites Terminees";
	$fieldToolTipsvue_kpi_portefeuille["French"]["activites_terminees"] = "";
	$placeHoldersvue_kpi_portefeuille["French"]["activites_terminees"] = "";
	$fieldLabelsvue_kpi_portefeuille["French"]["budget_global"] = "Budget Global";
	$fieldToolTipsvue_kpi_portefeuille["French"]["budget_global"] = "";
	$placeHoldersvue_kpi_portefeuille["French"]["budget_global"] = "";
	$fieldLabelsvue_kpi_portefeuille["French"]["depenses_realisees"] = "Depenses Realisees";
	$fieldToolTipsvue_kpi_portefeuille["French"]["depenses_realisees"] = "";
	$placeHoldersvue_kpi_portefeuille["French"]["depenses_realisees"] = "";
	$fieldLabelsvue_kpi_portefeuille["French"]["budget_restant"] = "Budget Restant";
	$fieldToolTipsvue_kpi_portefeuille["French"]["budget_restant"] = "";
	$placeHoldersvue_kpi_portefeuille["French"]["budget_restant"] = "";
	$fieldLabelsvue_kpi_portefeuille["French"]["taux_execution_budgetaire"] = "Taux Execution Budgetaire";
	$fieldToolTipsvue_kpi_portefeuille["French"]["taux_execution_budgetaire"] = "";
	$placeHoldersvue_kpi_portefeuille["French"]["taux_execution_budgetaire"] = "";
	if (count($fieldToolTipsvue_kpi_portefeuille["French"]))
		$tdatavue_kpi_portefeuille[".isUseToolTips"] = true;
}


	$tdatavue_kpi_portefeuille[".NCSearch"] = true;



$tdatavue_kpi_portefeuille[".shortTableName"] = "vue_kpi_portefeuille";
$tdatavue_kpi_portefeuille[".nSecOptions"] = 0;

$tdatavue_kpi_portefeuille[".mainTableOwnerID"] = "";
$tdatavue_kpi_portefeuille[".entityType"] = 0;
$tdatavue_kpi_portefeuille[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatavue_kpi_portefeuille[".strOriginalTableName"] = "vue_kpi_portefeuille";

	



$tdatavue_kpi_portefeuille[".showAddInPopup"] = false;

$tdatavue_kpi_portefeuille[".showEditInPopup"] = false;

$tdatavue_kpi_portefeuille[".showViewInPopup"] = false;

$tdatavue_kpi_portefeuille[".listAjax"] = false;
//	temporary
//$tdatavue_kpi_portefeuille[".listAjax"] = false;

	$tdatavue_kpi_portefeuille[".audit"] = false;

	$tdatavue_kpi_portefeuille[".locking"] = false;


$pages = $tdatavue_kpi_portefeuille[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavue_kpi_portefeuille[".edit"] = true;
	$tdatavue_kpi_portefeuille[".afterEditAction"] = 1;
	$tdatavue_kpi_portefeuille[".closePopupAfterEdit"] = 1;
	$tdatavue_kpi_portefeuille[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavue_kpi_portefeuille[".add"] = true;
$tdatavue_kpi_portefeuille[".afterAddAction"] = 1;
$tdatavue_kpi_portefeuille[".closePopupAfterAdd"] = 1;
$tdatavue_kpi_portefeuille[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavue_kpi_portefeuille[".list"] = true;
}



$tdatavue_kpi_portefeuille[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavue_kpi_portefeuille[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavue_kpi_portefeuille[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavue_kpi_portefeuille[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavue_kpi_portefeuille[".printFriendly"] = true;
}



$tdatavue_kpi_portefeuille[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavue_kpi_portefeuille[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavue_kpi_portefeuille[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavue_kpi_portefeuille[".isUseAjaxSuggest"] = true;





$tdatavue_kpi_portefeuille[".ajaxCodeSnippetAdded"] = false;

$tdatavue_kpi_portefeuille[".buttonsAdded"] = false;

$tdatavue_kpi_portefeuille[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavue_kpi_portefeuille[".isUseTimeForSearch"] = false;


$tdatavue_kpi_portefeuille[".badgeColor"] = "2F4F4F";


$tdatavue_kpi_portefeuille[".allSearchFields"] = array();
$tdatavue_kpi_portefeuille[".filterFields"] = array();
$tdatavue_kpi_portefeuille[".requiredSearchFields"] = array();

$tdatavue_kpi_portefeuille[".googleLikeFields"] = array();
$tdatavue_kpi_portefeuille[".googleLikeFields"][] = "projets_en_cours";
$tdatavue_kpi_portefeuille[".googleLikeFields"][] = "projets_termines";
$tdatavue_kpi_portefeuille[".googleLikeFields"][] = "projets_en_retard";
$tdatavue_kpi_portefeuille[".googleLikeFields"][] = "projets_depassement_budget";
$tdatavue_kpi_portefeuille[".googleLikeFields"][] = "activites_en_cours";
$tdatavue_kpi_portefeuille[".googleLikeFields"][] = "activites_en_retard";
$tdatavue_kpi_portefeuille[".googleLikeFields"][] = "activites_terminees";
$tdatavue_kpi_portefeuille[".googleLikeFields"][] = "budget_global";
$tdatavue_kpi_portefeuille[".googleLikeFields"][] = "depenses_realisees";
$tdatavue_kpi_portefeuille[".googleLikeFields"][] = "budget_restant";
$tdatavue_kpi_portefeuille[".googleLikeFields"][] = "taux_execution_budgetaire";



$tdatavue_kpi_portefeuille[".tableType"] = "list";

$tdatavue_kpi_portefeuille[".printerPageOrientation"] = 0;
$tdatavue_kpi_portefeuille[".nPrinterPageScale"] = 100;

$tdatavue_kpi_portefeuille[".nPrinterSplitRecords"] = 40;

$tdatavue_kpi_portefeuille[".geocodingEnabled"] = false;










$tdatavue_kpi_portefeuille[".pageSize"] = 20;

$tdatavue_kpi_portefeuille[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavue_kpi_portefeuille[".strOrderBy"] = $tstrOrderBy;

$tdatavue_kpi_portefeuille[".orderindexes"] = array();


$tdatavue_kpi_portefeuille[".sqlHead"] = "SELECT projets_en_cours,  	projets_termines,  	projets_en_retard,  	projets_depassement_budget,  	activites_en_cours,  	activites_en_retard,  	activites_terminees,  	budget_global,  	depenses_realisees,  	budget_restant,  	taux_execution_budgetaire";
$tdatavue_kpi_portefeuille[".sqlFrom"] = "FROM vue_kpi_portefeuille";
$tdatavue_kpi_portefeuille[".sqlWhereExpr"] = "";
$tdatavue_kpi_portefeuille[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavue_kpi_portefeuille[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavue_kpi_portefeuille[".arrGroupsPerPage"] = $arrGPP;

$tdatavue_kpi_portefeuille[".highlightSearchResults"] = true;

$tableKeysvue_kpi_portefeuille = array();
$tdatavue_kpi_portefeuille[".Keys"] = $tableKeysvue_kpi_portefeuille;


$tdatavue_kpi_portefeuille[".hideMobileList"] = array();




//	projets_en_cours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projets_en_cours";
	$fdata["GoodName"] = "projets_en_cours";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("vue_kpi_portefeuille","projets_en_cours");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "projets_en_cours";

		$fdata["sourceSingle"] = "projets_en_cours";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projets_en_cours";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavue_kpi_portefeuille["projets_en_cours"] = $fdata;
		$tdatavue_kpi_portefeuille[".searchableFields"][] = "projets_en_cours";
//	projets_termines
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "projets_termines";
	$fdata["GoodName"] = "projets_termines";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("vue_kpi_portefeuille","projets_termines");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "projets_termines";

		$fdata["sourceSingle"] = "projets_termines";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projets_termines";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavue_kpi_portefeuille["projets_termines"] = $fdata;
		$tdatavue_kpi_portefeuille[".searchableFields"][] = "projets_termines";
//	projets_en_retard
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projets_en_retard";
	$fdata["GoodName"] = "projets_en_retard";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("vue_kpi_portefeuille","projets_en_retard");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "projets_en_retard";

		$fdata["sourceSingle"] = "projets_en_retard";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projets_en_retard";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavue_kpi_portefeuille["projets_en_retard"] = $fdata;
		$tdatavue_kpi_portefeuille[".searchableFields"][] = "projets_en_retard";
//	projets_depassement_budget
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "projets_depassement_budget";
	$fdata["GoodName"] = "projets_depassement_budget";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("vue_kpi_portefeuille","projets_depassement_budget");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "projets_depassement_budget";

		$fdata["sourceSingle"] = "projets_depassement_budget";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projets_depassement_budget";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavue_kpi_portefeuille["projets_depassement_budget"] = $fdata;
		$tdatavue_kpi_portefeuille[".searchableFields"][] = "projets_depassement_budget";
//	activites_en_cours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "activites_en_cours";
	$fdata["GoodName"] = "activites_en_cours";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("vue_kpi_portefeuille","activites_en_cours");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "activites_en_cours";

		$fdata["sourceSingle"] = "activites_en_cours";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activites_en_cours";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavue_kpi_portefeuille["activites_en_cours"] = $fdata;
		$tdatavue_kpi_portefeuille[".searchableFields"][] = "activites_en_cours";
//	activites_en_retard
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "activites_en_retard";
	$fdata["GoodName"] = "activites_en_retard";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("vue_kpi_portefeuille","activites_en_retard");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "activites_en_retard";

		$fdata["sourceSingle"] = "activites_en_retard";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activites_en_retard";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavue_kpi_portefeuille["activites_en_retard"] = $fdata;
		$tdatavue_kpi_portefeuille[".searchableFields"][] = "activites_en_retard";
//	activites_terminees
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "activites_terminees";
	$fdata["GoodName"] = "activites_terminees";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("vue_kpi_portefeuille","activites_terminees");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "activites_terminees";

		$fdata["sourceSingle"] = "activites_terminees";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activites_terminees";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavue_kpi_portefeuille["activites_terminees"] = $fdata;
		$tdatavue_kpi_portefeuille[".searchableFields"][] = "activites_terminees";
//	budget_global
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "budget_global";
	$fdata["GoodName"] = "budget_global";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("vue_kpi_portefeuille","budget_global");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "budget_global";

		$fdata["sourceSingle"] = "budget_global";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "budget_global";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavue_kpi_portefeuille["budget_global"] = $fdata;
		$tdatavue_kpi_portefeuille[".searchableFields"][] = "budget_global";
//	depenses_realisees
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "depenses_realisees";
	$fdata["GoodName"] = "depenses_realisees";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("vue_kpi_portefeuille","depenses_realisees");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "depenses_realisees";

		$fdata["sourceSingle"] = "depenses_realisees";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depenses_realisees";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavue_kpi_portefeuille["depenses_realisees"] = $fdata;
		$tdatavue_kpi_portefeuille[".searchableFields"][] = "depenses_realisees";
//	budget_restant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "budget_restant";
	$fdata["GoodName"] = "budget_restant";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("vue_kpi_portefeuille","budget_restant");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "budget_restant";

		$fdata["sourceSingle"] = "budget_restant";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "budget_restant";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavue_kpi_portefeuille["budget_restant"] = $fdata;
		$tdatavue_kpi_portefeuille[".searchableFields"][] = "budget_restant";
//	taux_execution_budgetaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "taux_execution_budgetaire";
	$fdata["GoodName"] = "taux_execution_budgetaire";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("vue_kpi_portefeuille","taux_execution_budgetaire");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "taux_execution_budgetaire";

		$fdata["sourceSingle"] = "taux_execution_budgetaire";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taux_execution_budgetaire";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavue_kpi_portefeuille["taux_execution_budgetaire"] = $fdata;
		$tdatavue_kpi_portefeuille[".searchableFields"][] = "taux_execution_budgetaire";


$tables_data["vue_kpi_portefeuille"]=&$tdatavue_kpi_portefeuille;
$field_labels["vue_kpi_portefeuille"] = &$fieldLabelsvue_kpi_portefeuille;
$fieldToolTips["vue_kpi_portefeuille"] = &$fieldToolTipsvue_kpi_portefeuille;
$placeHolders["vue_kpi_portefeuille"] = &$placeHoldersvue_kpi_portefeuille;
$page_titles["vue_kpi_portefeuille"] = &$pageTitlesvue_kpi_portefeuille;


changeTextControlsToDate( "vue_kpi_portefeuille" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vue_kpi_portefeuille"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vue_kpi_portefeuille"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vue_kpi_portefeuille()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "projets_en_cours,  	projets_termines,  	projets_en_retard,  	projets_depassement_budget,  	activites_en_cours,  	activites_en_retard,  	activites_terminees,  	budget_global,  	depenses_realisees,  	budget_restant,  	taux_execution_budgetaire";
$proto0["m_strFrom"] = "FROM vue_kpi_portefeuille";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "projets_en_cours",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "vue_kpi_portefeuille"
));

$proto6["m_sql"] = "projets_en_cours";
$proto6["m_srcTableName"] = "vue_kpi_portefeuille";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "projets_termines",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "vue_kpi_portefeuille"
));

$proto8["m_sql"] = "projets_termines";
$proto8["m_srcTableName"] = "vue_kpi_portefeuille";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projets_en_retard",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "vue_kpi_portefeuille"
));

$proto10["m_sql"] = "projets_en_retard";
$proto10["m_srcTableName"] = "vue_kpi_portefeuille";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "projets_depassement_budget",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "vue_kpi_portefeuille"
));

$proto12["m_sql"] = "projets_depassement_budget";
$proto12["m_srcTableName"] = "vue_kpi_portefeuille";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "activites_en_cours",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "vue_kpi_portefeuille"
));

$proto14["m_sql"] = "activites_en_cours";
$proto14["m_srcTableName"] = "vue_kpi_portefeuille";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "activites_en_retard",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "vue_kpi_portefeuille"
));

$proto16["m_sql"] = "activites_en_retard";
$proto16["m_srcTableName"] = "vue_kpi_portefeuille";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "activites_terminees",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "vue_kpi_portefeuille"
));

$proto18["m_sql"] = "activites_terminees";
$proto18["m_srcTableName"] = "vue_kpi_portefeuille";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "budget_global",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "vue_kpi_portefeuille"
));

$proto20["m_sql"] = "budget_global";
$proto20["m_srcTableName"] = "vue_kpi_portefeuille";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "depenses_realisees",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "vue_kpi_portefeuille"
));

$proto22["m_sql"] = "depenses_realisees";
$proto22["m_srcTableName"] = "vue_kpi_portefeuille";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "budget_restant",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "vue_kpi_portefeuille"
));

$proto24["m_sql"] = "budget_restant";
$proto24["m_srcTableName"] = "vue_kpi_portefeuille";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "taux_execution_budgetaire",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "vue_kpi_portefeuille"
));

$proto26["m_sql"] = "taux_execution_budgetaire";
$proto26["m_srcTableName"] = "vue_kpi_portefeuille";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "vue_kpi_portefeuille";
$proto29["m_srcTableName"] = "vue_kpi_portefeuille";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "projets_en_cours";
$proto29["m_columns"][] = "projets_termines";
$proto29["m_columns"][] = "projets_en_retard";
$proto29["m_columns"][] = "projets_depassement_budget";
$proto29["m_columns"][] = "activites_en_cours";
$proto29["m_columns"][] = "activites_en_retard";
$proto29["m_columns"][] = "activites_terminees";
$proto29["m_columns"][] = "budget_global";
$proto29["m_columns"][] = "depenses_realisees";
$proto29["m_columns"][] = "budget_restant";
$proto29["m_columns"][] = "taux_execution_budgetaire";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "vue_kpi_portefeuille";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "vue_kpi_portefeuille";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vue_kpi_portefeuille";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vue_kpi_portefeuille = createSqlQuery_vue_kpi_portefeuille();


	
		;

											

$tdatavue_kpi_portefeuille[".sqlquery"] = $queryData_vue_kpi_portefeuille;



$tdatavue_kpi_portefeuille[".hasEvents"] = false;

?>