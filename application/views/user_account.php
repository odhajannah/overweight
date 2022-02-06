<?php $this->load->view('master/header')?>
	<!--begin::Body-->
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="<?= base_url()?>assets/media/logos/logo-letter-1.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
					<span></span>
				</button>
				<button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:<?= base_url()?>assets/media/svg/icons/General/User.svg-->
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
					<?php $this->load->view('master/sidebar')?>
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
											<span class="d-block text-muted pt-2 font-size-sm">sorting &amp; pagination remote datasource</span></h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:<?= base_url()?>assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>Export</button>
												<!--begin::Dropdown Menu-->
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													<!--begin::Navigation-->
													<ul class="navi flex-column navi-hover py-2">
														<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
																<span class="navi-text">Print</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
																<span class="navi-text">Copy</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
																<span class="navi-text">Excel</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
																<span class="navi-text">CSV</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
																<span class="navi-text">PDF</span>
															</a>
														</li>
													</ul>
													<!--end::Navigation-->
												</div>
												<!--end::Dropdown Menu-->
											</div>
											<!--end::Dropdown-->
											<!--begin::Button-->
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:<?= base_url()?>assets/media/svg/icons/Design/Flatten.svg-->
												<span class="svg-icon svg-icon-default svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo5\dist/../src/media/svg/icons\Code\Plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
														<path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"/>
													</g>
												</svg><!--end::Svg Icon--></span>
												<!--end::Svg Icon-->
											</span>Tambah Data</a>
											</button>
											
											<!--end::Button-->
										</div>
									
									</div>
									
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-bordered table-checkable" id="kt_datatable">
											<thead>
												<tr>
													<th>Nomor</th>
													<th>Username</th>
													<th>Jenis Anggaran</th>
													<th>Role</th>
													<th>#</th>
												</tr>
											</thead>
											<tbody>
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
					<?php $this->load->view('master/footer')?>
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
				
		<div class="modal fade" id="tambah" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalSizeLg">Form User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i aria-hidden="true" class="ki ki-close"></i>
						</button>
					</div>
					<form action="<?=base_url()?>user_account/addData" enctype="multipart/form-data" method="POST">
						<input type="text" id="tipe" name="tipe" hidden>
						<input type="text" id="id_user" name="id_user" hidden>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputPassword1">Username
								<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password
								<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="password" name="password" placeholder="Password" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Jenias Anggaran
								<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="jenis_anggaran" name="jenis_anggaran" placeholder="Jenis Anggaran" />
							</div>
							<div class="form-group">
								<label for="exampleSelect1">Role
								<span class="text-danger">*</span></label>
								<select class="form-control" name="role" id="role" >
									<option value="1">Admin</option>
									<option value="2">User</option>
								</select>
							</div>
						</div>
				
						<div class="modal-footer">
							<button  type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
							<button type="submit" name="submit" value="submit" class="btn btn-primary font-weight-bold">Save changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade" id="modaldeleteshow" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalSizeLg">Form User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i aria-hidden="true" class="ki ki-close"></i>
						</button>
					</div>
					<div class="modal-body">
						<p>Apakah Anda Yakin Ingin Menghapus Data User ini?</p>
					<div class="modal-footer">
						<button  type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
						<button type="button" id="deletedata" data-delete="" class="btn btn-primary font-weight-bold">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('master/script')?>
	</body>
	<!--end::Body-->

	<script type="text/javascript">
		"use strict";
			var table = $('#kt_datatable').DataTable({ 

				"processing": true, 
				"serverSide": true, 
				"order": [], 

				"ajax": {
					"url": "<?php echo site_url('user_account/get_data_user')?>",
					"type": "POST"
				},
				columns: [
                    {data: 'no'},
                    {data: 'username'},
                    {data: 'jenis_anggaran'},
                    {data: 'role'},
					{data: 'id_user',
						render: function (data, type, row) {
						return 	'<a href="javascript:void(0)" onclick="edit_data('+data+')" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>'+
								'<a href="javascript:void(0)" onclick="delete_data('+data+')" class="btn btn-sm btn-primary ml-1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></a>' ;
						}
					}
                ],

				"columnDefs": [
					{ 
						"targets": [ 0 ], 
						"orderable": false, 
					},
				],

			});

			function edit_data(id_user) {
				console.log(id_user);
				$.ajax({
					url: '<?php echo base_url() ?>user_account/ajax_edit/'+id_user,
					type: "POST",
					dataType: "JSON",
					cache: false,
					success: function(data){
						$('#id_user').val(data.id_user);
						$('#username').val(data.username);
						$('#jenis_anggaran').val(data.jenis_anggaran);
						$('#role').val(data.role);
						$('#password').val(data.password);
						$('#tipe').val('update');
						$('#tambah').modal({
							"backdrop"  : "static",
							"keyboard"  : true,
							"show"      : true 
						});
				
					},
				}).fail(function(response){})
			}	

			function delete_data(id){
				// $('#modaldeleteshow').modal("show");
				console.log(id);
				$('#modaldeleteshow').modal({
					"backdrop"  : "static",
					"keyboard"  : true,
					"show"      : true 
				});
				$("#deletedata").attr("data-delete",id)
		
			}

			$("#deletedata").click(function(){
				var stat5= $("#deletedata").attr("data-delete")
				$(location).attr('href', '<?php echo base_url('user_account/ajax_delete')?>/'+stat5+'')
				toastr["warning"]("Sukses hapus data", "Hapus Data");
			})
		</script>
</html>