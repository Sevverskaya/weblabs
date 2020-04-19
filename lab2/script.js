function check() {
    let form = document.registration;
    let email = form.email.value;
    let login = form.login.value;
    let password = form.password.value;
    let password2 = form.password2.value;

    if (!/[0-9a-z_-]+@[0-9a-z_-]+\.[a-z]{2,5}/i.test(email)) {
        alert("Пожалуйста, введите корректный электронный адрес.");
        return false;
    } else if (!/^(?=.*[0-9])(?=.*[a-z]).{7,}$/.test(login)) {
        alert("Пожалуйста, обратите внимание, что логин должен содержать латинские буквы и цифры и состоять более чем из 7 символов.");
        return false;
    } else if (!/^(?=.*[0-9])(?=.*[a-z]).{8,}$/.test(password)) {
        alert("Пожалуйста, обратите внимание, что пароль должен содержать латинские буквы и цифры и состоять более чем из 8 символов.");
        return false;
    } else if (!(password == password2)){
        alert("Пожалуйста, обратите внимание, что введённые пароли не совпадают.");
        return false;
    } else {
        return true;
    }

}

function info() {
    window.open("info.html", '_self');
}