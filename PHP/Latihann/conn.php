<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "akademik";

    // Create connection
    $conn = mysqli_connect($servername, @$username, $password, $database);

    // Check connection
    if(!$conn) {
        die("Connection failed: " .  mysqli_connect_error());
    }
    //echo "Connection succesfully";

    // code berikut untuk menampilkan data tanpa memanggil file koneksi yang sudah dibuat sebelumnya //

    // $sql = "SELECT nim_mahasiswa, nama_mahasiswa, alamat_mahasiswa FROM mahasiswa";
    // $result = mysqli_query($conn, $sql);

    // if(mysqli_num_rows($result) > 0) {
    //     // output data of each row
    //     while($row = mysqli_fetch_assoc($result)) {
    //         echo "NIM: " .  $row["nim_mahasiswa"]. " -Name: " . $row["nama_mahasiswa"]. " " . $row["alamat_mahasiswa"]. "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }

    // mysqli_close($conn);
?>