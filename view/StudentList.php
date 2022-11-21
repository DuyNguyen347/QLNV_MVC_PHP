<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h2>Danh sách nhân viên:</h2>
    <table>
        <tr>
            <th>IDNV</th>
            <th>Hoten</th>
            <th>IDPB</th>
            <th>Xem chi tiết</th>
        </tr>
        <?php foreach ($employeeList as $e) : ?>
            <tr>
                <td><?php echo $e->idnv ?></td>
                <td><?php echo $e->hoten ?></td>
                <td><?php echo $e->idpb ?></td>
                <td><a href="../controller/C_Employee.php?option=show&idnv=<?php echo $e->idnv ?> ">Xem chi tiết</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="../index.php">Home page</a></p>
</body>

</html>