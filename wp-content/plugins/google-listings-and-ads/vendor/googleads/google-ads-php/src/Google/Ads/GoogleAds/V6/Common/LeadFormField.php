<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/asset_types.proto

namespace Google\Ads\GoogleAds\V6\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One input field instance within a form.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.common.LeadFormField</code>
 */
class LeadFormField extends \Google\Protobuf\Internal\Message
{
    /**
     * Describes the input type, which may be a predefined type such as
     * "full name" or a pre-vetted question like "Do you own a car?".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.LeadFormFieldUserInputTypeEnum.LeadFormFieldUserInputType input_type = 1;</code>
     */
    protected $input_type = 0;
    protected $answers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $input_type
     *           Describes the input type, which may be a predefined type such as
     *           "full name" or a pre-vetted question like "Do you own a car?".
     *     @type \Google\Ads\GoogleAds\V6\Common\LeadFormSingleChoiceAnswers $single_choice_answers
     *           Answer configuration for a single choice question. Can be set only for
     *           pre-vetted question fields. Minimum of 2 answers required and maximum of
     *           12 allowed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Describes the input type, which may be a predefined type such as
     * "full name" or a pre-vetted question like "Do you own a car?".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.LeadFormFieldUserInputTypeEnum.LeadFormFieldUserInputType input_type = 1;</code>
     * @return int
     */
    public function getInputType()
    {
        return $this->input_type;
    }

    /**
     * Describes the input type, which may be a predefined type such as
     * "full name" or a pre-vetted question like "Do you own a car?".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.LeadFormFieldUserInputTypeEnum.LeadFormFieldUserInputType input_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInputType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V6\Enums\LeadFormFieldUserInputTypeEnum\LeadFormFieldUserInputType::class);
        $this->input_type = $var;

        return $this;
    }

    /**
     * Answer configuration for a single choice question. Can be set only for
     * pre-vetted question fields. Minimum of 2 answers required and maximum of
     * 12 allowed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.LeadFormSingleChoiceAnswers single_choice_answers = 2;</code>
     * @return \Google\Ads\GoogleAds\V6\Common\LeadFormSingleChoiceAnswers
     */
    public function getSingleChoiceAnswers()
    {
        return $this->readOneof(2);
    }

    public function hasSingleChoiceAnswers()
    {
        return $this->hasOneof(2);
    }

    /**
     * Answer configuration for a single choice question. Can be set only for
     * pre-vetted question fields. Minimum of 2 answers required and maximum of
     * 12 allowed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.LeadFormSingleChoiceAnswers single_choice_answers = 2;</code>
     * @param \Google\Ads\GoogleAds\V6\Common\LeadFormSingleChoiceAnswers $var
     * @return $this
     */
    public function setSingleChoiceAnswers($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Common\LeadFormSingleChoiceAnswers::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAnswers()
    {
        return $this->whichOneof("answers");
    }

}

