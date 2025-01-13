data.forEach((item, index) => {
    $('#crudTable').DataTable().row.add([
        index + 1,
        item.nama,
        item.lokasi,
        item.rating,
        item.deskripsi,
        `<img src="uploads/${item.gambar}" class="img-thumbnail" style="width: 100px;">`,
        `
        <button class="btn btn-warning btn-sm edit-btn" 
                data-id="${item.id}"
                data-nama="${item.nama}" 
                data-lokasi="${item.lokasi}" 
                data-rating="${item.rating}" 
                data-deskripsi="${item.deskripsi}" 
                data-gambar="${item.gambar}">
            Edit
        </button>
        <button class="btn btn-danger btn-sm delete-btn" data-id="${item.id}">
            Delete
        </button>
        `
    ]);
});
