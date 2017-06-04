$(function() {

    $.post('Pais.php').done(function(respuesta) {
        $('#paisCurso').html(respuesta);
    });

    $('#paisCurso').change(function() {
        var el_idioma = $(this).val();
        $.post('Idioma.php', {idiomas: el_idioma}).done(function(respuesta) {
            $('#idiomaCurso').html(respuesta);
        });
        var la_ciudad = $(this).val();
        $.post('Ciudad.php', {ciudades: la_ciudad}).done(function(respuesta) {
            $('#ciudadCurso').html(respuesta);
        });
    });

    $('#idiomaCurso').change(function() {
        var pais = $(this).children('option:selected').html();
    });

    $('#ciudadCurso').change(function() {
        var ciudad = $(this).children('option:selected').html();
    });
})
