<?php 
include("../login_php/connect_db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form action="submit.php" method="post">
        <?php
        

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM questions";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="question">';
                echo "<p>{$row['question_text']}</p>";

                $optionsSql = "SELECT * FROM options WHERE question_id = " . $row['id'];
                $optionsResult = $conn->query($optionsSql);

                if ($optionsResult->num_rows > 0) {
                    while ($optionRow = $optionsResult->fetch_assoc()) {
                        echo '<label>';
                        echo '<input type="radio" name="q' . $row['id'] . '" value="' . $optionRow['id'] . '">';
                        echo 'A. ' . $optionRow['option_a'] . ' ';
                        echo 'B. ' . $optionRow['option_b'] . ' ';
                        echo 'C. ' . $optionRow['option_c'];
                        echo '</label><br>';
                    }
                }

                echo '</div>';
            }
        }

        $conn->close();
        ?>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
