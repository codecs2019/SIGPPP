<?php
$tdatakpi_projets_depassement_budget = array();
$tdatakpi_projets_depassement_budget[".searchableFields"] = array();
$tdatakpi_projets_depassement_budget[".ShortName"] = "kpi_projets_depassement_budget";
$tdatakpi_projets_depassement_budget[".OwnerID"] = "";
$tdatakpi_projets_depassement_budget[".OriginalTable"] = "vue_kpi_portefeuille";


$tdatakpi_projets_depassement_budget[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatakpi_projets_depassement_budget[".originalPagesByType"] = $tdatakpi_projets_depassement_budget[".pagesByType"];
$tdatakpi_projets_depassement_budget[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatakpi_projets_depassement_budget[".originalPages"] = $tdatakpi_projets_depassement_budget[".pages"];
$tdatakpi_projets_depassement_budget[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatakpi_projets_depassement_budget[".originalDefaultPages"] = $tdatakpi_projets_depassement_budget[".defaultPages"];

//	field labels
$fieldLabelskpi_projets_depassement_budget = array();
$fieldToolTipskpi_projets_depassement_budget = array();
$pageTitleskpi_projets_depassement_budget = array();
$placeHolderskpi_projets_depassement_budget = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelskpi_projets_depassement_budget["French"] = array();
	$fieldToolTipskpi_projets_depassement_budget["French"] = array();
	$placeHolderskpi_projets_depassement_budget["French"] = array();
	$pageTitleskpi_projets_depassement_budget["French"] = array();
	$fieldLabelskpi_projets_depassement_budget["French"]["projets_depassement_budget"] = "Projets Depassement Budget";
	$fieldToolTipskpi_projets_depassement_budget["French"]["projets_depassement_budget"] = "";
	$placeHolderskpi_projets_depassement_budget["French"]["projets_depassement_budget"] = "";
	if (count($fieldToolTipskpi_projets_depassement_budget["French"]))
		$tdatakpi_projets_depassement_budget[".isUseToolTips"] = true;
}


	$tdatakpi_projets_depassement_budget[".NCSearch"] = true;



$tdatakpi_projets_depassement_budget[".shortTableName"] = "kpi_projets_depassement_budget";
$tdatakpi_projets_depassement_budget[".nSecOptions"] = 0;

$tdatakpi_projets_depassement_budget[".mainTableOwnerID"] = "";
$tdatakpi_projets_depassement_budget[".entityType"] = 1;
$tdatakpi_projets_depassement_budget[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatakpi_projets_depassement_budget[".strOriginalTableName"] = "vue_kpi_portefeuille";

	



$tdatakpi_projets_depassement_budget[".showAddInPopup"] = false;

$tdatakpi_projets_depassement_budget[".showEditInPopup"] = false;

$tdatakpi_projets_depassement_budget[".showViewInPopup"] = false;

$tdatakpi_projets_depassement_budget[".listAjax"] = false;
//	temporary
//$tdatakpi_projets_depassement_budget[".listAjax"] = false;

	$tdatakpi_projets_depassement_budget[".audit"] = false;

	$tdatakpi_projets_depassement_budget[".locking"] = false;


$pages = $tdatakpi_projets_depassement_budget[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakpi_projets_depassement_budget[".edit"] = true;
	$tdatakpi_projets_depassement_budget[".afterEditAction"] = 1;
	$tdatakpi_projets_depassement_budget[".closePopupAfterEdit"] = 1;
	$tdatakpi_projets_depassement_budget[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakpi_projets_depassement_budget[".add"] = true;
$tdatakpi_projets_depassement_budget[".afterAddAction"] = 1;
$tdatakpi_projets_depassement_budget[".closePopupAfterAdd"] = 1;
$tdatakpi_projets_depassement_budget[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakpi_projets_depassement_budget[".list"] = true;
}



$tdatakpi_projets_depassement_budget[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakpi_projets_depassement_budget[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakpi_projets_depassement_budget[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakpi_projets_depassement_budget[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakpi_projets_depassement_budget[".printFriendly"] = true;
}



$tdatakpi_projets_depassement_budget[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakpi_projets_depassement_budget[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakpi_projets_depassement_budget[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakpi_projets_depassement_budget[".isUseAjaxSuggest"] = true;





$tdatakpi_projets_depassement_budget[".ajaxCodeSnippetAdded"] = false;

$tdatakpi_projets_depassement_budget[".buttonsAdded"] = false;

$tdatakpi_projets_depassement_budget[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakpi_projets_depassement_budget[".isUseTimeForSearch"] = false;


$tdatakpi_projets_depassement_budget[".badgeColor"] = "CD5C5C";


$tdatakpi_projets_depassement_budget[".allSearchFields"] = array();
$tdatakpi_projets_depassement_budget[".filterFields"] = array();
$tdatakpi_projets_depassement_budget[".requiredSearchFields"] = array();

$tdatakpi_projets_depassement_budget[".googleLikeFields"] = array();
$tdatakpi_projets_depassement_budget[".googleLikeFields"][] = "projets_depassement_budget";



$tdatakpi_projets_depassement_budget[".tableType"] = "list";

$tdatakpi_projets_depassement_budget[".printerPageOrientation"] = 0;
$tdatakpi_projets_depassement_budget[".nPrinterPageScale"] = 100;

$tdatakpi_projets_depassement_budget[".nPrinterSplitRecords"] = 40;

$tdatakpi_projets_depassement_budget[".geocodingEnabled"] = false;










$tdatakpi_projets_depassement_budget[".pageSize"] = 20;

$tdatakpi_projets_depassement_budget[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakpi_projets_depassement_budget[".strOrderBy"] = $tstrOrderBy;

$tdatakpi_projets_depassement_budget[".orderindexes"] = array();


$tdatakpi_projets_depassement_budget[".sqlHead"] = "SELECT projets_depassement_budget";
$tdatakpi_projets_depassement_budget[".sqlFrom"] = "FROM vue_kpi_portefeuille";
$tdatakpi_projets_depassement_budget[".sqlWhereExpr"] = "";
$tdatakpi_projets_depassement_budget[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakpi_projets_depassement_budget[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakpi_projets_depassement_budget[".arrGroupsPerPage"] = $arrGPP;

$tdatakpi_projets_depassement_budget[".highlightSearchResults"] = true;

$tableKeyskpi_projets_depassement_budget = array();
$tdatakpi_projets_depassement_budget[".Keys"] = $tableKeyskpi_projets_depassement_budget;


$tdatakpi_projets_depassement_budget[".hideMobileList"] = array();




//	projets_depassement_budget
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projets_depassement_budget";
	$fdata["GoodName"] = "projets_depassement_budget";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("kpi_projets_depassement_budget","projets_depassement_budget");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "projets_depassement_budget";

		$fdata["sourceSingle"] = "projets_depassement_budget";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projets_depassement_budget";

	
	
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


	$tdatakpi_projets_depassement_budget["projets_depassement_budget"] = $fdata;
		$tdatakpi_projets_depassement_budget[".searchableFields"][] = "projets_depassement_budget";


$tables_data["kpi_projets_depassement_budget"]=&$tdatakpi_projets_depassement_budget;
$field_labels["kpi_projets_depassement_budget"] = &$fieldLabelskpi_projets_depassement_budget;
$fieldToolTips["kpi_projets_depassement_budget"] = &$fieldToolTipskpi_projets_depassement_budget;
$placeHolders["kpi_projets_depassement_budget"] = &$placeHolderskpi_projets_depassement_budget;
$page_titles["kpi_projets_depassement_budget"] = &$pageTitleskpi_projets_depassement_budget;


changeTextControlsToDate( "kpi_projets_depassement_budget" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kpi_projets_depassement_budget"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kpi_projets_depassement_budget"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kpi_projets_depassement_budget()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "projets_depassement_budget";
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
	"m_strName" => "projets_depassement_budget",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "kpi_projets_depassement_budget"
));

$proto6["m_sql"] = "projets_depassement_budget";
$proto6["m_srcTableName"] = "kpi_projets_depassement_budget";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vue_kpi_portefeuille";
$proto9["m_srcTableName"] = "kpi_projets_depassement_budget";
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
$proto8["m_srcTableName"] = "kpi_projets_depassement_budget";
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
$proto0["m_srcTableName"]="kpi_projets_depassement_budget";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kpi_projets_depassement_budget = createSqlQuery_kpi_projets_depassement_budget();


	
		;

	

$tdatakpi_projets_depassement_budget[".sqlquery"] = $queryData_kpi_projets_depassement_budget;



$tdatakpi_projets_depassement_budget[".hasEvents"] = false;

?>