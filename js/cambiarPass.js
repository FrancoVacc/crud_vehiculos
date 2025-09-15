const form = document.getElementById('form');
const password = document.getElementById('password');
const repassword = document.getElementById('repassword');


const compararPassword = (pass, repass) => {
    if (pass == repass) {
        return true;
    }

    return false;
}

form.addEventListener('submit', (e) => {
    e.preventDefault();
    const pass = compararPassword(password.value, repassword.value);

    if (pass == false) {
        console.log('incorrecto');
        repassword.value = "";
        password.value = "";
        password.focus();
        return;
    }

    form.submit();


})