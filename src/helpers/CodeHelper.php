<?php
/**
 * Craft CMS Plugins for Craft CMS 3.x
 *
 * Created with PhpStorm.
 *
 * @link      https://github.com/Anubarak/
 * @email     anubarak1993@gmail.com
 * @copyright Copyright (c) 2019 Robin Schambach
 */

namespace verbb\giftvoucher\helpers;

use verbb\giftvoucher\elements\Code;

class CodeHelper
{
    /**
     * Get a code either codeKey, elementId or if it is already a code, just return it
     *
     * @param $code
     *
     * @return \verbb\giftvoucher\elements\Code|null
     *
     * @author Robin Schambach
     * @since  18.12.2019
     */
    public static function getCode($code): ?Code
    {
        if (is_string($code) === true) {
            return Code::findOne(['codeKey' => $code]);
        }

        if (is_numeric($code)) {
            return Code::findOne($code);
        }

        if ($code instanceof Code) {
            return $code;
        }

        return null;
    }
}