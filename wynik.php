<html>
<body>
         <?php
print_r($_POST);
 $wynik = 0;
foreach($_POST as $key =>$value) {
echo "$key - $value <br>";
$wynik = $wynik + $value;
 };
echo  $wynik;
?>
</body>
 </html>
