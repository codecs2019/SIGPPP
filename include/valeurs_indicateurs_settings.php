<?php
$tdatavaleurs_indicateurs = array();
$tdatavaleurs_indicateurs[".searchableFields"] = array();
$tdatavaleurs_indicateurs[".ShortName"] = "valeurs_indicateurs";
$tdatavaleurs_indicateurs[".OwnerID"] = "";
$tdatavaleurs_indicateurs[".OriginalTable"] = "valeur_indicateur";


$tdatavaleurs_indicateurs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavaleurs_indicateurs[".originalPagesByType"] = $tdatavaleurs_indicateurs[".pagesByType"];
$tdatavaleurs_indicateurs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavaleurs_indicateurs[".originalPages"] = $tdatavaleurs_indicateurs[".pages"];
$tdatavaleurs_indicateurs[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavaleurs_indicateurs[".originalDefaultPages"] = $tdatavaleurs_indicateurs[".defaultPages"];

//	field labels
$fieldLabelsvaleurs_indicateurs = array();
$fieldToolTipsvaleurs_indicateurs = array();
$pageTitlesvaleurs_indicateurs = array();
$placeHoldersvaleurs_indicateurs = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvaleurs_indicateurs["French"] = array();
	$fieldToolTipsvaleurs_indicateurs["French"] = array();
	$placeHoldersvaleurs_indicateurs["French"] = array();
	$pageTitlesvaleurs_indicateurs["French"] = array();
	$fieldLabelsvaleurs_indicateurs["French"]["date_saisie"] = "Date Saisie";
	$fieldToolTipsvaleurs_indicateurs["French"]["date_saisie"] = "";
	$placeHoldersvaleurs_indicateurs["French"]["date_saisie"] = "";
	$fieldLabelsvaleurs_indicateurs["French"]["id"] = "Id";
	$fieldToolTipsvaleurs_indicateurs["French"]["id"] = "";
	$placeHoldersvaleurs_indicateurs["French"]["id"] = "";
	$fieldLabelsvaleurs_indicateurs["French"]["id_indicateur"] = "Id Indicateur";
	$fieldToolTipsvaleurs_indicateurs["French"]["id_indicateur"] = "";
	$placeHoldersvaleurs_indicateurs["French"]["id_indicateur"] = "";
	$fieldLabelsvaleurs_indicateurs["French"]["saisi_par"] = "Saisi Par";
	$fieldToolTipsvaleurs_indicateurs["French"]["saisi_par"] = "";
	$placeHoldersvaleurs_indicateurs["French"]["saisi_par"] = "";
	$fieldLabelsvaleurs_indicateurs["French"]["valeur"] = "Valeur";
	$fieldToolTipsvaleurs_indicateurs["French"]["valeur"] = "";
	$placeHoldersvaleurs_indicateurs["French"]["valeur"] = "";
	if (count($fieldToolTipsvaleurs_indicateurs["French"]))
		$tdatavaleurs_indicateurs[".isUseToolTips"] = true;
}


	$tdatavaleurs_indicateurs[".NCSearch"] = true;



$tdatavaleurs_indicateurs[".shortTableName"] = "valeurs_indicateurs";
$tdatavaleurs_indicateurs[".nSecOptions"] = 0;

$tdatavaleurs_indicateurs[".mainTableOwnerID"] = "";
$tdatavaleurs_indicateurs[".entityType"] = 1;
$tdatavaleurs_indicateurs[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatavaleurs_indicateurs[".strOriginalTableName"] = "valeur_indicateur";

	



$tdatavaleurs_indicateurs[".showAddInPopup"] = false;

$tdatavaleurs_indicateurs[".showEditInPopup"] = false;

$tdatavaleurs_indicateurs[".showViewInPopup"] = false;

$tdatavaleurs_indicateurs[".listAjax"] = false;
//	temporary
//$tdatavaleurs_indicateurs[".listAjax"] = false;

	$tdatavaleurs_indicateurs[".audit"] = false;

	$tdatavaleurs_indicateurs[".locking"] = false;


$pages = $tdatavaleurs_indicateurs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavaleurs_indicateurs[".edit"] = true;
	$tdatavaleurs_indicateurs[".afterEditAction"] = 1;
	$tdatavaleurs_indicateurs[".closePopupAfterEdit"] = 1;
	$tdatavaleurs_indicateurs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavaleurs_indicateurs[".add"] = true;
$tdatavaleurs_indicateurs[".afterAddAction"] = 1;
$tdatavaleurs_indicateurs[".closePopupAfterAdd"] = 1;
$tdatavaleurs_indicateurs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavaleurs_indicateurs[".list"] = true;
}



