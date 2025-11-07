<x-layout :title="$pageTitle">
 <h2>commentad by {{ $comment->author }}</h2>
 <p>{{ $comment->contant }}</p>
 @if ($comment->post)
 <h3>Related post</h3>
 <ul>
    <li>
        <strong>{{ $comment->post->title }}</strong>
        <p>{{ $comment->post->body }}</p>
        <p>Author:{{ $comment->post->author }}</p>
        <a href="{{ route('blog.show',$comment->post->id) }}">View full post</a>
    </li>
 </ul>
 @else
 <p>No related post for this comment.</p>
 @endif
 
</x-layout> 