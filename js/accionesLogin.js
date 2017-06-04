function analizarCosas() {

    var valor = $("#iniciarSesion").attr("content");
// alert(valor);

//    $("#botonLogin").hide();
//    $("#botonRegistrarse").hide();
//    $("#botonUsuario").show;


    if (valor !== "") {
        $("#botonLogin").show();
        $("#botonRegistrarse").show();
        $("#botonUsuario").show();
    } else {
        $("#botonLogin").hide();
        $("#botonRegistrarse").hide();
        $("#botonUsuario").show();
    }

//function Mostrar() {
//    document.getElementById("#botonLogin").style.display = "block";
//    document.getElementById("#botonRegistrarse").style.display = "block";
//    document.getElementById("#botonUsuario").style.display = "none";
//}
//function Ocultar() {
//    document.getElementById("#botonLogin").style.display = "none";
//    document.getElementById("#botonRegistrarse").style.display = "none";
//    document.getElementById("#botonUsuario").style.display = "block";
//
//}
//function Mostrar_Ocultar() {
//    var caja = document.getElementById("#iniciarSesion");
//    if (caja.style.display === "none") {
//        Mostrar();
//    } else {
//        Ocultar();
//    }
}
