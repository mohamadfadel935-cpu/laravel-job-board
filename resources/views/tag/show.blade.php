<x-layout :title="$pageTitle">
 <h2>Tag:{{ $tag->title }}</h2>
 <h3>Related post</h3>
 <ui>
    @forelse($tag->posts as $post)
    <li>
        <strong>{{ $post->title }}</strong>
        <p>Author:{{ $post->author }}</p>
        <a href="{{ route('blog.show',$post->id) }}">View full post</a>
    </li>
    @empty
    <p>No posts related for this tag</p>
    @endforelse
 </ui>
</x-layout> 