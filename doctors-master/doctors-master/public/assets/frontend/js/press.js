let Enter = document.querySelectorAll(".patient_details_fill form input");
let Post = document.querySelectorAll(".part_2 .line input");

Enter.forEach((item) => {
  item.onchange = (e) => {
    let phoneOne = item.classList.contains("client_phone");
    let nameOne = item.classList.contains("client_name");
    let ageOne = item.classList.contains("client_age");
    let fatherOne = item.classList.contains("client_father");
    let fPhoneOne = item.classList.contains("client_f_phone");
    e.preventDefault();
    let val1 = e.target.value;

    Post.forEach((itemTwo) => {
      let phoneTwo = itemTwo.classList.contains("client_phone");
      let nameTwo = itemTwo.classList.contains("client_name");
      let ageTwo = itemTwo.classList.contains("client_age");
      let fatherTwo = itemTwo.classList.contains("client_father");
      let fPhoneTwo = itemTwo.classList.contains("client_f_phone");

      if (
        (phoneOne && phoneTwo) ||
        (nameOne && nameTwo) ||
        (ageOne && ageTwo) ||
        (fatherOne && fatherTwo) ||
        (fPhoneOne && fPhoneTwo)
      ) {
        itemTwo.value = val1;
        val1.value = "";
      }
    });
  };
});

let patentDetailsActive = document.querySelectorAll(".detail_fill");
let patentDetailsActiveTitle = document.querySelectorAll(".detail_fill_title");


patentDetailsActiveTitle.forEach((i) => {
  i.addEventListener("click", () => {
    i.parentElement.classList.toggle("active");
  });
});


let mLogo = document.getElementById("medical_logo");
let inputMLogo = document.querySelector(".input_medical_logo");

mLogo.addEventListener("click", () => {
  inputMLogo.click();
});

inputMLogo.addEventListener("change", function () {
  let file = this.files[0];
  if (file) {
    let reader = new FileReader();
    reader.onload = function () {
      let result = reader.result;
      mLogo.src = result;
    };

    reader.readAsDataURL(file);

  }

});


let itemAdd = document.querySelector(".tab_add_btn");
let capAdd = document.querySelector(".cap_add_btn");
let sirupAdd = document.querySelector(".sirup_add_btn")
let othersAdd = document.querySelector(".others_add_btn")


let tab_line = document.querySelector(".tab_line");
let tabAddTwp = document.querySelector(".ext_add_btn.tablets")
let sirupAddTwp = document.querySelector(".ext_add_btn.sirups")
let othersAddTwp = document.querySelector(".ext_add_btn.others")
let capAddBtnTwo = document.querySelector(".ext_add_btn.capsule")


let tabAddThree = document.querySelector(".title_btn.tab")
let capAddThree = document.querySelector(".title_btn.cap")
let sirupAddThree = document.querySelector(".title_btn.sirup")
let othersAddThree = document.querySelector(".title_btn.others")


let itemRemove = document.querySelectorAll(".text div .remove_btn");

itemRemove.forEach((item) => {
  item.addEventListener("click", () => {
    item.parentElement.parentElement.remove();
  });
});

itemAdd.addEventListener("click", tabAddFunc)
tabAddTwp.addEventListener("click", tabAddFunc)
tabAddThree.addEventListener("click", tabAddFunc)


capAdd.addEventListener("click", capAddFunc)
capAddBtnTwo.addEventListener("click", capAddFunc)
capAddThree.addEventListener("click", capAddFunc)

sirupAdd.addEventListener("click", sirupAddFunc );
sirupAddTwp.addEventListener("click", sirupAddFunc );
sirupAddThree.addEventListener("click", sirupAddFunc );

othersAdd.addEventListener("click", othersAddFunc );
othersAddTwp.addEventListener("click", othersAddFunc );
othersAddThree.addEventListener("click", othersAddFunc );



