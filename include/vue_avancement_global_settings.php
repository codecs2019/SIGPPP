<?php
$tdatavue_avancement_global = array();
$tdatavue_avancement_global[".searchableFields"] = array();
$tdatavue_avancement_global[".ShortName"] = "vue_avancement_global";
$tdatavue_avancement_global[".OwnerID"] = "";
$tdatavue_avancement_global[".OriginalTable"] = "vue_avancement_global";


$tdatavue_avancement_global[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavue_avancement_global[".originalPagesByType"] = $tdatavue_avancement_global[".pagesByType"];
$tdatavue_avancement_global[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavue_avancement_global[".originalPages"] = $tdatavue_avancement_global[".pages"];
$tdatavue_avancement_global[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavue_avancement_global[".originalDefaultPages"] = $tdatavue_avancement_global[".defaultPages"];

//	field labels
$fieldLabelsvue_avancement_global = array();
$fieldToolTipsvue_avancement_global = array();
$pageTitlesvue_avancement_global = array();
$placeHoldersvue_avancement_global = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvue_avancement_global["French"] = array();
	$fieldToolTipsvue_avancement_global["French"] = array();
	$placeHoldersvue_avancement_global["French"] = array();
	$pageTitlesvue_avancement_global["French"] = array();
	$fieldLabelsvue_avancement_global["French"]["activites_en_cours"] = "Activites En Cours";
	$fieldToolTipsvue_avancement_global["French"]["activites_en_cours"] = "";
	$placeHoldersvue_avancement_global["French"]["activites_en_cours"] = "";
	$fieldLabelsvue_avancement_global["French"]["activites_terminees"] = "Activites Terminees";
	$fieldToolTipsvue_avancement_global["French"]["activites_terminees"] = "";
	$placeHoldersvue_avancement_global["French"]["activites_terminees"] = "";
	$fieldLabelsvue_avancement_global["French"]["code_projet"] = "Code Projet";
	$fieldToolTipsvue_avancement_global["French"]["code_projet"] = "";
	$placeHoldersvue_avancement_global["French"]["code_projet"] = "";
	$fieldLabelsvue_avancement_global["French"]["nb_activites"] = "Nb Activites";
	$fieldToolTipsvue_avancement_global["French"]["nb_activites"] = "";
	$placeHoldersvue_avancement_global["French"]["nb_activites"] = "";
	$fieldLabelsvue_avancement_global["French"]["programme"] = "Programme";
	$fieldToolTipsvue_avancement_global["French"]["programme"] = "";
	$placeHoldersvue_avancement_global["French"]["programme"] = "";
	$fieldLabelsvue_avancement_global["French"]["projet"] = "Projet";
	$fieldToolTipsvue_avancement_global["French"]["projet"] = "";
	$placeHoldersvue_avancement_global["French"]["projet"] = "";
	$fieldLabelsvue_avancement_global["French"]["projet_id"] = "Projet Id";
	$fieldToolTipsvue_avancement_global["French"]["projet_id"] = "";
	$placeHoldersvue_avancement_global["French"]["projet_id"] = "";
	$fieldLabelsvue_avancement_global["French"]["taux_avancement"] = "Taux Avancement";
	$fieldToolTipsvue_avancement_global["French"]["taux_avancement"] = "";
	$placeHoldersvue_avancement_global["French"]["taux_avancement"] = "";
	if (count($fieldToolTipsvue_avancement_global["French"]))
		$tdatavue_avancement_global[".isUseToolTips"] = true;
}


	$tdatavue_avancement_global[".NCSearch"] = true;



$tdatavue_avancement_global[".shortTableName"] = "vue_avancement_global";
$tdatavue_avancement_global[".nSecOptions"] = 0;

$tdatavue_avancement_global[".mainTableOwnerID"] = "";
$tdatavue_avancement_global[".entityType"] = 0;
$tdatavue_avancement_global[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatavue_avancement_global[".strOriginalTableName"] = "vue_avancement_global";

	



$tdatavue_avancement_global[".showAddInPopup"] = false;

$tdatavue_avancement_global[".showEditInPopup"] = false;

$tdatavue_avancement_global[".showViewInPopup"] = false;

$tdatavue_avancement_global[".listAjax"] = false;
//	temporary
//$tdatavue_avancement_global[".listAjax"] = false;

	$tdatavue_avancement_global[".audit"] = false;

	$tdatavue_avancement_global[".locking"] = false;


$pages = $tdatavue_avancement_global[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavue_avancement_global[".edit"] = true;
	$tdatavue_avancement_global[".afterEditAction"] = 1;
	$tdatavue_avancement_global[".closePopupAfterEdit"] = 1;
	$tdatavue_avancement_global[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavue_avancement_global[".add"] = true;
$tdatavue_avancement_global[".afterAddAction"] = 1;
$tdatavue_avancement_global[".closePopupAfterAdd"] = 1;
$tdatavue_avancement_global[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavue_avancement_global[".list"] = true;
}



$tdatavue_avancement_global[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavue_avancement_global[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavue_avancement_global[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavue_avancement_global[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavue_avancement_global[".printFriendly"] = true;
}



$tdatavue_avancement_global[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavue_avancement_global[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavue_avancement_global[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavue_avancement_global[".isUseAjaxSuggest"] = true;





$tdatavue_avancement_global[".ajaxCodeSnippetAdded"] = false;

$tdatavue_avancement_global[".buttonsAdded"] = false;

$tdatavue_avancement_global[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavue_avancement_global[".isUseTimeForSearch"] = false;


$tdatavue_avancement_global[".badgeColor"] = "B22222";


$tdatavue_avancement_global[".allSearchFields"] = array();
$tdatavue_avancement_global[".filterFields"] = array();
$tdatavue_avancement_global[".requiredSearchFields"] = array();

$tdatavue_avancement_global[".googleLikeFields"] = array();
$tdatavue_avancement_global[".googleLikeFields"][] = "projet_id";
$tdatavue_avancement_global[".googleLikeFields"][] = "code_projet";
$tdatavue_avancement_global[".googleLikeFields"][] = "projet";
$tdatavue_avancement_global[".googleLikeFields"][] = "programme";
$tdatavue_avancement_global[".googleLikeFields"][] = "taux_avancement";
$tdatavue_avancement_global[".googleLikeFields"][] = "nb_activites";
$tdatavue_avancement_global[".googleLikeFields"][] = "activites_en_cours";
$tdatavue_avancement_global[".googleLikeFields"][] = "activites_terminees";



$tdatavue_avancement_global[".tableType"] = "list";

$tdatavue_avancement_global[".printerPageOrientation"] = 0;
$tdatavue_avancement_global[".nPrinterPageScale"] = 100;

$tdatavue_avancement_global[".nPrinterSplitRecords"] = 40;

$tdatavue_avancement_global[".geocodingEnabled"] = false;










$tdatavue_avancement_global[".pageSize"] = 20;

$tdatavue_avancement_global[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavue_avancement_global[".strOrderBy"] = $tstrOrderBy;

$tdatavue_avancement_global[".orderindexes"] = array();


$tdatavue_avancement_global[".sqlHead"] = "SELECT projet_id,  	code_projet,  	projet,  	programme,  	taux_avancement,  	nb_activites,  	activites_en_cours,  	activites_terminees";
$tdatavue_avancement_global[".sqlFrom"] = "FROM vue_avancement_global";
$tdatavue_avancement_global[".sqlWhereExpr"] = "";
$tdatavue_avancement_global[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavue_avancement_global[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavue_avancement_global[".arrGroupsPerPage"] = $arrGPP;

$tdatavue_avancement_global[".highlightSearchResults"] = true;

$tableKeysvue_avancement_global = array();
$tdatavue_avancement_global[".Keys"] = $tableKeysvue_avancement_global;


$tdatavue_avancement_global[".hideMobileList"] = array();




//	projet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projet_id";
	$fdata["GoodName"] = "projet_id";
	$fdata["ownerTable"] = "vue_avancement_global";
	$fdata["Label"] = GetFieldLabel("vue_avancement_global","projet_id");
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


	$tdatavue_avancement_global["projet_id"] = $fdata;
		$tdatavue_avancement_global[".searchableFields"][] = "projet_id";
//	code_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code_projet";
	$fdata["GoodName"] = "code_projet";
	$fdata["ownerTable"] = "vue_avancement_global";
	$fdata["Label"] = GetFieldLabel("vue_avancement_global","code_projet");
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


	$tdatavue_avancement_global["code_projet"] = $fdata;
		$tdatavue_avancement_global[".searchableFields"][] = "code_projet";
//	projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projet";
	$fdata["GoodName"] = "projet";
	$fdata["ownerTable"] = "vue_avancement_global";
	$fdata["Label"] = GetFieldLabel("vue_avancement_global","projet");
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


	$tdatavue_avancement_global["projet"] = $fdata;
		$tdatavue_avancement_global[".searchableFields"][] = "projet";
//	programme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "programme";
	$fdata["GoodName"] = "programme";
	$fdata["ownerTable"] = "vue_avancement_global";
	$fdata["Label"] = GetFieldLabel("vue_avancement_global","programme");
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


	$tdatavue_avancement_global["programme"] = $fdata;
		$tdatavue_avancement_global[".searchableFields"][] = "programme";
//	taux_avancement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "taux_avancement";
	$fdata["GoodName"] = "taux_avancement";
	$fdata["ownerTable"] = "vue_avancement_global";
	$fdata["Label"] = GetFieldLabel("vue_avancement_global","taux_avancement");
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


	$tdatavue_avancement_global["taux_avancement"] = $fdata;
		$tdatavue_avancement_global[".searchableFields"][] = "taux_avancement";
//	nb_activites
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nb_activites";
	$fdata["GoodName"] = "nb_activites";
	$fdata["ownerTable"] = "vue_avancement_global";
	$fdata["Label"] = GetFieldLabel("vue_avancement_global","nb_activites");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "nb_activites";

		$fdata["sourceSingle"] = "nb_activites";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nb_activites";

	
	
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


	$tdatavue_avancement_global["nb_activites"] = $fdata;
		$tdatavue_avancement_global[".searchableFields"][] = "nb_activites";
//	activites_en_cours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "activites_en_cours";
	$fdata["GoodName"] = "activites_en_cours";
	$fdata["ownerTable"] = "vue_avancement_global";
	$fdata["Label"] = GetFieldLabel("vue_avancement_global","activites_en_cours");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "activites_en_cours";

		$fdata["sourceSingle"] = "activites_en_cours";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activites_en_cours";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatavue_avancement_global["activites_en_cours"] = $fdata;
		$tdatavue_avancement_global[".searchableFields"][] = "activites_en_cours";
//	activites_terminees
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "activites_terminees";
	$fdata["GoodName"] = "activites_terminees";
	$fdata["ownerTable"] = "vue_avancement_global";
	$fdata["Label"] = GetFieldLabel("vue_avancement_global","activites_terminees");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "activites_terminees";

		$fdata["sourceSingle"] = "activites_terminees";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activites_terminees";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatavue_avancement_global["activites_terminees"] = $fdata;
		$tdatavue_avancement_global[".searchableFields"][] = "activites_terminees";


$tables_data["vue_avancement_global"]=&$tdatavue_avancement_global;
$field_labels["vue_avancement_global"] = &$fieldLabelsvue_avancement_global;
$fieldToolTips["vue_avancement_global"] = &$fieldToolTipsvue_avancement_global;
$placeHolders["vue_avancement_global"] = &$placeHoldersvue_avancement_global;
$page_titles["vue_avancement_global"] = &$pageTitlesvue_avancement_global;


changeTextControlsToDate( "vue_avancement_global" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vue_avancement_global"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vue_avancement_global"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vue_avancement_global()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "projet_id,  	code_projet,  	projet,  	programme,  	taux_avancement,  	nb_activites,  	activites_en_cours,  	activites_terminees";
$proto0["m_strFrom"] = "FROM vue_avancement_global";
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
	"m_strTable" => "vue_avancement_global",
	"m_srcTableName" => "vue_avancement_global"
));

$proto6["m_sql"] = "projet_id";
$proto6["m_srcTableName"] = "vue_avancement_global";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code_projet",
	"m_strTable" => "vue_avancement_global",
	"m_srcTableName" => "vue_avancement_global"
));

$proto8["m_sql"] = "code_projet";
$proto8["m_srcTableName"] = "vue_avancement_global";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projet",
	"m_strTable" => "vue_avancement_global",
	"m_srcTableName" => "vue_avancement_global"
));

$proto10["m_sql"] = "projet";
$proto10["m_srcTableName"] = "vue_avancement_global";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "programme",
	"m_strTable" => "vue_avancement_global",
	"m_srcTableName" => "vue_avancement_global"
));

$proto12["m_sql"] = "programme";
$proto12["m_srcTableName"] = "vue_avancement_global";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "taux_avancement",
	"m_strTable" => "vue_avancement_global",
	"m_srcTableName" => "vue_avancement_global"
));

$proto14["m_sql"] = "taux_avancement";
$proto14["m_srcTableName"] = "vue_avancement_global";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nb_activites",
	"m_strTable" => "vue_avancement_global",
	"m_srcTableName" => "vue_avancement_global"
));

$proto16["m_sql"] = "nb_activites";
$proto16["m_srcTableName"] = "vue_avancement_global";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "activites_en_cours",
	"m_strTable" => "vue_avancement_global",
	"m_srcTableName" => "vue_avancement_global"
));

$proto18["m_sql"] = "activites_en_cours";
$proto18["m_srcTableName"] = "vue_avancement_global";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "activites_terminees",
	"m_strTable" => "vue_avancement_global",
	"m_srcTableName" => "vue_avancement_global"
));

$proto20["m_sql"] = "activites_terminees";
$proto20["m_srcTableName"] = "vue_avancement_global";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "vue_avancement_global";
$proto23["m_srcTableName"] = "vue_avancement_global";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "projet_id";
$proto23["m_columns"][] = "code_projet";
$proto23["m_columns"][] = "projet";
$proto23["m_columns"][] = "programme";
$proto23["m_columns"][] = "taux_avancement";
$proto23["m_columns"][] = "nb_activites";
$proto23["m_columns"][] = "activites_en_cours";
$proto23["m_columns"][] = "activites_terminees";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "vue_avancement_global";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "vue_avancement_global";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vue_avancement_global";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vue_avancement_global = createSqlQuery_vue_avancement_global();


	
		;

								

$tdatavue_avancement_global[".sqlquery"] = $queryData_vue_avancement_global;



$tdatavue_avancement_global[".hasEvents"] = false;

?>