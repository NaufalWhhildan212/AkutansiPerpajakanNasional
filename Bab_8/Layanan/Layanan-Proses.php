<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $Id_faktur = $_POST['Id_faktur'];
    $Id_customer = $_POST['Id_customer'];
    $NPWP = $_POST['NPWP'];
    $No_fakturPajak = $_POST['No_fakturPajak'];
    $DPP = $_POST['DPP'];
    $PPN = $_POST['PPN'];

    if (empty($Id_faktur) || empty($Id_customer) || empty($NPWP) || empty($No_fakturPajak) || empty($DPP) || empty($PPN)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'Layanan-Entry.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO tb_datafaktur (Id_faktur, Id_customer, NPWP, No_fakturPajak, DPP, PPN) 
                VALUES ('$Id_faktur', '$Id_customer', '$NPWP', '$No_fakturPajak', '$DPP', '$PPN')";
        
        if (mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Input E-Faktur Berhasil');
                    window.location = 'Layanan.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'Layanan-Entry.php';
                </script>
            ";
        }
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $Id_faktur = $_POST['Id_faktur'];
    $Id_customer = $_POST['Id_customer'];
    $NPWP = $_POST['NPWP'];
    $No_fakturPajak = $_POST['No_fakturPajak'];
    $DPP = $_POST['DPP'];
    $PPN = $_POST['PPN'];

    $sql = "UPDATE  tb_datafaktur SET 
            Id_faktur = '$Id_faktur',
            Id_customer = '$Id_customer',
            NPWP = '$NPWP',
            No_fakturPajak = '$No_fakturPajak',
            DPP = '$DPP',
            PPN = '$PPN'
            WHERE id = '$id'";

    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data E-Faktur Berhasil Diubah');
                window.location = 'Layanan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'Layanan-edit.php';
            </script>
        ";
    }
}
?>
