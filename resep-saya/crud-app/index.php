<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner App</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .table-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #28a745;
            color: #fff;
        }
    </style>
</head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif; /* Menggunakan font Poppins */
    }
</style>

<body>
<style>
    body {
        background-image: url('assets/backend/backround.jpg'); /* Ganti dengan URL gambar Anda */
        background-size: cover; /* Agar gambar menyesuaikan layar */
        background-position: center; /* Pusatkan gambar */
        background-repeat: no-repeat; /* Hindari pengulangan gambar */
    }
</style>



    <div class="container my-5">
        <h1 class="text-center"><i class="fas fa-utensils">KulinerKu</h1>
        <div class="table-container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5>Daftar Kuliner</h5>
                <button class="btn btn-custom" id="addRecordBtn">Tambah Kuliner</button>
            </div>
            <table id="crudTable" class="table table-striped">
                <thead class="table-dark">
    
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Rating</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Aksi</th>
                        <tbody>
                

    <tr>
        <td>1</td>
        <td>Nasi Goreng</td>
        <td>Rp 30.000</td>
        <td>10</td>
        <td>Nasi goreng merupakan sajian nasi yang digoreng dalam sebuah wajan atau penggorengan yang menghasilkan cita rasa berbeda karena dicampur dengan bumbu-bumbu seperti garam, bawang putih, bawang merah, merica, rempah-rempah tertentu dan kecap manis</td>
        <td>
        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
        <a href="proses.php?hapus=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash"></i> Hapus</a>
        </td>
    </tr>
</tbody>

<tbody>
    <tr>
        <td>2</td>
        <td>Ketoprak</td>
        <td>Rp 19.000</td>
        <td>10</td>
        <td>Ketoprak merupakan salah satu kuliner khas Betawi yang telah menjadi bagian tak terpisahkan dari kekayaan gastronomi Indonesia. Hidangan yang satu ini memiliki cita rasa yang unik, perpaduan antara gurih, manis,sedikit pedas</td>
        <td>
        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
        <a href="proses.php?hapus=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash"></i> Hapus</a>
        </td>
    </tr>
</tbody>

<tbody>
    <tr>
        <td>3</td>
        <td>Bakso</td>
        <td>Rp 40.000</td>
        <td>10</td>
        <td>Bakso umumnya dibuat dari campuran daging sapi giling dan tepung tapioka, tetapi ada juga bakso yang terbuat dari daging ayam, babi, ikan, udang, kambing, bahkan daging kerbau.</td>
        <td>
        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
        <a href="proses.php?hapus=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash"></i> Hapus</a>
        <tbody>
    <tr>
        <td>4</td>
        <td>Sate</td>
        <td>Rp 25.000</td>
        <td>10</td>
        <td>makanan yang terbuat dari daging yang dipotong kecil-kecil dan ditusuk sedemikian rupa dengan tusukan lidi tulang daun kelapa atau bambu</td>
        <td>            

        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
        <a href="proses.php?hapus=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash"></i> Hapus</a>
      
    </tr>

</tbody>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <form id="crudForm">
    <input type="hidden" id="id">
    <div class="form-floating mb-3">
        <input type="text" id="nama" class="form-control" placeholder="Nama Kuliner" required>
        <label for="nama">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" id="harga" class="form-control" placeholder="Harga" required>
        <label for="harga">Harga</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" id="rating" class="form-control" placeholder="Rating (1-10)" min="1" max="10" step="1" required>
        <label for="rating">Rating</label>
    </div>
    <div class="form-floating mb-3">
        <textarea id="deskripsi" class="form-control" placeholder="Deskripsi Kuliner" required></textarea>
        <label for="deskripsi">Deskripsi</label>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
     <!-- DataTables dan Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
    // Inisialisasi DataTable
    new DataTable('#myTable', {
            responsive: true,
            paging: true,
            searching: true,
            lengthChange: false,
            ordering: true,
            order: [[1, 'asc']] // Mengurutkan berdasarkan kolom nama makanan
        });
</body>
</html>
