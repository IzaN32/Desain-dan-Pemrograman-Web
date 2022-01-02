<?php
    //memanggil file koneksi 
    include 'connection.php';
    //array untuk menampilkan kelas
    $kelas = ['SE03A', 'SE03B'];
    //query ambil data dari table tb_data
    $sql = "SELECT * FROM tb_data";
    //untuk menjalankan query 
    $data = $conn->query($sql);    
    
    //menampilkan jumlah data pada table
    $total = sizeof($data->fetch_all());

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CRUD PHP</title>
  </head>
  <body>
   

    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <form action="simpan.php" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" class="form-control" required>
                            <!-- menampilkan array kelas  -->
                            <?php foreach($kelas as $kls) : ?>
                            <option value="<?= $kls; ?>"><?= $kls; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Data Mahasiswa</span> <p class="text-right"><?= $total; ?></p>
                    
                </h4>
                
                <!-- melopping data & memanggil data yang ada pada table -->
                <?php foreach($data as $dt) : ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- memanggil kolom nama -->
                                <h4><?= $dt['nama']; ?></h4>
                            </div>
                            <div class="col-md-6">
                                <!-- memanggil kolom kelas -->
                                <p class="text-right"><?= $dt['kelas']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- memanggil kolom alamat -->
                                <p><?= $dt['alamat']; ?></p>                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
               <!-- selesai memanggil & melopping -->
            </div>
        </div>
    </div>            
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>