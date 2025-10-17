<?php
$tdatavue_repartition_projets = array();
$tdatavue_repartition_projets[".searchableFields"] = array();
$tdatavue_repartition_projets[".ShortName"] = "vue_repartition_projets";
$tdatavue_repartition_projets[".OwnerID"] = "";
$tdatavue_repartition_projets[".OriginalTable"] = "vue_repartition_projets";


$tdatavue_repartition_projets[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavue_repartition_projets[".originalPagesByType"] = $tdatavue_repartition_projets[".pagesByType"];
$tdatavue_repartition_projets[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavue_repartition_projets[".originalPages"] = $tdatavue_repartition_projets[".pages"];
$tdatavue_repartition_projets[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavue_repartition_projets[".originalDefaultPages"] = $tdatavue_repartition_projets[".defaultPages"];

//	field labels
$fieldLabelsvue_repartition_projets = array();
$fieldToolTipsvue_repartition_projets = array();
$pageTitlesvue_repartition_projets = array();
$placeHoldersvue_repartition_projets = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvue_repartition_projets["French"] = array();
	$fieldToolTipsvue_repartition_projets["French"] = array();
	$placeHoldersvue_repartition_projets["French"] = array();
	$pageTitlesvue_repartition_projets["French"] = array();
	$fieldLabelsvue_repartition_projets["French"]["budget_moyen"] = "Budget Moyen";
	$fieldToolTipsvue_repartition_projets["French"]["budget_moyen"] = "";
	$placeHoldersvue_repartition_projets["French"]["budget_moyen"] = "";
	$fieldLabelsvue_repartition_projets["French"]["categorie"] = "Categorie";
	$fieldToolTipsvue_repartition_projets["French"]["categorie"] = "";
	$placeHoldersvue_repartition_projets["French"]["categorie"] = "";
	$fieldLabelsvue_repartition_projets["French"]["nb_projets"] = "Nb Projets";
	$fieldToolTipsvue_repartition_projets["French"]["nb_projets"] = "";
	$placeHoldersvue_repartition_projets["French"]["nb_projets"] = "";
	$fieldLabelsvue_repartition_projets["French"]["statut"] = "Statut";
	$fieldToolTipsvue_repartition_projets["French"]["statut"] = "";
	$placeHoldersvue_repartition_projets["French"]["statut"] = "";
	if (count($fieldToolTipsvue_repartition_projets["French"]))
		$tdatavue_repartition_projets[".isUseToolTips"] = true;
}


	$tdatavue_repartition_projets[".NCSearch"] = true;



$tdatavue_repartition_projets[".shortTableName"] = "vue_repartition_projets";
$tdatavue_repartition_projets[".nSecOptions"] = 0;

$tdatavue_repartition_projets[".mainTableOwnerID"] = "";
$tdatavue_repartition_projets[".entityType"] = 0;
$tdatavue_repartition_projets[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatavue_repartition_projets[".strOriginalTableName"] = "vue_repartition_projets";

	



$tdatavue_repartition_projets[".showAddInPopup"] = false;

$tdatavue_repartition_projets[".showEditInPopup"] = false;

$tdatavue_repartition_projets[".showViewInPopup"] = false;

$tdatavue_repartition_projets[".listAjax"] = false;
//	temporary
//$tdatavue_repartition_projets[".listAjax"] = false;

	$tdatavue_repartition_projets[".audit"] = false;

	$tdatavue_repartition_projets[".locking"] = false;


$pages = $tdatavue_repartition_projets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavue_repartition_projets[".edit"] = true;
	$tdatavue_repartition_projets[".afterEditAction"] = 1;
	$tdatavue_repartition_projets[".closePopupAfterEdit"] = 1;
	$tdatavue_repartition_projets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavue_repartition_projets[".add"] = true;
$tdatavue_repartition_projets[".afterAddAction"] = 1;
$tdatavue_repartition_projets[".closePopupAfterAdd"] = 1;
$tdatavue_repartition_projets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavue_repartition_projets[".list"] = true;
}



$tdatavue_repartition_projets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavue_repartition_projets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavue_repartition_projets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavue_repartition_projets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavue_repartition_projets[".printFriendly"] = true;
}



$tdatavue_repartition_projets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavue_repartition_projets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavue_repartition_projets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavue_repartition_projets[".isUseAjaxSuggest"] = true;





$tdatavue_repartition_projets[".ajaxCodeSnippetAdded"] = false;

$tdatavue_repartition_projets[".buttonsAdded"] = false;

$tdatavue_repartition_projets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavue_repartition_projets[".isUseTimeForSearch"] = false;


$tdatavue_repartition_projets[".badgeColor"] = "5F9EA0";


$tdatavue_repartition_projets[".allSearchFields"] = array();
$tdatavue_repartition_projets[".filterFields"] = array();
$tdatavue_repartition_projets[".requiredSearchFields"] = array();

$tdatavue_repartition_projets[".googleLikeFields"] = array();
$tdatavue_repartition_projets[".googleLikeFields"][] = "categorie";
$tdatavue_repartition_projets[".googleLikeFields"][] = "statut";
$tdatavue_repartition_projets[".googleLikeFields"][] = "nb_projets";
$tdatavue_repartition_projets[".googleLikeFields"][] = "budget_moyen";



$tdatavue_repartition_projets[".tableType"] = "list";

$tdatavue_repartition_projets[".printerPageOrientation"] = 0;
$tdatavue_repartition_projets[".nPrinterPageScale"] = 100;

$tdatavue_repartition_projets[".nPrinterSplitRecords"] = 40;

$tdatavue_repartition_projets[".geocodingEnabled"] = false;










$tdatavue_repartition_projets[".pageSize"] = 20;

$tdatavue_repartition_projets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavue_repartition_projets[".strOrderBy"] = $tstrOrderBy;

$tdatavue_repartition_projets[".orderindexes"] = array();


$tdatavue_repartition_projets[".sqlHead"] = "SELECT categorie,  	statut,  	nb_projets,  	budget_moyen";
$tdatavue_repartition_projets[".sqlFrom"] = "FROM vue_repartition_projets";
$tdatavue_repartition_projets[".sqlWhereExpr"] = "";
$tdatavue_repartition_projets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavue_repartition_projets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavue_repartition_projets[".arrGroupsPerPage"] = $arrGPP;

$tdatavue_repartition_projets[".highlightSearchResults"] = true;

$tableKeysvue_repartition_projets = array();
$tdatavue_repartition_projets[".Keys"] = $tableKeysvue_repartition_projets;


$tdatavue_repartition_projets[".hideMobileList"] = array();




//	categorie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "categorie";
	$fdata["GoodName"] = "categorie";
	$fdata["ownerTable"] = "vue_repartition_projets";
	$fdata["Label"] = GetFieldLabel("vue_repartition_projets","categorie");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "categorie";

		$fdata["sourceSingle"] = "categorie";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "categorie";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "PIP";
	$edata["LookupValues"][] = "Prioritaire";
	$edata["LookupValues"][] = "FinancementExterne";
	$edata["LookupValues"][] = "Autre";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatavue_repartition_projets["categorie"] = $fdata;
		$tdatavue_repartition_projets[".searchableFields"][] = "categorie";
//	statut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "statut";
	$fdata["GoodName"] = "statut";
	$fdata["ownerTable"] = "vue_repartition_projets";
	$fdata["Label"] = GetFieldLabel("vue_repartition_projets","statut");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "statut";

		$fdata["sourceSingle"] = "statut";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statut";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Brouillon";
	$edata["LookupValues"][] = "Soumis";
	$edata["LookupValues"][] = "Valide";
	$edata["LookupValues"][] = "EnCours";
	$edata["LookupValues"][] = "Cloture";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatavue_repartition_projets["statut"] = $fdata;
		$tdatavue_repartition_projets[".searchableFields"][] = "statut";
//	nb_projets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nb_projets";
	$fdata["GoodName"] = "nb_projets";
	$fdata["ownerTable"] = "vue_repartition_projets";
	$fdata["Label"] = GetFieldLabel("vue_repartition_projets","nb_projets");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "nb_projets";

		$fdata["sourceSingle"] = "nb_projets";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nb_projets";

	
	
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


	$tdatavue_repartition_projets["nb_projets"] = $fdata;
		$tdatavue_repartition_projets[".searchableFields"][] = "nb_projets";
//	budget_moyen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "budget_moyen";
	$fdata["GoodName"] = "budget_moyen";
	$fdata["ownerTable"] = "vue_repartition_projets";
	$fdata["Label"] = GetFieldLabel("vue_repartition_projets","budget_moyen");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "budget_moyen";

		$fdata["sourceSingle"] = "budget_moyen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "budget_moyen";

	
	
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


	$tdatavue_repartition_projets["budget_moyen"] = $fdata;
		$tdatavue_repartition_projets[".searchableFields"][] = "budget_moyen";


$tables_data["vue_repartition_projets"]=&$tdatavue_repartition_projets;
$field_labels["vue_repartition_projets"] = &$fieldLabelsvue_repartition_projets;
$fieldToolTips["vue_repartition_projets"] = &$fieldToolTipsvue_repartition_projets;
$placeHolders["vue_repartition_projets"] = &$placeHoldersvue_repartition_projets;
$page_titles["vue_repartition_projets"] = &$pageTitlesvue_repartition_projets;


changeTextControlsToDate( "vue_repartition_projets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vue_repartition_projets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vue_repartition_projets"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vue_repartition_projets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "categorie,  	statut,  	nb_projets,  	budget_moyen";
$proto0["m_strFrom"] = "FROM vue_repartition_projets";
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
	"m_strName" => "categorie",
	"m_strTable" => "vue_repartition_projets",
	"m_srcTableName" => "vue_repartition_projets"
));

