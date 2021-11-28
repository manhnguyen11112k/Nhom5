<style>
	.page{
		border: 1px solid #ccc;
		float: left;
		text-decoration: none;
		color: white;
		padding: 3px 10px 5px 10px;

	}
</style>
	<?php
if ($current_page > 7) {
	$first_page = 1;
	?>
    <a class="page" href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">Trang đầu</a>
<?php
}
if ($current_page > 1) {
	$prev_page = $current_page - 1;
	?>
    <a class="page" href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">Trang trước</a>
<?php }
?>
<?php for ($num=1; $num <= $totalPages ; $num++) {?>

	<?php if ($num != $current_page) { ?>
          <?php if ($num > $current_page - 7 && $num < $current_page + 7) { ?>
          	 <a class="page" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
          	<?php } ?>
          <?php } else { ?>
          	<strong class="current page"><?= $num ?></strong>

          <?php } ?>
	<?php } ?>

<?php 
if ($current_page < $totalPages - 1) {
	$next_page = $current_page + 1;
	?>
    <a class="page" href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">Trang sau</a>
    <?php
}
if ($current_page < $totalPages - 7) {
	$end_page = $totalPages;
	?>
    <a class="page" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Trang cuối</a>
    <?php
}
?>


