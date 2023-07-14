window.onload = function() {
    validatePassword('password', 'confirm-password');
}

function validatePassword(idPass1, idPass2) {
    const passwordInput = document.getElementById(idPass1);
    const confirmPasswordInput = document.getElementById(idPass2);

    // Adiciona um evento de escuta ao campo de confirmação de senha
    confirmPasswordInput.addEventListener('input', function() {
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        if (password !== confirmPassword) {
            confirmPasswordInput.setCustomValidity('As senhas não correspondem');
        } else if (password.length > 6) {
            confirmPasswordInput.setCustomValidity('A senha deve ter no máximo 6 dígitos');
        } else {
            confirmPasswordInput.setCustomValidity('');
        }
    });
}
