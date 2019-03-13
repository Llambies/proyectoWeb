function iniciarModal() {
    document.getElementById('fondoModal').style.display = "flex";
}

function ocultarModal() {
    document.getElementById('fondoModal').style.display = "none";

}

var modal = document.getElementById('fondoModal');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}