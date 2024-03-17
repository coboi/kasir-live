@extends('layout.layout')

@section('content')
    <h1>Edit Produk</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('produk.update') }}" method="POST">
                @csrf
                <input value="{{ $data->id }}" type="text" name="id" id="id" readonly hidden>
                <div>
                    <label class="form-label" for="nama">Nama Produk</label>
                    <input value="{{ $data->nama }}" class="form-control" type="text" name="nama" id="nama" required>
                </div>
                <div>
                    <label class="form-label" for="harga">Harga</label>/
                    <input value="{{ $data->harga }}" class="form-control" min="0" type="number" name="harga" id="harga" required>
                </div>
                <div>
                    <label class="form-label" for="stok">Stok</label>
                    <input value="{{ $data->stok }}" class="form-control" min="0" type="number" name="stok" id="stok" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
@endsection
