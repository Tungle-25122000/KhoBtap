<?php
    //B1: ket noi database Server
    $conn = mysqli_connect('localhost','root','','demo');
    if(!$conn){
        die('Không thể kết nối. Kiểm tra lại các tham số');
    }
    //B2: Khai báo Truy vấn
    $sql = "SELECT * FROM posts";
    mysqli_set_charset($conn, 'UTF8');
    $result = mysqli_query($conn,$sql);
    echo '<div class="news">';
    echo  '<div class="posts">';
    //B3: Xử  lý kết quả Result
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="post">';
        echo '<img src="'.$row['image'].'" alt="">';
        echo '<h3 class="title">'.$row['title'].'</h3>';
        echo  '</div>';
    }
    echo '</div>';
    echo '</div>';
    //B4: Đóng kết nối
    mysqli_close($conn);