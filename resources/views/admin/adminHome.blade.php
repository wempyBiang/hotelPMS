@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/admin/home.css">
@endsection

@section('content')
    <div class="menus">
        <div class="button">
            <a href="/tambahTipe">Tambah Tipe</a>
        </div>
        <div class="button">
        <a href="/tambahKamar">Tambah Kamar</a>
        </div>
    </div>
@endsection