<?php
$tdataindicateurs = array();
$tdataindicateurs[".searchableFields"] = array();
$tdataindicateurs[".ShortName"] = "indicateurs";
$tdataindicateurs[".OwnerID"] = "";
$tdataindicateurs[".OriginalTable"] = "indicateur";


$tdataindicateurs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataindicateurs[".originalPagesByType"] = $tdataindicateurs[".pagesByType"];
$tdataindicateurs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataindicateurs[".originalPages"] = $tdataindicateurs[".pages"];
$tdataindicateurs[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataindicateurs[".originalDefaultPages"] = $tdataindicateurs[".defaultPages"];

//	field labels
$fieldLabelsindicateurs = array();
$fieldToolTipsindicateurs = array();
$pageTitlesindicateurs = array();
$placeHoldersindicateurs = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsindicateurs["French"] = array();
	$fieldToolTipsindicateurs["French"] = array();
	$placeHoldersindicateurs["French"] = array();
	$pageTitlesindicateurs["French"] = array();
	$fieldLabelsindicateurs["French"]["cible"] = "Cible";
	$fieldToolTipsindicateurs["French"]["cible"] = "";
	$placeHoldersindicateurs["French"]["cible"] = "";
	$fieldLabelsindicateurs["French"]["description"] = "Description";
	$fieldToolTipsindicateurs["French"]["description"] = "";
	$placeHoldersindicateurs["French"]["description"] = "";
	$fieldLabelsindicateurs["French"]["id"] = "Id";
	$fieldToolTipsindicateurs["French"]["id"] = "";
	$placeHoldersindicateurs["French"]["id"] = "";
	$fieldLabelsindicateurs["French"]["id_projet"] = "Id Projet";
	$fieldToolTipsindicateurs["French"]["id_projet"] = "";
	$placeHoldersindicateurs["French"]["id_projet"] = "";
	$fieldLabelsindicateurs["French"]["nom"] = "Nom";
	$fieldToolTipsindicateurs["French"]["nom"] = "";
	$placeHoldersindicateurs["French"]["nom"] = "";
	$fieldLabelsindicateurs["French"]["periode"] = "Periode";
	$fieldToolTipsindicateurs["French"]["periode"] = "";
	$placeHoldersindicateurs["French"]["periode"] = "";
	$fieldLabelsindicateurs["French"]["type"] = "Type";
	$fieldToolTipsindicateurs["French"]["type"] = "";
	$placeHoldersindicateurs["French"]["type"] = "";
	$fieldLabelsindicateurs["French"]["unite"] = "Unite";
	$fieldToolTipsindicateurs["French"]["unite"] = "";
	$placeHoldersindicateurs["French"]["unite"] = "";
	$fieldLabelsindicateurs["French"]["valeur_actuelle"] = "Valeur Actuelle";
	$fieldToolTipsindicateurs["French"]["valeur_actuelle"] = "";
	$placeHoldersindicateurs["French"]["valeur_actuelle"] = "";
	if (count($fieldToolTipsindicateurs["French"]))
		$tdataindicateurs[".isUseToolTips"] = true;
}


	$tdataindicateurs[".NCSearch"] = true;



$tdataindicateurs[".shortTableName"] = "indicateurs";
$tdataindicateurs[".nSecOptions"] = 0;

$tdataindicateurs[".mainTableOwnerID"] = "";
$tdataindicateurs[".entityType"] = 1;
$tdataindicateurs[".connId"] = "sigpppportefeuilleatlocalhost";


$tdataindicateurs[".strOriginalTableName"] = "indicateur";

	



$tdataindicateurs[".showAddInPopup"] = false;

$tdataindicateurs[".showEditInPopup"] = false;

$tdataindicateurs[".showViewInPopup"] = false;

$tdataindicateurs[".listAjax"] = false;
//	temporary
//$tdataindicateurs[".listAjax"] = false;

	$tdataindicateurs[".audit"] = false;

	$tdataindicateurs[".locking"] = false;


$pages = $tdataindicateurs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataindicateurs[".edit"] = true;
	$tdataindicateurs[".afterEditAction"] = 1;
	$tdataindicateurs[".closePopupAfterEdit"] = 1;
	$tdataindicateurs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataindicateurs[".add"] = true;
$tdataindicateurs[".afterAddAction"] = 1;
$tdataindicateurs[".closePopupAfterAdd"] = 1;
$tdataindicateurs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataindicateurs[".list"] = true;
}



$tdataindicateurs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataindicateurs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataindicateurs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataindicateurs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataindicateurs[".printFriendly"] = true;
}



$tdataindicateurs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataindicateurs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataindicateurs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataindicateurs[".isUseAjaxSuggest"] = true;





