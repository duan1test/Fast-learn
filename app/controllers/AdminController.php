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
                    deleteStudent($_GET['id']);
                }
                $students = getListStudent();
                include '../views/Admin/pages/students/list-student.php';
                break;
            case 'edit-student':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $student = showStudent($_GET['id']);
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

            // student
            case 'list-student-course':
                $courses = getListCourse();
                include '../views/Admin/pages/student-courses/list-student-course.php';
                break;

            case 'course-detail-user':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $course = getCourseById($_GET['id']);
                }
                include '../views/Admin/pages/student-courses/detail-student-course.php';
                break;

            case 'course-register-user':
                if(isset($_POST['course-register-user'])){
                    
                    $courseId = $_POST['course_id'];
                    // set cứng userId đang đăng nhập
                    $userId = 6;
                    registerCourse($courseId, $userId);
                    header("Location: AdminController.php?action=list-student-course-registed");
                }
                break;

            case 'list-student-course-registed':
                // set cứng userId đang đăng nhập
                $userId = 6;
                $courses = getListCourseRegisted($userId);
                include '../views/Admin/pages/student-courses/list-student-course-registed.php';
                break;

            case 'comments-list-student':
                $courseId = $_GET['course_id'];
                $comments = getCommentsWithChildren($courseId);
                include '../views/Admin/pages/comments/comments-list-student.php';
                break;

            case 'comments-list-student-store':
                if(isset($_POST['comments-list-student-store'])){
                    $courseId = $_POST['course_id'];
                    $child = $_POST['child'];
                    $messages = $_POST['messages'];
                    // set cứng userId đang đăng nhập
                    $userId = 6;
                    commentStore($courseId, $userId, $child, $messages);
                    $comments = getCommentsWithChildren($courseId);
                    header('Location: AdminController.php?action=comments-list-student');
                }
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