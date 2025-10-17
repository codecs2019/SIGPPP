<?php
$tdatadocuments_projets = array();
$tdatadocuments_projets[".searchableFields"] = array();
$tdatadocuments_projets[".ShortName"] = "documents_projets";
$tdatadocuments_projets[".OwnerID"] = "";
$tdatadocuments_projets[".OriginalTable"] = "document_projet";


$tdatadocuments_projets[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadocuments_projets[".originalPagesByType"] = $tdatadocuments_projets[".pagesByType"];
$tdatadocuments_projets[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadocuments_projets[".originalPages"] = $tdatadocuments_projets[".pages"];
$tdatadocuments_projets[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadocuments_projets[".originalDefaultPages"] = $tdatadocuments_projets[".defaultPages"];

//	field labels
$fieldLabelsdocuments_projets = array();
$fieldToolTipsdocuments_projets = array();
$pageTitlesdocuments_projets = array();
$placeHoldersdocuments_projets = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsdocuments_projets["French"] = array();
	$fieldToolTipsdocuments_projets["French"] = array();
	$placeHoldersdocuments_projets["French"] = array();
	$pageTitlesdocuments_projets["French"] = array();
	$fieldLabelsdocuments_projets["French"]["auteur_id"] = "Auteur Id";
	$fieldToolTipsdocuments_projets["French"]["auteur_id"] = "";
	$placeHoldersdocuments_projets["French"]["auteur_id"] = "";
	$fieldLabelsdocuments_projets["French"]["chemin"] = "Chemin";
	$fieldToolTipsdocuments_projets["French"]["chemin"] = "";
	$placeHoldersdocuments_projets["French"]["chemin"] = "";
	$fieldLabelsdocuments_projets["French"]["date_ajout"] = "Date Ajout";
	$fieldToolTipsdocuments_projets["French"]["date_ajout"] = "";
	$placeHoldersdocuments_projets["French"]["date_ajout"] = "";
	$fieldLabelsdocuments_projets["French"]["id"] = "Id";
	$fieldToolTipsdocuments_projets["French"]["id"] = "";
	$placeHoldersdocuments_projets["French"]["id"] = "";
	$fieldLabelsdocuments_projets["French"]["id_projet"] = "Id Projet";
	$fieldToolTipsdocuments_projets["French"]["id_projet"] = "";
	$placeHoldersdocuments_projets["French"]["id_projet"] = "";
	$fieldLabelsdocuments_projets["French"]["nom_fichier"] = "Nom Fichier";
	$fieldToolTipsdocuments_projets["French"]["nom_fichier"] = "";
	$placeHoldersdocuments_projets["French"]["nom_fichier"] = "";
	$fieldLabelsdocuments_projets["French"]["type_document"] = "Type Document";
	$fieldToolTipsdocuments_projets["French"]["type_document"] = "";
	$placeHoldersdocuments_projets["French"]["type_document"] = "";
	if (count($fieldToolTipsdocuments_projets["French"]))
		$tdatadocuments_projets[".isUseToolTips"] = true;
}


	$tdatadocuments_projets[".NCSearch"] = true;



$tdatadocuments_projets[".shortTableName"] = "documents_projets";
$tdatadocuments_projets[".nSecOptions"] = 0;

$tdatadocuments_projets[".mainTableOwnerID"] = "";
$tdatadocuments_projets[".entityType"] = 1;
$tdatadocuments_projets[".connId"] = "sigpppportefeuilleatlocalhost";


$tdatadocuments_projets[".strOriginalTableName"] = "document_projet";

	



$tdatadocuments_projets[".showAddInPopup"] = false;

$tdatadocuments_projets[".showEditInPopup"] = false;

$tdatadocuments_projets[".showViewInPopup"] = false;

$tdatadocuments_projets[".listAjax"] = false;
//	temporary
//$tdatadocuments_projets[".listAjax"] = false;

	$tdatadocuments_projets[".audit"] = false;

	$tdatadocuments_projets[".locking"] = false;


$pages = $tdatadocuments_projets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadocuments_projets[".edit"] = true;
	$tdatadocuments_projets[".afterEditAction"] = 1;
	$tdatadocuments_projets[".closePopupAfterEdit"] = 1;
	$tdatadocuments_projets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadocuments_projets[".add"] = true;
$tdatadocuments_projets[".afterAddAction"] = 1;
$tdatadocuments_projets[".closePopupAfterAdd"] = 1;
$tdatadocuments_projets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadocuments_projets[".list"] = true;
}



$tdatadocuments_projets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadocuments_projets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadocuments_projets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadocuments_projets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadocuments_projets[".printFriendly"] = true;
}



