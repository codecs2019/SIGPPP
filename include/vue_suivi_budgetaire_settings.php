<?php
$tdatavue_suivi_budgetaire = array();
$tdatavue_suivi_budgetaire[".searchableFields"] = array();
$tdatavue_suivi_budgetaire[".ShortName"] = "vue_suivi_budgetaire";
$tdatavue_suivi_budgetaire[".OwnerID"] = "";
$tdatavue_suivi_budgetaire[".OriginalTable"] = "vue_suivi_budgetaire";


$tdatavue_suivi_budgetaire[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavue_suivi_budgetaire[".originalPagesByType"] = $tdatavue_suivi_budgetaire[".pagesByType"];
$tdatavue_suivi_budgetaire[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavue_suivi_budgetaire[".originalPages"] = $tdatavue_suivi_budgetaire[".pages"];
$tdatavue_suivi_budgetaire[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavue_suivi_budgetaire[".originalDefaultPages"] = $tdatavue_suivi_budgetaire[".defaultPages"];

//	field labels
$fieldLabelsvue_suivi_budgetaire = array();
$fieldToolTipsvue_suivi_budgetaire = array();
$pageTitlesvue_suivi_budgetaire = array();
$placeHoldersvue_suivi_budgetaire = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvue_suivi_budgetaire["French"] = array();
	$fieldToolTipsvue_suivi_budgetaire["French"] = array();
	$placeHoldersvue_suivi_budgetaire["French"] = array();
	$pageTitlesvue_suivi_budgetaire["French"] = array();
	$fieldLabelsvue_suivi_budgetaire["French"]["annee"] = "Annee";
	$fieldToolTipsvue_suivi_budgetaire["French"]["annee"] = "";
	$placeHoldersvue_suivi_budgetaire["French"]["annee"] = "";
	$fieldLabelsvue_suivi_budgetaire["French"]["code_projet"] = "Code Projet";
	$fieldToolTipsvue_suivi_budgetaire["French"]["code_projet"] = "";
	$placeHoldersvue_suivi_budgetaire["French"]["code_projet"] = "";
	$fieldLabelsvue_suivi_budgetaire["French"]["montant_engage"] = "Montant Engage";
	$fieldToolTipsvue_suivi_budgetaire["French"]["montant_engage"] = "";
	$placeHoldersvue_suivi_budgetaire["French"]["montant_engage"] = "";
	$fieldLabelsvue_suivi_budgetaire["French"]["montant_paye"] = "Montant Paye";
	$fieldToolTipsvue_suivi_budgetaire["French"]["montant_paye"] = "";
	$placeHoldersvue_suivi_budgetaire["French"]["montant_paye"] = "";
	$fieldLabelsvue_suivi_budgetaire["French"]["montant_prevu"] = "Montant Prevu";
	$fieldToolTipsvue_suivi_budgetaire["French"]["montant_prevu"] = "";
	$placeHoldersvue_suivi_budgetaire["French"]["montant_prevu"] = "";
	$fieldLabelsvue_suivi_budgetaire["French"]["programme"] = "Programme";
	$fieldToolTipsvue_suivi_budgetaire["French"]["programme"] = "";
	$placeHoldersvue_suivi_budgetaire["French"]["programme"] = "";
	$fieldLabelsvue_suivi_budgetaire["French"]["projet"] = "Projet";
	$fieldToolTipsvue_suivi_budgetaire["French"]["projet"] = "";
	$placeHoldersvue_suivi_budgetaire["French"]["projet"] = "";
	$fieldLabelsvue_suivi_budgetaire["French"]["projet_id"] = "Projet Id";
	$fieldToolTipsvue_suivi_budgetaire["French"]["projet_id"] = "";
	$placeHoldersvue_suivi_budgetaire["French"]["projet_id"] = "";
	$fieldLabelsvue_suivi_budgetaire["French"]["source_financement"] = "Source Financement";
	$fieldToolTipsvue_suivi_budgetaire["French"]["source_financement"] = "";
	$placeHoldersvue_suivi_budgetaire["French"]["source_financement"] = "";
	$fieldLabelsvue_suivi_budgetaire["French"]["taux_execution"] = "Taux Execution";
	$fieldToolTipsvue_suivi_budgetaire["French"]["taux_execution"] = "";
	$placeHoldersvue_suivi_budgetaire["French"]["taux_execution"] = "";
	if (count($fieldToolTipsvue_suivi_budgetaire["French"]))
		$tdatavue_suivi_budgetaire[".isUseToolTips"] = true;
}


	$tdatavue_suivi_budgetaire[".NCSearch"] = true;



$tdatavue_suivi_budgetaire[".shortTableName"] = "vue_suivi_budgetaire";
$tdatavue_suivi_budgetaire[".nSecOptions"] = 0;

$tdatavue_suivi_budgetaire[".mainTableOwnerID"] = "";
$tdatavue_suivi_budgetaire[".entityType"] = 0;
$tdatavue_suivi_budgetaire[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatavue_suivi_budgetaire[".strOriginalTableName"] = "vue_suivi_budgetaire";

	



$tdatavue_suivi_budgetaire[".showAddInPopup"] = false;

$tdatavue_suivi_budgetaire[".showEditInPopup"] = false;

$tdatavue_suivi_budgetaire[".showViewInPopup"] = false;

$tdatavue_suivi_budgetaire[".listAjax"] = false;
//	temporary
//$tdatavue_suivi_budgetaire[".listAjax"] = false;

	$tdatavue_suivi_budgetaire[".audit"] = false;

	$tdatavue_suivi_budgetaire[".locking"] = false;


$pages = $tdatavue_suivi_budgetaire[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavue_suivi_budgetaire[".edit"] = true;
	$tdatavue_suivi_budgetaire[".afterEditAction"] = 1;
	$tdatavue_suivi_budgetaire[".closePopupAfterEdit"] = 1;
	$tdatavue_suivi_budgetaire[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavue_suivi_budgetaire[".add"] = true;
$tdatavue_suivi_budgetaire[".afterAddAction"] = 1;
$tdatavue_suivi_budgetaire[".closePopupAfterAdd"] = 1;
$tdatavue_suivi_budgetaire[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavue_suivi_budgetaire[".list"] = true;
}



$tdatavue_suivi_budgetaire[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavue_suivi_budgetaire[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavue_suivi_budgetaire[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavue_suivi_budgetaire[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavue_suivi_budgetaire[".printFriendly"] = true;
}



$tdatavue_suivi_budgetaire[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavue_suivi_budgetaire[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavue_suivi_budgetaire[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavue_suivi_budgetaire[".isUseAjaxSuggest"] = true;





$tdatavue_suivi_budgetaire[".ajaxCodeSnippetAdded"] = false;

$tdatavue_suivi_budgetaire[".buttonsAdded"] = false;

$tdatavue_suivi_budgetaire[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavue_suivi_budgetaire[".isUseTimeForSearch"] = false;


$tdatavue_suivi_budgetaire[".badgeColor"] = "2f4f4f";


$tdatavue_suivi_budgetaire[".allSearchFields"] = array();
$tdatavue_suivi_budgetaire[".filterFields"] = array();
$tdatavue_suivi_budgetaire[".requiredSearchFields"] = array();

$tdatavue_suivi_budgetaire[".googleLikeFields"] = array();
$tdatavue_suivi_budgetaire[".googleLikeFields"][] = "projet_id";
$tdatavue_suivi_budgetaire[".googleLikeFields"][] = "code_projet";
$tdatavue_suivi_budgetaire[".googleLikeFields"][] = "projet";
$tdatavue_suivi_budgetaire[".googleLikeFields"][] = "montant_prevu";
$tdatavue_suivi_budgetaire[".googleLikeFields"][] = "montant_engage";
$tdatavue_suivi_budgetaire[".googleLikeFields"][] = "montant_paye";
$tdatavue_suivi_budgetaire[".googleLikeFields"][] = "taux_execution";
$tdatavue_suivi_budgetaire[".googleLikeFields"][] = "source_financement";
$tdatavue_suivi_budgetaire[".googleLikeFields"][] = "programme";
$tdatavue_suivi_budgetaire[".googleLikeFields"][] = "annee";



$tdatavue_suivi_budgetaire[".tableType"] = "list";

$tdatavue_suivi_budgetaire[".printerPageOrientation"] = 0;
$tdatavue_suivi_budgetaire[".nPrinterPageScale"] = 100;

$tdatavue_suivi_budgetaire[".nPrinterSplitRecords"] = 40;

$tdatavue_suivi_budgetaire[".geocodingEnabled"] = false;










$tdatavue_suivi_budgetaire[".pageSize"] = 20;

$tdatavue_suivi_budgetaire[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavue_suivi_budgetaire[".strOrderBy"] = $tstrOrderBy;

$tdatavue_suivi_budgetaire[".orderindexes"] = array();


$tdatavue_suivi_budgetaire[".sqlHead"] = "SELECT projet_id,  	code_projet,  	projet,  	montant_prevu,  	montant_engage,  	montant_paye,  	taux_execution,  	source_financement,  	programme,  	annee";
$tdatavue_suivi_budgetaire[".sqlFrom"] = "FROM vue_suivi_budgetaire";
$tdatavue_suivi_budgetaire[".sqlWhereExpr"] = "";
$tdatavue_suivi_budgetaire[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavue_suivi_budgetaire[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavue_suivi_budgetaire[".arrGroupsPerPage"] = $arrGPP;

$tdatavue_suivi_budgetaire[".highlightSearchResults"] = true;

$tableKeysvue_suivi_budgetaire = array();
$tdatavue_suivi_budgetaire[".Keys"] = $tableKeysvue_suivi_budgetaire;


$tdatavue_suivi_budgetaire[".hideMobileList"] = array();




//	projet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projet_id";
	$fdata["GoodName"] = "projet_id";
	$fdata["ownerTable"] = "vue_suivi_budgetaire";
	$fdata["Label"] = GetFieldLabel("vue_suivi_budgetaire","projet_id");
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


	$tdatavue_suivi_budgetaire["projet_id"] = $fdata;
		$tdatavue_suivi_budgetaire[".searchableFields"][] = "projet_id";
//	code_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code_projet";
	$fdata["GoodName"] = "code_projet";
	$fdata["ownerTable"] = "vue_suivi_budgetaire";
	$fdata["Label"] = GetFieldLabel("vue_suivi_budgetaire","code_projet");
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


	$tdatavue_suivi_budgetaire["code_projet"] = $fdata;
		$tdatavue_suivi_budgetaire[".searchableFields"][] = "code_projet";
//	projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "projet";
	$fdata["GoodName"] = "projet";
	$fdata["ownerTable"] = "vue_suivi_budgetaire";
	$fdata["Label"] = GetFieldLabel("vue_suivi_budgetaire","projet");
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


	$tdatavue_suivi_budgetaire["projet"] = $fdata;
		$tdatavue_suivi_budgetaire[".searchableFields"][] = "projet";
//	montant_prevu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "montant_prevu";
	$fdata["GoodName"] = "montant_prevu";
	$fdata["ownerTable"] = "vue_suivi_budgetaire";
	$fdata["Label"] = GetFieldLabel("vue_suivi_budgetaire","montant_prevu");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "montant_prevu";

		$fdata["sourceSingle"] = "montant_prevu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "montant_prevu";

	
	
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


	$tdatavue_suivi_budgetaire["montant_prevu"] = $fdata;
		$tdatavue_suivi_budgetaire[".searchableFields"][] = "montant_prevu";
//	montant_engage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "montant_engage";
	$fdata["GoodName"] = "montant_engage";
	$fdata["ownerTable"] = "vue_suivi_budgetaire";
	$fdata["Label"] = GetFieldLabel("vue_suivi_budgetaire","montant_engage");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "montant_engage";

		$fdata["sourceSingle"] = "montant_engage";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "montant_engage";

	
	
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


	$tdatavue_suivi_budgetaire["montant_engage"] = $fdata;
		$tdatavue_suivi_budgetaire[".searchableFields"][] = "montant_engage";
//	montant_paye
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "montant_paye";
	$fdata["GoodName"] = "montant_paye";
	$fdata["ownerTable"] = "vue_suivi_budgetaire";
	$fdata["Label"] = GetFieldLabel("vue_suivi_budgetaire","montant_paye");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "montant_paye";

		$fdata["sourceSingle"] = "montant_paye";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "montant_paye";

	
	
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


	$tdatavue_suivi_budgetaire["montant_paye"] = $fdata;
		$tdatavue_suivi_budgetaire[".searchableFields"][] = "montant_paye";
//	taux_execution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "taux_execution";
	$fdata["GoodName"] = "taux_execution";
	$fdata["ownerTable"] = "vue_suivi_budgetaire";
	$fdata["Label"] = GetFieldLabel("vue_suivi_budgetaire","taux_execution");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "taux_execution";

		$fdata["sourceSingle"] = "taux_execution";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taux_execution";

	
	
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


	$tdatavue_suivi_budgetaire["taux_execution"] = $fdata;
		$tdatavue_suivi_budgetaire[".searchableFields"][] = "taux_execution";
//	source_financement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "source_financement";
	$fdata["GoodName"] = "source_financement";
	$fdata["ownerTable"] = "vue_suivi_budgetaire";
	$fdata["Label"] = GetFieldLabel("vue_suivi_budgetaire","source_financement");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "source_financement";

		$fdata["sourceSingle"] = "source_financement";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "source_financement";

	
	
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


	$tdatavue_suivi_budgetaire["source_financement"] = $fdata;
		$tdatavue_suivi_budgetaire[".searchableFields"][] = "source_financement";
//	programme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "programme";
	$fdata["GoodName"] = "programme";
	$fdata["ownerTable"] = "vue_suivi_budgetaire";
	$fdata["Label"] = GetFieldLabel("vue_suivi_budgetaire","programme");
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


	$tdatavue_suivi_budgetaire["programme"] = $fdata;
		$tdatavue_suivi_budgetaire[".searchableFields"][] = "programme";
//	annee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "annee";
	$fdata["GoodName"] = "annee";
	$fdata["ownerTable"] = "vue_suivi_budgetaire";
	$fdata["Label"] = GetFieldLabel("vue_suivi_budgetaire","annee");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "annee";

		$fdata["sourceSingle"] = "annee";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "annee";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatavue_suivi_budgetaire["annee"] = $fdata;
		$tdatavue_suivi_budgetaire[".searchableFields"][] = "annee";


$tables_data["vue_suivi_budgetaire"]=&$tdatavue_suivi_budgetaire;
$field_labels["vue_suivi_budgetaire"] = &$fieldLabelsvue_suivi_budgetaire;
$fieldToolTips["vue_suivi_budgetaire"] = &$fieldToolTipsvue_suivi_budgetaire;
$placeHolders["vue_suivi_budgetaire"] = &$placeHoldersvue_suivi_budgetaire;
$page_titles["vue_suivi_budgetaire"] = &$pageTitlesvue_suivi_budgetaire;


changeTextControlsToDate( "vue_suivi_budgetaire" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vue_suivi_budgetaire"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vue_suivi_budgetaire"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="projet";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Projets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vue_suivi_budgetaire"][0] = $masterParams;
				$masterTablesData["vue_suivi_budgetaire"][0]["masterKeys"] = array();
	$masterTablesData["vue_suivi_budgetaire"][0]["masterKeys"][]="id";
				$masterTablesData["vue_suivi_budgetaire"][0]["detailKeys"] = array();
	$masterTablesData["vue_suivi_budgetaire"][0]["detailKeys"][]="projet_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vue_suivi_budgetaire()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "projet_id,  	code_projet,  	projet,  	montant_prevu,  	montant_engage,  	montant_paye,  	taux_execution,  	source_financement,  	programme,  	annee";
$proto0["m_strFrom"] = "FROM vue_suivi_budgetaire";
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
	"m_strTable" => "vue_suivi_budgetaire",
	"m_srcTableName" => "vue_suivi_budgetaire"
));

$proto6["m_sql"] = "projet_id";
$proto6["m_srcTableName"] = "vue_suivi_budgetaire";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code_projet",
	"m_strTable" => "vue_suivi_budgetaire",
	"m_srcTableName" => "vue_suivi_budgetaire"
));

$proto8["m_sql"] = "code_projet";
$proto8["m_srcTableName"] = "vue_suivi_budgetaire";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "projet",
	"m_strTable" => "vue_suivi_budgetaire",
	"m_srcTableName" => "vue_suivi_budgetaire"
));

$proto10["m_sql"] = "projet";
$proto10["m_srcTableName"] = "vue_suivi_budgetaire";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "montant_prevu",
	"m_strTable" => "vue_suivi_budgetaire",
	"m_srcTableName" => "vue_suivi_budgetaire"
));

$proto12["m_sql"] = "montant_prevu";
$proto12["m_srcTableName"] = "vue_suivi_budgetaire";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "montant_engage",
	"m_strTable" => "vue_suivi_budgetaire",
	"m_srcTableName" => "vue_suivi_budgetaire"
));

$proto14["m_sql"] = "montant_engage";
$proto14["m_srcTableName"] = "vue_suivi_budgetaire";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "montant_paye",
	"m_strTable" => "vue_suivi_budgetaire",
	"m_srcTableName" => "vue_suivi_budgetaire"
));

$proto16["m_sql"] = "montant_paye";
$proto16["m_srcTableName"] = "vue_suivi_budgetaire";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "taux_execution",
	"m_strTable" => "vue_suivi_budgetaire",
	"m_srcTableName" => "vue_suivi_budgetaire"
));

$proto18["m_sql"] = "taux_execution";
$proto18["m_srcTableName"] = "vue_suivi_budgetaire";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "source_financement",
	"m_strTable" => "vue_suivi_budgetaire",
	"m_srcTableName" => "vue_suivi_budgetaire"
));

