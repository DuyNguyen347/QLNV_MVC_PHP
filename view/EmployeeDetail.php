<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Thông tin chi tiết nhân viên:</h2>
    <?php foreach($employee as $e): ?>
        <h4>ID Nhân viên:  <?php echo $e->idnv?></h4>
        <h4>Tên Nhân viên:  <?php echo $e->hoten?></h4>
        <h4>ID phòng ban:  <?php echo $e->idpb?></h4>
        <h4>Địa chỉ:  <?php echo $e->diachi?></h4>
    <?php endforeach; ?>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>