$tdatadocuments_projets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadocuments_projets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadocuments_projets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadocuments_projets[".isUseAjaxSuggest"] = true;





$tdatadocuments_projets[".ajaxCodeSnippetAdded"] = false;

$tdatadocuments_projets[".buttonsAdded"] = false;

$tdatadocuments_projets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadocuments_projets[".isUseTimeForSearch"] = false;


$tdatadocuments_projets[".badgeColor"] = "db7093";


$tdatadocuments_projets[".allSearchFields"] = array();
$tdatadocuments_projets[".filterFields"] = array();
$tdatadocuments_projets[".requiredSearchFields"] = array();

$tdatadocuments_projets[".googleLikeFields"] = array();
$tdatadocuments_projets[".googleLikeFields"][] = "id";
$tdatadocuments_projets[".googleLikeFields"][] = "id_projet";
$tdatadocuments_projets[".googleLikeFields"][] = "nom_fichier";
$tdatadocuments_projets[".googleLikeFields"][] = "type_document";
$tdatadocuments_projets[".googleLikeFields"][] = "auteur_id";
$tdatadocuments_projets[".googleLikeFields"][] = "chemin";
$tdatadocuments_projets[".googleLikeFields"][] = "date_ajout";



$tdatadocuments_projets[".tableType"] = "list";

$tdatadocuments_projets[".printerPageOrientation"] = 0;
$tdatadocuments_projets[".nPrinterPageScale"] = 100;

$tdatadocuments_projets[".nPrinterSplitRecords"] = 40;

$tdatadocuments_projets[".geocodingEnabled"] = false;










$tdatadocuments_projets[".pageSize"] = 20;

$tdatadocuments_projets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadocuments_projets[".strOrderBy"] = $tstrOrderBy;

$tdatadocuments_projets[".orderindexes"] = array();


$tdatadocuments_projets[".sqlHead"] = "SELECT id,  	id_projet,  	nom_fichier,  	type_document,  	auteur_id,  	chemin,  	date_ajout";
$tdatadocuments_projets[".sqlFrom"] = "FROM document_projet";
$tdatadocuments_projets[".sqlWhereExpr"] = "";
$tdatadocuments_projets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadocuments_projets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadocuments_projets[".arrGroupsPerPage"] = $arrGPP;

$tdatadocuments_projets[".highlightSearchResults"] = true;

$tableKeysdocuments_projets = array();
$tableKeysdocuments_projets[] = "id";
$tdatadocuments_projets[".Keys"] = $tableKeysdocuments_projets;


