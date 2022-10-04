<article>
    <h2><strong>Category: </strong> {{ $category->title }}</h2>
    <p></p>
    <p><strong>Slug: </strong>{!! $category->slug !!}</p>
    <p></p>
    <strong>Posts: </strong>
    <a href="#">{{ count($category->posts) }}</a>
    <p>
        @foreach( $category->posts as $post )

            <h3>{{ $post->title }}</h3>

        @endforeach
    </p>
</article>