<?php

/**
* Mux PHP - Copyright 2019 Mux Inc.
* NOTE: This file is auto generated. Do not edit this file manually.
*/

namespace MuxPhp\Models;
use \MuxPhp\ObjectSerializer;

/**
 * PlaybackPolicy Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 */
class PlaybackPolicy
{
    /**
     * Possible values of this enum
     */
    const _PUBLIC = 'public';
    const SIGNED = 'signed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_PUBLIC,
            self::SIGNED,
        ];
    }
}

