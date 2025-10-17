<?php
$tdatakpi_depenses_realisees = array();
$tdatakpi_depenses_realisees[".searchableFields"] = array();
$tdatakpi_depenses_realisees[".ShortName"] = "kpi_depenses_realisees";
$tdatakpi_depenses_realisees[".OwnerID"] = "";
$tdatakpi_depenses_realisees[".OriginalTable"] = "vue_kpi_portefeuille";


$tdatakpi_depenses_realisees[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatakpi_depenses_realisees[".originalPagesByType"] = $tdatakpi_depenses_realisees[".pagesByType"];
$tdatakpi_depenses_realisees[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatakpi_depenses_realisees[".originalPages"] = $tdatakpi_depenses_realisees[".pages"];
$tdatakpi_depenses_realisees[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatakpi_depenses_realisees[".originalDefaultPages"] = $tdatakpi_depenses_realisees[".defaultPages"];

//	field labels
$fieldLabelskpi_depenses_realisees = array();
$fieldToolTipskpi_depenses_realisees = array();
$pageTitleskpi_depenses_realisees = array();
$placeHolderskpi_depenses_realisees = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelskpi_depenses_realisees["French"] = array();
	$fieldToolTipskpi_depenses_realisees["French"] = array();
	$placeHolderskpi_depenses_realisees["French"] = array();
	$pageTitleskpi_depenses_realisees["French"] = array();
	$fieldLabelskpi_depenses_realisees["French"]["depenses_realisees"] = "Depenses Realisees";
	$fieldToolTipskpi_depenses_realisees["French"]["depenses_realisees"] = "";
	$placeHolderskpi_depenses_realisees["French"]["depenses_realisees"] = "";
	if (count($fieldToolTipskpi_depenses_realisees["French"]))
		$tdatakpi_depenses_realisees[".isUseToolTips"] = true;
}


	$tdatakpi_depenses_realisees[".NCSearch"] = true;



$tdatakpi_depenses_realisees[".shortTableName"] = "kpi_depenses_realisees";
$tdatakpi_depenses_realisees[".nSecOptions"] = 0;

$tdatakpi_depenses_realisees[".mainTableOwnerID"] = "";
$tdatakpi_depenses_realisees[".entityType"] = 1;
$tdatakpi_depenses_realisees[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatakpi_depenses_realisees[".strOriginalTableName"] = "vue_kpi_portefeuille";

	



$tdatakpi_depenses_realisees[".showAddInPopup"] = false;

$tdatakpi_depenses_realisees[".showEditInPopup"] = false;

$tdatakpi_depenses_realisees[".showViewInPopup"] = false;

$tdatakpi_depenses_realisees[".listAjax"] = false;
//	temporary
//$tdatakpi_depenses_realisees[".listAjax"] = false;

	$tdatakpi_depenses_realisees[".audit"] = false;

	$tdatakpi_depenses_realisees[".locking"] = false;


$pages = $tdatakpi_depenses_realisees[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakpi_depenses_realisees[".edit"] = true;
	$tdatakpi_depenses_realisees[".afterEditAction"] = 1;
	$tdatakpi_depenses_realisees[".closePopupAfterEdit"] = 1;
	$tdatakpi_depenses_realisees[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakpi_depenses_realisees[".add"] = true;
$tdatakpi_depenses_realisees[".afterAddAction"] = 1;
$tdatakpi_depenses_realisees[".closePopupAfterAdd"] = 1;
$tdatakpi_depenses_realisees[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakpi_depenses_realisees[".list"] = true;
}



$tdatakpi_depenses_realisees[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakpi_depenses_realisees[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakpi_depenses_realisees[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakpi_depenses_realisees[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakpi_depenses_realisees[".printFriendly"] = true;
}



$tdatakpi_depenses_realisees[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakpi_depenses_realisees[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakpi_depenses_realisees[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakpi_depenses_realisees[".isUseAjaxSuggest"] = true;





$tdatakpi_depenses_realisees[".ajaxCodeSnippetAdded"] = false;

$tdatakpi_depenses_realisees[".buttonsAdded"] = false;

$tdatakpi_depenses_realisees[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakpi_depenses_realisees[".isUseTimeForSearch"] = false;


$tdatakpi_depenses_realisees[".badgeColor"] = "6493EA";


$tdatakpi_depenses_realisees[".allSearchFields"] = array();
$tdatakpi_depenses_realisees[".filterFields"] = array();
$tdatakpi_depenses_realisees[".requiredSearchFields"] = array();

$tdatakpi_depenses_realisees[".googleLikeFields"] = array();
$tdatakpi_depenses_realisees[".googleLikeFields"][] = "depenses_realisees";



$tdatakpi_depenses_realisees[".tableType"] = "list";

$tdatakpi_depenses_realisees[".printerPageOrientation"] = 0;
$tdatakpi_depenses_realisees[".nPrinterPageScale"] = 100;

$tdatakpi_depenses_realisees[".nPrinterSplitRecords"] = 40;

$tdatakpi_depenses_realisees[".geocodingEnabled"] = false;










$tdatakpi_depenses_realisees[".pageSize"] = 20;

$tdatakpi_depenses_realisees[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakpi_depenses_realisees[".strOrderBy"] = $tstrOrderBy;

$tdatakpi_depenses_realisees[".orderindexes"] = array();


$tdatakpi_depenses_realisees[".sqlHead"] = "SELECT depenses_realisees";
$tdatakpi_depenses_realisees[".sqlFrom"] = "FROM vue_kpi_portefeuille";
$tdatakpi_depenses_realisees[".sqlWhereExpr"] = "";
$tdatakpi_depenses_realisees[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakpi_depenses_realisees[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakpi_depenses_realisees[".arrGroupsPerPage"] = $arrGPP;

$tdatakpi_depenses_realisees[".highlightSearchResults"] = true;

$tableKeyskpi_depenses_realisees = array();
$tdatakpi_depenses_realisees[".Keys"] = $tableKeyskpi_depenses_realisees;


$tdatakpi_depenses_realisees[".hideMobileList"] = array();




//	depenses_realisees
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "depenses_realisees";
	$fdata["GoodName"] = "depenses_realisees";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("kpi_depenses_realisees","depenses_realisees");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "depenses_realisees";

		$fdata["sourceSingle"] = "depenses_realisees";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depenses_realisees";

	
	
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


	$tdatakpi_depenses_realisees["depenses_realisees"] = $fdata;
		$tdatakpi_depenses_realisees[".searchableFields"][] = "depenses_realisees";


$tables_data["kpi_depenses_realisees"]=&$tdatakpi_depenses_realisees;
$field_labels["kpi_depenses_realisees"] = &$fieldLabelskpi_depenses_realisees;
$fieldToolTips["kpi_depenses_realisees"] = &$fieldToolTipskpi_depenses_realisees;
$placeHolders["kpi_depenses_realisees"] = &$placeHolderskpi_depenses_realisees;
$page_titles["kpi_depenses_realisees"] = &$pageTitleskpi_depenses_realisees;


changeTextControlsToDate( "kpi_depenses_realisees" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kpi_depenses_realisees"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kpi_depenses_realisees"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kpi_depenses_realisees()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "depenses_realisees";
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
	"m_strName" => "depenses_realisees",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "kpi_depenses_realisees"
));

$proto6["m_sql"] = "depenses_realisees";
$proto6["m_srcTableName"] = "kpi_depenses_realisees";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vue_kpi_portefeuille";
$proto9["m_srcTableName"] = "kpi_depenses_realisees";
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
$proto8["m_srcTableName"] = "kpi_depenses_realisees";
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
$proto0["m_srcTableName"]="kpi_depenses_realisees";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kpi_depenses_realisees = createSqlQuery_kpi_depenses_realisees();


	
		;

	

$tdatakpi_depenses_realisees[".sqlquery"] = $queryData_kpi_depenses_realisees;



$tdatakpi_depenses_realisees[".hasEvents"] = false;

?>