<x-layout :title="$pageTitle">

<form method ="POST" action="/comments">
  @csrf
  
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Add Comment</h2>
      <p class="mt-1 text-sm/6 text-gray-600">Use this form to Add a Comment to the blog.</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="author" class="block text-sm/6 font-medium text-gray-900">Author</label>
          <div class="mt-2">
            <input id="author" type="text" name="author"value="{{ old('author') }}" autocomplete="given-name" 
            class="{{ $errors->has('author') ? 'outline-red-500' : 'outline-gray-300'}} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
          @error('author')
          <span class ="text-red-500">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-span-full">
          <label for="contant" class="block text-sm/6 font-medium text-gray-900">Content</label>
          <div class="mt-2">
            <textarea id="contant" name="contant" rows="3" 
            class="{{ $errors->has('contant') ? 'outline-red-500' : 'outline-gray-300'}} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('contant') }}</textarea>
          </div>
          <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about the article.</p>
          @error('contant')
          <span class ="text-red-500">{{ $message }}</span>
          @enderror
        </div>
       
      </div>
    </div>

  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/blog" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>
</x-layout> 