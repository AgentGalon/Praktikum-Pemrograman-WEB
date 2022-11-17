<head>
    <style>
        fieldset {
        margin: auto;
        margin-top: 230px;
        text-align: center;
        width: 500px;
        background-color: #829460;
        }
    </style>
</head>
<body>
    <fieldset>
        <?php
        // Pemanggilan Nama
        $nama = $_GET['nama'];
        echo "<h2><b>Nama : $nama</b></h2>";
        // Pemanggilan Email
        $email = $_GET['email'];
        echo "<h2><b>Email : $email</b></h2>";
        // Jam/Waktu Login
        date_default_timezone_set('Asia/Jakarta');
        $jam = date("H:i:s");
        echo "<b>Login pada jam :$jam</b><br>";
        echo date("<b>l, d-M-Y</b>");
        ?>
    </fieldset>
</body>