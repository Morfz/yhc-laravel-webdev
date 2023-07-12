<x-admin-layout>
    <div class="container mx-auto py-12">
      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6">
          <h1 class="text-2xl leading-6 font-medium text-gray-900">{{ $course->title }}</h1>
          <p class="mt-2 text-sm text-gray-500">{{ $course->description }}</p>
          <p class="mt-2 text-sm text-gray-500">{{ $course->duration }} Jam</p>
        </div>
      </div>
  
      <h2 class="text-xl font-bold my-4 pt-5">Materi</h2>
      <div class="flex justify-start mb-4">
        <a href="{{ route('admin.courses.create_lesson', ['course' => $course]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Materi</a>
      </div>
  
      @if($lessons->isEmpty())
        <p>Tidak ada materi yang tersedia</p>
      @else
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Link</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach($lessons as $lesson)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $lesson->title }}</td>
                <td class="px-6 py-4">{{ $lesson->description }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $lesson->embed_link }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <a href="{{ $lesson->embed_link }}" target="_blank" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Lihat
                  </a>
                  <a href="{{ route('admin.courses.edit_lesson', ['course' => $course, 'lesson' => $lesson]) }}" class="text-yellow-500 hover:text-yellow-700 ml-2">Edit</a>
                  <form action="{{ route('admin.courses.destroy_lesson', ['course' => $course, 'lesson' => $lesson]) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endif
  
      <a href="{{ route('admin.courses.index') }}" class="text-blue-500 hover:text-blue-700 mt-4 inline-block">Back to Courses</a>
    </div>
  </x-admin-layout>