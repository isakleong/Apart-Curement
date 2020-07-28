<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Vendor | ApartCurement </title>

  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.3/dt-1.10.19/b-1.5.4/sl-1.2.7/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="Editor-1.8.1/css/editor.dataTables.css"> -->

  <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.3/dt-1.10.19/b-1.5.4/sl-1.2.7/datatables.min.js"></script> -->
  <!-- <script type="text/javascript" src="Editor-1.8.1/js/dataTables.editor.js"></script> -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="admin.css"> -->

 <!--  <script type="text/javascript">
    $(document).ready( function () {
      $('#datatables').DataTable();
    } );
    var editor; // use a global for the submit and return data rendering in the examples

    $(document).ready(function() {
      editor = new $.fn.dataTable.Editor( {
        table: "#datatables",
        fields: [ {
          label: "Nama Apartemen:",
          name: "nama_apartemen"
        }, {
          label: "Alamat:",
          name: "alamat"
        }, {
          label: "Kota:",
          name: "kota"
        }, {
          label: "Email:",
          name: "email"
        }, {
          label: "Nama Contact Person:",
          name: "nama_cp"
        }, {
          label: "Nomor Contact Person:",
          name: "nomor_cp"
        }, {
          label: "Foto:",
          name: "foto"
        },{
          label: "Status:",
          name: "status"
        },{
          label: "Stok:",
          name: "stok"
        },{
          label: "Deskripsi:",
          name: "deskripsi"
        }
        ]
      } );

    // Activate an inline edit on click of a table cell
    $('#datatables').on( 'click', 'tbody td:not(:first-child)', function (e) {
      editor.inline( this );
    } );

    $('#datatables').DataTable( {
      dom: "Bfrtip",
      order: [[ 1, 'asc' ]],
      columns: [
      {
        data: null,
        defaultContent: '',
        className: 'select-checkbox',
        orderable: false
      },
      { data: "nama_apartemen" },
      { data: "alamat" },
      { data: "kota" },
      { data: "email" },
      { data: "nama_cp" },
      { data: "nomor_cp" },
      { data: "foto" },
      { data: "status" },
      { data: "stok" },
      { data: "deskripsi" }
      //{ data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
      ],
      select: {
        style:    'os',
        selector: 'td:first-child'
      },
      buttons: [
      { extend: "create", editor: editor },
      { extend: "edit",   editor: editor },
      { extend: "remove", editor: editor }
      ]
    } );
  } );
</script> -->

<script>
  $(document).ready(function() {
    var t = $('#datatables').DataTable();
    var counter = 1;
    var nama = $('input[name=nama]');
 
    $('#addRow').on( 'click', function () {
        t.row.add( [

            nama,
            counter +'.2',
            counter +'.3',
            counter +'.4',
            counter +'.5',
            counter +'.6',
            counter +'.7',
            counter +'.8',
            counter +'.9',
            counter +'.10',
            counter +'.11',
        ] ).draw( false );
 
        counter++;
    } );
 
    // // Automatically add a first row of data
    // $('#addRow').click();
} );
</script>

