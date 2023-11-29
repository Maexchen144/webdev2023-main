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
        <tr>
        <?php
            for ($i = 0; $i < 10; $i++) {
                echo '<td>test</td>';
            }
        ?>
        </tr>
    </table>
</body>
</html>