function capAddFunc () {
  let cap_line = document.querySelector(".cap_line");
  let newEl = document.createElement("div");
  newEl.classList.add("text");
  let capNameEnter = document.querySelector(".cap_name_enter").value
  let capTimeEnter = document.querySelector(".cap_time_enter").value
  let capHowEnter = document.querySelector(".cap_how_enter").value
  let capDaysEnter = document.querySelector(".cap_days_to_eat").value
  newEl.innerHTML = `
  <div>
  <div>
      <input type="text" placeholder=" name" class="tab_name cap_name_post">
      <!--  -->
      <div class="input_container">
          <div class="input">
              <input type="text" class="tab_time cap_time_post" placeholder="x + 0 + x" >
              <div class="input_options">
                   <ol>
                       <li>1 + 0 + 0</li>
                       <li>1 + 0 + 1</li>
                       <li>1 + 1 + 0</li>
                       <li>0 + 1 + 0</li>
                       <li>0 + 1 + 1</li>
                       <li>0 + 0 + 1</li>
                       <li>1 + 1 + 1</li>
                   </ol>
              </div>
          </div>
      </div>

      <div class="input_container">
          <div class="input">
              <input type="text" placeholder="how to eat" class="tab_how cap_how_post"> 
              <div class="input_options">
                   <ol>
                      <li>After Meal</li>
                      <li>Before Meal</li>
                      
                      
                      
                   </ol>
              </div>
          </div>
      </div>

      <!-- -->
      <div class="input_container">
          <div class="input">
              <input type= "text" placeholder="days to Eat" class="days_to_eat">
              <div class="input_options">
                   <ol>
                      <li>7 Days</li>
                      <li>14 Days</li>
                      <li>21 Days</li>
                      <li>30 Days</li>
                      <li>Continue</li>
                   </ol>
              </div>
          </div>
      </div>
      <!--  <div> 
           <label for="cars">Days</label> 
       </div> -->
     </div> 
         <span class="btn remove_btn">x</span>
</div>
    `;
  cap_line.appendChild(newEl);

  newEl.querySelector(".cap_name_post").value = capNameEnter
  newEl.querySelector(".cap_time_post").value = capTimeEnter
  newEl.querySelector(".cap_how_post").value = capHowEnter
  newEl.querySelector(".days_to_eat").value = capDaysEnter


document.querySelector(".cap_name_enter").value = ""
document.querySelector(".cap_time_enter").value = ""
 document.querySelector(".cap_how_enter").value = ""
 document.querySelector(".cap_days_to_eat").value = ""


  let itemRemove = document.querySelectorAll(".text div .remove_btn");

  itemRemove.forEach((item) => {
    item.addEventListener("click", () => {
      item.parentElement.parentElement.remove();
    });
  });

  const inpFile = document.querySelectorAll(".input_container .input input")
  inpFile.forEach(e=>{
    e.addEventListener("click", function(){
      // inpOptions.style.display = "inherit"
      this.parentElement.parentElement.classList.toggle("active")
      
      let fillInp = this.parentElement.parentElement.querySelector(".input input")
      
      let inpOption = this.parentElement.parentElement.querySelectorAll(".input .input_options ol li")
      
      inpOption.forEach(e=>{
        e.addEventListener("click", function(){
          fillInp.value = e.innerText;
          e.parentElement.parentElement.parentElement.parentElement.classList.remove("active")
        })
      })
    })
  })

};


function tabAddFunc(){
    let newEl = document.createElement("div");
    newEl.classList.add("text");
    
    //       // fillling names
    let tabNameEnter = document.querySelector(".tab_name_enter").value
    let tabTimeEnter = document.querySelector(".tab_time_enter").value
    let tabHowEnter = document.querySelector(".tab_how_enter").value
    let tabDaysEnter = document.querySelector(".tab_days_to_eat").value
    
    newEl.innerHTML = `
    <div>
    <div>
        <input type="text" placeholder=" name" class="tab_name tab_name_post">
        <!--  -->
        <div class="input_container">
            <div class="input">
                <input type="text" class="tab_time tab_time_post" placeholder="x + 0 + x" >
                <div class="input_options">
                     <ol>
                         <li>1 + 0 + 0</li>
                         <li>1 + 0 + 1</li>
                         <li>1 + 1 + 0</li>
                         <li>0 + 1 + 0</li>
                         <li>0 + 1 + 1</li>
                         <li>0 + 0 + 1</li>
                         <li>1 + 1 + 1</li>
                     </ol>
                </div>
            </div>
        </div>

        <div class="input_container">
            <div class="input">
                <input type="text" placeholder="how to eat" class="tab_how tab_how_post"> 
                <div class="input_options">
                     <ol>
                        <li>After Meal</li>
                        <li>Before Meal</li>
                        
                        
                        
                     </ol>
                </div>
            </div>
        </div>

        <!-- -->
        <div class="input_container">
            <div class="input">
                <input type= "text" placeholder="days to Eat" class="days_to_eat">
                <div class="input_options">
                     <ol>
                        <li>7 Days</li>
                        <li>14 Days</li>
                        <li>21 Days</li>
                        <li>30 Days</li>
                        <li>Continue</li>
                     </ol>
                </div>
            </div>
        </div>
        <!--  <div> 
             <label for="cars">Days</label> 
         </div> -->
       </div> 
           <span class="btn remove_btn">x</span>
 </div>
              `;
              
              tab_line.appendChild(newEl);
  newEl.querySelector(".tab_name_post").value = tabNameEnter
   newEl.querySelector(".tab_time_post").value = tabTimeEnter
   newEl.querySelector(".tab_how_post").value = tabHowEnter
   newEl.querySelector(".days_to_eat").value = tabDaysEnter
     
  
   document.querySelector(".tab_name_enter").value = ""
   document.querySelector(".tab_time_enter").value = ""
  document.querySelector(".tab_how_enter").value = ""
  document.querySelector(".tab_days_to_eat").value = ""
        
  
    let itemRemove = document.querySelectorAll(".text div .remove_btn");
  
    itemRemove.forEach((item) => {
      item.addEventListener("click", () => {
        item.parentElement.parentElement.remove();
      });
    });


const inpFile = document.querySelectorAll(".input_container .input input")
inpFile.forEach(e=>{
  e.addEventListener("click", function(){
    // inpOptions.style.display = "inherit"
    this.parentElement.parentElement.classList.toggle("active")
    
    let fillInp = this.parentElement.parentElement.querySelector(".input input")
    
    let inpOption = this.parentElement.parentElement.querySelectorAll(".input .input_options ol li")
    
    inpOption.forEach(e=>{
      e.addEventListener("click", function(){
        fillInp.value = e.innerText;
        e.parentElement.parentElement.parentElement.parentElement.classList.remove("active")
      })
    })
   })
  })
};

