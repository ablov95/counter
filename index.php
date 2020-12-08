<!DOCTYPE html><head><html lang="ru"><meta charset="UTF-8"><title>Счётчик</title>
 </head>
 <body>
<div class="img">
	<img src="bg_repeat.jpg" alt="" >
</div>
<?
$counter = @file_get_contents('filename.txt') +1;
@file_put_contents('filename.txt', $counter);
echo 'Всего перезагрузок : <span style="color:red;">'.$counter.'</span>';
?>
 </body>
</html>