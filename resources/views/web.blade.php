<?php 
echo $section['name']; 
echo "<pre>";
echo $section['age'];
echo "<pre>";
if($section['name'] ='saumil'){
   echo "okay,true";
   echo "<pre>";
}
else{
    echo "not true";
}
foreach ($section as $key => $value) {
    echo $value; echo "<pre>";
}
for($i = 0; $i < 10; $i++)
 {
        echo "The current value is".$i."<br/><br/>";
}
?>