function othersAddFunc ()  {
    let others_line = document.querySelector(".others_line");
    let newEl = document.createElement("div");
    newEl.classList.add("text");
    let othersNameEnter = document.querySelector(".others_name").value
    let othersTimeEnter = document.querySelector(".others_time").value
    let othersHowEnter = document.querySelector(".others_how").value
    let othersDaysEnter = document.querySelector(".others_days_to_eat").value
    newEl.innerHTML = `
    <div>
    <div>
        <input type="text" placeholder=" name" class="tab_name cap_name_post">
        <!--  -->
        <div class="input_container">
            <div class="input">
                <input type="text" class="tab_time cap_time_post" placeholder="x + 0 + x" >
                <div class="input_options">
                     <ol>
                         <li>1 + 0 + 0</li>
                         <li>1 + 0 + 1</li>
                         <li>1 + 1 + 0</li>
                         <li>0 + 1 + 0</li>
                         <li>0 + 1 + 1</li>
                         <li>0 + 0 + 1</li>
                         <li>1 + 1 + 1</li>
                     </ol>
                </div>
            </div>
        </div>
  
        <div class="input_container">
            <div class="input">
                <input type="text" placeholder="how to eat" class="tab_how cap_how_post"> 
                <div class="input_options">
                     <ol>
                        <li>After Meal</li>
                        <li>Before Meal</li>
                     </ol>
                </div>
            </div>
        </div>
  
        <!-- -->
        <div class="input_container">
            <div class="input">
                <input type= "text" placeholder="days to Eat" class="others_days_to_eat_post">
                <div class="input_options">
                     <ol>
                        <li>7 Days</li>
                        <li>14 Days</li>
                        <li>21 Days</li>
                        <li>30 Days</li>
                        <li>Continue</li>
                     </ol>
                </div>
            </div>
        </div>

       </div> 
           <span class="btn remove_btn">x</span>
  </div>
      `;
    others_line.appendChild(newEl);
    newEl.querySelector(".tab_name").value = othersNameEnter
    newEl.querySelector(".tab_time").value = othersTimeEnter
    newEl.querySelector(".tab_how").value = othersHowEnter
    newEl.querySelector(".others_days_to_eat_post").value = othersDaysEnter
  
  document.querySelector(".others_name").value = ""
  document.querySelector(".others_time").value = ""
  document.querySelector(".others_how").value = ""
  document.querySelector(".others_days_to_eat").value = ""
  
  
  
    let itemRemove = document.querySelectorAll(".text div .remove_btn");
  
    itemRemove.forEach((item) => {
      item.addEventListener("click", () => {
        item.parentElement.parentElement.remove();
      });
    });



    const inpFile = document.querySelectorAll(".input_container .input input")
  inpFile.forEach(e=>{
    e.addEventListener("click", function(){
      // inpOptions.style.display = "inherit"
      this.parentElement.parentElement.classList.toggle("active")
      
      let fillInp = this.parentElement.parentElement.querySelector(".input input")
      
      let inpOption = this.parentElement.parentElement.querySelectorAll(".input .input_options ol li")
      
      inpOption.forEach(e=>{
        e.addEventListener("click", function(){
          fillInp.value = e.innerText;
          e.parentElement.parentElement.parentElement.parentElement.classList.remove("active")
        })
      })
    })
  })




}

