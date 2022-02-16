let imgUpClicker = document.querySelector(".fas.fa-camera");
let dPhoto = document.querySelector(".reg_pro_img");
imgUpClicker.addEventListener("click", () => {
  let imgInput = document.querySelector(".input_doctor_photo");
  imgInput.click();
  imgInput.addEventListener("change", uploadFile);
});

function uploadFile() {
  let file = this.files[0];
  if (file) {
    let reader = new FileReader();
    reader.onload = function () {
      let result = reader.result;
      dPhoto.src = result;
    };
    reader.readAsDataURL(file);
  }

}


const degreeAddBtn = document.querySelector("span.btn.deg_list_add_btn")
degreeAddBtn.addEventListener("click", ()=>{
    makeLine()
})


// function makeLine(){
//     let degreeForm = document.querySelector(".edit_bio_box > div > ol")
//    let newEl = document.createElement("li")
//     newEl.innerHTML = `
//         <div class="row">
//             <div class="col">
//               <label for="Name">Name</label>
//               <input type="text" name="" id="Name" placeholder="Degree Name">
//           </div>
//             <div class="col">
//               <label for="Year">at</label>
//               <input type="number" placeholder="Year">
//           </div>
//           <div class="col">
//               <label for="From">From</label>
//               <input type="text" name="" id="From" placeholder="Board/University">
//           </div>
//           <span class="btn"><i class="fas fa-times"></i></span>
//       </div>
//     `
//     degreeForm.append(newEl)


//     let removeBtn = newEl.querySelector("i.fas.fa-times")
//     removeBtn.addEventListener("click", ()=>{
//       newEl.remove()
//     })

// }

const bioEditBtn = document.querySelector(".brif > .btns > i.fa-edit")
const bioEditClose = document.querySelector(".brif .edit_bio_box i.fa-times")
const editBioBox = document.querySelector(".brif .edit_bio_box")

bioEditBtn.addEventListener("click", function(){
  editBioBox.style.display = "grid";
})

bioEditClose.addEventListener("click", function(){
  editBioBox.style.display = "none";
})




const blogBoxBtns = document.querySelectorAll(".blog_boxes .box .btns")

document.querySelectorAll(".blog_del_btn").forEach(e=>{
  e.addEventListener("click", function(){
    let result = confirm("Are you sure to delete?");
    if(result){
      this.parentElement.parentElement.remove()
    }
  })
})





const cityLine = document.getElementById("city")
cityLine.addEventListener("click", function(){
   let eleM = this.parentElement.querySelector(".opt_card_city")
    eleM.classList.toggle("active")
    this.parentElement.querySelectorAll(".opt_card_city ul li").forEach((e)=>{
        e.addEventListener("click", ()=>{
            cityLine.value = e.innerText
            eleM.classList.remove("active")
        }  )
    })
})

const countryLine = document.getElementById("country")
countryLine.addEventListener("click", function(){
    let eleM = this.parentElement.querySelector(".opt_card_country")
     eleM.classList.toggle("active")
     this.parentElement.querySelectorAll(".opt_card_country ul li").forEach((e)=>{
         e.addEventListener("click", ()=>{
            countryLine.value = e.innerText
             eleM.classList.remove("active")
         }  )
     })
 })


document.querySelector(".btn.edit_bio_box_save").addEventListener("click", function(){
  this.parentElement.parentElement.style.display = "none";
})