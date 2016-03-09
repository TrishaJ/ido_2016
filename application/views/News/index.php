
<?php echo View::factory('News/_filters')
	->set('categories', $categories)
	->set('category_id', $category_id)
?>


<?= $news ?>
