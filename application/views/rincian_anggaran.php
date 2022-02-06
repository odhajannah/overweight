<?php $this->load->view('master/header') ?>
<!--begin::Body-->
<style>
	.fixed {
		position: fixed;
		bottom: 0;
		left: 0;
	}

	.fixed2 {
		position: fixed;
		bottom: 0;
		right: 0;
	}
</style>

<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
		<!--begin::Logo-->
		<a href="index.html">
			<img alt="Logo" src="<?= base_url() ?>assets/media/logos/logo-letter-1.png" class="logo-default max-h-30px" />
		</a>
		<!--end::Logo-->
		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
				<span></span>
			</button>
			<button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
				<span class="svg-icon svg-icon-xl">
					<!--begin::Svg Icon | path:<?= base_url() ?>assets/media/svg/icons/General/User.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header Mobile-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<?php $this->load->view('master/navbar') ?>
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<?php $this->load->view('master/sidebar') ?>
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Card-->

							<div class="card card-custom gutter-b">
								<div class="card-header flex-wrap py-3">
									<div class="card-title">
										<h3 class="card-label">Main Data
											<span class="d-block text-muted pt-2 font-size-sm">sorting &amp; pagination remote datasource</span>
										</h3>
									</div>
									<div class="card-toolbar">
										<!--begin::Dropdown-->
										<div class="dropdown dropdown-inline mr-2">
											<a href="<?=base_url('rincian_anggaran/export')?>" type="button" class="btn btn-light-primary font-weight-bolder">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:<?= base_url() ?>assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>Export</a>
										</div>
										<!--end::Dropdown-->
										<!--begin::Button-->
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:<?= base_url() ?>assets/media/svg/icons/Design/Flatten.svg-->
												<span class="svg-icon svg-icon-default svg-icon-2x">
													<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo5\dist/../src/media/svg/icons\Code\Plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
												<!--end::Svg Icon-->
											</span>Tambah Data</a>
										</button>

										<!--end::Button-->
									</div>
								</div><br>
								
								<div class="card-body table-responsive">
									<!--begin: Datatable-->
									<table class="table table-bordered table-checkable" id="kt_datatable">
										<thead class="table-primary">
											<tr>
												<th>Kode</th>
												<th>Nama</th>
												<th>#</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach ($main_account as $rowMain) { ?>
											<tr style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;">
												<td colspan="20"><b><?= "{$rowMain['id_number']} - {$rowMain['nama']}" ?></b></td>
											</tr>
											<?php foreach ($rowMain['submain'] as $rowSubmain) { ?>
												<tr style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;">
													<td style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;" style="border-left: solid 2px black;"><b><?= "{$rowSubmain['id_subnumber']}" ?></b></td>
													<td style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;" style="border-left: solid 2px black;"><b><?= "{$rowSubmain['nama_submain']}" ?></b></td>
												
													<td style="border-right: solid 2px black;">
														<a href="javascript:void(0)" onclick="detail_data(<?= $rowSubmain['id_submain'] ?>)" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="far fa-eye"></i></a>
															</td>
												</tr>
												<?php } ?>
											<!-- <tr style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;">
												<td style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;" colspan="19">Total</td>
												<td style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;" colspan="2"><?//= $nilai ?></td>
											</tr> -->
											

										<?php } ?>
										</tbody>
									</table>
									<!--end: Datatable-->
								</div>
							</div>
							<!--end::Card-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Entry-->
				</div>
				<!--end::Content-->
				<?php $this->load->view('master/footer') ?>
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->

	<div class="modal fade" id="tambah" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalSizeLg">Form input</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<form action="<?= base_url() ?>rincian_anggaran/addData" enctype="multipart/form-data" method="POST">
					<input type="text" id="tipe" name="tipe" hidden>
					<input type="text" id="id_rincian" name="id_rincian" hidden>
					<div class="modal-body ">
							<div class="form-group row">
								<div class="col-lg-6">
									<label for="exampleInputPassword1">Main Code
										<span class="text-danger">*</span></label>
									<select class="form-control main" name="main" id="main">
										<option value="">Pilih Main Code</option>
										<?php foreach ($main as $main) { ?>
											<option value="<?= $main['id_main'] ?>"><?= $main['id_number'] ?>( <?= $main['nama'] ?> )</option>
										<?php } ?>
									</select>
								</div>
								<div class="col-lg-6">
									<label for="exampleInputPassword1">Sub Main Account
										<span class="text-danger">*</span></label>
									<select class="form-control submain " name="name_jenis" id="name_jenis">
										<option value="">Pilih Sub Main Account</option>
									</select>
								</div>
							</div>
							
							<div class="form-group row">
								<div class="col-lg-4">
									<label for="exampleInputPassword1">Uraian
										<span class="text-danger">*</span></label>
									<textarea type="text" class="form-control" name="uraian" id="uraian" rows="3" placeholder="Uraian"></textarea>
								</div>
								<div class="col-lg-4">
									<label for="exampleInputPassword1">Pemicu Biaya
										<span class="text-danger">*</span></label>
									<textarea type="text" class="form-control" name="pemicu_biaya" id="pemicu_biaya" rows="3" placeholder="Pemicu Biaya"></textarea>
								
								</div>
								<div class="col-lg-4">
									<label for="exampleInputPassword1">Keterangan
										<span class="text-danger">*</span></label>
									<textarea type="text" class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Keterangan"></textarea>
								</div>
							</div>
							<div class="form-group  row">
								<div class="col-lg-4">
									<label for="exampleInputPassword1">Quantity
										<span class="text-danger">*</span></label>
									<input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" onchange="mungkin(this.value)" value="" />
								</div>
								<div class="col-lg-4">
									<label for="exampleInputPassword1">Harga Satuan
										<span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="Harga Satuan" onchange="parah(this.value)" value="" />
								</div>
								<div class="col-lg-4">
									<label for="exampleInputPassword1">Jumlah
										<span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Nama" />
								</div>
							</div>
							<script>
								function parah(val) {
									var parah = val;
									var mungkin = document.getElementById('quantity').value;
									var nilai = parah * mungkin;
									$('#jumlah').val(nilai);
								}

								function mungkin(val) {
									var mungkin = val;
									var parah = document.getElementById('harga_satuan').value;
									var nilai = parah * mungkin;
									$('#jumlah').val(nilai);
								}
							</script>
							
							
						
							<div class="form-group row">
								<div class="col-lg-3">
									<label for="exampleInputPassword1">Januari</label>
									<input type="text" class="form-control" id="jan" name="jan" placeholder="Januari" />
								</div>
								<div class="col-lg-3">
									<label for="exampleInputPassword1">Februari</label>
									<input type="text" class="form-control" id="feb" name="feb" placeholder="Februari" />
								</div>
								<div class="col-lg-3">
									<label for="exampleInputPassword1">Maret</label>
									<input type="text" class="form-control" id="mar" name="mar" placeholder="Maret" />
								</div>
								<div class="col-lg-3">
									<label for="exampleInputPassword1">April</label>
									<input type="text" class="form-control" id="apr" name="apr" placeholder="April" />
								</div>
							</div>
						<div class="form-group row">
							<div class="col-lg-3">
								<label for="exampleInputPassword1">Mei</label>
								<input type="text" class="form-control" id="mei" name="mei" placeholder="Mei" />
							</div>
							<div class="col-lg-3">
								<label for="exampleInputPassword1">Juni</label>
								<input type="text" class="form-control" id="jun" name="jun" placeholder="Juni" />
							</div>
							<div class="col-lg-3">
								<label for="exampleInputPassword1">Juli</label>
								<input type="text" class="form-control" id="jul" name="jul" placeholder="Juli" />
							</div>
							<div class="col-lg-3">
								<label for="exampleInputPassword1">Agustus</label>
								<input type="text" class="form-control" id="agu" name="agu" placeholder="Agustus" />
							</div>
						</div>
						<div class="form-group row">
							<div class="col-lg-3">
								<label for="exampleInputPassword1">September</label>
								<input type="text" class="form-control" id="sep" name="sep" placeholder="September" />
							</div>
							<div class="col-lg-3">
								<label for="exampleInputPassword1">Oktober</label>
								<input type="text" class="form-control" id="okt" name="okt" placeholder="Oktober" />
							</div>
							<div class="col-lg-3">
								<label for="exampleInputPassword1">November</label>
								<input type="text" class="form-control" id="nov" name="nov" placeholder="November" />
							</div>
							<div class="col-lg-3">
								<label for="exampleInputPassword1">Desember</label>
								<input type="text" class="form-control" id="des" name="des" placeholder="Desember" />
							</div>
						</div>
						<input type="text" name="tahun" id="tahun" value="<?= $tahunnya ?>" hidden>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
						<button type="submit" name="submit" value="submit" class="btn btn-primary font-weight-bold">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="detail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalSizeLg">Detail </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body table-responsive" >
					<table class="table table-bordered table-checkable">
						<thead style="background-color: #5F9EA0;">
							<tr style="border: solid 2px black;">
								<th style="border: solid 2px black;">Uraian</th>
								<th style="border: solid 2px black;">Pemicu Biaya</th>
								<th style="border: solid 2px black;">Quantity</th>
								<th style="border: solid 2px black;">Harga Satuan</th>
								<th style="border: solid 2px black;">Jumlah</th>
								<th style="border: solid 2px black;">Keterangan</th>
								<th style="border: solid 2px black;">Januari</th>
								<th style="border: solid 2px black;">Februari</th>
								<th style="border: solid 2px black;">Maret</th>
								<th style="border: solid 2px black;">April</th>
								<th style="border: solid 2px black;">Mei</th>
								<th style="border: solid 2px black;">Juni</th>
								<th style="border: solid 2px black;">Juli</th>
								<th style="border: solid 2px black;">Agustus</th>
								<th style="border: solid 2px black;">September</th>
								<th style="border: solid 2px black;">Oktober</th>
								<th style="border: solid 2px black;">November</th>
								<th style="border: solid 2px black;">Desember</th>
								<th style="border: solid 2px black;">Total</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody id="isinya">

						</tbody>
						<tfoot id="totalAkhir">

						</tfoot>

					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modaldeleteshow" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalSizeLg">Form Main Account</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body">
					<p>Apakah Anda Yakin Ingin Menghapus Data ini?</p>
					<div class="modal-footer">
						<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
						<button type="button" id="deletedata" data-delete="" class="btn btn-primary font-weight-bold">Delete</button>
					</div>
				</div>
			</div>
		</div>

		<?php $this->load->view('master/script') ?>
