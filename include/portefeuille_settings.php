<?php
$tdataportefeuille = array();
$tdataportefeuille[".searchableFields"] = array();
$tdataportefeuille[".ShortName"] = "portefeuille";
$tdataportefeuille[".OwnerID"] = "";
$tdataportefeuille[".OriginalTable"] = "portefeuille";


$tdataportefeuille[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataportefeuille[".originalPagesByType"] = $tdataportefeuille[".pagesByType"];
$tdataportefeuille[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataportefeuille[".originalPages"] = $tdataportefeuille[".pages"];
$tdataportefeuille[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataportefeuille[".originalDefaultPages"] = $tdataportefeuille[".defaultPages"];

//	field labels
$fieldLabelsportefeuille = array();
$fieldToolTipsportefeuille = array();
$pageTitlesportefeuille = array();
$placeHoldersportefeuille = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsportefeuille["French"] = array();
	$fieldToolTipsportefeuille["French"] = array();
	$placeHoldersportefeuille["French"] = array();
	$pageTitlesportefeuille["French"] = array();
	$fieldLabelsportefeuille["French"]["annee"] = "Annee";
	$fieldToolTipsportefeuille["French"]["annee"] = "";
	$placeHoldersportefeuille["French"]["annee"] = "";
	$fieldLabelsportefeuille["French"]["date_creation"] = "Date Creation";
	$fieldToolTipsportefeuille["French"]["date_creation"] = "";
	$placeHoldersportefeuille["French"]["date_creation"] = "";
	$fieldLabelsportefeuille["French"]["description"] = "Description";
	$fieldToolTipsportefeuille["French"]["description"] = "";
	$placeHoldersportefeuille["French"]["description"] = "";
	$fieldLabelsportefeuille["French"]["id"] = "Id";
	$fieldToolTipsportefeuille["French"]["id"] = "";
	$placeHoldersportefeuille["French"]["id"] = "";
	$fieldLabelsportefeuille["French"]["nom"] = "Nom";
	$fieldToolTipsportefeuille["French"]["nom"] = "";
	$placeHoldersportefeuille["French"]["nom"] = "";
	if (count($fieldToolTipsportefeuille["French"]))
		$tdataportefeuille[".isUseToolTips"] = true;
}


	$tdataportefeuille[".NCSearch"] = true;



$tdataportefeuille[".shortTableName"] = "portefeuille";
$tdataportefeuille[".nSecOptions"] = 0;

$tdataportefeuille[".mainTableOwnerID"] = "";
$tdataportefeuille[".entityType"] = 1;
$tdataportefeuille[".connId"] = "sigpppportefeuilleatlocalhost";


$tdataportefeuille[".strOriginalTableName"] = "portefeuille";

	



$tdataportefeuille[".showAddInPopup"] = false;

$tdataportefeuille[".showEditInPopup"] = false;

$tdataportefeuille[".showViewInPopup"] = false;

$tdataportefeuille[".listAjax"] = false;
//	temporary
//$tdataportefeuille[".listAjax"] = false;

	$tdataportefeuille[".audit"] = false;

	$tdataportefeuille[".locking"] = false;


$pages = $tdataportefeuille[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataportefeuille[".edit"] = true;
	$tdataportefeuille[".afterEditAction"] = 1;
	$tdataportefeuille[".closePopupAfterEdit"] = 1;
	$tdataportefeuille[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataportefeuille[".add"] = true;
$tdataportefeuille[".afterAddAction"] = 1;
$tdataportefeuille[".closePopupAfterAdd"] = 1;
$tdataportefeuille[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataportefeuille[".list"] = true;
}



$tdataportefeuille[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataportefeuille[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataportefeuille[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataportefeuille[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataportefeuille[".printFriendly"] = true;
}



$tdataportefeuille[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataportefeuille[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataportefeuille[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataportefeuille[".isUseAjaxSuggest"] = true;





$tdataportefeuille[".ajaxCodeSnippetAdded"] = false;

$tdataportefeuille[".buttonsAdded"] = false;

$tdataportefeuille[".addPageEvents"] = false;

// use timepicker for search panel
$tdataportefeuille[".isUseTimeForSearch"] = false;


$tdataportefeuille[".badgeColor"] = "DAA520";


$tdataportefeuille[".allSearchFields"] = array();
$tdataportefeuille[".filterFields"] = array();
$tdataportefeuille[".requiredSearchFields"] = array();

$tdataportefeuille[".googleLikeFields"] = array();
$tdataportefeuille[".googleLikeFields"][] = "id";
$tdataportefeuille[".googleLikeFields"][] = "annee";
$tdataportefeuille[".googleLikeFields"][] = "nom";
$tdataportefeuille[".googleLikeFields"][] = "description";
$tdataportefeuille[".googleLikeFields"][] = "date_creation";



$tdataportefeuille[".tableType"] = "list";

$tdataportefeuille[".printerPageOrientation"] = 0;
$tdataportefeuille[".nPrinterPageScale"] = 100;

$tdataportefeuille[".nPrinterSplitRecords"] = 40;

$tdataportefeuille[".geocodingEnabled"] = false;










$tdataportefeuille[".pageSize"] = 20;

$tdataportefeuille[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataportefeuille[".strOrderBy"] = $tstrOrderBy;

$tdataportefeuille[".orderindexes"] = array();


$tdataportefeuille[".sqlHead"] = "SELECT id,  	annee,  	nom,  	description,  	date_creation";
$tdataportefeuille[".sqlFrom"] = "FROM portefeuille";
$tdataportefeuille[".sqlWhereExpr"] = "";
$tdataportefeuille[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataportefeuille[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataportefeuille[".arrGroupsPerPage"] = $arrGPP;

$tdataportefeuille[".highlightSearchResults"] = true;

$tableKeysportefeuille = array();
$tableKeysportefeuille[] = "id";
$tdataportefeuille[".Keys"] = $tableKeysportefeuille;


$tdataportefeuille[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "portefeuille";
	$fdata["Label"] = GetFieldLabel("Portefeuille","id");
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


	$tdataportefeuille["id"] = $fdata;
		$tdataportefeuille[".searchableFields"][] = "id";
//	annee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "annee";
	$fdata["GoodName"] = "annee";
	$fdata["ownerTable"] = "portefeuille";
	$fdata["Label"] = GetFieldLabel("Portefeuille","annee");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "annee";

		$fdata["sourceSingle"] = "annee";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "annee";

	
	
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


	$tdataportefeuille["annee"] = $fdata;
		$tdataportefeuille[".searchableFields"][] = "annee";
//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "portefeuille";
	$fdata["Label"] = GetFieldLabel("Portefeuille","nom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom";

		$fdata["sourceSingle"] = "nom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataportefeuille["nom"] = $fdata;
		$tdataportefeuille[".searchableFields"][] = "nom";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "portefeuille";
	$fdata["Label"] = GetFieldLabel("Portefeuille","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 100;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataportefeuille["description"] = $fdata;
		$tdataportefeuille[".searchableFields"][] = "description";
//	date_creation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_creation";
	$fdata["GoodName"] = "date_creation";
	$fdata["ownerTable"] = "portefeuille";
	$fdata["Label"] = GetFieldLabel("Portefeuille","date_creation");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_creation";

		$fdata["sourceSingle"] = "date_creation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_creation";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataportefeuille["date_creation"] = $fdata;
		$tdataportefeuille[".searchableFields"][] = "date_creation";


$tables_data["Portefeuille"]=&$tdataportefeuille;
$field_labels["Portefeuille"] = &$fieldLabelsportefeuille;
$fieldToolTips["Portefeuille"] = &$fieldToolTipsportefeuille;
$placeHolders["Portefeuille"] = &$placeHoldersportefeuille;
$page_titles["Portefeuille"] = &$pageTitlesportefeuille;


changeTextControlsToDate( "Portefeuille" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Portefeuille"] = array();
//	Programmes
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Programmes";
		$detailsParam["dOriginalTable"] = "programme";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "programmes";
	$detailsParam["dCaptionTable"] = GetTableCaption("Programmes");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Portefeuille"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Portefeuille"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Portefeuille"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Portefeuille"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Portefeuille"][$dIndex]["detailKeys"][]="id_portefeuille";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Portefeuille"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_portefeuille()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	annee,  	nom,  	description,  	date_creation";
$proto0["m_strFrom"] = "FROM portefeuille";
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
	"m_strTable" => "portefeuille",
	"m_srcTableName" => "Portefeuille"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Portefeuille";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "annee",
	"m_strTable" => "portefeuille",
	"m_srcTableName" => "Portefeuille"
));

$proto8["m_sql"] = "annee";
$proto8["m_srcTableName"] = "Portefeuille";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nom",
	"m_strTable" => "portefeuille",
	"m_srcTableName" => "Portefeuille"
));

$proto10["m_sql"] = "nom";
$proto10["m_srcTableName"] = "Portefeuille";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "portefeuille",
	"m_srcTableName" => "Portefeuille"
));

$proto12["m_sql"] = "description";
$proto12["m_srcTableName"] = "Portefeuille";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "date_creation",
	"m_strTable" => "portefeuille",
	"m_srcTableName" => "Portefeuille"
));

$proto14["m_sql"] = "date_creation";
$proto14["m_srcTableName"] = "Portefeuille";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "portefeuille";
$proto17["m_srcTableName"] = "Portefeuille";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "annee";
$proto17["m_columns"][] = "nom";
$proto17["m_columns"][] = "description";
$proto17["m_columns"][] = "date_creation";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "portefeuille";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Portefeuille";
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
$proto0["m_srcTableName"]="Portefeuille";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_portefeuille = createSqlQuery_portefeuille();


	
		;

					

$tdataportefeuille[".sqlquery"] = $queryData_portefeuille;



$tdataportefeuille[".hasEvents"] = false;

?>