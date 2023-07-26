$(document).ready(function() {
    $("#btnComentarios").click(function(e) {
        e.preventDefault();
        guardarComentario();
    }); //end #btnComentarios

    async function guardarComentario() {
        const datos = new FormData(document.getElementById('formulario_contacto'));

        await fetch('assets/data/contacto.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json()) //mandar llamar y enviar los datos
            .then(response => {
                if (response.dato == 'ok') {
                    location.href = "./contacto.html";
                    alert("Mensaje enviado correctamente");
                } else {
                    alert("Datos no válidos");
                }
            })
            .catch(err => {
                console.log(err);
            });
    } //end guardarComentario
});