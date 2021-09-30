function validar(e){
    let enviar = true;
    let form = document.getElementById('login');
    e.preventDefault();
    let doc = document.getElementById('doc').value.trim();
    let pass = document.getElementById('pass').value.trim();
    
    if (!doc) {
        alert('Ingrese nro de documento')
        enviar = false
        return
    }
    if (!pass) {
        alert('Ingrese la contraseña')
        enviar = false
        return
    }
    if (enviar) {
        form.submit();
    }
}