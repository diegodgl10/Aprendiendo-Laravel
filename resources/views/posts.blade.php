<x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <h1>
                <a href="/posts/{{ $post->slug; }}"
                    title="Visitar: {{ substr($post->title, 0, 30) . '...'; }}">
                    {{ $post->title; }}
                </a>
            </h1>
            <h5>
                {{ date("Y-m-d", $post->date); }}
            </h5>

            <div>
                {{ $post->excerpt; }}
            </div>
        </article>
    @endforeach;
</x-layout>
