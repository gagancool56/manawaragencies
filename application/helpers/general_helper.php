<?php
if (!function_exists('asset_url')) {
    function asset_url($prefix = '')
    {
        if (empty($prefix)) {
            $url = base_url('assets/');
        } else {
            $url = base_url('assets/' . $prefix);
        }
        return $url;
    }
}

if (!function_exists('load_file')) {
    function load_file($maincontent = '', $data = '')
    {
        $CI = &get_instance();
        $CI->load->view('inc/topbar');
        $CI->load->view('inc/header');
        $CI->load->view($maincontent, $data);
        $CI->load->view('inc/footer');
    }
}

if (!function_exists('bu_address')) {
    function business_info($key)
    {
        $msg = '';
        switch ($key) {
            case 'address':
                $msg = 'National Highway, Swankha Morh Vijaypur, Jammu 184120';
                break;
            case 'email':
                $msg = 'singhjasveer79.js@gmail.com';
                break;
            case 'phone':
                $msg = '+91 70516 50074';
                break;
            case 'buname':
                $msg = 'Manawar Agencies';
                break;
        }
        return $msg;
    }
}

if (!function_exists('social_media_links')) {
    function social_media_links($key)
    {
        $msg = '';
        switch ($key) {
            case 'facebook':
                $msg = 'https://www.facebook.com/ship2bharat';
                break;
            case 'instagram':
                $msg = 'https://www.instagram.com/ship2bharat/';
                break;
            case 'twitter':
                $msg = 'https://www.twitter.com/ship2bharat';
                break;
            case 'linkedin':
                $msg = 'https://www.linkedin.com/ship2bharat';
                break;
        }
        return $msg;
    }
}
