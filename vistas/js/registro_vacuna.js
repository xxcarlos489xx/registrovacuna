function validateRegistro(e){
    let enviar = true;
    let form = document.getElementById('registro-vacuna');
    e.preventDefault();
    let date = document.getElementById('date').value;
    let dosis = document.getElementById('dosis').value.trim();
    let lugar = document.getElementById('direccion').value.trim();

    
    if (!date) {
        alert('Ingrese la fecha de registro')
        enviar = false
        return
    }
    if (!dosis) {
        alert('Ingrese el numero de dosis')
        enviar = false
        return
    }
    if (!lugar) {
        alert('Ingrese la direccion')
        enviar = false
        return
    }
    if (enviar) {
        form.submit();
    }
}