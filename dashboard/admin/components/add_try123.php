<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drag & Drop or Browse: File Upload | CodingNepal</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
        /* * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      } */
        /* body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #5256ad;
      } */

        .container {
            border-radius: 10px;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
            width: 600px;
            height: auto;
            background-color: #ffffff;
            padding: 30px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .drag-area {
            border: 2px dashed gray;
            background: white;
            height: auto;
            width: 100%;
            padding: 30px 40px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .drag-area.active {
            border: 2px solid #fff;
        }

        .drag-area .icon {
            font-size: 100px;
            color: black;
        }

        .drag-area header {
            font-size: 30px;
            font-weight: 500;
            color: black;
            font-family: "Poppins", sans-serif;
        }

        .drag-area span {
            font-size: 25px;
            font-weight: 500;
            color: black;
            margin: 10px 0 15px 0;
            font-family: "Poppins", sans-serif;
        }

        .contentx-upload2 button {
            padding: 10px 25px;
            font-size: 20px;
            font-weight: 500;
            border: none;
            outline: none;
            background: rgb(42, 42, 42);
            color: white;
            border-radius: 5px;
            cursor: pointer;

        }

        #file_name {
            padding: 30px 25px;
            font-size: 25px;
            font-weight: 500;
            border: none;
            outline: none;
            background: none;
            display: none;
            color: black;
            border-radius: 5px;
            cursor: pointer;
            font-family: "Poppins", sans-serif;

        }

        .drag-area button {
            padding: 10px 25px;
            font-size: 20px;
            font-weight: 500;
            border: none;
            outline: none;
            background: #1fb35b;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .drag-area img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .contentx-upload {
            background: transparent;
            width: 100%;
            height: auto;
            padding: 30px 40px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .contentx-upload2 {
            background: transparent;
            width: 100%;
            height: auto;
            padding: 30px 25px 10px 25px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="container_x">
        <div class="drag-area">

            <div class="contentx-upload">
                <img src="../images/xlsx.png" style="height:100px; width:100px;" alt="cutm" />
                <br>
                <header>Drag & Drop</header>
                <span>OR</span>
                <button>Browse File</button>
                <input type="file" hidden />

            </div>
        </div>
        <div class="contentx-upload2">
            <p id="file_name"></p>

            <button>Upload</button>

        </div>
    </div>



    <script src="script.js"></script>

    <script>
        //selecting all required elements
        const dropArea = document.querySelector(".drag-area"),
            dragText = dropArea.querySelector("header"),
            button = dropArea.querySelector("button"),
            input = dropArea.querySelector("input");
        let file; //this is a global variable and we'll use it inside multiple functions
        button.onclick = () => {
            input.click(); //if user click on the button then the input also clicked
        }
        input.addEventListener("change", function () {
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file = this.files[0];
            document.getElementById("file_name").style.display = "block";
            document.getElementById("file_name").innerHTML = file.name;
            // dropArea.classList.add("active");
            // showFile(); //calling function
        });
        //If user Drag File Over DropArea
        dropArea.addEventListener("dragover", (event) => {
            event.preventDefault(); //preventing from default behaviour
            // dropArea.classList.add("active");
            dragText.textContent = "Release to Upload File";
        });
        //If user leave dragged File from DropArea
        dropArea.addEventListener("dragleave", () => {
            dropArea.classList.remove("active");
            dragText.textContent = "Drag & Drop to Upload File";
        });
        //If user drop File on DropArea
        dropArea.addEventListener("drop", (event) => {
            event.preventDefault(); //preventing from default behaviour
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file = event.dataTransfer.files[0];
            // file = this.files[0];
            document.getElementById("file_name").style.display = "block";
            document.getElementById("file_name").innerHTML = file.name;
            // showFile(); //calling function
        });

///////////////////////////////////////


        // function showFile() {
        //     let fileType = file.type; //getting selected file type
        //     let validExtensions = ["excel/xlsx",]; //adding some valid image extensions in array
        //     if (validExtensions.includes(fileType)) { //if user selected file is an image file
        //         let fileReader = new FileReader(); //creating new FileReader object
        //         fileReader.onload = () => {
        //             let fileURL = fileReader.result; //passing user file source in fileURL variable
        //             // UNCOMMENT THIS BELOW LINE. I GOT AN ERROR WHILE UPLOADING THIS POST SO I COMMENTED IT
        //             // let imgTag = `<img src="${fileURL}" alt="image">`; //creating an img tag and passing user selected file source inside src attribute
        //             dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
        //         }
        //         fileReader.readAsDataURL(file);
        //     } else {
        //         alert("This is not an Image File!");
        //         dropArea.classList.remove("active");
        //         dragText.textContent = "Drag & Drop to Upload File";
        //     }
        // }
    </script>
</body>

</html>