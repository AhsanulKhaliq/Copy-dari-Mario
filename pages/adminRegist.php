<?php 
require_once('authorization_admin.php');
?>
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
    <nav class="d-flex flex-column p-3" style="background-color: #B6C4B6; font-family: Montserrat; width: 250px; height: 100vh;">
      <a class="navbar-brand mb-3" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
        </svg>
        <?php echo $_SESSION["role"]?>
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
              <a href="../index.php?p=listsantri" class="btn btn-warning">Tinjau</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card bg-light mb-3">
            <div class="card-body">
              <h5 class="card-title">Daftar Manual</h5>
              <p class="card-text">Bagi pendaftar offline, jika seluruh berkas telah lengkap silahkan daftarkan manual (melalui admin).</p>
              <a href="../index.php?p=santri" class="btn btn-success">Daftar</a>
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
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Nama Calon Santri</td>
              <td>Alamat</td>
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
        confirmButtonText: 'Ya'
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