var typed = new Typed(".text",{
    strings: ["CS major", "Technophile","Fast Learner"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true

});

/*toggle icon navbar */
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
menuIcon.onclick = ()=> {
    menuIcon.classList.toggle('uil-times');
    navbar.classList.toggle('active');
}

/*scroll sections active link */
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');
window.onscroll = ()=> {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(links=> {
                links.classList.remove('active');
               document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
               
            })
        };
    });
    /*sticky navbar */
    let header = document.querySelector('header');
header.classList.toggle('sticky', window.scrollY >100);
/*remove toggle icon  */
menuIcon.classList.remove('uil-times');
navbar.classList.remove('active');
}


function sendMail(){
    var params = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        subject : document.getElementById("subject").value,
        message : document.getElementById("Message").value,
    }

    emailjs.send("service_qfh2u3c", "template_gd2m1xt", params, "7kocMkrzuyo0QKadM").then(alert("Email Sent!!"))
}