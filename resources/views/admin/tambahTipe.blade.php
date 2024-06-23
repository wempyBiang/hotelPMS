@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/admin/tambahTipe.css">
@endsection

@section('content')
    <div class="button">
        <a href="/admin">Home</a>
    </div>

    <div class="form">
        <div class="table-edit">
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Edit</th>
                </tr>
                @foreach ($tipeKamar as $tipe)
                    <tr>
                        <form action="/edit-tipe-kamar-{{$tipe->id}}" method="post">
                            @csrf
                            <td><input type="text" name="nama" id="nama" value="{{{$tipe->nama}}}"></td>
                            <td><input type="number" name="harga" id="harga" value="{{{$tipe->harga}}}"></td>
                            <td><input type="submit" value="Edit"></td>
                        </form>
                    </tr>               
                @endforeach
            </table>
        </div>

        <form action="/tambahTipe" method="post">
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
    </div>
    
@endsection