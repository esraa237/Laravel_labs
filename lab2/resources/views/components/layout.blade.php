<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-gray-900 text-white mb-3">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="#" class="text-2xl font-bold">ITIBlog</a>
                <!-- Navigation Links -->
                <div class="space-x-6">
                    <a href="{{ route('posts.index') }}" class="text-xl hover:text-gray-400">All Posts</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="mx-5 bg-white p-6 rounded-lg shadow-md">
        {{ $slot }}
    </div>
</body>
</html>
