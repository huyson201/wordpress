
<?php
/*
Plugin Name: Remove_Unicode_char
Plugin URI: -------
Description: Hướng dẫn tạo plugin - Demo plugin xóa dấu của kí tự unicode
Version: 1.0
Author: Team B.
Author URI: ---------
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

//Code Phía dưới
function RemoveUnicode($str) {

    if (!$str)

        return false;

    $unicode = array(

        'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

        'd' => 'đ',

        'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

        'i' => 'í|ì|ỉ|ĩ|ị',

        'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

        'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

        'y' => 'ý|ỳ|ỷ|ỹ|ỵ',

    );

    foreach ($unicode as $nonUnicode => $uni)

        $str = preg_replace("/($uni)/i", $nonUnicode, $str);

    return $str;

}

function addTohH1($string) {
    $modified =  "<h1>". $string . "<h1>";
    return $modified;
}
add_filter('addTohH1', 'addTohH1' );

$something = "nhom B";
echo apply_filters( "addToH1", $something );

function hello_word() {
    echo "Hello_world";

}
add_shortcode('helloworld','hello_word');
add_filter('helloworld', 'hello_word' );
add_shortcode('RemoveUnicode','RemoveUnicode');
add_filter('RemoveUnicode', 'RemoveUnicode' );



?>
<?php  do_shortcode("[Shortcode_name param1 = '' , param2 = '']"); ?>
