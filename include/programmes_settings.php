<?php
$tdataprogrammes = array();
$tdataprogrammes[".searchableFields"] = array();
$tdataprogrammes[".ShortName"] = "programmes";
$tdataprogrammes[".OwnerID"] = "";
$tdataprogrammes[".OriginalTable"] = "programme";


$tdataprogrammes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprogrammes[".originalPagesByType"] = $tdataprogrammes[".pagesByType"];
$tdataprogrammes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprogrammes[".originalPages"] = $tdataprogrammes[".pages"];
$tdataprogrammes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprogrammes[".originalDefaultPages"] = $tdataprogrammes[".defaultPages"];

//	field labels
$fieldLabelsprogrammes = array();
$fieldToolTipsprogrammes = array();
$pageTitlesprogrammes = array();
$placeHoldersprogrammes = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsprogrammes["French"] = array();
	$fieldToolTipsprogrammes["French"] = array();
	$placeHoldersprogrammes["French"] = array();
	$pageTitlesprogrammes["French"] = array();
	$fieldLabelsprogrammes["French"]["axe_strategique"] = "Axe Strategique";
	$fieldToolTipsprogrammes["French"]["axe_strategique"] = "";
	$placeHoldersprogrammes["French"]["axe_strategique"] = "";
	$fieldLabelsprogrammes["French"]["description"] = "Description";
	$fieldToolTipsprogrammes["French"]["description"] = "";
	$placeHoldersprogrammes["French"]["description"] = "";
	$fieldLabelsprogrammes["French"]["id"] = "Id";
	$fieldToolTipsprogrammes["French"]["id"] = "";
	$placeHoldersprogrammes["French"]["id"] = "";
	$fieldLabelsprogrammes["French"]["id_portefeuille"] = "Id Portefeuille";
	$fieldToolTipsprogrammes["French"]["id_portefeuille"] = "";
	$placeHoldersprogrammes["French"]["id_portefeuille"] = "";
	$fieldLabelsprogrammes["French"]["nom"] = "Nom";
	$fieldToolTipsprogrammes["French"]["nom"] = "";
	$placeHoldersprogrammes["French"]["nom"] = "";
	if (count($fieldToolTipsprogrammes["French"]))
		$tdataprogrammes[".isUseToolTips"] = true;
}


	$tdataprogrammes[".NCSearch"] = true;



$tdataprogrammes[".shortTableName"] = "programmes";
$tdataprogrammes[".nSecOptions"] = 0;

$tdataprogrammes[".mainTableOwnerID"] = "";
$tdataprogrammes[".entityType"] = 1;
$tdataprogrammes[".connId"] = "sigpppportefeuilleatlocalhost";


$tdataprogrammes[".strOriginalTableName"] = "programme";

	



$tdataprogrammes[".showAddInPopup"] = false;

$tdataprogrammes[".showEditInPopup"] = false;

$tdataprogrammes[".showViewInPopup"] = false;

$tdataprogrammes[".listAjax"] = false;
//	temporary
//$tdataprogrammes[".listAjax"] = false;

	$tdataprogrammes[".audit"] = false;

	$tdataprogrammes[".locking"] = false;


$pages = $tdataprogrammes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprogrammes[".edit"] = true;
	$tdataprogrammes[".afterEditAction"] = 1;
	$tdataprogrammes[".closePopupAfterEdit"] = 1;
	$tdataprogrammes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprogrammes[".add"] = true;
$tdataprogrammes[".afterAddAction"] = 1;
$tdataprogrammes[".closePopupAfterAdd"] = 1;
$tdataprogrammes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprogrammes[".list"] = true;
}



$tdataprogrammes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprogrammes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprogrammes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprogrammes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprogrammes[".printFriendly"] = true;
}



$tdataprogrammes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprogrammes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprogrammes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprogrammes[".isUseAjaxSuggest"] = true;





$tdataprogrammes[".ajaxCodeSnippetAdded"] = false;

$tdataprogrammes[".buttonsAdded"] = false;

$tdataprogrammes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprogrammes[".isUseTimeForSearch"] = false;


$tdataprogrammes[".badgeColor"] = "cd853f";


$tdataprogrammes[".allSearchFields"] = array();
$tdataprogrammes[".filterFields"] = array();
$tdataprogrammes[".requiredSearchFields"] = array();

$tdataprogrammes[".googleLikeFields"] = array();
$tdataprogrammes[".googleLikeFields"][] = "id";
$tdataprogrammes[".googleLikeFields"][] = "id_portefeuille";
$tdataprogrammes[".googleLikeFields"][] = "nom";
$tdataprogrammes[".googleLikeFields"][] = "description";
$tdataprogrammes[".googleLikeFields"][] = "axe_strategique";



$tdataprogrammes[".tableType"] = "list";

$tdataprogrammes[".printerPageOrientation"] = 0;
$tdataprogrammes[".nPrinterPageScale"] = 100;

$tdataprogrammes[".nPrinterSplitRecords"] = 40;

$tdataprogrammes[".geocodingEnabled"] = false;










$tdataprogrammes[".pageSize"] = 20;

$tdataprogrammes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprogrammes[".strOrderBy"] = $tstrOrderBy;

