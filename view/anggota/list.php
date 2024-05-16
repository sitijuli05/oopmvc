<?php
$judul = "Daftar Anggota";
ob_start()
?>
    <h1> DAFTAR ANGGOTA </h1>
    <ul>
    <?php
    foreach($anggota as $row): ?>
    </ul>
    <li>
        <a href="detail.php?id=<?= $row['id']?> "> <?=$row['nama'];?></a>
    </li>
<?php endforeach ?>
<?php $isi = ob_get_clean() ?>
<?php include 'view/template.php'; ?>
</body>
</html>