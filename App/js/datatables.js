import $ from 'jquery';
import 'datatables.net';

$('#UsersLink').on('click', function () {
    $('#UserTable').show();
    $('#GrupTable').hide();
    $('#OrlaTable').hide();

    $("#TableUser").DataTable();
});

$('#GrupsLink').on('click', function () {
    $('#UserTable').hide();
    $('#GrupTable').show();
    $('#OrlaTable').hide();

    $("#TableGrup").DataTable();
});

$('#OrlesLink').on('click', function () {
    $('#UserTable').hide();
    $('#GrupTable').hide();
    $('#OrlaTable').show();

    $("#TableOrla").DataTable();
});