<link href="../css/education_style.css" rel="stylesheet">
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

    #x {
        background: none;
        height: 100%;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }



    /* /////////////////////////////////////////////////////// */



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
        background: rgb(90, 90, 90);
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
        background: linear-gradient(to bottom,
                rgb(255, 255, 255) 95%,
                dodgerblue 5%);
        background-position: -250px 0;
        background-size: 250px 100%;
        background-repeat: no-repeat;
        color: #000000;
    }

    .custom-select {
        transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
        background: linear-gradient(to bottom,
                rgb(255, 255, 255) 95%,
                dodgerblue 5%);
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
        display: none;
        /*hide original SELECT element:*/
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
    .select-items div,
    .select-selected {
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

    .select-items div:hover,
    .same-as-selected {
        background-color: rgba(0, 0, 0, 0.1);
    }

    .add_skill {
        background: none;
        padding: 10px;
        width: 550px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
    }

    .add_skill_x {
        background: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: row;
        width: 100%;
        padding: 10px;
        /* height: 100px; */
    }

    #skill {
        background: gray;
        color: white;
    }
</style>

<div class="mainx">
    <?php


    $conn = mysqli_connect("localhost", "root", "", "awp_project");

    $userid = $_SESSION['uid'];
    $_SESSION['uid'] = $userid;

    if ($conn === false) {
        die("Not Connected to . " . mysqli_connect_error());
    } else {

        $education = "SELECT * FROM `skills` WHERE userid=" . $userid;
        $ed = $conn->query($education);
        $count = mysqli_num_rows($ed);
        // if ($count == 0) {
        //     ?>
        <!-- //     <a href="http://localhost/cv/dashboard/admin/components/admin.php?page=skills_show" class="addx"> -->
        <!-- <span class="nav-item">Logout</span> -->
        <!-- //         ADD -->
        <!-- //     </a> -->
        <?php
        // } else if ($count != 0) {
    
        ?>
        <div class="main">
            <div class="addxx">
                <div class="unamex">

                    <!-- <div id="cv"> -->

                    <article>
                        <address class="details">
                            <h4>
                                <?php
                                ?>
                                </p>

                        </address>

                    </article>
                    <table id="education">
                        <thead>
                            <tr>
                                <th><span style="padding:20 20px;">S. No</span></th>
                                <th><span style="padding:20 70px;">Skill</span></th>
                                <th><span style="padding:20 20px;">Rating</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sl_no = 1;
                            while ($row = $ed->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td>
                                        <p id="x">
                                            <?php echo $sl_no;
                                            $sl_no++; ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p style="padding:10 70px;">
                                            <?php echo $row["skill_name"]; ?>
                                        </p>
                                    </td>
                                    <td style="padding:10 40px;">
                                        <p>
                                            <?php echo $row["rating"] . " / 5";

                                            // 
                                    
                                            ?>
                                        </p>
                                    </td>
                                </tr>

                            <?php //}        
                            }
    } ?>
                    </tbody>
                </table>

                <table class="sign">
                    <tr>
                        <td></td>
                    </tr>
                </table>


            </div>

        </div>


        <!-- <div class="add_skill_x"> -->
        <form action="add_skill.php">
            <div class="add_skill">
                <div class="add_skill_x">
                    <div class="floating-label-input">
                        <input type="text" id="sname" name="sname" required />
                        <label for="sname">Skill Name*</label>
                    </div>
                    <br>
                    <div class="floating-label-input">
                        <input type="text" id="rating" name="rating" required />
                        <label for="rating">Rating*</label>
                    </div>
                </div>
                <br>
                <input type="submit" class="addx" value="ADD SKILL">
            </div>
        </form>
        <!-- </div> -->




    </div>
</div>

</div>
<br>
<br>
<!-- <a href="details_update.php" class="addx">
                                                                                                                                        EDIT
                                                                                                                                    </a> -->
</div>
<?php



// SELECT * FROM `user_info` WHERE userid=1;

?>

</div>