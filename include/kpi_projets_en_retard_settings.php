<?php
$tdatakpi_projets_en_retard = array();
$tdatakpi_projets_en_retard[".searchableFields"] = array();
$tdatakpi_projets_en_retard[".ShortName"] = "kpi_projets_en_retard";
$tdatakpi_projets_en_retard[".OwnerID"] = "";
$tdatakpi_projets_en_retard[".OriginalTable"] = "vue_kpi_portefeuille";


$tdatakpi_projets_en_retard[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatakpi_projets_en_retard[".originalPagesByType"] = $tdatakpi_projets_en_retard[".pagesByType"];
$tdatakpi_projets_en_retard[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatakpi_projets_en_retard[".originalPages"] = $tdatakpi_projets_en_retard[".pages"];
$tdatakpi_projets_en_retard[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatakpi_projets_en_retard[".originalDefaultPages"] = $tdatakpi_projets_en_retard[".defaultPages"];

//	field labels
$fieldLabelskpi_projets_en_retard = array();
$fieldToolTipskpi_projets_en_retard = array();
$pageTitleskpi_projets_en_retard = array();
$placeHolderskpi_projets_en_retard = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelskpi_projets_en_retard["French"] = array();
	$fieldToolTipskpi_projets_en_retard["French"] = array();
	$placeHolderskpi_projets_en_retard["French"] = array();
	$pageTitleskpi_projets_en_retard["French"] = array();
	$fieldLabelskpi_projets_en_retard["French"]["projets_en_retard"] = "Projets En Retard";
	$fieldToolTipskpi_projets_en_retard["French"]["projets_en_retard"] = "";
	$placeHolderskpi_projets_en_retard["French"]["projets_en_retard"] = "";
	if (count($fieldToolTipskpi_projets_en_retard["French"]))
		$tdatakpi_projets_en_retard[".isUseToolTips"] = true;
}


	$tdatakpi_projets_en_retard[".NCSearch"] = true;



$tdatakpi_projets_en_retard[".shortTableName"] = "kpi_projets_en_retard";
$tdatakpi_projets_en_retard[".nSecOptions"] = 0;

$tdatakpi_projets_en_retard[".mainTableOwnerID"] = "";
$tdatakpi_projets_en_retard[".entityType"] = 1;
$tdatakpi_projets_en_retard[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatakpi_projets_en_retard[".strOriginalTableName"] = "vue_kpi_portefeuille";

	



$tdatakpi_projets_en_retard[".showAddInPopup"] = false;

$tdatakpi_projets_en_retard[".showEditInPopup"] = false;

$tdatakpi_projets_en_retard[".showViewInPopup"] = false;

$tdatakpi_projets_en_retard[".listAjax"] = false;
//	temporary
//$tdatakpi_projets_en_retard[".listAjax"] = false;

	$tdatakpi_projets_en_retard[".audit"] = false;

	$tdatakpi_projets_en_retard[".locking"] = false;


$pages = $tdatakpi_projets_en_retard[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakpi_projets_en_retard[".edit"] = true;
	$tdatakpi_projets_en_retard[".afterEditAction"] = 1;
	$tdatakpi_projets_en_retard[".closePopupAfterEdit"] = 1;
	$tdatakpi_projets_en_retard[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakpi_projets_en_retard[".add"] = true;
$tdatakpi_projets_en_retard[".afterAddAction"] = 1;
$tdatakpi_projets_en_retard[".closePopupAfterAdd"] = 1;
$tdatakpi_projets_en_retard[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakpi_projets_en_retard[".list"] = true;
}



$tdatakpi_projets_en_retard[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakpi_projets_en_retard[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakpi_projets_en_retard[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakpi_projets_en_retard[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakpi_projets_en_retard[".printFriendly"] = true;
}



$tdatakpi_projets_en_retard[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakpi_projets_en_retard[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakpi_projets_en_retard[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakpi_projets_en_retard[".isUseAjaxSuggest"] = true;





$tdatakpi_projets_en_retard[".ajaxCodeSnippetAdded"] = false;

$tdatakpi_projets_en_retard[".buttonsAdded"] = false;

$tdatakpi_projets_en_retard[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakpi_projets_en_retard[".isUseTimeForSearch"] = false;


$tdatakpi_projets_en_retard[".badgeColor"] = "008B8B";


$tdatakpi_projets_en_retard[".allSearchFields"] = array();
$tdatakpi_projets_en_retard[".filterFields"] = array();
$tdatakpi_projets_en_retard[".requiredSearchFields"] = array();

$tdatakpi_projets_en_retard[".googleLikeFields"] = array();
$tdatakpi_projets_en_retard[".googleLikeFields"][] = "projets_en_retard";



$tdatakpi_projets_en_retard[".tableType"] = "list";

$tdatakpi_projets_en_retard[".printerPageOrientation"] = 0;
$tdatakpi_projets_en_retard[".nPrinterPageScale"] = 100;

$tdatakpi_projets_en_retard[".nPrinterSplitRecords"] = 40;

$tdatakpi_projets_en_retard[".geocodingEnabled"] = false;










$tdatakpi_projets_en_retard[".pageSize"] = 20;

$tdatakpi_projets_en_retard[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakpi_projets_en_retard[".strOrderBy"] = $tstrOrderBy;

$tdatakpi_projets_en_retard[".orderindexes"] = array();


$tdatakpi_projets_en_retard[".sqlHead"] = "SELECT projets_en_retard";
$tdatakpi_projets_en_retard[".sqlFrom"] = "FROM vue_kpi_portefeuille";
$tdatakpi_projets_en_retard[".sqlWhereExpr"] = "";
$tdatakpi_projets_en_retard[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakpi_projets_en_retard[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakpi_projets_en_retard[".arrGroupsPerPage"] = $arrGPP;

$tdatakpi_projets_en_retard[".highlightSearchResults"] = true;

$tableKeyskpi_projets_en_retard = array();
$tdatakpi_projets_en_retard[".Keys"] = $tableKeyskpi_projets_en_retard;


$tdatakpi_projets_en_retard[".hideMobileList"] = array();




//	projets_en_retard
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projets_en_retard";
	$fdata["GoodName"] = "projets_en_retard";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("kpi_projets_en_retard","projets_en_retard");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "projets_en_retard";

		$fdata["sourceSingle"] = "projets_en_retard";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projets_en_retard";

	
	
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


	$tdatakpi_projets_en_retard["projets_en_retard"] = $fdata;
		$tdatakpi_projets_en_retard[".searchableFields"][] = "projets_en_retard";


$tables_data["kpi_projets_en_retard"]=&$tdatakpi_projets_en_retard;
$field_labels["kpi_projets_en_retard"] = &$fieldLabelskpi_projets_en_retard;
$fieldToolTips["kpi_projets_en_retard"] = &$fieldToolTipskpi_projets_en_retard;
$placeHolders["kpi_projets_en_retard"] = &$placeHolderskpi_projets_en_retard;
$page_titles["kpi_projets_en_retard"] = &$pageTitleskpi_projets_en_retard;


changeTextControlsToDate( "kpi_projets_en_retard" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kpi_projets_en_retard"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kpi_projets_en_retard"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kpi_projets_en_retard()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "projets_en_retard";
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
	"m_strName" => "projets_en_retard",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "kpi_projets_en_retard"
));

$proto6["m_sql"] = "projets_en_retard";
$proto6["m_srcTableName"] = "kpi_projets_en_retard";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vue_kpi_portefeuille";
$proto9["m_srcTableName"] = "kpi_projets_en_retard";
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
$proto8["m_srcTableName"] = "kpi_projets_en_retard";
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
$proto0["m_srcTableName"]="kpi_projets_en_retard";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kpi_projets_en_retard = createSqlQuery_kpi_projets_en_retard();


	
		;

	

$tdatakpi_projets_en_retard[".sqlquery"] = $queryData_kpi_projets_en_retard;



$tdatakpi_projets_en_retard[".hasEvents"] = false;

?>