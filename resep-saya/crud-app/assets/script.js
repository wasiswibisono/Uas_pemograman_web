console.log("Script berhasil dimuat!");

$(document).ready(function () {
    // Data kuliner statis (contoh)
    const dataKuliner = [
        { no: 1, nama: "Nasi Goreng", harga: "Rp 20.000", rating: 4.5, deskripsi: "Nasi goreng khas Indonesia." },
        { no: 2, nama: "Sate Ayam", harga: "Rp 15.000", rating: 4.8, deskripsi: "Sate ayam dengan bumbu kacang." },
        { no: 3, nama: "Bakso", harga: "Rp 12.000", rating: 4.7, deskripsi: "Bakso dengan kuah gurih." }
    ];

    // Inisialisasi DataTable
    const table = $('#crudTable').DataTable();

    // Menambahkan data ke tabel dari array
    function loadTableData() {
        table.clear(); // Bersihkan tabel sebelum menambahkan data baru
        dataKuliner.forEach(item => {
            table.row.add([
                item.no,
                item.nama,
                item.harga,
                item.rating,
                item.deskripsi,
                `
                <button class="btn btn-warning btn-sm btn-edit" data-id="${item.no}">Edit</button>
                <button class="btn btn-danger btn-sm btn-delete" data-id="${item.no}">Hapus</button>
                `
            ]);
        });
        table.draw();
    }

    // Load data awal
    loadTableData();

    // Tambah Data Baru
    $('#crudForm').on('submit', function (e) {
        e.preventDefault();
        const nama = $('#nama').val();
        const lokasi = $('#lokasi').val();
        const rating = $('#rating').val();
        const harga = 'Rp -'; // Harga default (dapat ditambahkan input field harga)
        const deskripsi = lokasi;
        const no = dataKuliner.length + 1;

        // Tambahkan data baru ke array
        dataKuliner.push({ no, nama, harga, rating, deskripsi });

        // Reload tabel
        loadTableData();

        // Reset form dan tutup modal
        $('#crudForm')[0].reset();
        $('#crudModal').modal('hide');
    });

    // Tombol Tambah Kuliner
    $('#addRecordBtn').on('click', function () {
        $('#crudForm')[0].reset();
        $('#crudModal').modal('show');
    });

    // Edit Data
    $('#crudTable').on('click', '.btn-edit', function () {
        const id = $(this).data('id');
        const item = dataKuliner.find(d => d.no === id);

        if (item) {
            $('#id').val(item.no);
            $('#nama').val(item.nama);
            $('#lokasi').val(item.deskripsi);
            $('#rating').val(item.rating);
            $('#crudModal').modal('show');
        }
    });

    // Hapus Data
    $('#crudTable').on('click', '.btn-delete', function () {
        const id = $(this).data('id');
        const index = dataKuliner.findIndex(d => d.no === id);

        if (index !== -1) {
            dataKuliner.splice(index, 1); // Hapus data dari array
            loadTableData(); // Reload tabel
        }
    });
});
