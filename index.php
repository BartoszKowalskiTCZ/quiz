<html>
<html>
	<head>
        <meta charset="utf-8">
        <title>quiz</title>
        <style type="text/css">
   body {
   background-color:beige;
        }
        </style>
    </head>
    <body>
        <form method="POST" action="wynik.php">;
        <?php	
$con = new mysqli("127.0.0.1","root","","mydb"); 
$res = $con->query("SELECT id, description FROM questions");
 $rows = $res->fetch_all(MYSQLI_ASSOC); 
for($i=0;$i<count($rows);$i++){
 echo '<b>'.$rows[$i]["description"].'</b>'.'</br>'; 
$res2 = $con->query("SELECT description, questions_id, is_right FROM answers WHERE questions_id = ".$rows[$i]['id']);
$rows2 = $res2->fetch_all(MYSQLI_ASSOC);
 for($j=0;$j<count($rows2);$j++){ 
echo $rows2[$j]["description"].'<input type="checkbox" name="'.$i.'-'.$j.'" value="'.$rows2[$j]["is_right"].'"/>'.'<br>';
        }; 
};
            ?>
            <input type="submit">
            </form>
            </body>
    </html>
          
            
        
        
	
        
        