function sirupAddFunc () {
    let sirup_line = document.querySelector(".sirup_line");
    let newEl = document.createElement("div");
    newEl.classList.add("text");
  
    let sirupNameEnter = document.querySelector(".sirup_name").value
    let sirupTimeEnter = document.querySelector(".sirup_time").value
    let sirupHowEnter = document.querySelector(".sirup_how").value
    let sirupDaysEnter = document.querySelector(".sirup_days_to_eat").value
  
    newEl.innerHTML = `
    <div>
    <div>
        <input type="text" placeholder=" name" class="tab_name sirup_name_post">
        <!--  -->
        <div class="input_container">
            <div class="input">
                <input type="text" class="tab_time sirup_time_post" placeholder="x + 0 + x" >
                <div class="input_options">
                     <ol>
                         <li>1 + 0 + 0</li>
                         <li>1 + 0 + 1</li>
                         <li>1 + 1 + 0</li>
                         <li>0 + 1 + 0</li>
                         <li>0 + 1 + 1</li>
                         <li>0 + 0 + 1</li>
                         <li>1 + 1 + 1</li>
                     </ol>
                </div>
            </div>
        </div>
  
        <div class="input_container">
            <div class="input">
                <input type="text" placeholder="how to eat" class="tab_how sirup_how_post"> 
                <div class="input_options">
                     <ol>
                        <li>After Meal</li>
                        <li>Before Meal</li>
                        
                        
                        
                     </ol>
                </div>
            </div>
        </div>
  
        <!-- -->
        <div class="input_container">
            <div class="input">
                <input type= "text" placeholder="days to Eat" class="days_to_eat">
                <div class="input_options">
                     <ol>
                        <li>7 Days</li>
                        <li>14 Days</li>
                        <li>21 Days</li>
                        <li>30 Days</li>
                        <li>Continue</li>
                     </ol>
                </div>
            </div>
        </div>
        <!--  <div> 
             <label for="cars">Days</label> 
         </div> -->
       </div> 
           <span class="btn remove_btn">x</span>
  </div>
      `;
    sirup_line.appendChild(newEl);
  
    newEl.querySelector(".sirup_name_post").value =sirupNameEnter
    newEl.querySelector(".sirup_time_post").value =sirupTimeEnter
    newEl.querySelector(".sirup_how_post").value =sirupHowEnter
    newEl.querySelector(".days_to_eat").value =sirupDaysEnter
  
    document.querySelector(".sirup_name").value = ""
    document.querySelector(".sirup_time").value = ""
  document.querySelector(".sirup_how").value = ""
  document.querySelector(".sirup_days_to_eat").value = ""
  
    let itemRemove = document.querySelectorAll(".text div .remove_btn");
  
    itemRemove.forEach((item) => {
      item.addEventListener("click", () => {
        item.parentElement.parentElement.remove();
      });
    });



    const inpFile = document.querySelectorAll(".input_container .input input")
  inpFile.forEach(e=>{
    e.addEventListener("click", function(){
      // inpOptions.style.display = "inherit"
      this.parentElement.parentElement.classList.toggle("active")
      
      let fillInp = this.parentElement.parentElement.querySelector(".input input")
      
      let inpOption = this.parentElement.parentElement.querySelectorAll(".input .input_options ol li")
      
      inpOption.forEach(e=>{
        e.addEventListener("click", function(){
          fillInp.value = e.innerText;
          e.parentElement.parentElement.parentElement.parentElement.classList.remove("active")
        })
      })
    })
  })





}



const inpFile = document.querySelectorAll(".input_container .input input")
inpFile.forEach(e=>{
  e.addEventListener("click", function(){
    this.parentElement.parentElement.classList.toggle("active")
    
    let fillInp = this.parentElement.parentElement.querySelector(".input input")
    
    let inpOption = this.parentElement.parentElement.querySelectorAll(".input .input_options ol li")
    
    inpOption.forEach(e=>{
      e.addEventListener("click", function(){
        fillInp.value = e.innerText;
        e.parentElement.parentElement.parentElement.parentElement.classList.remove("active")
      })
    })
   })
  })




