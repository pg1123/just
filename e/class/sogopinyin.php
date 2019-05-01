<?php
/**
 * Auth: daniao
 * WebUrl: https://www.daniao.org
 * Description： 使用搜狗接口生成拼音
 **/
function c( $str ) {
    $ret = "";
    $res = file_get_contents( "http://w.sugg.sogou.com/sugg/ajaj_json.jsp?type=getpinyin&key=" . $str );
 
    $res_arr = explode( ",", $res );
    if ( count( $res_arr ) < 6 ) {
        return "api is error";
    }
    $ret = substr( explode( ",", $res )[1], 2, - 2 );
 
    return $ret;
}
?>