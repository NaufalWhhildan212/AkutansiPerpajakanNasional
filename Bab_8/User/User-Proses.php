<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $Id_customer = $_POST['Id_customer'];
    $Nama_customer = $_POST['Nama_customer'];
    $Alamat = $_POST['Alamat'];
    $no_telepon = $_POST['no_telepon'];
    $Perusahaan = $_POST['Perusahaan'];

    if (empty($Id_customer) || empty($Nama_customer) || empty($Alamat) || empty($no_telepon) || empty($Perusahaan)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'User-Entry.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO tb_datacustomer (Id_customer, Nama_customer, Alamat, no_telepon, Perusahaan) 
                VALUES ('$Id_customer', '$Nama_customer', '$Alamat', '$no_telepon', '$Perusahaan')";
        
        if (mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Input User Berhasil');
                    window.location = 'User.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'User-Entry.php';
                </script>
            ";
        }
    }
} elseif (isset($_POST['edit'])) {
    $Id_customer = $_POST['Id_customer'];
    $Nama_customer = $_POST['Nama_customer'];
    $Alamat = $_POST['Alamat'];
    $no_telepon = $_POST['no_telepon'];
    $Perusahaan = $_POST['Perusahaan'];

    $sql = "UPDATE tb_datacustomer SET 
            Id_customer = '$Id_customer',
            Nama_customer = '$Nama_customer',
            Alamat = '$Alamat',
            no_telepon = '$no_telepon',
            Perusahaan = '$Perusahaan'
            WHERE Id = '$Id'";

    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Customer Berhasil Diubah');
                window.location = 'User.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'User-edit.php';
            </script>
        ";
    }
}
?>
