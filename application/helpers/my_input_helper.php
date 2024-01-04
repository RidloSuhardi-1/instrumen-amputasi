<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('get_post_data')) {
    function get_post_data($fields)
    {
        $CI = &get_instance();

        $data = array();

        foreach ($fields as $field) {
            $data[$field] = $CI->input->post($field, TRUE);
        }

        return $data;
    }
}
