@extends("layout.main")

@section("css")
    <link rel="stylesheet" href="css/booking.css">
@endsection

@section('content')
    <div class="form">
        <div class="button">
            <a href="/">Home</a>
        </div>
        <form action="/booking" method="post">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat">

            <label for="tipe">Tipe</label>
            <select name="tipe" id="tipe">
                @foreach ($types as $type)
                    <option value={{$type->id}}>{{$type->nama}}</option>
                @endforeach
            </select>

            <label for="tanggal">Tanggal</label>
            <div>
                <input type="date" name="dari" id="tanggal">
                <input type="date" name="sampai" id="tanggal">
            </div>

            <label for="bayar">Bayar</label>
            <input type="number" name="bayar" id="bayar" value="0">

            <label for="extraBed">Extra Bed</label>
            <input type="number" name="extraBed" id="extraBed" value="0">

            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" cols="30" rows="10"></textarea>

            <div class="check-in span-col-2">
                <label for="check_in">Check-in</label>
                <input type="checkbox" name="check_in" id="check_in">
            </div>
            
            <div class="span-col-2">
                <input type="submit" value="Tambah">

            </div>
        </form>

    </div>
@endsection