$proto6["m_sql"] = "categorie";
$proto6["m_srcTableName"] = "vue_repartition_projets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "statut",
	"m_strTable" => "vue_repartition_projets",
	"m_srcTableName" => "vue_repartition_projets"
));

$proto8["m_sql"] = "statut";
$proto8["m_srcTableName"] = "vue_repartition_projets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nb_projets",
	"m_strTable" => "vue_repartition_projets",
	"m_srcTableName" => "vue_repartition_projets"
));

$proto10["m_sql"] = "nb_projets";
$proto10["m_srcTableName"] = "vue_repartition_projets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "budget_moyen",
	"m_strTable" => "vue_repartition_projets",
	"m_srcTableName" => "vue_repartition_projets"
));

$proto12["m_sql"] = "budget_moyen";
$proto12["m_srcTableName"] = "vue_repartition_projets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "vue_repartition_projets";
$proto15["m_srcTableName"] = "vue_repartition_projets";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "categorie";
$proto15["m_columns"][] = "statut";
$proto15["m_columns"][] = "nb_projets";
$proto15["m_columns"][] = "budget_moyen";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "vue_repartition_projets";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "vue_repartition_projets";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vue_repartition_projets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vue_repartition_projets = createSqlQuery_vue_repartition_projets();


	
		;

				

$tdatavue_repartition_projets[".sqlquery"] = $queryData_vue_repartition_projets;



$tdatavue_repartition_projets[".hasEvents"] = false;

?>