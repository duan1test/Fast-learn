<?php
    ob_start();
    include '../models/pdo.php';
    include '../models/AdminModel.php';
    include '../views/Admin/header/header.php';
    include '../views/Admin/sidebar/sidebar-horizontal.php';
    include '../views/Admin/sidebar/sidebar-vertical.php';
    
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        switch ($action) {

            //Student
            case 'list-student':
                $students = getListStudent();
                include '../views/Admin/pages/students/list-student.php';
                break;
            case 'create-student':
                if(isset($_POST['create_student'])&&($_POST['create_student'])){
                    $code = $_POST['code'];
                    $name = $_POST['name'];
                    $role_name = $_POST['role_name'];
                    $class = $_POST['class'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $dateStart = $_POST['dateStart'];
                    $password = $_POST['password'];
                    $specialized = $_POST['specialized'];
                    $active = $_POST['active'];
                    createStudent($code,$name,$role_name,$class,$email,$phone,$dateStart,$password,$specialized,$active);
                    header("Location: AdminController.php?action=list-student");
                    
                }
                include '../views/Admin/pages/students/create-student.php';
                
                break;
            case 'delete-student':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    deleteUser($_GET['id']);
                }
                header("Location: AdminController.php?action=list-student");
                break;
            case 'edit-student':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $student = showUser($_GET['id']);
                }
                include '../views/Admin/pages/students/edit-student.php';
                break;
            case 'update-student':
                if(isset($_POST['update_student'])&&($_POST['update_student'])){
                    $id = $_POST['id'];
                    $code = $_POST['code'];
                    $name = $_POST['name'];
                    $role_name = $_POST['role_name'];
                    $class = $_POST['class'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $dateStart = $_POST['dateStart'];
                    $password = $_POST['password'];
                    $specialized = $_POST['specialized'];
                    $active = $_POST['active'];
                    updateStudent($id,$code,$name,$role_name,$class,$email,$phone,$dateStart,$password,$specialized,$active);
                    
                    header("Location: AdminController.php?action=list-student");
                }
                break;

            // teacher
            case 'list-teacher':
                $teachers = getListTeacher();
                include '../views/Admin/pages/teachers/list.php';
                break;
            case 'create-teacher':
                if(isset($_POST['create_teacher'])&&($_POST['create_teacher'])){
                    $code = $_POST['code'];
                    $name = $_POST['name'];
                    $role_name = $_POST['role_name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $password = $_POST['password'];
                    $active = $_POST['active'];
                    createTeacher($code,$name,$role_name,$email,$phone,$password,$active);
                    
                    header("Location: AdminController.php?action=list-teacher");
                }
                include '../views/Admin/pages/teachers/create.php';
                break;
            case 'edit-teacher':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $teacher = showUser($_GET['id']);
                }
                include '../views/Admin/pages/teachers/update.php';
                break;
            case 'update-teacher':
                if(isset($_POST['update_teacher'])&&($_POST['update_teacher'])){
                    $id = $_POST['id'];
                    $code = $_POST['code'];
                    $name = $_POST['name'];
                    $role_name = $_POST['role_name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $password = $_POST['password'];
                    $active = $_POST['active'];
                    updateTeacher($id,$code,$name,$role_name,$email,$phone,$password,$active);
                    
                    header("Location: AdminController.php?action=list-teacher");
                }
                break;
            case 'delete-teacher':
                if(isset($_GET['id'])){
                    deleteUser($_GET['id']);
                }
                header("Location: AdminController.php?action=list-teacher");

            //course

            case 'list-course':
                $courses = getListCourses();
                include '../views/Admin/pages/courses/list.php';
                break;
            case 'create-course':
                $courses = getListCourses();
                $teachers = getListTeacher();
                $categories = getListCategories();
                if(isset($_POST['create_course'])&&($_POST['create_course'])){
                    $code = $_POST['code'];
                    $name = $_POST['name'];
                    $duration = $_POST['duration'];
                    $price = $_POST['price'];
                    $dateCreate = $_POST['dateCreate'];
                    $teacher_id = $_POST['teacher_id'];
                    $category_id = $_POST['category_id'];
                    $note = $_POST['note'];
                    $description = $_POST['description'];
                    $file = $_FILES['file']['name'];
                    $target_dir = "../../public/uploads/";
                    $target_file = $target_dir . basename($_FILES["file"]["name"]);

                    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

                    createCourse($code,$name,$price,$dateCreate,$description,$note,$file,$teacher_id,$category_id,$duration)    ;                
                    header("Location: AdminController.php?action=list-course");
                }
                include '../views/Admin/pages/courses/create.php';
                break;
            case 'edit-course':
                if(isset($_GET['id'])){
                    $course = showCourse($_GET['id']);
                }
                $teachers = getListTeacher();
                $categories = getListCategories();
                include '../views/Admin/pages/courses/update.php';
                break;
            case 'update-course':
                if(isset($_POST['update_course'])&&($_POST['update_course'])){
                    $id = $_POST['id'];
                    $code = $_POST['code'];
                    $name = $_POST['name'];
                    $duration = $_POST['duration'];
                    $price = $_POST['price'];
                    $dateCreate = $_POST['dateCreate'];
                    $teacher_id = $_POST['teacher_id'];
                    $category_id = $_POST['category_id'];
                    $note = $_POST['note'];
                    $description = $_POST['description'];
                    $file = $_FILES['file']['name'];
                    $target_dir = "../../public/uploads/";
                    $target_file = $target_dir . basename($_FILES["file"]["name"]);

                    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

                    updateCourse($id,$code,$name,$price,$dateCreate,$description,$note,$file,$teacher_id,$category_id,$duration);                
                    header("Location: AdminController.php?action=list-course");
                }
                break;
            case 'delete-course':
                if(isset($_GET['id'])){
                    deleteCourse($_GET['id']);
                }
                header("Location: AdminController.php?action=list-course");
                break;
            case 'detail-course':
                if(isset($_GET['id'])){
                    $course = showCourse($_GET['id']);
                }
                $teacher = getListTeacherById($course['teacher_id']);
                $category = getCategoryById($course['category_id']);
                include '../views/Admin/pages/courses/detail.php';
                break;
            default:
                include '../views/Admin/home/home.php';
                break;
        }
    }else{
        include '../views/Admin/home/home.php';
    }
    include '../views/Admin/footer/footer.php';
    ob_end_flush();
?>