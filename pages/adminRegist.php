<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Santri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <div class="d-flex">
    <nav class="d-flex flex-column bg-light p-3" style="background-color: #B6C4B6; font-family: Montserrat; width: 250px; height: 100vh;">
    <a class="navbar-brand mb-3" href="#">
    <img src="path_to_admin_icon.png" alt="Admin" style="width: 30px; height: 30px;">
        Admin
    </a>
      <a class="nav-link" href="index.php?p=data_santri">Data Santri</a>
      <a class="nav-link" href="index.php?p=data_guru">Data Guru</a>
      <a class="nav-link" href="index.php?p=galeri">Galeri</a>
      <a class="nav-link mt-auto btn btn-danger text-white" id="logoutBtn">Logout</a>
    </nav>

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
                <button class="btn btn-success btn-sm" id="acceptBtn">Terima</button>
                <button class="btn btn-danger btn-sm">Tolak</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('logoutBtn').addEventListener('click', function() {
      Swal.fire({
        title: 'Apakah Anda ingin mengakhiri sesi Admin?',
        text: "Anda akan dikeluarkan!",
        icon: 'Perhatian',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = 'logout.php';
        }
      });
    });
    
    document.getElementById("acceptBtn").addEventListener("click", function(event){
      event.preventDefault();        
      window.location.href = "admin.php";
    });
  </script>
</body>
</html>