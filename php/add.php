<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Form PDF </title>
   
    <style>
    body {
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, 
    Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
    }
input,select{
    height:25px;
}

    .butt{
    background-color: #007bc7;
    color:white;
    border:none;
    font-size:15px;
    padding: 1em 5em 1em 5em;
    border-radius:10px;
    }
    </style>
    </head>
    <body>
    <center>
    <h1> PDF </h1>
    <form method="POST" action="user_info_db.php" enctype="multipart/form-data">
    <table>
    <tr>
    <td><b>First Name : </b></td> <td><input type="text" id="fname" name="fname" required/></td>
    <td><b>Last Name : </b></td> <td><input type="text" id="lname" name="lname" required/></td>
    </tr>
    <tr>
    <td><b>Gender : </b></td>
    <td> <input type="radio" name="gender" value="Male" required>Male</input></td>
    <td> <input type="radio" name="gender" value="Female" required>Female</input></td>
    </tr>
    <tr>
    <td><b>Email : </b></td> <td><input type="text" id="email" name="email" required/></td>
    </tr>
    <tr>
    <td><b>Phone : </b></td> <td><input type="text" id="phn" name="phn" required/></td>
    </tr>
    <tr>
    <td><b>Date of Birth: </b></td> <td><input type="date" id="date" name="date" required/></td>
    </tr>
    <tr>
    <td><b>Address: </b></td> <td><input type="text" id="addr" name="addr" required/></td>
    </tr>
    <tr>
    <td><b>Country: </b></td>
    <td>
    <select id="country" name="country" required>
    <option></option>
    <option value="India">India</option>
    <option value="Russia">Russia</option>
    <option value="USA">USA</option>
    </select>
    </td>
    </tr>
    </table>
    <br>
    <button type="submit" value="SUBMIT" class="butt">SUBMIT</button>
    </form>
    </body>
    </html>