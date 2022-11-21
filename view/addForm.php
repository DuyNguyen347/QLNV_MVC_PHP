<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <form action="../controller/C_Employee.php?option=add" name="f2" method="post">--
            <div class="form-group">
                <label for="idnv">Mã nhân viên</label>
                <input type="text" id="idnv" name="idnv" >
            </div>
            <div class="form-group">
                <label for="name">Tên nhân viên</label>
                <input type="text" id="hoten" name="hoten" placeholder="Nhập tên nhân viên...">
            </div>
            <div class="form-group">
                <label for="department">Phòng ban</label>
                <select id="department" name="idpb">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input type="text" id="address" name="diachi" placeholder="Nhập địa chỉ...">
            </div>
            <div class="center">
                <button type="submit">Thêm</button>
                <button >Reset</button>
            </div>
        </form>
    </body>
</html>