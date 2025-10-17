<?php
$tdatadepenses = array();
$tdatadepenses[".searchableFields"] = array();
$tdatadepenses[".ShortName"] = "depenses";
$tdatadepenses[".OwnerID"] = "";
$tdatadepenses[".OriginalTable"] = "depense";


$tdatadepenses[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadepenses[".originalPagesByType"] = $tdatadepenses[".pagesByType"];
$tdatadepenses[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadepenses[".originalPages"] = $tdatadepenses[".pages"];
$tdatadepenses[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadepenses[".originalDefaultPages"] = $tdatadepenses[".defaultPages"];

//	field labels
$fieldLabelsdepenses = array();
$fieldToolTipsdepenses = array();
$pageTitlesdepenses = array();
$placeHoldersdepenses = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsdepenses["French"] = array();
	$fieldToolTipsdepenses["French"] = array();
	$placeHoldersdepenses["French"] = array();
	$pageTitlesdepenses["French"] = array();
	$fieldLabelsdepenses["French"]["date_depense"] = "Date Depense";
	$fieldToolTipsdepenses["French"]["date_depense"] = "";
	$placeHoldersdepenses["French"]["date_depense"] = "";
	$fieldLabelsdepenses["French"]["description"] = "Description";
	$fieldToolTipsdepenses["French"]["description"] = "";
	$placeHoldersdepenses["French"]["description"] = "";
	$fieldLabelsdepenses["French"]["id"] = "Id";
	$fieldToolTipsdepenses["French"]["id"] = "";
	$placeHoldersdepenses["French"]["id"] = "";
	$fieldLabelsdepenses["French"]["id_projet"] = "Id Projet";
	$fieldToolTipsdepenses["French"]["id_projet"] = "";
	$placeHoldersdepenses["French"]["id_projet"] = "";
	$fieldLabelsdepenses["French"]["montant"] = "Montant";
	$fieldToolTipsdepenses["French"]["montant"] = "";
	$placeHoldersdepenses["French"]["montant"] = "";
	if (count($fieldToolTipsdepenses["French"]))
		$tdatadepenses[".isUseToolTips"] = true;
}


	$tdatadepenses[".NCSearch"] = true;



$tdatadepenses[".shortTableName"] = "depenses";
$tdatadepenses[".nSecOptions"] = 0;

$tdatadepenses[".mainTableOwnerID"] = "";
$tdatadepenses[".entityType"] = 1;
$tdatadepenses[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatadepenses[".strOriginalTableName"] = "depense";

	



$tdatadepenses[".showAddInPopup"] = false;

$tdatadepenses[".showEditInPopup"] = false;

$tdatadepenses[".showViewInPopup"] = false;

$tdatadepenses[".listAjax"] = false;
//	temporary
//$tdatadepenses[".listAjax"] = false;

	$tdatadepenses[".audit"] = false;

	$tdatadepenses[".locking"] = false;


$pages = $tdatadepenses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadepenses[".edit"] = true;
	$tdatadepenses[".afterEditAction"] = 1;
	$tdatadepenses[".closePopupAfterEdit"] = 1;
	$tdatadepenses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadepenses[".add"] = true;
$tdatadepenses[".afterAddAction"] = 1;
$tdatadepenses[".closePopupAfterAdd"] = 1;
$tdatadepenses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadepenses[".list"] = true;
}



$tdatadepenses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadepenses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadepenses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadepenses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadepenses[".printFriendly"] = true;
}



$tdatadepenses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadepenses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadepenses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadepenses[".isUseAjaxSuggest"] = true;





$tdatadepenses[".ajaxCodeSnippetAdded"] = false;

$tdatadepenses[".buttonsAdded"] = false;

$tdatadepenses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepenses[".isUseTimeForSearch"] = false;


$tdatadepenses[".badgeColor"] = "3cb371";


$tdatadepenses[".allSearchFields"] = array();
$tdatadepenses[".filterFields"] = array();
$tdatadepenses[".requiredSearchFields"] = array();

$tdatadepenses[".googleLikeFields"] = array();
$tdatadepenses[".googleLikeFields"][] = "id";
$tdatadepenses[".googleLikeFields"][] = "id_projet";
$tdatadepenses[".googleLikeFields"][] = "description";
$tdatadepenses[".googleLikeFields"][] = "montant";
$tdatadepenses[".googleLikeFields"][] = "date_depense";



$tdatadepenses[".tableType"] = "list";

$tdatadepenses[".printerPageOrientation"] = 0;
$tdatadepenses[".nPrinterPageScale"] = 100;

$tdatadepenses[".nPrinterSplitRecords"] = 40;

$tdatadepenses[".geocodingEnabled"] = false;










$tdatadepenses[".pageSize"] = 20;

$tdatadepenses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadepenses[".strOrderBy"] = $tstrOrderBy;

$tdatadepenses[".orderindexes"] = array();


$tdatadepenses[".sqlHead"] = "SELECT id,  	id_projet,  	description,  	montant,  	date_depense";
$tdatadepenses[".sqlFrom"] = "FROM depense";
$tdatadepenses[".sqlWhereExpr"] = "";
$tdatadepenses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepenses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepenses[".arrGroupsPerPage"] = $arrGPP;

$tdatadepenses[".highlightSearchResults"] = true;

$tableKeysdepenses = array();
$tableKeysdepenses[] = "id";
$tdatadepenses[".Keys"] = $tableKeysdepenses;


$tdatadepenses[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "depense";
	$fdata["Label"] = GetFieldLabel("Depenses","id");
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


	$tdatadepenses["id"] = $fdata;
		$tdatadepenses[".searchableFields"][] = "id";
//	id_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_projet";
	$fdata["GoodName"] = "id_projet";
	$fdata["ownerTable"] = "depense";
	$fdata["Label"] = GetFieldLabel("Depenses","id_projet");
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


	$tdatadepenses["id_projet"] = $fdata;
		$tdatadepenses[".searchableFields"][] = "id_projet";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "depense";
	$fdata["Label"] = GetFieldLabel("Depenses","description");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatadepenses["description"] = $fdata;
		$tdatadepenses[".searchableFields"][] = "description";
//	montant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "montant";
	$fdata["GoodName"] = "montant";
	$fdata["ownerTable"] = "depense";
	$fdata["Label"] = GetFieldLabel("Depenses","montant");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "montant";

		$fdata["sourceSingle"] = "montant";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "montant";

	
	
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


	$tdatadepenses["montant"] = $fdata;
		$tdatadepenses[".searchableFields"][] = "montant";
//	date_depense
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_depense";
	$fdata["GoodName"] = "date_depense";
	$fdata["ownerTable"] = "depense";
	$fdata["Label"] = GetFieldLabel("Depenses","date_depense");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "date_depense";

		$fdata["sourceSingle"] = "date_depense";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_depense";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatadepenses["date_depense"] = $fdata;
		$tdatadepenses[".searchableFields"][] = "date_depense";


$tables_data["Depenses"]=&$tdatadepenses;
$field_labels["Depenses"] = &$fieldLabelsdepenses;
$fieldToolTips["Depenses"] = &$fieldToolTipsdepenses;
$placeHolders["Depenses"] = &$placeHoldersdepenses;
$page_titles["Depenses"] = &$pageTitlesdepenses;


changeTextControlsToDate( "Depenses" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Depenses"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Depenses"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="projet";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Projets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Depenses"][0] = $masterParams;
				$masterTablesData["Depenses"][0]["masterKeys"] = array();
	$masterTablesData["Depenses"][0]["masterKeys"][]="id";
				$masterTablesData["Depenses"][0]["detailKeys"] = array();
	$masterTablesData["Depenses"][0]["detailKeys"][]="id_projet";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_depenses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_projet,  	description,  	montant,  	date_depense";
$proto0["m_strFrom"] = "FROM depense";
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
	"m_strTable" => "depense",
	"m_srcTableName" => "Depenses"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Depenses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_projet",
	"m_strTable" => "depense",
	"m_srcTableName" => "Depenses"
));

$proto8["m_sql"] = "id_projet";
$proto8["m_srcTableName"] = "Depenses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "depense",
	"m_srcTableName" => "Depenses"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "Depenses";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "montant",
	"m_strTable" => "depense",
	"m_srcTableName" => "Depenses"
));

$proto12["m_sql"] = "montant";
$proto12["m_srcTableName"] = "Depenses";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "date_depense",
	"m_strTable" => "depense",
	"m_srcTableName" => "Depenses"
));

$proto14["m_sql"] = "date_depense";
$proto14["m_srcTableName"] = "Depenses";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "depense";
$proto17["m_srcTableName"] = "Depenses";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "id_projet";
$proto17["m_columns"][] = "description";
$proto17["m_columns"][] = "montant";
$proto17["m_columns"][] = "date_depense";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "depense";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Depenses";
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
$proto0["m_srcTableName"]="Depenses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_depenses = createSqlQuery_depenses();


	
		;

					

$tdatadepenses[".sqlquery"] = $queryData_depenses;



$tdatadepenses[".hasEvents"] = false;

?>