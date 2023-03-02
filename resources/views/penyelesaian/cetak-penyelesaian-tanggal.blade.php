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
    <title>CETAK DATA PENYELESAIAN</title> 
</head>
<body> 
<center>
   <img src="/Gambar/kopsurat.jpeg" width="500px">
    </center>
    <center>
        <br>
        <p><font size="4"><b>&nbsp;&nbsp;&nbsp;&nbsp;Laporan Data Penyelesaian Pertanggal Pada Barang Kerusakan</b></font></p> 
    </center>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%"> 
            <tr>
            <th>No</th>
                <th>ID Penyelesaian</th> 
                <th>ID Kerusakan</th> 
                <th>Nama Barang</th> 
                <th>Nama Teknisi</th> 
                <th>No Telepon</th> 
                <th>Tanggal</th>
                <th>Lama Pengerjaan</th>
                <th>Solusi</th> 
            </tr>
            @foreach ($cetakpertanggal as $item)
            <tr>
            <td>{{ $loop->iteration }}</td>
                <td>{{ $item->id_penyelesaian }}</td>
                <td>{{ $item->id_kerusakan }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->nama_teknisi }}</td>
                <td>{{ $item->no_telepon }}</td>
                <td>{{ date('d F Y', strtotime($item->tanggal)) }}</td>
                <td>{{ $item->lama_pengerjaan }}</td>
                <td>{{ $item->solusi  }}</td>
            </tr>
            @endforeach 
        </table> 
    </div> 
    <script type="text/javascript"> 
       window.print();
    </script>
</body> 
</html> 