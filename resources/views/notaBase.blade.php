@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/nota.css">
@endsection

@section('content')
    <div class="nota">
        <div class="header">
          <h1>invoice</h1>
          <div class="logo">
            <h1>hotel manggasa</h1>
            <img src="img/logo.png" alt="logo">
          </div>
        </div>
        <hr>
        <div class="keterangan">
            <div class="row">
                <div class="item">
                    <p>Kepada:</p>
                    <p>{{$nama}}</p>
                </div>
                <div class="item right">
                    <p>Tanggal:</p>
                    <p>{{$tanggalNota}}</p>
                </div>
            </div>

            <div class="row justify-content-end">
                
                <div class="item right">
                    <p>No. Invoice:</p>
                    <p>{{$noInvoice}}</p>
                </div>
            </div>
        </div>

        <div class="transaksi">
            <table>
                <tr>
                    <th>keterangan</th>
                    <th>harga</th>
                    <th>check-in</th>
                    <th>check-out</th>
                    <th>total</th>
                </tr>
                @php
                  $totalHarga = 0  
                @endphp
                @for ($i = 0; $i < count($kamars); $i++)
                    @if ($kamars[$i] != "-")
                        <tr>
                            <td>{{$kamars[$i]}}</td>
                            <td>Rp. {{$hargas[$i]}}</td>
                            <td>{{$checkins[$i]}}</td>
                            <td>{{$checkouts[$i]}}</td>
                            <td>Rp. {{$totals[$i]}}</td>
                            @php
                              $totalHarga = ((int) $totals[$i] * 1000) + $totalHarga  
                            @endphp
                        </tr>
                    @else
                        <tr>
                            <td class="non-border"></td>
                            <td class="non-border"></td>
                            <td class="non-border"></td>
                            <td class="non-border"></td>
                            <td class="non-border"></td>
                        </tr>
                        
                    @endif
                    
                @endfor
                
            </table>
        </div>

        <div class="footer">
            <div class="row">
                <div class="item">
                    <p>pembayaran</p>
                    <div class="item">
                        <p>transfer:</p>
                        <p>BNI: 1010671016</p>
                        <p>a/n leni biang</p>
                    </div>
                </div>

                <div class="item">
                    <p>Total: Rp {{number_format($totalHarga, 0, ",", ".")}}</p>
                </div>
            </div>

            <div class="row">
                <div class="item"><p>terima kasih atas kunjungannya</p></div>
                <div class="item">
                    <p>management hotel manggasa</p>
                </div>
            </div>
        </div>

    </div>
@endsection