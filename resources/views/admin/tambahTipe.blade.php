@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/admin/tambahTipe.css">
@endsection

@section('content')
    <div class="button">
        <a href="/admin">Home</a>
    </div>

    
    <form action="/tambahTipe" method="post">
        <div class="table-edit">

            <table>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Edit</th>
                </tr>
                @foreach ($tipeKamar as $tipe)
                    <tr>
                        <td>{{{$tipe->nama}}}</td>
                        <td>Rp. {{{number_format($tipe->harga, 0, ",", ".")}}}</td>
                        <td><a href="#">Test</a></td>
                    </tr>               
                @endforeach
            </table>
        </div>
        @csrf
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga">
        </div>
        <input type="submit" value="Tambah" class="span-col-2">
    </form>
@endsection