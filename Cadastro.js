document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registration-form");
    const feedback = document.getElementById("feedback");
    const togglePasswordBtn = document.getElementById("toggle-password");
    const passwordInput = document.getElementById("senha");

        togglePasswordBtn.addEventListener("click", () => {
 
            togglePasswordBtn.style.fontFamily = "'Monocraft', sans-serif"; 
            togglePasswordBtn.style.fontSize = '16px';
        
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
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
window.onload = function() {
    if (localStorage.getItem('nome')) {
      document.getElementById('nome').value = localStorage.getItem('nome');
    }
    if (localStorage.getItem('email')) {
      document.getElementById('email').value = localStorage.getItem('email');
    }
  };