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

 
 const checkBox2 = document.getElementById("checkbox2")
 const checkBox1 = document.getElementById("checkbox")
 
 const termsButton2 = document.querySelector(".term_c_block span.btn")
 termsButton2.addEventListener("click", function () {
    this.parentElement.parentElement.style.display = "none"
    
    })
    
    
    checkBox2.addEventListener("change", function (){
        if(this.checked){
            termsButton2.style.visibility = "visible"
            checkBox1.checked = true;
        }else{
            termsButton2.style.visibility = "hidden"
            checkBox1.checked = false;
        }
    })
    
    
    
const termsOne = document.querySelector(".check_box_label_main")

termsOne.addEventListener("click", function(){
    const termsBlock = document.querySelector(".term_c_block")
        termsBlock.style.display = "grid"
})