$(window).on("scroll", function() {
  if($(window).scrollTop()) {
    $('nav').addClass('black');
  } else {
    $('nav').removeClass('black');
  }
})

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function checkLogin() {
  var username = document.getElementById('usernameL').value;
  var password = document.getElementById('password').value;
  if(username == '' || password == '') {
    window.alert("Fill in all the details properly!");
  }
}

function checkSignUp() {
  var name = document.getElementById('name').value;
  var username = document.getElementById('username').value;
  var email = document.getElementById('email').value;
  var city = document.getElementById('city').value;
  var password = document.getElementById('password').value;
  var reTypePassword = document.getElementById('reTypePassword').value;
  if(name == '' || username == '' || email == '' || city == '' || password == '' || reTypePassword == '') {
    window.alert("Please fill in all the details properly!");
  }
}
