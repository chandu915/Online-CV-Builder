<link rel="stylesheet" href="../css/demo.css" />


<style>
  .std-bttn {
    background: none;
    padding: 0;
  }

  .formx{
    background: none;
    padding:50px;
    display: flex;
    justify-content: space-between;
    width: 1100px;
  }


</style>

<div class="x">
  <div class="y">
  <form action="" method="post" class="formx">
    <button class="std-bttn" type="sumbit" name="add-std">
      <div class="student-item">
        <img src="../images/xlsx.png" style="height: 150px" alt="cutm" />
        <!-- <h3 class="ah">ADD STUDENTS</h3> -->
      </div>
    </button>

    <button class="std-bttn" type="sumbit" name="view-std">
      <div class="student-item">
        <img src="../images/form1.png" style="height: 150px" alt="cutm" />
        <!-- <h3 class="ah">ADD STUDENTS</h3> -->
      </div>
    </button>
</form>

  </div>
</div>


<?php

    if(isset($_POST['add-std'])){
        // echo "Page1";

        header("Location: http://localhost/cbcs_tracker/dashboard/admin/components/admin.php?page=add_student_file");
    }
    if(isset($_POST['view-std'])){
        // echo "Page1";

        header("Location: http://localhost/cbcs_tracker/dashboard/admin/components/admin.php?page=add_student_form");
    }

    // echo "Settings - Admin";
    
    ?>