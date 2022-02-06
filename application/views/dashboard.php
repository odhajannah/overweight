	<?php $this->load->view('master/header')?>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="assets/media/logos/logo-letter-1.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
					<span></span>
				</button>
				<button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
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
				<!--begin::Aside-->
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
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-xl-12">
										<!--begin::Nav Panel Widget 1-->
										<div class="card card-custom gutter-b card-stretch card-shadowless">
											<!--begin::Body-->
											<div class="card-body p-0">
												<!--begin::Nav Tabs-->
												<ul class="dashboard-tabs nav nav-pills nav-danger row row-paddingless m-0 p-0 flex-column flex-sm-row" role="tablist">
													<!--begin::Item-->
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0" data-toggle="modal" data-target="#exampleModalLong">
														<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_1">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-7x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																        <polygon points="0 0 24 0 24 24 0 24"/>
																        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
																        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
																    </g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bold text-center"><h3>Internal</h3></span>
														</a>
													</li>
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0" data-toggle="modal" data-target="#exampleModalLong2">
														<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_1">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-7x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																        <polygon points="0 0 24 0 24 24 0 24"/>
																        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
																        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
																    </g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bold text-center"><h3>Eksternal</h3></span>
														</a>
													</li>
												</ul>
												<!--end::Nav Tabs-->
									
											</div>
											<!--end::Body-->
											<br>
								
											<div class="card card-custom">
												<div class="card-header flex-wrap border-0 pt-6 pb-0">
													<div class="card-title">
														<h3 class="card-label">List Surat Internal
														<!-- <span class="d-block text-muted pt-2 font-size-sm">advance header options</span></h3> -->
													</div>
												</div>
												<div class="card-body">
													<!--begin: Datatable-->
													<table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatablee">
														<thead>
												
															<tr>
																<th>Tanggal</th>
																<th>Tujuan</th>
																<th>Hal </th>	
																<!-- <th>Keterangan</th> -->
																<th>Nama</th>
																<th>Jabatan</th>
																<th>Action</th>
																<th>Export</th>
															</tr>
														</thead>
														<tbody>
														<?php $bln='';$hari=''; $buln=''; foreach ($internal as $row) {
																$bulan = date('m', strtotime($row['tanggal_rapat']));
																if($bulan == '01'){$buln = 'Januari';}
																elseif($bulan == '02'){ $buln = 'Februari';}
																elseif($bulan == '03'){$buln = 'Maret';}
																elseif($bulan == '04'){$buln='April';}
																elseif($bulan == '05'){$buln = 'Mei';}
																elseif($bulan == '06'){ $buln='Juni';}
																elseif($bulan == '07'){$buln='Juli';}
																elseif($bulan == '08'){$buln='Agustus';}
																elseif($bulan == '09'){$buln='September';}
																elseif($bulan == '10'){$buln='Oktober';}
																elseif($bulan == '11'){$buln='November';}
																elseif($bulan == '12'){$buln='Desember';}
																else{}
													
																$bulann = date('m', strtotime($row['tanggal']));
																if($bulann == '01'){$bln = 'Januari';}
																elseif($bulann == '02'){ $bln = 'Februari';}
																elseif($bulann == '03'){$bln = 'Maret';}
																elseif($bulann == '04'){$bln='April';}
																elseif($bulann == '05'){$bln = 'Mei';}
																elseif($bulann == '06'){ $bln='Juni';}
																elseif($bulann == '07'){$bln='Juli';}
																elseif($bulann == '08'){$bln='Agustus';}
																elseif($bulann == '09'){$bln='September';}
																elseif($bulann == '10'){$bln='Oktober';}
																elseif($bulann == '11'){$bln='November';}
																elseif($bulann == '12'){$bln='Desember';}
																else{}
													
													
																$hr = date('l', strtotime($row["tanggal_rapat"]));
																if($hr == 'Monday'){$hari = 'Senin';}
																elseif($hr == 'Tuesday'){$hari = 'Selasa';}
																elseif($hr == 'Wednesday'){$hari = 'Rabu';}
																elseif($hr == 'Thursday'){$hari = 'Kamis';}
																elseif($hr == 'Friday'){$hari = 'Jumat';}
																elseif($hr == 'Saturday'){$hari = 'Sabtu';}
																elseif($hr == 'Sunday'){$hari = 'Minggu';}	
															
															?>
															<td><?php echo date('d', strtotime($row["tanggal"])); ?> <?=$buln?> <?php echo date('Y', strtotime($row["tanggal"]));?></td>
															<td><?=$row['tujuan_surat']?></td>
															<td><?=$row['hal']?></td>
															<!-- <td>
															<br><?//=//$row['isi']?>
															<br>Hari, Tanggal: // echo date('l', strtotime($row["tanggal_rapat"]));   ?>, <?php //echo date('d F Y', strtotime($row["tanggal_rapat"]));   ?>
															<br>Waktu: <?//=//$row['waktu_rapat']?>
															<br>Tempat: <//?=$row['tempat_rapat']?>
															</td> -->
															<td><?=$row['nama']?></td>
															<td><?=$row['jabatan']?></td>
															<td>
															<a href="javascript:void(0)" title="Delete" onclick="delete_data(<?=$row['id']?>)"><i class="far fa-trash-alt" style="color: red;"></i></a> |

															<a href="javascript:void(0)" title="Edit" onclick="edit_datainternal(<?=$row['id']?>)"><i class="far fa-edit" style="color: orange;"></i></a></td>	
															<td>
																
																<a href="<?= base_url();?>memo/internalPdf/<?=$row['id']?>" class="btn btn-light-success font-weight-bold mr-2" >Export to PDF</a>
															</td>	
														</tr>
													<?php } ?>
														
														</tbody>
													</table>
													<!--end: Datatable-->
												</div>
											</div>
											<br>
											<div class="card card-custom">
												<div class="card-header flex-wrap py-5">
													<div class="card-title">
														<h3 class="card-label">List Surat Eksternal
														<!-- <span class="d-block text-muted pt-2 font-size-sm">extended pagination options</span></h3> -->
													</div>
												</div>
												<div class="card-body">
													<!--begin: Datatable-->
													<table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
														<thead>
															<tr>
																<th>Nomor Surat</th>
																<th>Hari, Tanggal</th>
																<th>Tujuan </th>	
																<th>Tembusan</th>
																<th>Dari</th>
																<th>Lampiran</th>					
																<th>Perihal</th>
																<th>Nama</th>	
																<th>Jabatan</th>												
																<th>Action</th>
																<th>Export</th>
															</tr>
														</thead>
														<tbody>
														<?php $bln='';$hari=''; $buln=''; foreach ($external as $row2) {
																$bulan = date('m', strtotime($row2['hari_tanggal']));
																if($bulan == '01'){$bln = 'I'; $buln = 'Januari';}
																elseif($bulan == '02'){$bln = 'II'; $buln = 'Februari';}
																elseif($bulan == '03'){$bln = 'III'; $buln = 'Maret';}
																elseif($bulan == '04'){$bln = 'IV'; $buln='April';}
																elseif($bulan == '05'){$bln = 'V'; $buln = 'Mei';}
																elseif($bulan == '06'){$bln = 'VI'; $buln='Juni';}
																elseif($bulan == '07'){$bln = 'VII'; $buln='Juli';}
																elseif($bulan == '08'){$bln = 'VIII'; $buln='Agustus';}
																elseif($bulan == '09'){$bln = 'IX'; $buln='September';}
																elseif($bulan == '10'){$bln = 'X'; $buln='Oktober';}
																elseif($bulan == '11'){$bln = 'XI'; $buln='November';}
																elseif($bulan == '12'){$bln = 'XII'; $buln='Desember';}
																else{}

																$hr = date('l', strtotime($row2["hari_tanggal"]));
																if($hr == 'Monday'){$hari = 'Senin';}
																elseif($hr == 'Tuesday'){$hari = 'Selasa';}
																elseif($hr == 'Wednesday'){$hari = 'Rabu';}
																elseif($hr == 'Thursday'){$hari = 'Kamis';}
																elseif($hr == 'Friday'){$hari = 'Jumat';}
																elseif($hr == 'Saturday'){$hari = 'Sabtu';}
																elseif($hr == 'Sunday'){$hari = 'Minggu';}
															?>
																<td><?=$row2['nomor_surat']?>/BK-QHSE/<?=$bln?>/<?=date('Y', strtotime($row2["hari_tanggal"]));?></td>		
																<td><?php echo $hari ?>, <?= date('d', strtotime($row2["hari_tanggal"]));?> <?=$buln?> <?= date('Y', strtotime($row2["hari_tanggal"]));?></td>
																<td><?=$row2['tujuan']?></td>
																<td><?php $var = json_decode($row2['tembusan'], TRUE);for($i=0; $i<count($var); $i++){echo $var[$i].', ';}?></td>
																<td><?=$row2['dari']?></td>
																<td><?=$row2['lampiran']?></td>
																<td><?=$row2['perihal']?></td>
																<td><?=$row2['nama']?></td>
																<td><?=$row2['jabatan']?></td>
																<td>
																<a href="javascript:void(0)" title="Delete" onclick="delete_dataexternal(<?=$row2['id']?>)"><i class="far fa-trash-alt" style="color: red;"></i></a> |

																<a href="javascript:void(0)" title="Edit" onclick="edit_dataexternal(<?=$row2['id']?>)"><i class="far fa-edit" style="color: orange;"></i></a></td>	
																<td>
																	<a href="<?= base_url();?>memo/externalPdf/<?=$row2['id']?>" class="btn btn-light-success font-weight-bold mr-2" >Export to PDF</a>
																</td>	
															</tr>
														<?php } ?>
														</tbody>
													</table>
													<!--end: Datatable-->
												</div>
											</div>
													
										</div>
						
									</div>
								</div>
								<!--end::Row-->
				
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<?php $this->load->view('master/footer');?>
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Internal</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i aria-hidden="true" class="ki ki-close"></i>
						</button>
					</div>
					<form method="post" action="<?= base_url() ?>memo/tambahData" enctype ="multipart/form-data">
						<div class="modal-body">
							<input type="text " name="id" id="id" hidden>
							<input type="text " name="tipe" id="tipe" hidden>
							<div class="card-body">
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Tanggal Surat</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='date' class="form-control" id="intgl" name="tanggal" placeholder="Tanggal" required/>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Kepada</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='text' class="form-control" id="inkepada" name="tujuan_surat" placeholder="Tujuan Surat" required/>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Hal</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='textarea' class="form-control" id="inhal" name="hal" placeholder="Hal" required/>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Pembuka</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<textarea id="inket" name="keterangan" rows="5" cols="100" class="form-control" required  placeholder="keterangan" ></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Isi</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<textarea id="inisi" name="isi" rows="15" cols="100" class="form-control" required  placeholder="keterangan" ></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Hari/Tanggal Rapat</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<input type='date' class="form-control" id="inhari" name="tanggal_rapat" placeholder="Tanggal" required/>
									</div>
								</div>										   				
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Waktu</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<input type='text' class="form-control" id="inwaktu" name="waktu_rapat" placeholder="waktu rapat" required/>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Tempat</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<input type='text' class="form-control" id="intempat" name="tempat_rapat" placeholder="tempat rapat" required/>
									</div>
								</div>											 	
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Penutup</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<textarea id="inpenutup" name="penutup" rows="10" cols="100" class="form-control" required  placeholder="keterangan" ></textarea>
									</div>
								</div>										   
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Nama</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='text' class="form-control" id="innama" name="nama" placeholder="Nama" required/>

									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Jabatan</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='text' class="form-control" id="injabatan" name="jabatan" placeholder="Jabatan" required/>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
								<button type="submit" name = "submit" value="Tambah Data" class="btn btn-primary font-weight-bold">Save changes</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="modal fade" id="exampleModalLong2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Eksternal</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i aria-hidden="true" class="ki ki-close"></i>
						</button>
					</div>
					<form method="post" action="<?= base_url() ?>memo/tambahDataExternal" enctype ="multipart/form-data">
						<div class="modal-body">
							<input type="text " name="id" id="eid" hidden>
							<input type="text " name="tipe" id="etipe" hidden>
							<div class="card-body">
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">No</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='text' class="form-control" id="eno" name="nomor_surat" value="<?=sprintf("%03s", $nomor)?>" disabled placeholder="No Surat" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Hari/Tanggal</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='date' class="form-control" id="ehari"  name="hari_tanggal" placeholder="Hari/Tanggal" required/>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Kepada YTH</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='text' class="form-control" id="etujuan"  name="tujuan" placeholder="Tujuan" required />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Tembusan</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='text' class="form-control" id="etembusan" name="tembusan" placeholder="Tembusan" required/>
									</div>
								</div>											   
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Dari</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='text' class="form-control" id="edari" name="dari" placeholder="Dari" required/>
									</div>
								</div>											   
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Lampiran</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='text' class="form-control" id="elampiran" name="lampiran" placeholder="Lampiran" required/>
									</div>
								</div>											   
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Perihal</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<textarea id="eperihal" rows="4" cols="50" class="form-control" name="perihal" placeholder="Perihal" required></textarea>
								</div>
								</div>
									<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Pembuka</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<textarea id="epembuka" name="keterangan" rows="5" cols="100" class="form-control" required  placeholder="keterangan" ></textarea>
								</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Isi</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<textarea id="eisi" name="isi" rows="15" cols="100" class="form-control" required  placeholder="keterangan" ></textarea>
								</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Penutup</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<textarea id="epenutup" name="penutup" rows="10" cols="100" class="form-control" required  placeholder="keterangan" ></textarea>
								</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Nama</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='text' class="form-control" id="enama" name="nama" placeholder="Nama" required />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-2 col-sm-12">Jabatan</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<input type='text' class="form-control" id="ejabatan" name="jabatan" placeholder="Jabatan" required/>
									</div>
								</div>	
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
							<button type="submit" name ="submit" value="Tambah Data" class="btn btn-primary font-weight-bold">Save changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>	


		<div class="modal fade" id="modaldeleteshowinternal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalSizeLg">Hapus Surat Internal</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i aria-hidden="true" class="ki ki-close"></i>
						</button>
					</div>
					<div class="modal-body">
						<p>Apakah Anda Yakin Ingin Menghapus Data ini?</p>
					</div>
					<div class="modal-footer">
						<button  type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
						<button type="button" id="deletedata" data-delete="" class="btn btn-primary font-weight-bold">Delete</button>
					</div>
				</div>
			</div>
		</div>
				
		<div class="modal fade" id="modaldeleteshowinternal2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalSizeLg">Hapus Surat Eksternal</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i aria-hidden="true" class="ki ki-close"></i>
						</button>
					</div>
					<div class="modal-body">
						<p>Apakah Anda Yakin Ingin Menghapus Data ini?</p>
					</div>
					<div class="modal-footer">
						<button  type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
						<button type="button" id="deletedataexternal" data-delete="" class="btn btn-primary font-weight-bold">Delete</button>
					</div>
				</div>
			</div>
		</div>											

		<?php $this->load->view('master/script');?>
		<script src="<?= base_url()?>assets/js/pages/crud/datatables/basic/headers.js"></script>
		<script src="<?= base_url()?>assets/js/pages/crud/datatables/basic/paginations.js"></script>
		<script>
			
			function delete_data(id){
				// $('#modaldeleteshow').modal("show");
				console.log(id);
				$('#modaldeleteshowinternal').modal({
					"backdrop"  : "static",
					"keyboard"  : true,
					"show"      : true 
				});
				$("#deletedata").attr("data-delete",id)
		
			}

			$("#deletedata").click(function(){
				var stat5= $("#deletedata").attr("data-delete")
				$(location).attr('href', '<?php echo base_url('memo/internal_delete')?>/'+stat5+'')
				toastr["warning"]("Sukses hapus data", "Hapus Data");
			})

			function delete_dataexternal(id){
				console.log(id);
				$('#modaldeleteshowinternal2').modal({
					"backdrop"  : "static",
					"keyboard"  : true,
					"show"      : true 
				});
				
				$("#deletedataexternal").attr("data-delete",id)
		
			}

			$("#deletedataexternal").click(function(){
				var stat5= $("#deletedataexternal").attr("data-delete")
				$(location).attr('href', '<?php echo base_url('memo/external_delete')?>/'+stat5+'')
				toastr["warning"]("Sukses hapus data", "Hapus Data");
			})

			function edit_datainternal(id) {
				console.log(id);
				$.ajax({
					url: '<?php echo base_url() ?>memo/get_detail_internal/'+id,
					type: "POST",
					dataType: "JSON",
					cache: false,
					success: function(data){
						console.log(data);
						$('#id').val(data.id);
						$('#intgl').val(data.tanggal);
						$('#inkepada').val(data.tujuan_surat);
						$('#inhal').val(data.hal);
						$('#inket').val(data.keterangan);
						$('#inisi').val(data.isi);
						$('#inhari').val(data.tanggal_rapat);
						$('#inwaktu').val(data.waktu_rapat);
						$('#intempat').val(data.tempat_rapat);
						$('#inpenutup').val(data.penutup);
						$('#innama').val(data.nama);
						$('#injabatan').val(data.jabatan);
						$('#tipe').val('update');             
						$('#exampleModalLong').modal({
							"backdrop"  : "static",
							"keyboard"  : true,
							"show"      : true 
						});
				
					},
				}).fail(function(response){})
			}

			function edit_dataexternal(id) {
				console.log(id);
				$.ajax({
					url: '<?php echo base_url() ?>memo/get_datail_external/'+id,
					type: "POST",
					dataType: "JSON",
					cache: false,
					success: function(data){
						console.log(data);
						$('#eid').val(data.id);
						$('#eno').val(data.nomor_surat);
						$('#ehari').val(data.hari_tanggal);
						$('#etujuan').val(data.tujuan);
						$('#etembusan').val(data.tembusan);
						$('#edari').val(data.dari);
						$('#elampiran').val(data.lampiran);
						$('#eperihal').val(data.perihal);
						$('#epembuka').val(data.keterangan);
						$('#eisi').val(data.isi);
						$('#enama').val(data.nama);
						$('#epenutup').val(data.penutup);
						$('#ejabatan').val(data.jabatan);
						$('#etipe').val('update');             
						$('#exampleModalLong2').modal({
							"backdrop"  : "static",
							"keyboard"  : true,
							"show"      : true 
						});
				
					},
				}).fail(function(response){})
			}
        
		</script>
	</body>
	<!--end::Body-->
</html>