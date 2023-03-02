<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="{{ csrf_token() }}"> 
    <style> 
        table.static {
            position: relative;
            /* left: 3%; */ 
            border: 1px solid #543535; 
        }
    </style> 
    <title>CETAK DATA KERUSAKAN</title> 
</head>
<body> 
    <center>
    <img src="Gambar/kopsurat.jpeg" width="500px">
    </center>
    <center>
        <br>
        <p><font size="4"><b>&nbsp;&nbsp;&nbsp;&nbsp;Laporan Data Pada Barang Kerusakan</b></font></p> 
    </center>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%"> 
            <tr>
                <th>No</th>
                <th>ID Kerusakan</th>
                <!-- <th>Nama Pelapor</th> 
                <th>No Telepon</th>  -->
                <th>Barang</th> 
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lokasi</th> 
                <th>Kode Barang</th> 
                <th>Jenis Kerusakan</th> 
                <!-- <th>Keterangan</th>  -->
            </tr>
            @foreach ($cetakkerusakan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->id_kerusakan }}</td>
                <!-- <td>{{ $item->nama_pelapor }}</td>
                <td>{{ $item->no_telepon }}</td> -->
                <td>{{ $item->barang->nama_barang }}</td>
                <td>{{ date('d F Y', strtotime($item->tanggal)) }}</td>
                <td>{{ $item->waktu }}</td>
                <td>{{ $item->lokasi->nama_lokasi }}</td>
                <td>{{ $item->kd_barang }}</td>
                <td>{{ $item->jenis_kerusakan }}</td>
                <!-- <td>{{ $item->keterangan }}</td> -->
            </tr>
            @endforeach 
        </table> 
    </div> 

    <script type="text/javascript"> 
       window.print();

    </script>
</body> 
</html> 