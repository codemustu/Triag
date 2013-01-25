<?php
//    First File Open and take all the words in an array
//    iterate throught the words and add the characters
//    run them through the isperfectsquare function
//    if yes then print them as triangualar number and set the counter++ to determine the count of triangular numbers
$row = 1;
$filename = '/var/www/vhosts/test.in/httpdocs/img/words.txt';
if (($handle = fopen($filename, "r")) !== FALSE) {
    $data = fgetcsv($handle, 1000, ",");
    $num = count($data);
    echo "<p> $num words: <br /></p>\n";
    fclose($handle);
    for ($c=0; $c < $num; $c++) {
            // now use split string and take the word in array
            $arr1 = str_split($data[$c]);
            $arrcnt=count($arr1);
            $sum=0;
             for ($d=0; $d < $arrcnt; $d++) {
                 $sum=$sum+ord($arr1[$d])-64;
             }
             //run thru the isperfectsquare block
             $tr = 8*$sum+1;
             $sqrt_tr = sqrt($tr);
             if (strval(intval($sqrt_tr)) == strval($sqrt_tr)) {
                echo $sum.  "<br />\n";
                $count++;
             } 
   }
   echo $count;
}
?>