$tdataindicateurs[".ajaxCodeSnippetAdded"] = false;

$tdataindicateurs[".buttonsAdded"] = false;

$tdataindicateurs[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindicateurs[".isUseTimeForSearch"] = false;


$tdataindicateurs[".badgeColor"] = "8fbc8b";


$tdataindicateurs[".allSearchFields"] = array();
$tdataindicateurs[".filterFields"] = array();
$tdataindicateurs[".requiredSearchFields"] = array();

$tdataindicateurs[".googleLikeFields"] = array();
$tdataindicateurs[".googleLikeFields"][] = "id";
$tdataindicateurs[".googleLikeFields"][] = "id_projet";
$tdataindicateurs[".googleLikeFields"][] = "type";
$tdataindicateurs[".googleLikeFields"][] = "nom";
$tdataindicateurs[".googleLikeFields"][] = "description";
$tdataindicateurs[".googleLikeFields"][] = "unite";
$tdataindicateurs[".googleLikeFields"][] = "cible";
$tdataindicateurs[".googleLikeFields"][] = "valeur_actuelle";
$tdataindicateurs[".googleLikeFields"][] = "periode";



$tdataindicateurs[".tableType"] = "list";

$tdataindicateurs[".printerPageOrientation"] = 0;
$tdataindicateurs[".nPrinterPageScale"] = 100;

$tdataindicateurs[".nPrinterSplitRecords"] = 40;

$tdataindicateurs[".geocodingEnabled"] = false;










$tdataindicateurs[".pageSize"] = 20;

$tdataindicateurs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataindicateurs[".strOrderBy"] = $tstrOrderBy;

$tdataindicateurs[".orderindexes"] = array();


$tdataindicateurs[".sqlHead"] = "SELECT id,  	id_projet,  	`type`,  	nom,  	description,  	unite,  	cible,  	valeur_actuelle,  	periode";
$tdataindicateurs[".sqlFrom"] = "FROM indicateur";
$tdataindicateurs[".sqlWhereExpr"] = "";
$tdataindicateurs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindicateurs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindicateurs[".arrGroupsPerPage"] = $arrGPP;

$tdataindicateurs[".highlightSearchResults"] = true;

$tableKeysindicateurs = array();
$tableKeysindicateurs[] = "id";
$tdataindicateurs[".Keys"] = $tableKeysindicateurs;


$tdataindicateurs[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "indicateur";
	$fdata["Label"] = GetFieldLabel("Indicateurs","id");
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


	$tdataindicateurs["id"] = $fdata;
		$tdataindicateurs[".searchableFields"][] = "id";
//	id_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_projet";
	$fdata["GoodName"] = "id_projet";
	$fdata["ownerTable"] = "indicateur";
	$fdata["Label"] = GetFieldLabel("Indicateurs","id_projet");
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


	$tdataindicateurs["id_projet"] = $fdata;
		$tdataindicateurs[".searchableFields"][] = "id_projet";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "indicateur";
	$fdata["Label"] = GetFieldLabel("Indicateurs","type");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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
	$edata["LookupValues"][] = "Strategique";
	$edata["LookupValues"][] = "Financier";
	$edata["LookupValues"][] = "PMO";
	$edata["LookupValues"][] = "Operationnel";

	
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


	$tdataindicateurs["type"] = $fdata;
		$tdataindicateurs[".searchableFields"][] = "type";
//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "indicateur";
	$fdata["Label"] = GetFieldLabel("Indicateurs","nom");
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataindicateurs["nom"] = $fdata;
		$tdataindicateurs[".searchableFields"][] = "nom";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "indicateur";
	$fdata["Label"] = GetFieldLabel("Indicateurs","description");
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


	$tdataindicateurs["description"] = $fdata;
		$tdataindicateurs[".searchableFields"][] = "description";
//	unite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unite";
	$fdata["GoodName"] = "unite";
	$fdata["ownerTable"] = "indicateur";
	$fdata["Label"] = GetFieldLabel("Indicateurs","unite");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "unite";

		$fdata["sourceSingle"] = "unite";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unite";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataindicateurs["unite"] = $fdata;
		$tdataindicateurs[".searchableFields"][] = "unite";
//	cible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cible";
	$fdata["GoodName"] = "cible";
	$fdata["ownerTable"] = "indicateur";
	$fdata["Label"] = GetFieldLabel("Indicateurs","cible");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cible";

		$fdata["sourceSingle"] = "cible";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cible";

	
	
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


	$tdataindicateurs["cible"] = $fdata;
		$tdataindicateurs[".searchableFields"][] = "cible";
//	valeur_actuelle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "valeur_actuelle";
	$fdata["GoodName"] = "valeur_actuelle";
	$fdata["ownerTable"] = "indicateur";
	$fdata["Label"] = GetFieldLabel("Indicateurs","valeur_actuelle");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "valeur_actuelle";

		$fdata["sourceSingle"] = "valeur_actuelle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valeur_actuelle";

	
	
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


	$tdataindicateurs["valeur_actuelle"] = $fdata;
		$tdataindicateurs[".searchableFields"][] = "valeur_actuelle";
//	periode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "periode";
	$fdata["GoodName"] = "periode";
	$fdata["ownerTable"] = "indicateur";
	$fdata["Label"] = GetFieldLabel("Indicateurs","periode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "periode";

		$fdata["sourceSingle"] = "periode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periode";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataindicateurs["periode"] = $fdata;
		$tdataindicateurs[".searchableFields"][] = "periode";


$tables_data["Indicateurs"]=&$tdataindicateurs;
$field_labels["Indicateurs"] = &$fieldLabelsindicateurs;
$fieldToolTips["Indicateurs"] = &$fieldToolTipsindicateurs;
$placeHolders["Indicateurs"] = &$placeHoldersindicateurs;
$page_titles["Indicateurs"] = &$pageTitlesindicateurs;


changeTextControlsToDate( "Indicateurs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Indicateurs"] = array();
//	Valeurs_indicateurs
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Valeurs_indicateurs";
		$detailsParam["dOriginalTable"] = "valeur_indicateur";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "valeurs_indicateurs";
	$detailsParam["dCaptionTable"] = GetTableCaption("Valeurs_indicateurs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Indicateurs"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Indicateurs"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Indicateurs"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Indicateurs"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Indicateurs"][$dIndex]["detailKeys"][]="id_indicateur";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Indicateurs"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="projet";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Projets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Indicateurs"][0] = $masterParams;
				$masterTablesData["Indicateurs"][0]["masterKeys"] = array();
	$masterTablesData["Indicateurs"][0]["masterKeys"][]="id";
				$masterTablesData["Indicateurs"][0]["detailKeys"] = array();
	$masterTablesData["Indicateurs"][0]["detailKeys"][]="id_projet";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_indicateurs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_projet,  	`type`,  	nom,  	description,  	unite,  	cible,  	valeur_actuelle,  	periode";
$proto0["m_strFrom"] = "FROM indicateur";
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
	"m_strTable" => "indicateur",
	"m_srcTableName" => "Indicateurs"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Indicateurs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_projet",
	"m_strTable" => "indicateur",
	"m_srcTableName" => "Indicateurs"
));

