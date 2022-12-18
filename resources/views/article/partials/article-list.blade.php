<section class="mx-auto max-w-3xl">
    <ul class="flex flex-col space-y-6 max-w-full">
        @forelse ($articles as $article)
        <section class="border-b">
            <h2 class="text-3xl font-bold text-center mt-4 hover:underline {{ $article->online ? '' : 'text-gray-600' }}"><a
                    href="{{ route('articles.show', $article->slug) }}">{{ $article->title }} {{ $article->online ? '' : ' (brouillon)' }}</a></h2>
            <p class="text-sm text-center leading-5 text-gray-700 mt-3">Posted
                {{ \Carbon\Carbon::parse($article->updated_at)->format('d/m/Y') }}</p>
            <article class="markdown-body">
                {!! $article->summary_html !!}
                <div class="text-right mt-8">
                    <a href="{{ route('articles.show', $article->slug) }}" role="button"
                        class="px-4 py-2 border border-gray-300 rounded bg-white text-sm font-medium text-gray-700 hover:border-gray-500 focus:z-10 focus:outline-none focus:border-gray-300 focus:shadow-outline-gray active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        Read more
                    </a>
                </div>
            </article>
        </section>
        @empty
        <li class="flex flex-col items-center justify-center">
            <p class="text-gray-500 text-center">Aucun article</p>
        </li>
        @endforelse
    </ul>
</section>
