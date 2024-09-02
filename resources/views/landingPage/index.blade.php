<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Landing Page</title>
</head>
<body class="bg-midnight-blue">
    <!-- Header -->
    <header class="bg-charcoal-blue text-white p-3 fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Website Title</h1>
            <nav class="flex-grow">
                <ul class="flex justify-center space-x-20">
                    <li><a href="#main-content" class="text-white hover:text-gold font-bold text-lg transition-colors duration-300">Home</a></li>
                    <li><a href="#about-us" class="text-white hover:text-gold font-bold text-lg transition-colors duration-300">About</a></li>
                    <li><a href="#services" class="text-white hover:text-gold font-bold text-lg transition-colors duration-300">Services</a></li>
                    <li><a href="#contact-us" class="text-white hover:text-gold font-bold text-lg transition-colors duration-300">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main id="main-content" class="container mx-auto p-8 flex flex-col lg:flex-row items-center justify-center gap-8 mt-16 pt-16 scroll-mt-16">
        <!-- Text Content -->
        <div class="text-center lg:text-left lg:mr-8 mb-8 lg:mb-0 mt-20">
            <h2 class="text-4xl font-bold text-white mb-4">MMML RECRUITMENT SERVICES INC.</h2>
            <p class="text-lg text-white mb-4">A recruitment service for overseas Filipino workers.</p>
            <!-- Apply Now Button -->
            <a href="{{ route('onlineApplication') }}" class="bg-white text-charcoal-blue px-4 py-2 rounded hover:bg-gold font-bold transition-colors duration-300">Apply Now</a>
        </div>
        <!-- Image -->
        <div class="flex justify-center mt-20">
            <img src="{{ Vite::asset('resources/Images/MMML-LOGO.jpg') }}" alt="Recruitment Services" class="w-80 h-80 object-cover rounded-lg">
        </div>
    </main>

    <!-- About Us Section -->
    <section id="about-us" class="container mx-auto p-8 mt-48 pt-20">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white mb-4">About Us</h2>
            <div class="flex justify-center mb-4">
                <img src="{{ Vite::asset('resources/Images/photo1.jpg') }}" alt="About Us" class="w-80 h-80 object-cover rounded-lg">
            </div>
            <p class="text-lg text-white">We are committed to providing the best recruitment services to overseas Filipino workers, ensuring that their skills are matched with the right opportunities abroad.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="container mx-auto p-8 mt-48 pt-20">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Our Services</h2>
            <div class="flex justify-center mb-4">
                <img src="{{ Vite::asset('resources/Images/photo2.jpg') }}" alt="Services" class="w-80 h-80 object-cover rounded-lg">
            </div>
            <p class="text-lg text-white">We offer a range of services to meet the needs of our clients, including personalized recruitment strategies, comprehensive job matching, and support throughout the placement process.</p>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact-us" class="container mx-auto p-8 mt-48 pt-20">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Contact Us</h2>
            <div class="flex justify-center mb-4">
                <img src="{{ Vite::asset('resources/Images/photo3.jpg') }}" alt="Contact Us" class="w-80 h-80 object-cover rounded-lg">
            </div>
            <p class="text-lg text-white">Feel free to reach out to us for any inquiries or support. We are here to help you with all your recruitment needs and to provide the best assistance possible.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
            <p>Follow us on:
                <a href="#" class="hover:underline">Twitter</a> |
                <a href="#" class="hover:underline">Facebook</a> |
                <a href="#" class="hover:underline">Instagram</a>
            </p>
        </div>
    </footer>
</body>
</html>
