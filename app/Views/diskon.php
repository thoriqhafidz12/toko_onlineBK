<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="jaranguda.com tutorial codeigniter4">
    <title>Codeigniter 4 - Jaranguda.com</title>
 
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
body {
  padding-top: 5rem;
}
 
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
 
<main role="main" class="container-fluid">
 
    <h1>Tutorial Codeigniter 4</h1>
    <hr>
 
 
 
 
<table class="table">
  <tt>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
  </tr>
 
<?php
foreach ($data as $diskon) {
  // var_dump($diskon);
?>
  <tr>
    <td><?php echo $diskon['kode_voucher'] . ' ' .  $diskon['tanggal_mulai_berlaku']; ?></td>
    <td><?php echo $diskon['tanggal_akhir_berlaku']; ?></td>
    <td><?php echo $diskon['besar_diskon']; ?></td>
  </tr>
<?php
}
?>
</table>
 
</main><!-- /.container -->
</body>
</html>
