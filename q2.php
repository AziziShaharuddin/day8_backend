<html>
    <head></head>
    <body>
        <form action="q2.php" method="post">
        <label>Name:</label> 
        <input type="text" name="name"><br>
        <label>IC Num:</label> 
        <input type="text" name="nric"><br>
        <label>Mobile Num:</label> 
        <input type="text" name="mobNum"><br>
        <input type="submit">
        </form>
        
        <?php
        $name = $_POST["name"];
        $nric = $_POST["nric"];
        $mob_num = $_POST["mobNum"];

        function getName($name) {
            return $name;
        }
        function getIC($nric){
            return $nric;
        }
        function getMobile($mob_num){
            return $mob_num;
        }
        function displayInfo($input){
            echo $input."<br>";
        }
        
        echo "Name:"." ";
        displayInfo($name);
        echo "IC Num:"." ";
        displayInfo($nric);
        echo "Mobile Num:"." ";
        displayInfo($mob_num);

        ?>
    </body>
</html>
