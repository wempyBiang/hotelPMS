@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
    <div class="rooms">
        @foreach ($tipes as $tipe)
            <div class="room">
                <div class="title">{{{$tipe->nama}}}</div>
                <div class="table">
                    <table>
                        <tr>
                            <td>Tanggal</td>
                            <td>11/5/2024</td>
                            <td>11/5/2024</td>
                            <td>11/5/2024</td>
                        </tr>

                        <tr>
                            <td>Terisi</td>
                            <td>5</td>
                            <td>4</td>
                            <td>4</td>
                        </tr>

                        <tr>
                            <td>Sisa</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                        </tr>
                    </table>
                </div>
            </div>
            
        @endforeach

    </div>

    <div class="buttons">
        <div class="button">
            <a href="/booking">Booking</a>
        </div>
        <div class="button">
            <a href="/check-in">Check-in</a>
        </div>
        <div class="button">
            <a href="#">Check-out</a>
        </div>
        <div class="button">
            <a href="#">Edit Booking</a>
        </div>
        <div class="button">
            <a href="/nota">Nota</a>
        </div>
    </div>
@endsection