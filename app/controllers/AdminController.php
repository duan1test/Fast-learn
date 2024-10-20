<?php
    session_start();
    ob_start();
    if(isset($_COOKIE['success'])) {
        $success = "<script type='text/javascript'>alert('".$_COOKIE['success']."');</script>";
        echo $success;
    } 
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
                    $password = md5($_POST['password']);
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

            // student course
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
                    $userId = $_SESSION["user"]['id'];
                    registerCourse($courseId, $userId);
                    header("Location: AdminController.php?action=list-student-course-registed");
                }
                break;

            case 'list-student-course-registed':
                $userId = $_SESSION["user"]['id'];
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
                    $userId = $_SESSION["user"]['id'];
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
            //profile
            case 'profile':
                if(isset($_POST['update_information'])){
                    $data = [];
                    $data['name'] = $_POST['name'];
                    $data['email'] = $_POST['email'];
                    $id = $_SESSION['user']['id'];
                    updateInformation($data,$id);
                }

                if(isset($_POST['update_password'])){
                    $data = [];
                    $id = $_SESSION['user']['id'];
                    $data['password'] = md5($_POST['password']);
                    $data['new_password'] = $_POST['new_password'];
                    $data['confirm_new_password'] = $_POST['confirm_new_password'];
                    updatePassword($data,$id);
                }
                
                if(isset($_POST['delete'])){
                    deleteUser($_SESSION['user']['id']);
                    header("location:ClientController.php?action=login");
                }

                include '../views/Admin/pages/profile/index.php';
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