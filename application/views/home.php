<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body>
<div>
  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url()?>assets/index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
</nav>



  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Daftar Peserta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Peserta</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="col-md-6 float-sm-left">
                  <h3 class="card-title">Daftar Peserta</h3>
                </div>
                <div class="col-md-6 float-sm-right">
                  <button type="button" data-toggle="modal" data-target="#modal-lg" class="btn btn-block col-md-3 float-sm-right bg-gradient-danger">Tambah Peserta</button>
                </div>
              </div>
          
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Departemen</th>
                    <th>Berat</th>
                    <th>W1</th>
                    <th>W2</th>
                    <th>W3</th>
                    <th>W4</th>
                    <th>W5</th>
                    <th>W6</th>
                    <th>W7</th>
                    <th>W8</th>
                    <th>W9</th>
                    <th>W10</th>
                    <th>W11</th>
                    <th>W12</th>
                    <th>W13</th>
                    <th>W14</th>
                    <th>W15</th>
                    <th>W16</th>
                    <th>W17</th>
                    <th>W18</th>
                    <th>W19</th>
                    <th>W20</th>
                    <th>W21</th>
                    <th>W22</th>
                    <th>W23</th>
                    <th>W24</th>
                    <th>W25</th>
                    <th>W26</th>
                    <th>W27</th>
                    <th>W28</th>
                    <th>W29</th>
                    <th>W30</th>
                    <th>W31</th>
                    <th>W32</th>
                    <th>W33</th>
                    <th>W34</th>
                    <th>W35</th>
                    <th>W36</th>
                    <th>W37</th>
                    <th>W38</th>
                    <th>W39</th>
                    <th>W40</th>
                    <th>Star</th>
                    <th>Poin</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($peserta as $row2) {?>
                  <tr class="text-center">
                    <td><?=$no++?></td>
                    <td><?=$row2['nama']?></td>
                    <td><?=$row2['nama_dept']?></td>
                    <td><?=$row2['berat']?></td>
                    <td><?=$row2['minggu_1']?></td>
                    <td><?=$row2['minggu_2']?></td>
                    <td><?=$row2['minggu_3']?></td>
                    <td><?=$row2['minggu_4']?></td>
                    <td><?=$row2['minggu_5']?></td>
                    <td><?=$row2['minggu_6']?></td>
                    <td><?=$row2['minggu_7']?></td>
                    <td><?=$row2['minggu_8']?></td>
                    <td><?=$row2['minggu_9']?></td>
                    <td><?=$row2['minggu_10']?></td>
                    <td><?=$row2['minggu_11']?></td>
                    <td><?=$row2['minggu_12']?></td>
                    <td><?=$row2['minggu_13']?></td>
                    <td><?=$row2['minggu_14']?></td>
                    <td><?=$row2['minggu_15']?></td>
                    <td><?=$row2['minggu_16']?></td>
                    <td><?=$row2['minggu_17']?></td>
                    <td><?=$row2['minggu_18']?></td>
                    <td><?=$row2['minggu_19']?></td>
                    <td><?=$row2['minggu_20']?></td>
                    <td><?=$row2['minggu_21']?></td>
                    <td><?=$row2['minggu_22']?></td>
                    <td><?=$row2['minggu_23']?></td>
                    <td><?=$row2['minggu_24']?></td>
                    <td><?=$row2['minggu_25']?></td>
                    <td><?=$row2['minggu_26']?></td>
                    <td><?=$row2['minggu_27']?></td>
                    <td><?=$row2['minggu_28']?></td>
                    <td><?=$row2['minggu_29']?></td>
                    <td><?=$row2['minggu_30']?></td>
                    <td><?=$row2['minggu_31']?></td>
                    <td><?=$row2['minggu_32']?></td>
                    <td><?=$row2['minggu_33']?></td>
                    <td><?=$row2['minggu_34']?></td>
                    <td><?=$row2['minggu_35']?></td>
                    <td><?=$row2['minggu_36']?></td>
                    <td><?=$row2['minggu_37']?></td>
                    <td><?=$row2['minggu_38']?></td>
                    <td><?=$row2['minggu_39']?></td>
                    <td><?=$row2['minggu_40']?></td>
                    <td><?=$row2['bintang']?></td>
                    <td><?=$row2['poin']?></td>
                    <td><a href="javascript:void(0)" onclick="edit_data(<?=$row2['id_peserta']?>)" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
								        <a href="javascript:void(0)" onclick="delete_data(<?=$row2['id_peserta']?>)" class="btn btn-sm btn-primary ml-1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></a>
						        </td>
                  </tr>
                 <?php } ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Peserta</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url()?>home/addData" enctype="multipart/form-data" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label class="col-form-label" for="inputWarning">Nama Peserta</label>
            <input type="text" class="form-control is-warning" id="nama" name="nama" placeholder="Enter ...">
          </div>
          <div class="form-group">
            <label class="col-form-label" for="inputWarning">Departemen</label>
            <select name="dept" id="dept"  class="form-control is-warning">
              <option value="">Pilih Dept</option>
              <?php 
                foreach ($dep as $row){
                  echo'
                  <option value="'.$row['id_dept'].'">'.$row['nama_dept'].'</option>
                  ';
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label class="col-form-label" for="inputWarning">Berat</label>
            <input type="text" class="form-control is-warning" id="berat" name="berat" placeholder="Enter ...">
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" value="simpan" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="edit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Peserta</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url()?>home/updateData" enctype="multipart/form-data" method="POST">
        <input name="id_peserta" id="idnya" hidden/>
        <div class="modal-body">
          <div class="form-group">
            <label class="col-form-label" for="inputWarning">Nama Peserta</label>
            <input type="text" class="form-control is-warning" id="namanya" name="namanya" placeholder="Enter ...">
          </div>
          <div class="form-group">
            <label class="col-form-label" for="inputWarning">Minggu Ke-</label>
            <select name="minggu" id="minggu" class="form-control is-warning">
              <option value="">Pilih waktu</option>
            </select>
          </div>
          <div class="form-group">
            <label class="col-form-label" for="inputWarning">Berat</label>
            <input type="text" class="form-control is-warning" name="volum" placeholder="Enter ...">
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" value="simpan" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  function edit_data(id_number) {
				$.ajax({
					url: '<?php echo base_url() ?>home/ajax_edit/'+id_number,
					type: "POST",
					dataType: "JSON",
					cache: false,
					success: function(data){
						console.log(data.minggu[0]);
						$('#idnya').val(data.id_peserta);
						$('#namanya').val(data.nama);
            $('#minggu').html(data.minggu);
						$('#edit').modal({
							"backdrop"  : "static",
							"keyboard"  : true,
							"show"      : true 
						});
				
					},
				}).fail(function(response){})
			}	
</script>
</body>
</html>
