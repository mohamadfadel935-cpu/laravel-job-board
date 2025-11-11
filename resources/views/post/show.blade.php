<x-layout :title="$pageTitle">
 <h2>welcome to my show page</h2>
 
 <h2 class ="text -2xl">{{ $post -> title }}</h2>
 <h2>{{ $post-> body }}</h2>
 <h2>{{ $post->author }}</h2>

 <ul class="mt-6 apace-y-4">
     @foreach ($post->comments as $comment )
        <li class="p-4 bg-gray-100 rounded-md shadow-sm">
        <p class="text gray-800">{{ $comment->contant }}</p>
        <span class="mt-1 text-sm text gray-600">{{ $comment->author }}</span>
        </li>
        @endforeach
    </ul>
    <div class="border border-gray-300 px-3 py-2 mt-2"></div>
    <form action="/comments" method ="POST" class="mt-8">
  @csrf
  <input type="hidden" name="post_id" value="{{ $post->id }}">
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Add Comment</h2>
      <p class="mt-1 text-sm/6 text-gray-600">Use this form to add a comments to the page.</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="author" class="block text-sm/6 font-medium text-gray-900">Your name</label>
          <div class="mt-2">
            <input id="author" type="text" name="author"value="{{ old('author') }}" autocomplete="given-name" 
            class="{{ $errors->has('author') ? 'outline-red-500' : 'outline-gray-300'}} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
          @error('author')
          <span class ="text-red-500">{{ $message }}</span>
          @enderror
        </div>


        <div class="col-span-full">
          <label for="content" class="block text-sm/6 font-medium text-gray-900">Your comment</label>
          <div class="mt-2">
            <textarea id="content" name="content" rows="3" 
            class="{{ $errors->has('content') ? 'outline-red-500' : 'outline-gray-300'}} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 
            placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('content') }}</textarea>
          </div>
          <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about the article.</p>
          @error('content')
          <span class ="text-red-500">{{ $message }}</span>
          @enderror
        </div>
      </div>
    </div>

  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add comment</button>
  </div>
</form>
 
</x-layout> 