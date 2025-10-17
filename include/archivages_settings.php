<?php
$tdataarchivages = array();
$tdataarchivages[".searchableFields"] = array();
$tdataarchivages[".ShortName"] = "archivages";
$tdataarchivages[".OwnerID"] = "";
$tdataarchivages[".OriginalTable"] = "archivage";


$tdataarchivages[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataarchivages[".originalPagesByType"] = $tdataarchivages[".pagesByType"];
$tdataarchivages[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataarchivages[".originalPages"] = $tdataarchivages[".pages"];
$tdataarchivages[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataarchivages[".originalDefaultPages"] = $tdataarchivages[".defaultPages"];

//	field labels
$fieldLabelsarchivages = array();
$fieldToolTipsarchivages = array();
$pageTitlesarchivages = array();
$placeHoldersarchivages = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsarchivages["French"] = array();
	$fieldToolTipsarchivages["French"] = array();
	$placeHoldersarchivages["French"] = array();
	$pageTitlesarchivages["French"] = array();
	$fieldLabelsarchivages["French"]["date_cloture"] = "Date Cloture";
	$fieldToolTipsarchivages["French"]["date_cloture"] = "";
	$placeHoldersarchivages["French"]["date_cloture"] = "";
	$fieldLabelsarchivages["French"]["fichier_archive"] = "Fichier Archive";
	$fieldToolTipsarchivages["French"]["fichier_archive"] = "";
	$placeHoldersarchivages["French"]["fichier_archive"] = "";
	$fieldLabelsarchivages["French"]["id"] = "Id";
	$fieldToolTipsarchivages["French"]["id"] = "";
	$placeHoldersarchivages["French"]["id"] = "";
	$fieldLabelsarchivages["French"]["id_projet"] = "Id Projet";
	$fieldToolTipsarchivages["French"]["id_projet"] = "";
	$placeHoldersarchivages["French"]["id_projet"] = "";
	$fieldLabelsarchivages["French"]["rapport_final"] = "Rapport Final";
	$fieldToolTipsarchivages["French"]["rapport_final"] = "";
	$placeHoldersarchivages["French"]["rapport_final"] = "";
	$fieldLabelsarchivages["French"]["valide_par"] = "Valide Par";
	$fieldToolTipsarchivages["French"]["valide_par"] = "";
	$placeHoldersarchivages["French"]["valide_par"] = "";
	if (count($fieldToolTipsarchivages["French"]))
		$tdataarchivages[".isUseToolTips"] = true;
}


	$tdataarchivages[".NCSearch"] = true;



$tdataarchivages[".shortTableName"] = "archivages";
$tdataarchivages[".nSecOptions"] = 0;

$tdataarchivages[".mainTableOwnerID"] = "";
$tdataarchivages[".entityType"] = 1;
$tdataarchivages[".connId"] = "sigpppportefeuilleatlocalhost";


$tdataarchivages[".strOriginalTableName"] = "archivage";

	



$tdataarchivages[".showAddInPopup"] = false;

$tdataarchivages[".showEditInPopup"] = false;

$tdataarchivages[".showViewInPopup"] = false;

$tdataarchivages[".listAjax"] = false;
//	temporary
//$tdataarchivages[".listAjax"] = false;

	$tdataarchivages[".audit"] = false;

	$tdataarchivages[".locking"] = false;


$pages = $tdataarchivages[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataarchivages[".edit"] = true;
	$tdataarchivages[".afterEditAction"] = 1;
	$tdataarchivages[".closePopupAfterEdit"] = 1;
	$tdataarchivages[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataarchivages[".add"] = true;
$tdataarchivages[".afterAddAction"] = 1;
$tdataarchivages[".closePopupAfterAdd"] = 1;
$tdataarchivages[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataarchivages[".list"] = true;
}



$tdataarchivages[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataarchivages[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataarchivages[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataarchivages[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataarchivages[".printFriendly"] = true;
}



$tdataarchivages[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataarchivages[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataarchivages[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataarchivages[".isUseAjaxSuggest"] = true;





$tdataarchivages[".ajaxCodeSnippetAdded"] = false;

$tdataarchivages[".buttonsAdded"] = false;

$tdataarchivages[".addPageEvents"] = false;

// use timepicker for search panel
$tdataarchivages[".isUseTimeForSearch"] = false;


$tdataarchivages[".badgeColor"] = "e8926f";


$tdataarchivages[".allSearchFields"] = array();
$tdataarchivages[".filterFields"] = array();
$tdataarchivages[".requiredSearchFields"] = array();

$tdataarchivages[".googleLikeFields"] = array();
$tdataarchivages[".googleLikeFields"][] = "id";
$tdataarchivages[".googleLikeFields"][] = "id_projet";
$tdataarchivages[".googleLikeFields"][] = "date_cloture";
$tdataarchivages[".googleLikeFields"][] = "valide_par";
$tdataarchivages[".googleLikeFields"][] = "rapport_final";
$tdataarchivages[".googleLikeFields"][] = "fichier_archive";



$tdataarchivages[".tableType"] = "list";

$tdataarchivages[".printerPageOrientation"] = 0;
$tdataarchivages[".nPrinterPageScale"] = 100;

$tdataarchivages[".nPrinterSplitRecords"] = 40;

$tdataarchivages[".geocodingEnabled"] = false;










$tdataarchivages[".pageSize"] = 20;

$tdataarchivages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataarchivages[".strOrderBy"] = $tstrOrderBy;

$tdataarchivages[".orderindexes"] = array();


$tdataarchivages[".sqlHead"] = "SELECT id,  	id_projet,  	date_cloture,  	valide_par,  	rapport_final,  	fichier_archive";
$tdataarchivages[".sqlFrom"] = "FROM archivage";
$tdataarchivages[".sqlWhereExpr"] = "";
$tdataarchivages[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataarchivages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataarchivages[".arrGroupsPerPage"] = $arrGPP;

$tdataarchivages[".highlightSearchResults"] = true;

$tableKeysarchivages = array();
$tableKeysarchivages[] = "id";
$tdataarchivages[".Keys"] = $tableKeysarchivages;


$tdataarchivages[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "archivage";
	$fdata["Label"] = GetFieldLabel("Archivages","id");
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


	$tdataarchivages["id"] = $fdata;
		$tdataarchivages[".searchableFields"][] = "id";
//	id_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_projet";
	$fdata["GoodName"] = "id_projet";
	$fdata["ownerTable"] = "archivage";
	$fdata["Label"] = GetFieldLabel("Archivages","id_projet");
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


	$tdataarchivages["id_projet"] = $fdata;
		$tdataarchivages[".searchableFields"][] = "id_projet";
//	date_cloture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date_cloture";
	$fdata["GoodName"] = "date_cloture";
	$fdata["ownerTable"] = "archivage";
	$fdata["Label"] = GetFieldLabel("Archivages","date_cloture");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "date_cloture";

		$fdata["sourceSingle"] = "date_cloture";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_cloture";

	
	
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


	$tdataarchivages["date_cloture"] = $fdata;
		$tdataarchivages[".searchableFields"][] = "date_cloture";
//	valide_par
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "valide_par";
	$fdata["GoodName"] = "valide_par";
	$fdata["ownerTable"] = "archivage";
	$fdata["Label"] = GetFieldLabel("Archivages","valide_par");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "valide_par";

		$fdata["sourceSingle"] = "valide_par";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valide_par";

	
	
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


	$tdataarchivages["valide_par"] = $fdata;
		$tdataarchivages[".searchableFields"][] = "valide_par";
//	rapport_final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rapport_final";
	$fdata["GoodName"] = "rapport_final";
	$fdata["ownerTable"] = "archivage";
	$fdata["Label"] = GetFieldLabel("Archivages","rapport_final");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "rapport_final";

		$fdata["sourceSingle"] = "rapport_final";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rapport_final";

	
	
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


	$tdataarchivages["rapport_final"] = $fdata;
		$tdataarchivages[".searchableFields"][] = "rapport_final";
//	fichier_archive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fichier_archive";
	$fdata["GoodName"] = "fichier_archive";
	$fdata["ownerTable"] = "archivage";
	$fdata["Label"] = GetFieldLabel("Archivages","fichier_archive");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fichier_archive";

		$fdata["sourceSingle"] = "fichier_archive";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fichier_archive";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataarchivages["fichier_archive"] = $fdata;
		$tdataarchivages[".searchableFields"][] = "fichier_archive";


$tables_data["Archivages"]=&$tdataarchivages;
$field_labels["Archivages"] = &$fieldLabelsarchivages;
$fieldToolTips["Archivages"] = &$fieldToolTipsarchivages;
$placeHolders["Archivages"] = &$placeHoldersarchivages;
$page_titles["Archivages"] = &$pageTitlesarchivages;


changeTextControlsToDate( "Archivages" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Archivages"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Archivages"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="projet";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Projets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Archivages"][0] = $masterParams;
				$masterTablesData["Archivages"][0]["masterKeys"] = array();
	$masterTablesData["Archivages"][0]["masterKeys"][]="id";
				$masterTablesData["Archivages"][0]["detailKeys"] = array();
	$masterTablesData["Archivages"][0]["detailKeys"][]="id_projet";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_archivages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_projet,  	date_cloture,  	valide_par,  	rapport_final,  	fichier_archive";
$proto0["m_strFrom"] = "FROM archivage";
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
	"m_strTable" => "archivage",
	"m_srcTableName" => "Archivages"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Archivages";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_projet",
	"m_strTable" => "archivage",
	"m_srcTableName" => "Archivages"
));

$proto8["m_sql"] = "id_projet";
$proto8["m_srcTableName"] = "Archivages";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "date_cloture",
	"m_strTable" => "archivage",
	"m_srcTableName" => "Archivages"
));

$proto10["m_sql"] = "date_cloture";
$proto10["m_srcTableName"] = "Archivages";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "valide_par",
	"m_strTable" => "archivage",
	"m_srcTableName" => "Archivages"
));

$proto12["m_sql"] = "valide_par";
$proto12["m_srcTableName"] = "Archivages";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rapport_final",
	"m_strTable" => "archivage",
	"m_srcTableName" => "Archivages"
));

$proto14["m_sql"] = "rapport_final";
$proto14["m_srcTableName"] = "Archivages";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fichier_archive",
	"m_strTable" => "archivage",
	"m_srcTableName" => "Archivages"
));

$proto16["m_sql"] = "fichier_archive";
$proto16["m_srcTableName"] = "Archivages";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "archivage";
$proto19["m_srcTableName"] = "Archivages";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "id_projet";
$proto19["m_columns"][] = "date_cloture";
$proto19["m_columns"][] = "valide_par";
$proto19["m_columns"][] = "rapport_final";
$proto19["m_columns"][] = "fichier_archive";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "archivage";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Archivages";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Archivages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_archivages = createSqlQuery_archivages();


	
		;

						

$tdataarchivages[".sqlquery"] = $queryData_archivages;



$tdataarchivages[".hasEvents"] = false;

?>