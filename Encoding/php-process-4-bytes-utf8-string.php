<?php
/***
unicode inspect : https://apps.timwhitlock.info/unicode/inspect/hex/1F483
**/

$s = '💃'; // emoji takes 4 bytes in UTF-8

$len = iconv_strlen($s, 'UTF-8');  // if this function return false , you should change another editor for nice utf-8 supporting

packString($s);

 function packString($ss)
 {
        $hex = unpack('H*', $ss);

        $hex_arr = str_split($hex[1], 2);

        $bin_arr = array();

        foreach($hex_arr as $ha){
                $bin_arr[] = base_convert($ha, 16, 2);
        }

        var_dump($hex);var_dump($bin_arr);
 }
 
 /****
 ---- output ---- 
 
 array(1) {
  [1]=>
  string(8) "f09f9283"
}
array(4) {
  [0]=>
  string(8) "11110000"
  [1]=>
  string(8) "10011111"
  [2]=>
  string(8) "10010010"
  [3]=>
  string(8) "10000011"
}
 
 According to UTF-8 encoding rules, this character take four bytes space 
 more like this  :   11110000 10011111 10010010 10000011
 and in unicode  :   00000001 11110100 10000011
 
 **/
