<?php
$tdatakpi_projetsencours = array();
$tdatakpi_projetsencours[".searchableFields"] = array();
$tdatakpi_projetsencours[".ShortName"] = "kpi_projetsencours";
$tdatakpi_projetsencours[".OwnerID"] = "";
$tdatakpi_projetsencours[".OriginalTable"] = "vue_kpi_portefeuille";


$tdatakpi_projetsencours[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatakpi_projetsencours[".originalPagesByType"] = $tdatakpi_projetsencours[".pagesByType"];
$tdatakpi_projetsencours[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatakpi_projetsencours[".originalPages"] = $tdatakpi_projetsencours[".pages"];
$tdatakpi_projetsencours[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatakpi_projetsencours[".originalDefaultPages"] = $tdatakpi_projetsencours[".defaultPages"];

//	field labels
$fieldLabelskpi_projetsencours = array();
$fieldToolTipskpi_projetsencours = array();
$pageTitleskpi_projetsencours = array();
$placeHolderskpi_projetsencours = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelskpi_projetsencours["French"] = array();
	$fieldToolTipskpi_projetsencours["French"] = array();
	$placeHolderskpi_projetsencours["French"] = array();
	$pageTitleskpi_projetsencours["French"] = array();
	$fieldLabelskpi_projetsencours["French"]["projets_en_cours"] = "";
	$fieldToolTipskpi_projetsencours["French"]["projets_en_cours"] = "";
	$placeHolderskpi_projetsencours["French"]["projets_en_cours"] = "";
	if (count($fieldToolTipskpi_projetsencours["French"]))
		$tdatakpi_projetsencours[".isUseToolTips"] = true;
}


	$tdatakpi_projetsencours[".NCSearch"] = true;



$tdatakpi_projetsencours[".shortTableName"] = "kpi_projetsencours";
$tdatakpi_projetsencours[".nSecOptions"] = 0;

$tdatakpi_projetsencours[".mainTableOwnerID"] = "";
$tdatakpi_projetsencours[".entityType"] = 1;
$tdatakpi_projetsencours[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatakpi_projetsencours[".strOriginalTableName"] = "vue_kpi_portefeuille";

	



$tdatakpi_projetsencours[".showAddInPopup"] = false;

$tdatakpi_projetsencours[".showEditInPopup"] = false;

$tdatakpi_projetsencours[".showViewInPopup"] = false;

$tdatakpi_projetsencours[".listAjax"] = false;
//	temporary
//$tdatakpi_projetsencours[".listAjax"] = false;

	$tdatakpi_projetsencours[".audit"] = false;

	$tdatakpi_projetsencours[".locking"] = false;


$pages = $tdatakpi_projetsencours[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakpi_projetsencours[".edit"] = true;
	$tdatakpi_projetsencours[".afterEditAction"] = 1;
	$tdatakpi_projetsencours[".closePopupAfterEdit"] = 1;
	$tdatakpi_projetsencours[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakpi_projetsencours[".add"] = true;
$tdatakpi_projetsencours[".afterAddAction"] = 1;
$tdatakpi_projetsencours[".closePopupAfterAdd"] = 1;
$tdatakpi_projetsencours[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakpi_projetsencours[".list"] = true;
}



$tdatakpi_projetsencours[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakpi_projetsencours[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakpi_projetsencours[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakpi_projetsencours[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakpi_projetsencours[".printFriendly"] = true;
}



$tdatakpi_projetsencours[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakpi_projetsencours[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakpi_projetsencours[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakpi_projetsencours[".isUseAjaxSuggest"] = true;





$tdatakpi_projetsencours[".ajaxCodeSnippetAdded"] = false;

$tdatakpi_projetsencours[".buttonsAdded"] = false;

$tdatakpi_projetsencours[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakpi_projetsencours[".isUseTimeForSearch"] = false;


$tdatakpi_projetsencours[".badgeColor"] = "E67349";


$tdatakpi_projetsencours[".allSearchFields"] = array();
$tdatakpi_projetsencours[".filterFields"] = array();
$tdatakpi_projetsencours[".requiredSearchFields"] = array();

$tdatakpi_projetsencours[".googleLikeFields"] = array();
$tdatakpi_projetsencours[".googleLikeFields"][] = "projets_en_cours";



$tdatakpi_projetsencours[".tableType"] = "list";

$tdatakpi_projetsencours[".printerPageOrientation"] = 0;
$tdatakpi_projetsencours[".nPrinterPageScale"] = 100;

$tdatakpi_projetsencours[".nPrinterSplitRecords"] = 40;

$tdatakpi_projetsencours[".geocodingEnabled"] = false;










$tdatakpi_projetsencours[".pageSize"] = 20;

$tdatakpi_projetsencours[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakpi_projetsencours[".strOrderBy"] = $tstrOrderBy;

$tdatakpi_projetsencours[".orderindexes"] = array();


$tdatakpi_projetsencours[".sqlHead"] = "SELECT projets_en_cours";
$tdatakpi_projetsencours[".sqlFrom"] = "FROM vue_kpi_portefeuille";
$tdatakpi_projetsencours[".sqlWhereExpr"] = "";
$tdatakpi_projetsencours[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakpi_projetsencours[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakpi_projetsencours[".arrGroupsPerPage"] = $arrGPP;

$tdatakpi_projetsencours[".highlightSearchResults"] = true;

$tableKeyskpi_projetsencours = array();
$tdatakpi_projetsencours[".Keys"] = $tableKeyskpi_projetsencours;


$tdatakpi_projetsencours[".hideMobileList"] = array();




//	projets_en_cours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "projets_en_cours";
	$fdata["GoodName"] = "projets_en_cours";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("kpi_ProjetsEnCours","projets_en_cours");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "projets_en_cours";

		$fdata["sourceSingle"] = "projets_en_cours";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "projets_en_cours";

	
	
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


	$tdatakpi_projetsencours["projets_en_cours"] = $fdata;
		$tdatakpi_projetsencours[".searchableFields"][] = "projets_en_cours";


$tables_data["kpi_ProjetsEnCours"]=&$tdatakpi_projetsencours;
$field_labels["kpi_ProjetsEnCours"] = &$fieldLabelskpi_projetsencours;
$fieldToolTips["kpi_ProjetsEnCours"] = &$fieldToolTipskpi_projetsencours;
$placeHolders["kpi_ProjetsEnCours"] = &$placeHolderskpi_projetsencours;
$page_titles["kpi_ProjetsEnCours"] = &$pageTitleskpi_projetsencours;


changeTextControlsToDate( "kpi_ProjetsEnCours" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kpi_ProjetsEnCours"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kpi_ProjetsEnCours"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kpi_projetsencours()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "projets_en_cours";
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
	"m_strName" => "projets_en_cours",
	"m_strTable" => "vue_kpi_portefeuille",
	"m_srcTableName" => "kpi_ProjetsEnCours"
));

$proto6["m_sql"] = "projets_en_cours";
$proto6["m_srcTableName"] = "kpi_ProjetsEnCours";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vue_kpi_portefeuille";
$proto9["m_srcTableName"] = "kpi_ProjetsEnCours";
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
$proto8["m_srcTableName"] = "kpi_ProjetsEnCours";
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
$proto0["m_srcTableName"]="kpi_ProjetsEnCours";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kpi_projetsencours = createSqlQuery_kpi_projetsencours();


	
		;

	

$tdatakpi_projetsencours[".sqlquery"] = $queryData_kpi_projetsencours;



$tdatakpi_projetsencours[".hasEvents"] = false;

?>