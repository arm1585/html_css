<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Processed Data</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 18px;
        }

        table, td, th {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        table {
            margin: 0 auto;
        }
        td, th {
            padding: 10px;
        }

    </style>
</head>
<body>
<table>
    <?php foreach ($_POST as $key => $value) { ?>
        <tr>
            <th><?= $key ?></th>
            <td><?= $value ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>