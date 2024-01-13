<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('formDaftar').addEventListener('submit', function (event) {
            event.preventDefault();
            
            // Lakukan logika formulir, lalu tampilkan SweetAlert
            Swal.fire({
                title: 'Sukses!',
                text: 'Pendaftaran berhasil disimpan.',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });
    });
</script>
