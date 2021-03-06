require('./bootstrap');
if (document.getElementById('btn-show')) {
    document.getElementById('btn-show').onclick = function(event) {
        const element = document.getElementById('show-items');
        element.classList.toggle('d-none');
    };
}


$("#formCompany").submit(function(e) {
    e.preventDefault();
    var form = $(this);
    $.ajax({
        type: "POST",
        url: '/company',
        data: form.serialize(),
        success: function()
        {
            location.reload()
        },
        error: function (data) {
            const element = document.getElementById('request-result');
            element.innerHTML = '';
            element.classList.remove('d-none');
            const errors = data.responseJSON.errors;
            if (data.responseJSON.message.match('SQLSTATE')){
                element.innerHTML = 'Неверный id главного директора, попробуйте число от 1 до 5'
            }
            for(err in errors) {
                element.innerHTML += errors[err][0]+'<br>';
            }

        }

    });
});
if (document.getElementById('logout')){
    document.getElementById('logout').onclick=function (event) {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    };
}

