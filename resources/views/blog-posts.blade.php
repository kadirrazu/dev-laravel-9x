<!doctype html>
<html lang="en">
<!-- Header -->
<head>
  <meta charset="utf-8">
  <title>Home Page: Our Blog</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/style.css">

  <style>
    .content{
        min-width: 600px;
        margin: 50px auto;
        padding: 10px;
        border: 2px solid #333;
    }
  </style>
</head>
<!-- End Header -->

<!-- Body -->
<body>

  <div class="content">
    
  @foreach($posts as $post)
    <article>
        <h2>
            <a href="post/{{ $post->id }}">{{ $post->title }}</a>
        </h2>
        <p>
            This Post was created by <a href="">{{ $post->user->name }}</a> in <a href="">{{ $post->category->title }}</a>
        </p>
        <p>
            {!! $post->excerpt !!}
        </p>
    </article>
  @endforeach

  </div>

</body>
<!-- End of Body -->

</html>