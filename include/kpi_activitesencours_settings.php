<?php
$tdatakpi_activitesencours = array();
$tdatakpi_activitesencours[".searchableFields"] = array();
$tdatakpi_activitesencours[".ShortName"] = "kpi_activitesencours";
$tdatakpi_activitesencours[".OwnerID"] = "";
$tdatakpi_activitesencours[".OriginalTable"] = "vue_kpi_portefeuille";


$tdatakpi_activitesencours[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatakpi_activitesencours[".originalPagesByType"] = $tdatakpi_activitesencours[".pagesByType"];
$tdatakpi_activitesencours[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatakpi_activitesencours[".originalPages"] = $tdatakpi_activitesencours[".pages"];
$tdatakpi_activitesencours[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatakpi_activitesencours[".originalDefaultPages"] = $tdatakpi_activitesencours[".defaultPages"];

//	field labels
$fieldLabelskpi_activitesencours = array();
$fieldToolTipskpi_activitesencours = array();
$pageTitleskpi_activitesencours = array();
$placeHolderskpi_activitesencours = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelskpi_activitesencours["French"] = array();
	$fieldToolTipskpi_activitesencours["French"] = array();
	$placeHolderskpi_activitesencours["French"] = array();
	$pageTitleskpi_activitesencours["French"] = array();
	$fieldLabelskpi_activitesencours["French"]["activites_en_cours"] = "Activites En Cours";
	$fieldToolTipskpi_activitesencours["French"]["activites_en_cours"] = "";
	$placeHolderskpi_activitesencours["French"]["activites_en_cours"] = "";
	if (count($fieldToolTipskpi_activitesencours["French"]))
		$tdatakpi_activitesencours[".isUseToolTips"] = true;
}


	$tdatakpi_activitesencours[".NCSearch"] = true;



$tdatakpi_activitesencours[".shortTableName"] = "kpi_activitesencours";
$tdatakpi_activitesencours[".nSecOptions"] = 0;

$tdatakpi_activitesencours[".mainTableOwnerID"] = "";
$tdatakpi_activitesencours[".entityType"] = 1;
$tdatakpi_activitesencours[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatakpi_activitesencours[".strOriginalTableName"] = "vue_kpi_portefeuille";

	



$tdatakpi_activitesencours[".showAddInPopup"] = false;

$tdatakpi_activitesencours[".showEditInPopup"] = false;

$tdatakpi_activitesencours[".showViewInPopup"] = false;

$tdatakpi_activitesencours[".listAjax"] = false;
//	temporary
//$tdatakpi_activitesencours[".listAjax"] = false;

	$tdatakpi_activitesencours[".audit"] = false;

	$tdatakpi_activitesencours[".locking"] = false;


$pages = $tdatakpi_activitesencours[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakpi_activitesencours[".edit"] = true;
	$tdatakpi_activitesencours[".afterEditAction"] = 1;
	$tdatakpi_activitesencours[".closePopupAfterEdit"] = 1;
	$tdatakpi_activitesencours[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakpi_activitesencours[".add"] = true;
$tdatakpi_activitesencours[".afterAddAction"] = 1;
$tdatakpi_activitesencours[".closePopupAfterAdd"] = 1;
$tdatakpi_activitesencours[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakpi_activitesencours[".list"] = true;
}



$tdatakpi_activitesencours[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakpi_activitesencours[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakpi_activitesencours[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakpi_activitesencours[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakpi_activitesencours[".printFriendly"] = true;
}



$tdatakpi_activitesencours[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakpi_activitesencours[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakpi_activitesencours[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakpi_activitesencours[".isUseAjaxSuggest"] = true;





$tdatakpi_activitesencours[".ajaxCodeSnippetAdded"] = false;

$tdatakpi_activitesencours[".buttonsAdded"] = false;

$tdatakpi_activitesencours[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakpi_activitesencours[".isUseTimeForSearch"] = false;


$tdatakpi_activitesencours[".badgeColor"] = "D2691E";


$tdatakpi_activitesencours[".allSearchFields"] = array();
$tdatakpi_activitesencours[".filterFields"] = array();
$tdatakpi_activitesencours[".requiredSearchFields"] = array();

$tdatakpi_activitesencours[".googleLikeFields"] = array();
$tdatakpi_activitesencours[".googleLikeFields"][] = "activites_en_cours";



$tdatakpi_activitesencours[".tableType"] = "list";

$tdatakpi_activitesencours[".printerPageOrientation"] = 0;
$tdatakpi_activitesencours[".nPrinterPageScale"] = 100;

$tdatakpi_activitesencours[".nPrinterSplitRecords"] = 40;

$tdatakpi_activitesencours[".geocodingEnabled"] = false;










$tdatakpi_activitesencours[".pageSize"] = 20;

$tdatakpi_activitesencours[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakpi_activitesencours[".strOrderBy"] = $tstrOrderBy;

$tdatakpi_activitesencours[".orderindexes"] = array();


$tdatakpi_activitesencours[".sqlHead"] = "SELECT activites_en_cours";
$tdatakpi_activitesencours[".sqlFrom"] = "FROM vue_kpi_portefeuille";
$tdatakpi_activitesencours[".sqlWhereExpr"] = "";
$tdatakpi_activitesencours[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakpi_activitesencours[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakpi_activitesencours[".arrGroupsPerPage"] = $arrGPP;

$tdatakpi_activitesencours[".highlightSearchResults"] = true;

$tableKeyskpi_activitesencours = array();
$tdatakpi_activitesencours[".Keys"] = $tableKeyskpi_activitesencours;


$tdatakpi_activitesencours[".hideMobileList"] = array();




//	activites_en_cours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "activites_en_cours";
	$fdata["GoodName"] = "activites_en_cours";
	$fdata["ownerTable"] = "vue_kpi_portefeuille";
	$fdata["Label"] = GetFieldLabel("kpi_ActivitesEnCours","activites_en_cours");
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


	$tdatakpi_activitesencours["activites_en_cours"] = $fdata;
		$tdatakpi_activitesencours[".searchableFields"][] = "activites_en_cours";


$tables_data["kpi_ActivitesEnCours"]=&$tdatakpi_activitesencours;
$field_labels["kpi_ActivitesEnCours"] = &$fieldLabelskpi_activitesencours;
$fieldToolTips["kpi_ActivitesEnCours"] = &$fieldToolTipskpi_activitesencours;
$placeHolders["kpi_ActivitesEnCours"] = &$placeHolderskpi_activitesencours;
$page_titles["kpi_ActivitesEnCours"] = &$pageTitleskpi_activitesencours;


changeTextControlsToDate( "kpi_ActivitesEnCours" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kpi_ActivitesEnCours"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kpi_ActivitesEnCours"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kpi_activitesencours()
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
	"m_srcTableName" => "kpi_ActivitesEnCours"
));

$proto6["m_sql"] = "activites_en_cours";
$proto6["m_srcTableName"] = "kpi_ActivitesEnCours";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vue_kpi_portefeuille";
$proto9["m_srcTableName"] = "kpi_ActivitesEnCours";
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
$proto8["m_srcTableName"] = "kpi_ActivitesEnCours";
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
$proto0["m_srcTableName"]="kpi_ActivitesEnCours";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kpi_activitesencours = createSqlQuery_kpi_activitesencours();


	
		;

	

$tdatakpi_activitesencours[".sqlquery"] = $queryData_kpi_activitesencours;



$tdatakpi_activitesencours[".hasEvents"] = false;

?>