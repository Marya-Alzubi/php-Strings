<?php 
//
//
//
// 1. Write a PHP script to :
// a)	transform a string all uppercase letters.
// b)	transform a string all lowercase letters.
// c)	make a string's first character uppercase.
// d)	make a string's first character of all the words uppercase.
$string = "My Name Is Maria";
echo strtoupper($string) . "<br>" . strtolower($string) . "<br>" .ucfirst($string)  . "<br>" . ucwords($string) . "<hr>" ;
//
//
//
//2. Write a PHP script to split the following string..
// Write a PHP script to split the following string.
// Sample string : '082307'
// Expected Output : 08:23:07
$str1= '082307'; 
// echo chunk_split($str1, 2, ':') . "<br>"; // output 08:23:07: 
echo substr(chunk_split($str1, 2, ':'), 0, -1) . "<hr>";
//
//
//
// 3. Write a PHP script to check whether a string contains a specific string? Sample string : 'The quick brown fox jumps over the lazy dog.'
// Check whether the said string contains the string 'jumps'.

$str2 = 'The quick brown fox jumps over the lazy dog.';
$word = "jumps" ;
if(strpos($str2,$word) ){
    echo "(jumps) word is exist!" . "<hr>";

} else {
    echo "error" . "<hr>";
}
//
//
//
//4. Write a PHP script to convert the value of a PHP variable to string.
$variable = 2591996;
$strConvert =  strval( $variable ) ;
echo $strConvert . "<br>" ;
if (is_string ( $strConvert )) {
	echo "Yes, it is converted to string " ."<hr>";
} else {
	echo "No, it was NOT converted to string " . "<hr>";
}
//
//
//
// 5.	Write a PHP script to extract the file name from the following string. Sample String : 'www.example.com/public_html/index.php'
// Expected Output : 'index.php'
$str5 = 'www.example.com/public_html/index.php' ;
$split = explode("/", $str5);
// Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter.
echo end($split) . "<hr>";
echo $split[count($split)-1] . "<hr>" ;
//
//
//
// 6.	Write a PHP script to extract the user name from the following email ID. Sample String : 'Ayham@example.com'
// Expected Output : 'Ayham'
$str6 = 'Ayham@example.com' ;
$split = explode("@", $str6);
echo reset($split) . "<hr>";
//
//
//
// 7.	Write a PHP script to get the last three characters of a string. Sample String : 'Ayham@example.com'
$dynamicstring = 'Hello world lorem lorem!!';
$newstring = substr($dynamicstring, -3);
echo $newstring . "<hr>";
//
//
//
// 8.	Write a PHP script to format values in currency style. Sample values : valuel = 65.45, value2 = 104.35
// Expected Result : 169.80
$value1 = 65.45;
$value2 = 104.35;
echo sprintf("%1.2f", $value1+$value2). "<hr>"; //2f is mean 2 numbers after dot!
//
//
//
// 9.	Write a PHP script to generate simple random passwords [do not use rand() function] from a given string.
// Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
// Note : Password length may be 6, 7, 8 etc.
$str9 = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
// shufle
$pass = substr(str_shuffle($str9),0,7);
echo $pass . "<hr>";
//
//
//
// 10.	Write a PHP script to replace the first 'the' of the following string with 'That'.
// Sample date : 'the quick brown fox jumps over the lazy dog.' Expected Result : That quick brown fox jumps over the lazy dog.
$str10 = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str10, 1)."<hr>"; 
//
//
//
// 11.	Write a PHP script to find the first character that is different between two strings.
// Stringl : 'football' String2 : 'footboll' Expected Result : First difference between two strings at position 5: "a" vs "o"
$str11 = 'football';
$str112 = 'footboll';
$str_pos = strspn($str11 ^ $str112, "\0");
echo $str_pos;
printf('First difference between two strings at position %d: "%s" vs "%s"', $str_pos, $str11[$str_pos], $str112[$str_pos]);
echo "<hr>";
//
//
//
// 12.	Write a PHP script to put a string in an array.
// Sample strings : "Twinkle, twinkle, little star, lnHow I wonder what you are.inUp above the world so high, lnLike a diamond in the sky.";
// Expected Result (using var dump()) : array(4) { [O]=> string(30) "Twinkle, twinkle, little star," [1]=> string(26) "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." }
$str1 = "Twinkle, twinkle, little star," ;
$str2 = "How I wonder what you are.";
$str3 = "Up above the world so high,";
$str4 = "Like a diamond in the sky.";
$arr = array();
array_push($arr, $str1 , $str2 , $str3 , $str4);
print_r(var_dump($arr));
echo "<hr>";
//
//
$str = "Twinkle, twinkle, little star,<br> How I wonder what you are.<br> Up above the world so high,<br> Like a diamond in the sky." .  "<hr>";
$arra1 = explode("<br>", $str);
var_dump($arra1);
echo "<hr>";
//
//
//
//13.	Write a PHP script to get the filename component of the following path. Sample path : "https://www.orange.com/index.php"
// Expected Output : 'index'
$path = 'www.example.com/public_html/index.php';
$file = basename($path, ".php"); 
echo $file."<hr>";
//
//
//
// 14.	Write a PHP script to print the next character of a specific character. Sample character : 'a' Expected Output : 'b' Sample character :'z' Expected Output : 'a'
$cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
echo  "<hr>" ;
//
//
//
//15
$str6 = 'rayy@exampie.corn' ;
$split = explode("@", $str6);
echo reset($split) . "<hr>";
echo end($split) . "<hr>";
//
//
//
//16
echo bin2hex("firas is th best") ."<hr>"  ;
//
//
//
//17
$original_string = 'The brown fox';
$string_to_insert ='quick ';
$new_string = substr_replace($original_string, $string_to_insert , 4 , 0);
echo $new_string."<hr>";
//
//
//
//18
$str18 = 'The quick brown fox' ;
$arr = (explode(" " , $str18  )); // array does nit accept echo
echo $arr[0] ."<hr>" ;
//
//
//
//19
$str19 = '000547023.24';
$str19 = ltrim($str19 , "0"); 
echo $str19  ."<hr>"; 
 //
 //
 //
 //20
 $str20 = 'The quick brown fox jumps over the lazy dog' ;
 echo str_replace("fox" , "" , $str20 ) ."<hr>" ;
 //
 //
 //
 //21
 $str21 = 'The quick brown fox jumps over the lazy dog///' ;
 echo str_replace("///" , "" , $str21 ) ."<hr>" ;
 echo chop($str21 , "/")  ."<hr>";
 echo rtrim($str21 , "/")  ."<hr>" ;
 //
 //
 //
 //
 //22
 $E22 = 'http://www.example.com/5478631';
  echo strstr($E22 , "5" , false) . "<hr>";
  echo substr(strrchr($E22, '/'),1) . "<hr>";
  //
  //
  //
  //23
  $my_str = '\"\1+2/3*2:2-3/4*3'  ;
echo str_replace(str_split('\"7+1+/*:-'), ' ', $my_str)."<hr>";
//
//
//
//24
$inputstring = 'The quick brown fox jumps over the lazy dog';
$pieces = explode(" ", $inputstring);
$first_part = implode(" ", array_splice($pieces, 0, 5));
echo $first_part ."<hr>";
//
//
//
//25
$str25 = '2,543.12' ;
echo str_replace(",", "", $str25) ."<hr>";
//
//
//
//26
$azRange = range('A', 'Z');
foreach ($azRange as $letter)
{
  print("$letter\n");
}
//
//
//
// EXTRA QUESTION ABOUT CONDITION ////
$mark = -1 ;
if ($mark >=90 && $mark<= 100){
    echo "A" . "<hr>";
}
elseif ($mark >=80 && $mark<= 89) {
    echo "B" . "<hr>";
}
elseif ($mark >=70 && $mark<= 79) {
    echo "C" . "<hr>";
}
elseif ($mark >=50 && $mark<= 69) {
    echo "D" . "<hr>";
}
elseif ($mark <50 && $mark>= 0 ) {
    echo "FAIL" . "<hr>";
}
else {
    echo "the number is not right" . "<hr>";
}
//
//
//
?>



