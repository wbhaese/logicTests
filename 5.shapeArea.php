function shapeArea($n) {
    $intShape = pow($n-1, 2); 
    $extShape = pow($n,2);

    return ($extShape + $intShape);
    
    // reduced way:
    // return (pow($n-1, 2) + pow($n,2));
}