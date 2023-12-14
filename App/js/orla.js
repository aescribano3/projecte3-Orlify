import $ from "jquery";

import { jsPDF } from "jspdf";

import html2canvas from "html2canvas";

$('#downloadButton').on('click', function () {
    var content = $('#plantilla')[0];

    html2canvas(content, {
        scale: 0.63
    }).then(function (canvas) {
        var pdf = new jsPDF({
            orientation: 'l',
            unit: 'mm',
            format: 'a4'
        });

        var imgData = canvas.toDataURL('image/png');

        pdf.addImage(imgData, 'PNG', 10, 10);

        pdf.save('orla.pdf');
    });
});