<?php $this->load->view('master/header') ?>
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
				<?php $this->load->view('master/sidebar') ?>

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
										<div class="card card-custom" id="printableArea">
											<div class="text-right" style="float: right;">
												<img src="<?= base_url() ?>assets/image/logo.jpeg" alt="Logo" width="250px" height="250px">
											</div>
											<div class="card-body">
												<?php $bln = '';
												$hari = '';
												$buln = '';
												foreach ($external as $row) {
													$bulan = date('m', strtotime($row['hari_tanggal']));
													if ($bulan == '01') {
														$bln = 'I';
														$buln = 'Januari';
													} elseif ($bulan == '02') {
														$bln = 'II';
														$buln = 'Februari';
													} elseif ($bulan == '03') {
														$bln = 'III';
														$buln = 'Maret';
													} elseif ($bulan == '04') {
														$bln = 'IV';
														$buln = 'April';
													} elseif ($bulan == '05') {
														$bln = 'V';
														$buln = 'Mei';
													} elseif ($bulan == '06') {
														$bln = 'VI';
														$buln = 'Juni';
													} elseif ($bulan == '07') {
														$bln = 'VII';
														$buln = 'Juli';
													} elseif ($bulan == '08') {
														$bln = 'VIII';
														$buln = 'Agustus';
													} elseif ($bulan == '09') {
														$bln = 'IX';
														$buln = 'September';
													} elseif ($bulan == '10') {
														$bln = 'X';
														$buln = 'Oktober';
													} elseif ($bulan == '11') {
														$bln = 'XI';
														$buln = 'November';
													} elseif ($bulan == '12') {
														$bln = 'XII';
														$buln = 'Desember';
													} else {
													}

													$hr = date('l', strtotime($row["hari_tanggal"]));
													if ($hr == 'Monday') {
														$hari = 'Senin';
													} elseif ($hr == 'Tuesday') {
														$hari = 'Selasa';
													} elseif ($hr == 'Wednesday') {
														$hari = 'Rabu';
													} elseif ($hr == 'Thursday') {
														$hari = 'Kamis';
													} elseif ($hr == 'Friday') {
														$hari = 'Jumat';
													} elseif ($hr == 'Saturday') {
														$hari = 'Sabtu';
													} elseif ($hr == 'Sunday') {
														$hari = 'Minggu';
													}

												?>

													<table border="0">
														<tr>
															<td width="200px" style="color: black; font-size: 22px; font-family:Segoe UI;">No</td>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">: <?= $row['nomor_surat'] ?>/BK-QHSE/<?= $bln ?>/<?= date('Y', strtotime($row["hari_tanggal"])); ?></td>
														</tr>
														<tr>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">Hari/tgl</td>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">: <?php echo $hari ?>, <?= date('d', strtotime($row["hari_tanggal"])); ?> <?= $buln ?> <?= date('Y', strtotime($row["hari_tanggal"])); ?></td>
														</tr>
														<tr>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">Kepada YTH</td>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">: <?= $row['tujuan'] ?></td>
														</tr>
														<tr>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">Tembusan</td>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">:
																<?php $var = json_decode($row['tembusan'], TRUE);

																for ($i = 0; $i < count($var); $i++) {
																}
																if (count($var) == 2) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td></tr>
																	<tr><td>' . $var[1] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 3) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[2] . '</td></tr>
																	<tr><td>' . $var[1] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 4) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[2] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[3] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 5) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[3] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[4] . '</td></tr>
																	<tr><td>' . $var[2] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 6) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[3] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[4] . '</td></tr>
																	<tr><td>' . $var[2] . '</td><td>' . $var[5] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 7) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[4] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[5] . '</td></tr>
																	<tr><td>' . $var[2] . '</td><td>' . $var[6] . '</td></tr>
																	<tr><td>' . $var[3] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 8) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[4] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[5] . '</td></tr>
																	<tr><td>' . $var[2] . '</td><td>' . $var[6] . '</td></tr>
																	<tr><td>' . $var[3] . '</td><td>' . $var[7] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 9) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[5] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[6] . '</td></tr>
																	<tr><td>' . $var[2] . '</td><td>' . $var[7] . '</td></tr>
																	<tr><td>' . $var[3] . '</td><td>' . $var[8] . '</td></tr>
																	<tr><td>' . $var[4] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 10) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[5] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[6] . '</td></tr>
																	<tr><td>' . $var[2] . '</td><td>' . $var[7] . '</td></tr>
																	<tr><td>' . $var[3] . '</td><td>' . $var[8] . '</td></tr>
																	<tr><td>' . $var[4] . '</td><td>' . $var[9] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 11) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[6] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[7] . '</td></tr>
																	<tr><td>' . $var[2] . '</td><td>' . $var[8] . '</td></tr>
																	<tr><td>' . $var[3] . '</td><td>' . $var[9] . '</td></tr>
																	<tr><td>' . $var[4] . '</td><td>' . $var[10] . '</td></tr>
																	<tr><td>' . $var[5] . '</td</tr>
																	</thead></table>';
																} elseif (count($var) == 12) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[6] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[7] . '</td></tr>
																	<tr><td>' . $var[2] . '</td><td>' . $var[8] . '</td></tr>
																	<tr><td>' . $var[3] . '</td><td>' . $var[9] . '</td></tr>
																	<tr><td>' . $var[4] . '</td><td>' . $var[10] . '</td></tr>
																	<tr><td>' . $var[5] . '</td><td>' . $var[11] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 13) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[7] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[8] . '</td></tr>
																	<tr><td>' . $var[2] . '</td><td>' . $var[9] . '</td></tr>
																	<tr><td>' . $var[3] . '</td><td>' . $var[10] . '</td></tr>
																	<tr><td>' . $var[4] . '</td><td>' . $var[11] . '</td></tr>
																	<tr><td>' . $var[5] . '</td><td>' . $var[12] . '</td></tr>
																	<tr><td>' . $var[6] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 14) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[7] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[8] . '</td></tr>
																	<tr><td>' . $var[2] . '</td><td>' . $var[9] . '</td></tr>
																	<tr><td>' . $var[3] . '</td><td>' . $var[10] . '</td></tr>
																	<tr><td>' . $var[4] . '</td><td>' . $var[11] . '</td></tr>
																	<tr><td>' . $var[5] . '</td><td>' . $var[12] . '</td></tr>
																	<tr><td>' . $var[6] . '</td><td>' . $var[13] . '</td></tr>
																	</thead></table>';
																} elseif (count($var) == 15) {
																	echo '<table><thead>
																	<tr><td style="padding-right:100px">' . $var[0] . '</td><td>' . $var[8] . '</td></tr>
																	<tr><td>' . $var[1] . '</td><td>' . $var[9] . '</td></tr>
																	<tr><td>' . $var[2] . '</td><td>' . $var[10] . '</td></tr>
																	<tr><td>' . $var[3] . '</td><td>' . $var[11] . '</td></tr>
																	<tr><td>' . $var[4] . '</td><td>' . $var[12] . '</td></tr>
																	<tr><td>' . $var[5] . '</td><td>' . $var[13] . '</td></tr>
																	<tr><td>' . $var[6] . '</td><td>' . $var[14] . '</td></tr>
																	<tr><td>' . $var[7] . '</td></tr>
																	</thead></table>';
																}
																?></td>
														</tr>
														<tr>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">Dari</td>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">: <?= $row['dari'] ?></td>
														</tr>
														<tr>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">Lampiran</td>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">: <?= $row['lampiran'] ?></td>
														</tr>
														<tr>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">Perihal</td>
															<td style="color: black; font-size: 22px; font-family:Segoe UI;">: <?= $row['perihal'] ?></td>
														</tr>
													</table>


													<p style="color: black; font-size: 22px; font-family:Segoe UI;"><?= $row['keterangan'] ?></p>
													<p align="justify" style="color: black; font-size: 22px; font-family:Segoe UI;"><?= $row['isi'] ?></p>
													<p align="justify" style="color: black; font-size: 22px; font-family:Segoe UI;"><?= $row['penutup'] ?></p>


													<p style="color: black; font-size: 22px; font-family:Segoe UI;">Hormat Kami,</p>
													<br>
													<br><br>
													<br>
													<br>
													<br>
													<b style="color: black; font-size: 22px; font-family:Segoe UI;"><u><?= $row['nama'] ?></b></u>
													<br>
													<b style="color: black; font-size: 22px; font-family:Segoe UI;"><?= $row['jabatan'] ?></b>
												<?php } ?>
											</div>
											<div class="fixed">
												<div class="text-left" style="float: left;">
													<img src="<?= base_url() ?>assets/image/footer1.jpeg" alt="Logo" width="50px" height="50px">
												</div>

												<div class="text-left" style="float: left;">
													<img src="<?= base_url() ?>assets/image/footer2.png" alt="Logo" width="50px" height="50px">
												</div>
												<div class="text-left" style="float: left;">
													<img src="<?= base_url() ?>assets/image/footer3.png" alt="Logo" width="50px" height="50px">
												</div>
												<div class="text-left" style="float: left;">
													<img src="<?= base_url() ?>assets/image/footer4.png" alt="Logo" width="50px" height="50px">
												</div>
											</div>
											<div class="fixed2">
												<div class="text-right" style="float: right;">
													<img src="<?= base_url() ?>assets/image/footer5.jpeg" alt="Logo" width="300px">
												</div>
											</div>
										</div>
										<input type="button" onclick="printDiv('printableArea')" value="print" class="btn btn-success font-weight-bold" />
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
				<?php $this->load->view('master/footer'); ?>
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>

	<?php $this->load->view('master/script'); ?>
	<script>
		function printDiv(divName) {
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
		}
		4
	</script>

</body>
<style>
	div.fixed {
		position: fixed;
		bottom: 0;
		left: 0;
	}

	div.fixed2 {
		position: fixed;
		bottom: 0;
		right: 0;
	}

</style>
<!--end::Body-->

</html>