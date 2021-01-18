<!-- php string 1. Write a PHP script to : a) transform a string all uppercase letters. b) transform a string all lowercase letters. c) make a string's first character uppercase. d) make a string's first character of all the words uppercase. -->
<?php
$strign = "Hello world ";
echo "~~~~~~~~~~Q1~~~~~~~~~~~~~~~";
echo"<br>";
echo strtoupper($strign); 
echo"<br>";
echo strtolower($strign);
echo"<br>";
echo ucfirst($strign);
echo"<br>";
echo ucwords($strign);
echo"<br>";
?>


<!-- Write a PHP script to split the following string. Sample string : '082307' Expected Output : 08:23:07 -->
<?php
echo "~~~~~~~~~~Q2~~~~~~~~~~~~~~~";
echo"<br>";
$string = "082307";
$str = str_split($string, 2);
$n_str = implode(":", $str );
echo $n_str;
// Another way
// $string = "082307";
// $str = chunk_split($string, 2, ":");
// print_r($str);
echo"<br>";
?>


<!-- Write a PHP script to check whether a string contains a specific string? Sample string : 'The quick brown fox jumps over the lazy dog.' Check whether the said string contains the string 'jumps'. -->
<?php
echo "~~~~~~~~~~Q3~~~~~~~~~~~~~~~";
echo"<br>";
$string= "The quick brown fox jumps over the lazy dog.";
if(strpos($strign, 'jumps')) {
	echo "that's right";
}else{
	echo "Wrong";
}
echo"<br>";
?>


<!-- Write a PHP script to extract the file name from the following string. Sample String : 'www.example.com/public_html/index.php' Expected Output : 'index.php' -->
<?php
echo "~~~~~~~~~~Q4~~~~~~~~~~~~~~~";
echo"<br>";
$strign= substr( "www.example.com/public_html/index.php", -9);
echo $strign ;
echo"<br>";
?>


<!-- Write a PHP script to extract the user name from the following email ID. Sample String : 'Orange@example.com' Expected Output : 'Orange' -->
<?php
echo "~~~~~~~~~~Q5~~~~~~~~~~~~~~~";
echo"<br>";
$string = substr("Orange@example.com",0,-12);
echo $string ;
echo"<br>";
?>


<!-- Write a PHP script to get the last three characters of a string. Sample String : 'Orange@example.com' Expected Output : 'com' -->
<?php
echo "~~~~~~~~~~Q6~~~~~~~~~~~~~~~";
echo"<br>";
 $string = substr("Orange@example.com", -3);
 echo $string ;
 echo"<br>";
?>


<!-- Write a PHP script to generate simple random passwords [do not use rand() function] from a given string. Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' Note : Password length may be 6, 7, 8 etc. Expected OutPut: 254ABCc -->
<?php
echo "~~~~~~~~~~Q7~~~~~~~~~~~~~~~";
echo"<br>";
function password_generate($chars){ 
  $string= "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
  return substr(str_shuffle($string), 0, $chars);
}
  echo password_generate(8);
	echo"<br>";
?>


<!-- Write a PHP script to replace the first 'the' of the following string with 'That'. Sample date : 'the quick brown fox jumps over the lazy dog.' Expected Result : That quick brown fox jumps over the lazy dog. -->
<?php
echo "~~~~~~~~~~Q8~~~~~~~~~~~~~~~";
echo"<br>";
$str= "the quick brown fox jumps over the lazy dog.";
$result= preg_replace('/the/', 'That', $str, 1); // NOT FULY UNDERSTAND WHY WE PUT /THE/ 2 BACKSLASH
echo $result;
echo"<br>";
?>


<!-- Write a PHP script to find the first character that is different between two strings. String1 : 'football' String2 : 'footboll' Expected Result : First difference between two strings at position 5: "a" vs "o" -->
<?php
echo "~~~~~~~~~~Q9~~~~~~~~~~~~~~~";
echo"<br>";
//NOT FULY UNDERSTAND
$str1 = 'football';
$str2 = 'footboll';
$postion = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$postion, $str1[$postion], $str2[$postion]);
echo"<br>";
?>


<!-- Write a PHP script to put a string in an array. Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky."; Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star," [1]=> string(26) "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." } -->
<?php
echo "~~~~~~~~~~Q10~~~~~~~~~~~~~~~";
echo"<br>";
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$array = explode("\n", $str);
var_dump($array);
echo"<br>";
?>


