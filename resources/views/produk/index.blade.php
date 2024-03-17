@extends('layout.layout')

@section('content')
    @if (session('berhasil'))
        <div class="alert alert-success">{{ session('berhasil') }}</div>
    @elseif(session('gagal'))
        <div class="alert alert-danger">{{ session('gagal') }}</div>
    @endif
    <h1>Produk</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('produk.create') }}" method="POST">
                @csrf
                <div>
                    <label class="form-label" for="nama">Nama Produk</label>
                    <input class="form-control" type="text" name="nama" id="nama" required>
                </div>
                <div>
                    <label class="form-label" for="harga">Harga</label>/
                    <input class="form-control" min="0" type="number" name="harga" id="harga" required>
                </div>
                <div>
                    <label class="form-label" for="stok">Stok</label>
                    <input class="form-control" min="0" type="number" name="stok" id="stok" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        <a href="{{ route('produk.edit', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('produk.delete', $item->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->stok }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
