function centuryFromYear($year) {
    $val = strval($year/100);
    if(strpos($val, '.')){
        $newVal = intval(explode('.',$val)[0]) + 1;
    }else{
        $newVal = intval($val);
    }
    
    return $newVal;
}