<?php
$tdatavue_projets_derive = array();
$tdatavue_projets_derive[".searchableFields"] = array();
$tdatavue_projets_derive[".ShortName"] = "vue_projets_derive";
$tdatavue_projets_derive[".OwnerID"] = "";
$tdatavue_projets_derive[".OriginalTable"] = "vue_projets_derive";


$tdatavue_projets_derive[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavue_projets_derive[".originalPagesByType"] = $tdatavue_projets_derive[".pagesByType"];
$tdatavue_projets_derive[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavue_projets_derive[".originalPages"] = $tdatavue_projets_derive[".pages"];
$tdatavue_projets_derive[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavue_projets_derive[".originalDefaultPages"] = $tdatavue_projets_derive[".defaultPages"];

//	field labels
$fieldLabelsvue_projets_derive = array();
$fieldToolTipsvue_projets_derive = array();
$pageTitlesvue_projets_derive = array();
$placeHoldersvue_projets_derive = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvue_projets_derive["French"] = array();
	$fieldToolTipsvue_projets_derive["French"] = array();
	$placeHoldersvue_projets_derive["French"] = array();
	$pageTitlesvue_projets_derive["French"] = array();
	$fieldLabelsvue_projets_derive["French"]["alerte"] = "Alerte";
	$fieldToolTipsvue_projets_derive["French"]["alerte"] = "";
	$placeHoldersvue_projets_derive["French"]["alerte"] = "";
	$fieldLabelsvue_projets_derive["French"]["code_projet"] = "Code Projet";
	$fieldToolTipsvue_projets_derive["French"]["code_projet"] = "";
	$placeHoldersvue_projets_derive["French"]["code_projet"] = "";
	$fieldLabelsvue_projets_derive["French"]["projet"] = "Projet";
	$fieldToolTipsvue_projets_derive["French"]["projet"] = "";
	$placeHoldersvue_projets_derive["French"]["projet"] = "";
	$fieldLabelsvue_projets_derive["French"]["projet_id"] = "Projet Id";
	$fieldToolTipsvue_projets_derive["French"]["projet_id"] = "";
	$placeHoldersvue_projets_derive["French"]["projet_id"] = "";
	$fieldLabelsvue_projets_derive["French"]["statut"] = "Statut";
	$fieldToolTipsvue_projets_derive["French"]["statut"] = "";
	$placeHoldersvue_projets_derive["French"]["statut"] = "";
	$fieldLabelsvue_projets_derive["French"]["taux_avancement"] = "Taux Avancement";
	$fieldToolTipsvue_projets_derive["French"]["taux_avancement"] = "";
	$placeHoldersvue_projets_derive["French"]["taux_avancement"] = "";
	$fieldLabelsvue_projets_derive["French"]["taux_budget"] = "Taux Budget";
	$fieldToolTipsvue_projets_derive["French"]["taux_budget"] = "";
	$placeHoldersvue_projets_derive["French"]["taux_budget"] = "";
	if (count($fieldToolTipsvue_projets_derive["French"]))
		$tdatavue_projets_derive[".isUseToolTips"] = true;
}


	$tdatavue_projets_derive[".NCSearch"] = true;



$tdatavue_projets_derive[".shortTableName"] = "vue_projets_derive";
$tdatavue_projets_derive[".nSecOptions"] = 0;

$tdatavue_projets_derive[".mainTableOwnerID"] = "";
$tdatavue_projets_derive[".entityType"] = 0;
$tdatavue_projets_derive[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatavue_projets_derive[".strOriginalTableName"] = "vue_projets_derive";

	



$tdatavue_projets_derive[".showAddInPopup"] = false;

$tdatavue_projets_derive[".showEditInPopup"] = false;

$tdatavue_projets_derive[".showViewInPopup"] = false;

$tdatavue_projets_derive[".listAjax"] = false;
//	temporary
//$tdatavue_projets_derive[".listAjax"] = false;

	$tdatavue_projets_derive[".audit"] = false;

	$tdatavue_projets_derive[".locking"] = false;


$pages = $tdatavue_projets_derive[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavue_projets_derive[".edit"] = true;
	$tdatavue_projets_derive[".afterEditAction"] = 1;
	$tdatavue_projets_derive[".closePopupAfterEdit"] = 1;
	$tdatavue_projets_derive[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavue_projets_derive[".add"] = true;
$tdatavue_projets_derive[".afterAddAction"] = 1;
$tdatavue_projets_derive[".closePopupAfterAdd"] = 1;
$tdatavue_projets_derive[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavue_projets_derive[".list"] = true;
}



$tdatavue_projets_derive[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavue_projets_derive[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavue_projets_derive[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavue_projets_derive[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavue_projets_derive[".printFriendly"] = true;
}



$tdatavue_projets_derive[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavue_projets_derive[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavue_projets_derive[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavue_projets_derive[".isUseAjaxSuggest"] = true;





$tdatavue_projets_derive[".ajaxCodeSnippetAdded"] = false;

$tdatavue_projets_derive[".buttonsAdded"] = false;

$tdatavue_projets_derive[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavue_projets_derive[".isUseTimeForSearch"] = false;


$tdatavue_projets_derive[".badgeColor"] = "6b8e23";


$tdatavue_projets_derive[".allSearchFields"] = array();
$tdatavue_projets_derive[".filterFields"] = array();
$tdatavue_projets_derive[".requiredSearchFields"] = array();

$tdatavue_projets_derive[".googleLikeFields"] = array();
$tdatavue_projets_derive[".googleLikeFields"][] = "projet_id";
$tdatavue_projets_derive[".googleLikeFields"][] = "code_projet";
$tdatavue_projets_derive[".googleLikeFields"][] = "projet";
$tdatavue_projets_derive[".googleLikeFields"][] = "statut";
$tdatavue_projets_derive[".googleLikeFields"][] = "taux_avancement";
$tdatavue_projets_derive[".googleLikeFields"][] = "taux_budget";
$tdatavue_projets_derive[".googleLikeFields"][] = "alerte";



$tdatavue_projets_derive[".tableType"] = "list";

$tdatavue_projets_derive[".printerPageOrientation"] = 0;
$tdatavue_projets_derive[".nPrinterPageScale"] = 100;

$tdatavue_projets_derive[".nPrinterSplitRecords"] = 40;

$tdatavue_projets_derive[".geocodingEnabled"] = false;










$tdatavue_projets_derive[".pageSize"] = 20;

$tdatavue_projets_derive[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavue_projets_derive[".strOrderBy"] = $tstrOrderBy;

$tdatavue_projets_derive[".orderindexes"] = array();


$tdatavue_projets_derive[".sqlHead"] = "SELECT projet_id,  	code_projet,  	projet,  	statut,  	taux_avancement,  	taux_budget,  	alerte";
$tdatavue_projets_derive[".sqlFrom"] = "FROM vue_projets_derive";
$tdatavue_projets_derive[".sqlWhereExpr"] = "";
$tdatavue_projets_derive[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavue_projets_derive[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavue_projets_derive[".arrGroupsPerPage"] = $arrGPP;

$tdatavue_projets_derive[".highlightSearchResults"] = true;

$tableKeysvue_projets_derive = array();
$tdatavue_projets_derive[".Keys"] = $tableKeysvue_projets_derive;


$tdatavue_projets_derive[".hideMobileList"] = array();




//	projet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projet_id";
	$fdata["GoodName"] = "projet_id";
	$fdata["ownerTable"] = "vue_projets_derive";
	$fdata["Label"] = GetFieldLabel("vue_projets_derive","projet_id");
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


	$tdatavue_projets_derive["projet_id"] = $fdata;
		$tdatavue_projets_derive[".searchableFields"][] = "projet_id";
//	code_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code_projet";
	$fdata["GoodName"] = "code_projet";
	$fdata["ownerTable"] = "vue_projets_derive";
	$fdata["Label"] = GetFieldLabel("vue_projets_derive","code_projet");
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


	$tdatavue_projets_derive["code_projet"] = $fdata;
		$tdatavue_projets_derive[".searchableFields"][] = "code_projet";
//	projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projet";
	$fdata["GoodName"] = "projet";
	$fdata["ownerTable"] = "vue_projets_derive";
	$fdata["Label"] = GetFieldLabel("vue_projets_derive","projet");
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


	$tdatavue_projets_derive["projet"] = $fdata;
		$tdatavue_projets_derive[".searchableFields"][] = "projet";
//	statut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "statut";
	$fdata["GoodName"] = "statut";
	$fdata["ownerTable"] = "vue_projets_derive";
	$fdata["Label"] = GetFieldLabel("vue_projets_derive","statut");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "statut";

		$fdata["sourceSingle"] = "statut";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statut";

	
	
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
	$edata["LookupValues"][] = "Brouillon";
	$edata["LookupValues"][] = "Soumis";
	$edata["LookupValues"][] = "Valide";
	$edata["LookupValues"][] = "EnCours";
	$edata["LookupValues"][] = "Cloture";

	
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


	$tdatavue_projets_derive["statut"] = $fdata;
		$tdatavue_projets_derive[".searchableFields"][] = "statut";
//	taux_avancement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "taux_avancement";
	$fdata["GoodName"] = "taux_avancement";
	$fdata["ownerTable"] = "vue_projets_derive";
	$fdata["Label"] = GetFieldLabel("vue_projets_derive","taux_avancement");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "taux_avancement";

		$fdata["sourceSingle"] = "taux_avancement";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taux_avancement";

	
	
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


	$tdatavue_projets_derive["taux_avancement"] = $fdata;
		$tdatavue_projets_derive[".searchableFields"][] = "taux_avancement";
//	taux_budget
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "taux_budget";
	$fdata["GoodName"] = "taux_budget";
	$fdata["ownerTable"] = "vue_projets_derive";
	$fdata["Label"] = GetFieldLabel("vue_projets_derive","taux_budget");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "taux_budget";

		$fdata["sourceSingle"] = "taux_budget";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taux_budget";

	
	
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


	$tdatavue_projets_derive["taux_budget"] = $fdata;
		$tdatavue_projets_derive[".searchableFields"][] = "taux_budget";
//	alerte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "alerte";
	$fdata["GoodName"] = "alerte";
	$fdata["ownerTable"] = "vue_projets_derive";
	$fdata["Label"] = GetFieldLabel("vue_projets_derive","alerte");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "alerte";

		$fdata["sourceSingle"] = "alerte";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alerte";

	
	
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
			$edata["EditParams"].= " maxlength=17";

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


	$tdatavue_projets_derive["alerte"] = $fdata;
		$tdatavue_projets_derive[".searchableFields"][] = "alerte";


$tables_data["vue_projets_derive"]=&$tdatavue_projets_derive;
$field_labels["vue_projets_derive"] = &$fieldLabelsvue_projets_derive;
$fieldToolTips["vue_projets_derive"] = &$fieldToolTipsvue_projets_derive;
$placeHolders["vue_projets_derive"] = &$placeHoldersvue_projets_derive;
$page_titles["vue_projets_derive"] = &$pageTitlesvue_projets_derive;


changeTextControlsToDate( "vue_projets_derive" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vue_projets_derive"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vue_projets_derive"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="projet";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Projets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vue_projets_derive"][0] = $masterParams;
				$masterTablesData["vue_projets_derive"][0]["masterKeys"] = array();
	$masterTablesData["vue_projets_derive"][0]["masterKeys"][]="id";
				$masterTablesData["vue_projets_derive"][0]["detailKeys"] = array();
	$masterTablesData["vue_projets_derive"][0]["detailKeys"][]="projet_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vue_projets_derive()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "projet_id,  	code_projet,  	projet,  	statut,  	taux_avancement,  	taux_budget,  	alerte";
$proto0["m_strFrom"] = "FROM vue_projets_derive";
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
	"m_strTable" => "vue_projets_derive",
	"m_srcTableName" => "vue_projets_derive"
));

$proto6["m_sql"] = "projet_id";
$proto6["m_srcTableName"] = "vue_projets_derive";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code_projet",
	"m_strTable" => "vue_projets_derive",
	"m_srcTableName" => "vue_projets_derive"
));

$proto8["m_sql"] = "code_projet";
$proto8["m_srcTableName"] = "vue_projets_derive";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projet",
	"m_strTable" => "vue_projets_derive",
	"m_srcTableName" => "vue_projets_derive"
));

$proto10["m_sql"] = "projet";
$proto10["m_srcTableName"] = "vue_projets_derive";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "statut",
	"m_strTable" => "vue_projets_derive",
	"m_srcTableName" => "vue_projets_derive"
));

$proto12["m_sql"] = "statut";
$proto12["m_srcTableName"] = "vue_projets_derive";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "taux_avancement",
	"m_strTable" => "vue_projets_derive",
	"m_srcTableName" => "vue_projets_derive"
));

$proto14["m_sql"] = "taux_avancement";
$proto14["m_srcTableName"] = "vue_projets_derive";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "taux_budget",
	"m_strTable" => "vue_projets_derive",
	"m_srcTableName" => "vue_projets_derive"
));

$proto16["m_sql"] = "taux_budget";
$proto16["m_srcTableName"] = "vue_projets_derive";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "alerte",
	"m_strTable" => "vue_projets_derive",
	"m_srcTableName" => "vue_projets_derive"
));

$proto18["m_sql"] = "alerte";
$proto18["m_srcTableName"] = "vue_projets_derive";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "vue_projets_derive";
$proto21["m_srcTableName"] = "vue_projets_derive";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "projet_id";
$proto21["m_columns"][] = "code_projet";
$proto21["m_columns"][] = "projet";
$proto21["m_columns"][] = "statut";
$proto21["m_columns"][] = "taux_avancement";
$proto21["m_columns"][] = "taux_budget";
$proto21["m_columns"][] = "alerte";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "vue_projets_derive";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "vue_projets_derive";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vue_projets_derive";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vue_projets_derive = createSqlQuery_vue_projets_derive();


	
		;

							

$tdatavue_projets_derive[".sqlquery"] = $queryData_vue_projets_derive;



$tdatavue_projets_derive[".hasEvents"] = false;

?>