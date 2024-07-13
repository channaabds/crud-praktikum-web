<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>  
    <div class="container-xl card card-body mt-2 shadow-sm bg-body-tertiary rounded" style="border-radius: 20px;">
        <div class="row">
            <div class="col">
                <h4>Manajemen > Mata Kuliah > <span style="color: #12baa9"> Data </span></h4>
            </div>
            <div class="col text-end">
                <a href="kelola.php" type="button" class="btn btn-success" style="background-color: #124F4C;">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>

    <div class="container-xl card card-body shadow-sm p-1 pt-5 mt-2 mb-5 bg-body-tertiary rounded">
        <form method="POST" action="<?= base_url('proses_add_matakuliah') ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="mataKuliah" class="form-label"><b>Mata Kuliah</b></label>
                        <input type="text" name="matakuliah" class="form-control" id="mataKuliah" placeholder="Masukkan Mata Kuliah yang Anda ambil">
                    </div>
                    <div class="col-md-6">
                        <label for="jam" class="form-label"><b>Jam</b></label>
                        <input type="time" name="jam" class="form-control" id="jam">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <label for="semester" class="form-label"><b>Semester</b></label>
                        <input type="text" name="semester" class="form-control" id="semester" placeholder="Masukkan semester Anda saat ini">
                    </div>
                    <div class="col-md-4">
                        <label for="hari" class="form-label"><b>Hari</b></label>
                        <input type="text" name="hari" class="form-control" id="hari">
                    </div>
                    <div class="col-md-4">
                        <label for="ruang" class="form-label"><b>Ruang</b></label>
                        <input type="text" name="ruang" class="form-control" id="ruang">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <center>
                            <?php if (isset($_GET['ubah'])) : ?>
                                <button style="background-color: #12BAA9;" type="submit" name="aksi" value="edit" class="btn">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    Simpan Perubahan
                                </button>
                            <?php else : ?>
                                <button style="background-color: #12BAA9; color: white;" type="submit" name="aksi" value="add" class="btn">
                                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                    Kirim
                                </button>
                            <?php endif; ?>
                        </center>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
