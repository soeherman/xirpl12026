@extends('index')
@section('konten')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Ubah Jurusan</h5>
            <div class="card">
            <div class="card-body">
                <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Nama Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection