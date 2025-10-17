<?php
$tdataactivites = array();
$tdataactivites[".searchableFields"] = array();
$tdataactivites[".ShortName"] = "activites";
$tdataactivites[".OwnerID"] = "";
$tdataactivites[".OriginalTable"] = "activite";


$tdataactivites[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataactivites[".originalPagesByType"] = $tdataactivites[".pagesByType"];
$tdataactivites[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataactivites[".originalPages"] = $tdataactivites[".pages"];
$tdataactivites[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataactivites[".originalDefaultPages"] = $tdataactivites[".defaultPages"];

//	field labels
$fieldLabelsactivites = array();
$fieldToolTipsactivites = array();
$pageTitlesactivites = array();
$placeHoldersactivites = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsactivites["French"] = array();
	$fieldToolTipsactivites["French"] = array();
	$placeHoldersactivites["French"] = array();
	$pageTitlesactivites["French"] = array();
	$fieldLabelsactivites["French"]["avancement"] = "Avancement";
	$fieldToolTipsactivites["French"]["avancement"] = "";
	$placeHoldersactivites["French"]["avancement"] = "";
	$fieldLabelsactivites["French"]["date_debut"] = "Date Debut";
	$fieldToolTipsactivites["French"]["date_debut"] = "";
	$placeHoldersactivites["French"]["date_debut"] = "";
	$fieldLabelsactivites["French"]["date_fin"] = "Date Fin";
	$fieldToolTipsactivites["French"]["date_fin"] = "";
	$placeHoldersactivites["French"]["date_fin"] = "";
	$fieldLabelsactivites["French"]["description"] = "Description";
	$fieldToolTipsactivites["French"]["description"] = "";
	$placeHoldersactivites["French"]["description"] = "";
	$fieldLabelsactivites["French"]["etat"] = "Etat";
	$fieldToolTipsactivites["French"]["etat"] = "";
	$placeHoldersactivites["French"]["etat"] = "";
	$fieldLabelsactivites["French"]["id"] = "Id";
	$fieldToolTipsactivites["French"]["id"] = "";
	$placeHoldersactivites["French"]["id"] = "";
	$fieldLabelsactivites["French"]["id_projet"] = "Id Projet";
	$fieldToolTipsactivites["French"]["id_projet"] = "";
	$placeHoldersactivites["French"]["id_projet"] = "";
	$fieldLabelsactivites["French"]["nom"] = "Nom";
	$fieldToolTipsactivites["French"]["nom"] = "";
	$placeHoldersactivites["French"]["nom"] = "";
	if (count($fieldToolTipsactivites["French"]))
		$tdataactivites[".isUseToolTips"] = true;
}


	$tdataactivites[".NCSearch"] = true;



$tdataactivites[".shortTableName"] = "activites";
$tdataactivites[".nSecOptions"] = 0;

$tdataactivites[".mainTableOwnerID"] = "";
$tdataactivites[".entityType"] = 1;
$tdataactivites[".connId"] = "sigpppportefeuilleatlocalhost";


$tdataactivites[".strOriginalTableName"] = "activite";

	



$tdataactivites[".showAddInPopup"] = false;

$tdataactivites[".showEditInPopup"] = false;

$tdataactivites[".showViewInPopup"] = false;

$tdataactivites[".listAjax"] = false;
//	temporary
//$tdataactivites[".listAjax"] = false;

	$tdataactivites[".audit"] = false;

	$tdataactivites[".locking"] = false;


$pages = $tdataactivites[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataactivites[".edit"] = true;
	$tdataactivites[".afterEditAction"] = 1;
	$tdataactivites[".closePopupAfterEdit"] = 1;
	$tdataactivites[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataactivites[".add"] = true;
$tdataactivites[".afterAddAction"] = 1;
$tdataactivites[".closePopupAfterAdd"] = 1;
$tdataactivites[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataactivites[".list"] = true;
}



$tdataactivites[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataactivites[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataactivites[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataactivites[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataactivites[".printFriendly"] = true;
}



$tdataactivites[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataactivites[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataactivites[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataactivites[".isUseAjaxSuggest"] = true;





$tdataactivites[".ajaxCodeSnippetAdded"] = false;

$tdataactivites[".buttonsAdded"] = false;

$tdataactivites[".addPageEvents"] = false;

// use timepicker for search panel
$tdataactivites[".isUseTimeForSearch"] = false;


$tdataactivites[".badgeColor"] = "3cb371";


$tdataactivites[".allSearchFields"] = array();
$tdataactivites[".filterFields"] = array();
$tdataactivites[".requiredSearchFields"] = array();

$tdataactivites[".googleLikeFields"] = array();
$tdataactivites[".googleLikeFields"][] = "id";
$tdataactivites[".googleLikeFields"][] = "id_projet";
$tdataactivites[".googleLikeFields"][] = "nom";
$tdataactivites[".googleLikeFields"][] = "description";
$tdataactivites[".googleLikeFields"][] = "date_debut";
$tdataactivites[".googleLikeFields"][] = "date_fin";
$tdataactivites[".googleLikeFields"][] = "etat";
$tdataactivites[".googleLikeFields"][] = "avancement";



$tdataactivites[".tableType"] = "list";

$tdataactivites[".printerPageOrientation"] = 0;
$tdataactivites[".nPrinterPageScale"] = 100;

$tdataactivites[".nPrinterSplitRecords"] = 40;

$tdataactivites[".geocodingEnabled"] = false;










$tdataactivites[".pageSize"] = 20;

$tdataactivites[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataactivites[".strOrderBy"] = $tstrOrderBy;

$tdataactivites[".orderindexes"] = array();


$tdataactivites[".sqlHead"] = "SELECT id,  	id_projet,  	nom,  	description,  	date_debut,  	date_fin,  	etat,  	avancement";
$tdataactivites[".sqlFrom"] = "FROM activite";
$tdataactivites[".sqlWhereExpr"] = "";
$tdataactivites[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataactivites[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataactivites[".arrGroupsPerPage"] = $arrGPP;

$tdataactivites[".highlightSearchResults"] = true;

$tableKeysactivites = array();
$tableKeysactivites[] = "id";
$tdataactivites[".Keys"] = $tableKeysactivites;


$tdataactivites[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "activite";
	$fdata["Label"] = GetFieldLabel("Activites","id");
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


	$tdataactivites["id"] = $fdata;
		$tdataactivites[".searchableFields"][] = "id";
//	id_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_projet";
	$fdata["GoodName"] = "id_projet";
	$fdata["ownerTable"] = "activite";
	$fdata["Label"] = GetFieldLabel("Activites","id_projet");
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


	$tdataactivites["id_projet"] = $fdata;
		$tdataactivites[".searchableFields"][] = "id_projet";
//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "activite";
	$fdata["Label"] = GetFieldLabel("Activites","nom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom";

		$fdata["sourceSingle"] = "nom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom";

	
	
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


	$tdataactivites["nom"] = $fdata;
		$tdataactivites[".searchableFields"][] = "nom";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "activite";
	$fdata["Label"] = GetFieldLabel("Activites","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataactivites["description"] = $fdata;
		$tdataactivites[".searchableFields"][] = "description";
//	date_debut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_debut";
	$fdata["GoodName"] = "date_debut";
	$fdata["ownerTable"] = "activite";
	$fdata["Label"] = GetFieldLabel("Activites","date_debut");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "date_debut";

		$fdata["sourceSingle"] = "date_debut";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_debut";

	
	
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


	$tdataactivites["date_debut"] = $fdata;
		$tdataactivites[".searchableFields"][] = "date_debut";
//	date_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_fin";
	$fdata["GoodName"] = "date_fin";
	$fdata["ownerTable"] = "activite";
	$fdata["Label"] = GetFieldLabel("Activites","date_fin");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "date_fin";

		$fdata["sourceSingle"] = "date_fin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_fin";

	
	
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


	$tdataactivites["date_fin"] = $fdata;
		$tdataactivites[".searchableFields"][] = "date_fin";
//	etat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "etat";
	$fdata["GoodName"] = "etat";
	$fdata["ownerTable"] = "activite";
	$fdata["Label"] = GetFieldLabel("Activites","etat");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "etat";

		$fdata["sourceSingle"] = "etat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "etat";

	
	
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
	$edata["LookupValues"][] = "NonDemarree";
	$edata["LookupValues"][] = "EnCours";
	$edata["LookupValues"][] = "Terminee";
	$edata["LookupValues"][] = "EnRetard";
	$edata["LookupValues"][] = "Annulee";

	
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


	$tdataactivites["etat"] = $fdata;
		$tdataactivites[".searchableFields"][] = "etat";
//	avancement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "avancement";
	$fdata["GoodName"] = "avancement";
	$fdata["ownerTable"] = "activite";
	$fdata["Label"] = GetFieldLabel("Activites","avancement");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "avancement";

		$fdata["sourceSingle"] = "avancement";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avancement";

	
	
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


	$tdataactivites["avancement"] = $fdata;
		$tdataactivites[".searchableFields"][] = "avancement";


$tables_data["Activites"]=&$tdataactivites;
$field_labels["Activites"] = &$fieldLabelsactivites;
$fieldToolTips["Activites"] = &$fieldToolTipsactivites;
$placeHolders["Activites"] = &$placeHoldersactivites;
$page_titles["Activites"] = &$pageTitlesactivites;


changeTextControlsToDate( "Activites" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Activites"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Activites"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="projet";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Projets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Activites"][0] = $masterParams;
				$masterTablesData["Activites"][0]["masterKeys"] = array();
	$masterTablesData["Activites"][0]["masterKeys"][]="id";
				$masterTablesData["Activites"][0]["detailKeys"] = array();
	$masterTablesData["Activites"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_activites()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_projet,  	nom,  	description,  	date_debut,  	date_fin,  	etat,  	avancement";
$proto0["m_strFrom"] = "FROM activite";
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
	"m_strTable" => "activite",
	"m_srcTableName" => "Activites"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Activites";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_projet",
	"m_strTable" => "activite",
	"m_srcTableName" => "Activites"
));

$proto8["m_sql"] = "id_projet";
$proto8["m_srcTableName"] = "Activites";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nom",
	"m_strTable" => "activite",
	"m_srcTableName" => "Activites"
));

$proto10["m_sql"] = "nom";
$proto10["m_srcTableName"] = "Activites";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "activite",
	"m_srcTableName" => "Activites"
));

$proto12["m_sql"] = "description";
$proto12["m_srcTableName"] = "Activites";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "date_debut",
	"m_strTable" => "activite",
	"m_srcTableName" => "Activites"
));

$proto14["m_sql"] = "date_debut";
$proto14["m_srcTableName"] = "Activites";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "date_fin",
	"m_strTable" => "activite",
	"m_srcTableName" => "Activites"
));

$proto16["m_sql"] = "date_fin";
$proto16["m_srcTableName"] = "Activites";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "etat",
	"m_strTable" => "activite",
	"m_srcTableName" => "Activites"
));

$proto18["m_sql"] = "etat";
$proto18["m_srcTableName"] = "Activites";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "avancement",
	"m_strTable" => "activite",
	"m_srcTableName" => "Activites"
));

$proto20["m_sql"] = "avancement";
$proto20["m_srcTableName"] = "Activites";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "activite";
$proto23["m_srcTableName"] = "Activites";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "id_projet";
$proto23["m_columns"][] = "nom";
$proto23["m_columns"][] = "description";
$proto23["m_columns"][] = "date_debut";
$proto23["m_columns"][] = "date_fin";
$proto23["m_columns"][] = "etat";
$proto23["m_columns"][] = "avancement";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "activite";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Activites";
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
$proto0["m_srcTableName"]="Activites";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_activites = createSqlQuery_activites();


	
		;

								

$tdataactivites[".sqlquery"] = $queryData_activites;



$tdataactivites[".hasEvents"] = false;

?>