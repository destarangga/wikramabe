<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slideshow Landing Page</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    /* Custom Styles */
    body {
        background-color: #f8f9fa;
    }

    .hero {
        background-image: url('assets/image/wikrama.jpg');
        background-size: cover;
        background-position: center;
        height: 400px;
    }
    </style>
</head>

<body class="">
    <div class="mySlides hidden">

        <div class="hero flex items-center justify-center text-white">
            <div class="text-center mt-[200px]">
                <h1 class="text-4xl font-bold mb-4">Welcome to Informasi digital</h1>
                <p class="text-lg mb-8 font-semibold">SMK Wikrama Bogor</p>
                <a href="#features"
                    class="bg-orange-400 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full">Learn More</a>
            </div>
        </div>

        <!-- Features Section -->
        <div id="features" class="container mx-auto my-16">
            <h2 class="text-2xl font-bold mb-8 text-gray-800">Moto dan Visi Misi SMK Wikrama Bogor</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Visi</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Misi</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Mtto</h3>
                    <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-gray-800 text-white py-16 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-lg mb-8">Join us now and experience the incredible benefits of our product.</p>
            <a href="/login" class="bg-orange-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full">Login
                hanya untuk admin</a>
        </div>

        <!-- Footer Section -->
        <footer class="bg-gray-900 text-white py-8 text-center">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </footer>
    </div>

    <div class="mySlides hidden">
        <div class="herro1">
            <div class="text-center text-3xl mt-10 font-bold">
                <h1> Jurusan SMK Wikrama Bogor</h1>
            </div>
            <div class="grid grid-cols-3 gap-3 p-16 pl-[1000px] ">
                <div class="max-w-md bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-40 object-cover" src="assets/image/PPLG1.jpg" alt="Card Image">
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800">PPLG</h2>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-500 hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="max-w-md bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-40 object-cover" src="assets/image/TKJ.jpg" alt="Card Image">
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800">TJKT</h2>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-500 hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="max-w-md bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-40 object-cover" src="assets/image/MMD.jpg" alt="Card Image">
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800">MPLB</h2>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-500 hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="max-w-md bg-white rounded-lg overflow-hidden shadow-lg mt-5">
                    <img class="w-full h-40 object-cover" src="assets/image/Pemasaran.jpg" alt="Card Image">
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800">PMN</h2>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-500 hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="max-w-md bg-white rounded-lg overflow-hidden shadow-lg mt-5">
                    <img class="w-full h-40 object-cover" src="assets/image/tbg.jpg" alt="Card Image">
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800">Tata Boga</h2>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-500 hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="max-w-md bg-white rounded-lg overflow-hidden shadow-lg mt-5">
                    <img class="w-full h-40 object-cover" src="assets/image/HOTEL.jpg" alt="Card Image">
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800">Hotel</h2>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-500 hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mySlides hidden">
        <div>
            <div class="pl-5 mt-5 flex">
                <img class="h-16 w-16" src="assets/image/wikrama.png" alt="Card Image">
                <h1 class="pl-2 mt-5 text-xl font-semibold">SMK Wikrama Bogor Prestasi</h1>

            </div>
            <div class="pl-10 mt-10 ">
                <h1 class="text-2xl font-semibold">Prestasi
                </h1>
            </div>
            <div class="pl-10 mt-10 ">
                <h1 class="text-lg ">Juara Futsal
                </h1>
            </div>
        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="assets/js/script.js"></script>

</html>