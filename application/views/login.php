<body class="bg-secondary">
<div class="d-flex flex-column flex-md-row  p-3 px-md-4 mb-3 bg-info border-bottom shadow-sm shadow-sm shadow-lg p-3 mb-4">
	<h3 class="my-2 m-md-auto p-4 font-weight-normal text-white shadow-sm shadow-lg p-3 mb-4 rounded-pill">
	Inventory Novrian Desril Store
	</h3>
</div>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-9">
			<div class="card bg-light my-5 shadow">
				<div class="card-header text-center h3 bg-dark text-white">Inventory Barang</div>
                <div class="card-header text-center h5 bg-dark text-white">NOVRIAN-DESRIL</div>
				<div class="card-body bg-light">
					
					<p class="card-text text-center font-weight-bold">LOGIN BILA ADA NOVRIAN ATAU DESRIL</p>
                    <p class="card-text text-center font-weight-bold">-akun hanya dimiliki oleh Novrian & Desril!-</p>
					<?php if ($this->session->flashdata('salah_login')):?>
						<div class="alert alert-danger text-center" role="alert">
							Username atau Password salah!
						</div>
					<?php elseif ($this->session->flashdata('belum_login')):?>
						<div class="alert alert-danger text-center" role="alert">
							Anda Belum Login!
			            </div>
					<?php endif ?>
					<form action="" method="post">
						<div class="form-group h4 ">
							<label for="username">Username</label>
							<input type="text" class="form-control font-weight-bold" name="username" id="username" 
							placeholder="Masukan username" autocomplete="off" 
							required oninvalid="this.setCustomValidity('Masukkan USERNAME!')" oninput="setCustomValidity('')">
						</div>
						<div class="form-group h4">
							<label for="password">Password</label>
							<input type="password" class="form-control font-weight-bold" name="password" id="password" 
							placeholder="Masukan password" autocomplete="off" 
							required oninvalid="this.setCustomValidity('Masukkan PASSWORD!')" oninput="setCustomValidity('')">
						</div>
						<div class="text-center">
							<button type="submit"
						    class="btn btn-outline-info text-center px-5 py-4 rounded-pill font-weight-bold shadow"
							name="login"><h4><b>Login</b></h4></button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>