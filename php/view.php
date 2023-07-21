<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Form PDF </title>
   
    <style>
    body {
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, 
    Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
    }
    input{
        height:45px;
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
    <form method="POST" action="tryx.php" enctype="multipart/form-data">
   
  <input type="radio" name="t" value="Chandu">
  <input type="radio" name="t" value="Sai">
    
    <button type="submit" value="SUBMIT" class="butt">VIEW</button>
    </form>
    </body>
    </html>