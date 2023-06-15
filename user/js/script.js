let menu = document.querySelector('#bars-icon');
let navbar = document.querySelector('#navbar');
let searchbar = document.querySelector(".search");
menu.onclick = () => {
    menu.classList.toggle('fa-x');
    navbar.classList.toggle('active');
    searchbar.classList.toggle('active');
}

const toTop = document.querySelector(".to-top");
window.addEventListener("scroll", () => {
    if(window.pageYOffset > 150)
        toTop.classList.add("active");
    else
        toTop.classList.remove("active");
});

function sendEmail(){
    Email.send({
      Host : "smtp.gmail.com",
      Username : "tt7249031@gmail.com",
      Password : "33DE160DB3614C87554CA53B3A2E0FB70584",
      To : "frenki.muca@gmail.com",
      From : document.getElementById("email").value,
      Subject : "New Enquiry",
      Body : "Name: " + document.getElementById("name").value
      + "<br> Email: " + document.getElementById("email").value
      + "<br> Message: " + document.getElementById("message").value
    }).then(
      message => alert("Email Sent Succesfully")
    );
  }