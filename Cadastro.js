/* jshint esversion: 6 */

document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registration-form");
    const feedback = document.getElementById("feedback");
    const togglePasswordBtn = document.getElementById("show-password");
    const passwordInput = document.getElementById("senha");

    togglePasswordBtn.addEventListener("click", () => {
        const isPasswordHidden = passwordInput.type === "password";
        passwordInput.type = isPasswordHidden ? "text" : "password";
        togglePasswordBtn.textContent = isPasswordHidden ? "Ocultar" : "Mostrar";
    });

    form.addEventListener("submit", (e) => {
        e.preventDefault();

        feedback.textContent = "Formulário enviado com sucesso!";
        feedback.classList.add("show");

        setTimeout(() => {
            feedback.classList.remove("show");
            feedback.textContent = "";
        }, 3000);
    });
});