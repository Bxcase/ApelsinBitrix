<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);

/***ELEMENT***/?>
<?$ElementID = $APPLICATION->IncludeComponent("bitrix:catalog.element", "",
	array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
		"META_KEYWORDS" => $arParams["DETAIL_META_KEYWORDS"],
		"META_DESCRIPTION" => $arParams["DETAIL_META_DESCRIPTION"],
		"BROWSER_TITLE" => $arParams["DETAIL_BROWSER_TITLE"],
		"SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
		"BASKET_URL" => $arParams["BASKET_URL"],
		"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
		"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
		"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
		"CHECK_SECTION_ID_VARIABLE" => (isset($arParams["DETAIL_CHECK_SECTION_ID_VARIABLE"]) ? $arParams["DETAIL_CHECK_SECTION_ID_VARIABLE"] : ""),
		"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
		"PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"PRICE_CODE" => $arParams["PRICE_CODE"],
		"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
		"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
		"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
		"PRICE_VAT_SHOW_VALUE" => $arParams["PRICE_VAT_SHOW_VALUE"],
		"USE_PRODUCT_QUANTITY" => $arParams["USE_PRODUCT_QUANTITY"],
		"PRODUCT_PROPERTIES" => $arParams["PRODUCT_PROPERTIES"],
		"ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ""),
		"PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ""),
		"LINK_IBLOCK_TYPE" => $arParams["LINK_IBLOCK_TYPE"],
		"LINK_IBLOCK_ID" => $arParams["LINK_IBLOCK_ID"],
		"LINK_PROPERTY_SID" => $arParams["LINK_PROPERTY_SID"],
		"LINK_ELEMENTS_URL" => $arParams["LINK_ELEMENTS_URL"],

		"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
		"OFFERS_FIELD_CODE" => $arParams["DETAIL_OFFERS_FIELD_CODE"],
		"OFFERS_PROPERTY_CODE" => $arParams["DETAIL_OFFERS_PROPERTY_CODE"],
		"OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
		"OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
		"OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
		"OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],

		"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
		"CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
		"CURRENCY_ID" => $arParams["CURRENCY_ID"],
		"HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
		"USE_ELEMENT_COUNTER" => $arParams["USE_ELEMENT_COUNTER"],
		"SHOW_DEACTIVATED" => $arParams["SHOW_DEACTIVATED"],
		"USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],
		
		"ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : ""),
		"ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ""),		
		"DISPLAY_COMPARE" => (isset($arParams["USE_COMPARE"]) ? $arParams["USE_COMPARE"] : ""),
		"COMPARE_PATH" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["compare"],		
		"DISABLE_INIT_JS_IN_COMPONENT" => (isset($arParams["DISABLE_INIT_JS_IN_COMPONENT"]) ? $arParams["DISABLE_INIT_JS_IN_COMPONENT"] : ""),
		"SET_VIEWED_IN_COMPONENT" => (isset($arParams["DETAIL_SET_VIEWED_IN_COMPONENT"]) ? $arParams["DETAIL_SET_VIEWED_IN_COMPONENT"] : ""),
		
		"USE_STORE" => $arParams["USE_STORE"],
		"STORE_PATH" => $arParams['STORE_PATH'],
		"MAIN_TITLE" => $arParams['MAIN_TITLE'],
		"USE_MIN_AMOUNT" => $arParams['USE_MIN_AMOUNT'],
		"MIN_AMOUNT" => $arParams['MIN_AMOUNT'],
		"STORES" => $arParams['STORES'],
		"SHOW_EMPTY_STORE" => $arParams['SHOW_EMPTY_STORE'],
		"SHOW_GENERAL_STORE_INFORMATION" => $arParams['SHOW_GENERAL_STORE_INFORMATION'],
		"USER_FIELDS" => $arParams['USER_FIELDS'],
		"FIELDS" => $arParams['FIELDS'],
		
		"DISPLAY_IMG_WIDTH"	 =>	$arParams["DISPLAY_IMG_WIDTH"],
		"DISPLAY_IMG_HEIGHT" =>	$arParams["DISPLAY_IMG_HEIGHT"],
		"DISPLAY_DETAIL_IMG_WIDTH"	 =>	$arParams["DISPLAY_DETAIL_IMG_WIDTH"],
		"DISPLAY_DETAIL_IMG_HEIGHT" =>	$arParams["DISPLAY_DETAIL_IMG_HEIGHT"],
		"DISPLAY_MORE_PHOTO_WIDTH"	 =>	$arParams["DISPLAY_MORE_PHOTO_WIDTH"],
		"DISPLAY_MORE_PHOTO_HEIGHT" =>	$arParams["DISPLAY_MORE_PHOTO_HEIGHT"],		
		"PROPERTY_CODE_MOD" => $arParams["PROPERTY_CODE_MOD"],
		"IBLOCK_TYPE_REVIEWS" => $arParams["IBLOCK_TYPE_REVIEWS"],
		"IBLOCK_ID_REVIEWS" => $arParams["IBLOCK_ID_REVIEWS"],
		"BUTTON_PAYMENTS_HREF" => $arParams["BUTTON_PAYMENTS_HREF"],
		"BUTTON_CREDIT_HREF" => $arParams["BUTTON_CREDIT_HREF"],
		"BUTTON_DELIVERY_HREF" => $arParams["BUTTON_DELIVERY_HREF"]
	),
	$component
);?>

