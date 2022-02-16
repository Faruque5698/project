
const title = document.querySelector(".container_show h2")
const subTitle = document.querySelector(".container_show h4")
const img = document.querySelector(".container_show img")
const desc = document.querySelector(".container_show p");

const newTitle = document.querySelector(".blog_box form .form_title")
const newSubTitle = document.querySelector(".blog_box form .form_subtitle")
const newImgTitle = document.querySelector(".blog_box form .img_file")
const newDesc = document.querySelector(".blog_box form .form_desc")


newTitle.onchange = function(e){
    title.innerText = e.target.value
}

newSubTitle.onchange = function(e){
    subTitle.innerText = e.target.value;
}

newDesc.onchange = function(e){
    desc.innerText = e.target.value
}

newImgTitle.addEventListener("change", uploadFile)

function uploadFile() {
    let file = this.files[0];
    if (file) {
      let reader = new FileReader();
      reader.onload = function () {
        let result = reader.result;
        img.src = result;
      };
  
      reader.readAsDataURL(file);
  
    }
  
  }


CKEDITOR.replace("blog_edit_textarea")
