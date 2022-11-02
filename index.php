
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
        <?php
		$con = new mysqli("127.0.0.1", "root", " ", "mydb");
        $pyt = $con->query("SELECT id, description FROM questions");
        $odp = $con -> query("SELECT description, questions_id,is_right FROM answers");
        echo '<form method="POST" action="wynik.php">';
        $rows = $res->fetch_all(MYSQLI_ASSOC);
            
           for($i=0;$i<count($rows);$i++) 
        {
            echo 'div class="  ">pytanie '$i: '
            
            
            //////
            echo $rows[$i]["description"];
            $res2 = %con->query("SELECT * FROM answers WHERE");
            $rows2 = $res2->fetch_all(MYSQLI_ASSOC);
            for($j=0;$j<count($rows2);$j++){
                echo 'input type="checkbox">'.$rows2[$j]["description"].
            };
           echo '<input type>="submit"/>';
                ?>
            
            
        </form>
    </body>
</html>
            
            
            
           
        
        
        
        
        
        