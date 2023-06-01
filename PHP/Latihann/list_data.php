<h2>List Data</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Alamat</th>
    </tr>
    <?php
        include'conn.php';
        $mahasiswa = mysqli_query($conn, "select * from mahasiswa");
        $no=1;
        foreach ($mahasiswa as $value) {
            echo"
            <tr>
                <td>$no</td>
                <td>".$value['nama_mahasiswa']."</td>
                <td>".$value['nim_mahasiswa']."</td>
                <td>".$value['alamat_mahasiswa']."</td>
            </tr>
            ";
            $no++;
        }
    ?>
</table>