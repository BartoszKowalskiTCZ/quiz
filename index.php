
<html>
	<head>
        <meta=charset="utf-8">
        <title>quiz</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
<header>
    <a href="index.html"></a>
        </header>
        
        <div class="mainpane">
<form method="post">
        <?php
		$con = new mysqli("127.0.0.1", "root", " ", "quiz");
        $res = $con->querry("SELECT * FROM questions");
        $rows = $res->fetch_all(MYSQLI_ASSOC)
        for($i=0, $i<count($rows);$i++){
            echo $rows[$i][" "];
            $res2 = %con->querry("SELECT ");
            $rows2 = $res2->fetch_all(MYSQLI_ASSOC);
            for($j=0;$count
            
            
            
            print_r($rows);
            $rows[$i]
        }
        
        
        
        
        
        
        