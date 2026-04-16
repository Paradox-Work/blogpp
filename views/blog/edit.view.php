<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi ieraksti</title>
</head>
<body>
<h1>Edit Post</h1>

<form method="POST" action="/update">
    <input type="hidden" name="id" value="<?= $post['id'] ?>">

    <textarea name="content"><?= $post['content'] ?></textarea>

    <button type="submit">Update</button>
</form>
</body>
</html>
            