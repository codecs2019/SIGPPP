<?php
$tdatabudgets = array();
$tdatabudgets[".searchableFields"] = array();
$tdatabudgets[".ShortName"] = "budgets";
$tdatabudgets[".OwnerID"] = "";
$tdatabudgets[".OriginalTable"] = "budget";


$tdatabudgets[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabudgets[".originalPagesByType"] = $tdatabudgets[".pagesByType"];
$tdatabudgets[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabudgets[".originalPages"] = $tdatabudgets[".pages"];
$tdatabudgets[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabudgets[".originalDefaultPages"] = $tdatabudgets[".defaultPages"];

//	field labels
$fieldLabelsbudgets = array();
$fieldToolTipsbudgets = array();
$pageTitlesbudgets = array();
$placeHoldersbudgets = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsbudgets["French"] = array();
	$fieldToolTipsbudgets["French"] = array();
	$placeHoldersbudgets["French"] = array();
	$pageTitlesbudgets["French"] = array();
	$fieldLabelsbudgets["French"]["derniere_mise_a_jour"] = "Derniere Mise A Jour";
	$fieldToolTipsbudgets["French"]["derniere_mise_a_jour"] = "";
	$placeHoldersbudgets["French"]["derniere_mise_a_jour"] = "";
	$fieldLabelsbudgets["French"]["id"] = "Id";
	$fieldToolTipsbudgets["French"]["id"] = "";
	$placeHoldersbudgets["French"]["id"] = "";
	$fieldLabelsbudgets["French"]["id_projet"] = "Id Projet";
	$fieldToolTipsbudgets["French"]["id_projet"] = "";
	$placeHoldersbudgets["French"]["id_projet"] = "";
	$fieldLabelsbudgets["French"]["montant_engage"] = "Montant Engage";
	$fieldToolTipsbudgets["French"]["montant_engage"] = "";
	$placeHoldersbudgets["French"]["montant_engage"] = "";
	$fieldLabelsbudgets["French"]["montant_paye"] = "Montant Paye";
	$fieldToolTipsbudgets["French"]["montant_paye"] = "";
	$placeHoldersbudgets["French"]["montant_paye"] = "";
	$fieldLabelsbudgets["French"]["montant_prevu"] = "Montant Prevu";
	$fieldToolTipsbudgets["French"]["montant_prevu"] = "";
	$placeHoldersbudgets["French"]["montant_prevu"] = "";
	$fieldLabelsbudgets["French"]["source_financement"] = "Source Financement";
	$fieldToolTipsbudgets["French"]["source_financement"] = "";
	$placeHoldersbudgets["French"]["source_financement"] = "";
	if (count($fieldToolTipsbudgets["French"]))
		$tdatabudgets[".isUseToolTips"] = true;
}


	$tdatabudgets[".NCSearch"] = true;



$tdatabudgets[".shortTableName"] = "budgets";
$tdatabudgets[".nSecOptions"] = 0;

$tdatabudgets[".mainTableOwnerID"] = "";
$tdatabudgets[".entityType"] = 1;
$tdatabudgets[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatabudgets[".strOriginalTableName"] = "budget";

	



$tdatabudgets[".showAddInPopup"] = false;

$tdatabudgets[".showEditInPopup"] = false;

$tdatabudgets[".showViewInPopup"] = false;

$tdatabudgets[".listAjax"] = false;
//	temporary
//$tdatabudgets[".listAjax"] = false;

	$tdatabudgets[".audit"] = false;

	$tdatabudgets[".locking"] = false;


$pages = $tdatabudgets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabudgets[".edit"] = true;
	$tdatabudgets[".afterEditAction"] = 1;
	$tdatabudgets[".closePopupAfterEdit"] = 1;
	$tdatabudgets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabudgets[".add"] = true;
$tdatabudgets[".afterAddAction"] = 1;
$tdatabudgets[".closePopupAfterAdd"] = 1;
$tdatabudgets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabudgets[".list"] = true;
}



$tdatabudgets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabudgets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabudgets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabudgets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabudgets[".printFriendly"] = true;
}



$tdatabudgets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabudgets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabudgets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabudgets[".isUseAjaxSuggest"] = true;





$tdatabudgets[".ajaxCodeSnippetAdded"] = false;

$tdatabudgets[".buttonsAdded"] = false;

$tdatabudgets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabudgets[".isUseTimeForSearch"] = false;


$tdatabudgets[".badgeColor"] = "d2af80";


$tdatabudgets[".allSearchFields"] = array();
$tdatabudgets[".filterFields"] = array();
$tdatabudgets[".requiredSearchFields"] = array();

$tdatabudgets[".googleLikeFields"] = array();
$tdatabudgets[".googleLikeFields"][] = "id";
$tdatabudgets[".googleLikeFields"][] = "id_projet";
$tdatabudgets[".googleLikeFields"][] = "montant_prevu";
$tdatabudgets[".googleLikeFields"][] = "montant_engage";
$tdatabudgets[".googleLikeFields"][] = "montant_paye";
$tdatabudgets[".googleLikeFields"][] = "source_financement";
$tdatabudgets[".googleLikeFields"][] = "derniere_mise_a_jour";



$tdatabudgets[".tableType"] = "list";

$tdatabudgets[".printerPageOrientation"] = 0;
$tdatabudgets[".nPrinterPageScale"] = 100;

$tdatabudgets[".nPrinterSplitRecords"] = 40;

$tdatabudgets[".geocodingEnabled"] = false;










$tdatabudgets[".pageSize"] = 20;

$tdatabudgets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabudgets[".strOrderBy"] = $tstrOrderBy;

$tdatabudgets[".orderindexes"] = array();


$tdatabudgets[".sqlHead"] = "SELECT id,  	id_projet,  	montant_prevu,  	montant_engage,  	montant_paye,  	source_financement,  	derniere_mise_a_jour";
$tdatabudgets[".sqlFrom"] = "FROM budget";
$tdatabudgets[".sqlWhereExpr"] = "";
$tdatabudgets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabudgets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabudgets[".arrGroupsPerPage"] = $arrGPP;

$tdatabudgets[".highlightSearchResults"] = true;

$tableKeysbudgets = array();
$tableKeysbudgets[] = "id";
$tdatabudgets[".Keys"] = $tableKeysbudgets;


$tdatabudgets[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "budget";
	$fdata["Label"] = GetFieldLabel("Budgets","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatabudgets["id"] = $fdata;
		$tdatabudgets[".searchableFields"][] = "id";
//	id_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_projet";
	$fdata["GoodName"] = "id_projet";
	$fdata["ownerTable"] = "budget";
	$fdata["Label"] = GetFieldLabel("Budgets","id_projet");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_projet";

		$fdata["sourceSingle"] = "id_projet";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_projet";

	
	
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


	$tdatabudgets["id_projet"] = $fdata;
		$tdatabudgets[".searchableFields"][] = "id_projet";
//	montant_prevu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "montant_prevu";
	$fdata["GoodName"] = "montant_prevu";
	$fdata["ownerTable"] = "budget";
	$fdata["Label"] = GetFieldLabel("Budgets","montant_prevu");
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


	$tdatabudgets["montant_prevu"] = $fdata;
		$tdatabudgets[".searchableFields"][] = "montant_prevu";
//	montant_engage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "montant_engage";
	$fdata["GoodName"] = "montant_engage";
	$fdata["ownerTable"] = "budget";
	$fdata["Label"] = GetFieldLabel("Budgets","montant_engage");
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


	$tdatabudgets["montant_engage"] = $fdata;
		$tdatabudgets[".searchableFields"][] = "montant_engage";
//	montant_paye
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "montant_paye";
	$fdata["GoodName"] = "montant_paye";
	$fdata["ownerTable"] = "budget";
	$fdata["Label"] = GetFieldLabel("Budgets","montant_paye");
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


	$tdatabudgets["montant_paye"] = $fdata;
		$tdatabudgets[".searchableFields"][] = "montant_paye";
//	source_financement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "source_financement";
	$fdata["GoodName"] = "source_financement";
	$fdata["ownerTable"] = "budget";
	$fdata["Label"] = GetFieldLabel("Budgets","source_financement");
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


	$tdatabudgets["source_financement"] = $fdata;
		$tdatabudgets[".searchableFields"][] = "source_financement";
//	derniere_mise_a_jour
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "derniere_mise_a_jour";
	$fdata["GoodName"] = "derniere_mise_a_jour";
	$fdata["ownerTable"] = "budget";
	$fdata["Label"] = GetFieldLabel("Budgets","derniere_mise_a_jour");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "derniere_mise_a_jour";

		$fdata["sourceSingle"] = "derniere_mise_a_jour";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "derniere_mise_a_jour";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatabudgets["derniere_mise_a_jour"] = $fdata;
		$tdatabudgets[".searchableFields"][] = "derniere_mise_a_jour";


$tables_data["Budgets"]=&$tdatabudgets;
$field_labels["Budgets"] = &$fieldLabelsbudgets;
$fieldToolTips["Budgets"] = &$fieldToolTipsbudgets;
$placeHolders["Budgets"] = &$placeHoldersbudgets;
$page_titles["Budgets"] = &$pageTitlesbudgets;


changeTextControlsToDate( "Budgets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Budgets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Budgets"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="projet";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Projets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Budgets"][0] = $masterParams;
				$masterTablesData["Budgets"][0]["masterKeys"] = array();
	$masterTablesData["Budgets"][0]["masterKeys"][]="id";
				$masterTablesData["Budgets"][0]["detailKeys"] = array();
	$masterTablesData["Budgets"][0]["detailKeys"][]="id_projet";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_budgets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_projet,  	montant_prevu,  	montant_engage,  	montant_paye,  	source_financement,  	derniere_mise_a_jour";
$proto0["m_strFrom"] = "FROM budget";
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
	"m_strName" => "id",
	"m_strTable" => "budget",
	"m_srcTableName" => "Budgets"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Budgets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_projet",
	"m_strTable" => "budget",
	"m_srcTableName" => "Budgets"
));

$proto8["m_sql"] = "id_projet";
$proto8["m_srcTableName"] = "Budgets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "montant_prevu",
	"m_strTable" => "budget",
	"m_srcTableName" => "Budgets"
));

