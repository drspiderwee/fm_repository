<?php
header("Content-Type: text/html; charset=utf-8");
$adminemail="mintjayatspace@gmail.com";  // e-mail админа 
 
 
$date=date("d.m.y"); // число.месяц.год 
 
$time=date("H:i"); // часы:минуты:секунды 
 
$backurl="index.php?view=start_page";  // На какую страничку переходит после отправки письма 

$name=$_POST['name']; 

$number=$_POST['number'];
 
$email=$_POST['email']; 
 
$msg=$_POST['message']; 



$result = mail("$adminemail", "$date $time Сообщение 
от $name","$email", "$msg", "$number");



//-------------------------Создаем сообщение в текстовом файле
$f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time Сообщение от $name"); 
fwrite($f,"\n $number ");
fwrite($f,"\n $email "); 
fwrite($f,"\n $msg "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
//----------------------------Создаем сообщение в текстовом файле

if ('$result') {
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 
<p>Уважаемый</p>$name ! 

 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  
exit; 
 
 }
else {
echo "<p>Ваше сообщение не удалось отправить</p>";
}
?>