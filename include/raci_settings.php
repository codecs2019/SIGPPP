<?php
$tdataraci = array();
$tdataraci[".searchableFields"] = array();
$tdataraci[".ShortName"] = "raci";
$tdataraci[".OwnerID"] = "";
$tdataraci[".OriginalTable"] = "raci";


$tdataraci[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataraci[".originalPagesByType"] = $tdataraci[".pagesByType"];
$tdataraci[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataraci[".originalPages"] = $tdataraci[".pages"];
$tdataraci[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataraci[".originalDefaultPages"] = $tdataraci[".defaultPages"];

//	field labels
$fieldLabelsraci = array();
$fieldToolTipsraci = array();
$pageTitlesraci = array();
$placeHoldersraci = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsraci["French"] = array();
	$fieldToolTipsraci["French"] = array();
	$placeHoldersraci["French"] = array();
	$pageTitlesraci["French"] = array();
	$fieldLabelsraci["French"]["commentaire"] = "Commentaire";
	$fieldToolTipsraci["French"]["commentaire"] = "";
	$placeHoldersraci["French"]["commentaire"] = "";
	$fieldLabelsraci["French"]["id"] = "Id";
	$fieldToolTipsraci["French"]["id"] = "";
	$placeHoldersraci["French"]["id"] = "";
	$fieldLabelsraci["French"]["id_projet"] = "Id Projet";
	$fieldToolTipsraci["French"]["id_projet"] = "";
	$placeHoldersraci["French"]["id_projet"] = "";
	$fieldLabelsraci["French"]["id_utilisateur"] = "Id Utilisateur";
	$fieldToolTipsraci["French"]["id_utilisateur"] = "";
	$placeHoldersraci["French"]["id_utilisateur"] = "";
	$fieldLabelsraci["French"]["role_raci"] = "Role Raci";
	$fieldToolTipsraci["French"]["role_raci"] = "";
	$placeHoldersraci["French"]["role_raci"] = "";
	if (count($fieldToolTipsraci["French"]))
		$tdataraci[".isUseToolTips"] = true;
}


	$tdataraci[".NCSearch"] = true;



$tdataraci[".shortTableName"] = "raci";
$tdataraci[".nSecOptions"] = 0;

$tdataraci[".mainTableOwnerID"] = "";
$tdataraci[".entityType"] = 1;
$tdataraci[".connId"] = "sigpppportefeuilleatlocalhost";


$tdataraci[".strOriginalTableName"] = "raci";

	



$tdataraci[".showAddInPopup"] = false;

$tdataraci[".showEditInPopup"] = false;

$tdataraci[".showViewInPopup"] = false;

$tdataraci[".listAjax"] = false;
//	temporary
//$tdataraci[".listAjax"] = false;

	$tdataraci[".audit"] = false;

	$tdataraci[".locking"] = false;


$pages = $tdataraci[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataraci[".edit"] = true;
	$tdataraci[".afterEditAction"] = 1;
	$tdataraci[".closePopupAfterEdit"] = 1;
	$tdataraci[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataraci[".add"] = true;
$tdataraci[".afterAddAction"] = 1;
$tdataraci[".closePopupAfterAdd"] = 1;
$tdataraci[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataraci[".list"] = true;
}



$tdataraci[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataraci[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataraci[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataraci[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataraci[".printFriendly"] = true;
}



$tdataraci[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataraci[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataraci[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataraci[".isUseAjaxSuggest"] = true;





$tdataraci[".ajaxCodeSnippetAdded"] = false;

$tdataraci[".buttonsAdded"] = false;

$tdataraci[".addPageEvents"] = false;

// use timepicker for search panel
$tdataraci[".isUseTimeForSearch"] = false;


$tdataraci[".badgeColor"] = "00c2c5";


$tdataraci[".allSearchFields"] = array();
$tdataraci[".filterFields"] = array();
$tdataraci[".requiredSearchFields"] = array();

$tdataraci[".googleLikeFields"] = array();
$tdataraci[".googleLikeFields"][] = "id";
$tdataraci[".googleLikeFields"][] = "id_projet";
$tdataraci[".googleLikeFields"][] = "id_utilisateur";
$tdataraci[".googleLikeFields"][] = "role_raci";
$tdataraci[".googleLikeFields"][] = "commentaire";



$tdataraci[".tableType"] = "list";

$tdataraci[".printerPageOrientation"] = 0;
$tdataraci[".nPrinterPageScale"] = 100;

$tdataraci[".nPrinterSplitRecords"] = 40;

$tdataraci[".geocodingEnabled"] = false;










$tdataraci[".pageSize"] = 20;

$tdataraci[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataraci[".strOrderBy"] = $tstrOrderBy;

$tdataraci[".orderindexes"] = array();


$tdataraci[".sqlHead"] = "SELECT id,  	id_projet,  	id_utilisateur,  	role_raci,  	commentaire";
$tdataraci[".sqlFrom"] = "FROM raci";
$tdataraci[".sqlWhereExpr"] = "";
$tdataraci[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataraci[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataraci[".arrGroupsPerPage"] = $arrGPP;

$tdataraci[".highlightSearchResults"] = true;

$tableKeysraci = array();
$tableKeysraci[] = "id";
$tdataraci[".Keys"] = $tableKeysraci;


$tdataraci[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "raci";
	$fdata["Label"] = GetFieldLabel("Raci","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataraci["id"] = $fdata;
		$tdataraci[".searchableFields"][] = "id";
//	id_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_projet";
	$fdata["GoodName"] = "id_projet";
	$fdata["ownerTable"] = "raci";
	$fdata["Label"] = GetFieldLabel("Raci","id_projet");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_projet";

		$fdata["sourceSingle"] = "id_projet";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_projet";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataraci["id_projet"] = $fdata;
		$tdataraci[".searchableFields"][] = "id_projet";
//	id_utilisateur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_utilisateur";
	$fdata["GoodName"] = "id_utilisateur";
	$fdata["ownerTable"] = "raci";
	$fdata["Label"] = GetFieldLabel("Raci","id_utilisateur");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_utilisateur";

		$fdata["sourceSingle"] = "id_utilisateur";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_utilisateur";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataraci["id_utilisateur"] = $fdata;
		$tdataraci[".searchableFields"][] = "id_utilisateur";
//	role_raci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "role_raci";
	$fdata["GoodName"] = "role_raci";
	$fdata["ownerTable"] = "raci";
	$fdata["Label"] = GetFieldLabel("Raci","role_raci");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "role_raci";

		$fdata["sourceSingle"] = "role_raci";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "role_raci";

	
	
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
	$edata["LookupValues"][] = "R";
	$edata["LookupValues"][] = "A";
	$edata["LookupValues"][] = "C";
	$edata["LookupValues"][] = "I";

	
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


	$tdataraci["role_raci"] = $fdata;
		$tdataraci[".searchableFields"][] = "role_raci";
//	commentaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "commentaire";
	$fdata["GoodName"] = "commentaire";
	$fdata["ownerTable"] = "raci";
	$fdata["Label"] = GetFieldLabel("Raci","commentaire");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "commentaire";

		$fdata["sourceSingle"] = "commentaire";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "commentaire";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataraci["commentaire"] = $fdata;
		$tdataraci[".searchableFields"][] = "commentaire";


$tables_data["Raci"]=&$tdataraci;
$field_labels["Raci"] = &$fieldLabelsraci;
$fieldToolTips["Raci"] = &$fieldToolTipsraci;
$placeHolders["Raci"] = &$placeHoldersraci;
$page_titles["Raci"] = &$pageTitlesraci;


changeTextControlsToDate( "Raci" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Raci"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Raci"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="projet";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Projets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Raci"][0] = $masterParams;
				$masterTablesData["Raci"][0]["masterKeys"] = array();
	$masterTablesData["Raci"][0]["masterKeys"][]="id";
				$masterTablesData["Raci"][0]["detailKeys"] = array();
	$masterTablesData["Raci"][0]["detailKeys"][]="id_projet";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_raci()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_projet,  	id_utilisateur,  	role_raci,  	commentaire";
$proto0["m_strFrom"] = "FROM raci";
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
	"m_strName" => "id",
	"m_strTable" => "raci",
	"m_srcTableName" => "Raci"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Raci";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_projet",
	"m_strTable" => "raci",
	"m_srcTableName" => "Raci"
));

$proto8["m_sql"] = "id_projet";
$proto8["m_srcTableName"] = "Raci";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_utilisateur",
	"m_strTable" => "raci",
	"m_srcTableName" => "Raci"
));

$proto10["m_sql"] = "id_utilisateur";
$proto10["m_srcTableName"] = "Raci";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "role_raci",
	"m_strTable" => "raci",
	"m_srcTableName" => "Raci"
));

$proto12["m_sql"] = "role_raci";
$proto12["m_srcTableName"] = "Raci";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "commentaire",
	"m_strTable" => "raci",
	"m_srcTableName" => "Raci"
));

$proto14["m_sql"] = "commentaire";
$proto14["m_srcTableName"] = "Raci";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "raci";
$proto17["m_srcTableName"] = "Raci";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "id_projet";
$proto17["m_columns"][] = "id_utilisateur";
$proto17["m_columns"][] = "role_raci";
$proto17["m_columns"][] = "commentaire";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "raci";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Raci";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Raci";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_raci = createSqlQuery_raci();


	
		;

					

$tdataraci[".sqlquery"] = $queryData_raci;



$tdataraci[".hasEvents"] = false;

?>