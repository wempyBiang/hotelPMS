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
                    <p>Marul Harry Siregar</p>
                </div>
                <div class="item right">
                    <p>Tanggal:</p>
                    <p>Rabu, 8 Maret 2024</p>
                </div>
            </div>

            <div class="row justify-content-end">
                
                <div class="item right">
                    <p>No. Invoice:</p>
                    <p>01 08/03/24</p>
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
                <tr>
                    <td>Delux</td>
                    <td>Rp. 300.00</td>
                    <td>10/12/2024</td>
                    <td>11/12/2024</td>
                    <td>Rp. 300.000</td>
                </tr>
                <tr>
                    <td>Delux</td>
                    <td>Rp. 300.00</td>
                    <td>10/12/2024</td>
                    <td>11/12/2024</td>
                    <td>Rp. 300.000</td>
                </tr>
                <tr>
                    <td>Delux</td>
                    <td>Rp. 300.00</td>
                    <td>10/12/2024</td>
                    <td>11/12/2024</td>
                    <td>Rp. 300.000</td>
                </tr>
                <tr>
                    <td>Delux</td>
                    <td>Rp. 300.00</td>
                    <td>10/12/2024</td>
                    <td>11/12/2024</td>
                    <td>Rp. 300.000</td>
                </tr>
                <tr>
                    <td>Delux</td>
                    <td>Rp. 300.00</td>
                    <td>10/12/2024</td>
                    <td>11/12/2024</td>
                    <td>Rp. 300.000</td>
                </tr>
                <tr>
                    <td>Delux</td>
                    <td>Rp. 300.00</td>
                    <td>10/12/2024</td>
                    <td>11/12/2024</td>
                    <td>Rp. 300.000</td>
                </tr>
                <tr>
                    <td>Delux</td>
                    <td>Rp. 300.00</td>
                    <td>10/12/2024</td>
                    <td>11/12/2024</td>
                    <td>Rp. 300.000</td>
                </tr>
                
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
                    <p>Total: Rp 26.000.000</p>
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