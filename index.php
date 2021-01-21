<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quests</title>
    </head>
    <body>
        <h2>Quests</h2>
        <div>
            <?php
            
            $ident = $_GET['id'];
            $mysqli = new mysqli("localhost", "root", "","missions");
            
            if($mysqli->connect_errno){
                echo("Connect failed: ".$mysqli->connect_errno);
                exit();
            }
                                  ("SELECT * from quests WHERE id=".$ident);
            $result=$mysqli->query("SELECT * from quests WHERE id=$ident");
            
            //$result=$mysqli->query("SELECT * from quests);
            //echo($result->num_rows);
            
            $row = $result->fetch_object();
            echo ($row->id." ".$row->descripcion);
            $result->free();
            $mysqli->close();
             
            
            ?>
        </div>
    </body>
</html>
