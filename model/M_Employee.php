<?php
include_once("E_Employee.php");
include_once("Connection.php");
class Model_Employee
{
    public function __construct()
    {
    }
    public function getAllEmployee()
    {
        // $sql = new Connection();
        // $result = $sql->execute("SELECT * FROM nhanvien");
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        //Lựa chọn cơ sở dữ liệu
        mysqli_select_db($link, "dulieu");
        $sql = "Select * from nhanvien";
        $result = mysqli_query($link, $sql);
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $idnv = $row['idnv'];
            $hoten = $row['hoten'];
            $idpb = $row['idpb'];
            $diachi = $row['diachi'];
            //while($i != $idnv) $i++;
            $students[$i++] = new Entity_Employee($idnv, $hoten, $idpb, $diachi);
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
            $students[0] = new Entity_Employee($idnv, $hoten, $idpb, $diachi);
            return $students;
        }
        // return $row;
    }

    public function createStudent($idnv, $hoten, $idpb, $diachi)
    {
        try {
            $connect = new Connection();
            $sql = "INSERT INTO nhanvien (idnv,hoten,idpb,diachi) VALUES ('$idnv','$hoten','$idpb','$diachi')";
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

    public function searchEmployee($method, $value)
    {
        try {
            $connect = new Connection();
            $sql = "SELECT * FROM nhanvien where $method like '%$value%'";
            $result = $connect->execute($sql);
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['idnv'];
                $name = $row['hoten'];
                $age = $row['idpb'];
                $university = $row['diachi'];
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
