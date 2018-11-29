<?php 
function one($i=0){
 while($i<100){
       if($i>0){
if($i%3==0){
echo $i."<br>";
}

}
$i++;
}
    
}
one(0);
// 
$i=0;
do{

   if($i==0){
    echo $i." Это 0 <br>";
   }
    
   elseif($i%2==0) {
     echo $i." -четное <br>";
   }
   
   else{
     echo $i. " -не Четное <br>";
    }
$i++;
}
while($i<=10);
// 
$tzt= 'vd vd vd vvvvvvvvv wwwwwwwwwwwwwww bbbbbbbbbbbbb';
function transform($tzt,$list=array()){
$list=explode(" ",$tzt);
return implode("_",$list);
}

echo transform($tzt);


$city["Московская область"]=array( 'Москва', 'Зеленоград', 'Клин');
$city['Ленинградская область']=array ('Санкт-Петербург', 'Всеволожск',' Павловск', 'Кронштадт');
$city['Рязанская область']=array('Рязань','Пронск','Тырнова','Подвязье');

function translit($text){
    $alfavit ('а'=> 'a' , 
'б'=>  'b', 
'в'=> 'v' ,
'г '=>  'g' ,

'д '=> 'd', 
'е'=> 'e',
'ё'=> 'e',
' ж '=> 'zh', 
'з '=>  'z' ,
'и'=>   'i',
'й'=>  'i',
'к '=>  'k',
'л' =>  'l',
'м' =>  'm',
'н' => 'n',
'о'=> 'o',
'п' =>'p',
'р' => 'r',
'с'=>'s', 
'т' => 't',
'у' => 'u',
'ф' => 'f',  
'х' =>'kh',
'ц' => 'ts',
'ч' =>'ch',
'ш' => 'sh',  
'щ'=> 'shch',  
'ъ'=>'ye ',
'ы' => 'y',  
'э' => 'e',
'ю' => 'iu', 
'я' =>'ia'
);
$list=explode("",$text);

return $result;
}
