$(function(){

    $('.tombolTambahData').on('click', function(){

        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/tambah');

    });

    $('.tampilModalUbah').on('click', function() {
        
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        // console.log(id);

        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                console.log(data)
                // $('#nim').val(data.nim);
                // $('#nama').val(data.nama);
                // $('#email').val(data.email);
                // $('#jurusan').val(data.jurusan);
                // $('#id').val(data.id);
            }
        });

    });

});
