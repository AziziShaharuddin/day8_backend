<html>
    <head></head>
    <body>
        <form action="q1.php" method="post">
            <select name="pattern">
                <option value="half">Half</option>
                <option value="full">Full</option>
            </select>
            <input type="submit">
        </form>
        <?php           
            $pattern = $_POST["pattern"];
            if ($pattern == 'half') {
                half();
            }
            else if ($pattern == 'full') {
                full();
            }
            function half() {
                for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j < 5; $j++) {
                        if ($i >= $j) {
                            echo "* ";
                        } else {
                            echo " ";
                        }
                    } echo "<br>"; 
                }
            }

            function full(){
                for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j < 5; $j++) {
                        if ($i >= $j) {
                            echo "* ";
                        } else {
                            echo " ";
                        }
                    } echo "<br>"; 
                }
                for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j < 5; $j++) {
                        if ($i <= $j) {
                            echo "* ";
                        } else {
                            echo " ";
                        }
                    } echo "<br>"; 
                } 
            }
        ?>
    </body>
</html>