$proto10["m_sql"] = "montant_prevu";
$proto10["m_srcTableName"] = "Budgets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "montant_engage",
	"m_strTable" => "budget",
	"m_srcTableName" => "Budgets"
));

$proto12["m_sql"] = "montant_engage";
$proto12["m_srcTableName"] = "Budgets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "montant_paye",
	"m_strTable" => "budget",
	"m_srcTableName" => "Budgets"
));

$proto14["m_sql"] = "montant_paye";
$proto14["m_srcTableName"] = "Budgets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "source_financement",
	"m_strTable" => "budget",
	"m_srcTableName" => "Budgets"
));

$proto16["m_sql"] = "source_financement";
$proto16["m_srcTableName"] = "Budgets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "derniere_mise_a_jour",
	"m_strTable" => "budget",
	"m_srcTableName" => "Budgets"
));

$proto18["m_sql"] = "derniere_mise_a_jour";
$proto18["m_srcTableName"] = "Budgets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "budget";
$proto21["m_srcTableName"] = "Budgets";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "id_projet";
$proto21["m_columns"][] = "montant_prevu";
$proto21["m_columns"][] = "montant_engage";
$proto21["m_columns"][] = "montant_paye";
$proto21["m_columns"][] = "source_financement";
$proto21["m_columns"][] = "derniere_mise_a_jour";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "budget";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Budgets";
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
$proto0["m_srcTableName"]="Budgets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_budgets = createSqlQuery_budgets();


	
		;

							

$tdatabudgets[".sqlquery"] = $queryData_budgets;



$tdatabudgets[".hasEvents"] = false;

?>