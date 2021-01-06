<?php
function checkPalindrome($inputString) {
    
    // Easy way:
    
    return ($inputString == strrev($inputString));  //strrev() function revert string 
    
    //Hard way:)
    
    $stringArr = str_split($inputString); 

    $revArray = [];
    for($i = count($stringArr) -1; $i >= 0; $i-- ){
        array_push($revArray, $stringArr[$i]);        
    }
    
    // var_dump(implode($revArray));
    return ($inputString == implode($revArray));

}