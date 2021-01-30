<?php 

$countries = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;


$capitals=explode(' ',join($countries,' '));

shuffle($capitals);



$index=0;
$questions=[
    ["id"=>1,
    "question"=>'what is the capital  of Italy ?',
    "options"=>["Roma",$capitals[$index++],$capitals[$index++]]] ,

    ["id"=>2,
    "question"=>'what is the capital  of Luxembourg?',
    "options"=>["Luxembourg",$capitals[$index++],$capitals[$index++]]],

    ["id"=>3,
    "question"=>'what is the capital  of Belgium?',
    "options"=>["Brussels",$capitals[$index++],$capitals[$index++]]],

    ["id"=>4,
    "question"=>'what is the capital  of Denmark?',
    "options"=>[$capitals[$index++],$capitals[$index++],"Denmark"]],

    ["id"=>5,
    "question"=>'what is the capital  of Finland ?',
    "options"=>[$capitals[$index++],$capitals[$index++],"Helsinki"]],

    ["id"=>6,
    "question"=>'what is the capital  of Slovakia ?',
    "options"=>[$capitals[$index++],$capitals[$index++],"Bratislava"]],

    ["id"=>7,
    "question"=>'what is the capital  of Slovenia ?',
    "options"=>["Ljubljana",$capitals[$index++],$capitals[$index++]]],

    ["id"=>8,
    "question"=>'what is the capital  of Spain ?',
    "options"=>[$capitals[$index++],$capitals[$index++],"Madrid"]],

    ["id"=>9,
    "question"=>'what is the capital  of Austria ?',
    "options"=>["Vienna",$capitals[$index++],$capitals[$index++]]],

    ["id"=>10,
    "question"=>'what is the capital  of Sweden ? ',
    "options"=>[$capitals[$index++],$capitals[$index++],"Stockholm"]],

    ];
echo '<pre>';
// print_r($questions);

function generateOptions($questions){
    $arr=[];
    foreach ($questions as  $question) {

        preg_match("/of.+\?/",$question['question'], $matches) ;
        array_push($arr,$matches[0]) ;

    }
    return $arr;
}
print_r(generateOptions($questions));

?>