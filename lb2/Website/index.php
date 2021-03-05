<!DOCTYPE html>
<html>
<body>

<?php
$values = exec("python time.py 2<&1");
print $values . "<BR>";
echo file_get_contents( "content.txt" );

?>

</body>
</html>