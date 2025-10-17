<?php
$tdatakpi_budgetglobal = array();
$tdatakpi_budgetglobal[".searchableFields"] = array();
$tdatakpi_budgetglobal[".ShortName"] = "kpi_budgetglobal";
$tdatakpi_budgetglobal[".OwnerID"] = "";
$tdatakpi_budgetglobal[".OriginalTable"] = "vue_kpi_portefeuille";


$tdatakpi_budgetglobal[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatakpi_budgetglobal[".originalPagesByType"] = $tdatakpi_budgetglobal[".pagesByType"];
$tdatakpi_budgetglobal[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatakpi_budgetglobal[".originalPages"] = $tdatakpi_budgetglobal[".pages"];
$tdatakpi_budgetglobal[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatakpi_budgetglobal[".originalDefaultPages"] = $tdatakpi_budgetglobal[".defaultPages"];

//	field labels
$fieldLabelskpi_budgetglobal = array();
$fieldToolTipskpi_budgetglobal = array();
$pageTitleskpi_budgetglobal = array();
$placeHolderskpi_budgetglobal = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelskpi_budgetglobal["French"] = array();
	$fieldToolTipskpi_budgetglobal["French"] = array();
	$placeHolderskpi_budgetglobal["French"] = array();
	$pageTitleskpi_budgetglobal["French"] = array();
	$fieldLabelskpi_budgetglobal["French"]["budget_global"] = "Budget Global";
	$fieldToolTipskpi_budgetglobal["French"]["budget_global"] = "";
	$placeHolderskpi_budgetglobal["French"]["budget_global"] = "";
	if (count($fieldToolTipskpi_budgetglobal["French"]))
		$tdatakpi_budgetglobal[".isUseToolTips"] = true;
}


	$tdatakpi_budgetglobal[".NCSearch"] = true;



$tdatakpi_budgetglobal[".shortTableName"] = "kpi_budgetglobal";
$tdatakpi_budgetglobal[".nSecOptions"] = 0;

$tdatakpi_budgetglobal[".mainTableOwnerID"] = "";
$tdatakpi_budgetglobal[".entityType"] = 1;
$tdatakpi_budgetglobal[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatakpi_budgetglobal[".strOriginalTableName"] = "vue_kpi_portefeuille";

	



$tdatakpi_budgetglobal[".showAddInPopup"] = false;

$tdatakpi_budgetglobal[".showEditInPopup"] = false;

$tdatakpi_budgetglobal[".showViewInPopup"] = false;

$tdatakpi_budgetglobal[".listAjax"] = false;
//	temporary
//$tdatakpi_budgetglobal[".listAjax"] = false;

	$tdatakpi_budgetglobal[".audit"] = false;

	$tdatakpi_budgetglobal[".locking"] = false;


$pages = $tdatakpi_budgetglobal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakpi_budgetglobal[".edit"] = true;
	$tdatakpi_budgetglobal[".afterEditAction"] = 1;
	$tdatakpi_budgetglobal[".closePopupAfterEdit"] = 1;
	$tdatakpi_budgetglobal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakpi_budgetglobal[".add"] = true;
$tdatakpi_budgetglobal[".afterAddAction"] = 1;
$tdatakpi_budgetglobal[".closePopupAfterAdd"] = 1;
$tdatakpi_budgetglobal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakpi_budgetglobal[".list"] = true;
}



$tdatakpi_budgetglobal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakpi_budgetglobal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakpi_budgetglobal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakpi_budgetglobal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakpi_budgetglobal[".printFriendly"] = true;
}



$tdatakpi_budgetglobal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakpi_budgetglobal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakpi_budgetglobal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakpi_budgetglobal[".isUseAjaxSuggest"] = true;





$tdatakpi_budgetglobal[".ajaxCodeSnippetAdded"] = false;

$tdatakpi_budgetglobal[".buttonsAdded"] = false;

$tdatakpi_budgetglobal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakpi_budgetglobal[".isUseTimeForSearch"] = false;


$tdatakpi_budgetglobal[".badgeColor"] = "1E90FF";


$tdatakpi_budgetglobal[".allSearchFields"] = array();
$tdatakpi_budgetglobal[".filterFields"] = array();
$tdatakpi_budgetglobal[".requiredSearchFields"] = array();

$tdatakpi_budgetglobal[".googleLikeFields"] = array();
$tdatakpi_budgetglobal[".googleLikeFields"][] = "budget_global";



$tdatakpi_budgetglobal[".tableType"] = "list";

$tdatakpi_budgetglobal[".printerPageOrientation"] = 0;
$tdatakpi_budgetglobal[".nPrinterPageScale"] = 100;

$tdatakpi_budgetglobal[".nPrinterSplitRecords"] = 40;

$tdatakpi_budgetglobal[".geocodingEnabled"] = false;










$tdatakpi_budgetglobal[".pageSize"] = 20;

$tdatakpi_budgetglobal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakpi_budgetglobal[".strOrderBy"] = $tstrOrderBy;

$tdatakpi_budgetglobal[".orderindexes"] = array();


$tdatakpi_budgetglobal[".sqlHead"] = "SELECT budget_global";
$tdatakpi_budgetglobal[".sqlFrom"] = "FROM vue_kpi_portefeuille";
$tdatakpi_budgetglobal[".sqlWhereExpr"] = "";
$tdatakpi_budgetglobal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakpi_budgetglobal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakpi_budgetglobal[".arrGroupsPerPage"] = $arrGPP;

$tdatakpi_budgetglobal[".highlightSearchResults"] = true;

$tableKeyskpi_budgetglobal = array();
$tdatakpi_budgetglobal[".Keys"] = $tableKeyskpi_budgetglobal;


$tdatakpi_budgetglobal[".hideMobileList"] = array();




//	budget_global
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "budget_global";
	$fdata["GoodName"] = "budget_global";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("kpi_BudgetGlobal","budget_global");
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


	$tdatakpi_budgetglobal["budget_global"] = $fdata;
		$tdatakpi_budgetglobal[".searchableFields"][] = "budget_global";


$tables_data["kpi_BudgetGlobal"]=&$tdatakpi_budgetglobal;
$field_labels["kpi_BudgetGlobal"] = &$fieldLabelskpi_budgetglobal;
$fieldToolTips["kpi_BudgetGlobal"] = &$fieldToolTipskpi_budgetglobal;
$placeHolders["kpi_BudgetGlobal"] = &$placeHolderskpi_budgetglobal;
$page_titles["kpi_BudgetGlobal"] = &$pageTitleskpi_budgetglobal;


changeTextControlsToDate( "kpi_BudgetGlobal" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kpi_BudgetGlobal"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kpi_BudgetGlobal"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kpi_budgetglobal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "budget_global";
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
	"m_strName" => "budget_global",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "kpi_BudgetGlobal"
));

$proto6["m_sql"] = "budget_global";
$proto6["m_srcTableName"] = "kpi_BudgetGlobal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vue_kpi_portefeuille";
$proto9["m_srcTableName"] = "kpi_BudgetGlobal";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "projets_en_cours";
$proto9["m_columns"][] = "projets_termines";
$proto9["m_columns"][] = "projets_en_retard";
$proto9["m_columns"][] = "projets_depassement_budget";
$proto9["m_columns"][] = "activites_en_cours";
$proto9["m_columns"][] = "activites_en_retard";
$proto9["m_columns"][] = "activites_terminees";
$proto9["m_columns"][] = "budget_global";
$proto9["m_columns"][] = "depenses_realisees";
$proto9["m_columns"][] = "budget_restant";
$proto9["m_columns"][] = "taux_execution_budgetaire";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "vue_kpi_portefeuille";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "kpi_BudgetGlobal";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="kpi_BudgetGlobal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kpi_budgetglobal = createSqlQuery_kpi_budgetglobal();


	
		;

	

$tdatakpi_budgetglobal[".sqlquery"] = $queryData_kpi_budgetglobal;



$tdatakpi_budgetglobal[".hasEvents"] = false;

?>