$tdataprogrammes[".orderindexes"] = array();


$tdataprogrammes[".sqlHead"] = "SELECT id,  	id_portefeuille,  	nom,  	description,  	axe_strategique";
$tdataprogrammes[".sqlFrom"] = "FROM programme";
$tdataprogrammes[".sqlWhereExpr"] = "";
$tdataprogrammes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprogrammes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprogrammes[".arrGroupsPerPage"] = $arrGPP;

$tdataprogrammes[".highlightSearchResults"] = true;

$tableKeysprogrammes = array();
$tableKeysprogrammes[] = "id";
$tdataprogrammes[".Keys"] = $tableKeysprogrammes;


$tdataprogrammes[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "programme";
	$fdata["Label"] = GetFieldLabel("Programmes","id");
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


	$tdataprogrammes["id"] = $fdata;
		$tdataprogrammes[".searchableFields"][] = "id";
//	id_portefeuille
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_portefeuille";
	$fdata["GoodName"] = "id_portefeuille";
	$fdata["ownerTable"] = "programme";
	$fdata["Label"] = GetFieldLabel("Programmes","id_portefeuille");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_portefeuille";

		$fdata["sourceSingle"] = "id_portefeuille";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_portefeuille";

	
	
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


	$tdataprogrammes["id_portefeuille"] = $fdata;
		$tdataprogrammes[".searchableFields"][] = "id_portefeuille";
//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "programme";
	$fdata["Label"] = GetFieldLabel("Programmes","nom");
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


	$tdataprogrammes["nom"] = $fdata;
		$tdataprogrammes[".searchableFields"][] = "nom";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "programme";
	$fdata["Label"] = GetFieldLabel("Programmes","description");
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
	$vdata["NumberOfChars"] = 80;

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


	$tdataprogrammes["description"] = $fdata;
		$tdataprogrammes[".searchableFields"][] = "description";
//	axe_strategique
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "axe_strategique";
	$fdata["GoodName"] = "axe_strategique";
	$fdata["ownerTable"] = "programme";
	$fdata["Label"] = GetFieldLabel("Programmes","axe_strategique");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "axe_strategique";

		$fdata["sourceSingle"] = "axe_strategique";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "axe_strategique";

	
	
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


	$tdataprogrammes["axe_strategique"] = $fdata;
		$tdataprogrammes[".searchableFields"][] = "axe_strategique";


$tables_data["Programmes"]=&$tdataprogrammes;
$field_labels["Programmes"] = &$fieldLabelsprogrammes;
$fieldToolTips["Programmes"] = &$fieldToolTipsprogrammes;
$placeHolders["Programmes"] = &$placeHoldersprogrammes;
$page_titles["Programmes"] = &$pageTitlesprogrammes;


changeTextControlsToDate( "Programmes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Programmes"] = array();
//	Projets
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Projets";
		$detailsParam["dOriginalTable"] = "projet";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "projets";
	$detailsParam["dCaptionTable"] = GetTableCaption("Projets");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Programmes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Programmes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Programmes"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Programmes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Programmes"][$dIndex]["detailKeys"][]="id_programme";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Programmes"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="portefeuille";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Portefeuille";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "portefeuille";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Programmes"][0] = $masterParams;
				$masterTablesData["Programmes"][0]["masterKeys"] = array();
	$masterTablesData["Programmes"][0]["masterKeys"][]="id";
				$masterTablesData["Programmes"][0]["detailKeys"] = array();
	$masterTablesData["Programmes"][0]["detailKeys"][]="id_portefeuille";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_programmes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_portefeuille,  	nom,  	description,  	axe_strategique";
$proto0["m_strFrom"] = "FROM programme";
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
	"m_strTable" => "programme",
	"m_srcTableName" => "Programmes"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Programmes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_portefeuille",
	"m_strTable" => "programme",
	"m_srcTableName" => "Programmes"
));

$proto8["m_sql"] = "id_portefeuille";
$proto8["m_srcTableName"] = "Programmes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nom",
	"m_strTable" => "programme",
	"m_srcTableName" => "Programmes"
));

$proto10["m_sql"] = "nom";
$proto10["m_srcTableName"] = "Programmes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "programme",
	"m_srcTableName" => "Programmes"
));

$proto12["m_sql"] = "description";
$proto12["m_srcTableName"] = "Programmes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "axe_strategique",
	"m_strTable" => "programme",
	"m_srcTableName" => "Programmes"
));

$proto14["m_sql"] = "axe_strategique";
$proto14["m_srcTableName"] = "Programmes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "programme";
$proto17["m_srcTableName"] = "Programmes";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "id_portefeuille";
$proto17["m_columns"][] = "nom";
$proto17["m_columns"][] = "description";
$proto17["m_columns"][] = "axe_strategique";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "programme";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Programmes";
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
$proto0["m_srcTableName"]="Programmes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_programmes = createSqlQuery_programmes();


	
		;

					

$tdataprogrammes[".sqlquery"] = $queryData_programmes;



$tdataprogrammes[".hasEvents"] = false;

?>