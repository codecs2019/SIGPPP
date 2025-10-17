<?php
$tdataprojets = array();
$tdataprojets[".searchableFields"] = array();
$tdataprojets[".ShortName"] = "projets";
$tdataprojets[".OwnerID"] = "";
$tdataprojets[".OriginalTable"] = "projet";


$tdataprojets[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprojets[".originalPagesByType"] = $tdataprojets[".pagesByType"];
$tdataprojets[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprojets[".originalPages"] = $tdataprojets[".pages"];
$tdataprojets[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprojets[".originalDefaultPages"] = $tdataprojets[".defaultPages"];

//	field labels
$fieldLabelsprojets = array();
$fieldToolTipsprojets = array();
$pageTitlesprojets = array();
$placeHoldersprojets = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsprojets["French"] = array();
	$fieldToolTipsprojets["French"] = array();
	$placeHoldersprojets["French"] = array();
	$pageTitlesprojets["French"] = array();
	$fieldLabelsprojets["French"]["categorie"] = "Categorie";
	$fieldToolTipsprojets["French"]["categorie"] = "";
	$placeHoldersprojets["French"]["categorie"] = "";
	$fieldLabelsprojets["French"]["chef_projet_id"] = "Chef Projet Id";
	$fieldToolTipsprojets["French"]["chef_projet_id"] = "";
	$placeHoldersprojets["French"]["chef_projet_id"] = "";
	$fieldLabelsprojets["French"]["code_projet"] = "Code Projet";
	$fieldToolTipsprojets["French"]["code_projet"] = "";
	$placeHoldersprojets["French"]["code_projet"] = "";
	$fieldLabelsprojets["French"]["date_debut"] = "Date Debut";
	$fieldToolTipsprojets["French"]["date_debut"] = "";
	$placeHoldersprojets["French"]["date_debut"] = "";
	$fieldLabelsprojets["French"]["date_fin"] = "Date Fin";
	$fieldToolTipsprojets["French"]["date_fin"] = "";
	$placeHoldersprojets["French"]["date_fin"] = "";
	$fieldLabelsprojets["French"]["description"] = "Description";
	$fieldToolTipsprojets["French"]["description"] = "";
	$placeHoldersprojets["French"]["description"] = "";
	$fieldLabelsprojets["French"]["direction_responsable"] = "Direction Responsable";
	$fieldToolTipsprojets["French"]["direction_responsable"] = "";
	$placeHoldersprojets["French"]["direction_responsable"] = "";
	$fieldLabelsprojets["French"]["id"] = "Id";
	$fieldToolTipsprojets["French"]["id"] = "";
	$placeHoldersprojets["French"]["id"] = "";
	$fieldLabelsprojets["French"]["id_programme"] = "Id Programme";
	$fieldToolTipsprojets["French"]["id_programme"] = "";
	$placeHoldersprojets["French"]["id_programme"] = "";
	$fieldLabelsprojets["French"]["localisation"] = "Localisation";
	$fieldToolTipsprojets["French"]["localisation"] = "";
	$placeHoldersprojets["French"]["localisation"] = "";
	$fieldLabelsprojets["French"]["niveau_maturite"] = "Niveau Maturite";
	$fieldToolTipsprojets["French"]["niveau_maturite"] = "";
	$placeHoldersprojets["French"]["niveau_maturite"] = "";
	$fieldLabelsprojets["French"]["nom"] = "Nom";
	$fieldToolTipsprojets["French"]["nom"] = "";
	$placeHoldersprojets["French"]["nom"] = "";
	$fieldLabelsprojets["French"]["objectif"] = "Objectif";
	$fieldToolTipsprojets["French"]["objectif"] = "";
	$placeHoldersprojets["French"]["objectif"] = "";
	$fieldLabelsprojets["French"]["statut"] = "Statut";
	$fieldToolTipsprojets["French"]["statut"] = "";
	$placeHoldersprojets["French"]["statut"] = "";
	if (count($fieldToolTipsprojets["French"]))
		$tdataprojets[".isUseToolTips"] = true;
}


	$tdataprojets[".NCSearch"] = true;



$tdataprojets[".shortTableName"] = "projets";
$tdataprojets[".nSecOptions"] = 0;

$tdataprojets[".mainTableOwnerID"] = "";
$tdataprojets[".entityType"] = 1;
$tdataprojets[".connId"] = "sigpppportefeuilleatlocalhost";


$tdataprojets[".strOriginalTableName"] = "projet";

	



$tdataprojets[".showAddInPopup"] = false;

$tdataprojets[".showEditInPopup"] = false;

$tdataprojets[".showViewInPopup"] = false;

$tdataprojets[".listAjax"] = false;
//	temporary
//$tdataprojets[".listAjax"] = false;

	$tdataprojets[".audit"] = false;

	$tdataprojets[".locking"] = false;


$pages = $tdataprojets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojets[".edit"] = true;
	$tdataprojets[".afterEditAction"] = 1;
	$tdataprojets[".closePopupAfterEdit"] = 1;
	$tdataprojets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprojets[".add"] = true;
$tdataprojets[".afterAddAction"] = 1;
$tdataprojets[".closePopupAfterAdd"] = 1;
$tdataprojets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojets[".list"] = true;
}



$tdataprojets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojets[".printFriendly"] = true;
}



