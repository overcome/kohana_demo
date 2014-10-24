<!DOCTYPE html>
<html>
<head>
    <title>Demo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form action="" method="post">
    标题：<input type="text" name="title" /><?= Arr::get($errors, 'title'); ?><br />
    内容：<textarea name="content" cols="40" rows="4"></textarea>
    <input type="submit" value="发布" /><?= Arr::get($errors, 'content'); ?>
</form>

</body>
</html>