$tdatavaleurs_indicateurs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavaleurs_indicateurs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavaleurs_indicateurs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavaleurs_indicateurs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavaleurs_indicateurs[".printFriendly"] = true;
}



$tdatavaleurs_indicateurs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavaleurs_indicateurs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavaleurs_indicateurs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavaleurs_indicateurs[".isUseAjaxSuggest"] = true;





$tdatavaleurs_indicateurs[".ajaxCodeSnippetAdded"] = false;

$tdatavaleurs_indicateurs[".buttonsAdded"] = false;

$tdatavaleurs_indicateurs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavaleurs_indicateurs[".isUseTimeForSearch"] = false;


$tdatavaleurs_indicateurs[".badgeColor"] = "778899";


$tdatavaleurs_indicateurs[".allSearchFields"] = array();
$tdatavaleurs_indicateurs[".filterFields"] = array();
$tdatavaleurs_indicateurs[".requiredSearchFields"] = array();

$tdatavaleurs_indicateurs[".googleLikeFields"] = array();
$tdatavaleurs_indicateurs[".googleLikeFields"][] = "id";
$tdatavaleurs_indicateurs[".googleLikeFields"][] = "id_indicateur";
$tdatavaleurs_indicateurs[".googleLikeFields"][] = "valeur";
$tdatavaleurs_indicateurs[".googleLikeFields"][] = "date_saisie";
$tdatavaleurs_indicateurs[".googleLikeFields"][] = "saisi_par";



$tdatavaleurs_indicateurs[".tableType"] = "list";

$tdatavaleurs_indicateurs[".printerPageOrientation"] = 0;
$tdatavaleurs_indicateurs[".nPrinterPageScale"] = 100;

$tdatavaleurs_indicateurs[".nPrinterSplitRecords"] = 40;

$tdatavaleurs_indicateurs[".geocodingEnabled"] = false;










$tdatavaleurs_indicateurs[".pageSize"] = 20;

$tdatavaleurs_indicateurs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavaleurs_indicateurs[".strOrderBy"] = $tstrOrderBy;

$tdatavaleurs_indicateurs[".orderindexes"] = array();


$tdatavaleurs_indicateurs[".sqlHead"] = "SELECT id,  	id_indicateur,  	valeur,  	date_saisie,  	saisi_par";
$tdatavaleurs_indicateurs[".sqlFrom"] = "FROM valeur_indicateur";
$tdatavaleurs_indicateurs[".sqlWhereExpr"] = "";
$tdatavaleurs_indicateurs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavaleurs_indicateurs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavaleurs_indicateurs[".arrGroupsPerPage"] = $arrGPP;

$tdatavaleurs_indicateurs[".highlightSearchResults"] = true;

$tableKeysvaleurs_indicateurs = array();
$tableKeysvaleurs_indicateurs[] = "id";
$tdatavaleurs_indicateurs[".Keys"] = $tableKeysvaleurs_indicateurs;


