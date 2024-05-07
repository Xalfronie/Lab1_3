document.getElementById('password').addEventListener('input', function() {
    const value = this.value;
    const minChars = value.length >= 8;
    const upper = /[A-Z]/.test(value);
    const lower = /[a-z]/.test(value);
    const number = /\d/.test(value);
    const special = /[@$!%*?&]/.test(value);

    document.getElementById('minChars').style.color = minChars ? 'green' : '';
    document.getElementById('upper').style.color = upper ? 'green' : '';
    document.getElementById('lower').style.color = lower ? 'green' : '';
    document.getElementById('number').style.color = number ? 'green' : '';
    document.getElementById('special').style.color = special ? 'green' : '';
});

document.getElementById('btnRegistro').addEventListener('click', function() {
    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const password2 = document.getElementById('password2').value;

    if (nombre === '' || email === '' || password === '' || password2 === '') {
        alert('Todos los campos son obligatorios');
        return;
    }

    if (password !== password2) {
        alert('Las contraseñas no coinciden');
        return;
    }

    if (password.length < 8) {
        alert('La contraseña debe tener al menos 8 caracteres');
        return;
    }

    if (!/[A-Z]/.test(password)) {
        alert('La contraseña debe tener al menos una letra mayúscula');
        return;
    }

    if (!/[a-z]/.test(password)) {
        alert('La contraseña debe tener al menos una letra minúscula');
        return;
    }

    if (!/\d/.test(password)) {
        alert('La contraseña debe tener al menos un número');
        return;
    }

    if (!/[@$!%*?&]/.test(password)) {
        alert('La contraseña debe tener al menos un caracter especial');
        return;
    }

    alert('Registro exitoso');
});