<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/mycss.css" />
  <title>1461900271</title>
</head>
<body>
  <body>
    <div class="container-fluid">
      <div class="header">
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom:0px;">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" s>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              <b><a class="navbar-brand">PRAKTIKUM PTW 1461900271</a></b>
            </div>

            <!-- komponen navbar lainnya (link, tombol, teks, dsb -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="/databuku">Data Buku</a></li>
                <li><a href="/dataanggota">Data Anggota</a></li>
                <li><a href="/datapetugas">Petugas</a></li>
                <li><a href="/statuspeminjaman">Status Peminjaman</a></li>
                <li><a href="/laporan">Laporan Peminjaman</a></li>            
              </ul>

            </div>
           </div><!-- /.container -->
        </nav>
      <div class="body" style="margin-top:40px">
        <div class="container">
          <section id="check">
            <div class="row">
              <div class="col-md-12">
                <h2 class="judul" align="center">Laporan</h2>
              </div>
            </div>
   <div class="card-body">
    <div class="row">
      <center>

     <div class="col-md-8">

      <br><br>
     </div>
    </div>
</center>
<br>
   <div class="mt-3" style="max-height: 340px; overflow-y: auto;">
     <table class="table table-bordered">
      <center>
        <tr>
          <th>No</th>
          <th>Nama Buku</th>
          <th>Anggota</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Jatuh Tempo</th>
          <th>Tanggal Kembali</th>
          <th>Denda</th>
        </tr>
        @foreach ($item as $key=>$i)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{ $i->buku_judul }}</td>
            <td>{{ $i->anggota_nama }}</td>
            <td>{{ $i->tgl_pinjam }}</td>
            <td>{{ $i->tgl_jatuh_tempo }}</td>
            <td>{{ $i->tgl_kembali }}</td>
            <td>{{ $i->denda }}</td>
        </tr>
        @endforeach
     </table>   
    </div>
   </div>           
   

    </div>
     <div class="card col-md-8 mx-auto mt-3">
  </div>
 </div>

  </body>

</html>