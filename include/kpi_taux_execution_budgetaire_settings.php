<?php
$tdatakpi_taux_execution_budgetaire = array();
$tdatakpi_taux_execution_budgetaire[".searchableFields"] = array();
$tdatakpi_taux_execution_budgetaire[".ShortName"] = "kpi_taux_execution_budgetaire";
$tdatakpi_taux_execution_budgetaire[".OwnerID"] = "";
$tdatakpi_taux_execution_budgetaire[".OriginalTable"] = "vue_kpi_portefeuille";


$tdatakpi_taux_execution_budgetaire[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatakpi_taux_execution_budgetaire[".originalPagesByType"] = $tdatakpi_taux_execution_budgetaire[".pagesByType"];
$tdatakpi_taux_execution_budgetaire[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatakpi_taux_execution_budgetaire[".originalPages"] = $tdatakpi_taux_execution_budgetaire[".pages"];
$tdatakpi_taux_execution_budgetaire[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatakpi_taux_execution_budgetaire[".originalDefaultPages"] = $tdatakpi_taux_execution_budgetaire[".defaultPages"];

//	field labels
$fieldLabelskpi_taux_execution_budgetaire = array();
$fieldToolTipskpi_taux_execution_budgetaire = array();
$pageTitleskpi_taux_execution_budgetaire = array();
$placeHolderskpi_taux_execution_budgetaire = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelskpi_taux_execution_budgetaire["French"] = array();
	$fieldToolTipskpi_taux_execution_budgetaire["French"] = array();
	$placeHolderskpi_taux_execution_budgetaire["French"] = array();
	$pageTitleskpi_taux_execution_budgetaire["French"] = array();
	$fieldLabelskpi_taux_execution_budgetaire["French"]["taux_execution_budgetaire"] = "Taux Execution Budgetaire";
	$fieldToolTipskpi_taux_execution_budgetaire["French"]["taux_execution_budgetaire"] = "";
	$placeHolderskpi_taux_execution_budgetaire["French"]["taux_execution_budgetaire"] = "";
	if (count($fieldToolTipskpi_taux_execution_budgetaire["French"]))
		$tdatakpi_taux_execution_budgetaire[".isUseToolTips"] = true;
}


	$tdatakpi_taux_execution_budgetaire[".NCSearch"] = true;



$tdatakpi_taux_execution_budgetaire[".shortTableName"] = "kpi_taux_execution_budgetaire";
$tdatakpi_taux_execution_budgetaire[".nSecOptions"] = 0;

$tdatakpi_taux_execution_budgetaire[".mainTableOwnerID"] = "";
$tdatakpi_taux_execution_budgetaire[".entityType"] = 1;
$tdatakpi_taux_execution_budgetaire[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatakpi_taux_execution_budgetaire[".strOriginalTableName"] = "vue_kpi_portefeuille";

	



$tdatakpi_taux_execution_budgetaire[".showAddInPopup"] = false;

$tdatakpi_taux_execution_budgetaire[".showEditInPopup"] = false;

$tdatakpi_taux_execution_budgetaire[".showViewInPopup"] = false;

$tdatakpi_taux_execution_budgetaire[".listAjax"] = false;
//	temporary
//$tdatakpi_taux_execution_budgetaire[".listAjax"] = false;

	$tdatakpi_taux_execution_budgetaire[".audit"] = false;

	$tdatakpi_taux_execution_budgetaire[".locking"] = false;


$pages = $tdatakpi_taux_execution_budgetaire[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakpi_taux_execution_budgetaire[".edit"] = true;
	$tdatakpi_taux_execution_budgetaire[".afterEditAction"] = 1;
	$tdatakpi_taux_execution_budgetaire[".closePopupAfterEdit"] = 1;
	$tdatakpi_taux_execution_budgetaire[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakpi_taux_execution_budgetaire[".add"] = true;
$tdatakpi_taux_execution_budgetaire[".afterAddAction"] = 1;
$tdatakpi_taux_execution_budgetaire[".closePopupAfterAdd"] = 1;
$tdatakpi_taux_execution_budgetaire[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakpi_taux_execution_budgetaire[".list"] = true;
}



$tdatakpi_taux_execution_budgetaire[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakpi_taux_execution_budgetaire[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakpi_taux_execution_budgetaire[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakpi_taux_execution_budgetaire[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakpi_taux_execution_budgetaire[".printFriendly"] = true;
}



$tdatakpi_taux_execution_budgetaire[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakpi_taux_execution_budgetaire[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakpi_taux_execution_budgetaire[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakpi_taux_execution_budgetaire[".isUseAjaxSuggest"] = true;





$tdatakpi_taux_execution_budgetaire[".ajaxCodeSnippetAdded"] = false;

$tdatakpi_taux_execution_budgetaire[".buttonsAdded"] = false;

$tdatakpi_taux_execution_budgetaire[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakpi_taux_execution_budgetaire[".isUseTimeForSearch"] = false;


$tdatakpi_taux_execution_budgetaire[".badgeColor"] = "CD853F";


$tdatakpi_taux_execution_budgetaire[".allSearchFields"] = array();
$tdatakpi_taux_execution_budgetaire[".filterFields"] = array();
$tdatakpi_taux_execution_budgetaire[".requiredSearchFields"] = array();

$tdatakpi_taux_execution_budgetaire[".googleLikeFields"] = array();
$tdatakpi_taux_execution_budgetaire[".googleLikeFields"][] = "taux_execution_budgetaire";



$tdatakpi_taux_execution_budgetaire[".tableType"] = "list";

$tdatakpi_taux_execution_budgetaire[".printerPageOrientation"] = 0;
$tdatakpi_taux_execution_budgetaire[".nPrinterPageScale"] = 100;

$tdatakpi_taux_execution_budgetaire[".nPrinterSplitRecords"] = 40;

$tdatakpi_taux_execution_budgetaire[".geocodingEnabled"] = false;










$tdatakpi_taux_execution_budgetaire[".pageSize"] = 20;

$tdatakpi_taux_execution_budgetaire[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakpi_taux_execution_budgetaire[".strOrderBy"] = $tstrOrderBy;

$tdatakpi_taux_execution_budgetaire[".orderindexes"] = array();


$tdatakpi_taux_execution_budgetaire[".sqlHead"] = "SELECT taux_execution_budgetaire";
$tdatakpi_taux_execution_budgetaire[".sqlFrom"] = "FROM vue_kpi_portefeuille";
$tdatakpi_taux_execution_budgetaire[".sqlWhereExpr"] = "";
$tdatakpi_taux_execution_budgetaire[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakpi_taux_execution_budgetaire[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakpi_taux_execution_budgetaire[".arrGroupsPerPage"] = $arrGPP;

$tdatakpi_taux_execution_budgetaire[".highlightSearchResults"] = true;

$tableKeyskpi_taux_execution_budgetaire = array();
$tdatakpi_taux_execution_budgetaire[".Keys"] = $tableKeyskpi_taux_execution_budgetaire;


$tdatakpi_taux_execution_budgetaire[".hideMobileList"] = array();




//	taux_execution_budgetaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "taux_execution_budgetaire";
	$fdata["GoodName"] = "taux_execution_budgetaire";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("kpi_taux_execution_budgetaire","taux_execution_budgetaire");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "taux_execution_budgetaire";

		$fdata["sourceSingle"] = "taux_execution_budgetaire";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "taux_execution_budgetaire";

	
	
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


	$tdatakpi_taux_execution_budgetaire["taux_execution_budgetaire"] = $fdata;
		$tdatakpi_taux_execution_budgetaire[".searchableFields"][] = "taux_execution_budgetaire";


$tables_data["kpi_taux_execution_budgetaire"]=&$tdatakpi_taux_execution_budgetaire;
$field_labels["kpi_taux_execution_budgetaire"] = &$fieldLabelskpi_taux_execution_budgetaire;
$fieldToolTips["kpi_taux_execution_budgetaire"] = &$fieldToolTipskpi_taux_execution_budgetaire;
$placeHolders["kpi_taux_execution_budgetaire"] = &$placeHolderskpi_taux_execution_budgetaire;
$page_titles["kpi_taux_execution_budgetaire"] = &$pageTitleskpi_taux_execution_budgetaire;


changeTextControlsToDate( "kpi_taux_execution_budgetaire" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kpi_taux_execution_budgetaire"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kpi_taux_execution_budgetaire"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kpi_taux_execution_budgetaire()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "taux_execution_budgetaire";
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
	"m_strName" => "taux_execution_budgetaire",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "kpi_taux_execution_budgetaire"
));

$proto6["m_sql"] = "taux_execution_budgetaire";
$proto6["m_srcTableName"] = "kpi_taux_execution_budgetaire";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vue_kpi_portefeuille";
$proto9["m_srcTableName"] = "kpi_taux_execution_budgetaire";
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
$proto8["m_srcTableName"] = "kpi_taux_execution_budgetaire";
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
$proto0["m_srcTableName"]="kpi_taux_execution_budgetaire";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kpi_taux_execution_budgetaire = createSqlQuery_kpi_taux_execution_budgetaire();


	
		;

	

$tdatakpi_taux_execution_budgetaire[".sqlquery"] = $queryData_kpi_taux_execution_budgetaire;



$tdatakpi_taux_execution_budgetaire[".hasEvents"] = false;

?>