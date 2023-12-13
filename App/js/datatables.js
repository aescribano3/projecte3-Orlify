import $ from 'jquery';
import 'datatables.net';

var userTable = $("#TableUser").DataTable( {
    "paging": false,
    "info": false,
    "language": {
        "sSearch": "Cercar:",
    }
});
$("#TableUser_filter input")
.unbind()
.bind("input", function (e) {
    if (this.value.length >= 3) {
        userTable.search(this.value).draw();
    }
    if (this.value == "") {
        userTable.search("").draw();
    }
});

var grupTable = $("#TableGrup").DataTable( {
    "paging": false,
    "info": false,
    "language": {
        "sSearch": "Cercar:",
    }
});
$("#TableGrup_filter input")
.unbind()
.bind("input", function (e) {
    if (this.value.length >= 3) {
        grupTable.search(this.value).draw();
    }
    if (this.value == "") {
        grupTable.search("").draw();
    }
});

var orlaTable = $("#TableOrla").DataTable( {
    "paging": false,
    "info": false,
    "language": {
        "sSearch": "Cercar:"
    }
});
$("#TableOrla_filter input")
.unbind()
.bind("input", function (e) {
    if (this.value.length >= 3) {
        orlaTable.search(this.value).draw();
    }
    if (this.value == "") {
        orlaTable.search("").draw();
    }
});


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