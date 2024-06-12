@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="css/admin/tambahKamar.css">
@endsection

@section('content')
    <div class="button">
        <a href="/admin" >Home</a>
    </div>
    <form action="/tambahKamar" method="post">
        @csrf
        <label for="tipe">Tipe</label>
        <select name="tipe" id="tipe">
            @foreach ($types as $type)
                <option value={{$type->id}}>{{$type->nama}}</option>
            @endforeach
        </select>
        <label for="nomor">Nomor Kamar</label>
        <textarea name="nomor" id="nomor" cols="30" rows="10"></textarea>

        <input type="submit" value="Tambah" class="span-col-2">
    </form>
@endsection

