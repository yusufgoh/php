<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=salam.php method="post"> <!-- menggunakan method post karena dia eksekusi ke file lain, klo ke sndiri kita pakai get .
     dia memanfaatkan cookies yang ada di browser, jadi kalau di refresh pasti akan error. Pertemuan next kita akan masuk ke session. Which will be different -->
    Silahkan Masukan Nama Anda: <br>
    <input type=Text name=nama_pemakai><br>
    <input type=submit value="Kirim">
    </form>
</body>
</html>