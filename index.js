let btn=document.querySelector(".my_btn");

btn.addEventListener("click",btn_click);

function btn_click(){
    
    document.querySelector("body").classList.toggle("new_class");
    btn.classList.toggle("new_class");
    
}