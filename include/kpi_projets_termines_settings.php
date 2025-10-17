<?php
$tdatakpi_projets_termines = array();
$tdatakpi_projets_termines[".searchableFields"] = array();
$tdatakpi_projets_termines[".ShortName"] = "kpi_projets_termines";
$tdatakpi_projets_termines[".OwnerID"] = "";
$tdatakpi_projets_termines[".OriginalTable"] = "vue_kpi_portefeuille";


$tdatakpi_projets_termines[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatakpi_projets_termines[".originalPagesByType"] = $tdatakpi_projets_termines[".pagesByType"];
$tdatakpi_projets_termines[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatakpi_projets_termines[".originalPages"] = $tdatakpi_projets_termines[".pages"];
$tdatakpi_projets_termines[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatakpi_projets_termines[".originalDefaultPages"] = $tdatakpi_projets_termines[".defaultPages"];

//	field labels
$fieldLabelskpi_projets_termines = array();
$fieldToolTipskpi_projets_termines = array();
$pageTitleskpi_projets_termines = array();
$placeHolderskpi_projets_termines = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelskpi_projets_termines["French"] = array();
	$fieldToolTipskpi_projets_termines["French"] = array();
	$placeHolderskpi_projets_termines["French"] = array();
	$pageTitleskpi_projets_termines["French"] = array();
	$fieldLabelskpi_projets_termines["French"]["activites_en_cours"] = "Activites En Cours";
	$fieldToolTipskpi_projets_termines["French"]["activites_en_cours"] = "";
	$placeHolderskpi_projets_termines["French"]["activites_en_cours"] = "";
	if (count($fieldToolTipskpi_projets_termines["French"]))
		$tdatakpi_projets_termines[".isUseToolTips"] = true;
}


	$tdatakpi_projets_termines[".NCSearch"] = true;



$tdatakpi_projets_termines[".shortTableName"] = "kpi_projets_termines";
$tdatakpi_projets_termines[".nSecOptions"] = 0;

$tdatakpi_projets_termines[".mainTableOwnerID"] = "";
$tdatakpi_projets_termines[".entityType"] = 1;
$tdatakpi_projets_termines[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatakpi_projets_termines[".strOriginalTableName"] = "vue_kpi_portefeuille";

	



$tdatakpi_projets_termines[".showAddInPopup"] = false;

$tdatakpi_projets_termines[".showEditInPopup"] = false;

$tdatakpi_projets_termines[".showViewInPopup"] = false;

$tdatakpi_projets_termines[".listAjax"] = false;
//	temporary
//$tdatakpi_projets_termines[".listAjax"] = false;

	$tdatakpi_projets_termines[".audit"] = false;

	$tdatakpi_projets_termines[".locking"] = false;


$pages = $tdatakpi_projets_termines[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakpi_projets_termines[".edit"] = true;
	$tdatakpi_projets_termines[".afterEditAction"] = 1;
	$tdatakpi_projets_termines[".closePopupAfterEdit"] = 1;
	$tdatakpi_projets_termines[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakpi_projets_termines[".add"] = true;
$tdatakpi_projets_termines[".afterAddAction"] = 1;
$tdatakpi_projets_termines[".closePopupAfterAdd"] = 1;
$tdatakpi_projets_termines[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakpi_projets_termines[".list"] = true;
}



$tdatakpi_projets_termines[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakpi_projets_termines[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakpi_projets_termines[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakpi_projets_termines[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakpi_projets_termines[".printFriendly"] = true;
}



$tdatakpi_projets_termines[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakpi_projets_termines[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakpi_projets_termines[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakpi_projets_termines[".isUseAjaxSuggest"] = true;





$tdatakpi_projets_termines[".ajaxCodeSnippetAdded"] = false;

$tdatakpi_projets_termines[".buttonsAdded"] = false;

$tdatakpi_projets_termines[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakpi_projets_termines[".isUseTimeForSearch"] = false;


$tdatakpi_projets_termines[".badgeColor"] = "CD853F";


$tdatakpi_projets_termines[".allSearchFields"] = array();
$tdatakpi_projets_termines[".filterFields"] = array();
$tdatakpi_projets_termines[".requiredSearchFields"] = array();

$tdatakpi_projets_termines[".googleLikeFields"] = array();
$tdatakpi_projets_termines[".googleLikeFields"][] = "activites_en_cours";



$tdatakpi_projets_termines[".tableType"] = "list";

$tdatakpi_projets_termines[".printerPageOrientation"] = 0;
$tdatakpi_projets_termines[".nPrinterPageScale"] = 100;

$tdatakpi_projets_termines[".nPrinterSplitRecords"] = 40;

$tdatakpi_projets_termines[".geocodingEnabled"] = false;










$tdatakpi_projets_termines[".pageSize"] = 20;

$tdatakpi_projets_termines[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakpi_projets_termines[".strOrderBy"] = $tstrOrderBy;

$tdatakpi_projets_termines[".orderindexes"] = array();


$tdatakpi_projets_termines[".sqlHead"] = "SELECT activites_en_cours";
$tdatakpi_projets_termines[".sqlFrom"] = "FROM vue_kpi_portefeuille";
$tdatakpi_projets_termines[".sqlWhereExpr"] = "";
$tdatakpi_projets_termines[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakpi_projets_termines[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakpi_projets_termines[".arrGroupsPerPage"] = $arrGPP;

$tdatakpi_projets_termines[".highlightSearchResults"] = true;

$tableKeyskpi_projets_termines = array();
$tdatakpi_projets_termines[".Keys"] = $tableKeyskpi_projets_termines;


$tdatakpi_projets_termines[".hideMobileList"] = array();




//	activites_en_cours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "activites_en_cours";
	$fdata["GoodName"] = "activites_en_cours";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("kpi_projets_termines","activites_en_cours");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "activites_en_cours";

		$fdata["sourceSingle"] = "activites_en_cours";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activites_en_cours";

	
	
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


	$tdatakpi_projets_termines["activites_en_cours"] = $fdata;
		$tdatakpi_projets_termines[".searchableFields"][] = "activites_en_cours";


$tables_data["kpi_projets_termines"]=&$tdatakpi_projets_termines;
$field_labels["kpi_projets_termines"] = &$fieldLabelskpi_projets_termines;
$fieldToolTips["kpi_projets_termines"] = &$fieldToolTipskpi_projets_termines;
$placeHolders["kpi_projets_termines"] = &$placeHolderskpi_projets_termines;
$page_titles["kpi_projets_termines"] = &$pageTitleskpi_projets_termines;


changeTextControlsToDate( "kpi_projets_termines" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kpi_projets_termines"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kpi_projets_termines"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kpi_projets_termines()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "activites_en_cours";
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
	"m_strName" => "activites_en_cours",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "kpi_projets_termines"
));

$proto6["m_sql"] = "activites_en_cours";
$proto6["m_srcTableName"] = "kpi_projets_termines";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vue_kpi_portefeuille";
$proto9["m_srcTableName"] = "kpi_projets_termines";
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
$proto8["m_srcTableName"] = "kpi_projets_termines";
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
$proto0["m_srcTableName"]="kpi_projets_termines";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kpi_projets_termines = createSqlQuery_kpi_projets_termines();


	
		;

	

$tdatakpi_projets_termines[".sqlquery"] = $queryData_kpi_projets_termines;



$tdatakpi_projets_termines[".hasEvents"] = false;

?>