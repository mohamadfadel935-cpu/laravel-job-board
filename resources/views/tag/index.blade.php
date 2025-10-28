<x-layout :title="$pageTitle">
 <h2 class ="text -2xl">welcome to my Tag page</h2>
 @foreach ($tags as $tag)
    <h2>{{ $tag -> title }}</h2>
    
 @endforeach
</x-layout> 