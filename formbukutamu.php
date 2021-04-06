<!DOCTYPE html>
</html>
<html>
<head>
    <title>Buku Tamu</title>
    <style type="text/css">
        h1{
            font-size: 40px;
            font-family:fantasy;
            font-style: italic;
            -webkit-text-stroke: 1px black;
            color: white;
            text-shadow:
            3px 3px 0 #000,
            -1px -1px 0 #000,  
            1px -1px 0 #000,
            1px 1px 0 #000,
            1px 1px 0 #000; 
            border-style: solid;
            border-color: black;
            background-color: red;  
            margin: 10px;
            padding: 10px; 
            max-width: 250px;   
        }
        form{
            margin: 10px;
            padding: 10px;
            border-color: black;
            border-style: solid;
            font-family: fantasy;
            font-size: 20px;
            max-width: 250px;
        
        }

    </style>
</head>
<body>
    <h1>Buku Tamu</h1>
    <!-- Form untuk menerima input -->
    <form method="POST" action="insertdatabukutamu.php">
        <p>Nama : </p>
        <input type="text" name="nama">
        <p>Email : </p>
        <input type="text" name="email">
        <p>Isi : </p>
        <textarea name="isi"></textarea> 
        <br>
        <!-- Button untuk mensubmit dan mereset input -->
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>