    /* Revisado por IA e por Antonny */
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registration-form");
    const feedback = document.getElementById("feedback");
    const togglePasswordBtn = document.getElementById("show-password");
    const passwordInput = document.getElementById("senha"); 

    togglePasswordBtn.addEventListener("click", () => {
        togglePasswordBtn.style.fontFamily = "'Monocraft', sans-serif"; 
        togglePasswordBtn.style.fontSize = '16px';

        if (passwordInput.type === "password") {
            passwordInput.type = "text"
            togglePasswordBtn.textContent = "Ocultar";
        } else {
            passwordInput.type = "password";
            togglePasswordBtn.textContent = "Mostrar"; 
        }
    });

    form.addEventListener("submit", (e) => {
        e.preventDefault(); 
        feedback.classList.add("show"); 
        setTimeout(() => {
            feedback.classList.remove("show");
        }, 3000);
    });
});
function togglePassword() {
    var passwordField = document.getElementById('senha');
    var passwordToggle = document.getElementById('show-password');
    if (passwordField.type === "password") {
        passwordField.type = "text";
        passwordToggle.innerText = "Ocultar Senha";
    } else {
        passwordField.type = "password";
        passwordToggle.innerText = "Mostrar Senha";
    }
}