<?/***RELATED_ITEMS***/
global $arRelPrFilter;
$arRelPrFilter = Array("SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"], "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"], "!ID" => $ElementID);
$APPLICATION->IncludeComponent("altop:catalog.top", "related",
	Array(
		"DISPLAY_IMG_WIDTH" => $arParams["DISPLAY_IMG_WIDTH"],
		"DISPLAY_IMG_HEIGHT" => $arParams["DISPLAY_IMG_HEIGHT"],
		"SHARPEN" => $arParams["SHARPEN"],
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_SORT_FIELD" => "rand",
		"ELEMENT_SORT_ORDER" => "asc",
		"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
		"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
		"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
		"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
		"DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
		"ELEMENT_COUNT" => "4",
		"LINE_ELEMENT_COUNT" => "",
		"FILTER_NAME" => "arRelPrFilter",
		"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
		"PROPERTY_CODE_MOD" => $arParams["PROPERTY_CODE_MOD"],
		"OFFERS_FIELD_CODE" => $arParams["DETAIL_OFFERS_FIELD_CODE"],
		"OFFERS_PROPERTY_CODE" => $arParams["DETAIL_OFFERS_PROPERTY_CODE"],
		"OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
		"OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
		"OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
		"OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
		"OFFERS_LIMIT" => $arParams["LIST_OFFERS_LIMIT"],
		"PRICE_CODE" => $arParams["PRICE_CODE"],
		"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
		"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
		"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
		"USE_PRODUCT_QUANTITY" => $arParams["USE_PRODUCT_QUANTITY"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
		"CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
		"CURRENCY_ID" => $arParams["CURRENCY_ID"],
		"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"]
	),
	false,
	array("HIDE_ICONS" => "Y")
);?>

<?/***BIGDATA_ITEMS***/
$arRecomData = array();
$recomCacheID = array("IBLOCK_ID" => $arParams["IBLOCK_ID"]);
$obCache = new CPHPCache();
if($obCache->InitCache($arParams["CACHE_TIME"], serialize($recomCacheID), "/catalog/recommended")) {
	$arRecomData = $obCache->GetVars();	
} elseif($obCache->StartDataCache()) {
	if(Loader::includeModule("catalog")) {
		$arSKU = CCatalogSKU::GetInfoByProductIBlock($arParams["IBLOCK_ID"]);
		$arRecomData["OFFER_IBLOCK_ID"] = (!empty($arSKU) ? $arSKU["IBLOCK_ID"] : 0);
	}
	$obCache->EndDataCache($arRecomData);
}
if(!empty($arRecomData)):	
	if(ModuleManager::isModuleInstalled("sale") && (!isset($arParams["USE_BIG_DATA"]) || $arParams["USE_BIG_DATA"] != "N")):?>
		<?$APPLICATION->IncludeComponent("bitrix:catalog.bigdata.products", ".default", 
			array(
				"DISPLAY_IMG_WIDTH" => $arParams["DISPLAY_IMG_WIDTH"],
				"DISPLAY_IMG_HEIGHT" => $arParams["DISPLAY_IMG_HEIGHT"],
				"SHARPEN" => $arParams["SHARPEN"],
				"DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
				"SHOW_POPUP" => "Y",
				"LINE_ELEMENT_COUNT" => "4",
				"TEMPLATE_THEME" => "",
				"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
				"BASKET_URL" => $arParams["BASKET_URL"],
				"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
				"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
				"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
				"ADD_PROPERTIES_TO_BASKET" => $arParams["ADD_PROPERTIES_TO_BASKET"],
				"PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
				"PARTIAL_PRODUCT_PROPERTIES" => $arParams["PARTIAL_PRODUCT_PROPERTIES"],
				"SHOW_OLD_PRICE" => "",
				"SHOW_DISCOUNT_PERCENT" => "",
				"PRICE_CODE" => $arParams["PRICE_CODE"],
				"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
				"PRODUCT_SUBSCRIPTION" => "",
				"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
				"USE_PRODUCT_QUANTITY" => $arParams["USE_PRODUCT_QUANTITY"],
				"SHOW_NAME" => "Y",
				"SHOW_IMAGE" => "Y",
				"MESS_BTN_BUY" => "",
				"MESS_BTN_DETAIL" => "",
				"MESS_BTN_SUBSCRIBE" => "",
				"MESS_NOT_AVAILABLE" => "",
				"PAGE_ELEMENT_COUNT" => "4",
				"SHOW_FROM_SECTION" => "N",
				"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"DEPTH" => "2",
				"CACHE_TYPE" => $arParams["CACHE_TYPE"],
				"CACHE_TIME" => $arParams["CACHE_TIME"],
				"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
				"SHOW_PRODUCTS_".$arParams["IBLOCK_ID"] => "Y",
				"ADDITIONAL_PICT_PROP_".$arParams["IBLOCK_ID"] => "",
				"LABEL_PROP_".$arParams["IBLOCK_ID"] => "",
				"HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
				"CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
				"CURRENCY_ID" => $arParams["CURRENCY_ID"],
				"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
				"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
				"SECTION_ELEMENT_ID" => $arResult["VARIABLES"]["SECTION_ID"],
				"SECTION_ELEMENT_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
				"ID" => $ElementID,
				"PROPERTY_CODE_".$arParams["IBLOCK_ID"] => $arParams["LIST_PROPERTY_CODE"],
				"PROPERTY_CODE_MOD" => $arParams["PROPERTY_CODE_MOD"],
				"CART_PROPERTIES_".$arParams["IBLOCK_ID"] => "",
				"RCM_TYPE" => $arParams["BIG_DATA_RCM_TYPE"],
				"OFFER_TREE_PROPS_".$arRecomData["OFFER_IBLOCK_ID"] => $arParams["DETAIL_OFFERS_PROPERTY_CODE"],
				"ADDITIONAL_PICT_PROP_".$arRecomData["OFFER_IBLOCK_ID"] => ""
			),
			false,
			array("HIDE_ICONS" => "Y")
		);?>
	<?endif;
endif;?>