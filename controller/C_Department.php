<?php
    include_once("../model/E_Department.php");
    include_once("../model/M_Department.php");

    class Ctrl_Department{
        public function invoke(){
            if(isset($_GET['option'])){
                if($_GET['option']='show'){
                        $modelDepartment = new Model_Department();
                        $departmentList = $modelDepartment->getAllDepartment();
                        include_once("../view/DepartmentList.php");
                }
            }
            // else
            // if(isset($_GET['mod2'])){
            //     if(isset($_GET['id'],$_GET['name'],$_GET['age'],$_GET['university'])){
            //         include_once("../views/AddStudent.html");
            //         $modelStudent = new Model_Employee();
            //         //check exist
            //         $student = $modelStudent->getEmployeeDetail($_GET['id']);
            //         // check null
            //         if($_GET['id']&&$_GET['name']&&$_GET['age']&&$_GET['university']){
            //             if($student){
            //                 $err = "Mã số sinh viên đã tồn tại";
            //                 include_once("../views/ERROR2.html");
            //             }
            //             else{
            //                 $createSuccess = $modelStudent->createStudent($_GET['id'],$_GET['name'],$_GET['age'],$_GET['university']);
            //                 if($createSuccess){
            //                     $err = $createSuccess;
            //                     include_once("../views/ERROR2.html");
            //                 }
            //                 else{
            //                     header("location: C_Student.php?mod1=1");
            //                 }
            //             }
            //         }
            //         else{
            //             $err = "Chưa đủ thông tin!";
            //             include_once("../views/ERROR2.html");
            //         }
            //     }
            //     else{
            //         include_once("../views/AddStudent.html");
            //     }
            // }
            // else
            // if(isset($_GET['mod3'])){
            //     if (isset($_GET['stid'])) {
            //         if(isset($_GET['stid'],$_GET['name'],$_GET['age'],$_GET['university'])){
            //             if($_GET['stid']&&$_GET['name']&&$_GET['age']&&$_GET['university']){
            //                 $modelStudent = new Model_Employee();
            //                 //check exist
            //                 $student = $modelStudent->getEmployeeDetail($_GET['stid']);
            //                 // check null
            //                 if($student){
            //                     $studentsValue = new Entity_Employee($_GET['stid'],$_GET['name'],$_GET['age'],$_GET['university']);
            //                     $updateSuccess = $modelStudent->updateStudent($studentsValue);
            //                     if($updateSuccess){
            //                         $err = $updateSuccess;
            //                         include_once("../views/ERROR2.html");
            //                     }
            //                     else{
            //                         header("location: ?mod3=1");
            //                     }
            //                 }
            //                 else{
            //                     $err = "Không tồn tại sinh viên này!";
            //                     include_once("../views/ERROR2.html");
            //                 }
            //             }
            //             else{
            //                 $err = "Chưa đủ thông tin!";
            //                 include_once("../views/ERROR2.html");
            //             }
            //         }
            //         else{
            //             $modelStudent = new Model_Employee();
            //             //check exist
            //             $student = $modelStudent->getEmployeeDetail($_GET['stid']);
            //             if($student){
            //                 $student = $modelStudent->getEmployeeDetail($_GET['stid']);
            //                 include_once("../views/UpdateStudentShow.html");
            //             }
            //             else{
            //                 header("location: ?mod3=1");
            //                 $err = "Không tồn tại sinh viên này trong hệ thống";
            //                 include_once("../views/ERROR2.html");
            //             }
            //         }
                    
            //     }
            //     else{
            //         $modelStudent = new Model_Employee();
            //         $studentList = $modelStudent->getAllEmployee();
            //         include_once("../views/UpdateStudent.html");
            //     }
            // }
            // else
            // if(isset($_GET['mod4'])){
            //     if (isset($_GET['stid'])) {
            //             $modelStudent = new Model_Employee();
            //             //check exist
            //         $student = $modelStudent->getEmployeeDetail($_GET['stid']);
            //         if($student){
            //             $deleteSuccess = $modelStudent->deleteStudent($_GET['stid']);
            //             if($deleteSuccess){
            //                 $err = $deleteSuccess;
            //                 include_once("../views/ERROR2.html");
            //             }
            //             else{
            //                 header("location: ?mod4=1");
            //             }
            //         }
            //         else{
            //             header("location: ?mod4=1");
            //             $err = "Không tồn tại sinh viên này trong hệ thống";
            //             include_once("../views/ERROR2.html");
            //         }
            //     }
            //     else{
            //         $modelStudent = new Model_Employee();
            //         $studentList = $modelStudent->getAllEmployee();
            //         include_once("../views/DeleteStudent.html");
            //     }
            // }
            // else
            // if(isset($_GET['mod5'])){
            //     if(isset($_GET['searchmethod'])||isset($_GET['searchtxt'])){
            //         if (isset($_GET['searchmethod'])) {
            //             if(isset($_GET['searchtxt'])){
            //                 if($_GET['searchtxt']!=null){
            //                     $modelStudent = new Model_Employee();
            //                     $studentList = $modelStudent->searchStudent($_GET['searchmethod'],$_GET['searchtxt']);
            //                     if($studentList){
            //                         include_once("../views/Search.html");
            //                         include_once("../views/StudentList.html");
            //                     }else{
            //                         include_once("../views/Search.html");
            //                         $err = "không tìm thấy!";
            //                         include_once("../views/ERROR2.html");
            //                     }
            //                 }
            //                 else{
            //                     include_once("../views/Search.html");
            //                     $err = "Chưa đủ thông tin!";
            //                     include_once("../views/ERROR2.html");
            //                 }
                            
            //             }
            //             else{
            //                 include_once("../views/Search.html");
            //                 $err = "Chưa đủ thông tin!";
            //                 include_once("../views/ERROR2.html");
            //             }
            //         }else{
            //             include_once("../views/Search.html");
            //             $err = "Chọn kiểu tìm kiếm!";
            //             include_once("../views/ERROR2.html");
            //         }
            //     }else{
            //         include_once("../views/Search.html");
            //     }
            // }
            // else{
            //     // include_once("../views/ERROR.html");
            // }
        }   
    };
    $C_Department = new Ctrl_Department();
    $C_Department->invoke();
?>