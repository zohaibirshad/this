<?php 

function submit_csv_users($upload_csv_tmp_name, $connection)
{
    $last_name = $first_name = '';
    $file = fopen($upload_csv_tmp_name, "r");
    $i = 0;

    $arr = array();

    while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
        if ($i == 0) {
            $i = $i + 1;
        } else {

            // $register_date = "";
            // echo $column[3];
            // die;
            $arr[] = "'".$column[3]."'";
            

        }
    }

    // print_r($arr);

    echo implode(",", $arr);
}

if (isset($_POST['submit_csv'])) {
    $upload_csv_name = $_FILES["csv"]["name"];
    $upload_csv_tmp_name = $_FILES["csv"]["tmp_name"];
    $connection = "";
    submit_csv_users($upload_csv_tmp_name, $connection);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test2.php" enctype="multipart/form-data" method="post">
    <input type="file" name="csv">
    <input type="submit" value="submit" name="submit_csv">
    </form>
</body>
</html>