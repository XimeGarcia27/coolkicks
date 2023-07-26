$(document).ready(function() {
    $("#btnLogin").click(function(e) {
        e.preventDefault();

        mostrarDato();
    }); //end #btnLogin

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('formulario_login'));

        await fetch('assets/data/login.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json()) //mandar llamar y enviar los datos
            .then(response => {
                //console.log(response.datos);
                if (response.dato == 'ok') {
                    location.href = "./principal.php";
                } else {
                    alert("Datos incorrectos");
                }
            })
            .catch(err => {
                console.log(err);
            });
    } //end mostrarDato
});