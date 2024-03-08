<x-layout>
    <article>
        <h1>
            {!! $post->title; !!}
        </h1>

        <h4>
            {!! date("Y-m-d", $post->date); !!}
        </h4>
        
        <h5>
            Por <a href="#">
                {!! $post->user->name !!}
            </a>
            en
            <a href="/categories/{{ $post->category->slug; }}"
                title="Categoria: {{ $post->category->slug; }}">
                {!! $post->category->name !!}
            </a>
        </h5>

        <div>
            <p>{!! $post->body; !!}</p>
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
