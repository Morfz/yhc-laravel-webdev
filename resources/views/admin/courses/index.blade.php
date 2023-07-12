<x-admin-layout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between mb-4">
          <h2 class="text-2xl font-bold leading-tight text-gray-900">
            Daftar Kursus
          </h2>
          <a href="{{ route('admin.courses.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Tambah Kursus
          </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
          @foreach($courses as $course)
            <div class="bg-white overflow-hidden shadow rounded-lg cursor-pointer" onclick="window.location.href='{{ route('admin.courses.show', $course) }}'">
              <div class="px-6 py-4">
                <h3 class="text-lg font-medium text-gray-900">{{ $course->title }}</h3>
                <p class="mt-2 text-sm text-gray-500">{{ $course->description }}</p>
                <p class="mt-2 text-sm text-gray-500">{{ $course->duration }} Jam</p>
              </div>
              <div class="px-6 py-2 bg-gray-100 flex justify-end">
                <a href="{{ route('admin.courses.edit', $course) }}" class="text-yellow-500 hover:text-yellow-700 mr-2">
                  Edit
                </a>
                <form action="{{ route('admin.courses.destroy', $course) }}" method="POST" style="display: inline-block;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-500 hover:text-red-700">
                    Hapus
                  </button>
                </form>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </x-admin-layout>