$tdatadocuments_projets[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "document_projet";
	$fdata["Label"] = GetFieldLabel("Documents_projets","id");
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


	$tdatadocuments_projets["id"] = $fdata;
		$tdatadocuments_projets[".searchableFields"][] = "id";
//	id_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_projet";
	$fdata["GoodName"] = "id_projet";
	$fdata["ownerTable"] = "document_projet";
	$fdata["Label"] = GetFieldLabel("Documents_projets","id_projet");
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


	$tdatadocuments_projets["id_projet"] = $fdata;
		$tdatadocuments_projets[".searchableFields"][] = "id_projet";
//	nom_fichier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nom_fichier";
	$fdata["GoodName"] = "nom_fichier";
	$fdata["ownerTable"] = "document_projet";
	$fdata["Label"] = GetFieldLabel("Documents_projets","nom_fichier");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_fichier";

		$fdata["sourceSingle"] = "nom_fichier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_fichier";

	
	
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


	$tdatadocuments_projets["nom_fichier"] = $fdata;
		$tdatadocuments_projets[".searchableFields"][] = "nom_fichier";
//	type_document
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type_document";
	$fdata["GoodName"] = "type_document";
	$fdata["ownerTable"] = "document_projet";
	$fdata["Label"] = GetFieldLabel("Documents_projets","type_document");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "type_document";

		$fdata["sourceSingle"] = "type_document";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_document";

	
	
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
	$edata["LookupValues"][] = "Livrable";
	$edata["LookupValues"][] = "Justificatif";
	$edata["LookupValues"][] = "Decision";
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


	$tdatadocuments_projets["type_document"] = $fdata;
		$tdatadocuments_projets[".searchableFields"][] = "type_document";
//	auteur_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "auteur_id";
	$fdata["GoodName"] = "auteur_id";
	$fdata["ownerTable"] = "document_projet";
	$fdata["Label"] = GetFieldLabel("Documents_projets","auteur_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "auteur_id";

		$fdata["sourceSingle"] = "auteur_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "auteur_id";

	
	
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


	$tdatadocuments_projets["auteur_id"] = $fdata;
		$tdatadocuments_projets[".searchableFields"][] = "auteur_id";
//	chemin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "chemin";
	$fdata["GoodName"] = "chemin";
	$fdata["ownerTable"] = "document_projet";
	$fdata["Label"] = GetFieldLabel("Documents_projets","chemin");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "chemin";

		$fdata["sourceSingle"] = "chemin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chemin";

	
	
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


	$tdatadocuments_projets["chemin"] = $fdata;
		$tdatadocuments_projets[".searchableFields"][] = "chemin";
//	date_ajout
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "date_ajout";
	$fdata["GoodName"] = "date_ajout";
	$fdata["ownerTable"] = "document_projet";
	$fdata["Label"] = GetFieldLabel("Documents_projets","date_ajout");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_ajout";

		$fdata["sourceSingle"] = "date_ajout";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_ajout";

	
	
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


	$tdatadocuments_projets["date_ajout"] = $fdata;
		$tdatadocuments_projets[".searchableFields"][] = "date_ajout";


$tables_data["Documents_projets"]=&$tdatadocuments_projets;
$field_labels["Documents_projets"] = &$fieldLabelsdocuments_projets;
$fieldToolTips["Documents_projets"] = &$fieldToolTipsdocuments_projets;
$placeHolders["Documents_projets"] = &$placeHoldersdocuments_projets;
$page_titles["Documents_projets"] = &$pageTitlesdocuments_projets;


changeTextControlsToDate( "Documents_projets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Documents_projets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Documents_projets"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="projet";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Projets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "projets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Documents_projets"][0] = $masterParams;
				$masterTablesData["Documents_projets"][0]["masterKeys"] = array();
	$masterTablesData["Documents_projets"][0]["masterKeys"][]="id";
				$masterTablesData["Documents_projets"][0]["detailKeys"] = array();
	$masterTablesData["Documents_projets"][0]["detailKeys"][]="id_projet";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_documents_projets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_projet,  	nom_fichier,  	type_document,  	auteur_id,  	chemin,  	date_ajout";
$proto0["m_strFrom"] = "FROM document_projet";
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
	"m_strTable" => "document_projet",
	"m_srcTableName" => "Documents_projets"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Documents_projets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_projet",
	"m_strTable" => "document_projet",
	"m_srcTableName" => "Documents_projets"
));

$proto8["m_sql"] = "id_projet";
$proto8["m_srcTableName"] = "Documents_projets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_fichier",
	"m_strTable" => "document_projet",
	"m_srcTableName" => "Documents_projets"
));

$proto10["m_sql"] = "nom_fichier";
$proto10["m_srcTableName"] = "Documents_projets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "type_document",
	"m_strTable" => "document_projet",
	"m_srcTableName" => "Documents_projets"
));

$proto12["m_sql"] = "type_document";
$proto12["m_srcTableName"] = "Documents_projets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "auteur_id",
	"m_strTable" => "document_projet",
	"m_srcTableName" => "Documents_projets"
));

$proto14["m_sql"] = "auteur_id";
$proto14["m_srcTableName"] = "Documents_projets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "chemin",
	"m_strTable" => "document_projet",
	"m_srcTableName" => "Documents_projets"
));

$proto16["m_sql"] = "chemin";
$proto16["m_srcTableName"] = "Documents_projets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "date_ajout",
	"m_strTable" => "document_projet",
	"m_srcTableName" => "Documents_projets"
));

$proto18["m_sql"] = "date_ajout";
$proto18["m_srcTableName"] = "Documents_projets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "document_projet";
$proto21["m_srcTableName"] = "Documents_projets";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "id_projet";
$proto21["m_columns"][] = "nom_fichier";
$proto21["m_columns"][] = "type_document";
$proto21["m_columns"][] = "auteur_id";
$proto21["m_columns"][] = "chemin";
$proto21["m_columns"][] = "date_ajout";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "document_projet";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Documents_projets";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Documents_projets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_documents_projets = createSqlQuery_documents_projets();


	
		;

							

$tdatadocuments_projets[".sqlquery"] = $queryData_documents_projets;



$tdatadocuments_projets[".hasEvents"] = false;

?>