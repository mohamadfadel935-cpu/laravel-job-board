<x-layout :title="$pageTitle">
 <h2>Comments</h2>
 @foreach ($comments as $comment)
 <h2>{{ $comment -> author }}</h2>
 <h2>{{ $comment-> contant }}</h2>
  <a href="/blog/{{ $comment->post->id }}">{{ $comment-> post ->title}}</a>

 @endforeach
</x-layout> 