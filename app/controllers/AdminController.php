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
                    $comment_id = $_POST['comment_id'] ?? null;
                    // set cứng userId đang đăng nhập
                    $userId = 6;
                    commentStore($courseId, $userId, $child, $messages, $comment_id);
                    $comments = getCommentsWithChildren($courseId);
                    header("Location: AdminController.php?action=comments-list-student&course_id=$courseId");
                }
                break;
            case 'list-post': 
                $posts = getListPost();
                include '../views/Admin/pages/posts/list.php';
                break;
            case 'create-post': 
                if(isset($_POST['create_post']) && ($_POST['create_post'])){
                    $title = $_POST['title'];
                    $tag = $_POST['tag'];
                    $title_child = $_POST['title_child'];
                    $content = $_POST['content'];
                    $content_1 = $_POST['content_1'];
                    $content_2 = $_POST['content_2'];
                    $content_3 = $_POST['content_3'];
                    $content_4 = $_POST['content_4'];
                    $content_5 = $_POST['content_5'];
                    createPost($title, $tag, $title_child, $content, $content_1, $content_2, $content_3, $content_4, $content_5);
                    $posts = getListPost();
                    include '../views/Admin/pages/posts/list.php';
                }
                else {
                    include '../views/Admin/pages/posts/create.php';
                }
                break;
            case 'home': 
                $posts = getDashboard();
                include '../views/Admin/home/home.php';
                break;
            case 'post-detail': 
                $id = $_GET['id'];
                $post = getPost($id);
                $posts = getDashboard();
                updateViewer($id);
                include '../views/Admin/pages/posts/detail.php';
                break;
            case 'list-feedback': 
                $feedbacks = getListFeedBack();
                include '../views/Admin/pages/feedbacks/list.php';
                break;
            case 'edit-post': 
                if(isset($_POST['edit_post']) && $_POST['edit_post']) {
                    $id = $_POST['id'];
                    $title = $_POST['title'];
                    $tag = $_POST['tag'];
                    $title_child = $_POST['title_child'];
                    $content = $_POST['content'];
                    $content_1 = $_POST['content_1'];
                    $content_2 = $_POST['content_2'];
                    $content_3 = $_POST['content_3'];
                    $content_4 = $_POST['content_4'];
                    $content_5 = $_POST['content_5'];
                    updatePost($id, $title, $tag, $title_child, $content, $content_1, $content_2, $content_3, $content_4, $content_5);
                    $posts = getListPost();
                    include '../views/Admin/pages/posts/list.php';
                } else {
                    $id = $_GET['id'];
                    $post = getPost($id);
                    include '../views/Admin/pages/posts/edit.php';
                }
                break;
            case 'delete-post': 
                $id = $_GET['id'];
                deletePost($id);
                $posts = getListPost();
                include '../views/Admin/pages/posts/list.php';
                break;
            case 'create-feedback':
                if(isset($_POST['create_feedback']) && $_POST['create_feedback']) {
                    $title = $_POST['title'];
                    $email = $_POST['email'];
                    $feedback_level = $_POST['feedback_level'];
                    $feedback_content = $_POST['feedback_content'];
                    createFeedback($title, $email, $feedback_level, $feedback_content);
                }
                include '../views/Admin/pages/feedbacks/create.php';
                break;
            case 'list-comment':
                $courses = getCourseWithComment();
                include '../views/Admin/pages/comments/list.php';
                break;
            default:
                $posts = getDashboard();
                include '../views/Admin/home/home.php';
                break;
        }
    }else{
        $posts = getDashboard();
        include '../views/Admin/home/home.php';
    }
    include '../views/Admin/footer/footer.php';
    ob_end_flush();
?>