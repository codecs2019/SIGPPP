<?php
$tdatavue_performance_projets = array();
$tdatavue_performance_projets[".searchableFields"] = array();
$tdatavue_performance_projets[".ShortName"] = "vue_performance_projets";
$tdatavue_performance_projets[".OwnerID"] = "";
$tdatavue_performance_projets[".OriginalTable"] = "vue_performance_projets";


$tdatavue_performance_projets[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavue_performance_projets[".originalPagesByType"] = $tdatavue_performance_projets[".pagesByType"];
$tdatavue_performance_projets[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavue_performance_projets[".originalPages"] = $tdatavue_performance_projets[".pages"];
$tdatavue_performance_projets[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavue_performance_projets[".originalDefaultPages"] = $tdatavue_performance_projets[".defaultPages"];

//	field labels
$fieldLabelsvue_performance_projets = array();
$fieldToolTipsvue_performance_projets = array();
$pageTitlesvue_performance_projets = array();
$placeHoldersvue_performance_projets = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvue_performance_projets["French"] = array();
	$fieldToolTipsvue_performance_projets["French"] = array();
	$placeHoldersvue_performance_projets["French"] = array();
	$pageTitlesvue_performance_projets["French"] = array();
	$fieldLabelsvue_performance_projets["French"]["cible"] = "Cible";
	$fieldToolTipsvue_performance_projets["French"]["cible"] = "";
	$placeHoldersvue_performance_projets["French"]["cible"] = "";
	$fieldLabelsvue_performance_projets["French"]["code_projet"] = "Code Projet";
	$fieldToolTipsvue_performance_projets["French"]["code_projet"] = "";
	$placeHoldersvue_performance_projets["French"]["code_projet"] = "";
	$fieldLabelsvue_performance_projets["French"]["indicateur"] = "Indicateur";
	$fieldToolTipsvue_performance_projets["French"]["indicateur"] = "";
	$placeHoldersvue_performance_projets["French"]["indicateur"] = "";
	$fieldLabelsvue_performance_projets["French"]["periode"] = "Periode";
	$fieldToolTipsvue_performance_projets["French"]["periode"] = "";
	$placeHoldersvue_performance_projets["French"]["periode"] = "";
	$fieldLabelsvue_performance_projets["French"]["programme"] = "Programme";
	$fieldToolTipsvue_performance_projets["French"]["programme"] = "";
	$placeHoldersvue_performance_projets["French"]["programme"] = "";
	$fieldLabelsvue_performance_projets["French"]["projet"] = "Projet";
	$fieldToolTipsvue_performance_projets["French"]["projet"] = "";
	$placeHoldersvue_performance_projets["French"]["projet"] = "";
	$fieldLabelsvue_performance_projets["French"]["projet_id"] = "Projet Id";
	$fieldToolTipsvue_performance_projets["French"]["projet_id"] = "";
	$placeHoldersvue_performance_projets["French"]["projet_id"] = "";
	$fieldLabelsvue_performance_projets["French"]["taux_realisation"] = "Taux Realisation";
	$fieldToolTipsvue_performance_projets["French"]["taux_realisation"] = "";
	$placeHoldersvue_performance_projets["French"]["taux_realisation"] = "";
	$fieldLabelsvue_performance_projets["French"]["type_indicateur"] = "Type Indicateur";
	$fieldToolTipsvue_performance_projets["French"]["type_indicateur"] = "";
	$placeHoldersvue_performance_projets["French"]["type_indicateur"] = "";
	$fieldLabelsvue_performance_projets["French"]["unite"] = "Unite";
	$fieldToolTipsvue_performance_projets["French"]["unite"] = "";
	$placeHoldersvue_performance_projets["French"]["unite"] = "";
	$fieldLabelsvue_performance_projets["French"]["valeur_actuelle"] = "Valeur Actuelle";
	$fieldToolTipsvue_performance_projets["French"]["valeur_actuelle"] = "";
	$placeHoldersvue_performance_projets["French"]["valeur_actuelle"] = "";
	if (count($fieldToolTipsvue_performance_projets["French"]))
		$tdatavue_performance_projets[".isUseToolTips"] = true;
}


	$tdatavue_performance_projets[".NCSearch"] = true;



$tdatavue_performance_projets[".shortTableName"] = "vue_performance_projets";
$tdatavue_performance_projets[".nSecOptions"] = 0;

$tdatavue_performance_projets[".mainTableOwnerID"] = "";
$tdatavue_performance_projets[".entityType"] = 0;
$tdatavue_performance_projets[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatavue_performance_projets[".strOriginalTableName"] = "vue_performance_projets";

	



$tdatavue_performance_projets[".showAddInPopup"] = false;

$tdatavue_performance_projets[".showEditInPopup"] = false;

$tdatavue_performance_projets[".showViewInPopup"] = false;

$tdatavue_performance_projets[".listAjax"] = false;
//	temporary
//$tdatavue_performance_projets[".listAjax"] = false;

	$tdatavue_performance_projets[".audit"] = false;

	$tdatavue_performance_projets[".locking"] = false;


$pages = $tdatavue_performance_projets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavue_performance_projets[".edit"] = true;
	$tdatavue_performance_projets[".afterEditAction"] = 1;
	$tdatavue_performance_projets[".closePopupAfterEdit"] = 1;
	$tdatavue_performance_projets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavue_performance_projets[".add"] = true;
$tdatavue_performance_projets[".afterAddAction"] = 1;
$tdatavue_performance_projets[".closePopupAfterAdd"] = 1;
$tdatavue_performance_projets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavue_performance_projets[".list"] = true;
}



$tdatavue_performance_projets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavue_performance_projets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavue_performance_projets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavue_performance_projets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavue_performance_projets[".printFriendly"] = true;
}



$tdatavue_performance_projets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavue_performance_projets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavue_performance_projets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavue_performance_projets[".isUseAjaxSuggest"] = true;





$tdatavue_performance_projets[".ajaxCodeSnippetAdded"] = false;

$tdatavue_performance_projets[".buttonsAdded"] = false;

$tdatavue_performance_projets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavue_performance_projets[".isUseTimeForSearch"] = false;


$tdatavue_performance_projets[".badgeColor"] = "E67349";


$tdatavue_performance_projets[".allSearchFields"] = array();
$tdatavue_performance_projets[".filterFields"] = array();
$tdatavue_performance_projets[".requiredSearchFields"] = array();

$tdatavue_performance_projets[".googleLikeFields"] = array();
$tdatavue_performance_projets[".googleLikeFields"][] = "projet_id";
$tdatavue_performance_projets[".googleLikeFields"][] = "code_projet";
$tdatavue_performance_projets[".googleLikeFields"][] = "projet";
$tdatavue_performance_projets[".googleLikeFields"][] = "type_indicateur";
$tdatavue_performance_projets[".googleLikeFields"][] = "indicateur";
$tdatavue_performance_projets[".googleLikeFields"][] = "unite";
$tdatavue_performance_projets[".googleLikeFields"][] = "cible";
$tdatavue_performance_projets[".googleLikeFields"][] = "valeur_actuelle";
$tdatavue_performance_projets[".googleLikeFields"][] = "taux_realisation";
$tdatavue_performance_projets[".googleLikeFields"][] = "periode";
$tdatavue_performance_projets[".googleLikeFields"][] = "programme";



$tdatavue_performance_projets[".tableType"] = "list";

$tdatavue_performance_projets[".printerPageOrientation"] = 0;
$tdatavue_performance_projets[".nPrinterPageScale"] = 100;

$tdatavue_performance_projets[".nPrinterSplitRecords"] = 40;

$tdatavue_performance_projets[".geocodingEnabled"] = false;










$tdatavue_performance_projets[".pageSize"] = 20;

$tdatavue_performance_projets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavue_performance_projets[".strOrderBy"] = $tstrOrderBy;

$tdatavue_performance_projets[".orderindexes"] = array();


$tdatavue_performance_projets[".sqlHead"] = "SELECT projet_id,  	code_projet,  	projet,  	type_indicateur,  	indicateur,  	unite,  	cible,  	valeur_actuelle,  	taux_realisation,  	periode,  	programme";
$tdatavue_performance_projets[".sqlFrom"] = "FROM vue_performance_projets";
$tdatavue_performance_projets[".sqlWhereExpr"] = "";
$tdatavue_performance_projets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavue_performance_projets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavue_performance_projets[".arrGroupsPerPage"] = $arrGPP;

$tdatavue_performance_projets[".highlightSearchResults"] = true;

$tableKeysvue_performance_projets = array();
$tdatavue_performance_projets[".Keys"] = $tableKeysvue_performance_projets;


$tdatavue_performance_projets[".hideMobileList"] = array();




//	projet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projet_id";
	$fdata["GoodName"] = "projet_id";
	$fdata["ownerTable"] = "vue_performance_projets";
	$fdata["Label"] = GetFieldLabel("vue_performance_projets","projet_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "projet_id";

		$fdata["sourceSingle"] = "projet_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projet_id";

	
	
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


	$tdatavue_performance_projets["projet_id"] = $fdata;
		$tdatavue_performance_projets[".searchableFields"][] = "projet_id";
//	code_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code_projet";
	$fdata["GoodName"] = "code_projet";
	$fdata["ownerTable"] = "vue_performance_projets";
	$fdata["Label"] = GetFieldLabel("vue_performance_projets","code_projet");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "code_projet";

		$fdata["sourceSingle"] = "code_projet";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "code_projet";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatavue_performance_projets["code_projet"] = $fdata;
		$tdatavue_performance_projets[".searchableFields"][] = "code_projet";
//	projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projet";
	$fdata["GoodName"] = "projet";
	$fdata["ownerTable"] = "vue_performance_projets";
	$fdata["Label"] = GetFieldLabel("vue_performance_projets","projet");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "projet";

		$fdata["sourceSingle"] = "projet";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projet";

	
	
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
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatavue_performance_projets["projet"] = $fdata;
		$tdatavue_performance_projets[".searchableFields"][] = "projet";
//	type_indicateur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type_indicateur";
	$fdata["GoodName"] = "type_indicateur";
	$fdata["ownerTable"] = "vue_performance_projets";
	$fdata["Label"] = GetFieldLabel("vue_performance_projets","type_indicateur");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "type_indicateur";

		$fdata["sourceSingle"] = "type_indicateur";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_indicateur";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Strategique";
	$edata["LookupValues"][] = "Financier";
	$edata["LookupValues"][] = "PMO";
	$edata["LookupValues"][] = "Operationnel";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatavue_performance_projets["type_indicateur"] = $fdata;
		$tdatavue_performance_projets[".searchableFields"][] = "type_indicateur";
//	indicateur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "indicateur";
	$fdata["GoodName"] = "indicateur";
	$fdata["ownerTable"] = "vue_performance_projets";
	$fdata["Label"] = GetFieldLabel("vue_performance_projets","indicateur");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicateur";

		$fdata["sourceSingle"] = "indicateur";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicateur";

	
	
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
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatavue_performance_projets["indicateur"] = $fdata;
		$tdatavue_performance_projets[".searchableFields"][] = "indicateur";
//	unite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unite";
	$fdata["GoodName"] = "unite";
	$fdata["ownerTable"] = "vue_performance_projets";
	$fdata["Label"] = GetFieldLabel("vue_performance_projets","unite");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "unite";

		$fdata["sourceSingle"] = "unite";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unite";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatavue_performance_projets["unite"] = $fdata;
		$tdatavue_performance_projets[".searchableFields"][] = "unite";
//	cible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cible";
	$fdata["GoodName"] = "cible";
	$fdata["ownerTable"] = "vue_performance_projets";
	$fdata["Label"] = GetFieldLabel("vue_performance_projets","cible");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cible";

		$fdata["sourceSingle"] = "cible";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cible";

	
	
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


	$tdatavue_performance_projets["cible"] = $fdata;
		$tdatavue_performance_projets[".searchableFields"][] = "cible";
//	valeur_actuelle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "valeur_actuelle";
	$fdata["GoodName"] = "valeur_actuelle";
	$fdata["ownerTable"] = "vue_performance_projets";
	$fdata["Label"] = GetFieldLabel("vue_performance_projets","valeur_actuelle");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "valeur_actuelle";

		$fdata["sourceSingle"] = "valeur_actuelle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valeur_actuelle";

	
	
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


	$tdatavue_performance_projets["valeur_actuelle"] = $fdata;
		$tdatavue_performance_projets[".searchableFields"][] = "valeur_actuelle";
//	taux_realisation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "taux_realisation";
	$fdata["GoodName"] = "taux_realisation";
	$fdata["ownerTable"] = "vue_performance_projets";
	$fdata["Label"] = GetFieldLabel("vue_performance_projets","taux_realisation");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "taux_realisation";

		$fdata["sourceSingle"] = "taux_realisation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taux_realisation";

	
	
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


	$tdatavue_performance_projets["taux_realisation"] = $fdata;
		$tdatavue_performance_projets[".searchableFields"][] = "taux_realisation";
//	periode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "periode";
	$fdata["GoodName"] = "periode";
	$fdata["ownerTable"] = "vue_performance_projets";
	$fdata["Label"] = GetFieldLabel("vue_performance_projets","periode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "periode";

		$fdata["sourceSingle"] = "periode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periode";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatavue_performance_projets["periode"] = $fdata;
		$tdatavue_performance_projets[".searchableFields"][] = "periode";
//	programme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "programme";
	$fdata["GoodName"] = "programme";
	$fdata["ownerTable"] = "vue_performance_projets";
	$fdata["Label"] = GetFieldLabel("vue_performance_projets","programme");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "programme";

		$fdata["sourceSingle"] = "programme";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "programme";

	
	
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
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatavue_performance_projets["programme"] = $fdata;
		$tdatavue_performance_projets[".searchableFields"][] = "programme";


$tables_data["vue_performance_projets"]=&$tdatavue_performance_projets;
$field_labels["vue_performance_projets"] = &$fieldLabelsvue_performance_projets;
$fieldToolTips["vue_performance_projets"] = &$fieldToolTipsvue_performance_projets;
$placeHolders["vue_performance_projets"] = &$placeHoldersvue_performance_projets;
$page_titles["vue_performance_projets"] = &$pageTitlesvue_performance_projets;


changeTextControlsToDate( "vue_performance_projets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vue_performance_projets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vue_performance_projets"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vue_performance_projets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "projet_id,  	code_projet,  	projet,  	type_indicateur,  	indicateur,  	unite,  	cible,  	valeur_actuelle,  	taux_realisation,  	periode,  	programme";
$proto0["m_strFrom"] = "FROM vue_performance_projets";
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
	"m_strName" => "projet_id",
	"m_strTable" => "vue_performance_projets",
	"m_srcTableName" => "vue_performance_projets"
));

$proto6["m_sql"] = "projet_id";
$proto6["m_srcTableName"] = "vue_performance_projets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code_projet",
	"m_strTable" => "vue_performance_projets",
	"m_srcTableName" => "vue_performance_projets"
));

