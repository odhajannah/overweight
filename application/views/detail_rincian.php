<?php $this->load->view('master/header') ?>
<!--begin::Body-->

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
											<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
										
									</div>

								</div>

								<div class="card-body table-responsive">
									<!--begin: Datatable-->
									<table class="table table-bordered table-checkable" id="kt_datatable">
										<thead>
											<tr>
												<th>Number</th>
												<th>Uraian</th>
												<th>Pemicu Biaya</th>
												<th>Quantity</th>
												<th>Harga Satuan</th>
												<th>Jumlah</th>
												<th>Keterangan</th>
												<th>Januari</th>
												<th>Februari</th>
												<th>Maret</th>
												<th>April</th>
												<th>Mei</th>
												<th>Juni</th>
												<th>Juli</th>
												<th>Agustus</th>
												<th>September</th>
												<th>Oktober</th>
												<th>November</th>
												<th>Desember</th>
												<th>Total</th>
											</tr>
										</thead>
                                        <tbody>
                                            <?php foreach ($main as $row2){?>
                                            <tr>
                                                <td rowspan="<?= count($row2['sub'])?>"><?=$row2['id_number']?></td>
                                                <td><?=$row2['nama']?></td>
												<td colspan="18"></td>
												<?php foreach($row2['sub'] as $row3){?>
												<tr>
													<td rowspan="<?= count($row3['rin'])+1?>"><?= $row3['id_subnumber']?></td>
													<td><?= $row3['nama_submain']?></td>
													<td colspan="18"></td>
													<?php $nilai=0; foreach ($row3['rin'] as $row){
														$sum = $row['jan']+$row['feb']+$row['mar']+$row['apr']+$row['mei']+$row['jun']+$row['jul']+$row['agu']+$row['sep']+$row['okt']+$row['nov']+$row['des'];
														$nilai+=$sum;		
													?>
														
													
													<tr>
														<td><?=$row['uraian']?></td>
														<td><?=$row['pemicu_biaya']?></td>
														<td><?=$row['quantity']?></td>
														<td><?=$row['harga_satuan']?></td>
														<td><?=$row['jumlah']?></td>
														<td><?=$row['keterangan']?></td>
														<td><?=$row['jan']?></td>
														<td><?=$row['feb']?></td>
														<td><?=$row['mar']?></td>
														<td><?=$row['apr']?></td>
														<td><?=$row['mei']?></td>
														<td><?=$row['jun']?></td>
														<td><?=$row['jul']?></td>
														<td><?=$row['agu']?></td>
														<td><?=$row['sep']?></td>
														<td><?=$row['okt']?></td>
														<td><?=$row['nov']?></td>
														<td><?=$row['des']?></td>
														<td><?=$row['jan']+$row['feb']+$row['mar']+$row['apr']+$row['mei']+$row['jun']+$row['jul']+$row['agu']+$row['sep']+$row['okt']+$row['nov']+$row['des']?></td>
													</tr>
													<?php }?>
													<td colspan="19">Total</td>
													<td><?=$nilai?></td>
												</tr>
												<?php } ?>
                                            </tr> 
                                            <?php } ?>
                                        </tbody>
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
				<?php $this->load->view('master/footer') ?>
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->

	</body>

</html>

<?php foreach ($main_account as $rowMain) { ?>
	<tr style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;">
		<td colspan="20"><b><?= "{$rowMain['id_number']} - {$rowMain['nama']}" ?></b></td>
	</tr>
	<?php foreach ($rowMain['submain'] as $rowSubmain) { ?>
		<tr style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;">
			<td style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;" rowspan="<?= count($rowSubmain['rincian']) + 1 ?>" style="border-left: solid 2px black;"><b><?= "{$rowSubmain['id_subnumber']} - {$rowSubmain['nama_submain']}" ?></b></td>

			<?php $nilai = 0;
			foreach ($rowSubmain['rincian'] as $rowRincian) {
				$sum = $rowRincian['jan'] + $rowRincian['feb'] + $rowRincian['mar'] + $rowRincian['apr'] + $rowRincian['mei'] + $rowRincian['jun'] + $rowRincian['jul'] + $rowRincian['agu'] + $rowRincian['sep'] + $rowRincian['okt'] + $rowRincian['nov'] + $rowRincian['des'];
				$nilai += $sum;
			?>

		<tr style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;">
			<td><?= $rowRincian['uraian'] ?></td>
			<td><?= $rowRincian['pemicu_biaya'] ?></td>
			<td><?= $rowRincian['quantity'] ?></td>
			<td><?= $rowRincian['harga_satuan'] ?></td>
			<td><?= $rowRincian['jumlah'] ?></td>
			<td><?= $rowRincian['keterangan'] ?></td>
			<td><?= $rowRincian['jan'] ?></td>
			<td><?= $rowRincian['feb'] ?></td>
			<td><?= $rowRincian['mar'] ?></td>
			<td><?= $rowRincian['apr'] ?></td>
			<td><?= $rowRincian['mei'] ?></td>
			<td><?= $rowRincian['jun'] ?></td>
			<td><?= $rowRincian['jul'] ?></td>
			<td><?= $rowRincian['agu'] ?></td>
			<td><?= $rowRincian['sep'] ?></td>
			<td><?= $rowRincian['okt'] ?></td>
			<td><?= $rowRincian['nov'] ?></td>
			<td><?= $rowRincian['des'] ?></td>
			<td><?= $rowRincian['jan'] + $rowRincian['feb'] + $rowRincian['mar'] + $rowRincian['apr'] + $rowRincian['mei'] + $rowRincian['jun'] + $rowRincian['jul'] +
					$rowRincian['agu'] + $rowRincian['sep'] + $rowRincian['okt'] + $rowRincian['nov'] + $rowRincian['des'] ?></td>
			<td style="border-right: solid 2px black;">
				<a href="javascript:void(0)" onclick="edit_data(<?= $rowRincian['id_rincian'] ?>)" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
				<a href="javascript:void(0)" onclick="delete_data(<?= $rowRincian['id_rincian'] ?>)" class="btn btn-sm btn-primary ml-1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></a>
			</td>
		</tr>
	<?php } ?>
	</tr>
	<tr style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;">
		<td style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;" colspan="19">Total</td>
		<td style="border-left: solid 2px black;border-right: solid 2px black;border-top: solid 2px black;" colspan="2"><?= $nilai ?></td>
	</tr>
<?php } ?>

<?php } ?>