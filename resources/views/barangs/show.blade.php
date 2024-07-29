<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang - {{ $barang->nama }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <a href="{{ url('/barangs') }}" class="text-xl font-bold">Tokopedia Clone</a>
            <div>
                <input type="text" placeholder="Search..." class="px-4 py-2 border rounded-md">
                <button class="ml-2 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Search</button>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <img class="w-full h-64 object-cover rounded" src="https://via.placeholder.com/400x300" alt="{{ $barang->nama }}">
            <div class="mt-4">
                <h2 class="text-2xl font-bold">{{ $barang->nama }}</h2>
                <p class="text-gray-700 mt-2">{{ $barang->deskripsi }}</p>
                <p class="text-gray-900 font-bold mt-4">Rp {{ $barang->harga }}</p>
                <button class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Beli Sekarang</button>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.js"></script>
</body>
</html>
