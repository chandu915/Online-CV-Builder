const dropArea = document.querySelector(".drag-area"),
  dragText = dropArea.querySelector("header"),
  button = dropArea.querySelector("button"),
  input = dropArea.querySelector("input");
let file;
button.onclick = () => {
  input.click();
};
input.addEventListener("change", function () {
  file = this.files[0];
  document.getElementById("file_name").style.display = "block";
  document.getElementById("file_name").innerHTML = file.name;
});

dropArea.addEventListener("dragover", (event) => {
  event.preventDefault();
  dragText.textContent = "Release to Upload File";
});

dropArea.addEventListener("dragleave", () => {
  dropArea.classList.remove("active");
  dragText.textContent = "Drag & Drop to Upload File";
});
dropArea.addEventListener("drop", (event) => {
  event.preventDefault();
  file = event.dataTransfer.files[0];
  document.getElementById("file_name").style.display = "block";
  document.getElementById("file_name").innerHTML = file.name;
});
