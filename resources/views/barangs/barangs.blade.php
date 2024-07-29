<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Oleh-Oleh</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .custom-card img {
            height: 200px;
            object-fit: cover;
        }
        .scroll-container {
            overflow-x: auto;
            white-space: nowrap;
        }
        .scroll-container::-webkit-scrollbar {
            display: none;
        }
        .scroll-item {
            display: inline-block;
            width: 200px; /* Adjust based on your card width */
            margin-right: 1rem;
        }
        .scroll-item:last-child {
            margin-right: 0; /* Remove right margin for the last item */
        }
        .view-more-container {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <a href="#" class="text-xl font-bold">Tokopedia Clone</a>
            <div>
                <input type="text" placeholder="Search..." class="px-4 py-2 border rounded-md">
                <button class="ml-2 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Search</button>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Barang Oleh-Oleh Tradisional Banyuwangi</h1>
        <div id="categories">
            <!-- Kategori cards will be loaded here -->
        </div>
    </div>

    <script>
        function loadCategories() {
            $.get('/api/categories', function(categories) {
                categories.forEach(function(category) {
                    $('#categories').append(`
                        <div id="category-${category.id}" class="mb-8">
                            <h2 class="text-xl font-bold mb-4">${category.name}</h2>
                            <div class="scroll-container">
                                <!-- Barang cards will be loaded here -->
                            </div>
                            <div class="view-more-container">
                                <button class="loadMore px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600" data-category-id="${category.id}">View More</button>
                            </div>
                        </div>
                    `);

                    // Initial load for each category
                    loadCategoryBarangs(category.id);

                    // Event listener for "View More" button
                    $(`#category-${category.id}`).on('click', '.loadMore', function() {
                        const skip = $(`#category-${category.id} .scroll-item`).length;
                        loadCategoryBarangs(category.id, skip);
                    });
                });
            });
        }

        function loadCategoryBarangs(categoryId, skip = 0) {
            $.get(`/api/categories/${categoryId}/barangs`, { skip: skip }, function(barangs) {
                if (skip === 0) {
                    $(`#category-${categoryId} .scroll-container`).html('');
                }

                barangs.forEach(function(barang) {
                    $(`#category-${categoryId} .scroll-container`).append(`
                        <div class="scroll-item custom-card max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="${barang.gambar || 'https://via.placeholder.com/400x300'}" alt="${barang.nama}">
                            <div class="px-6 py-4">
                                <div class="font-bold text-lg mb-2">${barang.nama}</div>
                                <p class="text-gray-700 text-base">${barang.deskripsi}</p>
                                <p class="text-gray-900 font-bold mt-2">Rp ${barang.harga}</p>
                                <a href="/barangs/${barang.id}"><button class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Beli Sekarang</button></a>
                            </div>
                        </div>
                    `);
                });

                // Show/hide the "View More" button based on the number of items loaded
                if (barangs.length < 10) {
                    $(`#category-${categoryId} .view-more-container`).hide();
                } else {
                    $(`#category-${categoryId} .view-more-container`).show();
                }
            });
        }

        $(document).ready(function() {
            loadCategories();
        });
    </script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.js"></script>
</body>
</html>
