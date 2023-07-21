<?php

$conn = mysqli_connect("localhost", "root", "", "awp_project");

$userid = $_SESSION['uid'];

if ($conn === false) {
  die("Not Connected to . " . mysqli_connect_error());
} else {

  $result = mysqli_query($conn, "SELECT * FROM `user_info` WHERE userid=" . $userid);
  while ($row = mysqli_fetch_array($result)) {
    $first_name = $row["first_name"];
    $middle_name = $row["middle_name"];
    $last_name = $row["last_name"];
    $gender = $row["gender"];
    $phone = $row["phone"];
    $dob = $row["dob"];
    $address_p = $row["address_p"];
    $city_p = $row["city_p"];
    $country_p = $row["country_p"];
    $zip = $row["zip"];
    $personal_mail = $row["personal_mail"];
  }
}
?>



<style>
  .add_box {
    background: #fff;
    border-radius: 10px;
    padding: 30px;
    /* box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); */
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

  #cancel {
    background: #ff0038;
  }





  /* /////////////////////////////////////////////////////////////////// */


  .floating-label-input {
  position: relative;
  height: 60px;
  width: 250px;
  background: rgb(255, 255, 255);
  border: 1px solid black;
}
.floating-label-input-x {
  position: relative;
  height: 60px;
  width: 830px;
  background: rgb(90,90,90);
}
.floating-label-input input {
  width: 100%;
  height: 100%;
  position: relative;

  border: none;
  outline: none;
  vertical-align: middle;
  font-size: 16px;
  padding: 25px 10px 10px 15px;
  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
}
.floating-label-input label {
  position: absolute;
  top: calc(50% - 10px);
  left: calc(15% - 15px);
  font-size: 16px;
  color: rgb(0, 0, 0);
  transition: all 0.3s;
  font-family: Arial;
}

.floating-label-input input:focus~label,
.floating-label-input input:focus~label,
.floating-label-input input:valid~label {
  top: 10px;
  left: 8px;
  font-size: 11px;
  font-weight: bold;
  color: dodgerblue;
  /* background: rgb(255, 255, 255); */
  padding: 0 5px;
}
.cont {
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgb(255, 255, 255);
  flex-direction: row;
}
 .floating-label-input input {
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: linear-gradient(
    to bottom,
    rgb(255, 255, 255) 95%,
    dodgerblue 5%
  );
  background-position: -250px 0;
  background-size: 250px 100%;
  background-repeat: no-repeat;
  color: #000000;
} 

.custom-select {
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: linear-gradient(
    to bottom,
    rgb(255, 255, 255) 95%,
    dodgerblue 5%
  );
  background-position: -250px 0;
  background-size: 250px 100%;
  background-repeat: no-repeat;
  color: #000000;
} 

input:focus,
input:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}

input::-webkit-input-placeholder {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input:focus::-webkit-input-placeholder,
input:valid::-webkit-input-placeholder {
  color: dodgerblue;
  font-size: 11px;
  transform: translate(0px, -10px);
  visibility: visible !important;
}


.floating-label-input input[type=date] {
  color: transparent;
}

.floating-label-input input[type=date]:focus,
.floating-label-input input:valid {
  color: rgb(0, 0, 0);
}


/* /////////////////////////////////////////////////////////////////// */


/*the container must be positioned relative:*/
/* select{
  color: #ff0000;
} */
.custom-select {
  position: relative;
  font-family: Arial;
  border: 1px solid black;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: rgb(255, 255, 255);
  
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  
  content: "";
  top: 30px;
  right: 20px;
  width: 0;
  height: 0;
  border: 10px solid transparent;
  border-color: #000000 transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #000000 transparent;
  top: 20px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #000000;
  padding: 20px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

.select-selected {
  color: rgb(0, 0, 0);
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: rgb(242, 242, 242);
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

#details{
        background: gray;
        color:white;
    }

</style>

<!-- <link rel="stylesheet" href="../css/select.css"> -->
<!-- <link rel="stylesheet" href="../css/add_form.css"> -->
<div class="add_box">

  <form action="update_details.php" method="post">

    <table class="add_student_table">
      <tr>
        <td>
          <div class="floating-label-input">
            <input type="text" id="fname" name="fname" value="<?php echo $first_name;?>" required />
            <label for="fname">First Name*</label>
          </div>
        </td>
        <td>
          <div class="floating-label-input">
            <input type="text" id="mname" name="mname" value="<?php echo $middle_name;?>" />
            <label for="mname">Middle Name</label>
          </div>
        </td>
        <td>
          <div class="floating-label-input">
            <input type="text" id="lname" name="lname" value="<?php echo $last_name;?>" required />
            <label for="lname">Last Name*</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="floating-label-input">
            <input type="date" id="dob" name="dob" value="<?php echo $dob;?>" required />
            <label for="dob">Date of Birth*</label>
          </div>

        </td>
        <td>
          <div class="custom-select" style="width:250px;">
            <select id="gender" name="gender" value="<?php echo $gender;?>" required>
              <option>Select Gender*</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>

        </td>
        <td>
          <div class="floating-label-input">
            <input type="text" id="email" name="email" value="<?php echo $personal_mail?>" required />
            <label for="email">Email*</label>
          </div>

        </td>
      </tr>
      <tr>
        <td>
          <div class="floating-label-input">
            <input type="text" id="addr" name="addr" value="<?php echo $address_p;?>" required />
            <label for="addr">Address*</label>
          </div>
        </td>
        <td>
          <div class="floating-label-input">
            <input type="text" id="city" name="city" value="<?php echo $city_p;?>" required />
            <label for="city">City*</label>
          </div>

        </td>
        <td>
          <div class="floating-label-input">
            <input type="text" id="country" name="country" value="<?php echo $country_p;?>" required />
            <label for="country">Country*</label>
          </div>

        </td>
      </tr>
      <tr>
        <td>
          <div class="floating-label-input">
            <input type="text" id="pin" name="pin" value="<?php echo $zip;?>" required />
            <label for="pin">Pincode*</label>
          </div>

        </td>
        <td></td>
        <td>
          <div class="floating-label-input">
            <input type="text" id="phone" name="phone" value="<?php echo $phone;?>" required />
            <label for="phone">Phone*</label>
          </div>


        </td>
      </tr>
      <tr>
        <td>
          <div class="button_class">
            <input type="submit" id="submit" name="submit" class="button-65" value="UPDATE" />
          </div>
        </td>
        <td></td>
        <td>
          <div class="button_class">
            <input type="cancel" id="cancel" name="cancel" class="button-65" value="Cancel">
          </div>
        </td>

      </tr>
    </table>
  </form>
</div>


<script src="../js/select_style.js"></script>


