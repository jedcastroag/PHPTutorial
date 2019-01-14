<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculator</title>
    </head>
    <body>
        <form class="" method="get">
            <input type="text" name="num1" value="" placeholder="Number 1">
            <input type="text" name="num2" value="" placeholder="Number 2">
            <select class="" name="operator">
                <option value="">Add</option>
                <option value="">Substract</option>
                <option value="">Multiply</option>
                <option value="">Divide</option>
            </select>
            <br>
            <button type="submit" name="submit">Calculate</button>
        </form>
        <?php
            if (isset($_GET['submit'])) {
                if (is_null($_GET['num1']) || !is_null($_GET['num2'])) {
                    echo "A number field is empty, give it a number!";
                } else {
                    $result1 = $_GET['num1'];
                    $result2 = $_GET['num2'];
                    $operator = $_GET['operator'];
                    echo "The Answer is: ";
                    switch ($operator) {
                        case "Add":
                            echo $result1 + $result2;
                            break;
                        case "Substract":
                            echo $result1 - $result2;
                            break;
                        case "Multiply":
                            echo $result1 * $result2;
                            break;
                        case "Divide":
                            echo $result1 / $result2;
                            break;

                        default:
                            // code...
                            break;
                    }
                }
            }
        ?>
    </body>
</html>
