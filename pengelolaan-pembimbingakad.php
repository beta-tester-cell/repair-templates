<?php include('header.php') ?>

<div class="content">

	<div class="container">

		<div class="form grid-custom-card grid-gap-1 py-1">

			<form>
				<div class="card">
					<div class="card-header d-flex flex-space-between">
						<h6>Form Input Pembimbing Akademik</h6>
					</div>

					<div class="my-1">
						<label><b>Tahun Akadmeik</b></label>
						<input class="width-100" type="text" value='2020/2021' placeholder="Tahun Akademik">
					</div>

					<div class="my-1">
						<label><b>Kode Pembimbing Akademik</b></label>
						<input class="width-100" type="text" value='20PA01' placeholder="Kode Pembimbing Akademik">
					</div>

					<div class="my-1">
						<label><b>Nama Pembimbing Akademik</b></label>
						<input class="width-100" type="text" value="Rakhmat SH" placeholder="Nama Pembimbing Akademik">
					</div>

					<div class="py-1">
						<a class="btn btn-link modal-button text-primary" data-toggle="modal" data-target="#formPimbingakad">
							<span>List Mahasiswa  <i class="fa fa-plus"></i></span>
						</a>
						<div class="table-responsive">
							<table class="basic-table display-pa">
								<thead>
									<tr>
										<th class="align-left">No</th>
										<th class="align-left">Id Mhs</th>
										<th class="align-left">NIM</th>
										<th class="align-left">Nama Mahasiswa</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>20121</td>
										<td>200101022</td>
										<td>Billar</td>
									</tr>
									<tr>
										<td>2</td>
										<td>20122</td>
										<td>20022022</td>
										<td>Malik</td>
									</tr>
									<tr>
										<td>3</td>
										<td>20123</td>
										<td>200111022</td>
										<td>Rizki</td>
									</tr>
									<tr>
										<td>4</td>
										<td>20124</td>
										<td>2001250022</td>
										<td>Adam</td>
									</tr>
									<tr>
										<td>5</td>
										<td>20125</td>
										<td>2001510022</td>
										<td>Hawa</td>
									</tr>
									<tr>
										<td>6</td>
										<td>20126</td>
										<td>2001310022</td>
										<td>Rafaela</td>
									</tr>
								</tbody>
							</table>
						</div>
						<button type='submit' class="btn btn-link btn-secondary  px-20">Save</button>
					</div>
				</div>
			</form>

			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>List Pembimbing Akademik</h6>
				</div>

				<div class="py-1">
					<div class="table-responsive">
						<table class="basic-table display-pa">
							<thead>
								<tr>
									<th class="align-left">No</th>
									<th class="align-left">Kode</th>
									<th class="align-left">Nama PA</th>
									<th class="align-left">Tahun Akademik</th>
									<th class="align-left">Jumlah Mhs</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>20101</td>
									<td>Rakhnat SH</td>
									<td>2020/2021</td>
									<td>25</td>
									<td>
										<a href="edit-pembimbing.php" class="text-secondary"><i class="fa fa-edit"></i></a>
										<a href="#" class="text-primary"><i class="far fa-eye"></i></a>
										<a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>20102</td>
									<td>Sabrina S.KOM</td>
									<td>2020/2021</td>
									<td>50</td>
									<td>
										<a href="edit-pembimbing.php" class="text-secondary"><i class="fa fa-edit"></i></a>
										<a href="#" class="text-primary"><i class="far fa-eye"></i></a>
										<a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>20103</td>
									<td>Lia Trismaharani</td>
									<td>2020/2021</td>
									<td>25</td>
									<td>
										<a href="edit-pembimbing.php" class="text-secondary"><i class="fa fa-edit"></i></a>
										<a href="#" class="text-primary"><i class="far fa-eye"></i></a>
										<a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td>20104</td>
									<td>Saefuddin</td>
									<td>2020/2021</td>
									<td>30</td>
									<td>
										<a href="edit-pembimbing.php" class="text-secondary"><i class="fa fa-edit"></i></a>
										<a href="#" class="text-primary"><i class="far fa-eye"></i></a>
										<a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>


				<div class="modal" id="formPimbingakad" tabindex="-1" aria-labelledby="formPimbingakadLabel" aria-hidden="true">
					<div class="modal-dialog modal-fit-custom">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="formPimbingakadLabel">Tambah Mahasiswa Ploting PA</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form>
								<div class="modal-body">

									<span><b>Filter</b></span>
									<div class="filtering">
										<select name="jurusan" style="width: 150px;" id="jurusan">
											<option value="0">-- Pilih Jurusan --</option>
											<option value="Manajemen Informatik">Manajemen Informatika</option>
											<option value="Administrasi Bisnis">Administrasi Bisnis</option>
											<option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
										</select>
										<select name="tahunakademik" style="width: 150px;" id="tahunakademik">
											<option value="0">-- Pilih Tahun Akademik --</option>
											<option value="2018/2019">2018/2019</option>
											<option value="2019/2020">2019/2020</option>
											<option value="2020/2021">2020/2021</option>
										</select>
										<label class="radio-button"> Check All
											<input type="radio" value="">
											<span class="checkmark"></span>
										</label>

										<label class="radio-button"> Uncheck
											<input type="radio" value="" checked>
											<span class="checkmark"></span>
										</label>
									</div>

									<div class="table-responsive py-2">
										<table id="datatable" class="table-list">
											<thead>
												<tr>
													<th class="align-left">ID Mhs</th>
													<th class="align-left">NIM</th>
													<th class="align-left">Nama Mahasiswa</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="form-inputs form-checking">
															<label class="checkbox">
																<input type="checkbox" name="all" value="5">
																<span class="checkmark"></span>
															</label>
															<label>20125</label>
														</div>
													</td>
													<td>200151022</td>
													<td>Siti Hawa</td>
												</tr>
												<tr>
													<td>
														<div class="form-inputs form-checking">
															<label class="checkbox">
																<input type="checkbox" name="all" value="5">
																<span class="checkmark"></span>
															</label>
															<label>20125</label>
														</div>
													</td>
													<td>200151022</td>
													<td>Saefudin</td>
												</tr>
												<tr>
													<td>
														<div class="form-inputs form-checking">
															<label class="checkbox">
																<input type="checkbox" name="all" value="5">
																<span class="checkmark"></span>
															</label>
															<label>20125</label>
														</div>
													</td>
													<td>200151022</td>
													<td>Munir</td>
												</tbody>
											</table>
										</div>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<?php include('footer-datatable.php') ?>