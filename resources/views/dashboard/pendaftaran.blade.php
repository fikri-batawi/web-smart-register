<!-- Head -->
@include('dashboard.includes.head')
<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <!-- Header -->
    @include('dashboard.includes.header')
    <div class="app-main">
      <!-- Sidebar -->
      @include('dashboard.includes.sidebar')
      <div class="app-main__outer">
        <div class="app-main__inner">
          <!-- Content -->
          
            <!-- NIK -->
            <!-- <div class="tab-content">
							<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
								<div class="main-card mb-3 card">
									<div class="card-body">
										<h5 class="card-title">Data Pribadi</h5>
										<div class="position-relative form-group">
											<label for="nik" class="">NIK</label>
											<input name="nik" id="nik" placeholder="3174xxxx" type="text" class="form-control">
										</div>
									</div>
								</div>
							</div>
            </div> -->

            <!-- Tab -->
            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
							<li class="nav-item">
								<a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#anak-anak">
									<span>Anak-anak</span>
								</a>
							</li>
							<li class="nav-item">
								<a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#umum">
									<span>Umum</span>
								</a>
							</li>
							<li class="nav-item">
								<a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#ibu-hamil">
									<span>Ibu Hamil</span>
								</a>
							</li>
            </ul>
            <div class="tab-content">
							<!-- Pertanyaan anak-anak -->
							<div class="tab-pane tabs-animation fade show active" id="anak-anak" role="tabpanel">
								<div class="row">
									<div class="col-md-12">
										<form action="{{route('dashboard.pendaftaran.post.anak')}}" method="post">
											@csrf
											@if (session('message'))
												<div class="alert alert-success" role="alert">
													{{ session('message') }}
												</div>
											@endif
											@if (session('error'))
												<div class="alert alert-danger" role="alert">
													{{ session('error') }}
												</div>
											@endif
											<div class="position-relative form-group">
												<label for="nik" class="">NIK</label>
												<input name="nik" id="nik" placeholder="3174xxxx" type="text" class="form-control required">
											</div>
											<!-- pertanyaan -->
											<h5 class="card-title">1. Apakah anak mendapat vaksin lain kurang dari 1 bulan sebelumnya? </h5>
											<fieldset class="position-relative form-group">
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[vaksin_1]" value="1" type="radio" class="form-check-input"> Ya
													</label>
												</div>
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[vaksin_1]" value="0" type="radio" class="form-check-input"> Tidak
													</label>
												</div>
											</fieldset>
											<h5 class="card-title">2. Apakah anak pernah sakit COVID-19 kurang dari 3 bulan?</h5>
											<fieldset class="position-relative form-group">
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[positif<3bulan]" value="1" type="radio" class="form-check-input"> Ya
													</label>
												</div>
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[positif<3bulan]" value="0" type="radio" class="form-check-input"> Tidak
													</label>
												</div>
											</fieldset>
											<h5 class="card-title">3. Apakah dalam 7 hari terakhir anak menderita demam atau batuk pilek atau nyeri menelan atau muntah atau diare?</h5>
											<fieldset class="position-relative form-group">
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[demam]" value="1" type="radio" class="form-check-input"> Ya
													</label>
												</div>
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[demam]" value="0" type="radio" class="form-check-input"> Tidak
													</label>
												</div>
											</fieldset>
											<h5 class="card-title">4. Apakah dalam 7 hari terakhir anak perlu perawatan di RS atau menderita kedaruratan medis seperti sesak napas, kejang, tidak sadar, berdebar - debar, pendarahan, hipertensi, tremor hebat?</h5>
											<fieldset class="position-relative form-group">
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[dirawat]" value="1" type="radio" class="form-check-input"> Ya
													</label>
												</div>
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[dirawat]" value="0" type="radio" class="form-check-input"> Tidak
													</label>
												</div>
											</fieldset>
											<h5 class="card-title">5. Apakah anda sedang menderita gangguan imunitas (hiperimun; auto imun, alergi berat dan defisiensi imun, gizi buruk, HIV berat, keganasan?</h5>
											<fieldset class="position-relative form-group">
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[gangguan_imun]" value="1" type="radio" class="form-check-input"> Ya
													</label>
												</div>
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[gangguan_imun]" value="0" type="radio" class="form-check-input"> Tidak
													</label>
												</div>
											</fieldset>
											<h5 class="card-title">6. Apakah saat ini anak sedang menjalani pengobatan imunosupresan jangka pangjang (steroid lebih dari 2 minggu sitostatika) ?</h5>
											<fieldset class="position-relative form-group">
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[imunosupresan]" value="1" type="radio" class="form-check-input"> Ya
													</label>
												</div>
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[imunosupresan]" value="0" type="radio" class="form-check-input"> Tidak
													</label>
												</div>
											</fieldset>
											<h5 class="card-title">7. Apakah anak memepunyai riwayat alergi berat seperti sesak napas, bengkak, urtikaria di seluruh tubuh atau gejala syok anafilaksis (tidak sadar) setelah vaksinasi sebelumnya?</h5>
											<fieldset class="position-relative form-group">
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[alergi_berat]" value="1" type="radio" class="form-check-input"> Ya
													</label>
												</div>
												<div class="position-relative form-check">
													<label class="form-check-label">
														<input name="ans[alergi_berat]" value="0" type="radio" class="form-check-input"> Tidak
													</label>
												</div>
											</fieldset>
											<button class="btn btn-primary mb-3">Submit</button>
										</form>
										<!--  -->
									</div>
								</div>
							</div>

							<!-- Pertanyaan umum -->
							<div class="tab-pane tabs-animation fade" id="umum" role="tabpanel">
								<div class="row">
										<div class="col-md-12">
											<form action="{{route('dashboard.pendaftaran.post.umum')}}" method="post">
												@csrf
												@if (session('message'))
													<div class="alert alert-success" role="alert">
														{{ session('message') }}
													</div>
												@endif
												@if (session('error'))
													<div class="alert alert-danger" role="alert">
														{{ session('error') }}
													</div>
												@endif
												<div class="position-relative form-group">
													<label for="nik" class="">NIK</label>
													<input name="nik" id="nik" placeholder="3174xxxx" type="text" class="form-control required">
												</div>
												<!-- pertanyaan -->
												<h5 class="card-title">1. Apakah anak pernah sakit COVID-19 kurang dari 3 bulan?</h5>
												<fieldset class="position-relative form-group">
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[positif<3bulan]" value="1" type="radio" class="form-check-input"> Ya
														</label>
													</div>
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[positif<3bulan]" value="0" type="radio" class="form-check-input"> Tidak
														</label>
													</div>
												</fieldset>
												<h5 class="card-title">2. Apakah saat ini anak sedang menjalani pengobatan imunosupresan jangka pangjang (steroid lebih dari 2 minggu sitostatika) ?</h5>
												<fieldset class="position-relative form-group">
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[imunosupresan]" value="1" type="radio" class="form-check-input"> Ya
														</label>
													</div>
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[imunosupresan]" value="0" type="radio" class="form-check-input"> Tidak
														</label>
													</div>
												</fieldset>
												<h5 class="card-title">3. Apakah anak memepunyai riwayat alergi berat seperti sesak napas, bengkak, urtikaria di seluruh tubuh atau gejala syok anafilaksis (tidak sadar) setelah vaksinasi sebelumnya?</h5>
												<fieldset class="position-relative form-group">
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[alergi_berat]" value="1" type="radio" class="form-check-input"> Ya
														</label>
													</div>
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[alergi_berat]" value="0" type="radio" class="form-check-input"> Tidak
														</label>
													</div>
												</fieldset>
												<h5 class="card-title">4. Apakah anda mengidap penyakit autoimun seperti lupus?</h5>
												<fieldset class="position-relative form-group">
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[lupus]" value="1" type="radio" class="form-check-input"> Ya
															</label>
														</div>
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[lupus]" value="0" type="radio" class="form-check-input"> Tidak
															</label>
														</div>
												</fieldset>
												<h5 class="card-title">5. Apakah Anda sedang mendapat pengobatan untuk gangguan pembekuan darah, kelainan darah, defisiensi imun dan penerima produk darah/transfusi?</h5>
												<fieldset class="position-relative form-group">
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[pembekuan_darah]" value="1" type="radio" class="form-check-input"> Ya
															</label>
														</div>
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[pembekuan_darah]" value="0" type="radio" class="form-check-input"> Tidak
															</label>
														</div>
												</fieldset>
												<h5 class="card-title">6. Apakah Anda sering merasa kelelahan?</h5>
												<fieldset class="position-relative form-group">
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[kelelahan]" value="1" type="radio" class="form-check-input"> Ya
															</label>
														</div>
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[kelelahan]" value="0" type="radio" class="form-check-input"> Tidak
															</label>
														</div>
												</fieldset>
												<h5 class="card-title">7. Apakah Anda memiliki penyakit (Hipertensi, diabetes, kanker, penyakit paru kronis,  serangan jantung, gagal jantung kongestif, nyeri dada, asma, nyeri sendi, stroke dan penyakit ginjal)?</h5>
												<fieldset class="position-relative form-group">
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[penyakit_berat]" value="1" type="radio" class="form-check-input"> Ya
															</label>
														</div>
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[penyakit_berat]" value="0" type="radio" class="form-check-input"> Tidak
															</label>
														</div>
												</fieldset>
												<h5 class="card-title">8. Apakah Anda mengalami penurunan berat badan yang bermakna dalam setahun terakhir?</h5>
												<fieldset class="position-relative form-group">
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[penurunan_berat]" value="1" type="radio" class="form-check-input"> Ya
															</label>
														</div>
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[penurunan_berat]" value="0" type="radio" class="form-check-input"> Tidak
															</label>
														</div>
												</fieldset>
												<button class="btn btn-primary mb-3">Submit</button>
											</form>
												<!--  -->
										</div>
								</div>
							</div>

                <!-- Pertanyaan Ibu hamil -->
							<div class="tab-pane tabs-animation fade" id="ibu-hamil" role="tabpanel">
								<div class="row">
										<div class="col-md-12">
											<form action="{{route('dashboard.pendaftaran.post.hamil')}}" method="post">
												@csrf
												@if (session('message'))
													<div class="alert alert-success" role="alert">
														{{ session('message') }}
													</div>
												@endif
												@if (session('error'))
													<div class="alert alert-danger" role="alert">
														{{ session('error') }}
													</div>
												@endif
												<div class="position-relative form-group">
													<label for="nik" class="">NIK</label>
													<input name="nik" id="nik" placeholder="3174xxxx" type="text" class="form-control required">
												</div>
												<!-- pertanyaan -->
												<h5 class="card-title">1. Apakah anak pernah sakit COVID-19 kurang dari 3 bulan?</h5>
												<fieldset class="position-relative form-group">
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[positif<3bulan]" value="1" type="radio" class="form-check-input"> Ya
														</label>
													</div>
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[positif<3bulan]" value="0" type="radio" class="form-check-input"> Tidak
														</label>
													</div>
												</fieldset>
												<h5 class="card-title">2. Apakah Anda sedang mendapat pengobatan untuk gangguan pembekuan darah, kelainan darah, defisiensi imun dan penerima produk darah/transfusi?</h5>
												<fieldset class="position-relative form-group">
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[pembekuan_darah]" value="1" type="radio" class="form-check-input"> Ya
															</label>
														</div>
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[pembekuan_darah]" value="0" type="radio" class="form-check-input"> Tidak
															</label>
														</div>
												</fieldset>
												<h5 class="card-title">3. Apakah anda mengidap penyakit autoimun seperti lupus?</h5>
												<fieldset class="position-relative form-group">
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[lupus]" value="1" type="radio" class="form-check-input"> Ya
															</label>
														</div>
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[lupus]" value="0" type="radio" class="form-check-input"> Tidak
															</label>
														</div>
												</fieldset>
												<h5 class="card-title">4. Apakah saat ini anak sedang menjalani pengobatan imunosupresan jangka pangjang (steroid lebih dari 2 minggu sitostatika) ?</h5>
												<fieldset class="position-relative form-group">
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[imunosupresan]" value="1" type="radio" class="form-check-input"> Ya
														</label>
													</div>
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[imunosupresan]" value="0" type="radio" class="form-check-input"> Tidak
														</label>
													</div>
												</fieldset>
												<h5 class="card-title">5. Apakah anak memepunyai riwayat alergi berat seperti sesak napas, bengkak, urtikaria di seluruh tubuh atau gejala syok anafilaksis (tidak sadar) setelah vaksinasi sebelumnya?</h5>
												<fieldset class="position-relative form-group">
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[alergi_berat]" value="1" type="radio" class="form-check-input"> Ya
														</label>
													</div>
													<div class="position-relative form-check">
														<label class="form-check-label">
															<input name="ans[alergi_berat]" value="0" type="radio" class="form-check-input"> Tidak
														</label>
													</div>
												</fieldset>
												<h5 class="card-title">6. Apakah usia kehamilan Anda kurang dari 13 minggu?</h5>
												<fieldset class="position-relative form-group">
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[usia_kehamilan]" value="1" type="radio" class="form-check-input"> Ya
															</label>
														</div>
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[usia_kehamilan]" value="0" type="radio" class="form-check-input"> Tidak
															</label>
														</div>
												</fieldset>
												<h5 class="card-title">7.	Apakah ibu memiliki keluhan dan tanda preeklampsia, seperti: Kaki bengkak, Sakit kepala, Nyeri ulu hati, Pandangan kabur?</h5>
												<fieldset class="position-relative form-group">
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[preeklampsia]" value="1" type="radio" class="form-check-input"> Ya
															</label>
														</div>
														<div class="position-relative form-check">
															<label class="form-check-label">
																<input name="ans[preeklampsia]" value="0" type="radio" class="form-check-input"> Tidak
															</label>
														</div>
												</fieldset>
												<!--  -->
												<button class="btn btn-primary mb-3">Submit</button>
											</form>
										</div>
								</div>
							</div>
            </div>
          <!-- End Content -->
					<!-- Footer -->
					@include('dashboard.includes.footer')
        </div>
      </div>
    </div>
  </div>
  <!-- Script -->
  @include('dashboard.includes.script')
</body>
</html>
