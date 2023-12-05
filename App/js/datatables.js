import $ from 'jquery';
import 'datatables.net';

$("#TableUser").DataTable( {
    "paging": false,
    "info": false,
    "language": {
        "sSearch": "Cercar:",
        "lengthMenu": "Mostrar _MENU_ lineas per pagina",
        "zeroRecords": "No s'ha trobat cap resultat",
        "info": "Pagina _PAGE_ de _PAGES_",
        "infoEmpty": "No hi ha registres disponibles",
        "infoFiltered": "(filtrat d'un total de _MAX_ total registres)",
        'paginate': {
            'previous': 'Anterior',
            'next': 'Seguent'
    }
}} );

$("#TableGrup").DataTable( {
    "paging": false,
    "info": false,
    "language": {
        "sSearch": "Cercar:",
        "lengthMenu": "Mostrar _MENU_ lineas per pagina",
        "zeroRecords": "No s'ha trobat cap resultat",
        "info": "Pagina _PAGE_ de _PAGES_",
        "infoEmpty": "No hi ha registres disponibles",
        "infoFiltered": "(filtrat d'un total de _MAX_ total registres)",
        'paginate': {
            'previous': 'Anterior',
            'next': 'Seguent'
    }
}} );

$("#TableOrla").DataTable( {
    "paging": false,
    "info": false,
    "language": {
        "sSearch": "Cercar:",
        "lengthMenu": "Mostrar _MENU_ lineas per pagina",
        "zeroRecords": "No s'ha trobat cap resultat",
        "info": "Pagina _PAGE_ de _PAGES_",
        "infoEmpty": "No hi ha registres disponibles",
        "infoFiltered": "(filtrat d'un total de _MAX_ total registres)",
        'paginate': {
            'previous': 'Anterior',
            'next': 'Seguent',
    }
}} );


$('#UsersLink').on('click', function () {
    $('#UserTable').show();
    $('#GrupTable').hide();
    $('#OrlaTable').hide();
});

$('#GrupsLink').on('click', function () {
    $('#UserTable').hide();
    $('#GrupTable').show();
    $('#OrlaTable').hide();
});

$('#OrlesLink').on('click', function () {
    $('#UserTable').hide();
    $('#GrupTable').hide();
    $('#OrlaTable').show();
});