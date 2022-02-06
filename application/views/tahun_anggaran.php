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
											<h3 class="card-label">Tahun Anggaran
											<span class="d-block text-muted pt-2 font-size-sm">sorting &amp; pagination remote datasource</span></h3>
										</div>
									</div>
									
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-bordered table-checkable" id="kt_datatable">
											<thead>
												<tr>
													<th>No</th>
													<th>Tahun Anggaran</th>
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
					"url": "<?php echo site_url('tahun_anggaran/get_data_user')?>",
					"type": "POST"
				},
				columns: [
                    {data: 'no'},
                    {data: 'tahun'},
					{data: 'id_tahun',
						render: function (data, type, row) {
						return 	'<a href="javascript:void(0)" onclick="edit_data('+data+')" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Rincian">Rincian Anggaran</a>'+
							'<a href="javascript:void(0)" onclick="delete_data('+data+')" class="btn btn-sm btn-warning ml-1" data-toggle="tooltip" data-placement="top" title="Penggunaan">Penggunaan</a>' ;
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

			function edit_data(tahun){
                console.log(tahun);
				window.location.href='budget/rincian_anggaran/index/'+tahun;
			}	

			function delete_data(tahun){
				window.location.href='budget/penggunaan/index/'+tahun;
			}

			
		</script>
		
</html>