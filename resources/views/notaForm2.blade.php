@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/nota.css">
@endsection

@section('content')
<form action="/nota2" method="post">
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
                    <th>jumlah</th>
                    <th>harga</th>
                    <th>total</th>
                </tr>
                <tr>
                    <td><input type="text" name="keterangan[]" id="keterangan1"></td>
                    <td><input type="text" name="jumlah[]" id="jumlah1" placeholder="6 x 2 HARI"></td>
                    <td><input type="text" name="harga[]" id="harga1" placeholder="300.000"></td>
                    <td><input type="text" name="total[]" id="total1" placeholder="4.600.000"></td>
                </tr>
                <tr>
                    <td><input type="text" name="keterangan[]" id="keterangan2"></td>
                    <td><input type="text" name="jumlah[]" id="jumlah2" placeholder="6 x 2 HARI"></td>
                    <td><input type="text" name="harga[]" id="harga2" placeholder="300.000"></td>
                    <td><input type="text" name="total[]" id="total2" placeholder="4.600.000"></td>
                </tr>
                <tr>
                    <td><input type="text" name="keterangan[]" id="keterangan3"></td>
                    <td><input type="text" name="jumlah[]" id="jumlah1" placeholder="6 x 2 HARI"></td>
                    <td><input type="text" name="harga[]" id="harga3" placeholder="300.000"></td>
                    <td><input type="text" name="total[]" id="total3" placeholder="4.600.000"></td>
                </tr>
                <tr>
                    <td><input type="text" name="keterangan[]" id="keterangan4"></td>
                    <td><input type="text" name="jumlah[]" id="jumlah4" placeholder="6 x 2 HARI"></td>
                    <td><input type="text" name="harga[]" id="harga4" placeholder="300.000"></td>
                    <td><input type="text" name="total[]" id="total4" placeholder="4.600.000"></td>
                </tr>
                <tr>
                    <td><input type="text" name="keterangan[]" id="keterangan5"></td>
                    <td><input type="text" name="jumlah[]" id="jumlah5" placeholder="6 x 2 HARI"></td>
                    <td><input type="text" name="harga[]" id="harga5" placeholder="300.000"></td>
                    <td><input type="text" name="total[]" id="total5" placeholder="4.600.000"></td>
                </tr>
                <tr>
                    <td><input type="text" name="keterangan[]" id="keterangan6"></td>
                    <td><input type="text" name="jumlah[]" id="jumlah6" placeholder="6 x 2 HARI"></td>
                    <td><input type="text" name="harga[]" id="harga6" placeholder="300.000"></td>
                    <td><input type="text" name="total[]" id="total6" placeholder="4.600.000"></td>
                </tr>
                <tr>
                    <<td><input type="text" name="keterangan[]" id="keterangan7"></td>
                    <td><input type="text" name="jumlah[]" id="jumlah7" placeholder="6 x 2 HARI"></td>
                    <td><input type="text" name="harga[]" id="harga7" placeholder="300.000"></td>
                    <td><input type="text" name="total[]" id="total7" placeholder="4.600.000"></td>
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