<?php
$conn = mysqli_connect("localhost", "root", "", "status_change");

$query = "SELECT * from student_enrolled";

$res = mysqli_query($conn, $query);

while($row =mysqli_fetch_assoc($res)){
    
    $query1 = "SELECT * FROM student_courses WHERE student_enrolled_id = ".$row['id'];

    $res1 = mysqli_query($conn, $query1);


    while($row1 = mysqli_fetch_assoc($res1)){
        if($row['status'] == "Registered - Trial" && $row1['status'] == "Registered - Paid"){
            echo $row['email']."\n";
        } 
    }

}

?>