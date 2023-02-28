
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("db.php");
// Create connection
$db = $conn;
// Check connection

#$sql = "INSERT INTO tbl_users(fld_user_name, fld_name, fld_email, fld_phone_number) VALUES('sui765','suha shaha','suha765@yahoo.com','9876015634'),('laxha987', 'laxha ray', 'laxha@gmail.com', '7485512354');";
$tablename = "tbl_users";
$columns = ['fld_ai_id', 'fld_user_name', 'fld_name', 'fld_email', 'fld_phone_number', 'fld_is_active', 'fld_timestamp'];
$fetchData = fetch_data($conn, $tablename, $columns);
function fetch_data($conn, $tablename, $columns) {
    if (empty($conn)) {
        $msg = "database connection error";
    }elseif (empty($columns) || !is_array($columns)) {
        $msg = "columns name must be defined in an indexed array";
    }elseif(empty($tablename)) {
        $msg = "table name is empty";
    }else {
        $columnname = implode(", ", $columns);
        $query = "SELECT ".$columnname." FROM $tablename";
        $result = $conn->query($query);
        if ($result == true) {
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            }
            else {
                $msg = "No data found";
            }
        }else {
            $msg = mysqli_error($conn);
        }
    }
    return $msg;
}
// $sql_ = "SELECT fld_ai_id, fld_user_name, fld_name, fld_email, fld_phone_number, fld_is_active, fld_timestamp;";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo "fld_id"
//     }
// }
// $sql .= "INSERT INTO tbl_users(fld_user_name, fld_name, fld_email, fld_phone_number) VALUES('laxha987', 'laxha ray', 'laxha@gmail.com', '7485512354')";
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully"."<br>";
//     $last_insertted_id = $conn->insert_id;
//     echo $last_insertted_id."<br>";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
?>   
</body>
</html>
