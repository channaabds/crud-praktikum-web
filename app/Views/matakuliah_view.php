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
    
    <style>
        .empty-data-msg {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px; /* set the height of the message box */
        }
    </style>
</head>
<body>  
    <div class="container-xl card card-body mb-3 mt-2 shadow-sm bg-body-tertiary rounded" style="border-radius: 20px;">
        <div class="row">
            <div class="col">
                <h4>Manajemen > <span style="color: #12baa9"> Mata Kuliah </span></h4>
            </div>
            <div class="col text-end">
                <a href="kelola.php" type="button" class="btn btn-success" style="background-color: #124F4C;">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>

    <div class="container-xl card card-body shadow-sm p-1 pb-2 mt-2 mb-5 bg-body-tertiary rounded" style="border-radius: 20px">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Kuliah</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Ruang</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($all_data_matakuliah)) : ?>
                    <tr>
                        <td colspan="7">
                            <div class="empty-data-msg text-center">
                                -Data Kosong-
                            </div>
                        </td>
                    </tr>
                <?php else : ?>
                    <?php foreach($all_data_matakuliah as $index => $mata_kuliah): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $mata_kuliah->matakuliah ?></td>
                            <td><?= $mata_kuliah->hari ?></td>
                            <td><?= $mata_kuliah->jam ?></td>
                            <td><?= $mata_kuliah->ruang ?></td>
                            <td><?= $mata_kuliah->semester ?></td>
                            <td>
                                <a href="<?= base_url('edit_data_matakuliah') . '/' .$mata_kuliah->id_matakuliah ?>" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i> 
                                </a>
                                <a href="<?= base_url('delete_data_matakuliah') . '/' .$mata_kuliah->id_matakuliah ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="fa fa-trash"></i> 
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>  
                <?php endif; ?>
            </tbody>
        </table>
        <div>
        <a href="<?= base_url('add_data_matakuliah') ?>" type="button" class="btn btn-success" style="background-color: #12baa9;">
    <i class="fa fa-plus"></i>
    Tambahkan Data
</a>

        </div>
    </div>
</body>
</html>
