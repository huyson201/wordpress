<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/user_data_service.proto

namespace Google\Ads\GoogleAds\V6\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Operation to be made for the UploadUserDataRequest.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.UserDataOperation</code>
 */
class UserDataOperation extends \Google\Protobuf\Internal\Message
{
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V6\Common\UserData $create
     *           The list of user data to be appended to the user list.
     *     @type \Google\Ads\GoogleAds\V6\Common\UserData $remove
     *           The list of user data to be removed from the user list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Services\UserDataService::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of user data to be appended to the user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.UserData create = 1;</code>
     * @return \Google\Ads\GoogleAds\V6\Common\UserData
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    public function hasCreate()
    {
        return $this->hasOneof(1);
    }

    /**
     * The list of user data to be appended to the user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.UserData create = 1;</code>
     * @param \Google\Ads\GoogleAds\V6\Common\UserData $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Common\UserData::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The list of user data to be removed from the user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.UserData remove = 2;</code>
     * @return \Google\Ads\GoogleAds\V6\Common\UserData
     */
    public function getRemove()
    {
        return $this->readOneof(2);
    }

    public function hasRemove()
    {
        return $this->hasOneof(2);
    }

    /**
     * The list of user data to be removed from the user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.UserData remove = 2;</code>
     * @param \Google\Ads\GoogleAds\V6\Common\UserData $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Common\UserData::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

