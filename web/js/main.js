const countries = [
    {
        id:"CDR", name:"Congo Democratic Republic", code : 243 
    },
    {
        id:"RW", name:"Republic Of Rwanda",code : 250 
    },
    {
        id:"TZ", name:"Tanzania", code : 243
    },
    {
        id:"KY", name:"Kenya Republic",code : 255
    },
    {
        id:"SM", name:"Republic Of Somali",code : 243
    },
    {
        id:"CDR",
        name:"Congo Democratic Republic",
        code : 243
    },
]





//WORK WITH THE RESPONSIVE MENU

//Display menu bnt
const menuDisplayerBtn = document.getElementById("menuDisplayerBtn");

//closer Btn
const closer = document.getElementById("span");

//Block of menu (Default classList = ["content","slideToRight"])
const content = document.getElementById("listUL");

//Main Menu Conatiner
const AllContent = document.getElementById("AllContent");

    //Function for closer menu
     const  closerFx = () =>{
          if(content.classList.contains("slideToRight")){

                //Update ClassList 
                content.classList ="slideToLeft content"
               
                console.log(content.classList)
                //Set An interval before hide of 350ms the whole content
                setTimeout(()=>{
                    AllContent.style.display = "none";
                },350);   
          }
      }

    //function for display menu
    const displayMenuFX = () => {
        content.classList ="slideToRight content"
        AllContent.style.display = "block";
    } 


const toTopScroller = document.getElementById("toTopScroller");

let scrollable;
let scrolled;

//SECTION COUNTER
const counterSection = document.querySelector(".counters");

function checkVisibility(element){
    var element_ = document.getElementById(element);
    if(element_){
        var position = element_.getBoundingClientRect();
        // checking whether fully visible
        if(position.top >= 0 && position.bottom <= window.innerHeight) {
           return true
        }

        // checking for partial visibility
        if(position.top < window.innerHeight && position.bottom >= 0) {
           return false
        }
    }
}


function counter(array){
    const speed = 40
    array.forEach(Divtarget => {
        const update = () =>{
            const target = +Divtarget.getAttribute("data-target")
            const count = Math.floor(+Divtarget.innerText);
            const inc = target / speed;
           
            if(count < target){
                Divtarget.innerHTML = count + inc
                setTimeout(()=>{
                    update()
                },60)
            }else{
                Divtarget.innerText = target
            }
        }
        update()
    });
}

window.addEventListener("scroll",()=>{
     scrollable  =  Math.ceil(document.documentElement.scrollHeight - window.innerHeight)
     scrolled = window.scrollY;
    if(scrolled > 0 ){
      
        toTopScroller.style.display = "block"
    }else{
       
        if(window.innerWidth < 768){

        }else{
           
        }
        toTopScroller.style.display = "none"
    }

    if(checkVisibility('counterSection')){
        counter(document.querySelectorAll("#countDIV"))
    }
})

//toTopScroller Button
toTopScroller.addEventListener("click",(e)=>{
    e.preventDefault()

    document.body.style.transition = "0.50s"
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera

})




//Email SOuscription
const newletter = document.getElementById("newletter");
const emailaddress = document.getElementById("emailaddress");
const ButtonSubmit = document.getElementById("btnSubmit")

//All pages newsletter footer form
if(newletter){newletter.addEventListener("submit",submit);}


//for blogs pages newsletter block
const formBlogNewsLetter = document.getElementById("formBlog")
if(formBlogNewsLetter){
    formBlogNewsLetter.addEventListener("submit",(e)=>{
        e.preventDefault()
        let email = e.target.elements[0];
       
            email.border = "none"
            email = e.target.elements[0].value
    
            const Result =  document.getElementById("msgBlockResult");
            let xhr = new XMLHttpRequest()
            xhr.onreadystatechange = ()=>{
                if(xhr.readystate = 4 && xhr.status == 200){
    
                    setTimeout(function(){
                        Result.innerHTML = xhr.responseText;
                    },600)
                   
                    setTimeout(()=>{
                        e.target.elements[0].value = ""
                        Result.innerHTML = ""
                    },2500)
                }
            }
            xhr.open("GET",`http://localhost/eschool/web/config/newsletter.php?email=${email}`,true);
            xhr.send();
    });
}


