<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/keyword_plan_ad_group_keyword_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class KeywordPlanAdGroupKeywordService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v6/enums/keyword_match_type.protogoogle.ads.googleads.v6.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
!com.google.ads.googleads.v6.enumsBKeywordMatchTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
Egoogle/ads/googleads/v6/resources/keyword_plan_ad_group_keyword.proto!google.ads.googleads.v6.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
KeywordPlanAdGroupKeywordQ
resource_name (	B:�A�A4
2googleads.googleapis.com/KeywordPlanAdGroupKeywordT
keyword_plan_ad_group (	B0�A-
+googleads.googleapis.com/KeywordPlanAdGroupH �
id	 (B�AH�
text
 (	H�X

match_type (2D.google.ads.googleads.v6.enums.KeywordMatchTypeEnum.KeywordMatchType
cpc_bid_micros (H�
negative (B�AH�:��A�
2googleads.googleapis.com/KeywordPlanAdGroupKeywordUcustomers/{customer_id}/keywordPlanAdGroupKeywords/{keyword_plan_ad_group_keyword_id}B
_keyword_plan_ad_groupB
_idB
_textB
_cpc_bid_microsB
	_negativeB�
%com.google.ads.googleads.v6.resourcesBKeywordPlanAdGroupKeywordProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
Lgoogle/ads/googleads/v6/services/keyword_plan_ad_group_keyword_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"x
#GetKeywordPlanAdGroupKeywordRequestQ
resource_name (	B:�A�A4
2googleads.googleapis.com/KeywordPlanAdGroupKeyword"�
\'MutateKeywordPlanAdGroupKeywordsRequest
customer_id (	B�A]

operations (2D.google.ads.googleads.v6.services.KeywordPlanAdGroupKeywordOperationB�A
partial_failure (
validate_only ("�
"KeywordPlanAdGroupKeywordOperation/
update_mask (2.google.protobuf.FieldMaskN
create (2<.google.ads.googleads.v6.resources.KeywordPlanAdGroupKeywordH N
update (2<.google.ads.googleads.v6.resources.KeywordPlanAdGroupKeywordH I
remove (	B7�A4
2googleads.googleapis.com/KeywordPlanAdGroupKeywordH B
	operation"�
(MutateKeywordPlanAdGroupKeywordsResponse1
partial_failure_error (2.google.rpc.StatusX
results (2G.google.ads.googleads.v6.services.MutateKeywordPlanAdGroupKeywordResult">
%MutateKeywordPlanAdGroupKeywordResult
resource_name (	2�
 KeywordPlanAdGroupKeywordService�
GetKeywordPlanAdGroupKeywordE.google.ads.googleads.v6.services.GetKeywordPlanAdGroupKeywordRequest<.google.ads.googleads.v6.resources.KeywordPlanAdGroupKeyword"T���></v6/{resource_name=customers/*/keywordPlanAdGroupKeywords/*}�Aresource_name�
 MutateKeywordPlanAdGroupKeywordsI.google.ads.googleads.v6.services.MutateKeywordPlanAdGroupKeywordsRequestJ.google.ads.googleads.v6.services.MutateKeywordPlanAdGroupKeywordsResponse"c���D"?/v6/customers/{customer_id=*}/keywordPlanAdGroupKeywords:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesB%KeywordPlanAdGroupKeywordServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

