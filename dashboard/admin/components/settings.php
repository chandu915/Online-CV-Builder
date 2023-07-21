<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div>

        <form action="" method="post">
            <input type="submit" value="Page1" name="p1">
            <input type="submit" value="Page2" name="p2">
            <input type="submit" value="Page3" name="p3">

        </form>
    </div>
    <?php

    if(isset($_POST['p1'])){
        // echo "Page1";

        header("Location: http://localhost/cbcs_tracker/dashboard/admin/components/admin.php?page=queries");
    }
    if(isset($_POST['p2'])){
        // echo "Page1";

        header("Location: http://localhost/cbcs_tracker/dashboard/admin/components/admin.php?page=result");
    }

    // echo "Settings - Admin";
    
    ?>

</body>

</html>