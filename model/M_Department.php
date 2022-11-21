<?php
include_once("E_Department.php");
include_once("Connection.php");
class Model_Department
{
    public function __construct()
    {
    }
    public function getAllDepartment()
    {
        // $sql = new Connection();
        // $result = $sql->execute("SELECT * FROM nhanvien");
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        //Lựa chọn cơ sở dữ liệu
        mysqli_select_db($link, "dulieu");
        $sql = "Select * from phongban";
        $result = mysqli_query($link, $sql);
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $idpb = $row['idpb'];
            $tenpb = $row['tenpb'];
            $mota = $row['mota'];
            //while($i != $idnv) $i++;
            $students[$i++] = new Entity_Department($idpb, $tenpb, $mota);
        }
        return $students;
    }
    public function getEmployeeDetail($stid)
    {
        $connect = new Connection();
        $sql = "SELECT * FROM nhanvien where idnv='$stid'";
        $result = $connect->execute($sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $idnv = $row['idnv'];
            $hoten = $row['hoten'];
            $idpb = $row['idpb'];
            $diachi = $row['diachi'];
            $students = new Entity_Employee($idnv, $hoten, $idpb, $diachi);
            return $students;
        }
        // return $row;
    }

    public function createStudent($id, $name, $age, $university)
    {
        try {
            $connect = new Connection();
            $sql = "INSERT INTO sinhvien (id,name,age,university) VALUES ('$id','$name','$age','$university')";
            $result = $connect->execute($sql);
        } catch (Exception $e) {
            return $e;
        }
    }
    public function deleteStudent($id)
    {
        try {
            $connect = new Connection();
            $sql = "DELETE FROM sinhvien where id='$id'";
            $result = $connect->execute($sql);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function searchStudent($method, $value)
    {
        try {
            $connect = new Connection();
            $sql = "SELECT * FROM sinhvien where $method like '%$value%'";
            $result = $connect->execute($sql);
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $age = $row['age'];
                $university = $row['university'];
                // echo "<p>$id</p>";
                // while($i!=$id){
                //     $i++;
                // }
                $students[$i++] = new Entity_Employee($id, $name, $age, $university);
            }
            if (isset($students)) {
                return $students;
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    public function updateStudent($student)
    {
        try {
            $connect = new Connection();
            $sql = "UPDATE sinhvien SET name = '$student->name', age = '$student->age', university='$student->university' WHERE id='$student->id'";
            $result = $connect->execute($sql);
        } catch (Exception $e) {
            return $e;
        }
    }
}
