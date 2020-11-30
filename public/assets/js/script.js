const flashData = $('.flash-data').data('flashdata');

if(flashData == true) {
    Swal({
        title: 'Data Kampus ',
        text: 'Berhasil ' + flashData,
        type: 'success'
    });
}

// var delay = (function () {
//     var timer = 0;
//     return function (callback, ms) {
//         clearTimeout(timer);
//         timer = setTimeout(callback, ms);
//     };
// })();

// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

// $("#nama_kampus").keyup(function () {
//     delay(function () {
//         var nip = $("#nama_kampus").val();
//         $.ajax({
//             url: "{{ route('find.nama_kampus') }}",
//             method:'GET',
//             data:"nama_kampus="+nama_kampus ,
//         }).success(function (data) {
//             var json = data,
//             obj = JSON.parse(json);
//             $('#nama_kampus').val(obj.nama_kampus);
//             $('#akreditasi').val(obj.akreditasi);
//             $('#jenis_kampus').val(obj.jenis_kampus);
//             $('#perignkat_asia').val(obj.perignkat_asia);
//             $('#peringkat_lokal').val(obj.peringkat_lokal);
//             $('#lokasi').val(obj.lokasi);
//         });
//     }, 1000);
// });