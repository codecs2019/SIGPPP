<?php
$tdatakpi_budget_restant = array();
$tdatakpi_budget_restant[".searchableFields"] = array();
$tdatakpi_budget_restant[".ShortName"] = "kpi_budget_restant";
$tdatakpi_budget_restant[".OwnerID"] = "";
$tdatakpi_budget_restant[".OriginalTable"] = "vue_kpi_portefeuille";


$tdatakpi_budget_restant[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatakpi_budget_restant[".originalPagesByType"] = $tdatakpi_budget_restant[".pagesByType"];
$tdatakpi_budget_restant[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatakpi_budget_restant[".originalPages"] = $tdatakpi_budget_restant[".pages"];
$tdatakpi_budget_restant[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatakpi_budget_restant[".originalDefaultPages"] = $tdatakpi_budget_restant[".defaultPages"];

//	field labels
$fieldLabelskpi_budget_restant = array();
$fieldToolTipskpi_budget_restant = array();
$pageTitleskpi_budget_restant = array();
$placeHolderskpi_budget_restant = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelskpi_budget_restant["French"] = array();
	$fieldToolTipskpi_budget_restant["French"] = array();
	$placeHolderskpi_budget_restant["French"] = array();
	$pageTitleskpi_budget_restant["French"] = array();
	$fieldLabelskpi_budget_restant["French"]["budget_restant"] = "Budget Restant";
	$fieldToolTipskpi_budget_restant["French"]["budget_restant"] = "";
	$placeHolderskpi_budget_restant["French"]["budget_restant"] = "";
	if (count($fieldToolTipskpi_budget_restant["French"]))
		$tdatakpi_budget_restant[".isUseToolTips"] = true;
}


	$tdatakpi_budget_restant[".NCSearch"] = true;



$tdatakpi_budget_restant[".shortTableName"] = "kpi_budget_restant";
$tdatakpi_budget_restant[".nSecOptions"] = 0;

$tdatakpi_budget_restant[".mainTableOwnerID"] = "";
$tdatakpi_budget_restant[".entityType"] = 1;
$tdatakpi_budget_restant[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatakpi_budget_restant[".strOriginalTableName"] = "vue_kpi_portefeuille";

	



$tdatakpi_budget_restant[".showAddInPopup"] = false;

$tdatakpi_budget_restant[".showEditInPopup"] = false;

$tdatakpi_budget_restant[".showViewInPopup"] = false;

$tdatakpi_budget_restant[".listAjax"] = false;
//	temporary
//$tdatakpi_budget_restant[".listAjax"] = false;

	$tdatakpi_budget_restant[".audit"] = false;

	$tdatakpi_budget_restant[".locking"] = false;


$pages = $tdatakpi_budget_restant[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakpi_budget_restant[".edit"] = true;
	$tdatakpi_budget_restant[".afterEditAction"] = 1;
	$tdatakpi_budget_restant[".closePopupAfterEdit"] = 1;
	$tdatakpi_budget_restant[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakpi_budget_restant[".add"] = true;
$tdatakpi_budget_restant[".afterAddAction"] = 1;
$tdatakpi_budget_restant[".closePopupAfterAdd"] = 1;
$tdatakpi_budget_restant[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakpi_budget_restant[".list"] = true;
}



$tdatakpi_budget_restant[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakpi_budget_restant[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakpi_budget_restant[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakpi_budget_restant[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakpi_budget_restant[".printFriendly"] = true;
}



$tdatakpi_budget_restant[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakpi_budget_restant[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakpi_budget_restant[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakpi_budget_restant[".isUseAjaxSuggest"] = true;





$tdatakpi_budget_restant[".ajaxCodeSnippetAdded"] = false;

$tdatakpi_budget_restant[".buttonsAdded"] = false;

$tdatakpi_budget_restant[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakpi_budget_restant[".isUseTimeForSearch"] = false;


$tdatakpi_budget_restant[".badgeColor"] = "008B8B";


$tdatakpi_budget_restant[".allSearchFields"] = array();
$tdatakpi_budget_restant[".filterFields"] = array();
$tdatakpi_budget_restant[".requiredSearchFields"] = array();

$tdatakpi_budget_restant[".googleLikeFields"] = array();
$tdatakpi_budget_restant[".googleLikeFields"][] = "budget_restant";



$tdatakpi_budget_restant[".tableType"] = "list";

$tdatakpi_budget_restant[".printerPageOrientation"] = 0;
$tdatakpi_budget_restant[".nPrinterPageScale"] = 100;

$tdatakpi_budget_restant[".nPrinterSplitRecords"] = 40;

$tdatakpi_budget_restant[".geocodingEnabled"] = false;










$tdatakpi_budget_restant[".pageSize"] = 20;

$tdatakpi_budget_restant[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakpi_budget_restant[".strOrderBy"] = $tstrOrderBy;

$tdatakpi_budget_restant[".orderindexes"] = array();


$tdatakpi_budget_restant[".sqlHead"] = "SELECT budget_restant";
$tdatakpi_budget_restant[".sqlFrom"] = "FROM vue_kpi_portefeuille";
$tdatakpi_budget_restant[".sqlWhereExpr"] = "";
$tdatakpi_budget_restant[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakpi_budget_restant[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakpi_budget_restant[".arrGroupsPerPage"] = $arrGPP;

$tdatakpi_budget_restant[".highlightSearchResults"] = true;

$tableKeyskpi_budget_restant = array();
$tdatakpi_budget_restant[".Keys"] = $tableKeyskpi_budget_restant;


$tdatakpi_budget_restant[".hideMobileList"] = array();




//	budget_restant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "budget_restant";
	$fdata["GoodName"] = "budget_restant";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("kpi_budget_restant","budget_restant");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "budget_restant";

		$fdata["sourceSingle"] = "budget_restant";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "budget_restant";

	
	
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


	$tdatakpi_budget_restant["budget_restant"] = $fdata;
		$tdatakpi_budget_restant[".searchableFields"][] = "budget_restant";


$tables_data["kpi_budget_restant"]=&$tdatakpi_budget_restant;
$field_labels["kpi_budget_restant"] = &$fieldLabelskpi_budget_restant;
$fieldToolTips["kpi_budget_restant"] = &$fieldToolTipskpi_budget_restant;
$placeHolders["kpi_budget_restant"] = &$placeHolderskpi_budget_restant;
$page_titles["kpi_budget_restant"] = &$pageTitleskpi_budget_restant;


changeTextControlsToDate( "kpi_budget_restant" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kpi_budget_restant"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kpi_budget_restant"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kpi_budget_restant()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "budget_restant";
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
	"m_strName" => "budget_restant",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "kpi_budget_restant"
));

$proto6["m_sql"] = "budget_restant";
$proto6["m_srcTableName"] = "kpi_budget_restant";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vue_kpi_portefeuille";
$proto9["m_srcTableName"] = "kpi_budget_restant";
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
$proto8["m_srcTableName"] = "kpi_budget_restant";
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
$proto0["m_srcTableName"]="kpi_budget_restant";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kpi_budget_restant = createSqlQuery_kpi_budget_restant();


	
		;

	

$tdatakpi_budget_restant[".sqlquery"] = $queryData_kpi_budget_restant;



$tdatakpi_budget_restant[".hasEvents"] = false;

?>