$proto8["m_sql"] = "code_projet";
$proto8["m_srcTableName"] = "vue_performance_projets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projet",
	"m_strTable" => "vue_performance_projets",
	"m_srcTableName" => "vue_performance_projets"
));

$proto10["m_sql"] = "projet";
$proto10["m_srcTableName"] = "vue_performance_projets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "type_indicateur",
	"m_strTable" => "vue_performance_projets",
	"m_srcTableName" => "vue_performance_projets"
));

$proto12["m_sql"] = "type_indicateur";
$proto12["m_srcTableName"] = "vue_performance_projets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "indicateur",
	"m_strTable" => "vue_performance_projets",
	"m_srcTableName" => "vue_performance_projets"
));

$proto14["m_sql"] = "indicateur";
$proto14["m_srcTableName"] = "vue_performance_projets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unite",
	"m_strTable" => "vue_performance_projets",
	"m_srcTableName" => "vue_performance_projets"
));

$proto16["m_sql"] = "unite";
$proto16["m_srcTableName"] = "vue_performance_projets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cible",
	"m_strTable" => "vue_performance_projets",
	"m_srcTableName" => "vue_performance_projets"
));

$proto18["m_sql"] = "cible";
$proto18["m_srcTableName"] = "vue_performance_projets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "valeur_actuelle",
	"m_strTable" => "vue_performance_projets",
	"m_srcTableName" => "vue_performance_projets"
));

