@extends('layout.layout')

@section('content')
    @php
        if (session('isNew')) {
            $nomor_nota = '';
        } else {
            $nomor_nota = $nota;
        }
    @endphp
    <h1>PENJUALAN</h1>
    @if (session('error'))
        <div class="alert alert-warning">{{ session('error') }}</div>
    @endif
    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf
        <label for="">Nota</label>
        <input value="{{ session('error') ? '' : $nomor_nota }}" type="text" name="nota" readonly>
        <label for="">Produk</label>
        <select name="produk_id" id="">
            <option value="">Pilih Produk</option>
            @foreach ($data_produk as $produk)
                <option value="{{ $produk->id . '_' . (float) $produk->harga }}">
                    {{ $produk->nama }} - {{ $produk->harga }}
                </option>
            @endforeach
        </select>
        <label for="">Pelanggan</label>
        <select name="pelanggan_id" id="">
            <option value="">Pilih pelanggan</option>
            @foreach ($data_pelanggan as $pelanggan)
                <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
            @endforeach
        </select>
        <label for="">Jumlah</label>
        <input type="number" name="jumlah">
        <button type="submit" class="btn btn-warning">Simpan</button>
        <a href="{{ route('penjualan.new', ['nota' => urlencode($nota)]) }}" class="btn btn-outline-warning">Pindah nota</a>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td></td>
                <td>No</td>
                <td>Produk</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_penjualan as $item)
                <tr>
                    <td>
                        <form action="{{ route('penjualan.delete', $item->id_detail) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->harga_produk }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->subtotal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
