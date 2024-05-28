<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Santri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="card bg-light mb-3">
          <div class="card-body">
            <h5 class="card-title">Data Santri</h5>
            <p class="card-text">Jumlah Santri: <b>00 Santri</b></p>
            <p class="card-text">Menunggu Approval: <b>01 Data</b></p>
            <p class="card-text">Diterima: <b>01 Data</b></p>
            <a href="#" class="btn btn-warning">Tinjau</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card bg-light mb-3">
          <div class="card-body">
            <h5 class="card-title">Daftar Manual</h5>
            <p class="card-text">Bagi pendaftar offline, jika seluruh berkas telah lengkap silahkan daftarkan manual (melalui admin).</p>
            <a href="#" class="btn btn-success">Daftar</a>
          </div>
        </div>
      </div>
    </div>
    
    <h2 class="mt-5">List Pendaftar</h2>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th>No.</th>
            <th>Nama Calon Santri</th>
            <th>TTL</th>
            <th>Alamat</th>
            <th>Pendidikan Terakhir</th>
            <th>Nama Wali</th>
            <th>No. Telepon Wali</th>
            <th>Pas Foto</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Nama Calon Santri</td>
            <td>TTL</td>
            <td>Alamat</td>
            <td>Pendidikan Terakhir</td>
            <td>Nama Wali</td>
            <td>No. Telepon Wali</td>
            <td>
              <button class="btn btn-success btn-sm" id="myButton">Terima</button>
              <button class="btn btn-danger btn-sm">Tolak</button>
            </td>
          </tr>
          <!-- Repeat the above <tr> block for additional rows -->
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
        document.getElementById("myButton").onclick = function () {
        location.href = "admin.php";D};
  </script>
</body>
</html>