$tdataprojets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojets[".isUseAjaxSuggest"] = true;





$tdataprojets[".ajaxCodeSnippetAdded"] = false;

$tdataprojets[".buttonsAdded"] = false;

$tdataprojets[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprojets[".isUseTimeForSearch"] = false;


$tdataprojets[".badgeColor"] = "cd853f";


$tdataprojets[".allSearchFields"] = array();
$tdataprojets[".filterFields"] = array();
$tdataprojets[".requiredSearchFields"] = array();

$tdataprojets[".googleLikeFields"] = array();
$tdataprojets[".googleLikeFields"][] = "id";
$tdataprojets[".googleLikeFields"][] = "id_programme";
$tdataprojets[".googleLikeFields"][] = "code_projet";
$tdataprojets[".googleLikeFields"][] = "nom";
$tdataprojets[".googleLikeFields"][] = "description";
$tdataprojets[".googleLikeFields"][] = "categorie";
$tdataprojets[".googleLikeFields"][] = "direction_responsable";
$tdataprojets[".googleLikeFields"][] = "chef_projet_id";
$tdataprojets[".googleLikeFields"][] = "niveau_maturite";
$tdataprojets[".googleLikeFields"][] = "statut";
$tdataprojets[".googleLikeFields"][] = "date_debut";
$tdataprojets[".googleLikeFields"][] = "date_fin";
$tdataprojets[".googleLikeFields"][] = "localisation";
$tdataprojets[".googleLikeFields"][] = "objectif";



$tdataprojets[".tableType"] = "list";

$tdataprojets[".printerPageOrientation"] = 0;
$tdataprojets[".nPrinterPageScale"] = 100;

$tdataprojets[".nPrinterSplitRecords"] = 40;

$tdataprojets[".geocodingEnabled"] = false;










$tdataprojets[".pageSize"] = 20;

$tdataprojets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojets[".strOrderBy"] = $tstrOrderBy;

$tdataprojets[".orderindexes"] = array();


$tdataprojets[".sqlHead"] = "SELECT id,  	id_programme,  	code_projet,  	nom,  	description,  	categorie,  	direction_responsable,  	chef_projet_id,  	niveau_maturite,  	statut,  	date_debut,  	date_fin,  	localisation,  	objectif";
$tdataprojets[".sqlFrom"] = "FROM projet";
$tdataprojets[".sqlWhereExpr"] = "";
$tdataprojets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojets[".arrGroupsPerPage"] = $arrGPP;

$tdataprojets[".highlightSearchResults"] = true;

$tableKeysprojets = array();
$tableKeysprojets[] = "id";
$tdataprojets[".Keys"] = $tableKeysprojets;


$tdataprojets[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","id");
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


	$tdataprojets["id"] = $fdata;
		$tdataprojets[".searchableFields"][] = "id";
//	id_programme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_programme";
	$fdata["GoodName"] = "id_programme";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","id_programme");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_programme";

		$fdata["sourceSingle"] = "id_programme";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_programme";

	
	
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


	$tdataprojets["id_programme"] = $fdata;
		$tdataprojets[".searchableFields"][] = "id_programme";
//	code_projet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "code_projet";
	$fdata["GoodName"] = "code_projet";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","code_projet");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "code_projet";

		$fdata["sourceSingle"] = "code_projet";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "code_projet";

	
	
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


	$tdataprojets["code_projet"] = $fdata;
		$tdataprojets[".searchableFields"][] = "code_projet";
//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","nom");
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


	$tdataprojets["nom"] = $fdata;
		$tdataprojets[".searchableFields"][] = "nom";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","description");
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


	$tdataprojets["description"] = $fdata;
		$tdataprojets[".searchableFields"][] = "description";
//	categorie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "categorie";
	$fdata["GoodName"] = "categorie";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","categorie");
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


	$tdataprojets["categorie"] = $fdata;
		$tdataprojets[".searchableFields"][] = "categorie";
//	direction_responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "direction_responsable";
	$fdata["GoodName"] = "direction_responsable";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","direction_responsable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "direction_responsable";

		$fdata["sourceSingle"] = "direction_responsable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direction_responsable";

	
	
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


	$tdataprojets["direction_responsable"] = $fdata;
		$tdataprojets[".searchableFields"][] = "direction_responsable";
//	chef_projet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "chef_projet_id";
	$fdata["GoodName"] = "chef_projet_id";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","chef_projet_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "chef_projet_id";

		$fdata["sourceSingle"] = "chef_projet_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chef_projet_id";

	
	
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


	$tdataprojets["chef_projet_id"] = $fdata;
		$tdataprojets[".searchableFields"][] = "chef_projet_id";
//	niveau_maturite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "niveau_maturite";
	$fdata["GoodName"] = "niveau_maturite";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","niveau_maturite");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "niveau_maturite";

		$fdata["sourceSingle"] = "niveau_maturite";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "niveau_maturite";

	
	
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
	$edata["LookupValues"][] = "Etude";
	$edata["LookupValues"][] = "Developpement";
	$edata["LookupValues"][] = "Deploiement";
	$edata["LookupValues"][] = "Exploitation";
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


	$tdataprojets["niveau_maturite"] = $fdata;
		$tdataprojets[".searchableFields"][] = "niveau_maturite";
//	statut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "statut";
	$fdata["GoodName"] = "statut";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","statut");
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


	$tdataprojets["statut"] = $fdata;
		$tdataprojets[".searchableFields"][] = "statut";
//	date_debut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "date_debut";
	$fdata["GoodName"] = "date_debut";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","date_debut");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "date_debut";

		$fdata["sourceSingle"] = "date_debut";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_debut";

	
	
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


	$tdataprojets["date_debut"] = $fdata;
		$tdataprojets[".searchableFields"][] = "date_debut";
//	date_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "date_fin";
	$fdata["GoodName"] = "date_fin";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","date_fin");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "date_fin";

		$fdata["sourceSingle"] = "date_fin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_fin";

	
	
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


	$tdataprojets["date_fin"] = $fdata;
		$tdataprojets[".searchableFields"][] = "date_fin";
//	localisation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "localisation";
	$fdata["GoodName"] = "localisation";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","localisation");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "localisation";

		$fdata["sourceSingle"] = "localisation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "localisation";

	
	
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


	$tdataprojets["localisation"] = $fdata;
		$tdataprojets[".searchableFields"][] = "localisation";
//	objectif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "objectif";
	$fdata["GoodName"] = "objectif";
	$fdata["ownerTable"] = "projet";
	$fdata["Label"] = GetFieldLabel("Projets","objectif");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "objectif";

		$fdata["sourceSingle"] = "objectif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "objectif";

	
	
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


	$tdataprojets["objectif"] = $fdata;
		$tdataprojets[".searchableFields"][] = "objectif";


$tables_data["Projets"]=&$tdataprojets;
$field_labels["Projets"] = &$fieldLabelsprojets;
$fieldToolTips["Projets"] = &$fieldToolTipsprojets;
$placeHolders["Projets"] = &$placeHoldersprojets;
$page_titles["Projets"] = &$pageTitlesprojets;


changeTextControlsToDate( "Projets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Projets"] = array();
//	Activites
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Activites";
		$detailsParam["dOriginalTable"] = "activite";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "activites";
	$detailsParam["dCaptionTable"] = GetTableCaption("Activites");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Projets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Projets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Projets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["detailKeys"][]="id";
//	Archivages
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Archivages";
		$detailsParam["dOriginalTable"] = "archivage";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "archivages";
	$detailsParam["dCaptionTable"] = GetTableCaption("Archivages");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Projets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Projets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Projets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["detailKeys"][]="id_projet";
//	Budgets
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Budgets";
		$detailsParam["dOriginalTable"] = "budget";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "budgets";
	$detailsParam["dCaptionTable"] = GetTableCaption("Budgets");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Projets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Projets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Projets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["detailKeys"][]="id_projet";
//	Depenses
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Depenses";
		$detailsParam["dOriginalTable"] = "depense";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "depenses";
	$detailsParam["dCaptionTable"] = GetTableCaption("Depenses");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Projets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Projets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Projets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["detailKeys"][]="id_projet";
//	Documents_projets
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Documents_projets";
		$detailsParam["dOriginalTable"] = "document_projet";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "documents_projets";
	$detailsParam["dCaptionTable"] = GetTableCaption("Documents_projets");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Projets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Projets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Projets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["detailKeys"][]="id_projet";
//	Indicateurs
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Indicateurs";
		$detailsParam["dOriginalTable"] = "indicateur";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "indicateurs";
	$detailsParam["dCaptionTable"] = GetTableCaption("Indicateurs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Projets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Projets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Projets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["detailKeys"][]="id_projet";
//	Raci
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Raci";
		$detailsParam["dOriginalTable"] = "raci";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "raci";
	$detailsParam["dCaptionTable"] = GetTableCaption("Raci");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Projets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Projets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Projets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["detailKeys"][]="id_projet";
//	vue_projets_derive
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="vue_projets_derive";
		$detailsParam["dOriginalTable"] = "vue_projets_derive";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vue_projets_derive";
	$detailsParam["dCaptionTable"] = GetTableCaption("vue_projets_derive");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Projets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Projets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Projets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["detailKeys"][]="projet_id";
//	vue_suivi_budgetaire
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="vue_suivi_budgetaire";
		$detailsParam["dOriginalTable"] = "vue_suivi_budgetaire";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vue_suivi_budgetaire";
	$detailsParam["dCaptionTable"] = GetTableCaption("vue_suivi_budgetaire");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Projets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Projets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Projets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Projets"][$dIndex]["detailKeys"][]="projet_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Projets"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="programme";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Programmes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "programmes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Projets"][0] = $masterParams;
				$masterTablesData["Projets"][0]["masterKeys"] = array();
	$masterTablesData["Projets"][0]["masterKeys"][]="id";
				$masterTablesData["Projets"][0]["detailKeys"] = array();
	$masterTablesData["Projets"][0]["detailKeys"][]="id_programme";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_programme,  	code_projet,  	nom,  	description,  	categorie,  	direction_responsable,  	chef_projet_id,  	niveau_maturite,  	statut,  	date_debut,  	date_fin,  	localisation,  	objectif";
$proto0["m_strFrom"] = "FROM projet";
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
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Projets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_programme",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto8["m_sql"] = "id_programme";
$proto8["m_srcTableName"] = "Projets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "code_projet",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto10["m_sql"] = "code_projet";
$proto10["m_srcTableName"] = "Projets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nom",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto12["m_sql"] = "nom";
$proto12["m_srcTableName"] = "Projets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto14["m_sql"] = "description";
$proto14["m_srcTableName"] = "Projets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "categorie",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto16["m_sql"] = "categorie";
$proto16["m_srcTableName"] = "Projets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "direction_responsable",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto18["m_sql"] = "direction_responsable";
$proto18["m_srcTableName"] = "Projets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "chef_projet_id",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto20["m_sql"] = "chef_projet_id";
$proto20["m_srcTableName"] = "Projets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "niveau_maturite",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto22["m_sql"] = "niveau_maturite";
$proto22["m_srcTableName"] = "Projets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "statut",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto24["m_sql"] = "statut";
$proto24["m_srcTableName"] = "Projets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "date_debut",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto26["m_sql"] = "date_debut";
$proto26["m_srcTableName"] = "Projets";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "date_fin",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto28["m_sql"] = "date_fin";
$proto28["m_srcTableName"] = "Projets";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "localisation",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto30["m_sql"] = "localisation";
$proto30["m_srcTableName"] = "Projets";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "objectif",
	"m_strTable" => "projet",
	"m_srcTableName" => "Projets"
));

$proto32["m_sql"] = "objectif";
$proto32["m_srcTableName"] = "Projets";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "projet";
$proto35["m_srcTableName"] = "Projets";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "id_programme";
$proto35["m_columns"][] = "code_projet";
$proto35["m_columns"][] = "nom";
$proto35["m_columns"][] = "description";
$proto35["m_columns"][] = "categorie";
$proto35["m_columns"][] = "direction_responsable";
$proto35["m_columns"][] = "chef_projet_id";
$proto35["m_columns"][] = "niveau_maturite";
$proto35["m_columns"][] = "statut";
$proto35["m_columns"][] = "date_debut";
$proto35["m_columns"][] = "date_fin";
$proto35["m_columns"][] = "localisation";
$proto35["m_columns"][] = "objectif";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "projet";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "Projets";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Projets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projets = createSqlQuery_projets();


	
		;

														

$tdataprojets[".sqlquery"] = $queryData_projets;



$tdataprojets[".hasEvents"] = false;

?>