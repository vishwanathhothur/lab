<?php
error_reporting(E_ERROR|E_PARSE);
$fp=fopen("counterlog.txt","r");
$count=fread($fp,0);
fclose($fp);
$count=$count+1;
echo "<p>page views:".$count."</p>";
$fp=fopen("counterlog.txt","w");
fwrite($fp,$count);
fclose($fp);
?>
