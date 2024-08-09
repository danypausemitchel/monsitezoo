const scrollTopButton=document.getElementById("scroll-top-button");

window.onscroll=function(){
    if (window.scrollY>200){
        scrollTopButton.classList.add("show");
    }
    else{
        scrollTopButton.classList.remove("show");
    }    
}