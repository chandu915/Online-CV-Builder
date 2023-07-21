<style>
  .add_box {
    background: #fff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }

  .add_student_table {
    background: transparent;
    padding: 20px;
  }

  .add_student_table tr {
    background: transparent;
    padding: 20px;
  }

  .add_student_table td {
    background: transparent;
    padding: 20px;
  }

  .button_class {
    background: none;
    height: 60px;
    display: flex;
    justify-content: center;


  }

  /* #submit{
    background: green;
    width: 100%;
    height:100%;
    font-size:16px;
    font-family: Arial;
  } */
  .button-65 {
    appearance: none;
    backface-visibility: hidden;
    background-color: #2f80ed;
    border-radius: 5px;
    border-style: none;
    box-shadow: none;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-family: Inter, -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 500;
    height: 60px;
    letter-spacing: normal;
    line-height: 1.5;
    outline: none;
    overflow: hidden;
    padding: 14px 30px;
    position: relative;
    text-align: center;
    text-decoration: none;
    transform: translate3d(0, 0, 0);
    transition: all .3s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: top;
    white-space: nowrap;
  }

  .button-65:hover {
    background-color: #1366d6;
    box-shadow: rgba(0, 0, 0, .05) 0 5px 30px, rgba(0, 0, 0, .05) 0 1px 4px;
    opacity: 1;
    transform: translateY(0);
    transition-duration: .35s;
  }

  .button-65:hover:after {
    opacity: .5;
  }

  .button-65:active {
    box-shadow: rgba(0, 0, 0, .1) 0 3px 6px 0, rgba(0, 0, 0, .1) 0 0 10px 0, rgba(0, 0, 0, .1) 0 1px 4px -1px;
    transform: translateY(2px);
    transition-duration: .35s;
  }

  .button-65:active:after {
    opacity: 1;
  }

  @media (min-width: 768px) {
    .button-65 {
      padding: 14px 22px;
      width: 250px;
    }
  }

  #cancel{
    background: #ff0038;
  }
</style>

<link rel="stylesheet" href="../css/select.css">
<link rel="stylesheet" href="../css/add_form.css">
<div class="add_box">

  <form action="" method="post">

    <table class="add_student_table">
      <tr>
        <td>
          <div class="floating-label-input">
            <input type="text" id="reg" name="reg" required />
            <label for="reg">Registration Number</label>
          </div>
        </td>
        <td>
          <div class="floating-label-input">
            <input type="text" id="std_name" name="std_reg" required />
            <label for="std_name">Student Name</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="floating-label-input">
            <input type="date" id="adm_date" required />
            <label for="adm_date">Admission Date</label>
          </div>

        </td>
        <td>
          <div class="custom-select" style="width:250px;">
            <select id="ss" name="school" required>
              <option>Select School</option>
              <option value="soet">SOET</option>
              <option value="mssoas">MSSOAS</option>
              <option value="sobea">SOBEA</option>
            </select>
          </div>

        </td>
      </tr>
      <tr>
        <td>
          <div class="custom-select" style="width:250px;">
            <select id="ss" name="branch">
              <option>Select Programme</option>
              <option value="btech">BTech</option>
              <option value="mtech">MTech</option>
            </select>
          </div>

        </td>
        <td>
          <div class="custom-select" style="width:250px;">
            <select id="ss" name="branch">
              <option disabled>Select Branch</option>
              <option value="113">ECE</option>
              <option value="115">EEE</option>
              <option value="112">CSE</option>
              <option value="111">Civil</option>
              <option value="116">Mechanical</option>
            </select>
          </div>
          <!-- <div class="floating-label-input">
            <input type="text" id="id" required />
            <label for="id">Registration Number</label>
          </div> -->
        </td>
      </tr>
      <tr>
        <td>
          <div class="floating-label-input">
            <input type="date" id="dob" required />
            <label for="dob">Date of Birth</label>
          </div>
        </td>
        <td>
          <div class="custom-select" style="width:250px;">
            <select id="ss" name="branch">
              <option>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="button_class">
            <input type="submit" id="submit" name="submit" class="button-65" />
          </div>
        </td>
        <td>
          <div class="button_class">
            <button id="cancel" name="cancel" class="button-65">Cancel</button>
          </div>
        </td>

      </tr>
    </table>
  </form>
</div>


<script src="../js/select_style.js"></script>



<?php

// $reg = $_POST['name'];
// $student_name = $_POST['std_name'];
// $admission_year = $data[2];
// $dob = $data[3];
// $mobile = $data[4];
// $gender = $data[5];
// $branch_code = substr($reg, 5, 3);
// $email = $reg . "@cutm.ac.in";

// $add_student = "INSERT INTO `student_details` (`registration_no`, `student_name`, `admission_year`, `branch_code`, `mobile`, `dob`, `gender`, `email`) VALUES ('" . $reg . "', '" . $student_name . "', '" . $admission_year . "', '" . $branch_code . "', '" . $mobile . "', '" . $dob . "', '" . $gender . "', '" . $email . "')";
// $login_account = "INSERT INTO `student_login_account`(`registration_no`, `password`, `old_password`, `sign_up_date`, `last_login`, `login_status`, `password_change_date`) VALUES ('$reg','$reg','$reg','$date_today','$date_today','0','$date_today')";


?>