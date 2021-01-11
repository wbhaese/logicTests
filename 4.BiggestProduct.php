function adjacentElementsProduct($inputArray) {
    $biggest = -1000;
    
    foreach($inputArray as $v => $valueArr){
        if($inputArray[$v + 1]){
            $result = $valueArr * $inputArray[$v + 1];

            if($result > $biggest){
                $biggest = $result;
            } 
            
        }
    }
    
    return $biggest;

}
