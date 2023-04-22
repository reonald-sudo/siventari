$(document).ready(function () {

    $('#idPengajuan').change(function () {
        const idPengajuan = $("#idPengajuan").val();

        $.ajax({
            url: 'http://localhost/wahyu/public/KepalaDinas/MenampilkanBarang', 
            data: {
                idPengajuan: idPengajuan
            },
            method: 'post',
            dataType: 'json',

            success: function (data) {
                $('#barang').val(data.pengajuan_b);
                // console.log(data.barang);
            }
        });
    });

});

// $(document).ready(function () {

    
//         // const idBarang = $("#idBarang").val();

//         // $.ajax({
//         //     url: 'http://localhost/wahyu/public/KepalaDinas/MenampilkanBarangMasuk', 
//         //     data: {
//         //         idBarang: idBarang
//         //     },
//         //     method: 'post',
//         //     dataType: 'json',

//         //     success: function (data) {
//         //         $('#barangMasuk').val(data.barang_b);
//         //         // console.log(data.barang);
//         //     }
//         // });

//         alert('ok');
//     });
// });

$(document).ready(function () {

    $('#idPengajuan').change(function () {
        const idPengajuan = $("#idPengajuan").val();

        $.ajax({
            url: 'http://localhost/wahyu/public/KepalaDinas/MenampilkanAlokasi', 
            data: {
                idPengajuan: idPengajuan
            },
            method: 'post',
            dataType: 'json',

            success: function (data) {
                $('#alokasi').val(data.alokasi_b);
                // console.log(data.barang);
            }
        });
    });
});