$proto20["m_sql"] = "valeur_actuelle";
$proto20["m_srcTableName"] = "vue_performance_projets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "taux_realisation",
	"m_strTable" => "vue_performance_projets",
	"m_srcTableName" => "vue_performance_projets"
));

$proto22["m_sql"] = "taux_realisation";
$proto22["m_srcTableName"] = "vue_performance_projets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "periode",
	"m_strTable" => "vue_performance_projets",
	"m_srcTableName" => "vue_performance_projets"
));

$proto24["m_sql"] = "periode";
$proto24["m_srcTableName"] = "vue_performance_projets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "programme",
	"m_strTable" => "vue_performance_projets",
	"m_srcTableName" => "vue_performance_projets"
));

$proto26["m_sql"] = "programme";
$proto26["m_srcTableName"] = "vue_performance_projets";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "vue_performance_projets";
$proto29["m_srcTableName"] = "vue_performance_projets";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "projet_id";
$proto29["m_columns"][] = "code_projet";
$proto29["m_columns"][] = "projet";
$proto29["m_columns"][] = "type_indicateur";
$proto29["m_columns"][] = "indicateur";
$proto29["m_columns"][] = "unite";
$proto29["m_columns"][] = "cible";
$proto29["m_columns"][] = "valeur_actuelle";
$proto29["m_columns"][] = "taux_realisation";
$proto29["m_columns"][] = "periode";
$proto29["m_columns"][] = "programme";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "vue_performance_projets";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "vue_performance_projets";
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
$proto0["m_srcTableName"]="vue_performance_projets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vue_performance_projets = createSqlQuery_vue_performance_projets();


	
		;

											

$tdatavue_performance_projets[".sqlquery"] = $queryData_vue_performance_projets;



$tdatavue_performance_projets[".hasEvents"] = false;

?>