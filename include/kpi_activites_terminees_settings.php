<?php
$tdatakpi_activites_terminees = array();
$tdatakpi_activites_terminees[".searchableFields"] = array();
$tdatakpi_activites_terminees[".ShortName"] = "kpi_activites_terminees";
$tdatakpi_activites_terminees[".OwnerID"] = "";
$tdatakpi_activites_terminees[".OriginalTable"] = "vue_kpi_portefeuille";


$tdatakpi_activites_terminees[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatakpi_activites_terminees[".originalPagesByType"] = $tdatakpi_activites_terminees[".pagesByType"];
$tdatakpi_activites_terminees[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatakpi_activites_terminees[".originalPages"] = $tdatakpi_activites_terminees[".pages"];
$tdatakpi_activites_terminees[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatakpi_activites_terminees[".originalDefaultPages"] = $tdatakpi_activites_terminees[".defaultPages"];

//	field labels
$fieldLabelskpi_activites_terminees = array();
$fieldToolTipskpi_activites_terminees = array();
$pageTitleskpi_activites_terminees = array();
$placeHolderskpi_activites_terminees = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelskpi_activites_terminees["French"] = array();
	$fieldToolTipskpi_activites_terminees["French"] = array();
	$placeHolderskpi_activites_terminees["French"] = array();
	$pageTitleskpi_activites_terminees["French"] = array();
	$fieldLabelskpi_activites_terminees["French"]["projets_termines"] = "Projets Termines";
	$fieldToolTipskpi_activites_terminees["French"]["projets_termines"] = "";
	$placeHolderskpi_activites_terminees["French"]["projets_termines"] = "";
	if (count($fieldToolTipskpi_activites_terminees["French"]))
		$tdatakpi_activites_terminees[".isUseToolTips"] = true;
}


	$tdatakpi_activites_terminees[".NCSearch"] = true;



$tdatakpi_activites_terminees[".shortTableName"] = "kpi_activites_terminees";
$tdatakpi_activites_terminees[".nSecOptions"] = 0;

$tdatakpi_activites_terminees[".mainTableOwnerID"] = "";
$tdatakpi_activites_terminees[".entityType"] = 1;
$tdatakpi_activites_terminees[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatakpi_activites_terminees[".strOriginalTableName"] = "vue_kpi_portefeuille";

	



$tdatakpi_activites_terminees[".showAddInPopup"] = false;

$tdatakpi_activites_terminees[".showEditInPopup"] = false;

$tdatakpi_activites_terminees[".showViewInPopup"] = false;

$tdatakpi_activites_terminees[".listAjax"] = false;
//	temporary
//$tdatakpi_activites_terminees[".listAjax"] = false;

	$tdatakpi_activites_terminees[".audit"] = false;

	$tdatakpi_activites_terminees[".locking"] = false;


$pages = $tdatakpi_activites_terminees[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakpi_activites_terminees[".edit"] = true;
	$tdatakpi_activites_terminees[".afterEditAction"] = 1;
	$tdatakpi_activites_terminees[".closePopupAfterEdit"] = 1;
	$tdatakpi_activites_terminees[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakpi_activites_terminees[".add"] = true;
$tdatakpi_activites_terminees[".afterAddAction"] = 1;
$tdatakpi_activites_terminees[".closePopupAfterAdd"] = 1;
$tdatakpi_activites_terminees[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakpi_activites_terminees[".list"] = true;
}



$tdatakpi_activites_terminees[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakpi_activites_terminees[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakpi_activites_terminees[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakpi_activites_terminees[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakpi_activites_terminees[".printFriendly"] = true;
}



$tdatakpi_activites_terminees[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakpi_activites_terminees[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakpi_activites_terminees[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakpi_activites_terminees[".isUseAjaxSuggest"] = true;





$tdatakpi_activites_terminees[".ajaxCodeSnippetAdded"] = false;

$tdatakpi_activites_terminees[".buttonsAdded"] = false;

$tdatakpi_activites_terminees[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakpi_activites_terminees[".isUseTimeForSearch"] = false;


$tdatakpi_activites_terminees[".badgeColor"] = "E67349";


$tdatakpi_activites_terminees[".allSearchFields"] = array();
$tdatakpi_activites_terminees[".filterFields"] = array();
$tdatakpi_activites_terminees[".requiredSearchFields"] = array();

$tdatakpi_activites_terminees[".googleLikeFields"] = array();
$tdatakpi_activites_terminees[".googleLikeFields"][] = "projets_termines";



$tdatakpi_activites_terminees[".tableType"] = "list";

$tdatakpi_activites_terminees[".printerPageOrientation"] = 0;
$tdatakpi_activites_terminees[".nPrinterPageScale"] = 100;

$tdatakpi_activites_terminees[".nPrinterSplitRecords"] = 40;

$tdatakpi_activites_terminees[".geocodingEnabled"] = false;










$tdatakpi_activites_terminees[".pageSize"] = 20;

$tdatakpi_activites_terminees[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakpi_activites_terminees[".strOrderBy"] = $tstrOrderBy;

$tdatakpi_activites_terminees[".orderindexes"] = array();


$tdatakpi_activites_terminees[".sqlHead"] = "SELECT projets_termines";
$tdatakpi_activites_terminees[".sqlFrom"] = "FROM vue_kpi_portefeuille";
$tdatakpi_activites_terminees[".sqlWhereExpr"] = "";
$tdatakpi_activites_terminees[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakpi_activites_terminees[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakpi_activites_terminees[".arrGroupsPerPage"] = $arrGPP;

$tdatakpi_activites_terminees[".highlightSearchResults"] = true;

$tableKeyskpi_activites_terminees = array();
$tdatakpi_activites_terminees[".Keys"] = $tableKeyskpi_activites_terminees;


$tdatakpi_activites_terminees[".hideMobileList"] = array();




//	projets_termines
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projets_termines";
	$fdata["GoodName"] = "projets_termines";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("kpi_activites_terminees","projets_termines");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "projets_termines";

		$fdata["sourceSingle"] = "projets_termines";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projets_termines";

	
	
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


	$tdatakpi_activites_terminees["projets_termines"] = $fdata;
		$tdatakpi_activites_terminees[".searchableFields"][] = "projets_termines";


$tables_data["kpi_activites_terminees"]=&$tdatakpi_activites_terminees;
$field_labels["kpi_activites_terminees"] = &$fieldLabelskpi_activites_terminees;
$fieldToolTips["kpi_activites_terminees"] = &$fieldToolTipskpi_activites_terminees;
$placeHolders["kpi_activites_terminees"] = &$placeHolderskpi_activites_terminees;
$page_titles["kpi_activites_terminees"] = &$pageTitleskpi_activites_terminees;


changeTextControlsToDate( "kpi_activites_terminees" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kpi_activites_terminees"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kpi_activites_terminees"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kpi_activites_terminees()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "projets_termines";
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
	"m_strName" => "projets_termines",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "kpi_activites_terminees"
));

$proto6["m_sql"] = "projets_termines";
$proto6["m_srcTableName"] = "kpi_activites_terminees";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vue_kpi_portefeuille";
$proto9["m_srcTableName"] = "kpi_activites_terminees";
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
$proto8["m_srcTableName"] = "kpi_activites_terminees";
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
$proto0["m_srcTableName"]="kpi_activites_terminees";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kpi_activites_terminees = createSqlQuery_kpi_activites_terminees();


	
		;

	

$tdatakpi_activites_terminees[".sqlquery"] = $queryData_kpi_activites_terminees;



$tdatakpi_activites_terminees[".hasEvents"] = false;

?>