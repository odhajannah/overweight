

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
											<div class="card card-custom" id="printableArea">
												<div class = "text-right" style="float: right;">
													<img src="<?=base_url()?>assets/image/logo.jpeg" width="250" height="250" alt="Logo">
												</div>
												<div class="card-body">
												<h3>INTERNAL MEMORANDUM
													<br>PT. BUMI KARSA</h3>
													<?php $bln=''; $hari=''; $buln=''; foreach ($internal as $row) {
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
													<p style="color: black; font-size: 22px; font-family:Segoe UI;"><?php echo date('d', strtotime($row["tanggal"]));?> <?=$bln?> <?php echo date('Y', strtotime($row["tanggal"]));?></p>	
													<br><br><p style="color: black; font-size: 22px; font-family:Segoe UI;">Kepada YTH.</p>
													<p style="text-align:left; text-indent:100px; color: black; font-size: 22px; font-family:Segoe UI;"><?=$row['tujuan_surat']?></p>
													<p style=" color: black; font-size: 22px; font-family:Segoe UI;">di-
													<div style="text-align:left; text-indent:25px; color: black; font-size: 22px; font-family:Segoe UI;">tempat</p></div>
													<p style="color: black; font-size: 22px; font-family:Segoe UI;">Hal: <?=$row['hal']?></p>
													<p align="justify" style="color: black; font-size: 22px; font-family:Segoe UI;"><?=$row['keterangan']?></p>
													<p align="justify" style="color: black; font-size: 22px; font-family:Segoe UI;"><?=$row['isi']?></p>
													<div style="text-align:left; text-indent:100px; color: black; font-size: 22px; font-family:Segoe UI;">Hari, Tanggal: <?=$hari?>, <?php echo date('d', strtotime($row["tanggal_rapat"])); ?> <?=$buln?> <?php echo date('Y', strtotime($row["tanggal_rapat"]));?>  </div>
													<div style="text-align:left; text-indent:100px; color: black; font-size: 22px; font-family:Segoe UI;">Waktu: <?=$row['waktu_rapat']?></div>
													<div style="text-align:left; text-indent:100px; color: black; font-size: 22px; font-family:Segoe UI;">Tempat: <?=$row['tempat_rapat']?></div>
													

													<p align="justify" style=" color: black; font-size: 22px; font-family:Segoe UI;"><?=$row['penutup']?></p>

													<p style="color: black; font-size: 22px; font-family:Segoe UI;">Hormat Kami,</p>
													<br>
													<br>
													<br>
													<br>
													<br>
													<br>
													<b style=" color: black; font-size: 22px; font-family:Segoe UI;"><u><?=$row['nama']?></u></b>
													<br>
													<b style=" color: black; font-size: 22px; font-family:Segoe UI;"><?=$row['jabatan']?></b>
													<?php } ?>
													</div>
													<div class="fixed">	
														<div class = "text-left" style="float: left;">
															<img src="<?=base_url()?>assets/image/footer1.jpeg" alt="Logo" width="50px" height="50px">
														</div>
													
														<div class = "text-left" style="float: left;">
															<img src="<?=base_url()?>assets/image/footer2.png" alt="Logo" width="50px" height="50px">
														</div>
														<div class = "text-left" style="float: left;">
															<img src="<?=base_url()?>assets/image/footer3.png" alt="Logo" width="50px" height="50px">
														</div>
														<div class = "text-left" style="float: left;">
															<img src="<?=base_url()?>assets/image/footer4.png" alt="Logo" width="50px" height="50px">
														</div>	
													</div>
													<div class="fixed2">
														<div class = "text-right" style="float: right;">
															<img src="<?=base_url()?>assets/image/footer5.jpeg" alt="Logo" width="300px">
														</div>
													</div>	
												
											</div>
											<input type="button" onclick="printDiv('printableArea')" value="print" class="btn btn-success font-weight-bold"/>	
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
	
		<?php $this->load->view('master/script');?>
		<script>
			function printDiv(divName) {
				var printContents = document.getElementById(divName).innerHTML;
				var originalContents = document.body.innerHTML;

				document.body.innerHTML = printContents;

				window.print();

				document.body.innerHTML = originalContents;
			}4  

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