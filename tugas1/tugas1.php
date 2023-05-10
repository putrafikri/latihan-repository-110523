<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           background-image : url("evos.jpeg") ;
           background-size:cover;
        }
    </style>
</head>
<body><center>
    <from action="index.php" method="post">
        <div>
            <label>nama</label><br>
            <input type="text" name="nama">
            
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
            
        </div>
        <div>
            <label>Alamat</label><br>
            <textarea name="alamat"></textarea>
        </div>
        <div>
            <label>Program Pelatihan</label>
            <select name="Programpelatihan" id="">
                <option value= "Junior Web Developer">Junior Web Developer</option>
                <option value= "Digital Marketing">Digital Marketing</option>
                <option value= "Conten Creator">Conten Creator</option>
                <option value= "Desainer Multimedia">Desainer Multimedia</option>
            </select>
            
    </div>
    <div>
            <label>tanggal masuk</label>
            <input type="date" name="tanggal">
        </div>
</from></center>

</body>
</html>