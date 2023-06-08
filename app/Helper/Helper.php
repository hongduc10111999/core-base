<?php

if (!function_exists('get_option')) {
    function get_image($value)
    {
       return asset('filemanager/uploads/' . $value);
    }
}
