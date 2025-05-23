function enviar() {
    div1 = document.querySelector("#contenedor2");
    autenticacion = document.querySelector("#autenticacion").value;
    usuario = document.querySelector("#usuario").value;
    clave = document.querySelector("#clave").value;
    fetch("/autenticacion/validarusuario.php?usuario=" + usuario + "&clave=" + clave, {
        credentials: "same-origin"
    })
        .then (response => response.text())
        .then (data => {div1.innerHTML += data; mostrarUsuario();});
}
function mostrarUsuario() {
    fetch('/autenticacion/usuario_actual.php')
        .then(response => response.text())
        .then(nombre => {
            document.getElementById('nombreUsuario').textContent = nombre ? `Usuario: ${nombre}` : '';
            // Deshabilita los enlaces del menú si no hay usuario
            const menuLinks = document.querySelectorAll('aside ul li a');
            menuLinks.forEach(link => {
                if (!nombre) {
                    link.onclick = function(e) { e.preventDefault(); return false; };
                    link.style.pointerEvents = "none";
                    link.style.opacity = "0.5";
                } else {
                    // Restaurar funcionalidad
                    link.onclick = function() { ver(link.getAttribute('onclick').match(/'(.*?)'/)[1]); };
                    link.style.pointerEvents = "";
                    link.style.opacity = "";
                }
            });
        });
}
// Llama a la función cuando cargue la página principal
window.addEventListener('DOMContentLoaded', mostrarUsuario);
function ver(url) {
    div1 = document.querySelector("#contenedor1");
    fetch (url)
        .then (response => response.text())
        .then (data => {div1.innerHTML = data });
}
function enviardatos(formId, url, divId) {
    let cont = document.querySelector("#" + divId);
    let datos = new FormData(document.getElementById(formId));
    fetch(url, {
        body: datos,
        method: "post"
    })
    .then(response => response.text())
    .then(data => { cont.innerHTML = data; });
}
function enviardatos_d(url, formId = "frm_detalle", tb = "") {
    let form = document.getElementById(formId);
    if (!form) {
        alert("No se encontró el formulario: " + formId);
        return;
    }
    let datos = new FormData(form);
    fetch(url, {
        method: "POST",
        body: datos
    })
    .then(() => {
        // Detecta si es detalles_compra o detalles_venta
        let idField = tb === "detalles_venta" ? "venta_id" : "compra_id";
        let detallesCarpeta = tb === "detalles_venta" ? "detalles_venta" : "detalles_compra";
        let idValue = form.querySelector(`[name="${idField}"]`).value;
        fetch("/" + detallesCarpeta + "/index.php?" + idField + "=" + encodeURIComponent(idValue))
            .then(r => r.text())
            .then(html => {
                document.getElementById("contenedorDetalles").innerHTML = html;
            });
    });
}
function peticiones(accion, url = "/categorias/frm.php", formId = "frm") {
    const form = document.getElementById(formId);
    const formData = new FormData(form);
    formData.set("accion", accion);

    fetch(url, {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById("resultados").innerHTML = data;
    });
}
// Mapeo de tabla principal a carpeta de detalles
const detallesMap = {
    compras: "detalles_compra",
    ventas: "detalles_venta"
};
function editar(id, tb, formId = tb) {
    let datos = new FormData();
    let sql = "select * from " + tb + " where id = " + id;
    datos.append("sql", sql);
    fetch("/" + tb + "/registro.php", {
        body: datos,
        method: "post"
    })
    .then(response => response.json())
    .then(data => { 
        let registro = data;
        let form = document.getElementById(formId);
        if (!form) return;
        // Llenar todos los campos del formulario según el name
        Object.keys(registro).forEach(key => {
            let campo = form.querySelector('[name="' + key + '"]');
            if (campo) {
                campo.value = registro[key];
            }
        });
        const detallesMap = {
            compras: "detalles_compra",
            ventas: "detalles_venta"
        };
        const detallesCarpeta = detallesMap[tb];
        if (detallesCarpeta) {
            let detallesDiv = document.getElementById("contenedorDetalles");
            if (detallesDiv) {
                let param = tb === "compras" ? "id_compra" : "venta_id";
                fetch("/" + detallesCarpeta + "/index.php?" + param + "=" + encodeURIComponent(id))
                    .then(res => res.text())
                    .then(html => {
                        detallesDiv.innerHTML = html;
                        detallesDiv.style.display = "block";
                        const ventaIdInput = document.getElementById('venta_id');
if (ventaIdInput) ventaIdInput.value = id;
                    });
            }
        }
    });         
}
function eliminar(id, url, divId) {
    const cont = document.querySelector("#" + divId);
    fetch(url + "?id=" + id)
        .then(response => response.text())
        .then(data => { cont.innerHTML = data; });
}
function eliminar2(id,tb) {           
    cont3 = document.querySelector("#contenedor3");
    fetch("/"+tb+"/eliminar.php?id="+id+"&tb="+tb)
        .then(response => response.text())
        .then(data => { cont3.innerHTML = data });
}
function eliminarDetalle(id, tb = "detalles_compra") {
    const idField = tb === "detalles_venta" ? "venta_id" : "compra_id";
    fetch("/" + tb + "/eliminar.php?id=" + id + "&tb=" + tb)
        .then(response => response.text())
        .then(() => {
            let idValue = document.getElementById(idField).value;
            fetch("/" + tb + "/index.php?" + idField + "=" + encodeURIComponent(idValue))
                .then(r => r.text())
                .then(html => {
                    document.getElementById("contenedorDetalles").innerHTML = html;
                });
        });
}
function buscarPorColumna(tabla) {
    var columna = document.getElementById('buscar_columna').value;
    var valor = document.getElementById('buscar_valor').value;
    fetch('/' + tabla + '/tabla.php?columna=' + encodeURIComponent(columna) + '&valor=' + encodeURIComponent(valor))
        .then(response => response.text())
        .then(html => {
            document.getElementById('contenedor3').innerHTML = html;
            document.getElementById('buscar_valor').value = valor;
        });
}