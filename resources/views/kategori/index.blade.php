@extends('layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title"> Data Kategori </h3>
</div>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">

        <div class="card">

            <div class="card-body">

                <h4 class="card-title">Daftar Kategori</h4>

                <div class="table-responsive">

                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($data as $index => $k)

                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $k->nama_kategori }}</td>
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
