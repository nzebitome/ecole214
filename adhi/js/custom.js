//Navbar load

$( "#head" ).load( "partials/header.html" );

//Navbar load

$( "#head1" ).load( "partials/tiny-head.html" );

//Footer

$(".footer").load("partials/footer.html");

// Active links
$(".navbar-link").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
    }
});

var nom = $("#nom").val();
var email = $("#email").val();
var phone = $("#phone").val();
var message = $("#message").val();

// Email.send({
//     Host : "smtp.yourisp.com",
//     Username : "username",
//     Password : "password",
//     To : 'them@website.com',
//     From : "you@isp.com",
//     Subject : "This is the subject",
//     Body : "And this is the body"
// }).then(
//   message => alert(message)
// );