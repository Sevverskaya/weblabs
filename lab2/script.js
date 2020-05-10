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
    } else if (!(password == password2)) {
        alert("Пожалуйста, обратите внимание, что введённые пароли не совпадают.");
        return false;
    } else {
        window.open("success.php", "_blank");
        return true;
    }

}

function infoOpen() {
    window.open("info.html", "info", "width=800, height=600");
}

function confirmation() {
    let x = confirm("Вы действительно хотите закрыть данное окно?");
    if (x == true) {
        window.close();
    }
}

window.addEventListener("load", function () {
    let video = document.getElementById("myVid");

    document.getElementById("myVid").addEventListener('canplaythrough', (event) => {
        alert("Видеофайл готов к просмотру.");
    }, {once: true});

    document.getElementById("myVid").addEventListener('ended', (event) => {
        let x = prompt("Спасибо за просмотр! Пожалуйста, оцените данное видео от одного до десяти:");
        alert('Вы поставили оценку ' + x);
    }, {once: true});

})

function rand() {
    let welc;
    let welcomes = ["Welcome!", "Willkommen!", "Benvenuto!", "Vítejte!", "Добро пожаловать!"];
    welc = welcomes[Math.floor(Math.random() * welcomes.length)];
    document.getElementById('welcome').innerHTML = welc;
}
setInterval(rand, 2000);


oldAcc = document.getElementById('oldAcc');
oldAcc.onclick = function() {
    let reg = document.getElementsByName("registration");
    let sign = document.getElementsByName("signIn");

    if (sign[0].hasAttribute("hidden")) {
        sign[0].removeAttribute("hidden");
        reg[0].setAttribute("hidden", "");
        oldAcc.innerHTML = "У меня еще нет аккаунта";
    }
    else if (reg[0].hasAttribute("hidden")) {
        reg[0].removeAttribute("hidden");
        sign[0].setAttribute("hidden", "");
        oldAcc.innerHTML = "У меня уже есть аккаунт";
    }

}





