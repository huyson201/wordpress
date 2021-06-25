<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/vanity_pharma_display_url_mode.proto

namespace Google\Ads\GoogleAds\V6\Enums\VanityPharmaDisplayUrlModeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible display modes for vanity pharma URLs.
 *
 * Protobuf type <code>google.ads.googleads.v6.enums.VanityPharmaDisplayUrlModeEnum.VanityPharmaDisplayUrlMode</code>
 */
class VanityPharmaDisplayUrlMode
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Replace vanity pharma URL with manufacturer website url.
     *
     * Generated from protobuf enum <code>MANUFACTURER_WEBSITE_URL = 2;</code>
     */
    const MANUFACTURER_WEBSITE_URL = 2;
    /**
     * Replace vanity pharma URL with description of the website.
     *
     * Generated from protobuf enum <code>WEBSITE_DESCRIPTION = 3;</code>
     */
    const WEBSITE_DESCRIPTION = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MANUFACTURER_WEBSITE_URL => 'MANUFACTURER_WEBSITE_URL',
        self::WEBSITE_DESCRIPTION => 'WEBSITE_DESCRIPTION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VanityPharmaDisplayUrlMode::class, \Google\Ads\GoogleAds\V6\Enums\VanityPharmaDisplayUrlModeEnum_VanityPharmaDisplayUrlMode::class);

