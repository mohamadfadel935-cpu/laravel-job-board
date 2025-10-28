<x-layout :title="$pageTitle">
 <h2>welcome to my blog page</h2>
 @foreach ($posts as $post)
    <h2 class="text-2xl">{{ $post -> title }}</h2>
    <H2>{{ $post-> body }}</H2>
    
 @endforeach
 
 {{ $posts->links() }}
</x-layout> 