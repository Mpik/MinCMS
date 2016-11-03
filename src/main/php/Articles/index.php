<?php
echo '<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">';
echo '<script src="https://use.fontawesome.com/1959b849f9.js"></script>';
echo '<link rel="stylesheet" type="text/css" href="css/listview.css">';

$articles = [
	0 => [
		'title' => 'Article #1',
		'image' => [
			'title' => 'Testbild #1',
			'source' => '2GYB1NSBQG.jpg'
		],
		'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris scelerisque orci sed neque sollicitudin vehicula. Pellentesque ullamcorper tempor neque, eu convallis urna semper nec. Curabitur suscipit mauris et pulvinar sollicitudin. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque eu venenatis felis. Cras a arcu sed turpis laoreet gravida. Nullam nec scelerisque quam, in consectetur elit. Suspendisse mattis dui quis magna facilisis fermentum. In finibus gravida mauris, nec dictum lorem gravida non. In non lacinia nisl. Aliquam gravida massa sit amet eros lacinia porta. Praesent gravida convallis dui ut volutpat.',
		'tags' => 'Min,CMS'
	],
	1 => [
		'title' => 'Article #2',
		'content' => 'Vivamus purus augue, consequat eu scelerisque mattis, accumsan at ipsum. Vivamus tristique augue ante, at dictum ante pharetra id. Morbi condimentum lacus nec mattis semper. Integer et augue dui. Aenean imperdiet fringilla elit id euismod. Fusce ex augue, malesuada at semper at, posuere cursus neque. Nullam odio metus, maximus eget mollis a, euismod in urna. Proin pretium tincidunt risus id mattis. Duis ante orci, blandit sed cursus sit amet, dignissim ut elit. Quisque at magna id turpis tincidunt ullamcorper vel dictum tortor.'

	],
	2 => [
		'title' => 'News',
		'content' => 'Praesent a metus tempus, iaculis tortor eu, aliquet ante. Cras varius sem eu fringilla consequat.',
		'tags' => 'News,Stuff'
	]
];
?>

<div id="navbar" style="position: relative;">
	<h1>MinCMS</h1>
	<div id="search" style="position: absolute; bottom: 0; right: 0;">
		<input id="searchbar" type="text" placeholder="&#xf002; Search">
	</div>
	<div style="clear: both;"></div>
</div>

<?php
foreach ($articles as $article) {
?>
	<div class="article">
		<h2><?= $article['title']; ?></h2>
<?php
	if (!is_null($article['image'])) {
		appendImage($article['image']);
	}
?>
		<div class="article-content">
<?php
			echo $article['content'];
			if (!is_null($article['tags'])) {
				appendTags($article['tags']);
			}
?>
		</div>
	</div>
<?php
}

function appendImage($image) {
?>
	<div class="article-img-container">
		<img class="article-img" src="article-images/<?= $image["source"]; ?>" rel="<?= $image['title']; ?>">
		<?= $image['title']; ?>
	</div>
<?php
}

function appendTags($tags) {
	$tags = explode(',', $tags);
	echo '<br><br>';
	foreach ($tags as $tag) {
?>
		<a class="article-tag" href="#"><?= $tag; ?></a>
<?php
	}
}
