function stickyNavbar(element){
    window.addEventListener('scroll',function(e){
        if (window.scrollY>0){
            document.getElementById(element).classList.add("fixed-top");
            document.getElementById(element).style.opacity=0.6;

            // console.log("teraz ma flotowac");
        }else {
            document.getElementById(element).classList.remove("fixed-top");
            document.getElementById(element).style.opacity=1;

        }

    })
}

stickyNavbar("mynavbar");
