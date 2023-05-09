@extends('layouts.main')

<!-- card header-->
@section('card-header')
<div class="text-center h2">FORMULIR PELAPORAN</div>
<div class="text-center h3 i">Whistle Blowing System (WBS)</div>
<div class="text-center h5">Pengisian Pelaporan Masalah</div>
@endsection

<!-- Seksi container-->
@section('card-body')
<div class="row justify-content-center">
    <form action="" method="" class="form-group col-7">
        <div class="b">Apakah anda bersedia mengungkapkan identitas anda?</div>
        <div class="row g-3 mb-4">
            <div class="col text-center">
                <input
                    class="form-check-input"
                    type="radio"
                    name="identitas"
                    id="identitas_y"
                    required
                />
                <label class="form-check-label" for="identitas_y">
                    Saya Bersedia
                </label>
            </div>
            <div class="col text-center">
                <input
                    class="form-check-input"
                    type="radio"
                    name="identitas"
                    id="identitas_t"
                />
                <label class="form-check-label" for="identitas_t">
                    Saya Menolak
                </label>
            </div>
        </div>

        <div
            class="row boxed-check-group boxed-check-xs boxed-check-primary justify-content-center"
        >
            <label class="boxed-check">
                <input
                    class="boxed-check-input"
                    type="radio"
                    name="pilih_mess"
                    id="pilih_mess1"
                    value="Y"
                />
                <div class="boxed-check-label">Ya</div>
            </label>
            &nbsp; &nbsp;
            <label class="boxed-check">
                <input
                    class="boxed-check-input"
                    type="radio"
                    name="pilih_mess"
                    id="pilih_mess2"
                    value="T"
                />
                <div class="boxed-check-label">Tidak</div>
            </label>
        </div>
        <div class="b">Apakah laporan ini pernah dilaporkan sebelumnya?</div>
        <div class="row g-3 mb-4">
            <div class="col text-center">
                <input
                    class="form-check-input"
                    type="radio"
                    name="laporan"
                    id="laporan_y"
                    required
                />
                <label class="form-check-label" for="laporan_y"> Sudah </label>
            </div>
            <div class="col text-center">
                <input
                    class="form-check-input"
                    type="radio"
                    name="laporan"
                    id="laporan_t"
                />
                <label class="form-check-label" for="laporan_t"> Belum </label>
            </div>
        </div>
        <div class="b">
            Masukkan email yang akan anda gunakan untuk berkorespondensi dengan
            kami?
        </div>
        <input
            class="form-control col-4 mb-4"
            type="email"
            placeholder="isikan e-mail anda"
            aria-label="default input example"
            required
        />
        <div class="b">Masalah yang diadukan</div>

        <select class="form-control text-center mb-4" name="masalah" required>
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

        <div class="b">Jumlah Kerugian</div>
        <input
            class="form-control col-4 mb-4"
            type="text"
            placeholder="isikan keterangan jumlah maupun nominal"
            aria-label="default input example"
            required
        />

        <div class="mb-3">
            <label for="pihakterlibat" class="form-label"
                >Example textarea</label
            >
            <textarea
                class="form-control"
                id="pihakterlibat"
                rows="3"
            ></textarea>
        </div>

        <div class="b">Lokasi Kejadian</div>
        <input
            class="form-control col-4 mb-4"
            type="text"
            placeholder="isikan keterangan jumlah maupun nominal"
            aria-label="default input example"
            required
        />

        <div class="b">Kronologi</div>
        <textarea class="form-control-plaintext">
            jelasakan kronologinya
        </textarea>

        <div class="b">Waktu Kejadian</div>
        <input
            class="form-control col-4 mb-4"
            type="datetime-local"
            placeholder="isikan keterangan jumlah maupun nominal"
            aria-label="default input example"
            required
        />

        <div class="b">Unggah Dokumen Pendukung</div>
        <input class="form-control mb-4" type="file" id="formFile" required />
        <div class="row col text-right">
            <input type="submit" class="btn btn-success" value="Kirim" />
        </div>
    </form>
</div>
@endsection
