<script src="{{ asset('js/crypto-js.js') }}"></script>
<script src="{{ asset('js/scriptModal.js') }}"></script>
<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/selectinput.js') }}"></script>
<script src="{{ asset('js/dropdown.js') }}"></script>
<script type="text/javascript">
    const encryptedFromData = localStorage.getItem('encryptedFromData');
    const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
    const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

    var id_karyawan = decryptedFromData.username;
    let id_periode;
    var nip_karyawan = '{{ session('username') }}';
    let passwordThr;

    const iconShowPW = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-slate-700 dark:text-slate-50">
    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
    </svg>`;

    const iconHidePW = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-slate-700 dark:text-slate-50">
    <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
    <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
    <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
    </svg>`;

    function formatRupiah(nominal) {
        return 'Rp ' + parseFloat(nominal).toLocaleString('id-ID');
    }

    $(document).ready(function() {
        $('.item-list').on('click', function() {
            id_periode = $(this).data('id_periode');
            console.log(id_periode);
        });

        $('#show-pin').click(function(e) {
            e.preventDefault();
            var showPW = $('#password');
            var icon = $('#show-pin');
            if (showPW.attr('type') === 'password') {
                showPW.attr('type', 'text');
                icon.html(iconShowPW);
            } else {
                showPW.attr('type', 'password');
                icon.html(iconHidePW);
            }
        });

        $('#submit-password').click(function(e) {
            e.preventDefault();
            let password = $('#password').val();
            passwordThr = password;

            console.log(password);
            console.log(id_periode);
            console.log(nip_karyawan);
            console.log(passwordThr);
            console.log(id_karyawan);

            if (passwordThr === undefined || passwordThr === null || passwordThr === "" ||
                id_karyawan === undefined || id_karyawan === null || id_karyawan === "" ||
                id_periode === undefined || id_periode === null || id_periode === "" || nip_karyawan ===
                undefined || nip_karyawan === null || nip_karyawan === "") {
                Swal.fire({
                    title: 'Penting!',
                    text: 'Harap masukan PIN terlebih dahulu',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 200,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showConfirmButton: false,
                    timer: 1200,
                });
                return;
            }

            Swal.fire({
                title: 'Loading!',
                text: 'Data Update Process',
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                },
            });

            $.ajax({
                url: '{{ url('/penggajian/thr/get_thrku') }}',
                method: 'POST',
                data: {
                    id_karyawan: id_karyawan,
                    id_periode: id_periode,
                    password: passwordThr,
                    nip: nip_karyawan,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.status === 'success') {
                        console.log(response);
                        Swal.close();
                        $('#password').val('');
                        Swal.fire({
                            title: response.status,
                            text: response.message,
                            imageUrl: '{{ asset('/img/STK-20230906-WA0035.webp') }}',
                            imageWidth: 250,
                            imageHeight: 250,
                            imageAlt: 'Custom image',
                            showConfirmButton: false,
                            timer: 1200,
                        });

                        if (response.thrku.karyawan && response.thrku.karyawan_thr.length ==
                            0) {
                            Swal.fire({
                                title: 'Penting',
                                text: 'Gaji Periode Bulan Ini Belum Ada.',
                                imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                                imageWidth: 150,
                                imageHeight: 150,
                                imageAlt: 'Custom image',
                            });
                            return;
                        }

                        if (response.thrku !== null || response.thrku !== undefined ||
                            response.thrku !== "") {
                            let detailKaryawan = response.thrku.karyawan;
                            $('#nama-karyawan').text(detailKaryawan.nama !== null ?
                                detailKaryawan.nama : '-');
                            $('#nik-karyawan').text(detailKaryawan.nik !== null ?
                                detailKaryawan.nik : '-');
                            $('#dept').text(detailKaryawan.departemen !== null &&
                                detailKaryawan.subDepartemen !== null ? detailKaryawan
                                .departemen + ' - ' + detailKaryawan.subDepartemen :
                                "-" + "-");
                            $('#rekening-karyawan').text(detailKaryawan.noRekening !==
                                null ? detailKaryawan.noRekening : '-');
                            $('#priode').text(detailKaryawan.periode !== null ?
                                detailKaryawan.periode : '-');

                            if (response.thrku.karyawan_thr.length > 0) {
                                console.log(response.thrku.karyawan_thr);
                                let detailTotalThrku = response.thrku.karyawan_thr;
                                console.log(detailTotalThrku[0].nominal);

                                $('#gaji-pokok').text(detailTotalThrku[0].nominal !== null ?
                                    formatRupiah(detailTotalThrku[0].nominal) :
                                    formatRupiah(0));

                                $('#tunj-jabatan').text(detailTotalThrku[1].nominal !==
                                    null ?
                                    formatRupiah(detailTotalThrku[1].nominal) :
                                    formatRupiah(0));

                                $('#tunj-keahlian').text(detailTotalThrku[1].nominal !==
                                    null ?
                                    formatRupiah(detailTotalThrku[1].nominal) :
                                    formatRupiah(0));


                                let gajiPokok = detailTotalThrku[0].nominal !== null ?
                                    parseInt(detailTotalThrku[0].nominal) : 0;
                                let tunjJabatan = detailTotalThrku[1].nominal !== null ?
                                    parseInt(detailTotalThrku[1].nominal) : 0;
                                let tunjKeahlian = detailTotalThrku[2].nominal !== null ?
                                    parseInt(detailTotalThrku[2].nominal) : 0;
                                let totThrku = gajiPokok + tunjJabatan + tunjKeahlian;

                                $('#tot-gaji-pokok').text(formatRupiah(totThrku));

                                $('#total-terima').text(formatRupiah(totThrku));
                                $('#type-thr').text(detailKaryawan.tipeThr == "2" ||
                                    detailKaryawan.tipeThr == "0" ||
                                    detailKaryawan.tipeThr != "1" ? '(THR Prorate)' :
                                    ' ');
                            }
                        }

                    } else {
                        console.log(response);
                        Swal.close();
                        $('#password').val('');
                        Swal.fire({
                            title: 'Oops!',
                            text: 'Maaf, PIN yang Dimasukan Salah.',
                            imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                            imageWidth: 150,
                            imageHeight: 150,
                            imageAlt: 'Custom image',
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                    console.log(error.responseText);
                }
            })
        });

        $('.unduh-slip').click(function(e) {
            e.preventDefault();
            console.log(password);
            console.log(id_periode);
            console.log(nip_karyawan);
            console.log(passwordThr);
            console.log(id_karyawan);

            if (passwordThr === undefined || passwordThr === null || passwordThr === "" ||
                id_karyawan === undefined || id_karyawan === null || id_karyawan === "" ||
                id_periode === undefined || id_periode === null || id_periode === "" || nip_karyawan ===
                undefined || nip_karyawan === null || nip_karyawan === "") {
                Swal.fire({
                    title: 'Penting!',
                    text: 'Harap masukan PIN terlebih dahulu',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 200,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showConfirmButton: false,
                    timer: 1200,
                });
                return;
            }

            const dataAPI = {
                id_karyawan: id_karyawan,
                password: passwordThr,
                id_periode: id_periode,
                nip: nip_karyawan,
            };

            const encryptedDataUser = CryptoJS.AES.encrypt(JSON.stringify(dataAPI),
                '{{ env('APP_KEY') }}').toString();
            localStorage.setItem('encryptedDataUser2', encryptedDataUser);

            $.ajax({
                url: '{{ url('/encrypt-password-thr') }}',
                method: 'POST',
                data: {
                    passwordK: passwordThr,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(encryptedData) {
                    window.open(
                        `{{ url('/generate-pdf-thr') }}?id_karyawan=${id_karyawan}&key=${encryptedData}&id_periode=${id_periode}&nip=${nip_karyawan}`,
                        '_blank');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching encrypted data:', error);
                }
            });
        });
    });
</script>
