document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("registration-form");
    var feedback = document.getElementById("feedback");
    var togglePasswordBtn = document.getElementById("show-password");
    var passwordInput = document.getElementById("senha");

    togglePasswordBtn.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            togglePasswordBtn.textContent = "Ocultar Senha";
        } else {
            passwordInput.type = "password";
            togglePasswordBtn.textContent = "Mostrar Senha";
        }
    });

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        feedback.textContent = "Formulário enviado com sucesso!";
        feedback.classList.remove("hidden");
        feedback.classList.add("show");

        setTimeout(function () {
            feedback.classList.remove("show");
            feedback.classList.add("hidden");
        }, 3000);
    });
});