$proto20["m_sql"] = "source_financement";
$proto20["m_srcTableName"] = "vue_suivi_budgetaire";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "programme",
	"m_strTable" => "vue_suivi_budgetaire",
	"m_srcTableName" => "vue_suivi_budgetaire"
));

$proto22["m_sql"] = "programme";
$proto22["m_srcTableName"] = "vue_suivi_budgetaire";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "annee",
	"m_strTable" => "vue_suivi_budgetaire",
	"m_srcTableName" => "vue_suivi_budgetaire"
));

$proto24["m_sql"] = "annee";
$proto24["m_srcTableName"] = "vue_suivi_budgetaire";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "vue_suivi_budgetaire";
$proto27["m_srcTableName"] = "vue_suivi_budgetaire";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "projet_id";
$proto27["m_columns"][] = "code_projet";
$proto27["m_columns"][] = "projet";
$proto27["m_columns"][] = "montant_prevu";
$proto27["m_columns"][] = "montant_engage";
$proto27["m_columns"][] = "montant_paye";
$proto27["m_columns"][] = "taux_execution";
$proto27["m_columns"][] = "source_financement";
$proto27["m_columns"][] = "programme";
$proto27["m_columns"][] = "annee";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "vue_suivi_budgetaire";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "vue_suivi_budgetaire";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vue_suivi_budgetaire";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vue_suivi_budgetaire = createSqlQuery_vue_suivi_budgetaire();


	
		;

										

$tdatavue_suivi_budgetaire[".sqlquery"] = $queryData_vue_suivi_budgetaire;



$tdatavue_suivi_budgetaire[".hasEvents"] = false;

?>