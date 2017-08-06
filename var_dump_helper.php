<?php

if (!function_exists('htmlEscape')) {
    function htmlEscape($str, $back = false, $onlyQuotes = false) {
        if (!$back) {
            $str = str_replace('"', '&quot;', trim($str));
            $str = str_replace("'", '&prime;', trim($str));

            if (!$onlyQuotes) {
                $str = str_replace('<', '&lt;', trim($str));
                $str = str_replace('>', '&gt;', trim($str));
                $str = str_replace(':', '&#058;', trim($str));
            }

            $str = str_replace("\r\n\n", '<br>', trim($str));
            //$str = str_replace("\n", '<br>', trim($str));


        } else {
            $str = str_replace('<br>', "\n", trim($str));
            $str = str_replace('<br />', "\n", trim($str ) );
        }
        return $str;
    }
}

function pre($text = '')
{
    return '<pre>' . $text . '</pre>';
}

function printR($arr, $escape = true, $pre = true) {
    $export = print_r($arr, true);
    if ($escape)
        $export = htmlEscape($export);
    if ($pre)
        $export = pre($export);
    return $export;

}

function diePR($arr, $escape = true, $pre = true) {
    $arr = printR($arr, $escape, $pre);
    return die($arr);
}

function dieVD($arr) {
    return die(var_dump($arr));
}

function dieJSON($arr) {
    return die(json_encode($arr));
}