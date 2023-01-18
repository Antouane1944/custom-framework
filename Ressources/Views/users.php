<?php
include('Ressources/Views/components/header.php');
?>

<!-- Content -->

<?php
$UC = new UserController();
$users = $UC->list();

foreach ($users as $user) {
    echo $user['nom'] . '<br>';
}
?>

<!-- End Content -->

<?php
include('Ressources/Views/components/footer.php');
?>