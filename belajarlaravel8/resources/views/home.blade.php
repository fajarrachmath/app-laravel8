@extends('layouts.main')

<!-- seksi card header-->
@section('card-header')
<div class="text-center h2">FORMULIR PELAPORAN</div>
<div class="text-center h3 i">Whistle Blowing System (WBS)</div>
<div class="text-center h5">Pengisian Pelaporan Masalah</div>
@endsection

<!-- seksi card-body-->
@section('card-body')
<div class="row justify-content-center text-lg">
    <form action="" method="" class="form-group col-7">
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
            $(document).ready(function () {
                $("input[name=identitas]").click(function () {
                    if ($(this).attr("value") == "Y") {
                        $("#datanamapelapor").show();
                    } else {
                        $("#datanamapelapor").hide();
                    }
                });
            });
        </script>

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

        <div class="b fs-5">
            <label for="email" class="form-label"
                >Masukkan email yang akan anda gunakan untuk berkorespondensi
                dengan kami?</label
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

        <div class="b fs-5">Masalah yang diadukan</div>
        <select
            class="form-control text-center mb-4"
            name="masalah"
            id="masalah"
            required
        >
            <option class="i" value="">--Pilih Masalah--</option>
            <option value="Perilaku pegawai RSJ">Perilaku pegawai RSJ</option>
            <option value="Perilaku pegawai tidak sesuai kode etik">
                Perilaku pegawai tidak sesuai kode etik
            </option>
            <option value="Pelayanan RSJ">Pelayanan RSJ</option>
            <option value="Benturan Kepentingan">Benturan Kepentingan</option>
            <option value="Pencurian dan Penggelapan">
                Pencurian dan Penggelapan
            </option>
            <option value="Pelanggaran Proses Pengadaan Barang dan Jasa">
                Pelanggaran Proses Pengadaan Barang dan Jasa
            </option>
            <option value="Penyalahgunaan Jabatan/Kewenangan">
                Penyalahgunaan Jabatan/Kewenangan
            </option>
            <option value="Suap dan Gratifikasi">Suap dan Gratifikasi</option>
            <option value="Perbuatan Curang">Perbuatan Curang</option>
        </select>
        <div class="mb-4 blink" id="err_masalah"></div>

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

        <div class="b fs-5">Waktu Kejadian</div>
        <input
            class="form-control"
            type="datetime-local"
            name="waktukejadian"
            id="waktukejadian"
            required
        />
        <div class="mb-4 blink" id="err_kronologi"></div>

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
            <input type="submit" class="btn btn-success" value="Kirim" />
        </div>
    </form>
</div>
@endsection
