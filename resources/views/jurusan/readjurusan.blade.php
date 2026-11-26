@extends('index')
@section('konten')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Daftar Jurusan</h5>
            <div class="table-responsive">
                <a href="{{ route('jurusan.create') }}" class="btn btn-primary mb-3">Tambah Jurusan</a>
                <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama Jurusan</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Aksi</h6>
                    </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jurusans as $jurusan)
                    <tr> 
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $jurusan->nama_jurusan }}</td>   
                        <td>
                            <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>     
                    @endforeach       
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection