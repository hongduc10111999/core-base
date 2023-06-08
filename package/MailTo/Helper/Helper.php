<?php

use Corebase\Option\models\Options;

if (!function_exists('get_option')) {
    function get_option($value)
    {
        $option = Options::where('key', $value)->first();
        return $option->value;
    }
}
