<?php
    function getListStudent() {
        $sql = "select * from users where role_name = 'student'";
        $students = pdo_query($sql);
        foreach ($students as &$student) {
            if ($student['active'] == 1) {
                $student['active_status'] = 'Hoạt động';
            } else {
                $student['active_status'] = 'Không hoạt động';
            }
        }
        return $students;
    }
    function createStudent($code,$name,$role_name,$class,$email,$phone,$dateStart,$password,$specialized,$active){
        $sql = "insert into users(code,name,role_name,class,specialized,phone,active,dateStart,email,password) 
                VALUES('$code','$name','$role_name','$class','$specialized','$phone','$active','$dateStart','$email','$password')";
        pdo_execute($sql);
    }
    function deleteStudent($id){
        $sql = "delete from users where id=".$id;
        pdo_execute($sql);
    }

    function getListPost() 
    {
        $sql = "select * from posts";
        $posts = pdo_query($sql);
        return $posts;
    }

    function createPost($title, $tag, $title_child, $content, $content_1, $content_2, $content_3, $content_4, $content_5)
    {
        $sql = "INSERT INTO posts (title, tag, title_child, content, content_1, content_2, content_3, content_4, content_5) VALUES ('$title', '$tag', '$title_child', '$content', '$content_1', '$content_2', '$content_3', '$content_4', '$content_5')";
        pdo_execute($sql);
    }

    function getDashboard()
    {
        $sql = "select * from posts";
        $posts = pdo_query($sql);
        return $posts;
    }

    function getPost($id)
    {
        $sql = "select * from posts where id=" . $id;
        $post = pdo_query_one($sql);
        return $post;
    }

    function updateViewer($id)
    {
        $post = getPost($id);
        $view = $post['viewer'] + 1;
        $sql = "UPDATE posts SET viewer= '$view' WHERE id= $id";
        pdo_execute($sql);
    }

    function getListFeedBack()
    {
        $sql = "SELECT * FROM feedbacks";
        $feedbacks = pdo_query($sql);
        return $feedbacks;
    }

    function updatePost($id, $title, $tag, $title_child, $content, $content_1, $content_2, $content_3, $content_4, $content_5)
    {
        $sql = "UPDATE posts
            SET 
                title = '$title',
                tag = '$tag',
                title_child = '$title_child',
                content = '$content',
                content_1 = '$content_1',
                content_2 = '$content_2',
                content_3 = '$content_3',
                content_4 = '$content_4',
                content_5 = '$content_5'
            WHERE id = $id;
        ";
        pdo_execute($sql);
    }

    function deletePost($id)
    {
        $sql = "DELETE FROM posts WHERE id='$id'";
        pdo_execute($sql);
    }

    function createFeedback($title, $email, $feedback_level, $feedback_content)
    {
        $now = date("Y-m-d",time());
        $sql = "INSERT INTO feedbacks (title, email, feedback_level, feedback_content, created_at) 
        VALUES ('$title', '$email', '$feedback_level', '$feedback_content', '$now')
        ";
        pdo_execute($sql);
    }
?>