<?php
echo '<link rel="stylesheet" type="text/css" href="css/listview.css">';

$articles = [
	0 => [
		'title' => 'Article #1',
		'image' => [
			'title' => 'Testbild #1',
			'source' => 'article-images/2GYB1NSBQG.jpg'
		],
		'content' => 'Dies ist der erste Testartikel.'
	],
	1 => [
		'title' => 'Article #2',
		'content' => 'Dies ist ein weiterer Testartikel.'
	],
	2 => [
		'title' => 'News',
		'content' => 'Dies ist der erste Newsartikel.'
	]
];

echo '<link rel="stylesheet" type="text/css" href="listview.css">';

foreach ($articles as $article) {
?>
	<div class="article">
		<h2><?= $article['title']; ?></h2>
<?php
	if (!is_null($article['image'])) {
		echo '<img class="article-img" src="'.$article["image"]["source"].'" rel="'.$article['image']['title'].'">';
	}
?>
		<div class="article-content">
			<?= $article['content']; ?>
		</div>
	</div>
<?php
}
