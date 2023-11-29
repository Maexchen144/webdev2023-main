<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <?php
            $j = 0;
            while ($j < 5) {
                echo '<tr>';
                $i = 0;
                while ($i < 10) {
                    echo '<td>test</td>';
                    $i++;
                }
                echo "</tr>\n";
                $j++;
            }
        ?>
    </table>
</body>
</html>
