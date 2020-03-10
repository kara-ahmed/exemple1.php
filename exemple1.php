<html>
<header>
<title>test</title>
</header>
<body>
<?php 

   function affiche($argument){     
    return "La longueur de la chaîne est : ". strlen($argument)."\n"; 
   } 
   $argument="hello";
//    echo affiche($argument)."";

function maj($mot){
    return ucwords($mot);
}
$mot="bonjour le monde";
// echo maj($mot);
$int= [a, b, c, d, e, f, g, h, i, j];   
// // $char=[i];
// // $char= [1, 2, 3, 4, 5, 6, 7, 8, , 10];
// $char = [
//  1=>a,
//  2=>b,
//  3=>c,
//  4=>d,
//  5=>e,
//  6=>f,
//  7=>g,
//  8=>h,
//  9=>g,
//  10=>k];   
//     //  foreach ($int as $char) {
//     // echo $char[1];
//     // };
//     foreach ($char as $i => $value) {
//         unset($array[$i]);
//     }
//     // var_dump($char);
for($i=0;$i<=10;$i++){
    foreach($int as $i);
}
print_r($int[$i]);

?>
</body>

</html>
