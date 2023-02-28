<?php
include("users_db.php");
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
    <div class = "conainer">
        <div class = "row">
            <div class = "col-sm-8">
                <?php echo $deleteMsg??'';?>
                <div class = "table-responsive">
                    <table class = "table table-bordered">
                        <thead><tr><th>fld_ai_id</th>
                        <th>fld_user_name</th>
                        <th>fld_name</th>
                        <th>fld_email</th>
                        <th>fld_phone_number</th>
                        <th>fld_is_active</th>
                        <th>fld_timestamp</th>
                        </thead>
                        <tbody>
                            <?php
                                if (is_array($fetchData)) {
                                    $id = 1;
                                    foreach($fetchData as $data) {
                             ?>           
                                        <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $data['fld_user_name']??'';?></td>
                                        <td><?php echo $data['fld_name']??'';?></td>
                                        <td><?php echo $data['fld_email']??'';?></td>
                                        <td><?php echo $data['fld_phone_number']??'';?></td>                
                                        <td><?php echo $data['fld_is_active']??'';?></td>                  
                                        <td><?php echo $data['fld_timestamp']??'';?></td>    
                                        </tr>
                                        <?php
                                        $id++;}}else { ?>
                                        <tr>
                                            <td colspan = "8">
                                                <?php echo $fetchData; ?>
                                            </td>
                                        </tr>
                                         <?php }?> 
                        </tbody>
                    </table>
                </div>
             </div>
       </div>
                                        

                                  
                                
                            


</body>
</html>