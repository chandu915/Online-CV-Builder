<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    * {
        font-family: 'Roboto', sans-serif;
    }

    .main {
        background: none;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
    }

    .addxx {
        background: #fff;
        padding: 30px;
        display: flex;
        justify-content: center;
        align-items: top;
        flex-direction: row;
        border-radius: 10px;
    }

    .uname {
        /* height: 200px; */
        /* width: 95%; */
        background: white;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
    }

    .unamex {
        padding: 10px;
        background: white;
    }

    .add_table {
        background: none;
        border-collapse: collapse;
        font-family: 'Roboto', sans-serif;
        border-top: none;

    }

    .add_table tr {
        border-bottom: 1px solid black;
    }

    .add_table td,
    th {
        background: none;
        padding: 10px 50px 10px 5px;
        /* border: 1px solid black; */


    }

    /* .add_table th {
        color:dodgerblue;
    } */

    .addx {
        background: dodgerblue;
        padding: 15px 50px;
        text-align: center;
        color: white;
        font-family: Arial;
    }

    #name {
        font-size: 20px;
    }
    #details{
        background: gray;
        color:white;
    }
</style>

<?php


$conn = mysqli_connect("localhost", "root", "", "awp_project");

$userid = $_SESSION['uid'];
$_SESSION['uid'] = $userid;

if ($conn === false) {
    die("Not Connected to . " . mysqli_connect_error());
} else {

    $result = mysqli_query($conn, "SELECT * FROM `user_info` WHERE userid=" . $userid);

    $count = mysqli_num_rows($result);
    if ($count == 0) {
        ?>
        <a href="http://localhost/cv/dashboard/admin/components/admin.php?page=basic_details" class="addx">
            <!-- <span class="nav-item">Logout</span> -->
            ADD
        </a>
        <?php
    } else if ($count != 0) {
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

            ?>
                <div class="main">
                    <div class="addxx">
                        <div class="uname">
                            <!-- <br> -->
                            <img src="../images/user.jpg" style="height:150px">
                            <br>
                            <p id="name">
                            <?php echo $first_name . " " . $middle_name . " " . $last_name; ?>
                            </p>
                            <br>
                            <p>
                            <?php echo $personal_mail; ?>
                            </p>
                            <br><br><br>


                        </div>
                        <div class="unamex">
                            <table class="add_table">
                                <tr>
                                    <th>PHONE</th>
                                    <td>
                                    <?php echo $phone; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>GENDER</th>
                                    <td>
                                    <?php echo $gender; ?>

                                        <!-- <div class="select animated zoomIn">
                                                                                    <input type="radio" name="option">
                                                                                    <i class="toggle icon icon-arrow-down"></i>
                                                                                    <i class="toggle icon icon-arrow-up"></i>
                                                                                    <span class="placeholder">Choose Gender</span>
                                                                                    <label class="option">
                                                                                        <input type="radio" name="option">
                                                                                        <span class="title animated fadeIn">Male</span>
                                                                                    </label>
                                                                                    <label class="option">
                                                                                        <input type="radio" name="option">
                                                                                        <span class="title animated fadeIn">Female</span>
                                                                                    </label>
                                                                                </div> -->

                                    </td>
                                </tr>
                                <tr>
                                    <th>DATE OF BIRTH</th>
                                    <td>
                                    <?php echo $dob; ?>
                                    </td>
                                </tr>


                                <tr>
                                    <th>ADDRESS</th>
                                    <td>
                                    <?php echo $address_p; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CITY</th>
                                    <td>
                                    <?php echo $city_p; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>COUNTRY</th>
                                    <td>
                                    <?php echo $country_p; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PINCODE</th>
                                    <td>
                                    <?php echo $zip; ?>
                                    </td>
                                </tr>

                            </table>
                        </div>

                    </div>
                    <br>
                    <br>
                    <a href="http://localhost/cv/dashboard/admin/components/admin.php?page=details_update" class="addx">
                            EDIT
                        </a>
                </div>


            <?php
        }
    }

}
// SELECT * FROM `user_info` WHERE userid=1;

?>