<x-layout>
    <!-- Page Title -->
    <div class="text-center mt-6">
        <h1 class="text-4xl font-bold text-red-500">Add Post</h1>
    </div>

    <!-- Form Section -->
    <div class="max-w-3xl mx-auto mt-6 bg-white p-6 rounded-lg shadow-md">
        <form method="POST" action="/posts">
            <!-- Title -->
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Title</label>
                <input type="text" name="title" class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Description</label>
                <textarea name="description" class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>

            <!-- Post Creator -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Post Creator</label>
                <select name="post_creator" class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value=1>John</option>
                    <option value=2>Esraa</option>
                    <option value=3>Eman</option>
                    <option value=4>Doaa</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-green-500 text-white px-4 py-2 cursor-pointer rounded-lg hover:bg-green-600 transition">
                Create
            </button>
        </form>
    </div>
</x-layout>

