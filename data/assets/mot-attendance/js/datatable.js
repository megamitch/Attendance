$(document).ready( function () {
    $('#datatables10').dataTable( {

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
    $('#datatables12').dataTable( {

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
      ],
      "sPaginationType":"full_numbers",
      "aaSorting":[[0, "desc"]],
      "bJQueryUI":true
      });
      $('#datatables14').dataTable( {

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
          null,
          {"sType": "currency"},
          {"sType": "currency"}
      ],
      "sPaginationType":"full_numbers",
      "aaSorting":[[0, "desc"]],
      "bJQueryUI":true
      });
    $('#datatables9').dataTable( {

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
    $('#datatables8').dataTable( {

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
    $('#datatables7').dataTable( {

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
          null
      ],
      "sPaginationType":"full_numbers",
      "aaSorting":[[0, "desc"]],
      "bJQueryUI":true
    } );
} );