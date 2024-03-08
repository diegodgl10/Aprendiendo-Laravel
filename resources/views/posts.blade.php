<x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <h1>
                <a href="/posts/{{ $post->slug; }}"
                    title="Visitar: {{ substr($post->title, 0, 30) . '...'; }}">
                    {!! $post->title; !!}
                </a>
            </h1>
            <h4>
                {!! date("Y-m-d", $post->date); !!}
            </h4>
            <h5>
                <a href="/categories/{{ $post->category->slug; }}"
                    title="Categoria: {{ $post->category->slug; }}">
                    {!! $post->category->name !!}
                </a>
            </h5>
            <div>
                <p>{!! $post->excerpt; !!}</p>
            </div>
        </article>
    @endforeach
</x-layout>
