<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'Layanan.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_datafaktur WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<span style="font-family: verdana, geneva, sans-serif;">
    <html>
     <head>
       <meta charset ="UTF-8">
     <meta http-equiv = "X-UA_Compatible" content = "IE=edge">
     <meta name = "viewport" content = "width=device-width,initial-scale = 1.0">
       <title>E - Pajak</title>
       <link rel="stylesheet" href="../Css/Dashboard.css" />
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     </head>
     <body>
         <nav>
           <div class="navbar">
             <div class="logo">
               <img src="../assets/image/Logo.png" alt="">
               
             </div>
             <ul>
               <li><a href="Dashboard.html">
                 <i class='bx bxs-home'></i>
                 <span class="nav-item">Dashboard</span>
               </a>
               </li>
               <li><a href="">
                 <i class='bx bxs-user-plus'></i>
                 <span class="nav-item">User</span>
               </a>
               </li>
               <li><a href="Layanan.html">
                 <i class='bx bx-task' ></i>
                 <span class="nav-item">E Faktur</span>
               </a>
               </li>
               </li>
               <li><a href="Logout.html" class="logout">
                 <i class='bx bx-log-out' ></i>
                 <span class="nav-item">Logout</span>
               </a>
               </li>
             </ul>
           </div>
         </nav>
         <section class="main">
           <div class="main-top">
             <h3>Data E-Faktur</h3>
           </div>
           <div class="main-body">
             <div class="home-content">
                <h1>Input Data E-Faktur</h1>
                <div class="form">
                <form action="Layanan-Proses.php" method="post">
                        <label for="Id_faktur">Id Faktur</label>
                    <input class="input" type="text" name="Id_faktur" id="Id_faktur" placeholder="Id_faktur"value="<?= $data['Id_faktur'] ?>"/>
                        <label for="Id_customer">Id Customer</label>
                    <input class="input" type="text" name="Id_customer" id="Id_customer" placeholder="Id Customer" value="<?= $data['Id_customer'] ?>"/>
                        <label for="NPWP">NPWP</label>
                    <input class="input" type="number" name="NPWP" id="NPWP" placeholder="NPWP" value="<?= $data['NPWP'] ?>"/>
                        <label for="No_fakturPajak">No Faktur Pajak</label>
                    <input class="input" type="number" name="No_fakturPajak" id="No_fakturPajak" placeholder="No Faktur Pajak"value="<?= $data['No_fakturPajak'] ?>"/>
                    <label for="DPP">DPP</label>
                    <input class="input" type="number" name="DPP" id="DPP" placeholder="DPP"value="<?= $data['DPP'] ?>"/>
                    <label for="PPN">PPN</label>
                    <input class="input" type="number" name="PPN" id="PPN" placeholder="PPN"value="<?= $data['PPN'] ?>"/>

                    <button type="submit" class="btn-tambah"name="edit"
				              id="edit">
                        <a class="btn-tambah">Simpan Data</a>
                        </button>
                </div> 
            </div>              
           </div>
           </html>