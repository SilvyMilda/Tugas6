<?php
//error
if (isset($_GET['error']))
{
    $error=$_GET['error'];
}
else
{
    $error="";
}

//pesan penyebab error
$pesan="";
if ($error=="variabel_belum_diset")
{
    $pesan="<h3>Anda harus mengakses halaman ini dari form.php</h3>";
}
if ($error=="nama_kosong")
{
    $pesan="<h3>Anda harus mengisi nama terlebih dahulu!</h3>";
}
if ($error=="email_kosong")
{
    $pesan="<h3>Anda harus mengisi email terlebih dahulu!</h3>";
}
?>

<!DOCTYPE htmml>
<head>
    <meta http-equiv="Content-Type"content="text/htmm;;charset=UTF-8"/>
    <title>Form PHP</title>
</head>
<body>
    <h2>Form Login></h2>
    <?php
    echo $pesan;
    ?>
    <form action="prosess.php"method="get">
        Nama:<input type="text"name="nama"/>
        <br />
        Email:<input type="text"name="email"/>
        <br />
        <input type="submit"value="Submit">
    </form>
<body>
</html>