</body>
<!--end::Body-->
<!-- <script type="text/javascript">
	$(document).ready(function() {
	    $('#tabelData').DataTable();
	    function filterData () {
		    $('#tabelData').DataTable().search(
		        $('#idkab').val()
		    	).draw();
		}
		$('#idkab').on('change', function () {
	        filterData();
	    });
	});
</script> -->
<script type="text/javascript">
	"use strict";
	
	function detail_data(id_sub) {
		console.log(id_sub);
		$('#detail').modal({
			"backdrop": "static",
			"keyboard": true,
			"show": true,
		});
		$.ajax({
			url: '<?php echo base_url() ?>rincian_anggaran/ajax_detail/' + id_sub,
			type: "POST",
			dataType: "JSON",
			cache: false,
			success: function(data) {
				console.log(data);
				var html = '';
					var i;
					var sum = 0;
					var nilai = 0;
					for (i = 0; i < data.length; i++) {
						sum = parseFloat(data[i].jan - data[i].janu) + parseFloat(data[i].feb - data[i].febr) + parseFloat(data[i].mar - data[i].mare) + parseFloat(data[i].apr - data[i].apri) + parseFloat(data[i].mei - data[i].meii) + parseFloat(data[i].jun - data[i].juni) + parseFloat(data[i].jul - data[i].juli) + parseFloat(data[i].agu - data[i].agus) + parseFloat(data[i].sep - data[i].sept) + parseFloat(data[i].okt - - data[i].okto) + parseFloat(data[i].nov - data[i].nove) + parseFloat(data[i].des - data[i].dese);
						nilai += sum;
					
						html += '<tr style="border: solid 2px black;">'+
							'<td style="border: solid 2px black;">'+ data[i].uraian +'</td>'+
							'<td style="border: solid 2px black;">'+ data[i].pemicu_biaya+'</td>'+
							'<td style="border: solid 2px black;">'+ data[i].quantity+'</td>'+
							'<td style="border: solid 2px black;">'+ data[i].harga_satuan+'</td>'+
							'<td style="border: solid 2px black;">'+ data[i].jumlah+'</td>'+
							'<td style="border: solid 2px black;">'+ data[i].keterangan+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].jan - data[i].janu).toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].feb - data[i].febr).toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].mar - data[i].mare).toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].apr - data[i].apri).toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].mei - data[i].meii).toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].jun - data[i].juni).toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].jul - data[i].juli) .toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].agu - data[i].agus).toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].sep - data[i].sept).toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].okt - data[i].okto).toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].nov - data[i].nove).toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ (data[i].des - data[i].dese).toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td>'+
							'<td style="border: solid 2px black;">Rp. '+ sum +'</td>'+
							'<td style="border: solid 2px black;">'+
								'<a href="javascript:void(0)" onclick="edit_data('+data[i].id_rincian+')" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a><a href="javascript:void(0)" onclick="delete_data('+data[i].id_rincian+')" class="btn btn-sm btn-primary ml-1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></a>'+				
							'</td></tr>'; 
					}
					var a = '<tr style="border: solid 2px black;"><td colspan="18" style="border: solid 2px black;">Total</td><td>Rp. '+nilai.toString().split('').reverse().join('').match(/\d{1,3}/g).join('.').split('').reverse().join('')+'</td></tr>'
					
					$('#isinya').html(html);
					$('#totalAkhir').html(a);
			},
		}).fail(function(response) {})
	}

	function edit_data(id_rincian) {
		console.log(id_rincian);
		$('#detail').modal('hide')
		$.ajax({
			url: '<?php echo base_url() ?>rincian_anggaran/ajax_edit/'+id_rincian,
			type: "POST",
			dataType: "JSON",
			cache: false,
			success: function(data) {
				$('#id_rincian').val(data.id_rincian);
				$('#main').val(data.id_main);
				$('#name_jenis').val(data.id_submain);
				$('#uraian').val(data.uraian);
				$('#pemicu_biaya').val(data.pemicu_biaya);
				$('#quantity').val(data.quantity);
				$('#harga_satuan').val(data.harga_satuan);
				$('#jumlah').val(data.jumlah);
				$('#keterangan').val(data.keterangan);
				$('#jan').val(data.jan);
				$('#feb').val(data.feb);
				$('#mar').val(data.mar);
				$('#apr').val(data.apr);
				$('#mei').val(data.mei);
				$('#jun').val(data.jun);
				$('#jul').val(data.jul);
				$('#agu').val(data.agu);
				$('#sep').val(data.sep);
				$('#okt').val(data.okt);
				$('#nov').val(data.nov);
				$('#des').val(data.des);
				// $('#tahun').val(data.tahun);
				$('#tipe').val('update');

				$('#tambah').modal({
					"backdrop": "static",
					"keyboard": true,
					"show": true
				});
				
			},
		}).fail(function(response) {})
	}

	function delete_data(id) {
		// $('#modaldeleteshow').modal("show");
		console.log(id);
		$('#modaldeleteshow').modal({
			"backdrop": "static",
			"keyboard": true,
			"show": true
		});
		$("#deletedata").attr("data-delete", id)

	}

	$("#deletedata").click(function() {
		var stat5 = $("#deletedata").attr("data-delete")
		$(location).attr('href', '<?php echo base_url('rincian_anggaran/ajax_delete') ?>/' + stat5 + '')
		toastr["warning"]("Sukses hapus data", "Hapus Data");
	})
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.main').change(function() {
			var id = $(this).val();
			console.log(id);
			$.ajax({
				method: "POST",
				url: "<?= base_url(); ?>rincian_anggaran/get_main",
				data: {
					id: id
				},
				dataType: "JSON",
				success: function(data) {
					console.log(data);
					var html = '';
					var i;

					for (i = 0; i < data.length; i++) {
						html += '<option value=' + data[i].id_submain + '>' + data[i].id_subnumber + '(' + data[i].nama_submain + ')</option>';
					}
					$('.submain').html(html);
				}
			})
		});
	});

	// var tahun = $('#tahun').val();
	// var table = $('#kt_datatable').DataTable({
	// 	"processing": true,
	// 	"serverSide": true,
	// 	"order": [],
	// 	"ajax": {
	// 		"url": "<?php echo site_url() ?>rincian_anggaran/get_data_user/"+tahun,
	// 		"type": "POST"
	// 	},

	// 	"columns": [
	// 		{data: 'no'},
	// 		// {data: 'number'},
	// 		// {data: 'nama'},
	// 		// {data: 'id_subnumber'},
	// 		// {data: 'nama_submain'},
	// 		{data: 'uraian'},
	// 		{data: 'pemicu_biaya'},
	// 		{data: 'quantity'},
	// 		{data: 'harga_satuan'},
	// 		{data: 'jumlah'},
	// 		{data: 'keterangan'},
	// 		{data: 'januari'},
	// 		{data: 'februari'},
	// 		{data: 'maret'},
	// 		{data: 'april'},
	// 		{data: 'mei'},
	// 		{data: 'juni'},
	// 		{data: 'juli'},
	// 		{data: 'agustus'},
	// 		{data: 'september'},
	// 		{data: 'oktober'},
	// 		{data: 'november'},
	// 		{data: 'desember'},
	// 		{data: 'id_rincian',
	// 			render: function(data, type, row) {
	// 				return '<a href="javascript:void(0)" onclick="edit_data(' + data + ')" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>' +
	// 					'<a href="javascript:void(0)" onclick="delete_data(' + data + ')" class="btn btn-sm btn-primary ml-1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></a>';
	// 			}
	// 		}
	// 	],

	// 	"columnDefs": [{
	// 		"targets": [0],
	// 		"orderable": false,
	// 	}, ],

	// });

	// $('#idkab').on('change', function () {
	// 	var val = $.fn.dataTable.util.escapeRegex(
	// 		$(this).val()
	// 	);
	// 	if (!!val) {
	// 		table.ajax.url( '<?//php echo site_url() ?>rincian_anggaran/index/'+tahun +'/'+ val ).load();
	// 	}
	// });
</script>



</html>

