<x-layout>
    <article>
        <h1>
            {!! $post->title; !!}
        </h1>

        <h5>
            {!! date("Y-m-d", $post->date); !!}
        </h5>
        
        <h6>
            <a href="/categories/{{ $post->category->slug; }}"
                title="Categoria: {{ $post->category->slug; }}">
                {!! $post->category->name !!}
            </a>
        </h6>

        <div>
            {!! $post->body; !!}
        </div>
    </article>

    <a href="/"
        title="Ir a la Página Principal"
        style="display: inline-block;
        padding: 10px;
        background-color: #333;
        color: #fff;
        text-decoration: none;">
        Página Principal
    </a>
</x-layout>
