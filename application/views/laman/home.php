<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('nominal');
?>
	<!DOCTYPE html>
	<section id="top-page" class="full-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6 top-caption">
					<h2 class="top-text"><strong>Temukan produk organik terbaik dari petani lokal!</strong></h2>
					<div class="ssubheading-divider"></div>
					<p class="top-text">Cita-cita kami sederhana. Keluarga di dalam rumah menikmati makanan sehat dari sahabat petani dalam negeri dengan kualitas terbaik.</p>
					<a class="js-scroll-trigger" href="#store"><button class="subm" data-dismiss="modal" type="button">
                    Mulai Belanja!<span></span></button></a><a class="js-scroll-trigger" href="#description"><button class="more" data-dismiss="modal" type="button">
                    Pelajari Lebih Lanjut</button></a>
				</div>
			</div>
		</div>
	</section>
	<section id="low-page" class="full-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6 top-caption">
					<h2 class="top-text"><strong>Temukan produk organik terbaik dari petani lokal!</strong></h2>
					<div class="ssubheading-divider"></div>
					<p class="top-text">Cita-cita kami sederhana. Keluarga di dalam rumah menikmati makanan sehat dari sahabat petani dalam negeri dengan kualitas terbaik.</p>
					<a class="js-scroll-trigger" href="<?php echo base_url('') ?>/#store"><button class="subm" data-dismiss="modal" type="button">
                    Mulai Belanja!<span></span></button></a><a class="js-scroll-trigger" href="<?php echo base_url('') ?>/#description"><button class="more" data-dismiss="modal" type="button">
                    Pelajari Lebih Lanjut</button></a>
				</div>
			</div>
		</div>
	</section>

	<section id="description">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-12">
					<h2 class="section-heading text-uppercase">Jadi <strong>#PetaniModern</strong> di Hayati</h2>
					<div class="subheading-divider"></div>
					<img class="logo-desc" src="<?php echo base_url('') ?>/assets/img/lg-hayati.png" alt="">
				</div>
				<div class="col-md-12 align-self-center">

					<p>Hayati adalah platform digital yang menghubungkan petani dan kamu yang peduli dengan pertanian di Indonesia. Di Hayati pula, kamu dapat temukan beragam pangan segar organik yang berasal dari tangan-tangan petani Indonesia secara langsung!</p>
					<div class="ssubheading-divider"></div>

				</div>
			</div>
		</div>
	</section>

	<section id="step">
		<div class="container">
			<div class="col-md-12 text-center">
				<h2 class="section-heading text-uppercase">Cara Beli di Hayati</h2>
				<div class="subheading-divider"></div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6 col-home-reg">
					<div class="row">
						<div class="col-md-12 col-xs-3 img-farmer">
							<img class="img-howto" src="<?php echo base_url('') ?>/assets/img/step-choose.png" alt="">
						</div>
						<div class="col-md-12 col-xs-9">
							<p class="text-step">Cari produk organik pilihanmu di Hayati</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-home-reg">
					<div class="row">
						<div class="col-md-12 col-xs-3 img-farmer">
							<img class="img-howto" src="<?php echo base_url('') ?>/assets/img/step-buy.png" alt="">
						</div>
						<div class="col-md-12 col-xs-9">
							<p class="text-step">Beli dan tunggu sampai waktu pengiriman</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-home-reg">
					<div class="row">
						<div class="col-md-12 col-xs-3 img-farmer">
							<img class="img-howto" src="<?php echo base_url('') ?>/assets/img/step-product.png" alt="">
						</div>
						<div class="col-md-12 col-xs-9">
							<p class="text-step">Dapatkan produk segar pesananmu</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-home-reg">
					<div class="row">
						<div class="col-md-12 col-xs-3 img-farmer">
							<img class="img-howto" src="<?php echo base_url('') ?>/assets/img/step-review.png" alt="">
						</div>
						<div class="col-md-12 col-xs-9">
							<p class="text-step">Distribusi tanpa rantai penjualan yang panjang</p><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="gray-bg" id="store">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Mulai Belanja!</h2>
					<div class="subheading-divider"></div>
					<br>
				</div>
			</div>
			<div class="row text-center">
				<?php
                foreach ($list_brg ->result()as $row) {?>
					<div class="col-md-4 col-sm-6 portfolio-item">
					    <div data-toggle="tooltip" data-placement="left" title="" class="product-tooltip" style="background-color: rgba(15, 48, 50, 0.9);">
						<?php if($row->jenis == 1){
							echo " Organik tersertifikasi";}
							else{ echo " Organik tidak tersertifikasi";}?>
						</div>
						<img class="img-proj rounded-top" src="<?php echo base_url('') ?>/assets/img/store/<?php echo $row->image?>" alt="">
						<div class="portfolio-caption rounded-bottom">
							<h4>
								<?php echo $row->nama_barang?>
							</h4>
							<div class="ssubheading-divider"></div>
							<table class="table" align="center">
								<tbody>
									<tr>
										<td>Harga</td>
										<td>:
											<?php echo rupiah($row->harga)."/".$row->satuan; ?>
										</td>
									</tr>
									<tr>
										<td>Lokasi panen</td>
										<td>:
											<?php echo $row->lokasi_panen?>
										</td>
									</tr>
									<tr>
										<td>Petani</td>
										<td>:
											<?php echo $row->petani?>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="col-lg-12 text-center">
								<a class="portfolio-link" href="<?php echo base_url('store/detail/'.$row->kode_barang) ?>">
                            <button class="subm" data-dismiss="modal" type="button">Beli ini!</button></a>
							</div>
						</div>
					</div>
					<?php } ?>
			</div>
			<div class="row row-centered">
				<div class="col-lg-12 text-center">
					<a class="portfolio-link" href="<?php echo base_url('store') ?>">
                    <button class="subm" data-dismiss="modal" type="button">Lihat produk lainnya</button></a>
				</div>
			</div>
		</div>
	</section>
