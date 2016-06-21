<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ServiceService extends \Rindeal\Allegro\Client\HttpClient\SoapClientBase
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfLong' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfLong',
      'DoAddDescToItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoAddDescToItemsRequest',
      'doAddDescToItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doAddDescToItemsResponse',
      'PackageInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PackageInfoStruct',
      'ArrayOfPackageinfostruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPackageinfostruct',
      'DoAddPackageInfoToPostBuyFormRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoAddPackageInfoToPostBuyFormRequest',
      'ArrayOfString' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfString',
      'PostBuyFormPackageInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostBuyFormPackageInfoStruct',
      'doAddPackageInfoToPostBuyFormResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doAddPackageInfoToPostBuyFormResponse',
      'UserBlackListStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserBlackListStruct',
      'ArrayOfUserblackliststruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfUserblackliststruct',
      'DoAddToBlackListRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoAddToBlackListRequest',
      'UserBlackListAddResultStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserBlackListAddResultStruct',
      'ArrayOfUserblacklistaddresultstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfUserblacklistaddresultstruct',
      'doAddToBlackListResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doAddToBlackListResponse',
      'DoAddToWatchListRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoAddToWatchListRequest',
      'ItemsNotAddedStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemsNotAddedStruct',
      'ArrayOfItemsnotaddedstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemsnotaddedstruct',
      'WatchListInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\WatchListInfoStruct',
      'doAddToWatchListResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doAddToWatchListResponse',
      'PharmacyRecipientDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PharmacyRecipientDataStruct',
      'DoBidItemRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoBidItemRequest',
      'doBidItemResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doBidItemResponse',
      'ArrayOfInt' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfInt',
      'DoCancelBidItemRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoCancelBidItemRequest',
      'doCancelBidItemResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doCancelBidItemResponse',
      'DoCancelRefundFormRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoCancelRefundFormRequest',
      'doCancelRefundFormResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doCancelRefundFormResponse',
      'DoCancelRefundWarningRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoCancelRefundWarningRequest',
      'doCancelRefundWarningResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doCancelRefundWarningResponse',
      'DoCancelTransactionRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoCancelTransactionRequest',
      'doCancelTransactionResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doCancelTransactionResponse',
      'RangeIntValueStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RangeIntValueStruct',
      'RangeFloatValueStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RangeFloatValueStruct',
      'RangeDateValueStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RangeDateValueStruct',
      'FieldsValue' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FieldsValue',
      'ArrayOfFieldsvalue' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFieldsvalue',
      'VariantQuantityStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\VariantQuantityStruct',
      'ArrayOfVariantquantitystruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfVariantquantitystruct',
      'VariantStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\VariantStruct',
      'ArrayOfVariantstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfVariantstruct',
      'TagNameStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\TagNameStruct',
      'ArrayOfTagnamestruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfTagnamestruct',
      'DoChangeItemFieldsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoChangeItemFieldsRequest',
      'AmountStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\AmountStruct',
      'ItemSurchargeStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemSurchargeStruct',
      'ArrayOfItemsurchargestruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemsurchargestruct',
      'ChangedItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ChangedItemStruct',
      'doChangeItemFieldsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doChangeItemFieldsResponse',
      'DoChangePriceItemRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoChangePriceItemRequest',
      'doChangePriceItemResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doChangePriceItemResponse',
      'DoChangeQuantityItemRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoChangeQuantityItemRequest',
      'doChangeQuantityItemResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doChangeQuantityItemResponse',
      'DoCheckItemDescriptionRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoCheckItemDescriptionRequest',
      'ItemDescriptionStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemDescriptionStruct',
      'doCheckItemDescriptionResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doCheckItemDescriptionResponse',
      'DoCheckNewAuctionExtRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoCheckNewAuctionExtRequest',
      'doCheckNewAuctionExtResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doCheckNewAuctionExtResponse',
      'DoCreateItemTemplateRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoCreateItemTemplateRequest',
      'CreatedItemTemplateStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\CreatedItemTemplateStruct',
      'doCreateItemTemplateResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doCreateItemTemplateResponse',
      'SellRatingEstimationStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellRatingEstimationStruct',
      'ArrayOfSellratingestimationstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSellratingestimationstruct',
      'DoFeedbackRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoFeedbackRequest',
      'doFeedbackResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doFeedbackResponse',
      'FeedbackManyStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FeedbackManyStruct',
      'ArrayOfFeedbackmanystruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFeedbackmanystruct',
      'DoFeedbackManyRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoFeedbackManyRequest',
      'FeedbackResultStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FeedbackResultStruct',
      'ArrayOfFeedbackresultstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFeedbackresultstruct',
      'doFeedbackManyResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doFeedbackManyResponse',
      'DoFinishItemRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoFinishItemRequest',
      'doFinishItemResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doFinishItemResponse',
      'FinishItemsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FinishItemsStruct',
      'ArrayOfFinishitemsstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFinishitemsstruct',
      'DoFinishItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoFinishItemsRequest',
      'FinishFailureStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FinishFailureStruct',
      'ArrayOfFinishfailurestruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFinishfailurestruct',
      'doFinishItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doFinishItemsResponse',
      'DoGetAdminUserLicenceDateRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetAdminUserLicenceDateRequest',
      'doGetAdminUserLicenceDateResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetAdminUserLicenceDateResponse',
      'DoGetArchiveRefundsListRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetArchiveRefundsListRequest',
      'ArchiveRefundsListTypeStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArchiveRefundsListTypeStruct',
      'ArrayOfArchiverefundslisttypestruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfArchiverefundslisttypestruct',
      'doGetArchiveRefundsListResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetArchiveRefundsListResponse',
      'DoGetBidItem2Request' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetBidItem2Request',
      'BidListStruct2' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\BidListStruct2',
      'ArrayOfBidliststruct2' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfBidliststruct2',
      'doGetBidItem2Response' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetBidItem2Response',
      'DoGetBlackListUsersRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetBlackListUsersRequest',
      'BlackListStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\BlackListStruct',
      'ArrayOfBlackliststruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfBlackliststruct',
      'doGetBlackListUsersResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetBlackListUsersResponse',
      'DoGetCategoryPathRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetCategoryPathRequest',
      'CategoryData' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\CategoryData',
      'ArrayOfCategorydata' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfCategorydata',
      'doGetCategoryPathResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetCategoryPathResponse',
      'DoGetCatsDataRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetCatsDataRequest',
      'CatInfoType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\CatInfoType',
      'ArrayOfCatinfotype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfCatinfotype',
      'doGetCatsDataResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetCatsDataResponse',
      'DoGetCatsDataCountRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetCatsDataCountRequest',
      'doGetCatsDataCountResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetCatsDataCountResponse',
      'DoGetCatsDataLimitRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetCatsDataLimitRequest',
      'doGetCatsDataLimitResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetCatsDataLimitResponse',
      'DoGetCountriesRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetCountriesRequest',
      'CountryInfoType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\CountryInfoType',
      'ArrayOfCountryinfotype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfCountryinfotype',
      'doGetCountriesResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetCountriesResponse',
      'DoGetDealsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetDealsRequest',
      'DealsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DealsStruct',
      'ArrayOfDealsstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfDealsstruct',
      'doGetDealsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetDealsResponse',
      'DoGetFavouriteCategoriesRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetFavouriteCategoriesRequest',
      'FavouritesCategoriesStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FavouritesCategoriesStruct',
      'ArrayOfFavouritescategoriesstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFavouritescategoriesstruct',
      'doGetFavouriteCategoriesResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetFavouriteCategoriesResponse',
      'DoGetFavouriteSellersRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetFavouriteSellersRequest',
      'FavouritesSellersStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FavouritesSellersStruct',
      'ArrayOfFavouritessellersstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFavouritessellersstruct',
      'doGetFavouriteSellersResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetFavouriteSellersResponse',
      'DoGetFeedbackRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetFeedbackRequest',
      'FeedbackList' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FeedbackList',
      'ArrayOfFeedbacklist' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFeedbacklist',
      'doGetFeedbackResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetFeedbackResponse',
      'DoGetFilledPostBuyFormsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetFilledPostBuyFormsRequest',
      'FilledPostBuyFormsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FilledPostBuyFormsStruct',
      'doGetFilledPostBuyFormsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetFilledPostBuyFormsResponse',
      'DoGetFreeDeliveryAmountRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetFreeDeliveryAmountRequest',
      'doGetFreeDeliveryAmountResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetFreeDeliveryAmountResponse',
      'DoGetItemFieldsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetItemFieldsRequest',
      'doGetItemFieldsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetItemFieldsResponse',
      'DoGetItemTemplatesRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetItemTemplatesRequest',
      'ItemTemplateListStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemTemplateListStruct',
      'ArrayOfItemtemplateliststruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemtemplateliststruct',
      'ItemTemplatesStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemTemplatesStruct',
      'doGetItemTemplatesResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetItemTemplatesResponse',
      'ItemGetImage' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemGetImage',
      'ArrayOfItemgetimage' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemgetimage',
      'DoGetItemsImagesRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetItemsImagesRequest',
      'ItemImageList' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemImageList',
      'ArrayOfItemimagelist' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemimagelist',
      'ItemImagesStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemImagesStruct',
      'ArrayOfItemimagesstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemimagesstruct',
      'doGetItemsImagesResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetItemsImagesResponse',
      'DoGetItemsInfoRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetItemsInfoRequest',
      'DurationInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DurationInfoStruct',
      'ItemInfo' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemInfo',
      'ItemCatList' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemCatList',
      'ArrayOfItemcatlist' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemcatlist',
      'AttribStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\AttribStruct',
      'ArrayOfAttribstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfAttribstruct',
      'FulfillmentTimeStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FulfillmentTimeStruct',
      'PostageStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostageStruct',
      'ArrayOfPostagestruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPostagestruct',
      'ItemPaymentOptions' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemPaymentOptions',
      'CompanyInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\CompanyInfoStruct',
      'ProductParametersStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ProductParametersStruct',
      'ArrayOfProductparametersstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfProductparametersstruct',
      'ProductParametersGroupStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ProductParametersGroupStruct',
      'ArrayOfProductparametersgroupstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfProductparametersgroupstruct',
      'ProductStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ProductStruct',
      'ItemInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemInfoStruct',
      'ArrayOfIteminfostruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfIteminfostruct',
      'doGetItemsInfoResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetItemsInfoResponse',
      'RangeValueType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RangeValueType',
      'FilterOptionsType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FilterOptionsType',
      'ArrayOfFilteroptionstype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFilteroptionstype',
      'SortOptionsType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SortOptionsType',
      'DoGetItemsListRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetItemsListRequest',
      'UserInfoType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserInfoType',
      'PriceInfoType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PriceInfoType',
      'ArrayOfPriceinfotype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPriceinfotype',
      'PhotoInfoType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PhotoInfoType',
      'ArrayOfPhotoinfotype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPhotoinfotype',
      'ParameterInfoType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ParameterInfoType',
      'ArrayOfParameterinfotype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfParameterinfotype',
      'AdvertInfoType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\AdvertInfoType',
      'ItemsListType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemsListType',
      'ArrayOfItemslisttype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemslisttype',
      'CategoryTreeType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\CategoryTreeType',
      'ArrayOfCategorytreetype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfCategorytreetype',
      'CategoryPathType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\CategoryPathType',
      'ArrayOfCategorypathtype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfCategorypathtype',
      'CategoriesListType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\CategoriesListType',
      'FilterValueType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FilterValueType',
      'ArrayOfFiltervaluetype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFiltervaluetype',
      'FilterRelationType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FilterRelationType',
      'FiltersListType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FiltersListType',
      'ArrayOfFilterslisttype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFilterslisttype',
      'doGetItemsListResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetItemsListResponse',
      'DoGetMessageToBuyerRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMessageToBuyerRequest',
      'MessageToBuyerStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\MessageToBuyerStruct',
      'doGetMessageToBuyerResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMessageToBuyerResponse',
      'DoGetMyAddressesRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyAddressesRequest',
      'AddressUserDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\AddressUserDataStruct',
      'AddressInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\AddressInfoStruct',
      'ArrayOfAddressinfostruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfAddressinfostruct',
      'doGetMyAddressesResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyAddressesResponse',
      'SortOptionsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SortOptionsStruct',
      'DoGetMyBidItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyBidItemsRequest',
      'ItemPriceStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemPriceStruct',
      'ArrayOfItempricestruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItempricestruct',
      'UserInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserInfoStruct',
      'BidItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\BidItemStruct',
      'ArrayOfBiditemstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfBiditemstruct',
      'doGetMyBidItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyBidItemsResponse',
      'DoGetMyCurrentShipmentPriceTypeRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyCurrentShipmentPriceTypeRequest',
      'doGetMyCurrentShipmentPriceTypeResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyCurrentShipmentPriceTypeResponse',
      'DoGetMyDataRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyDataRequest',
      'UserDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserDataStruct',
      'InvoiceDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\InvoiceDataStruct',
      'CompanyExtraDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\CompanyExtraDataStruct',
      'CompanySecondAddressStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\CompanySecondAddressStruct',
      'PharmacyDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PharmacyDataStruct',
      'AlcoholDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\AlcoholDataStruct',
      'RelatedPersonsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RelatedPersonsStruct',
      'doGetMyDataResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyDataResponse',
      'FutureFilterOptionsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FutureFilterOptionsStruct',
      'DoGetMyFutureItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyFutureItemsRequest',
      'FutureItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FutureItemStruct',
      'ArrayOfFutureitemstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfFutureitemstruct',
      'doGetMyFutureItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyFutureItemsResponse',
      'DoGetMyIncomingPaymentsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyIncomingPaymentsRequest',
      'PaymentDetailsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PaymentDetailsStruct',
      'ArrayOfPaymentdetailsstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPaymentdetailsstruct',
      'UserIncomingPaymentStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserIncomingPaymentStruct',
      'ArrayOfUserincomingpaymentstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfUserincomingpaymentstruct',
      'doGetMyIncomingPaymentsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyIncomingPaymentsResponse',
      'DoGetMyIncomingPaymentsRefundsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyIncomingPaymentsRefundsRequest',
      'UserIncomingPaymentRefundsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserIncomingPaymentRefundsStruct',
      'ArrayOfUserincomingpaymentrefundsstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfUserincomingpaymentrefundsstruct',
      'doGetMyIncomingPaymentsRefundsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyIncomingPaymentsRefundsResponse',
      'FilterPriceStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\FilterPriceStruct',
      'NotSoldFilterOptionsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\NotSoldFilterOptionsStruct',
      'DoGetMyNotSoldItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyNotSoldItemsRequest',
      'NotSoldItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\NotSoldItemStruct',
      'ArrayOfNotsolditemstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfNotsolditemstruct',
      'doGetMyNotSoldItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyNotSoldItemsResponse',
      'DoGetMyNotWonItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyNotWonItemsRequest',
      'NotWonItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\NotWonItemStruct',
      'ArrayOfNotwonitemstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfNotwonitemstruct',
      'doGetMyNotWonItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyNotWonItemsResponse',
      'DoGetMyPaymentsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyPaymentsRequest',
      'PaymentItemsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PaymentItemsStruct',
      'ArrayOfPaymentitemsstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPaymentitemsstruct',
      'PaymentSellersStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PaymentSellersStruct',
      'ArrayOfPaymentsellersstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPaymentsellersstruct',
      'UserPaymentStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserPaymentStruct',
      'ArrayOfUserpaymentstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfUserpaymentstruct',
      'doGetMyPaymentsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyPaymentsResponse',
      'DoGetMyPaymentsInfoRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyPaymentsInfoRequest',
      'PaymentsUserDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PaymentsUserDataStruct',
      'PayoutAutoFrequencyStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PayoutAutoFrequencyStruct',
      'PayoutAutoSettingsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PayoutAutoSettingsStruct',
      'PaymentsPayoutStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PaymentsPayoutStruct',
      'PaymentsInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PaymentsInfoStruct',
      'doGetMyPaymentsInfoResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyPaymentsInfoResponse',
      'DoGetMyPaymentsRefundsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyPaymentsRefundsRequest',
      'UserPaymentRefundsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserPaymentRefundsStruct',
      'ArrayOfUserpaymentrefundsstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfUserpaymentrefundsstruct',
      'doGetMyPaymentsRefundsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyPaymentsRefundsResponse',
      'DoGetMyPayoutsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyPayoutsRequest',
      'UserPayoutStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserPayoutStruct',
      'ArrayOfUserpayoutstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfUserpayoutstruct',
      'doGetMyPayoutsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyPayoutsResponse',
      'SellFilterOptionsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellFilterOptionsStruct',
      'DoGetMySellItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMySellItemsRequest',
      'SellItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellItemStruct',
      'ArrayOfSellitemstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSellitemstruct',
      'doGetMySellItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMySellItemsResponse',
      'DoGetMySellRatingRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMySellRatingRequest',
      'SellRatingAverageStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellRatingAverageStruct',
      'ArrayOfSellratingaveragestruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSellratingaveragestruct',
      'SellRatingReasonSumStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellRatingReasonSumStruct',
      'ArrayOfSellratingreasonsumstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSellratingreasonsumstruct',
      'SellRatingDetailStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellRatingDetailStruct',
      'ArrayOfSellratingdetailstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSellratingdetailstruct',
      'SellRatingStatsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellRatingStatsStruct',
      'ArrayOfSellratingstatsstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSellratingstatsstruct',
      'SellRatingAveragePerMonthStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellRatingAveragePerMonthStruct',
      'ArrayOfSellratingaveragepermonthstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSellratingaveragepermonthstruct',
      'doGetMySellRatingResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMySellRatingResponse',
      'SoldFilterOptionsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SoldFilterOptionsStruct',
      'DoGetMySoldItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMySoldItemsRequest',
      'SoldItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SoldItemStruct',
      'ArrayOfSolditemstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSolditemstruct',
      'doGetMySoldItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMySoldItemsResponse',
      'DoGetMyWatchItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyWatchItemsRequest',
      'ItemReminderStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemReminderStruct',
      'ArrayOfItemreminderstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemreminderstruct',
      'WatchItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\WatchItemStruct',
      'ArrayOfWatchitemstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfWatchitemstruct',
      'doGetMyWatchItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyWatchItemsResponse',
      'DoGetMyWatchedItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyWatchedItemsRequest',
      'WatchedItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\WatchedItemStruct',
      'ArrayOfWatcheditemstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfWatcheditemstruct',
      'doGetMyWatchedItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyWatchedItemsResponse',
      'DoGetMyWonItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetMyWonItemsRequest',
      'WonItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\WonItemStruct',
      'ArrayOfWonitemstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfWonitemstruct',
      'doGetMyWonItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetMyWonItemsResponse',
      'DoGetPaymentDataRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetPaymentDataRequest',
      'BillingDataType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\BillingDataType',
      'ArrayOfBillingdatatype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfBillingdatatype',
      'doGetPaymentDataResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetPaymentDataResponse',
      'DoGetPaymentMethodsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetPaymentMethodsRequest',
      'PaymentMethodStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PaymentMethodStruct',
      'ArrayOfPaymentmethodstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPaymentmethodstruct',
      'doGetPaymentMethodsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetPaymentMethodsResponse',
      'DoGetPostBuyDataRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetPostBuyDataRequest',
      'UserSentToDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserSentToDataStruct',
      'UserPostBuyDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\UserPostBuyDataStruct',
      'ArrayOfUserpostbuydatastruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfUserpostbuydatastruct',
      'ItemPostBuyDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemPostBuyDataStruct',
      'ArrayOfItempostbuydatastruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItempostbuydatastruct',
      'doGetPostBuyDataResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetPostBuyDataResponse',
      'DoGetPostBuyFormsDataForBuyersRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetPostBuyFormsDataForBuyersRequest',
      'PostBuyFormItemDealsVariantStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostBuyFormItemDealsVariantStruct',
      'PostBuyFormItemDealsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostBuyFormItemDealsStruct',
      'ArrayOfPostbuyformitemdealsstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPostbuyformitemdealsstruct',
      'PostBuyFormItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostBuyFormItemStruct',
      'ArrayOfPostbuyformitemstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPostbuyformitemstruct',
      'PostBuyFormShipmentTrackingStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostBuyFormShipmentTrackingStruct',
      'ArrayOfPostbuyformshipmenttrackingstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPostbuyformshipmenttrackingstruct',
      'PostBuyFormAddressStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostBuyFormAddressStruct',
      'PostBuyFormSellersStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostBuyFormSellersStruct',
      'ArrayOfPostbuyformsellersstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPostbuyformsellersstruct',
      'PostBuyFormForBuyersDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostBuyFormForBuyersDataStruct',
      'ArrayOfPostbuyformforbuyersdatastruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPostbuyformforbuyersdatastruct',
      'doGetPostBuyFormsDataForBuyersResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetPostBuyFormsDataForBuyersResponse',
      'DoGetPostBuyFormsDataForSellersRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetPostBuyFormsDataForSellersRequest',
      'PostBuyFormDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostBuyFormDataStruct',
      'ArrayOfPostbuyformdatastruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPostbuyformdatastruct',
      'doGetPostBuyFormsDataForSellersResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetPostBuyFormsDataForSellersResponse',
      'DoGetPostBuyFormsIdsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetPostBuyFormsIdsRequest',
      'doGetPostBuyFormsIdsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetPostBuyFormsIdsResponse',
      'DoGetPostBuyItemInfoRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetPostBuyItemInfoRequest',
      'PostBuyItemInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostBuyItemInfoStruct',
      'ArrayOfPostbuyiteminfostruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfPostbuyiteminfostruct',
      'doGetPostBuyItemInfoResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetPostBuyItemInfoResponse',
      'DoGetRefundsDealsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetRefundsDealsRequest',
      'RefundsDealsListType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RefundsDealsListType',
      'ArrayOfRefundsdealslisttype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfRefundsdealslisttype',
      'doGetRefundsDealsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetRefundsDealsResponse',
      'DoGetRefundsListRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetRefundsListRequest',
      'RefundDetailsType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RefundDetailsType',
      'RefundListType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RefundListType',
      'ArrayOfRefundlisttype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfRefundlisttype',
      'doGetRefundsListResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetRefundsListResponse',
      'DoGetRefundsReasonsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetRefundsReasonsRequest',
      'ReasonInfoType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ReasonInfoType',
      'ArrayOfReasoninfotype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfReasoninfotype',
      'doGetRefundsReasonsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetRefundsReasonsResponse',
      'DoGetRelatedItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetRelatedItemsRequest',
      'RelatedItemStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RelatedItemStruct',
      'ArrayOfRelateditemstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfRelateditemstruct',
      'RelatedItemsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RelatedItemsStruct',
      'doGetRelatedItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetRelatedItemsResponse',
      'DoGetSellFormAttribsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSellFormAttribsRequest',
      'SellFormType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellFormType',
      'ArrayOfSellformtype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSellformtype',
      'doGetSellFormAttribsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSellFormAttribsResponse',
      'DoGetSellFormFieldsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSellFormFieldsRequest',
      'doGetSellFormFieldsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSellFormFieldsResponse',
      'DoGetSellFormFieldsExtRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSellFormFieldsExtRequest',
      'doGetSellFormFieldsExtResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSellFormFieldsExtResponse',
      'DoGetSellFormFieldsExtLimitRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSellFormFieldsExtLimitRequest',
      'doGetSellFormFieldsExtLimitResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSellFormFieldsExtLimitResponse',
      'DoGetSellFormFieldsForCategoryRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSellFormFieldsForCategoryRequest',
      'SellFormFieldsForCategoryStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellFormFieldsForCategoryStruct',
      'doGetSellFormFieldsForCategoryResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSellFormFieldsForCategoryResponse',
      'DoGetSellFormFieldsLimitRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSellFormFieldsLimitRequest',
      'doGetSellFormFieldsLimitResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSellFormFieldsLimitResponse',
      'DoGetSellRatingReasonsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSellRatingReasonsRequest',
      'SellRatingReasonStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellRatingReasonStruct',
      'ArrayOfSellratingreasonstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSellratingreasonstruct',
      'SellRatingInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellRatingInfoStruct',
      'ArrayOfSellratinginfostruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSellratinginfostruct',
      'doGetSellRatingReasonsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSellRatingReasonsResponse',
      'DoGetSessionHandleForWidgetRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSessionHandleForWidgetRequest',
      'doGetSessionHandleForWidgetResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSessionHandleForWidgetResponse',
      'DoGetShipmentDataRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetShipmentDataRequest',
      'ShipmentTimeStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ShipmentTimeStruct',
      'ShipmentDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ShipmentDataStruct',
      'ArrayOfShipmentdatastruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfShipmentdatastruct',
      'doGetShipmentDataResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetShipmentDataResponse',
      'DoGetShipmentDataForRelatedItemsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetShipmentDataForRelatedItemsRequest',
      'ShipmentPaymentInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ShipmentPaymentInfoStruct',
      'ArrayOfShipmentpaymentinfostruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfShipmentpaymentinfostruct',
      'SellerPaymentInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellerPaymentInfoStruct',
      'SellerShipmentDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SellerShipmentDataStruct',
      'ArrayOfSellershipmentdatastruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSellershipmentdatastruct',
      'RelatedItemsShipmentDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RelatedItemsShipmentDataStruct',
      'doGetShipmentDataForRelatedItemsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetShipmentDataForRelatedItemsResponse',
      'DoGetShipmentPriceTypesRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetShipmentPriceTypesRequest',
      'ShipmentPriceTypeStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ShipmentPriceTypeStruct',
      'ArrayOfShipmentpricetypestruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfShipmentpricetypestruct',
      'doGetShipmentPriceTypesResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetShipmentPriceTypesResponse',
      'DoGetShopsTagsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetShopsTagsRequest',
      'ShopsTagTypeStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ShopsTagTypeStruct',
      'ArrayOfShopstagtypestruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfShopstagtypestruct',
      'doGetShopsTagsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetShopsTagsResponse',
      'DoGetSiteJournalRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSiteJournalRequest',
      'SiteJournal' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SiteJournal',
      'ArrayOfSitejournal' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSitejournal',
      'doGetSiteJournalResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSiteJournalResponse',
      'DoGetSiteJournalDealsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSiteJournalDealsRequest',
      'SiteJournalDealsStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SiteJournalDealsStruct',
      'ArrayOfSitejournaldealsstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSitejournaldealsstruct',
      'doGetSiteJournalDealsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSiteJournalDealsResponse',
      'DoGetSiteJournalDealsInfoRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSiteJournalDealsInfoRequest',
      'SiteJournalDealsInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SiteJournalDealsInfoStruct',
      'doGetSiteJournalDealsInfoResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSiteJournalDealsInfoResponse',
      'DoGetSiteJournalInfoRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSiteJournalInfoRequest',
      'SiteJournalInfo' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SiteJournalInfo',
      'doGetSiteJournalInfoResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSiteJournalInfoResponse',
      'DoGetStatesInfoRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetStatesInfoRequest',
      'StateInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\StateInfoStruct',
      'ArrayOfStateinfostruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfStateinfostruct',
      'doGetStatesInfoResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetStatesInfoResponse',
      'DoGetSystemTimeRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetSystemTimeRequest',
      'doGetSystemTimeResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetSystemTimeResponse',
      'DoGetTransactionsIDsRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetTransactionsIDsRequest',
      'doGetTransactionsIDsResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetTransactionsIDsResponse',
      'DoGetUserIDRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetUserIDRequest',
      'doGetUserIDResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetUserIDResponse',
      'DoGetUserLicenceDateRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetUserLicenceDateRequest',
      'doGetUserLicenceDateResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetUserLicenceDateResponse',
      'DoGetUserLoginRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetUserLoginRequest',
      'doGetUserLoginResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetUserLoginResponse',
      'DoGetWaitingFeedbacksRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetWaitingFeedbacksRequest',
      'WaitFeedbackStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\WaitFeedbackStruct',
      'ArrayOfWaitfeedbackstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfWaitfeedbackstruct',
      'doGetWaitingFeedbacksResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetWaitingFeedbacksResponse',
      'DoGetWaitingFeedbacksCountRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoGetWaitingFeedbacksCountRequest',
      'doGetWaitingFeedbacksCountResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doGetWaitingFeedbacksCountResponse',
      'DoLoginRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoLoginRequest',
      'doLoginResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doLoginResponse',
      'DoLoginEncRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoLoginEncRequest',
      'doLoginEncResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doLoginEncResponse',
      'DoLoginWithAccessTokenRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoLoginWithAccessTokenRequest',
      'doLoginWithAccessTokenResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doLoginWithAccessTokenResponse',
      'DoMyAccount2Request' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoMyAccount2Request',
      'MyAccountStruct2' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\MyAccountStruct2',
      'ArrayOfMyaccountstruct2' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfMyaccountstruct2',
      'doMyAccount2Response' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doMyAccount2Response',
      'DoMyAccountItemsCountRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoMyAccountItemsCountRequest',
      'doMyAccountItemsCountResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doMyAccountItemsCountResponse',
      'DoMyBillingRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoMyBillingRequest',
      'doMyBillingResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doMyBillingResponse',
      'DoMyBillingItemRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoMyBillingItemRequest',
      'ItemBilling' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemBilling',
      'ArrayOfItembilling' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItembilling',
      'doMyBillingItemResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doMyBillingItemResponse',
      'DoMyContactRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoMyContactRequest',
      'MyContactList' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\MyContactList',
      'ArrayOfMycontactlist' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfMycontactlist',
      'doMyContactResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doMyContactResponse',
      'DoMyFeedback2Request' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoMyFeedback2Request',
      'MyFeedbackListStruct2' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\MyFeedbackListStruct2',
      'ArrayOfMyfeedbackliststruct2' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfMyfeedbackliststruct2',
      'doMyFeedback2Response' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doMyFeedback2Response',
      'DoMyFeedback2LimitRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoMyFeedback2LimitRequest',
      'doMyFeedback2LimitResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doMyFeedback2LimitResponse',
      'ItemTemplateCreateStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemTemplateCreateStruct',
      'DoNewAuctionExtRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoNewAuctionExtRequest',
      'doNewAuctionExtResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doNewAuctionExtResponse',
      'DoQueryAllSysStatusRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoQueryAllSysStatusRequest',
      'SysStatusType' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\SysStatusType',
      'ArrayOfSysstatustype' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfSysstatustype',
      'doQueryAllSysStatusResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doQueryAllSysStatusResponse',
      'DoQuerySysStatusRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoQuerySysStatusRequest',
      'doQuerySysStatusResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doQuerySysStatusResponse',
      'DoRemoveFromBlackListRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoRemoveFromBlackListRequest',
      'BlackListResStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\BlackListResStruct',
      'ArrayOfBlacklistresstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfBlacklistresstruct',
      'doRemoveFromBlackListResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doRemoveFromBlackListResponse',
      'DoRemoveFromWatchListRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoRemoveFromWatchListRequest',
      'ItemRemoveWatchStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemRemoveWatchStruct',
      'ArrayOfItemremovewatchstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemremovewatchstruct',
      'doRemoveFromWatchListResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doRemoveFromWatchListResponse',
      'DoRemoveItemTemplatesRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoRemoveItemTemplatesRequest',
      'RemovedItemTemplatesStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RemovedItemTemplatesStruct',
      'doRemoveItemTemplatesResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doRemoveItemTemplatesResponse',
      'DoRequestCancelBidRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoRequestCancelBidRequest',
      'doRequestCancelBidResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doRequestCancelBidResponse',
      'DoRequestPayoutRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoRequestPayoutRequest',
      'RequestPayoutStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\RequestPayoutStruct',
      'doRequestPayoutResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doRequestPayoutResponse',
      'DoRequestSurchargeRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoRequestSurchargeRequest',
      'doRequestSurchargeResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doRequestSurchargeResponse',
      'DoSellSomeAgainRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoSellSomeAgainRequest',
      'StructSellAgain' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\StructSellAgain',
      'ArrayOfStructsellagain' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfStructsellagain',
      'StructSellFailed' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\StructSellFailed',
      'ArrayOfStructsellfailed' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfStructsellfailed',
      'doSellSomeAgainResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doSellSomeAgainResponse',
      'DoSellSomeAgainInShopRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoSellSomeAgainInShopRequest',
      'doSellSomeAgainInShopResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doSellSomeAgainInShopResponse',
      'DoSendEmailToUserRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoSendEmailToUserRequest',
      'doSendEmailToUserResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doSendEmailToUserResponse',
      'NewPostBuyFormSellerStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\NewPostBuyFormSellerStruct',
      'ArrayOfNewpostbuyformsellerstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfNewpostbuyformsellerstruct',
      'InvoiceInfoStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\InvoiceInfoStruct',
      'NewPostBuyFormCommonStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\NewPostBuyFormCommonStruct',
      'DoSendPostBuyFormRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoSendPostBuyFormRequest',
      'ActionDataStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ActionDataStruct',
      'ArrayOfActiondatastruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfActiondatastruct',
      'TransactionPayByLinkStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\TransactionPayByLinkStruct',
      'PostBuyFormStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\PostBuyFormStruct',
      'doSendPostBuyFormResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doSendPostBuyFormResponse',
      'DoSendRefundFormRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoSendRefundFormRequest',
      'doSendRefundFormResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doSendRefundFormResponse',
      'DoSetFreeDeliveryAmountRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoSetFreeDeliveryAmountRequest',
      'doSetFreeDeliveryAmountResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doSetFreeDeliveryAmountResponse',
      'DoSetShipmentPriceTypeRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoSetShipmentPriceTypeRequest',
      'doSetShipmentPriceTypeResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doSetShipmentPriceTypeResponse',
      'DoSetUserLicenceDateRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoSetUserLicenceDateRequest',
      'doSetUserLicenceDateResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doSetUserLicenceDateResponse',
      'DoShowItemInfoExtRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoShowItemInfoExtRequest',
      'ItemInfoExt' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemInfoExt',
      'ItemVariantAttributeStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemVariantAttributeStruct',
      'ArrayOfItemvariantattributestruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemvariantattributestruct',
      'ItemVariantStruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ItemVariantStruct',
      'ArrayOfItemvariantstruct' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ArrayOfItemvariantstruct',
      'doShowItemInfoExtResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doShowItemInfoExtResponse',
      'DoShowUserRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoShowUserRequest',
      'ShowUserFeedbacks' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\ShowUserFeedbacks',
      'doShowUserResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doShowUserResponse',
      'DoVerifyItemRequest' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\DoVerifyItemRequest',
      'doVerifyItemResponse' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl\\doVerifyItemResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://webapi.allegro.pl/service.php?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param DoAddDescToItemsRequest $parameters
     * @return doAddDescToItemsResponse
     */
    public function doAddDescToItems(DoAddDescToItemsRequest $parameters)
    {
      return $this->__soapCall('doAddDescToItems', array($parameters));
    }

    /**
     * @param DoAddPackageInfoToPostBuyFormRequest $parameters
     * @return doAddPackageInfoToPostBuyFormResponse
     */
    public function doAddPackageInfoToPostBuyForm(DoAddPackageInfoToPostBuyFormRequest $parameters)
    {
      return $this->__soapCall('doAddPackageInfoToPostBuyForm', array($parameters));
    }

    /**
     * @param DoAddToBlackListRequest $parameters
     * @return doAddToBlackListResponse
     */
    public function doAddToBlackList(DoAddToBlackListRequest $parameters)
    {
      return $this->__soapCall('doAddToBlackList', array($parameters));
    }

    /**
     * @param DoAddToWatchListRequest $parameters
     * @return doAddToWatchListResponse
     */
    public function doAddToWatchList(DoAddToWatchListRequest $parameters)
    {
      return $this->__soapCall('doAddToWatchList', array($parameters));
    }

    /**
     * @param DoBidItemRequest $parameters
     * @return doBidItemResponse
     */
    public function doBidItem(DoBidItemRequest $parameters)
    {
      return $this->__soapCall('doBidItem', array($parameters));
    }

    /**
     * @param DoCancelBidItemRequest $parameters
     * @return doCancelBidItemResponse
     */
    public function doCancelBidItem(DoCancelBidItemRequest $parameters)
    {
      return $this->__soapCall('doCancelBidItem', array($parameters));
    }

    /**
     * @param DoCancelRefundFormRequest $parameters
     * @return doCancelRefundFormResponse
     */
    public function doCancelRefundForm(DoCancelRefundFormRequest $parameters)
    {
      return $this->__soapCall('doCancelRefundForm', array($parameters));
    }

    /**
     * @param DoCancelRefundWarningRequest $parameters
     * @return doCancelRefundWarningResponse
     */
    public function doCancelRefundWarning(DoCancelRefundWarningRequest $parameters)
    {
      return $this->__soapCall('doCancelRefundWarning', array($parameters));
    }

    /**
     * @param DoCancelTransactionRequest $parameters
     * @return doCancelTransactionResponse
     */
    public function doCancelTransaction(DoCancelTransactionRequest $parameters)
    {
      return $this->__soapCall('doCancelTransaction', array($parameters));
    }

    /**
     * @param DoChangeItemFieldsRequest $parameters
     * @return doChangeItemFieldsResponse
     */
    public function doChangeItemFields(DoChangeItemFieldsRequest $parameters)
    {
      return $this->__soapCall('doChangeItemFields', array($parameters));
    }

    /**
     * @param DoChangePriceItemRequest $parameters
     * @return doChangePriceItemResponse
     */
    public function doChangePriceItem(DoChangePriceItemRequest $parameters)
    {
      return $this->__soapCall('doChangePriceItem', array($parameters));
    }

    /**
     * @param DoChangeQuantityItemRequest $parameters
     * @return doChangeQuantityItemResponse
     */
    public function doChangeQuantityItem(DoChangeQuantityItemRequest $parameters)
    {
      return $this->__soapCall('doChangeQuantityItem', array($parameters));
    }

    /**
     * @param DoCheckItemDescriptionRequest $parameters
     * @return doCheckItemDescriptionResponse
     */
    public function doCheckItemDescription(DoCheckItemDescriptionRequest $parameters)
    {
      return $this->__soapCall('doCheckItemDescription', array($parameters));
    }

    /**
     * @param DoCheckNewAuctionExtRequest $parameters
     * @return doCheckNewAuctionExtResponse
     */
    public function doCheckNewAuctionExt(DoCheckNewAuctionExtRequest $parameters)
    {
      return $this->__soapCall('doCheckNewAuctionExt', array($parameters));
    }

    /**
     * @param DoCreateItemTemplateRequest $parameters
     * @return doCreateItemTemplateResponse
     */
    public function doCreateItemTemplate(DoCreateItemTemplateRequest $parameters)
    {
      return $this->__soapCall('doCreateItemTemplate', array($parameters));
    }

    /**
     * @param DoFeedbackRequest $parameters
     * @return doFeedbackResponse
     */
    public function doFeedback(DoFeedbackRequest $parameters)
    {
      return $this->__soapCall('doFeedback', array($parameters));
    }

    /**
     * @param DoFeedbackManyRequest $parameters
     * @return doFeedbackManyResponse
     */
    public function doFeedbackMany(DoFeedbackManyRequest $parameters)
    {
      return $this->__soapCall('doFeedbackMany', array($parameters));
    }

    /**
     * @param DoFinishItemRequest $parameters
     * @return doFinishItemResponse
     */
    public function doFinishItem(DoFinishItemRequest $parameters)
    {
      return $this->__soapCall('doFinishItem', array($parameters));
    }

    /**
     * @param DoFinishItemsRequest $parameters
     * @return doFinishItemsResponse
     */
    public function doFinishItems(DoFinishItemsRequest $parameters)
    {
      return $this->__soapCall('doFinishItems', array($parameters));
    }

    /**
     * @param DoGetAdminUserLicenceDateRequest $parameters
     * @return doGetAdminUserLicenceDateResponse
     */
    public function doGetAdminUserLicenceDate(DoGetAdminUserLicenceDateRequest $parameters)
    {
      return $this->__soapCall('doGetAdminUserLicenceDate', array($parameters));
    }

    /**
     * @param DoGetArchiveRefundsListRequest $parameters
     * @return doGetArchiveRefundsListResponse
     */
    public function doGetArchiveRefundsList(DoGetArchiveRefundsListRequest $parameters)
    {
      return $this->__soapCall('doGetArchiveRefundsList', array($parameters));
    }

    /**
     * @param DoGetBidItem2Request $parameters
     * @return doGetBidItem2Response
     */
    public function doGetBidItem2(DoGetBidItem2Request $parameters)
    {
      return $this->__soapCall('doGetBidItem2', array($parameters));
    }

    /**
     * @param DoGetBlackListUsersRequest $parameters
     * @return doGetBlackListUsersResponse
     */
    public function doGetBlackListUsers(DoGetBlackListUsersRequest $parameters)
    {
      return $this->__soapCall('doGetBlackListUsers', array($parameters));
    }

    /**
     * @param DoGetCategoryPathRequest $parameters
     * @return doGetCategoryPathResponse
     */
    public function doGetCategoryPath(DoGetCategoryPathRequest $parameters)
    {
      return $this->__soapCall('doGetCategoryPath', array($parameters));
    }

    /**
     * @param DoGetCatsDataRequest $parameters
     * @return doGetCatsDataResponse
     */
    public function doGetCatsData(DoGetCatsDataRequest $parameters)
    {
      return $this->__soapCall('doGetCatsData', array($parameters));
    }

    /**
     * @param DoGetCatsDataCountRequest $parameters
     * @return doGetCatsDataCountResponse
     */
    public function doGetCatsDataCount(DoGetCatsDataCountRequest $parameters)
    {
      return $this->__soapCall('doGetCatsDataCount', array($parameters));
    }

    /**
     * @param DoGetCatsDataLimitRequest $parameters
     * @return doGetCatsDataLimitResponse
     */
    public function doGetCatsDataLimit(DoGetCatsDataLimitRequest $parameters)
    {
      return $this->__soapCall('doGetCatsDataLimit', array($parameters));
    }

    /**
     * @param DoGetCountriesRequest $parameters
     * @return doGetCountriesResponse
     */
    public function doGetCountries(DoGetCountriesRequest $parameters)
    {
      return $this->__soapCall('doGetCountries', array($parameters));
    }

    /**
     * @param DoGetDealsRequest $parameters
     * @return doGetDealsResponse
     */
    public function doGetDeals(DoGetDealsRequest $parameters)
    {
      return $this->__soapCall('doGetDeals', array($parameters));
    }

    /**
     * @param DoGetFavouriteCategoriesRequest $parameters
     * @return doGetFavouriteCategoriesResponse
     */
    public function doGetFavouriteCategories(DoGetFavouriteCategoriesRequest $parameters)
    {
      return $this->__soapCall('doGetFavouriteCategories', array($parameters));
    }

    /**
     * @param DoGetFavouriteSellersRequest $parameters
     * @return doGetFavouriteSellersResponse
     */
    public function doGetFavouriteSellers(DoGetFavouriteSellersRequest $parameters)
    {
      return $this->__soapCall('doGetFavouriteSellers', array($parameters));
    }

    /**
     * @param DoGetFeedbackRequest $parameters
     * @return doGetFeedbackResponse
     */
    public function doGetFeedback(DoGetFeedbackRequest $parameters)
    {
      return $this->__soapCall('doGetFeedback', array($parameters));
    }

    /**
     * @param DoGetFilledPostBuyFormsRequest $parameters
     * @return doGetFilledPostBuyFormsResponse
     */
    public function doGetFilledPostBuyForms(DoGetFilledPostBuyFormsRequest $parameters)
    {
      return $this->__soapCall('doGetFilledPostBuyForms', array($parameters));
    }

    /**
     * @param DoGetFreeDeliveryAmountRequest $parameters
     * @return doGetFreeDeliveryAmountResponse
     */
    public function doGetFreeDeliveryAmount(DoGetFreeDeliveryAmountRequest $parameters)
    {
      return $this->__soapCall('doGetFreeDeliveryAmount', array($parameters));
    }

    /**
     * @param DoGetItemFieldsRequest $parameters
     * @return doGetItemFieldsResponse
     */
    public function doGetItemFields(DoGetItemFieldsRequest $parameters)
    {
      return $this->__soapCall('doGetItemFields', array($parameters));
    }

    /**
     * @param DoGetItemTemplatesRequest $parameters
     * @return doGetItemTemplatesResponse
     */
    public function doGetItemTemplates(DoGetItemTemplatesRequest $parameters)
    {
      return $this->__soapCall('doGetItemTemplates', array($parameters));
    }

    /**
     * @param DoGetItemsImagesRequest $parameters
     * @return doGetItemsImagesResponse
     */
    public function doGetItemsImages(DoGetItemsImagesRequest $parameters)
    {
      return $this->__soapCall('doGetItemsImages', array($parameters));
    }

    /**
     * @param DoGetItemsInfoRequest $parameters
     * @return doGetItemsInfoResponse
     */
    public function doGetItemsInfo(DoGetItemsInfoRequest $parameters)
    {
      return $this->__soapCall('doGetItemsInfo', array($parameters));
    }

    /**
     * @param DoGetItemsListRequest $parameters
     * @return doGetItemsListResponse
     */
    public function doGetItemsList(DoGetItemsListRequest $parameters)
    {
      return $this->__soapCall('doGetItemsList', array($parameters));
    }

    /**
     * @param DoGetMessageToBuyerRequest $parameters
     * @return doGetMessageToBuyerResponse
     */
    public function doGetMessageToBuyer(DoGetMessageToBuyerRequest $parameters)
    {
      return $this->__soapCall('doGetMessageToBuyer', array($parameters));
    }

    /**
     * @param DoGetMyAddressesRequest $parameters
     * @return doGetMyAddressesResponse
     */
    public function doGetMyAddresses(DoGetMyAddressesRequest $parameters)
    {
      return $this->__soapCall('doGetMyAddresses', array($parameters));
    }

    /**
     * @param DoGetMyBidItemsRequest $parameters
     * @return doGetMyBidItemsResponse
     */
    public function doGetMyBidItems(DoGetMyBidItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyBidItems', array($parameters));
    }

    /**
     * @param DoGetMyCurrentShipmentPriceTypeRequest $parameters
     * @return doGetMyCurrentShipmentPriceTypeResponse
     */
    public function doGetMyCurrentShipmentPriceType(DoGetMyCurrentShipmentPriceTypeRequest $parameters)
    {
      return $this->__soapCall('doGetMyCurrentShipmentPriceType', array($parameters));
    }

    /**
     * @param DoGetMyDataRequest $parameters
     * @return doGetMyDataResponse
     */
    public function doGetMyData(DoGetMyDataRequest $parameters)
    {
      return $this->__soapCall('doGetMyData', array($parameters));
    }

    /**
     * @param DoGetMyFutureItemsRequest $parameters
     * @return doGetMyFutureItemsResponse
     */
    public function doGetMyFutureItems(DoGetMyFutureItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyFutureItems', array($parameters));
    }

    /**
     * @param DoGetMyIncomingPaymentsRequest $parameters
     * @return doGetMyIncomingPaymentsResponse
     */
    public function doGetMyIncomingPayments(DoGetMyIncomingPaymentsRequest $parameters)
    {
      return $this->__soapCall('doGetMyIncomingPayments', array($parameters));
    }

    /**
     * @param DoGetMyIncomingPaymentsRefundsRequest $parameters
     * @return doGetMyIncomingPaymentsRefundsResponse
     */
    public function doGetMyIncomingPaymentsRefunds(DoGetMyIncomingPaymentsRefundsRequest $parameters)
    {
      return $this->__soapCall('doGetMyIncomingPaymentsRefunds', array($parameters));
    }

    /**
     * @param DoGetMyNotSoldItemsRequest $parameters
     * @return doGetMyNotSoldItemsResponse
     */
    public function doGetMyNotSoldItems(DoGetMyNotSoldItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyNotSoldItems', array($parameters));
    }

    /**
     * @param DoGetMyNotWonItemsRequest $parameters
     * @return doGetMyNotWonItemsResponse
     */
    public function doGetMyNotWonItems(DoGetMyNotWonItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyNotWonItems', array($parameters));
    }

    /**
     * @param DoGetMyPaymentsRequest $parameters
     * @return doGetMyPaymentsResponse
     */
    public function doGetMyPayments(DoGetMyPaymentsRequest $parameters)
    {
      return $this->__soapCall('doGetMyPayments', array($parameters));
    }

    /**
     * @param DoGetMyPaymentsInfoRequest $parameters
     * @return doGetMyPaymentsInfoResponse
     */
    public function doGetMyPaymentsInfo(DoGetMyPaymentsInfoRequest $parameters)
    {
      return $this->__soapCall('doGetMyPaymentsInfo', array($parameters));
    }

    /**
     * @param DoGetMyPaymentsRefundsRequest $parameters
     * @return doGetMyPaymentsRefundsResponse
     */
    public function doGetMyPaymentsRefunds(DoGetMyPaymentsRefundsRequest $parameters)
    {
      return $this->__soapCall('doGetMyPaymentsRefunds', array($parameters));
    }

    /**
     * @param DoGetMyPayoutsRequest $parameters
     * @return doGetMyPayoutsResponse
     */
    public function doGetMyPayouts(DoGetMyPayoutsRequest $parameters)
    {
      return $this->__soapCall('doGetMyPayouts', array($parameters));
    }

    /**
     * @param DoGetMySellItemsRequest $parameters
     * @return doGetMySellItemsResponse
     */
    public function doGetMySellItems(DoGetMySellItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMySellItems', array($parameters));
    }

    /**
     * @param DoGetMySellRatingRequest $parameters
     * @return doGetMySellRatingResponse
     */
    public function doGetMySellRating(DoGetMySellRatingRequest $parameters)
    {
      return $this->__soapCall('doGetMySellRating', array($parameters));
    }

    /**
     * @param DoGetMySoldItemsRequest $parameters
     * @return doGetMySoldItemsResponse
     */
    public function doGetMySoldItems(DoGetMySoldItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMySoldItems', array($parameters));
    }

    /**
     * @param DoGetMyWatchItemsRequest $parameters
     * @return doGetMyWatchItemsResponse
     */
    public function doGetMyWatchItems(DoGetMyWatchItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyWatchItems', array($parameters));
    }

    /**
     * @param DoGetMyWatchedItemsRequest $parameters
     * @return doGetMyWatchedItemsResponse
     */
    public function doGetMyWatchedItems(DoGetMyWatchedItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyWatchedItems', array($parameters));
    }

    /**
     * @param DoGetMyWonItemsRequest $parameters
     * @return doGetMyWonItemsResponse
     */
    public function doGetMyWonItems(DoGetMyWonItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyWonItems', array($parameters));
    }

    /**
     * @param DoGetPaymentDataRequest $parameters
     * @return doGetPaymentDataResponse
     */
    public function doGetPaymentData(DoGetPaymentDataRequest $parameters)
    {
      return $this->__soapCall('doGetPaymentData', array($parameters));
    }

    /**
     * @param DoGetPaymentMethodsRequest $parameters
     * @return doGetPaymentMethodsResponse
     */
    public function doGetPaymentMethods(DoGetPaymentMethodsRequest $parameters)
    {
      return $this->__soapCall('doGetPaymentMethods', array($parameters));
    }

    /**
     * @param DoGetPostBuyDataRequest $parameters
     * @return doGetPostBuyDataResponse
     */
    public function doGetPostBuyData(DoGetPostBuyDataRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyData', array($parameters));
    }

    /**
     * @param DoGetPostBuyFormsDataForBuyersRequest $parameters
     * @return doGetPostBuyFormsDataForBuyersResponse
     */
    public function doGetPostBuyFormsDataForBuyers(DoGetPostBuyFormsDataForBuyersRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyFormsDataForBuyers', array($parameters));
    }

    /**
     * @param DoGetPostBuyFormsDataForSellersRequest $parameters
     * @return doGetPostBuyFormsDataForSellersResponse
     */
    public function doGetPostBuyFormsDataForSellers(DoGetPostBuyFormsDataForSellersRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyFormsDataForSellers', array($parameters));
    }

    /**
     * @param DoGetPostBuyFormsIdsRequest $parameters
     * @return doGetPostBuyFormsIdsResponse
     */
    public function doGetPostBuyFormsIds(DoGetPostBuyFormsIdsRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyFormsIds', array($parameters));
    }

    /**
     * @param DoGetPostBuyItemInfoRequest $parameters
     * @return doGetPostBuyItemInfoResponse
     */
    public function doGetPostBuyItemInfo(DoGetPostBuyItemInfoRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyItemInfo', array($parameters));
    }

    /**
     * @param DoGetRefundsDealsRequest $parameters
     * @return doGetRefundsDealsResponse
     */
    public function doGetRefundsDeals(DoGetRefundsDealsRequest $parameters)
    {
      return $this->__soapCall('doGetRefundsDeals', array($parameters));
    }

    /**
     * @param DoGetRefundsListRequest $parameters
     * @return doGetRefundsListResponse
     */
    public function doGetRefundsList(DoGetRefundsListRequest $parameters)
    {
      return $this->__soapCall('doGetRefundsList', array($parameters));
    }

    /**
     * @param DoGetRefundsReasonsRequest $parameters
     * @return doGetRefundsReasonsResponse
     */
    public function doGetRefundsReasons(DoGetRefundsReasonsRequest $parameters)
    {
      return $this->__soapCall('doGetRefundsReasons', array($parameters));
    }

    /**
     * @param DoGetRelatedItemsRequest $parameters
     * @return doGetRelatedItemsResponse
     */
    public function doGetRelatedItems(DoGetRelatedItemsRequest $parameters)
    {
      return $this->__soapCall('doGetRelatedItems', array($parameters));
    }

    /**
     * @param DoGetSellFormAttribsRequest $parameters
     * @return doGetSellFormAttribsResponse
     */
    public function doGetSellFormAttribs(DoGetSellFormAttribsRequest $parameters)
    {
      return $this->__soapCall('doGetSellFormAttribs', array($parameters));
    }

    /**
     * @param DoGetSellFormFieldsRequest $parameters
     * @return doGetSellFormFieldsResponse
     */
    public function doGetSellFormFields(DoGetSellFormFieldsRequest $parameters)
    {
      return $this->__soapCall('doGetSellFormFields', array($parameters));
    }

    /**
     * @param DoGetSellFormFieldsExtRequest $parameters
     * @return doGetSellFormFieldsExtResponse
     */
    public function doGetSellFormFieldsExt(DoGetSellFormFieldsExtRequest $parameters)
    {
      return $this->__soapCall('doGetSellFormFieldsExt', array($parameters));
    }

    /**
     * @param DoGetSellFormFieldsExtLimitRequest $parameters
     * @return doGetSellFormFieldsExtLimitResponse
     */
    public function doGetSellFormFieldsExtLimit(DoGetSellFormFieldsExtLimitRequest $parameters)
    {
      return $this->__soapCall('doGetSellFormFieldsExtLimit', array($parameters));
    }

    /**
     * @param DoGetSellFormFieldsForCategoryRequest $parameters
     * @return doGetSellFormFieldsForCategoryResponse
     */
    public function doGetSellFormFieldsForCategory(DoGetSellFormFieldsForCategoryRequest $parameters)
    {
      return $this->__soapCall('doGetSellFormFieldsForCategory', array($parameters));
    }

    /**
     * @param DoGetSellFormFieldsLimitRequest $parameters
     * @return doGetSellFormFieldsLimitResponse
     */
    public function doGetSellFormFieldsLimit(DoGetSellFormFieldsLimitRequest $parameters)
    {
      return $this->__soapCall('doGetSellFormFieldsLimit', array($parameters));
    }

    /**
     * @param DoGetSellRatingReasonsRequest $parameters
     * @return doGetSellRatingReasonsResponse
     */
    public function doGetSellRatingReasons(DoGetSellRatingReasonsRequest $parameters)
    {
      return $this->__soapCall('doGetSellRatingReasons', array($parameters));
    }

    /**
     * @param DoGetSessionHandleForWidgetRequest $parameters
     * @return doGetSessionHandleForWidgetResponse
     */
    public function doGetSessionHandleForWidget(DoGetSessionHandleForWidgetRequest $parameters)
    {
      return $this->__soapCall('doGetSessionHandleForWidget', array($parameters));
    }

    /**
     * @param DoGetShipmentDataRequest $parameters
     * @return doGetShipmentDataResponse
     */
    public function doGetShipmentData(DoGetShipmentDataRequest $parameters)
    {
      return $this->__soapCall('doGetShipmentData', array($parameters));
    }

    /**
     * @param DoGetShipmentDataForRelatedItemsRequest $parameters
     * @return doGetShipmentDataForRelatedItemsResponse
     */
    public function doGetShipmentDataForRelatedItems(DoGetShipmentDataForRelatedItemsRequest $parameters)
    {
      return $this->__soapCall('doGetShipmentDataForRelatedItems', array($parameters));
    }

    /**
     * @param DoGetShipmentPriceTypesRequest $parameters
     * @return doGetShipmentPriceTypesResponse
     */
    public function doGetShipmentPriceTypes(DoGetShipmentPriceTypesRequest $parameters)
    {
      return $this->__soapCall('doGetShipmentPriceTypes', array($parameters));
    }

    /**
     * @param DoGetShopsTagsRequest $parameters
     * @return doGetShopsTagsResponse
     */
    public function doGetShopsTags(DoGetShopsTagsRequest $parameters)
    {
      return $this->__soapCall('doGetShopsTags', array($parameters));
    }

    /**
     * @param DoGetSiteJournalRequest $parameters
     * @return doGetSiteJournalResponse
     */
    public function doGetSiteJournal(DoGetSiteJournalRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournal', array($parameters));
    }

    /**
     * @param DoGetSiteJournalDealsRequest $parameters
     * @return doGetSiteJournalDealsResponse
     */
    public function doGetSiteJournalDeals(DoGetSiteJournalDealsRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournalDeals', array($parameters));
    }

    /**
     * @param DoGetSiteJournalDealsInfoRequest $parameters
     * @return doGetSiteJournalDealsInfoResponse
     */
    public function doGetSiteJournalDealsInfo(DoGetSiteJournalDealsInfoRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournalDealsInfo', array($parameters));
    }

    /**
     * @param DoGetSiteJournalInfoRequest $parameters
     * @return doGetSiteJournalInfoResponse
     */
    public function doGetSiteJournalInfo(DoGetSiteJournalInfoRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournalInfo', array($parameters));
    }

    /**
     * @param DoGetStatesInfoRequest $parameters
     * @return doGetStatesInfoResponse
     */
    public function doGetStatesInfo(DoGetStatesInfoRequest $parameters)
    {
      return $this->__soapCall('doGetStatesInfo', array($parameters));
    }

    /**
     * @param DoGetSystemTimeRequest $parameters
     * @return doGetSystemTimeResponse
     */
    public function doGetSystemTime(DoGetSystemTimeRequest $parameters)
    {
      return $this->__soapCall('doGetSystemTime', array($parameters));
    }

    /**
     * @param DoGetTransactionsIDsRequest $parameters
     * @return doGetTransactionsIDsResponse
     */
    public function doGetTransactionsIDs(DoGetTransactionsIDsRequest $parameters)
    {
      return $this->__soapCall('doGetTransactionsIDs', array($parameters));
    }

    /**
     * @param DoGetUserIDRequest $parameters
     * @return doGetUserIDResponse
     */
    public function doGetUserID(DoGetUserIDRequest $parameters)
    {
      return $this->__soapCall('doGetUserID', array($parameters));
    }

    /**
     * @param DoGetUserLicenceDateRequest $parameters
     * @return doGetUserLicenceDateResponse
     */
    public function doGetUserLicenceDate(DoGetUserLicenceDateRequest $parameters)
    {
      return $this->__soapCall('doGetUserLicenceDate', array($parameters));
    }

    /**
     * @param DoGetUserLoginRequest $parameters
     * @return doGetUserLoginResponse
     */
    public function doGetUserLogin(DoGetUserLoginRequest $parameters)
    {
      return $this->__soapCall('doGetUserLogin', array($parameters));
    }

    /**
     * @param DoGetWaitingFeedbacksRequest $parameters
     * @return doGetWaitingFeedbacksResponse
     */
    public function doGetWaitingFeedbacks(DoGetWaitingFeedbacksRequest $parameters)
    {
      return $this->__soapCall('doGetWaitingFeedbacks', array($parameters));
    }

    /**
     * @param DoGetWaitingFeedbacksCountRequest $parameters
     * @return doGetWaitingFeedbacksCountResponse
     */
    public function doGetWaitingFeedbacksCount(DoGetWaitingFeedbacksCountRequest $parameters)
    {
      return $this->__soapCall('doGetWaitingFeedbacksCount', array($parameters));
    }

    /**
     * @param DoLoginRequest $parameters
     * @return doLoginResponse
     */
    public function doLogin(DoLoginRequest $parameters)
    {
      return $this->__soapCall('doLogin', array($parameters));
    }

    /**
     * @param DoLoginEncRequest $parameters
     * @return doLoginEncResponse
     */
    public function doLoginEnc(DoLoginEncRequest $parameters)
    {
      return $this->__soapCall('doLoginEnc', array($parameters));
    }

    /**
     * @param DoLoginWithAccessTokenRequest $parameters
     * @return doLoginWithAccessTokenResponse
     */
    public function doLoginWithAccessToken(DoLoginWithAccessTokenRequest $parameters)
    {
      return $this->__soapCall('doLoginWithAccessToken', array($parameters));
    }

    /**
     * @param DoMyAccount2Request $parameters
     * @return doMyAccount2Response
     */
    public function doMyAccount2(DoMyAccount2Request $parameters)
    {
      return $this->__soapCall('doMyAccount2', array($parameters));
    }

    /**
     * @param DoMyAccountItemsCountRequest $parameters
     * @return doMyAccountItemsCountResponse
     */
    public function doMyAccountItemsCount(DoMyAccountItemsCountRequest $parameters)
    {
      return $this->__soapCall('doMyAccountItemsCount', array($parameters));
    }

    /**
     * @param DoMyBillingRequest $parameters
     * @return doMyBillingResponse
     */
    public function doMyBilling(DoMyBillingRequest $parameters)
    {
      return $this->__soapCall('doMyBilling', array($parameters));
    }

    /**
     * @param DoMyBillingItemRequest $parameters
     * @return doMyBillingItemResponse
     */
    public function doMyBillingItem(DoMyBillingItemRequest $parameters)
    {
      return $this->__soapCall('doMyBillingItem', array($parameters));
    }

    /**
     * @param DoMyContactRequest $parameters
     * @return doMyContactResponse
     */
    public function doMyContact(DoMyContactRequest $parameters)
    {
      return $this->__soapCall('doMyContact', array($parameters));
    }

    /**
     * @param DoMyFeedback2Request $parameters
     * @return doMyFeedback2Response
     */
    public function doMyFeedback2(DoMyFeedback2Request $parameters)
    {
      return $this->__soapCall('doMyFeedback2', array($parameters));
    }

    /**
     * @param DoMyFeedback2LimitRequest $parameters
     * @return doMyFeedback2LimitResponse
     */
    public function doMyFeedback2Limit(DoMyFeedback2LimitRequest $parameters)
    {
      return $this->__soapCall('doMyFeedback2Limit', array($parameters));
    }

    /**
     * @param DoNewAuctionExtRequest $parameters
     * @return doNewAuctionExtResponse
     */
    public function doNewAuctionExt(DoNewAuctionExtRequest $parameters)
    {
      return $this->__soapCall('doNewAuctionExt', array($parameters));
    }

    /**
     * @param DoQueryAllSysStatusRequest $parameters
     * @return doQueryAllSysStatusResponse
     */
    public function doQueryAllSysStatus(DoQueryAllSysStatusRequest $parameters)
    {
      return $this->__soapCall('doQueryAllSysStatus', array($parameters));
    }

    /**
     * @param DoQuerySysStatusRequest $parameters
     * @return doQuerySysStatusResponse
     */
    public function doQuerySysStatus(DoQuerySysStatusRequest $parameters)
    {
      return $this->__soapCall('doQuerySysStatus', array($parameters));
    }

    /**
     * @param DoRemoveFromBlackListRequest $parameters
     * @return doRemoveFromBlackListResponse
     */
    public function doRemoveFromBlackList(DoRemoveFromBlackListRequest $parameters)
    {
      return $this->__soapCall('doRemoveFromBlackList', array($parameters));
    }

    /**
     * @param DoRemoveFromWatchListRequest $parameters
     * @return doRemoveFromWatchListResponse
     */
    public function doRemoveFromWatchList(DoRemoveFromWatchListRequest $parameters)
    {
      return $this->__soapCall('doRemoveFromWatchList', array($parameters));
    }

    /**
     * @param DoRemoveItemTemplatesRequest $parameters
     * @return doRemoveItemTemplatesResponse
     */
    public function doRemoveItemTemplates(DoRemoveItemTemplatesRequest $parameters)
    {
      return $this->__soapCall('doRemoveItemTemplates', array($parameters));
    }

    /**
     * @param DoRequestCancelBidRequest $parameters
     * @return doRequestCancelBidResponse
     */
    public function doRequestCancelBid(DoRequestCancelBidRequest $parameters)
    {
      return $this->__soapCall('doRequestCancelBid', array($parameters));
    }

    /**
     * @param DoRequestPayoutRequest $parameters
     * @return doRequestPayoutResponse
     */
    public function doRequestPayout(DoRequestPayoutRequest $parameters)
    {
      return $this->__soapCall('doRequestPayout', array($parameters));
    }

    /**
     * @param DoRequestSurchargeRequest $parameters
     * @return doRequestSurchargeResponse
     */
    public function doRequestSurcharge(DoRequestSurchargeRequest $parameters)
    {
      return $this->__soapCall('doRequestSurcharge', array($parameters));
    }

    /**
     * @param DoSellSomeAgainRequest $parameters
     * @return doSellSomeAgainResponse
     */
    public function doSellSomeAgain(DoSellSomeAgainRequest $parameters)
    {
      return $this->__soapCall('doSellSomeAgain', array($parameters));
    }

    /**
     * @param DoSellSomeAgainInShopRequest $parameters
     * @return doSellSomeAgainInShopResponse
     */
    public function doSellSomeAgainInShop(DoSellSomeAgainInShopRequest $parameters)
    {
      return $this->__soapCall('doSellSomeAgainInShop', array($parameters));
    }

    /**
     * @param DoSendEmailToUserRequest $parameters
     * @return doSendEmailToUserResponse
     */
    public function doSendEmailToUser(DoSendEmailToUserRequest $parameters)
    {
      return $this->__soapCall('doSendEmailToUser', array($parameters));
    }

    /**
     * @param DoSendPostBuyFormRequest $parameters
     * @return doSendPostBuyFormResponse
     */
    public function doSendPostBuyForm(DoSendPostBuyFormRequest $parameters)
    {
      return $this->__soapCall('doSendPostBuyForm', array($parameters));
    }

    /**
     * @param DoSendRefundFormRequest $parameters
     * @return doSendRefundFormResponse
     */
    public function doSendRefundForm(DoSendRefundFormRequest $parameters)
    {
      return $this->__soapCall('doSendRefundForm', array($parameters));
    }

    /**
     * @param DoSetFreeDeliveryAmountRequest $parameters
     * @return doSetFreeDeliveryAmountResponse
     */
    public function doSetFreeDeliveryAmount(DoSetFreeDeliveryAmountRequest $parameters)
    {
      return $this->__soapCall('doSetFreeDeliveryAmount', array($parameters));
    }

    /**
     * @param DoSetShipmentPriceTypeRequest $parameters
     * @return doSetShipmentPriceTypeResponse
     */
    public function doSetShipmentPriceType(DoSetShipmentPriceTypeRequest $parameters)
    {
      return $this->__soapCall('doSetShipmentPriceType', array($parameters));
    }

    /**
     * @param DoSetUserLicenceDateRequest $parameters
     * @return doSetUserLicenceDateResponse
     */
    public function doSetUserLicenceDate(DoSetUserLicenceDateRequest $parameters)
    {
      return $this->__soapCall('doSetUserLicenceDate', array($parameters));
    }

    /**
     * @param DoShowItemInfoExtRequest $parameters
     * @return doShowItemInfoExtResponse
     */
    public function doShowItemInfoExt(DoShowItemInfoExtRequest $parameters)
    {
      return $this->__soapCall('doShowItemInfoExt', array($parameters));
    }

    /**
     * @param DoShowUserRequest $parameters
     * @return doShowUserResponse
     */
    public function doShowUser(DoShowUserRequest $parameters)
    {
      return $this->__soapCall('doShowUser', array($parameters));
    }

    /**
     * @param DoVerifyItemRequest $parameters
     * @return doVerifyItemResponse
     */
    public function doVerifyItem(DoVerifyItemRequest $parameters)
    {
      return $this->__soapCall('doVerifyItem', array($parameters));
    }

}
