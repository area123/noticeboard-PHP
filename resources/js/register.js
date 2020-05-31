window.onload = function () {
    const removeBtn = document.getElementsByClassName('modal-close');
    removeBtn[0].addEventListener('click', function () {
        document.getElementById('email_check_success')
            .classList.remove('is-active');
    });
    removeBtn[1].addEventListener('click', function () {
        document.getElementById('email_check_failed')
            .classList.remove('is-active');
    });
    document.getElementById('check').addEventListener('click', function () {
        axios.get('/api/check', {
            params: {
                email: document.getElementById('email').value
            }
        }).then(function (response) {
            const data = response.data;
            if (data.success) {
                document.getElementById('email_check_success')
                    .classList.add('is-active');
            } else {
                document.getElementById('email_check_failed')
                    .classList.add('is-active');
            }
        }).catch(function (error) {
            console.log(error);
        })
    })
};