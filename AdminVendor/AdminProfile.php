<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Vendor | ApartCurement </title>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.3/dt-1.10.19/b-1.5.4/sl-1.2.7/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="Editor-1.8.1/css/editor.dataTables.css">

  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.3/dt-1.10.19/b-1.5.4/sl-1.2.7/datatables.min.js"></script>
  <script type="text/javascript" src="Editor-1.8.1/js/dataTables.editor.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="admin.css">
  
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>

  <script type="text/javascript">
    $(document).ready( function () {
      $('#datatables').DataTable();
    } );

    var myTable = $('#datatables').DataTable();

    $('#myTable').on( 'click', 'tbody td', function () {
      myTable.cell( this ).edit();
    } );

    $('#myTable').on( 'click', 'tbody tr', function () {
      myTable.row( this ).edit();
    } );

    $(document).ready(function() {
      var t = $('datatables').DataTable();
      var counter = 1;

      $('#addRow').on( 'click', function () {
        t.row.add( [
          counter +'.1',
          counter +'.2',
          counter +'.3',
          counter +'.4',
          counter +'.5'
          ] ).draw( false );

        counter++;
      } );

    // Automatically add a first row of data
    $('#addRow').click();
  } );
</script>

</head>
<body>

  <?php
  require('navbarvendor.php');
  ?>

  <div style="margin-left: 205px; margin-top: 30px;">
    <h1>Lancar Terus Company</h1>
  </div>
</body>
</html>
