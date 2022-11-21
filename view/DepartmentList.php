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
    <h2>Danh sách phòng ban:</h2>
    <table>
        <tr>
            <th>IDPB</th>
            <th>Tên phòng ban</th>
            <th>Mô tả</th>
        </tr>
        <?php foreach ($departmentList as $d) : ?>
            <tr>
                <td><?php echo $d->idpb ?></td>
                <td><?php echo $d->tenpb ?></td>
                <td><?php echo $d->mota ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="../index.php">Home page</a></p>
</body>

</html>