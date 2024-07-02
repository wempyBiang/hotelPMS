@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/nota.css">
@endsection

@section('content')
<form action="/nota" method="post">
    @csrf
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
                    <p><input type="text" name="nama" id="nama" placeholder="Nama"></p>
                </div>
                <div class="item right">
                    <p>Tanggal:</p>
                    <p><input type="text" name="tanggalNota" id="tanggalNota" placeholder="Rabu, 8 Maret 2024"></p>
                </div>
            </div>

            {{-- <div class="row justify-content-end">
                
                <div class="item right">
                    <p>No. Invoice:</p>
                    <p><input type="text" name="noInvoice" id="noInvoice" placeholder="1 01/01/2024"></p>
                </div>
            </div> --}}
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
                    <td>
                        <input type="text" name="kamar[]" id="kamar1">
                    </td>
                    <td><input type="text" name="harga[]" id="harga1" placeholder="300.000"></td>
                    <td><input type="text" name="checkin[]" id="checkin1" placeholder="01/01/2024"></td>
                    <td><input type="text" name="checkout[]" id="checkout1" placeholder="02/01/2024"></td>
                    <td><input type="text" name="total[]" id="total1" placeholder="300.000"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="kamar[]" id="kamar2">
                    </td>
                    <td><input type="text" name="harga[]" id="harga2" placeholder="harga"></td>
                    <td><input type="text" name="checkin[]" id="checkin2" placeholder="tanggal check-in"></td>
                    <td><input type="text" name="checkout[]" id="checkout2" placeholder="tanggal check-out"></td>
                    <td><input type="text" name="total[]" id="total2" placeholder="total"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="kamar[]" id="kamar3">
                    </td>
                    <td><input type="text" name="harga[]" id="harga3" placeholder="harga"></td>
                    <td><input type="text" name="checkin[]" id="checkin3" placeholder="tanggal check-in"></td>
                    <td><input type="text" name="checkout[]" id="checkout3" placeholder="tanggal check-out"></td>
                    <td><input type="text" name="total[]" id="total3" placeholder="total"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="kamar[]" id="kamar4">
                    </td>
                    <td><input type="text" name="harga[]" id="harga4" placeholder="harga"></td>
                    <td><input type="text" name="checkin[]" id="checkin4" placeholder="tanggal check-in"></td>
                    <td><input type="text" name="checkout[]" id="checkout4" placeholder="tanggal check-out"></td>
                    <td><input type="text" name="total[]" id="total4" placeholder="total"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="kamar[]" id="kamar5">
                    </td>
                    <td><input type="text" name="harga[]" id="harga5" placeholder="harga"></td>
                    <td><input type="text" name="checkin[]" id="checkin5" placeholder="tanggal check-in"></td>
                    <td><input type="text" name="checkout[]" id="checkout5" placeholder="tanggal check-out"></td>
                    <td><input type="text" name="total[]" id="total5" placeholder="total"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="kamar[]" id="kamar6">
                    </td>
                    <td><input type="text" name="harga[]" id="harga6" placeholder="harga"></td>
                    <td><input type="text" name="checkin[]" id="checkin6" placeholder="tanggal check-in"></td>
                    <td><input type="text" name="checkout[]" id="checkout6" placeholder="tanggal check-out"></td>
                    <td><input type="text" name="total[]" id="total6" placeholder="total"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="kamar[]" id="kamar7">
                    </td>
                    <td><input type="text" name="harga[]" id="harga7" placeholder="harga"></td>
                    <td><input type="text" name="checkin[]" id="checkin7" placeholder="tanggal check-in"></td>
                    <td><input type="text" name="checkout[]" id="checkout7" placeholder="tanggal check-out"></td>
                    <td><input type="text" name="total[]" id="total7" placeholder="total"></td>
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
                    <p>Total:-</p>
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
    <input type="submit" value="Kirim">
</form>
@endsection