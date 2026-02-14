@extends('layouts.app')

@section('title', 'Kategori')

@section('style-page')
<style>
    .judul {
        font-weight: bold;
    }
</style>
@endsection

@section('content')
<h3 class="judul">Data Kategori</h3>

<table class="table table-bordered">
    @foreach($kategori as $k)
        <tr>
            <td>{{ $k->nama_kategori }}</td>
        </tr>
    @endforeach
</table>
@endsection

@section('js-page')
<script>
    console.log("Halaman kategori aktif");
</script>
@endsection
