<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - Imperial Journal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<?php include 'partials/navbar.php' ; ?>


    <!-- Main Container -->
    <div class="max-w-6xl mx-auto py-10 px-4">
        <!-- Page Title -->
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Our Blogs</h1>

        <!-- Blog Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Blog Title 1</h2>
                <p class="text-gray-600 mb-4">
                    This is the first few lines of the blog post that introduce the topic. 
                    The content here is kept short to capture the reader's attention...
                </p>
                <a href="blog1.html" class="text-blue-500 font-semibold hover:underline">Read More</a>
            </div>

            <!-- Blog Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Blog Title 2</h2>
                <p class="text-gray-600 mb-4">
                    This is a brief excerpt from another blog post. It provides a summary 
                    of the blog and entices the reader to click the "Read More" link...
                </p>
                <a href="blog2.html" class="text-blue-500 font-semibold hover:underline">Read More</a>
            </div>

            <!-- Blog Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Blog Title 3</h2>
                <p class="text-gray-600 mb-4">
                    Another introduction to a blog post, designed to give the reader a 
                    preview of what the article covers. Keep it engaging and concise...
                </p>
                <a href="blog3.html" class="text-blue-500 font-semibold hover:underline">Read More</a>
            </div>
            
            <!-- Additional blog cards can be added here following the same structure -->
        </div>
    </div>

    <?php include 'partials/footer.php' ; ?>


</body>
</html>
