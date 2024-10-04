<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us | Imperial Journal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

<?php include 'partials/navbar.php' ; ?>

    <!-- Header Section -->
    <header class="bg-indigo-600 text-white py-6">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold">About Imperial Journal</h1>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="container mx-auto px-6 py-12">
        <div class="bg-white p-8 shadow-md rounded-lg">
            <h2 class="text-3xl font-semibold text-indigo-600 mb-4">Introduction</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Welcome to <strong>Imperial Journal</strong>, your go-to resource for learning and advancing your career in 
                computer science and technology. We provide in-depth tutorials and insightful blogs aimed at helping 
                individuals and professionals enhance their knowledge in programming, data science, AI, and more.
            </p>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-8">
            <div class="bg-white p-8 shadow-md rounded-lg">
                <h2 class="text-3xl font-semibold text-indigo-600 mb-4">Our Mission</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    At Imperial Journal, our mission is to empower individuals with the knowledge and skills needed to succeed 
                    in today’s fast-evolving tech landscape. We are dedicated to delivering high-quality content that is 
                    practical, insightful, and accessible to all.
                </p>
            </div>
            <div class="bg-white p-8 shadow-md rounded-lg">
                <h2 class="text-3xl font-semibold text-indigo-600 mb-4">Our Vision</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    We envision a world where technology education is within reach for everyone, enabling more people to 
                    contribute to innovation and growth in their industries. Our goal is to be a leading resource in 
                    computer science education.
                </p>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="container mx-auto px-6 py-12">
        <div class="bg-white p-8 shadow-md rounded-lg">
            <h2 class="text-3xl font-semibold text-indigo-600 mb-4">Our Core Values</h2>
            <ul class="list-disc pl-5 space-y-4 text-lg text-gray-700">
                <li><strong>Quality Content:</strong> We prioritize delivering well-researched, detailed, and accurate information in all our resources.</li>
                <li><strong>Community Focus:</strong> Our readers and learners are at the center of everything we do, and we’re committed to helping them succeed.</li>
                <li><strong>Transparency:</strong> We believe in being open and honest in all our content, ensuring our audience gets trustworthy information.</li>
                <li><strong>Innovation:</strong> We continuously explore new topics and technologies to stay ahead in the ever-evolving world of computer science.</li>
            </ul>
        </div>
    </section>

    <!-- Website History Section -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-6">
            <div class="bg-white p-8 shadow-md rounded-lg">
                <h2 class="text-3xl font-semibold text-indigo-600 mb-4">Our History</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Imperial Journal started with the aim of filling a gap in the tech education space. We began by creating 
                    a series of comprehensive tutorials on programming languages, and soon expanded to cover topics like data 
                    science, artificial intelligence, and software engineering. Initially hosted on WordPress, we’ve since 
                    transitioned to a fully custom-built platform, reflecting our commitment to growth and providing our users 
                    with a seamless experience.
                </p>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php' ; ?>


</body>

</html>