</head>
<body>

  <?php
  require('navbarvendor.php');
  ?>

  <div style="margin-left: 185px; margin-top: 30px;">

   <div class="container">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-8" style="margin-left: 10px;"><h2><b>Data Apartemen Vendor</b></h2>
          </div>
          <div class="col-sm-12 ">
            <button style="float: right;" class="btn btn-info" data-toggle="modal" data-target="#news"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Apartemen </button>
          </div>
        </div>
      </div>

      <br>
      
      <div class="table-responsive-md">
        <table id="datatables" class="table table-hover table-bordered table-sm">
          <thead>
            <tr>
              <th scope="col" style="vertical-align:middle;">Nama Apartemen</th>
              <th scope="col" style="vertical-align:middle;">Alamat</th>
              <th scope="col" style="vertical-align:middle;">Kota</th>
              <th scope="col" style="vertical-align:middle;">Email</th>
              <th scope="col" style="vertical-align:middle;">Nama Contact Person</th>
              <th scope="col" style="vertical-align:middle;">No Telp Contact Person</th>
              <th scope="col" style="vertical-align:middle;">Foto</th>
              <th scope="col" style="vertical-align:middle;">Status</th>
              <th scope="col" style="vertical-align:middle;">Stok</th>
              <th scope="col" style="vertical-align:middle;">Deskripsi</th>
              <th scope="col" style="vertical-align:middle;">Edit</th>
            </tr>
          </thead>
          <tbody>
            <tr id="Row1">
              <td style="vertical-align:middle;">Low-Point</td>
              <td style="vertical-align:middle;">Jalan Ahmad Yani No.166, Kota SBY, Jawa Timur 60112</td>
              <td style="vertical-align:middle;">Surabaya</td>
              <td style="vertical-align:middle;">isakleong26@gmailcom</td>
              <td style="vertical-align:middle;">Isak Leong</td>
              <td style="vertical-align:middle;">081138353569</td>
              <td style="vertical-align:middle;"><img src="img/apart/apartmentA1.jpg" alt="Low-Point Apartemen" width="384" height="216"></td>            
              <td style="vertical-align:middle;" id="demo1">Masih ada</td>
              <td style="vertical-align:middle;"> 20</td>
              <td style="vertical-align:middle;">Apartemen ini memiliki sebuah kolam renang berukuran 3m x 7m. Kamar berukuran 5m x 5m dilengkapi dengan 1 AC, 2 Kasur , 1 dapur,2 lemari pakaian,1 kamar mandi, 2 meja,2 kursi,1 TV dan 1 kulkas. </td>
              <td style="vertical-align:middle;">
                <button style="float: right;" class="btn btn-info" data-toggle="modal" data-target="#news"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Edit </button>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr id="Row2">
              <td style="vertical-align:middle;">Middle-Point</td>
              <td style="vertical-align:middle;">Jalan Ahmad Yani No.250, Kota SBY, Jawa Timur 60112</td>
              <td style="vertical-align:middle;">Surabaya</td>
              <td style="vertical-align:middle;">kevinlauw13@gmailcom</td>
              <td style="vertical-align:middle;">Sun Wukong</td>
              <td style="vertical-align:middle;">08113832325</td>
              <td style="vertical-align:middle;"><img src="img/apart/apartmentA2.jpg" alt="Low-Point Apartemen" width="384" height="216"></td>            
              <td style="vertical-align:middle;" id="demo1">Masih ada</td>
              <td style="vertical-align:middle;"> 20</td>
              <td style="vertical-align:middle;">Apartemen ini memiliki kamar berukuran 3m x 3m dilengkapi dengan 1 Kasur berukurn 160cm x 200cm , 1 dapur,1 lemari pakaian,1 kamar mandi, 1 meja,1 kursi dan 1 TV. </td>
              <td style="vertical-align:middle;">
                <button style="float: right;" class="btn btn-info" data-toggle="modal" data-target="#news"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Edit </button>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr id="Row2">
              <td style="vertical-align:middle;">High-Point</td>
              <td style="vertical-align:middle;">Jalan Ahmad Yani No.650, Kota SBY, Jawa Timur 60112</td>
              <td style="vertical-align:middle;">Surabaya</td>
              <td style="vertical-align:middle;">johny@gmailcom</td>
              <td style="vertical-align:middle;">Johny</td>
              <td style="vertical-align:middle;">081138468169</td>
              <td style="vertical-align:middle;"><img src="img/apart/apartmentA3.jpg" alt="Low-Point Apartemen" width="384" height="216"></td>            
              <td style="vertical-align:middle;" id="demo1">Masih ada</td>
              <td style="vertical-align:middle;"> 20</td>
              <td style="vertical-align:middle;">Apartemen ini memiliki sebuah kolam renang berukuran 5m x 10m. Kamar berukuran 7m x 7m dilengkapi dengan 2 Kasur berukuran 160cm x 200cm, 1 dapur,2 lemari pakaian,1 kamar mandi, 2 meja,2 kursi,1 TV, 1 AC, 1 kulkas dan Free Wi-Fi.  </td>
              <td style="vertical-align:middle;">
                <button style="float: right;" class="btn btn-info" data-toggle="modal" data-target="#news"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Edit </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="news" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Add Apartemen </h4>
          <button class="close" data-dismiss="modal"> x </button>
        </div>
        <form method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label> Nama</label>
              <input type="text" class="form-control" name="nama" required="">
            </div>
            <div class="form-group">
              <label> Alamat </label>
              <input type="text" class="form-control" name="alamat">
            </div>
            <div class="form-group">
              <label> Kota</label>
              <input type="text" class="form-control" name="kota" required="">
            </div>
            <div class="form-group">
              <label> Nama Contact Person</label>
              <input type="text" class="form-control" name="nama_cp" required="">
            </div>
            <div class="form-group">
              <label> Nomor Contact Person</label>
              <input type="text" class="form-control" name="nomor_cp" required="">
            </div>
            <div class="form-group">
              <label> Stok</label>
              <input type="text" class="form-control" name="stok" required="">
            </div>
            <div class="form-group">
              <label> Deskripsi</label>
              <textarea class="form-control" name="deskripsi" rows="3" required></textarea>
            </div>
            <div class="form-group">
              <label> Foto Apartemen </label>
              <input type="file" class="form-control" name="gambar" id="gambar" required>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="save" value="Save" id="addRow">
            <button type="reset" class="btn btn-danger"> Reset </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  $(document).ready( function () {
    $('#datatables').DataTable();
  } );
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>