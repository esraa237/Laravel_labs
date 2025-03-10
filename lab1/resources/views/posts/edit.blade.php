<x-layout>
    <!-- Page Title -->
    <div class="text-center mt-6">
        <h1 class="text-4xl font-bold text-red-500">Lab 1 (Edit & Update)</h1>
    </div>

    <!-- Form Section -->
    <div class="max-w-3xl mx-auto mt-6 bg-white p-6 rounded-lg shadow-md">
        <form action="#" method="POST">
            <!-- Title -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Title</label>
                <input type="text" name="title" value="{{$post['title']}}" class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Description</label>
                <textarea name="description" class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">{{$post['description']}}</textarea>
            </div>

            <!-- Post Creator -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Post Creator</label>
                <select name="creator" class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="John" {{ $post['posted_by']['name'] == 'John' ? 'selected' : '' }}>John</option>
                    <option value="Esraa" {{ $post['posted_by']['name'] == 'Esraa' ? 'selected' : '' }}>Esraa</option>
                    <option value="Eman" {{ $post['posted_by']['name'] == 'Eman' ? 'selected' : '' }}>Eman</option>
                    <option value="Doaa" {{ $post['posted_by']['name'] == 'Doaa' ? 'selected' : '' }}>Doaa</option>
                </select>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 cursor-pointer rounded-lg hover:bg-blue-600 transition">
                Update
            </button>
        </form>
    </div>

</x-layout>
