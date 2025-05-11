<?php
$name ="sikto";
//echo $name;


//array normal
$std=[1,"sikto",3.71];
foreach ($std as $v) {
    //echo $v."/r/n/";
}
$stds=[
    [1,"sikto",3.71],
    [1,"sikto",3.71],
    [1,"sikto",3.71]
];
print($stds[2][1]);
//array associtive
$stdd=["id"=>1, "name"=>"sikto","cgpa"=>3.71];
echo $stdd["cgpa"];

$stdds=[
    's1'=> ["id"=>1, "name"=>"sikto","cgpa"=>3.71],
    's2'=>["id"=>1, "name"=>"sikto","cgpa"=>3.71],
    's3'=>["id"=>1, "name"=>"sikto","cgpa"=>3.71]
    
];
print($stds[2]['id']);




?>