<html>
    <head></head>
    <body>
        <form action="q4.php" method="post">
            <select name="questions">
                <option value="q1">What is your name?</option>
                <option value="q2">What is your hobby?</option>
                <option value="q3">What is your favourite club?</option>
            </select>
            <input type="text" name="input">
            <input type="submit">
        </form>
        <?php
            $question = $_POST["questions"];
            $output = $_POST["input"];
            if ($question == 'q1') {
                quest1();
            }
            elseif ($question == 'q2'){
                quest2();
            }
            else {
                quest3();
            }

            function quest1(){
                global $output;
                echo "My name is ".$output;
            }
            function quest2() {
                global $output;
                echo "I like to ".$output;
            }
            function quest3(){
                global $output;
                echo "My favorite club is ".$output;
            }
        ?>
    </body>
</html>