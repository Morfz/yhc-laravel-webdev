<x-admin-layout>
    <div class="bg-gray-100 min-h-screen px-4 py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border border-gray-300">
            <h2 class="text-2xl font-bold leading-tight text-gray-900 mb-4">
              Tambah Materi
            </h2>
  
            @if($errors->any())
              <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                <strong class="font-bold">Errors:</strong>
                <ul>
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
  
            <form action="{{ route('admin.courses.store_lesson', $course) }}" method="POST" class="max-w-lg mx-auto border p-6 rounded">
              @csrf
              <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Judul:</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" class="border border-gray-400 p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              </div>
              <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
                <textarea name="description" id="description" class="border border-gray-400 p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('description') }}</textarea>
              </div>
              <div class="mb-4">
                <label for="embed_link" class="block text-gray-700 font-bold mb-2">Link Embed Materi:</label>
                <input type="text" name="embed_link" id="embed_link" value="{{ old('embed_link') }}" class="border border-gray-400 p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              </div>
              <div class="flex justify-end">
                <a href="{{ route('admin.courses.show', $course) }}" class="text-gray-500 hover:text-gray-700 mr-4 my-auto">Batal</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </x-admin-layout>