$proto8["m_sql"] = "id_projet";
$proto8["m_srcTableName"] = "Indicateurs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "indicateur",
	"m_srcTableName" => "Indicateurs"
));

$proto10["m_sql"] = "`type`";
$proto10["m_srcTableName"] = "Indicateurs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nom",
	"m_strTable" => "indicateur",
	"m_srcTableName" => "Indicateurs"
));

$proto12["m_sql"] = "nom";
$proto12["m_srcTableName"] = "Indicateurs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "indicateur",
	"m_srcTableName" => "Indicateurs"
));

$proto14["m_sql"] = "description";
$proto14["m_srcTableName"] = "Indicateurs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unite",
	"m_strTable" => "indicateur",
	"m_srcTableName" => "Indicateurs"
));

$proto16["m_sql"] = "unite";
$proto16["m_srcTableName"] = "Indicateurs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cible",
	"m_strTable" => "indicateur",
	"m_srcTableName" => "Indicateurs"
));

$proto18["m_sql"] = "cible";
$proto18["m_srcTableName"] = "Indicateurs";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "valeur_actuelle",
	"m_strTable" => "indicateur",
	"m_srcTableName" => "Indicateurs"
));

$proto20["m_sql"] = "valeur_actuelle";
$proto20["m_srcTableName"] = "Indicateurs";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "periode",
	"m_strTable" => "indicateur",
	"m_srcTableName" => "Indicateurs"
));

$proto22["m_sql"] = "periode";
$proto22["m_srcTableName"] = "Indicateurs";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "indicateur";
$proto25["m_srcTableName"] = "Indicateurs";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "id_projet";
$proto25["m_columns"][] = "type";
$proto25["m_columns"][] = "nom";
$proto25["m_columns"][] = "description";
$proto25["m_columns"][] = "unite";
$proto25["m_columns"][] = "cible";
$proto25["m_columns"][] = "valeur_actuelle";
$proto25["m_columns"][] = "periode";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "indicateur";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Indicateurs";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Indicateurs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indicateurs = createSqlQuery_indicateurs();


	
		;

									

$tdataindicateurs[".sqlquery"] = $queryData_indicateurs;



$tdataindicateurs[".hasEvents"] = false;

?>