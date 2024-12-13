document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registration-form");
    const feedback = document.getElementById("feedback");
    const togglePasswordBtn = document.getElementById("show-password"); // Botão para mostrar/ocultar a senha
    const passwordInput = document.getElementById("senha"); // Campo de senha

    // Evento para alternar a visibilidade da senha
    togglePasswordBtn.addEventListener("click", () => {
        togglePasswordBtn.style.fontFamily = "'Monocraft', sans-serif"; 
        togglePasswordBtn.style.fontSize = '16px';

        // Verifica o tipo do campo de senha (password ou text)
        if (passwordInput.type === "password") {
            passwordInput.type = "text"; // Torna a senha visível
            togglePasswordBtn.textContent = "Ocultar"; // Muda o texto do botão para "Ocultar"
        } else {
            passwordInput.type = "password"; // Torna a senha invisível
            togglePasswordBtn.textContent = "Mostrar"; // Muda o texto do botão para "Mostrar"
        }
    });

    // Evento para mostrar feedback quando o formulário for enviado
    form.addEventListener("submit", (e) => {
        e.preventDefault(); // Previne o envio padrão do formulário
        feedback.classList.add("show"); // Mostra a mensagem de feedback
        setTimeout(() => {
            feedback.classList.remove("show"); // Esconde a mensagem de feedback após 3 segundos
        }, 3000);
    });
});
