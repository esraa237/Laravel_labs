<x-layout title="Show Post">
    <!-- Page Title -->
    <div class="text-center mt-6">
        <h1 class="text-4xl font-bold text-red-500">(Show)</h1>
    </div>

    <!-- Post Info Section -->
    <div class="max-w-4xl mx-auto mt-6 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold border-b pb-2">Post Info</h2>
        <p class="mt-4"><strong>Title :-</strong> {{$post['title']}}</p>
        <p class="mt-2"><strong>Description :-</strong></p>
        <p class="text-gray-600">{{$post['description']}}</p>
    </div>

    <!-- Post Creator Info Section -->
    <div class="max-w-4xl mx-auto mt-6 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold border-b pb-2">Post Creator Info</h2>
        <p class="mt-4"><strong>Name :-</strong> {{$post['posted_by']['name']}}</p>
        <p class="mt-2"><strong>Email :-</strong> {{$post['posted_by']['email']}}</p>
        <p class="mt-2"><strong>Created At :-</strong> {{$post['posted_by']['created_at']}}</p>
    </div>
</x-layout>
