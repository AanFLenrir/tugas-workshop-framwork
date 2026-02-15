@extends('layouts.app')

{{-- STYLE PAGE --}}
@push('styles')
<style>
    .welcome-text {
        font-size: 22px;
        font-weight: 600;
    }
</style>
@endpush

@section('content')

<div class="page-header">
    <h3 class="page-title"> Dashboard </h3>
</div>

<div class="row">

    <div class="col-lg-12 grid-margin stretch-card">

        <div class="card bg-gradient-primary text-white">

            <div class="card-body">

                <h3 class="welcome-text">

                    Halo, {{ auth()->user()->name }} 👋

                </h3>

                <p>

                    Selamat datang kembali di Dashboard Koleksi Buku.

                </p>

            </div>

        </div>

    </div>

</div>

@endsection

{{-- JAVASCRIPT PAGE --}}
@push('scripts')
<script>
    console.log('Dashboard loaded');
</script>
@endpush
