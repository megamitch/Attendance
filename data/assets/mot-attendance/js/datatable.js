$(document).ready( function () {
    $('#datatables1').dataTable( {

      "sScrollX": "200%", 
      "bScrollCollapse": true,
      "sScrollY": "420px",
      "sDom": 'T<"clear">lfrtip',
          "oTableTools": {
              "sSwfPath": "../../../../assets/datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
      }, 
      "aoColumns": [
          null,
          null,
          null,
          null,
          {"sType": "currency"},
          null,
          null,
          null,
          null,
          {"sType": "currency"}
      ],
      "sPaginationType":"full_numbers",
      "aaSorting":[[0, "desc"]],
      "bJQueryUI":true
      });
    $('#datatables2').dataTable( {

      "sScrollX": "200%", 
      "bScrollCollapse": true,
      "sScrollY": "420px",
      "sDom": 'T<"clear">lfrtip',
          "oTableTools": {
              "sSwfPath": "../../../../assets/datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
      }, 
      "aoColumns": [
          null,
          null,
          null,
          null,
          null,
          {"sType": "currency"},
          null,
          null,
          null,
          null,
          null,
          {"sType": "currency"},
          {"sType": "currency"}
      ],
      "sPaginationType":"full_numbers",
      "aaSorting":[[0, "desc"]],
      "bJQueryUI":true
      });
    $('#datatables3').dataTable( {

      "sScrollX": "200%", 
      "bScrollCollapse": true,
      "sScrollY": "420px",
      "sDom": 'T<"clear">lfrtip',
          "oTableTools": {
              "sSwfPath": "../../../../assets/datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
      },
      "aoColumns": [
          null,
          null,
          null,
          {"sType": "currency"},
          null,
          null,
          null,
          null,
          {"sType": "currency"}
      ],
      "sPaginationType":"full_numbers",
      "aaSorting":[[0, "desc"]],
      "bJQueryUI":true
    } );
    $('#datatables4').dataTable( {

      "sScrollX": "200%", 
      "bScrollCollapse": true,
      "sScrollY": "420px",
      "sDom": 'T<"clear">lfrtip',
          "oTableTools": {
              "sSwfPath": "../../../../assets/datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
      },
      "aoColumns": [
          null,
          null,
          null,
          {"sType": "currency"},
          null,
          null,
          null,
          null
      ],
      "sPaginationType":"full_numbers",
      "aaSorting":[[0, "desc"]],
      "bJQueryUI":true
    } );
} );