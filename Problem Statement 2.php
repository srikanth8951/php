<?php

$input_1 = readline("Enter the input");//enter number of breads vada and samosa
$input_2 = readline("Enter the input");// enter price of vada and samosa

$arrya_1 = explode(" ",$input_1);
$arrya_2 = explode(" ",$input_2);
$bread = (int)$arrya_1[0];
$vada = (int)$arrya_1[1];
$samosa = (int)$arrya_1[2];

$Vadapav = (int)$arrya_2[0];
$Samosapav = (int)$arrya_2[1];

$totalPrice = 0;

if ($Samosapav > $Vadapav) {
    
    while($bread>=2){
        if ($samosa==0 and $bread==0) {
            break;
        }
        if($samosa>0){
            $totalPrice = $totalPrice + $Samosapav;
            $samosa = $samosa-1;
            $bread = $bread-2;
        }
        elseif ($vada>0) {
            $totalPrice = $totalPrice + $Vadapav;
            $vada = $vada-1;
            $bread = $bread-2;
        } 
        
    }
    
}
else {
   while($bread>=2){
        if ($samosa==0 and $bread==0) {
            break;
        }
        if($vada>0){
            $totalPrice = $totalPrice + $Vadapav;
            $vada = $vada-1;
            $bread = $bread-2;
        }
        elseif ($samosa>0) {
            $totalPrice = $totalPrice + $Samosapav;
            $samosa = $samosa-1;
            $bread = $bread-2;
        } 
        
    } 
}
echo("Maximum profit possible is Rs.".$totalPrice );

?>
