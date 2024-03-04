<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/crypto-js.js') }}"></script>
<script src="{{ asset('js/calender-lembur.js') }}"></script>
<script src="{{ asset('js/flowbite.min.js') }}"></script>
@include('jadwal.lembur.req-lembur.setting-jam')
<script type="text/javascript">
    let sttsSubDept = false;
    let dataKaryawan = [];
    let dataSearched = [];
    var itemsPerPage = 10;
    var currentPage = 1;
    var searchText = '';
    var selectedDataIDs = [];
    var idReqOverTimeLast = '';

    const encryptedFromData = localStorage.getItem('encryptedFromData');
    const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
    const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

    var username = decryptedFromData.username;

    $('#labels-range-input').on('input', function () {
        // console.log($(this).val());
        if ($('#labels-range-input').val() === '2') {
            $('#jml-jam-lembur').text('1 Jam');
        } else if ($('#labels-range-input').val() === '3') {
            $('#jml-jam-lembur').text('1.5 Jam');
        } else if ($('#labels-range-input').val() === '4') {
            $('#jml-jam-lembur').text('2 Jam');
        } else if ($('#labels-range-input').val() === '5') {
            $('#jml-jam-lembur').text('2.5 Jam');
        } else if ($('#labels-range-input').val() === '6') {
            $('#jml-jam-lembur').text('3 Jam');
        } else if ($('#labels-range-input').val() === '7') {
            $('#jml-jam-lembur').text('3.5 Jam');
        } else if ($('#labels-range-input').val() === '8') {
            $('#jml-jam-lembur').text('4 Jam');
        }
    });

    $(document).ready(function () {
        $('#btn-req-lembur').click(function (e) {
            e.preventDefault();
            console.log(selectedDataIDs);

            const listDataKaryawan = selectedDataIDs.map((id) => {
                return { "id_karyawan": id.toString() };
            });

            console.log(JSON.stringify(listDataKaryawan));
            console.log(listDataKaryawan);

            const encryptedDateLembur = localStorage.getItem('encryptedDateLembur');
            const decryptedBytesDateLembur = CryptoJS.AES.decrypt(encryptedDateLembur, '{{ env('APP_KEY') }}');
            const decryptedDateLembur = JSON.parse(decryptedBytesDateLembur.toString(CryptoJS.enc.Utf8));

            var id_karyawan = username;
            var tgl_lembur = decryptedDateLembur;
            var jam_lembur;
            var keterangan = $('#alasan-lembur').val();
            var jamMulaiLembur = $('#mulai-lembur').val();
            var jamMulaiLemburInt = jamMulaiLembur.replace(":", "");
            var jamAkhirLembur = $('#akhir-lembur').val();
            var jamAkhirLemburInt = jamAkhirLembur.replace(":", "");
            
            if ($('#labels-range-input').val() === '2') {
                jam_lembur = 1;
                $('#jml-jam-lembur').text('1 jam');
            } else if ($('#labels-range-input').val() === '3') {
                jam_lembur = 1.5;
            } else if ($('#labels-range-input').val() === '4') {
                jam_lembur = 2;
                $('#jml-jam-lembur').text('2 jam');
            } else if ($('#labels-range-input').val() === '5') {
                jam_lembur = 2.5;
                $('#jml-jam-lembur').text('2.5 jam');
            } else if ($('#labels-range-input').val() === '6') {
                jam_lembur = 3;
                $('#jml-jam-lembur').text('3 jam');
            } else if ($('#labels-range-input').val() === '7') {
                jam_lembur = 3.5;
                $('#jml-jam-lembur').text('3.5 jam');
            } else if ($('#labels-range-input').val() === '8') {
                jam_lembur = 4;
                $('#jml-jam-lembur').text('4 jam');
            }

            if ((jamMulaiLembur >= '20:00' && jamMulaiLembur <= '23:00') && (jamAkhirLembur >= '00:00' && jamAkhirLembur <= '00:30')) {
                jamAkhirLembur = '23:59';
                jamAkhirLemburInt = '2330';
                $('#akhir-lembur').val('23:30');
            }

            if(jamAkhirLembur === '23:39') {
                jamAkhirLemburInt = '2330';
            }

            var jmlhJamLembur = parseInt(jamAkhirLemburInt) - parseInt(jamMulaiLemburInt);
            var jmlJamLemburFloat = jmlhJamLembur / 100;

            if(jmlJamLemburFloat === 1.3 || jmlJamLemburFloat === 1.7) {
                jmlJamLemburFloat = 1.5;
            } else if(jmlJamLemburFloat === 2.3 || jmlJamLemburFloat === 2.7) {
                jmlJamLemburFloat = 2.5;
            } else if (jmlJamLemburFloat === 3.3 || jmlJamLemburFloat === 3.7) {
                jmlJamLemburFloat = 3.5;
            }else {
                jmlJamLemburFloat = jmlJamLemburFloat;
            }

            if (!id_karyawan || !tgl_lembur || !jam_lembur || !keterangan ||!jamMulaiLembur ||!jamAkhirLembur || listDataKaryawan.length === 0) {
                Swal.fire({
                    title: 'Oops!',
                    text: 'Harap Isi Semua Form Pengajuan Lembur',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 200,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showConfirmButton: true,
                });
                return;
            }

            if (jam_lembur !== jmlJamLemburFloat){
                Swal.fire({
                    title: 'Oops!',
                    text: 'Jumlah Jam Lembur Tidak Sesuai dengan yang Diinputkan',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 200,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showConfirmButton: true,
                });
                return;
            }

            Swal.fire({
                title: 'Loading!',
                text: 'Proses Pengajuan Lembur',
                timerProgressBar: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                didOpen: () => {
                    Swal.showLoading();
                },
            });

            $.ajax({
                url: '{{ env('APP_SERVICE') }}request_list_overtime',
                type: 'POST',
                data: {
                    id_request_overtime: idReqOverTimeLast,
                    tgl_lembur: tgl_lembur,
                    jam_mulai : jamMulaiLembur,
                    jam_akhir : jamAkhirLembur,
                    jam_lembur: jam_lembur,
                    keterangan: keterangan,
                    pic: username,
                    list_id_karyawan: JSON.stringify(listDataKaryawan)
                },
                success: function (response) {
                    Swal.close();
                    if (response.status == "success") {
                        console.log(response);
                        Swal.fire({
                            title: 'Sukses',
                            text: 'Pengajuan Lembur Karyawan Berhasil',
                            imageUrl: '{{ asset('img/STK-20230906-WA0025.webp') }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        $('#alasan-lembur').val('');
                        $('#labels-range-input').val('2');
                        localStorage.removeItem('encryptedDateLembur');
                        window.location.href = "{{ url('/lemburku') }}";
                    } else {
                        console.log(response);
                        Swal.fire({
                            title: 'Oops!',
                            text: 'Pengajuan Lembur Karyawan Gagal, Silahkan Coba Lagi',
                            imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                },
                error: function (error) {
                    console.log(error);
                    Swal.close();
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Terjadi Kesalahan',
                        text: 'Harap Hubungi Developer',
                        showConfirmButton: true,
                    });
                }
            });
        });

        $('#subDepTrue').click(function(e) {
            e.preventDefault();
            sttsSubDept = true;
            getDataKaryawan(sttsSubDept);
        });

        $('#subDepFalse').click(function(e) {
            e.preventDefault();
            sttsSubDept = false;
            getDataKaryawan(sttsSubDept);
        })
    });

    window.addEventListener('beforeunload', function() {
        localStorage.removeItem('encryptedDateLembur');
    });
</script>