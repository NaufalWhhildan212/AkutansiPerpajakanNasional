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
             <h3>Data User</h3>
           </div>
           <div class="main-body">
             <div class="home-content">
               <button type="button" class="btn-tambah">
				<a href="User-Entry.php" class="btn-tambah">Tambah Data</a>
			    </button>

          <button type="button" class="btn-tambah">
				<a href="User-cetak.php" class="btn-tambah">Cetak Data</a>
			    </button>

                <table class="table-data">
                    <thead>
                     <tr>
                       <th style="width: 13%">Id Customer</th>
                       <th style="width: 13%">Nama Customer</th>
                       <th style="width: 13%">Alamat</th>
                       <th style="width: 13%">No Telepon</th>
                       <th style="width: 13%">Perusahaan</th>
                       <th style="width: 15%">Action</th>
                     </tr>
                    </thead>
                    <tbody>
                    <?php
                        include '../koneksi.php'; // Sertakan file koneksi.php

                        // Query untuk mengambil data layanan dari database
                        $query = "SELECT * FROM tb_datacustomer";
                        $result = $koneksi->query($query);

                        // Cek apakah ada data yang ditemukan
                        if ($result->num_rows > 0) {
                            // Tampilkan data layanan dalam bentuk tabel
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['Id_customer'] . "</td>";
                                echo "<td>" . $row['Nama_customer'] . "</td>";
                                echo "<td>" . $row['Alamat'] . "</td>";
                                echo "<td>" . $row['no_telepon'] . "</td>";
                                echo "<td>" . $row['Perusahaan'] . "</td>";
                                echo "<td>";
                                echo "<form action='user-edit.php' method='get'>";
                                echo "<input type='hidden' name='id' value='" . $row['Id'] . "'>";
                                echo "<button type='submit' class='btn-edit'>Edit</button>";
                                echo "</form>";
                                echo "<form action='user-delete.php' method='post' style='display:inline;'>";
                                echo "<input type='hidden' name='id' value='" . $row['Id'] . "'>";
                                echo "<button type='submit' class='btn-delete' onclick='return confirm(\"Apakah Anda yakin ingin menghapus layanan ini?\")'>Hapus</button>";
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Tidak ada data layanan</td></tr>";
                        }

                        // Tutup koneksi database
                        $koneksi->close();
                        ?>
                    </tbody>
                 </table>
            </div>              
           </div>
           </html>