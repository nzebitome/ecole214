$(document).ready(
    function(){
        $('submit').click(function (event) {
            event.preventDefeult()
            console.log('Clicked button')

            var email = $('.email').val()
            var message = $('.message').val()
            var statusElm = $('.status').val()
            statusElm.empty()

            if(email.lenght > 5 && email.includes('@') && email.includes('.')) {
                statusElm.append('<div>email is valid</div>')
            } else {
                statusElm.append('<div>email is not valid</div>')
            }
        })
    }
)