$tdatavaleurs_indicateurs[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "valeur_indicateur";
	$fdata["Label"] = GetFieldLabel("Valeurs_indicateurs","id");
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


	$tdatavaleurs_indicateurs["id"] = $fdata;
		$tdatavaleurs_indicateurs[".searchableFields"][] = "id";
//	id_indicateur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_indicateur";
	$fdata["GoodName"] = "id_indicateur";
	$fdata["ownerTable"] = "valeur_indicateur";
	$fdata["Label"] = GetFieldLabel("Valeurs_indicateurs","id_indicateur");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_indicateur";

		$fdata["sourceSingle"] = "id_indicateur";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_indicateur";

	
	
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


	$tdatavaleurs_indicateurs["id_indicateur"] = $fdata;
		$tdatavaleurs_indicateurs[".searchableFields"][] = "id_indicateur";
//	valeur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "valeur";
	$fdata["GoodName"] = "valeur";
	$fdata["ownerTable"] = "valeur_indicateur";
	$fdata["Label"] = GetFieldLabel("Valeurs_indicateurs","valeur");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "valeur";

		$fdata["sourceSingle"] = "valeur";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valeur";

	
	
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


	$tdatavaleurs_indicateurs["valeur"] = $fdata;
		$tdatavaleurs_indicateurs[".searchableFields"][] = "valeur";
//	date_saisie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "date_saisie";
	$fdata["GoodName"] = "date_saisie";
	$fdata["ownerTable"] = "valeur_indicateur";
	$fdata["Label"] = GetFieldLabel("Valeurs_indicateurs","date_saisie");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_saisie";

		$fdata["sourceSingle"] = "date_saisie";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_saisie";

	
	
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


	$tdatavaleurs_indicateurs["date_saisie"] = $fdata;
		$tdatavaleurs_indicateurs[".searchableFields"][] = "date_saisie";
//	saisi_par
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "saisi_par";
	$fdata["GoodName"] = "saisi_par";
	$fdata["ownerTable"] = "valeur_indicateur";
	$fdata["Label"] = GetFieldLabel("Valeurs_indicateurs","saisi_par");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "saisi_par";

		$fdata["sourceSingle"] = "saisi_par";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "saisi_par";

	
	
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


	$tdatavaleurs_indicateurs["saisi_par"] = $fdata;
		$tdatavaleurs_indicateurs[".searchableFields"][] = "saisi_par";


$tables_data["Valeurs_indicateurs"]=&$tdatavaleurs_indicateurs;
$field_labels["Valeurs_indicateurs"] = &$fieldLabelsvaleurs_indicateurs;
$fieldToolTips["Valeurs_indicateurs"] = &$fieldToolTipsvaleurs_indicateurs;
$placeHolders["Valeurs_indicateurs"] = &$placeHoldersvaleurs_indicateurs;
$page_titles["Valeurs_indicateurs"] = &$pageTitlesvaleurs_indicateurs;


changeTextControlsToDate( "Valeurs_indicateurs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Valeurs_indicateurs"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Valeurs_indicateurs"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="indicateur";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Indicateurs";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "indicateurs";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Valeurs_indicateurs"][0] = $masterParams;
				$masterTablesData["Valeurs_indicateurs"][0]["masterKeys"] = array();
	$masterTablesData["Valeurs_indicateurs"][0]["masterKeys"][]="id";
				$masterTablesData["Valeurs_indicateurs"][0]["detailKeys"] = array();
	$masterTablesData["Valeurs_indicateurs"][0]["detailKeys"][]="id_indicateur";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_valeurs_indicateurs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_indicateur,  	valeur,  	date_saisie,  	saisi_par";
$proto0["m_strFrom"] = "FROM valeur_indicateur";
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
	"m_strTable" => "valeur_indicateur",
	"m_srcTableName" => "Valeurs_indicateurs"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Valeurs_indicateurs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_indicateur",
	"m_strTable" => "valeur_indicateur",
	"m_srcTableName" => "Valeurs_indicateurs"
));

$proto8["m_sql"] = "id_indicateur";
$proto8["m_srcTableName"] = "Valeurs_indicateurs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "valeur",
	"m_strTable" => "valeur_indicateur",
	"m_srcTableName" => "Valeurs_indicateurs"
));

$proto10["m_sql"] = "valeur";
$proto10["m_srcTableName"] = "Valeurs_indicateurs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "date_saisie",
	"m_strTable" => "valeur_indicateur",
	"m_srcTableName" => "Valeurs_indicateurs"
));

$proto12["m_sql"] = "date_saisie";
$proto12["m_srcTableName"] = "Valeurs_indicateurs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "saisi_par",
	"m_strTable" => "valeur_indicateur",
	"m_srcTableName" => "Valeurs_indicateurs"
));

$proto14["m_sql"] = "saisi_par";
$proto14["m_srcTableName"] = "Valeurs_indicateurs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "valeur_indicateur";
$proto17["m_srcTableName"] = "Valeurs_indicateurs";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "id_indicateur";
$proto17["m_columns"][] = "valeur";
$proto17["m_columns"][] = "date_saisie";
$proto17["m_columns"][] = "saisi_par";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "valeur_indicateur";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Valeurs_indicateurs";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Valeurs_indicateurs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_valeurs_indicateurs = createSqlQuery_valeurs_indicateurs();


	
		;

					

$tdatavaleurs_indicateurs[".sqlquery"] = $queryData_valeurs_indicateurs;



$tdatavaleurs_indicateurs[".hasEvents"] = false;

?>