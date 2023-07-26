$(document).ready(function() {
    $("#btnRegistrar").click(function(e) {
        e.preventDefault();
        registrarUsuario();
    }); //end #btnRegistrar

    async function registrarUsuario() {
        const datos = new FormData(document.getElementById('registrar'));

        await fetch('assets/data/registro.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json()) //mandar llamar y enviar los datos
            .then(response => {
                if (response.dato == 'ok') {
                    location.href = "./index.html";
                    alert("Te has registrado correctamente");
                } else {
                    alert("Datos no válidos");
                }
            })
            .catch(err => {
                console.log(err);
            });
    } //end registrarUsuario
});