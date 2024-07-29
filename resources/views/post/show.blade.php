<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <a href="#" class="text-xl font-bold">Osing Wonderland</a>
            <div>
                <input type="text" placeholder="Search..." class="px-4 py-2 border rounded-md">
                <button class="ml-2 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Search</button>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-600 mb-4">{{ $post->date }}</p>
        <p class="text-gray-800">{{ $post->content }}</p>
        <a href="{{ url('/posts') }}" class="inline-block mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Back to Posts</a>
    </div>
</body>
</html>
