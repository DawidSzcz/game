
        <?php
        $server = "localhost:3306";
        $name = "Test";
        $pass = "Test";
        
        $conn = new mysqli($server, $name, $pass, "test");

        
        if ($conn->connect_error) {
            echo "fail";
            die("Connection failed: " . $conn->connect_error);
        }
        
        
        /*if(isset($_GET["insert"]) === FALSE)
        {
            $query = "insert into new_table (Name, Age) values";
            for($i = 0 ; $i < 500; $i++)
            {
                $query .= "('".$conn->real_escape_string(randomStr())."', ".rand(0, 200)."),";
            }
            $query .= "('".$conn->real_escape_string(randomStr())."', ".rand(0, 200).");";
            
            //echo $query."<br/>";
            if($conn->query($query) === TRUE)
                echo "sended";
            else
                echo $conn->error;
            
        }*/
        $result = $conn->query("select * from replays limit 5000");
        $index = 0;
        while($row = $result->fetch_assoc()) {
            echo ($index++).": Id: " . $row["id"]. " Player: " . $row["playerId"]
                . " Enemy: " . $row["enemyId"]. " version: " . $row["version"]."<br/>";
        }
        
        function randomStr(){
            $zwrot = "";
            $length = rand(1, 10);
            for($i = 0 ; $i < $length; $i++)
                $zwrot .= chr(rand(48, 122));
            return $zwrot;
        }
            
        
        ?>
