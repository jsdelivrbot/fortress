<?php
if(!function_exists('checkbox_boolean')) {

    if (!function_exists('file_url')) {
        function file_url($path)
        {
            return \Illuminate\Support\Facades\Storage::url($path);
        }
    }

}