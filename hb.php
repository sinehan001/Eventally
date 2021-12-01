<?php 
session_start();
$_SESSION['event'] = $_POST['event'];
?>
<!Doctype html>
<html>
 <head>
  <title><?php echo $_SESSION['event'] ?> - Registered participants</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery-1.12.0.min.js"></script>
 
<script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script>
 </head>
 <body>
  <div class="container box">
   <h3 align="center"><?php echo $_SESSION['event']; ?> - Registered Participants</h3>
   
      <div style="text-align: center;">
  <h2>Instructions</h2>
  <p>Here,you can print the student details by clicking the below five options.</p>
    <p>Download the details as PDF, EXCEL, CSV files.</p>
    <p>It is possible to download the particular students details by searching which is available on the right side.</p>
  </div>
  <br><br>
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped" style="text-align:center; margin: 0 auto;">
     <thead>
      <tr>
         <th style="text-align:center; margin: 0 auto;">SNO</th>
         <th style="text-align:center; margin: 0 auto;">Name</th>
         <th style="text-align:center; margin: 0 auto;">Year/Branch/Section</th>
         <th style="text-align:center; margin: 0 auto;">College</th>
         <th style="text-align:center; margin: 0 auto;">Number</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
  <br />
  <br />
 </body>
</html>

<script type="text/javascript" language="javascript" >
$(document).ready(function() {
    $('#customer_data').DataTable( {
           "processing" : true,
   "serverSide" : true,
   "ajax" : {
    url:"fetch.php",
    type:"POST"
   },
        dom: 'lBfrtip',
        buttons: [
        'excel','csv',
            {
  extend: 'pdf',
  orientation: 'A4',
  pageSize: 'LEGAL',
  alignment: 'center',
  customize: function (doc) {
    doc.content[1].table.widths = 
        Array(doc.content[1].table.body[0].length + 1).join('*').split('');
  }
},'copy','print'
        ],"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    } );
} );
</script>