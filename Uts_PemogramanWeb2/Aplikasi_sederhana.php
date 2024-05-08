<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasemen Piala Asia U-23 Qatar Group C</title>
</head>
<body>
    <form action="" method="post">
        <label for="negara">Nama Negara:</label>
        <select id="negara" name="negara">
            <option value="Irak U-23">Irak U-23</option>
            <option value="Arab Saudi U-23">Arab Saudi U-23</option>
            <option value="Tajikistan U-23">Tajikistan U-23</option>
            <option value="Thailand U-23">Thailand U-23</option>
        </select><br><br>
        <label for="pertandingan">Jumlah Pertandingan (P):</label>
        <input type="number" id="pertandingan" name="pertandingan" required><br><br>
        <label for="menang">Jumlah Menang (M):</label>
        <input type="number" id="menang" name="menang" required><br><br>
        <label for="seri">Jumlah Seri (S):</label>
        <input type="number" id="seri" name="seri" required><br><br>
        <label for="kalah">Jumlah Kalah (K):</label>
        <input type="number" id="kalah" name="kalah" required><br><br>
        <label for="poin">Jumlah Poin:</label>
        <input type="number" id="poin" name="poin" required><br><br>
        <label for="operator">Nama Operator:</label>
        <input type="text" id="operator" name="operator" required><br><br>
        <label for="nim">NIM Mahasiswa:</label>
        <input type="text" id="nim" name="nim" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Data dari formulir
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $negara = $_POST['negara'];
        $pertandingan = $_POST['pertandingan'];
        $menang = $_POST['menang'];
        $seri = $_POST['seri'];
        $kalah = $_POST['kalah'];
        $poin = $_POST['poin'];
        $operator = $_POST['operator'];
        $nim = $_POST['nim'];

        echo "<h2 style='text-align: center;'>Data Group C Piala Asia Qatar U-23 </h2>";
        echo "<h2 style='text-align: center;'>Per 08 Mei 2024</h2>";
        echo "<h2 style='text-align: center;'>Khurotul Nuraini - 201011400646</h2>";
        echo "<table border='1' style='margin: 0 auto;'>";
        echo "<tr>";
        echo "<th>Nama Negara</th>";
        echo "<th>P</th>";
        echo "<th>M</th>";
        echo "<th>S</th>";
        echo "<th>K</th>";
        echo "<th>Poin</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$negara</td>";
        echo "<td>$pertandingan</td>";
        echo "<td>$menang</td>";
        echo "<td>$seri</td>";
        echo "<td>$kalah</td>";
        echo "<td>$poin</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