function submit (e){
    e.preventDefault()
    let email = e.target.elements[0];
   
        email.border = "none"
        email = e.target.elements[0].value

        const Result =  document.getElementById("message");
        let xhr = new XMLHttpRequest()
        xhr.onreadystatechange = ()=>{
            if(xhr.readystate = 4 && xhr.status == 200){

                setTimeout(function(){
                    Result.innerHTML = xhr.responseText;
                },600)
               
                setTimeout(()=>{
                    e.target.elements[0].value = ""
                    Result.innerHTML = ""
                },2500)
            }
        }
        xhr.open("GET",`http://localhost/eschool/web/config/newsletter.php?email=${email}`,true);
        xhr.send();
}






//Get a free quote
const freequoteForm = document.getElementById("freequoteForm")
const freequoteReporter =document.getElementById("freequoteReporter")
if(freequoteForm && freequoteReporter){
    freequoteForm.addEventListener("submit",(e)=>{
        e.preventDefault()

        var re = /^(([^<>()\[\]\\.,;:#\s@"]+(\.[^<>()\[\]\\.,;#:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
        var isValidEmail = re.test(String(e.target.elements[1].value).toLowerCase())

        var email = "";
        var user  = "";
        var msg   = "";
        var eR = []

        freequoteReporter.innerText = "Processing Request ..."
        if(e.target.elements[0].value < 5 && e.target.elements[0].value == ""){
            freequoteReporter.innerText = "Entrer un nom valide ..."
            e.target.elements[0].style.backgroundColor = "transparent"
        }else{
            e.target.elements[0].style.backgroundColor = "#efefef"
            user = e.target.elements[0].value;
            eR = []
        }

        if(isValidEmail !== true){
            freequoteReporter.innerText = "Entrer un email valide ...";
            e.target.elements[1].style.backgroundColor = "transparent";
        }else{
            e.target.elements[1].style.backgroundColor = "#efefef";
            email = e.target.elements[1].value;
        }

        if(e.target.elements[2].value.length < 50){
            freequoteReporter.innerText = "Message trop court ...";
            e.target.elements[2].style.backgroundColor = "transparent";
        }else{
            e.target.elements[2].style.backgroundColor = "#efefef";
            msg = e.target.elements[2].value;
        }


        if(email !== "" && user !== "" && msg !== ""){
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = () => {
                if(xhr.readyState == 4 && xhr.status == 200){
    
                    setTimeout(()=>{
                        freequoteReporter.innerText = xhr.responseText;
                    },600)
                   
                    setTimeout(()=>{
                        freequoteReporter.innerText ="";
                        e.target.reset()
                    },1500)
                    
                }
            }
    
            xhr.open("GET",`http://127.0.0.1/eschool/web/config/devis.php?name=${user}&email=${email}&msg=${msg}`,true);
            xhr.send();
        }  
    })
}

function validateDate(testdate) {
    var date_regex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/ ;
    return date_regex.test(testdate);
}



const registrationHuman =  document.getElementById("registrationHuman");
const registrationReport = document.getElementById("registrationReport")

    if(registrationHuman && registrationReport){
        registrationHuman.addEventListener("submit",(e)=>{
            e.preventDefault()

            const fname = document.getElementById("fname").value
            const lname = document.getElementById("lname").value
            const pseudo = document.getElementById("pseudo").value
            const sex = document.getElementById("sex").value
            const degree = document.getElementById("degree").value
            const section  = document.getElementById("field").value
            let BirthDay = document.getElementById("bday").value;

            const Academic = document.getElementById("academic").value;

            //function for birthday validation
            const checkbirthday = (date) => {
                const cYear = new Date().getFullYear();
                const inputDate = new Date(date);
                const now = new Date();
              

                if(inputDate > now || inputDate == now){
                    console.log('invalid date');
                    return false;
                }else{
                    const diff = parseInt(now.getFullYear()) - parseInt(inputDate.getFullYear());
                    console.log(diff);
                    if(diff >= 3){
                        BirthDay = date;
                        return true;
                    }else{
                        return false;
                    }
                }
            };

            const fullYear = parseInt(Academic) - 1+"-"+parseInt(Academic);
            const ldn = document.getElementById("ldn").value;
            const division = "humanity";

            //call checkdate function;
            if( checkbirthday(BirthDay)){

        
            let xhr = new XMLHttpRequest();
                registrationReport.innerText = "Loading ..."
                xhr.onreadystatechange = ()=>{
                    if(xhr.readyState == 4 && xhr.status == 200){
                        setTimeout(()=>{
                            registrationReport.innerText = xhr.response
                        },600)

                        setTimeout(()=>{
                            registrationReport.innerText= ""
                            e.target.reset();
                        },6000);
                    }
                }

            xhr.open("GET",`http://localhost/eschool/web/config/registration.php?fname=${fname}&lname=${lname}&pseudo=${pseudo}&bday=${BirthDay}&ldn=${ldn}&class=${degree}&section=${section}&academic=${fullYear}&division=${division}&sex=${sex}`,true);
            xhr.send()
            }else{window.alert('cannot  registrate due to age !')}
        });
    }


    
    const LowCycleBtn = document.getElementById("LowCycleBtn")
    const ContentReg = document.getElementById("ContentReg")

    if(LowCycleBtn && ContentReg){
        LowCycleBtn.addEventListener("click",(e)=>{
          
            let xhr = new XMLHttpRequest();
            
            xhr.onreadystatechange = ()=>{
                if(xhr.readyState == 4 && xhr.status == 200){
                   
                        ContentReg.innerHTML = xhr.response

                        const registrationCo = document.getElementById("registrationCo")

                        setTimeout(()=>{
                            LoadCountries();

                            registrationCo.addEventListener("submit",SaveCo)
                        },5000)

                      

                   
                }
            }

        xhr.open("GET",`http://localhost/eschool/web/config/co.php?`,true);
        xhr.send()
        })
    }

    function SaveCo(e){
        e.preventDefault()
 
        const registrationReport2 = document.getElementById("registrationReport2")
     
        const fname = document.getElementById("fname2").value
        const lname = document.getElementById("lname2").value
        const pseudo = document.getElementById("pseudo2").value
        const sex = document.getElementById("sex2").value
        const degree = document.getElementById("degree2").value
        const section  = document.getElementById("field2").value
        const BirthDay = document.getElementById("bday2").value

        const Academic = document.getElementById("academic2").value
        const fullYear = parseInt(Academic) - 1+"-"+parseInt(Academic)
        const ldn = document.getElementById("ldn2").value
        const division = "C.O"


        let xhrCO = new XMLHttpRequest();
           
            xhrCO.onreadystatechange = ()=>{
                if(xhr.readyState == 4 && xhr.status == 200){
                   e.target.reset()
                }
            }
            xhrCO.open("GET",`http://localhost/eschool/web/config/registration.php?fname=${fname}&lname=${lname}&pseudo=${pseudo}&bday=${BirthDay}&ldn=${ldn}&class=${degree}&section=${section}&academic=${fullYear}&division=${division}&sex=${sex}`,true);
            xhrCO.send()
       
       
    }

   

    function LoadCountries(){
        if(document.getElementById("country")){
            const countrySelect = document.getElementById("country")
            countries.forEach ( country => {
                const option = document.createElement("option")
                      option.innerText = country.name
                      option.value = country.code

                      countrySelect.appendChild(option)
            })
        }
    }

    const loginForm = document.getElementById("loginForm")
    if(loginForm){
        loginForm.addEventListener("submit",(e)=>{

            e.preventDefault()

            const id = document.getElementById("userID")
            const pwd =  document.getElementById("pwd")
            const Reporter =  document.getElementById("Reporter")

            if(id.value == "" || pwd.value == ""){
                Reporter.innerText = "All Fields are Required";
            }else{
                let xhr = new XMLHttpRequest()
                    xhr.onreadystatechange = () =>{
                        if(xhr.status == 200 && xhr.readyState == 4){
                            const state = parseInt(xhr.responseText)
                            if(state == 1){
                                Reporter.innerText = "We are preparing your interface ...";

                                setTimeout(()=>{
                                    window.location.href = "http://localhost/eschool/web/student/?id="+id.value;
                                },5000)

                            }else{
                                Reporter.innerText = "Enable to find this account !"
                            }
                        }
                    }

                    xhr.open("GET",`http://localhost/eschool/web/config/login.php?id=${id.value}&pwd=${pwd.value.toLowerCase()}`,true)
                    xhr.send()
            }
        })
    }

    window.addEventListener("DOMContentLoaded",(e)=>{
       LoadCountries()
    })