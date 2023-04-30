@extends('index')
@section('title', 'Buku')

@section('isihalaman')
    <h3><center>Data Peminjaman Buku</center><h3>
    <h3><center>Perpustakaan Ponpes Al-Ittihad</center></h3>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPinjamTambah"> 
        Tambah Data Peminjaman 
    </button>

    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID Pinjam</td>
                <td align="center">Nama Petugas</td>
                <td align="center">Nama Siswa</td>
                <td align="center">Judul Buku</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($pinjam as $index=>$p)
                <tr>
                    <td align="center" scope="row">{{ $index + $pinjam->firstItem() }}</td>
                    <td align="center">{{$p->idpinjam}}</td>
                    <td>{{$p->petugas->namapetugas}}</td>
                    <td>{{$p->siswa->namasiswa}}</td>
                    <td>{{$p->buku->judul}}</td>
                    <td align="center">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPinjamEdit{{$p->idpinjam}}"> 
                            Edit
                        </button>
                        |
                        <a href="pinjam/hapus/{{$p->idpinjam}}" onclick="return confirm('Yakin mau dihapus?')">
                            <button class="btn-danger">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!--awal pagination-->
    Halaman : {{ $pinjam->currentPage() }} <br />
    Jumlah Data : {{ $pinjam->total() }} <br />
    Data Per Halaman : {{ $pinjam->perPage() }} <br />

    {{ $pinjam->links() }}
    <!--akhir pagination-->

    {{-- modal tambah pinjam --}}
    <!-- Awal Modal tambah data Peminjaman -->
<div class="modal fade" id="modalPinjamTambah" tabindex="-1" role="dialog" aria-labelledby="modalPinjamTambahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPinjamTambahLabel">Form Input Data Peminjaman</h5>
            </div>
            <div class="modal-body">

                <form name="formpinjamtambah" id="formpinjamtambah" action="/pinjam/tambah " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="idpetugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="idpetugas" name="idpetugas" placeholder="Pilih Nama Petugas">
                                <option></option>
                                @foreach($petugas as $pt)
                                    <option value="{{ $pt->idpetugas }}">{{ $pt->namapetugas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="idsiswa" class="col-sm-4 col-form-label">Nama Siswa</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="idsiswa" name="idsiswa" placeholder="Pilih Nama Siswa">
                                <option></option>
                                @foreach($siswa as $s)
                                    <option value="{{ $s->idsiswa }}">{{ $s->namasiswa }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="idbuku" class="col-sm-4 col-form-label">Judul Buku</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="idbuku" name="idbuku" placeholder="Pilih Judul Buku">
                                <option></option>
                                @foreach($buku as $bk)
                                    <option value="{{ $bk->idbuku }}">{{ $bk->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="modal-footer">
                        <button type="button" name="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="pinjamtambah" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal tambah data Peminjaman -->
    {{-- akhir modal --}}
    
    
@endsection