<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Register</h3>
    <form action="proses_register.php" method="post">
        nama :
        <input type="text" name="nama_siswa" value="" class="form-control">
        Tanggal lahir :
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        gender :
        <select name="gender" class="form-control">
            <option></option>
                <option value="L">laki-laki</option>
                <option value="P">perempuan</option>
        </select>
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        kelas :
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_kelas=mysqli_query($conn,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option value="'.$data_kelas['id'].'">'.$data_kelas['nama_kelas'].'</option>';
            }
            ?>
        </select>
        Username :
        <input type="text" name="username" value="" class="form-control">
        Password :
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
    </form>

    <script src=="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>