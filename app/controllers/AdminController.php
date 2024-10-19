<?php
    include '../models/pdo.php';
    include '../models/AdminModel.php';
    include '../views/Admin/header/header.php';
    include '../views/Admin/sidebar/sidebar-horizontal.php';
    include '../views/Admin/sidebar/sidebar-vertical.php';
    
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        switch ($action) {
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
                    $role = $_POST['role'];
                    $active = $_POST['active'];
                    createStudent($code,$name,$role_name,$class,$email,$phone,$dateStart,$password,$specialized,$active);
                    // insert_danhmuc($ten_danh_muc,$mo_ta,$img,$trang_thai);

                }
                include '../views/Admin/pages/students/create-student.php';
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
            default:
                $posts = getDashboard();
                include '../views/Admin/home/home.php';
                break;
        }
    }else{
        include '../views/Admin/home/home.php';
    }
    include '../views/Admin/footer/footer.php';

?>