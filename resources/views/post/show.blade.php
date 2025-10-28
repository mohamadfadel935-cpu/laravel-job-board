<x-layout :title="$pageTitle">
 <h2>welcome to my show page</h2>
 
 <h2 class ="text -2xl">{{ $post -> title }}</h2>
 <h2>{{ $post-> body }}</h2>
 <ul>
     @foreach ($post->comments as $comment )
        <li>{{ $comment->contant }},{{ $comment->author }}</li>
        @endforeach
    </ul>
 
</x-layout> 