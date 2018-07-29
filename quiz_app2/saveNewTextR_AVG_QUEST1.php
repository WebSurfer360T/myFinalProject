<?php
$myFileR_AVG_QUEST1 = fopen("myTextR_AVG_QUEST1.txt", "w");
$textR_AVG_QUEST1 = $_POST[newTextR_AVG_QUEST1];

fwrite($myFileR_AVG_QUEST1, $textR_AVG_QUEST1);

fclose($myFileR_AVG_QUEST1);


?>

