
<body class="bg-secondary overflow-auto">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-info border-bottom shadow-lg p-3 mb-4 fixed-top">
  
  <h3 class="my-0 mr-md-auto font-weight-normal text-white shadow p-3 mb-3 rounded-pill">Inventory Novrian Desril Store</h3>

  <a class="btn btn-outline-secondary rounded-pill shadow text-white" href="<?=base_url('stokbarang/logout')?>"onclick="return confirm
    ('Anda Akan Keluar, Apakah Anda yakin?')">Sign Out
  </a>
</div>
<div class="pricing-header px-3 py-1 pt-md-4 pb-md-4 mx-auto text-center">
  <h1 class="display-5 pt-1 border-0 shadow p-4 mb-3 text-white-50 shadow rounded-circle">Stok Barang</h1>
  <?php if ($this->session->flashdata('pesan') == "Ditambah"):?>
						<div class="alert alert-success font-weight-bold rounded-pill shadow" role="alert">
							DATA BERHASIL DITAMBAH! 
						</div>
            <?php elseif ($this->session->flashdata('pesan') == "Diubah"):?>
						<div class="alert alert-warning font-weight-bold rounded-pill shadow" role="alert">
							DATA BERHASIL DIPERBAHARUI! 
						</div>
            <?php elseif ($this->session->flashdata('pesan') == "Dihapus"):?>
						<div class="alert alert-danger font-weight-bold rounded-pill shadow" role="alert">
							DATA BERHASIL DIHAPUS! 
						</div>
            <?php endif?>
</div>

    <div class='container'>
    <h2 class="text-center pt-4 pb-4 p-3 mb-5 mr-0 text-white shadow rounded-circle bg-secondary">Tambah Stok Barang</h2>
    <div class="card p-md-1 mb-3 mr-0 bg-dark shadow">
        <table class="table  table-borderedless bg-light table-striped table-hover m-md-auto">
            <thead class="thead-light align-middle h5 shadow-lg p-3 mb-5">
                <tr>
                    <th class="align-middle  text-center bg-dark text-light"> No</th>
                    <th class="align-middle  text-center bg-dark text-light">ID</th> 
                    <th class="align-middle  text-center bg-dark text-light">Nama Barang</th> 
                    <th class="align-middle  text-center bg-dark text-light">Jenis Barang</th> 
                    <th class="align-middle  text-center bg-dark text-light">Jumlah Stok</th> 
                    <th class="align-middle  text-center bg-dark text-light">Satuan</th> 
                    <th colspan='2' class="align-middle text-center bg-dark text-light">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($hasil as $item):
                ?>
                <tr class="h5">
                    <th class="align-middle text-center"><?php echo $no++;?></th>
                    <td class="align-middle text-center shadow rounded"><?php echo $item->ID;?></td>
                    <td class="align-middle text-center"><?php echo $item->Nama_Barang;?></td>
                    <td class="align-middle text-center"><?php echo $item->Jenis_Barang;?></td>
                    <td class="align-middle text-center"><?php echo $item->Jumlah_Stok;?></td>
                    <td class="align-middle text-center"><?php echo $item->Satuan;?></td>
                    <td class="align-middle text-center">  <a href="<?php echo base_url()?>stokbarang/update/<?php echo $item->ID; ?>" 
                      class="btn btn-outline-warning font-weight-bold rounded-pill px-1 py-3 shadow" role="button">Update</a>
                    </td>
                    <td class="align-middle text-center">  <a href="<?php echo base_url()?>stokbarang/hapus/<?php echo $item->ID; ?>" 
                      onclick="return confirm('Data akan dihapus, Anda yakin?')" class="btn btn-outline-danger font-weight-bold rounded-pill px-1 py-3 shadow" 
                      role="button">Delete</a>
                    </td>
                </tr>
                <?php
                endforeach?>
            </tbody>
        </table>
            
    </div>
        <a href="<?php echo base_url()?>stokbarang/tambah" class="btn btn-outline-info btn-lg font-weight-bold rounded-pill px-5 py-3 p-2 shadow mb-5" 
        role="button">Tambah Data</a>
        
    </div>
    
</body>
</html>