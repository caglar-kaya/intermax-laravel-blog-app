<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
<article>
    <h1>{{ $post->title }}</h1>
    <div>
        {!! $post->body !!}
    </div>
</article>
<a href="/">Go Back</a>
</body>
</html>