<!-- Write a PHP script to print the next character of a specific character. Sample character : 'a' Expected Output : 'b' Sample character : 'z' Expected Output : 'a' -->
<?php
echo "~~~~~~~~~~Q11~~~~~~~~~~~~~~~";
echo"<br>";
$cha = 'z';
$next_cha = ++$cha; 
echo $next_cha[0];
echo"<br>";
?>


<!-- Write a PHP script to remove a part of a string from the beginning. Sample string : 'orange@example.com' Expected Output : 'example.com' -->
<?php
echo "~~~~~~~~~~Q12~~~~~~~~~~~~~~~";
echo"<br>";
 $string = substr("Orange@example.com",7);
 echo $string ;
 echo"<br>";
?>


<!-- Write a PHP script to insert a string at the specified position in a given string. Original String : 'The brown fox' Insert 'quick' between 'The' and 'brown'. Expected Output : 'The quick brown fox' -->
<?php
echo "~~~~~~~~~~Q13~~~~~~~~~~~~~~~";
echo"<br>";
$str = 'The brown fox';
$string = substr_replace($str, 'quick'.' ', 4, 0);
echo $string;
echo"<br>";
?>


<!-- Write a PHP script to get the first word of a sentence. Original String : 'The quick brown fox' Expected Output : 'The' -->
<?php
echo "~~~~~~~~~~Q14~~~~~~~~~~~~~~~";
echo"<br>";
$str= "The quick brown fox";
echo strtok($str, " ");
echo"<br>";
?>


<!-- Write a PHP script to remove all leading zeroes from a string. Original String : '000547023.24' Expected Output : '547023.24' -->
<?php
echo "~~~~~~~~~~Q15~~~~~~~~~~~~~~~";
echo"<br>";
$str= "000547023.24";
echo ltrim($str, "0");
echo"<br>";
?>


<!-- Write a PHP script to remove part of a string. Original String : 'The quick brown fox jumps over the lazy dog' Remove 'fox' from the above string. Expected Output : 'The quick brown jumps over the lazy dog' -->
<?php
echo "~~~~~~~~~~Q16~~~~~~~~~~~~~~~";
echo"<br>";
$str= "The quick brown fox jumps over the lazy dog";
echo str_replace("fox", "", $str); // find, replace, string
echo"<br>";
?>


<!-- Write a PHP script to remove trailing slash from a string. Original String : 'The quick brown fox jumps over the lazy dog///' Expected Output : 'The quick brown fox jumps over the lazy dog' -->
<?php
echo "~~~~~~~~~~Q17~~~~~~~~~~~~~~~";
echo"<br>";
$str= "The quick brown fox jumps over the lazy dog///";
echo substr($str,0, -3);
//Another way
// echo rtrim($str, '/');
echo"<br>";
?>


<!-- Write a PHP script to get the characters after the last '/' in an url. Sample URL : 'http://www.example.com/5478631' Expected Output : '5478631' -->
<?php
echo "~~~~~~~~~~Q18~~~~~~~~~~~~~~~";
echo"<br>";
$str= "http://www.example.com/5478631";
echo substr($str,strrpos($str, '/')+1);
echo"<br>";
?>


<!-- Write a PHP script to replace Special characters from the following string. Sample String : '"\1+2/32:2-3/43' Expected Output : '1 2 3 2 2 3 4 3' -->
<?php
echo "~~~~~~~~~~Q19~~~~~~~~~~~~~~~";
echo"<br>";
$str = "\1+2/32:2-3/43";
$str = preg_replace("/[^A-Za-z0-9]/", ' ', $str);
echo $str;
echo"<br>";
?>


<!-- Write a PHP script to select first 5 words from the following string. Sample String : 'The quick brown fox jumps over the lazy dog' Expected Output : 'The quick brown fox jumps' -->
<?php
// I thoght that we should remove fox  
// $str = 'The quick brown fox jumps over the lazy dog';
// $arr = explode(' ', $str);
// unset($arr[3]);
// $new_str= implode(' ', $arr);
// echo $new_str;

echo "~~~~~~~~~~Q20~~~~~~~~~~~~~~~"; 
echo"<br>";
//the answer
$str = 'The quick brown fox jumps over the lazy dog';
echo substr($str, 0,25);
echo"<br>";
?>


<!-- Write a PHP script to remove comma(s) from the following numeric string. Sample String : '2,543.12' Expected Output : 2543.12 -->
<?php
echo "~~~~~~~~~~Q21~~~~~~~~~~~~~~~";
echo"<br>";
$str = '2,543.12';
$res=  str_replace(',', '', $str);
echo $res;
echo"<br>";
?>