<x-layout title="All Posts">
        <!-- Header -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-800">All Posts</h2>
            <a href="{{route('posts.create')}}"><button class="bg-green-600 text-white px-4 py-2 cursor-pointer rounded-md hover:bg-green-700">
                Create Post
            </button></a>
        </div>

        <!-- Posts Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200 text-sm">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="border px-4 py-2">#</th>
                        <th class="border px-4 py-2">Title</th>
                        <th class="border px-4 py-2">Created At</th>
                        <th class="border px-4 py-2">Posted By</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr class="text-gray-700">
                        <td class="border px-4 py-2">{{$post->id}}</td>
                        <td class="border px-4 py-2">{{$post->title}}</td>
                        <td class="border px-4 py-2">{{$post->created_at}}</td>
                        <td class="border px-4 py-2">{{$post->user_id}}</td>
                        <td class="px-4 py-2 flex gap-2 border justify-center">
                            <a href="{{route('posts.show',[$post->id])}}"><button class="bg-blue-500 text-white px-3 py-1 cursor-pointer rounded hover:bg-blue-600">View</button></a>
                            <a href="{{route('posts.edit',[$post->id])}}"><button  class="bg-yellow-500 bg-info-500 text-white cursor-pointer px-3 py-1 rounded hover:bg-yellow-600">Edit</button></a>
                            <form method="POST" action="{{route('posts.destroy',[$post->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 cursor-pointer rounded hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-end mt-4">
            <nav class="inline-flex items-center space-x-2">
                <a href="#" class="px-3 py-1 border rounded-md text-gray-700 hover:bg-gray-200">Previous</a>
                <a href="#" class="px-3 py-1 border rounded-md bg-blue-600 text-white">1</a>
                <a href="#" class="px-3 py-1 border rounded-md text-gray-700 hover:bg-gray-200">2</a>
                <a href="#" class="px-3 py-1 border rounded-md text-gray-700 hover:bg-gray-200">3</a>
                <a href="#" class="px-3 py-1 border rounded-md text-gray-700 hover:bg-gray-200">Next</a>
            </nav>
        </div>
</x-layout>
