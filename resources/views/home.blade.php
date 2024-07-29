<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Oleh-Oleh</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-green-700 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-3xl font-bold">BBC Prototype</a>
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Search..." class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">Search</button>
            </div>
        </div>
    </nav>

    <!-- Promo Banner -->
    <section class="bg-green-800 text-white text-center py-3">
        <p class="text-lg font-semibold">Special Offer: Get 20% off on all items this weekend!</p>
    </section>

    <!-- Hero Section -->
    <section class="relative bg-green-800 text-white">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://via.placeholder.com/1920x800" alt="Hero Image" class="w-full h-full object-cover opacity-50">
        </div>
        <div class="relative container mx-auto px-6 py-32 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Discover Unique Souvenirs from Banyuwangi</h1>
            <p class="text-lg md:text-xl mb-8">Explore traditional goods and support local artisans. Shop now for exclusive items.</p>
            <a href="#categories" class="inline-block px-6 py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition">Shop Now</a>
        </div>
    </section>

    <!-- Company Profile -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold mb-6 text-center">About Us</h2>
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2">
                <img src="https://via.placeholder.com/500x400" alt="Company Image" class="w-full rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2 md:pl-8 mt-8 md:mt-0">
                <h3 class="text-2xl font-semibold mb-4">Our Mission</h3>
                <p class="text-gray-700 mb-4">We are committed to showcasing the rich culture and heritage of Banyuwangi through unique and high-quality traditional souvenirs. Our mission is to support local artisans and bring their craftsmanship to a broader audience.</p>
                <h3 class="text-2xl font-semibold mb-4">Our Vision</h3>
                <p class="text-gray-700">To be the leading platform for traditional souvenirs, connecting buyers with artisans and promoting the rich cultural heritage of Indonesia.</p>
            </div>
        </div>
    </section>

    <!-- Our Categories -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold mb-6 text-center">Our Categories</h2>
        <div id="categories">
            <!-- Kategori cards will be loaded here -->
        </div>
    </section>

    <!-- Testimonials -->
    <section class="bg-green-50 py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-6 text-center">What Our Customers Say</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/3 px-4 mb-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <p class="text-gray-700 mb-4">"The quality of the souvenirs is outstanding! I was impressed by the craftsmanship and attention to detail. Will definitely purchase again."</p>
                        <p class="font-semibold">Anna J.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <p class="text-gray-700 mb-4">"A wonderful experience shopping for traditional items. The website is user-friendly, and the products are fantastic."</p>
                        <p class="font-semibold">John D.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <p class="text-gray-700 mb-4">"I love supporting local artisans, and this platform makes it easy to find beautiful, authentic products."</p>
                        <p class="font-semibold">Maria S.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold mb-6 text-center">Upcoming Events</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Traditional Arts Festival</h3>
                    <p class="text-gray-700 mb-4">Join us for a celebration of Banyuwangi's rich arts and culture. Enjoy performances, workshops, and an array of traditional crafts.</p>
                    <p class="text-gray-600">Date: August 15, 2024</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Crafts and Culture Workshop</h3>
                    <p class="text-gray-700 mb-4">Participate in hands-on workshops and learn about the traditional crafts of Banyuwangi from local artisans.</p>
                    <p class="text-gray-600">Date: September 10, 2024</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Local Artisan Expo</h3>
                    <p class="text-gray-700 mb-4">Meet local artisans and explore their unique creations. A great opportunity to buy exclusive items directly from the makers.</p>
                    <p class="text-gray-600">Date: October 5, 2024</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold mb-6 text-center">Featured Products</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Featured Product 1" class="w-full h-48 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Handcrafted Wooden Bowl</h3>
                    <p class="text-gray-700 mb-2">Beautifully crafted by local artisans, perfect for serving or decoration.</p>
                    <p class="text-gray-900 font-bold">Rp 250,000</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Featured Product 2" class="w-full h-48 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Traditional Batik Scarf</h3>
                    <p class="text-gray-700 mb-2">Elegant batik scarf made from high-quality fabric, showcasing traditional patterns.</p>
                    <p class="text-gray-900 font-bold">Rp 150,000</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Featured Product 3" class="w-full h-48 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Handmade Ceramic Mug</h3>
                    <p class="text-gray-700 mb-2">Unique ceramic mug, perfect for your morning coffee or tea.</p>
                    <p class="text-gray-900 font-bold">Rp 120,000</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Featured Product 4" class="w-full h-48 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Traditional Handwoven Basket</h3>
                    <p class="text-gray-700 mb-2">Handwoven basket with intricate designs, ideal for storage or decoration.</p>
                    <p class="text-gray-900 font-bold">Rp 200,000</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold mb-6 text-center">Our Blog</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Blog Post 1" class="w-full h-48 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Exploring the Art of Batik</h3>
                    <p class="text-gray-700 mb-4">Discover the history and techniques behind traditional batik fabric, an integral part of Indonesian culture.</p>
                    <a href="#" class="text-green-500 font-semibold hover:underline">Read More</a>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Blog Post 2" class="w-full h-48 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">The Craftsmanship of Wooden Carvings</h3>
                    <p class="text-gray-700 mb-4">Learn about the intricate craftsmanship involved in creating beautiful wooden carvings in Banyuwangi.</p>
                    <a href="#" class="text-green-500 font-semibold hover:underline">Read More</a>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Blog Post 3" class="w-full h-48 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Top 5 Souvenirs from Banyuwangi</h3>
                    <p class="text-gray-700 mb-4">Check out our top five recommendations for souvenirs that capture the essence of Banyuwangi.</p>
                    <a href="#" class="text-green-500 font-semibold hover:underline">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold mb-6 text-center">Contact Us</h2>
        <div class="max-w-lg mx-auto">
            <form action="#" method="post" class="bg-white p-6 rounded-lg shadow-lg">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
                </div>
                <button type="submit" class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition">Send Message</button>
            </form>
        </div>
    </section>


    <!-- Additional Features -->
    <section class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Google Map -->
            <div class="w-full h-80 bg-gray-300 rounded-lg overflow-hidden">
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.224913109244!2d-122.41941808468139!3d37.7749292797591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808d03efb5e7%3A0x42f3425c77da29a7!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1624477275471!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!-- YouTube Profile -->
            <div class="w-full h-80 bg-gray-300 rounded-lg overflow-hidden flex items-center justify-center">
                <a href="https://www.youtube.com/channel/UCyourchannelid" target="_blank" class="flex flex-col items-center">
                    <img src="https://www.example.com/your-youtube-thumbnail.jpg" alt="YouTube Channel" class="w-64 h-36 object-cover rounded-lg">
                    <p class="mt-4 text-center text-lg font-semibold text-gray-800">Our YouTube Channel</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white py-6">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h4 class="text-xl font-semibold mb-4">Contact Info</h4>
                    <p class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i>123 Main Street, Banyuwangi</p>
                    <p class="mb-2"><i class="fas fa-phone-alt mr-2"></i>(+62) 123-456-7890</p>
                    <p><i class="fas fa-envelope mr-2"></i>info@example.com</p>
                </div>
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h4 class="text-xl font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-gray-300 transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white hover:text-gray-300 transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white hover:text-gray-300 transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white hover:text-gray-300 transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <h4 class="text-xl font-semibold mb-4">Newsletter Signup</h4>
                    <form action="#" method="post">
                        <input type="email" placeholder="Your email address" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 mb-4" required>
                        <button type="submit" class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-green-800 text-center py-2">
            <p class="text-sm">&copy; 2024 Tokopedia Clone. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        function loadCategories() {
            $.get('/api/categories', function(categories) {
                console.log('Categories:', categories); // Debugging line
                $('#categories').html(''); // Clear existing categories
                categories.forEach(function(category) {
                    $('#categories').append(`
                        <div id="category-${category.id}" class="mb-8">
                            <h3 class="text-xl font-semibold mb-4">${category.name || 'Unnamed Category'}</h3>
                            <div class="flex overflow-x-auto whitespace-nowrap items-center scroll-container">
                                <div class="flex flex-nowrap">
                                    <!-- Barang cards will be loaded here -->
                                </div>
                                <button class="loadMore px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex-shrink-0 ml-4" data-category-id="${category.id}">View More</button>
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
            }).fail(function() {
                console.error("Failed to load categories");
            });
        }

        function loadCategoryBarangs(categoryId, skip = 0) {
            $.get(`/api/categories/${categoryId}/barangs`, { skip: skip }, function(barangs) {
                console.log('Barangs:', barangs); // Debugging line
                if (skip === 0) {
                    $(`#category-${categoryId} .flex > .flex-nowrap`).html('');
                }

                barangs.forEach(function(barang) {
                    $(`#category-${categoryId} .flex > .flex-nowrap`).append(`
                        <div class="scroll-item inline-block w-60 mr-4 last:mr-0 max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full h-48 object-cover" src="${barang.gambar || 'https://via.placeholder.com/400x300'}" alt="${barang.nama || 'No Image'}">
                            <div class="px-6 py-4">
                                <div class="font-bold text-lg mb-2">${barang.nama || 'Unnamed Item'}</div>
                                <p class="text-gray-700 text-base">${barang.deskripsi || 'No Description'}</p>
                                <p class="text-gray-900 font-bold mt-2">Rp ${barang.harga || '0'}</p>
                                <a href="/barangs/${barang.id}"><button class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Beli Sekarang</button></a>
                            </div>
                        </div>
                    `);
                });

                // Show/hide the "View More" button based on the number of items loaded
                if (barangs.length < 10) {
                    $(`#category-${categoryId} .loadMore`).hide();
                } else {
                    $(`#category-${categoryId} .loadMore`).show();
                }
            }).fail(function() {
                console.error("Failed to load barangs");
            });
        }

        $(document).ready(function() {
            loadCategories();
        });
    </script>
</body>
</html>
