<h1>Main Route, view file -> index.php</h1>

<?php
foreach($posts as $key => $post): ?>
    <h3><?= $post->title ?></h3>
<?php endforeach; ?>