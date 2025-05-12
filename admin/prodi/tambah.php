 <?php
        include '../config/koneksi.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $telpon = $_POST['telpon'];
            $ketua = $_POST['ketua'];

            $stmt = $dbh->prepare("INSERT INTO prodi (kode, nama, alamat, telpon, ketua) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$kode, $nama, $alamat, $telpon, $ketua]);

            header("Location: index.php");
        }
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data Dosen - SB Admin</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
 
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="admin/index.php">Prodi</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle d-flex align-items-center gap-2 text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-user fa-fw"></i>
    <span class="d-none d-sm-inline">Rizki Tri Amelia</span>
</a>                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
</nav>
         <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include_once('../layout/sidebar.php') ?>
    </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Prodi</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php"></a>Dashboard</li>
                        <li class="breadcrumb-item active">Prodi</li>
                    </ol>
    <div class="container mt-4">
        <h2>Tambah Prodi</h2>
       
   


        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Form Tambah Prodi
        </div>
        <div class="card-body">
            <form method="post">
                <div class="mb-3">
                    <label for="kode">Kode</label>
                    <input type="text" name="kode" id="kode" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Nama Prodi</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label>Telpon</label>
                    <input type="text" name="telpon" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Ketua</label>
                    <input type="text" name="ketua" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>


   <!-- Scripts -->
    <script src="../js/scripts.js"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>