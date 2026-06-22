<?php include 'includes/db.php'; $r=$conn->query("SELECT * FROM properties"); ?>
<!DOCTYPE html><html><head><title>Elite Estates</title><link rel="stylesheet" href="style.css"></head>
<body><header><h1>Elite Estates</h1><nav><a href='admin/dashboard.php'>Admin</a></nav></header>
<div class='grid'>
<?php while($p=$r->fetch_assoc()){ ?>
<div class='card'>
<h2><?= $p['title'] ?></h2>
<p>R<?= number_format($p['price']) ?></p>
<p><?= $p['location'] ?></p>
<img src='uploads/<?= $p['image'] ?>' width='250'>
</div>
<?php } ?>
</div></body></html>