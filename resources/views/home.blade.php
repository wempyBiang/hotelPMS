@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
    <div class="rooms">
        @foreach ($tipeKamars as $tipe)
            <div class="room">
                <div class="title">{{{$tipe->nama}}}</div>
                <div class="table">
                    <table>
                        <tr>
                            <td>Tanggal</td>
                            @foreach ($dates as $date)
                                <td>{{{$date}}}</td>
                            @endforeach
                        </tr>

                        <tr>
                            <td>Terisi</td>
                            @foreach ($dates as $date)
                                @isset($sisa[$tipe->nama][$date])
                                    <td>{{{$sisa[$tipe->nama][$date]}}}</td>
                                @else
                                    <td>0</td>
                                @endisset
                                
                            @endforeach
                        </tr>

                        <tr>
                            <td>Sisa</td>
                            @foreach ($dates as $date)
                                @isset($sisa[$tipe->nama][$date])
                                    <td>{{{$jmlKamar[$tipe->nama]-$sisa[$tipe->nama][$date]}}}</td>
                                @else
                                    <td>{{{$jmlKamar[$tipe->nama]}}}</td>
                                @endisset
                                
                            @endforeach
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
        <div class="button">
            <a href="/nota2">Nota 2</a>
        </div>
        <div class="button">
            <a href="/nota3">Nota 3</a>
        </div>
    </div>
@endsection