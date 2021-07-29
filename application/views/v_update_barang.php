<!DOCTYPE html>
<html>
<body class="bg-secondary">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-info border-bottom  shadow-lg p-3 mb-4">
  
  <h3 class="my-0 mr-md-auto font-weight-normal text-white shadow p-3 mb-3 rounded-pill">Update Barang Novrian Desril Store</h3>
  
</div>
<div class="container">
<div class="card p-1 mb-3 bg-dark shadow">
    <h2 class="text-center pt-3 pb-3 shadow rounded bg-secondary text-white">
    Update Stok Barang : <u><b>ID <?php echo $ambil->ID; ?></b></u></h2>
    <form action="" method="post" >
       
        <input type="hidden" name="ID"  value="<?php echo $ambil->ID; ?>" />
       
        <div class="form-group text-white">
            <label class="h4">Nama Barang:</label>
            <input type="text" name="Nama_Barang" class="form-control font-weight-bold" 
            required oninvalid="this.setCustomValidity('Masukkan Nama Barang!')" oninput="setCustomValidity('')" 
            value="<?php echo $ambil->Nama_Barang; ?>" placeholder="Nama Barang" />
        </div>

        <div class="form-group text-white">
            <label class="h4">Jenis Barang:</label>
            <input type="text" name="Jenis_Barang" class="form-control font-weight-bold" 
            required oninvalid="this.setCustomValidity('Masukkan Jenis Barang!')" oninput="setCustomValidity('')" 
            value="<?php echo $ambil->Jenis_Barang; ?>" placeholder="Jenis Barang" />
        </div>
        
        <div class="form-group text-white">
            <label class="h4">Jumlah Stok:</label>
            <input type="number" name="Jumlah_Stok" class="form-control font-weight-bold" 
            required oninvalid="this.setCustomValidity('Masukkan Jumlah Stok Barang!')" 
            oninput="setCustomValidity('')" value="<?php echo $ambil->Jumlah_Stok; ?>" placeholder="Jumlah Stok" />
        </div>
        
        <div class="form-group text-white">
            <label class="h4">Satuan:</label>
            <input type="text" name="Satuan" class="form-control font-weight-bold" 
            required oninvalid="this.setCustomValidity('Masukkan Satuan!')" 
            oninput="setCustomValidity('')" value="<?php echo $ambil->Satuan; ?>" placeholder="Satuan" />
        </div>
        </div>
        <button type="submit" class="btn btn-outline-success btn-lg rounded-pill font-weight-bold shadow" 
        name="update">Update</button>
        <a href="<?php echo base_url()?>stokbarang/index" 
        class="btn btn-outline-danger btn-lg rounded-pill font-weight-bold shadow"role="button">Batal</a>
    </form>
</div>
</body>
</html>