<!DOCTYPE html>
<html>

<body class="bg-secondary ">

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-info border-bottom shadow-sm shadow-lg p-3 mb-4 ">

<h3 class="my-0 mr-md-auto font-weight-normal text-white shadow p-3 mb-3 rounded-pill">Tambah Barang Novrian Desril Store</h3>

</div>
<div class="container">
<div class="card p-1 mb-3 bg-dark shadow">
    <h2 class="text-center pt-3 pb-3 shadow p-4 mb-3 text-white shadow rounded bg-secondary">Tambah Stok Barang</h2>
    <form action="" method="post">
        <div class="form-group">
            <label class="h4 text-white">ID:</label>
            <input type="text" name="ID" id="ID" class="form-control font-weight-bold" 
            placeholder="ID Barang (contoh: 12345)" maxlength="5" 
            required oninvalid="this.setCustomValidity('Masukkan ID Barang!')" oninput="setCustomValidity('')"/>

        </div>
        <div class="form-group">
            <label class="h4 text-white">Nama Barang:</label>
            <input type="text" name="Nama_Barang"  class="form-control font-weight-bold" 
            placeholder="Nama Barang (contoh: Beras, Gula, dll )"  
            required oninvalid="this.setCustomValidity('Masukkan Nama Barang!')" oninput="setCustomValidity('')"/>
            
        </div>
        <div class="form-group">
            <label class="h4 text-white">Jenis Barang:</label>
            <input type="text" name="Jenis_Barang"  class="form-control font-weight-bold" 
            placeholder="Jenis Barang (contoh: Makanan, Pokok, dll)"  
            required oninvalid="this.setCustomValidity('Masukkan Jenis Barang!')" oninput="setCustomValidity('')"/>
            
        </div>
        <div class="form-group">
            <label class="h4 text-white">Jumlah Stok:</label>
            <input type="number" name="Jumlah_Stok" class="form-control font-weight-bold" 
            placeholder="Jumlah Stok Barang (contoh: 1, 12, 30, dll)"  
            required oninvalid="this.setCustomValidity('Masukkan Jumlah Stok Barang')" oninput="setCustomValidity('')"/>
           
        </div>

        <div class="form-group">
            <label class="h4 text-white">Satuan:</label>
            <input type="text" name="Satuan"  class="form-control font-weight-bold" 
            placeholder="Satuan (contoh: Kotak, kg, liter, dll)"  
            required oninvalid="this.setCustomValidity('Masukkan Satuan!')" oninput="setCustomValidity('')"/>
            
        </div>
        </div>
        

        <button type="submit" class="btn btn-outline-success rounded-pill btn-lg shadow" name="tambah">Tambah</button>
        <a href="<?php echo base_url()?>stokbarang/index" class="btn btn-outline-danger rounded-pill btn-lg shadow"
        role="button">Batal</a>

    </form>
</div>
</body>
</html>