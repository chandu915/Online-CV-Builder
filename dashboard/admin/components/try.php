<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Import Excel To MySQL</title>
    <style>
        input{
            border:2px solid black;
            padding:15px;
        }

    .divv{
        background: yellow;
        padding:20px;
        display: block;
    }
    </style>
</head>

<body>
    <div class="divv" id="divv">
    <form class="" id="form" action="" method="post" enctype="multipart/form-data" onsubmit="disp()">
        <input type="text" name="name" required value="">
        <button type="submit" name="import">Import</button>
    </form>
    </div>

</body>

</html> -->


<?php

// if(isset($_POST['import'])){
//     echo $_POST['name'];
//     echo "<script>document.getElementById('divv').style.display = 'none';</script>";
// }
$date_today = date("Y-m-d") . " " . date("h:i:s");
echo $date_today;

?>