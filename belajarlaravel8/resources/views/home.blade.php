@extends('layouts.main')

<!-- seksi card header-->
@section('card-header')
<div class="card-header bg-gradient-danger text-light">
    <div class="text-center h2">FORMULIR PELAPORAN</div>
    <div class="text-center h3 i">Whistle Blowing System (WBS)</div>
    <div class="text-center h5">Pengisian Pelaporan Masalah</div>
</div>
@endsection

<!-- seksi card-body-->
@section('card-body')

<div class="card-body">
    <div class="row justify-content-center text-lg">
        <form
            id="input_wbs"
            method="post"
            class="form-group col-7"
            enctype="multipart/form-data"
        >
            <!-- Uangkap Identitas -->
            <div class="b fs-5">
                Apakah anda bersedia mengungkapkan identitas anda?
            </div>
            <div class="row justify-content-center">
                <div
                    class="col-auto boxed-check-group boxed-check-xs boxed-check-primary"
                >
                    <label class="boxed-check">
                        <input
                            class="boxed-check-input"
                            type="radio"
                            name="identitas"
                            id="identitasy"
                            value="Y"
                            required
                        />
                        <div class="boxed-check-label">Ya</div>
                    </label>
                </div>
                <div
                    class="col-auto boxed-check-group boxed-check-xs boxed-check-danger"
                >
                    <label class="boxed-check col-auto">
                        <input
                            class="boxed-check-input"
                            type="radio"
                            name="identitas"
                            id="identitast"
                            value="T"
                        />
                        <div class="boxed-check-label">Tidak</div>
                    </label>
                </div>
            </div>
            <div class="mb-4 blink" id="err_identitas"></div>

            <!-- Nama Identitas -->
            <div
                class="form-floating mb-3"
                id="datanamapelapor"
                style="display: none"
            >
                <input
                    type="text"
                    class="form-control"
                    id="namapelapor"
                    placeholder="Isi Nama Pelapor"
                />
                <label for="namapelapor">Nama Pelapor</label>
            </div>
            <div class="mb-4 blink" id="err_namapelapor"></div>
            <script>
                // $("input[name=identitas]").click(function () {
                //     if ($(this).attr("value") == "Y") {
                //         $("#datanamapelapor").show();
                //     } else {
                //         $("#datanamapelapor").hide();
                //     }
                // });
            </script>

            <!-- Laporan Sebelumnya -->
            <div class="b fs-5">
                Apakah laporan ini pernah dilaporkan sebelumnya?
            </div>
            <div class="row justify-content-center">
                <div
                    class="col-auto boxed-check-group boxed-check-xs boxed-check-primary"
                >
                    <label class="boxed-check">
                        <input
                            class="boxed-check-input"
                            type="radio"
                            name="laporansebelumnya"
                            id="laporansebelumnyay"
                            value="Y"
                            required
                        />
                        <div class="boxed-check-label">Ya (Pernah)</div>
                    </label>
                </div>
                <div
                    class="col-auto boxed-check-group boxed-check-xs boxed-check-danger"
                >
                    <label class="boxed-check col-auto">
                        <input
                            class="boxed-check-input"
                            type="radio"
                            name="laporansebelumnya"
                            id="laporansebelumnyat"
                            value="T"
                        />
                        <div class="boxed-check-label">Tidak (Belum)</div>
                    </label>
                </div>
            </div>
            <div class="mb-4 blink" id="err_laporansebelumnya"></div>

            <!-- Email Pelapor -->
            <div class="b fs-5">
                <label for="email" class="form-label"
                    >Masukkan email yang akan anda gunakan untuk
                    berkorespondensi dengan kami?</label
                >
            </div>
            <input
                class="form-control"
                name="email"
                id="email"
                type="email"
                placeholder="isikan e-mail anda"
                required
            />
            <div class="mb-4 blink" id="err_email"></div>

            <!-- Pilihan Masalah -->
            <div class="b fs-5">Masalah yang diadukan</div>
            <select
                class="form-control text-center mb-4"
                name="masalah"
                id="masalah"
                required
            >
                <option class="i" value="">--Pilih Masalah--</option>
                <option value="Perilaku pegawai RSJ">
                    Perilaku pegawai RSJ
                </option>
                <option value="Perilaku pegawai tidak sesuai kode etik">
                    Perilaku pegawai tidak sesuai kode etik
                </option>
                <option value="Pelayanan RSJ">Pelayanan RSJ</option>
                <option value="Benturan Kepentingan">
                    Benturan Kepentingan
                </option>
                <option value="Pencurian dan Penggelapan">
                    Pencurian dan Penggelapan
                </option>
                <option value="Pelanggaran Proses Pengadaan Barang dan Jasa">
                    Pelanggaran Proses Pengadaan Barang dan Jasa
                </option>
                <option value="Penyalahgunaan Jabatan/Kewenangan">
                    Penyalahgunaan Jabatan/Kewenangan
                </option>
                <option value="Suap dan Gratifikasi">
                    Suap dan Gratifikasi
                </option>
                <option value="Perbuatan Curang">Perbuatan Curang</option>
            </select>
            <div class="mb-4 blink" id="err_masalah"></div>

            <!-- Jumlah Kerugian -->
            <div class="b fs-5">
                <label for="jumlahkerugian" class="form-label"
                    >Jumlah Kerugian (dalam Rupiah)</label
                >
            </div>
            <input
                class="form-control"
                type="number"
                min="0"
                name="jumlahkerugian"
                id="jumlahkerugian"
                placeholder="isikan nominal"
                required
            />
            <div class="i fw-light fs-6 text-center">
                bila tidak tahu pasti, isikan dengan angka
                <span class="b">0 (Nol)</span>
            </div>
            <div class="mb-4 blink" id="err_jumlahkerugian"></div>

            <!-- Daftar Nama yang terlibat -->
            <div class="b fs-5">
                <label for="pihakterlibat" class="form-label"
                    >Pihak yang terlibat</label
                >
                <textarea
                    class="form-control"
                    name="pihakterlibat"
                    id="pihakterlibat"
                    rows="3"
                    required
                ></textarea>
            </div>
            <div class="i fw-light fs-6 text-center">
                isikan daftar nama yang terlibat
            </div>
            <div class="mb-4 blink" id="err_pihakterlibat"></div>

            <!-- Lokasi Kejadian -->
            <div class="b fs-5">
                <label for="lokasikejadian" class="form-label"
                    >Lokasi Kejadian</label
                >
                <textarea
                    class="form-control"
                    name="lokasikejadian"
                    id="lokasikejadian"
                    rows="3"
                    required
                ></textarea>
            </div>
            <div class="mb-4 blink" id="err_lokasikejadian"></div>

            <!-- Kronologi -->
            <div class="b fs-5">
                <label for="kronologi" class="form-label">Kronologi</label>
                <textarea
                    class="form-control"
                    name="kronologi"
                    id="kronologi"
                    rows="3"
                    required
                ></textarea>
            </div>
            <div class="mb-4 blink" id="err_kronologi"></div>

            <!-- Waktu Kejadian -->
            <div class="b fs-5">Waktu Kejadian</div>
            <input
                class="form-control"
                type="datetime-local"
                name="waktukejadian"
                id="waktukejadian"
                required
            />
            <div class="mb-4 blink" id="err_kronologi"></div>

            <!-- File Pendukung -->
            <div class="b fs-5">
                <label for="dokumenpendukung" class="form-label"
                    >Unggah Dokumen Pendukung</label
                >
                <input
                    class="form-control"
                    type="file"
                    name="dokumenpendukung"
                    id="dokumenpendukung"
                    required
                />
            </div>
            <div class="mb-4 blink" id="err_dokumenpendukung"></div>

            <div class="row col text-right">
                <a class="btn btn-outline-success tambah"
                    ><i class="fa-regular fa-paper-plane"></i> Kirim</a
                >
            </div>
        </form>
        <script>
            $(".tambah").click(function () {
                // Swal.fire({
                //     title: "Mohon Ditunggu",
                //     html: ' <img src="./_img/d3f472b06590a25cb4372ff289d81711.gif" class="rotate mb-3" width="100" height="100" />',
                //     allowOutsideClick: false,
                //     showConfirmButton: false,
                //     backdrop: true,
                // });
                var data_form = $("#input_wbs").serializeArray();
                var identitas = $("input[name=identitas]").val();
                var identitasy = $("#identitasy").val();
                var identitast = $("#identitast").val();
                console.log(data_form);
                console.log(identitas);
                // if (identitasT == undefined && identitasY == undefined) {
                //     console.log("Pilihan Identitas");
                // }
                // var filePendukung = $("#file_surat").val();

                // //Cari ekstensi file pendukung yg diupload
                // var typeFilePendukung =
                //     document.querySelector("#file_surat").value;
                // var getTypeFilePendukung = typeSurat.split(".").pop();

                // //cari ukuran file surat yg diupload
                // var filePendukung = document.getElementById("file_surat").files;
                // var getSizeFilePendukung =
                //     document.getElementById("file_surat").files[0].size / 1024;

                // //Notif bila tidak diisi / tidak sesuai
                // if (
                //     filePendukung == "" ||
                //     filePendukung == undefined ||
                //     // getTypeFilePendukung == "pdf" ||
                //     // getSizeFilePendukung > 5120 ||
                //     pemohon == ""
                // ) {
                //     //warning Toast bila ada data wajib yg berlum terisi
                //     Swal.fire({
                //         allowOutsideClick: true,
                //         showConfirmButton: false,
                //         icon: "warning",
                //         title: "<center>DATA WAJIB ADA YANG BELUM TERISI / TIDAK SESUAI</center>",
                //         timer: 10000,
                //         timerProgressBar: true,
                //         didOpen: (toast) => {
                //             toast.addEventListener(
                //                 "mouseenter",
                //                 Swal.stopTimer
                //             );
                //             toast.addEventListener(
                //                 "mouseleave",
                //                 Swal.resumeTimer
                //             );
                //         },
                //     });

                //     //notif pemohon
                //     if (pemohon == "") {
                //         $("#err_pemohon").html("Pemohon Harus Diisi");
                //     } else {
                //         $("#err_pemohon").html("");
                //     }
                // }
                // //simpan data
                // else {
                //     $.ajax({
                //         type: "POST",
                //         url: "exc/x_i_praktik.php?",
                //         data: data_pkd,
                //         dataType: "json",
                //         success: function (response) {
                //             if (response.return == "") {
                //                 //ambil data file yang diupload
                //                 var data_file = new FormData();
                //                 var xhttp = new XMLHttpRequest();

                //                 var fileSurat =
                //                     document.getElementById("file_surat").files;
                //                 data_file.append("file_surat", fileSurat[0]);
                //                 data_file.append("id", response.id);
                //                 data_file.append("q", response.q);
                //                 xhttp.responseType = "json";
                //                 xhttp.open(
                //                     "POST",
                //                     "_admin/exc/x_i_pkd_sFile.php",
                //                     true
                //                 );
                //                 xhttp.onload = function () {
                //                     if (xhttp.response == "size") {
                //                         Swal.fire({
                //                             allowOutsideClick: true,
                //                             icon: "warning",
                //                             html: '<span class="text-danger text-lg text-center">Ukuran File Terlalu Besar</span>',
                //                             showConfirmButton: false,
                //                             timer: 5000,
                //                             timerProgressBar: true,
                //                         });
                //                     } else if (xhttp.response == "type") {
                //                         Swal.fire({
                //                             allowOutsideClick: true,
                //                             icon: "warning",
                //                             html: '<span class="text-danger text-lg text-center">Tipe File Harus PDF</span>',
                //                             showConfirmButton: false,
                //                             timer: 5000,
                //                             timerProgressBar: true,
                //                         });
                //                     } else {
                //                         Swal.fire({
                //                             allowOutsideClick: true,
                //                             // isDismissed: false,
                //                             icon: "success",
                //                             title: '<span class"text-xs"><b>DATA PKD</b><br>Berhasil Tersimpan',
                //                             // html: '<a href="?pkd" class="btn btn-outline-primary">OK</a>',
                //                             showConfirmButton: false,
                //                             timer: 5000,
                //                             timerProgressBar: true,
                //                             didOpen: (toast) => {
                //                                 toast.addEventListener(
                //                                     "mouseenter",
                //                                     Swal.stopTimer
                //                                 );
                //                                 toast.addEventListener(
                //                                     "mouseleave",
                //                                     Swal.resumeTimer
                //                                 );
                //                             },
                //                         }).then(function () {
                //                             document.location.href = "/";
                //                         });
                //                     }
                //                 };
                //                 xhttp.send(data_file);
                //             } else {
                //             }
                //         },
                //         error: function (response) {
                //             console.log(response.responseText);
                //             alert("eksekusi query gagal");
                //         },
                //     });
                // }
            });
        </script>
    </div>
</div>
@endsection
