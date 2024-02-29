<?php

class Mahasiswa
{
    private $nama;
    private $namaDosen;
    private $nim;
    private $universitas;
    private $jurusan;

    public function __construct($nama, $namaDosen, $nim, $universitas, $jurusan)
    {
        $this->nama = $nama;
        $this->namaDosen = $namaDosen;
        $this->nim = $nim;
        $this->universitas = $universitas;
        $this->jurusan = $jurusan;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNamaDosen()
    {
        return $this->namaDosen;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getUniversitas()
    {
        return $this->universitas;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }
}

class Matkul
{
    private $namaMatkul;
    private $kelasMatkul;
    private $jamMatkul;

    public function __construct($namaMatkul, $kelasMatkul, $jamMatkul)
    {
        $this->namaMatkul = $namaMatkul;
        $this->kelasMatkul = $kelasMatkul;
        $this->jamMatkul = $jamMatkul;
    }

    public function getNamaMatkul()
    {
        return $this->namaMatkul;
    }

    public function getKelasMatkul()
    {
        return $this->kelasMatkul;
    }

    public function getJamMatkul()
    {
        return $this->jamMatkul;
    }
}

class FormMahasiswa
{
    public function tampilkanData(Mahasiswa $mahasiswa, Matkul $matkul)
    {
        echo "<b>Data Mahasiswa:</b><br><br>";
        echo "Nama: " . $mahasiswa->getNama() . "<br>";
        echo "Nama Dosen: " . $mahasiswa->getNamaDosen() . "<br>";
        echo "NIM: " . $mahasiswa->getNim() . "<br>";
        echo "Universitas: " . $mahasiswa->getUniversitas() . "<br>";
        echo "Jurusan: " . $mahasiswa->getJurusan() . "<br><br>";
        echo "<b>Mata Kuliah yang Diambil:</b><br><br>";
        echo "Nama Matkul: " . $matkul->getNamaMatkul() . "<br>";
        echo "Kelas Matkul: " . $matkul->getKelasMatkul() . "<br>";
        echo "Jam Matkul: " . $matkul->getJamMatkul() . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $namaDosen = $_POST["namaDosen"];
    $nim = $_POST["nim"];
    $universitas = $_POST["univ"];
    $jurusan = $_POST["jurusan"];
    $namaMatkul = $_POST["namaMatkul"];
    $kelasMatkul = $_POST["kelasMatkul"];
    $jamMatkul = $_POST["jamMatkul"];

    $mahasiswa = new Mahasiswa($nama, $namaDosen, $nim, $universitas, $jurusan);
    $matkul = new Matkul($namaMatkul, $kelasMatkul, $jamMatkul);

    $formMahasiswa = new FormMahasiswa();
    $formMahasiswa->tampilkanData($mahasiswa, $matkul);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Input Kartu Rencana Studi Mahasiswa</h1>
    <div class="form-wrapper">
        <form action="" method="post">
            <input type="text" name="nama" placeholder="Masukkan Nama Anda">
            <input type="text" name="namaDosen" placeholder="Masukkan Nama Dosen Anda">
            <input type="number" name="nim" placeholder="Masukkan NIM Anda">
            <input type="text" name="univ" placeholder="Masukkan Universitas Anda">
            <input type="text" name="jurusan" placeholder="Masukkan Jurusan Anda">
            <h3>Ambil Mata Kuliah</h3>
            <input type="text" name="namaMatkul" placeholder="Masukkan Nama Matkul">
            <input type="number" name="kelasMatkul" placeholder="Masukkan Kelas Matkul">
            <input type="text" name="jamMatkul" placeholder="Masukkan Jam Matkul">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>