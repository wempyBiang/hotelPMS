@extends("layout.main")

@section('title')
    <title>Invoice - {{$nama}} - {{$tanggalNota}}</title>
@endsection

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

            {{-- <div class="row justify-content-end">
                
                <div class="item right">
                    <p>No. Invoice:</p>
                    <p>{{$noInvoice}}</p>
                </dixav>
            </div> --}}
        </div>

        <div class="transaksi">
            <table>
                <tr>
                    <th>tanggal</th>
                    <th>keterangan</th>
                    <th>jumlah</th>
                    <th>harga</th>
                    <th>total</th>
                </tr>
                @php
                  $totalHarga = 0  
                @endphp
                @for ($i = 0; $i < count($keterangans); $i++)
                    @if ($keterangans[$i] != null)
                        <tr>
                            <td>{{$tanggals[$i]}}</td>
                            <td>{{$keterangans[$i]}}</td>
                            <td>{{$jumlahs[$i]}}</td>
                            <td>Rp {{number_format($hargas[$i], 0, ",", ".")}}</td>
                            <td>Rp {{number_format($totals[$i], 0, ",", ".")}}</td>
                            @php
                              $totalHarga = ((int) $totals[$i]) + $totalHarga  
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