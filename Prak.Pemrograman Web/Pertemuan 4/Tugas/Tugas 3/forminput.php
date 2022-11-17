<head>
    <style>
            fieldset {
            margin: auto;
            margin-top: 230px;
            text-align: center;
            width: 250px;
            background-color: #829460;
            }
    </style>
</head>
<body>
    <fieldset>
        <form method="GET" action="prosesinput.php">
            <br>
            <label>Name</label>
            <input type="text" name="nama" placeholder="Masukan Nama Anda" required /><br /><br />
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukan Email Anda" required /><br /><br />
            <button type="Submit" style="background-color: white; color: #829460;">Login</button>
            <button type="reset" style="background-color: white; color: #829460;">Reset</button>
        </form>
    </fieldset>
</body>