<?php 
//1
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
// 2
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
// 3
$tzt= 'vd vd vd vvvvvvvvv wwwwwwwwwwwwwww bbbbbbbbbbbbb';
function transform($tzt,$list=array()){
  $tzt=(string)$tzt;
  $list=explode(" ",$tzt);
    return implode("_",$list);
}

echo transform($tzt);
////4
$city["Московская область"]=array( 'Москва', 'Зеленоград', 'Клин');
$city['Ленинградская область']=array ('Санкт-Петербург', 'Всеволожск',' Павловск', 'Кронштадт');
$city['Рязанская область']=array('Рязань','Пронск','Тырнова','Подвязье');

foreach($city as $key=>$value){
  echo $key."<br>";
    foreach($value as $val){
      echo $val."<br>";
    }
}
///5
$alfavit=array(
"а" => 'a','б' => 'b', 'в'=> 'v','г' => 'g','д' => 'd', 'е' => 'e','ё' => 'e',
'ж' => 'zh', 'з' => 'z' ,'и' => 'i','й' => 'i','к ' => 'k','л' => 'l','м' => 'm','н' => 'n',
'о' => 'o','п' => 'p','р' => 'r','с'=>'s', 'т' => 't','у' => 'u','ф' => 'f',  'х' =>'kh',
'ц' => 'ts','ч' => 'ch','ш' => 'sh',  'щ'=> 'shch',  'ъ'=>'ye ','ы' => 'y',  'э' => 'e','ю' => 'iu',
'я' =>'ia');
///
 function translite($text,$alfavit) {
    $text = (string) $text;
    $text = function_exists('mb_strtolower') ? mb_strtolower($text) : strtolower($text);
    $text = strtr($text,$alfavit);
    return $text; 
}
echo translite("Привет мир",$alfavit);
///6

function filter($city,$search='К'){
    foreach($city as $key=>$val){
        echo $key."<br>";
    foreach($val as $vals){
        if(mb_strpos($vals,$search)===0){
            echo $vals."<br>";
  }
  }
      }
}
filter($city,'К');
///7
function url_translite($alfavit,$text){
    $text=translite($text,$alfavit);
    $result=transform($text,$list);
    return $result;
    
}
echo url_translite($alfavit,"Привет мир");
