<?php
include('Ressources/Views/components/header.php');
?>
<!-- Content -->

<?php

// using query builder
$qb = (new QueryBuilder())
        ->select('*')
        ->from('users');
$users = $db->query($qb);

?>

<!-- End Content -->
<?php
include('Ressources/Views/components/footer.php');
?>