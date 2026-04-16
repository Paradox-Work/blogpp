<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi ieraksti</title>
</head>
<body>
<h1>Posts</h1>

<ul>
<?php foreach ($posts as $post): ?>
    <li>
        <?= $post['content'] ?>

        <a href="/post?id=<?= $post['id'] ?>">View</a>
        <a href="/edit?id=<?= $post['id'] ?>">Edit</a>
        <a href="/delete?id=<?= $post['id'] ?>">Delete</a>
    </li>
<?php endforeach; ?>
</ul>

<a href="/create">Create new post</a>
</body>
</html>
            