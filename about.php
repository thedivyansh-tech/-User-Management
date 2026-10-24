<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Divyansh</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <nav class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-orange-500">
                MyWebsite
            </a>

            <div class="flex gap-6">
                <a href="index.php" class="hover:text-orange-500">Home</a>
                <a href="about.php" class="text-orange-500 font-semibold">About</a>
            </div>
        </div>
    </nav>

   
    <main class="max-w-5xl mx-auto px-6 py-16">

        <section class="bg-white rounded-3xl shadow-lg overflow-hidden">

            <div class="grid md:grid-cols-2 gap-10 items-center p-8 md:p-12">

                <!-- Profile Picture -->
                <div class="flex justify-center">
                    <div class="w-64 h-64 md:w-80 md:h-80 rounded-3xl overflow-hidden
                                bg-orange-100 border-4 border-orange-200">

                  
                        <img
                            src="divyansh.jpg"
                            alt="My Profile Picture"
                            class="w-full h-full object-cover"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                  
                        <div class="w-full h-full hidden items-center justify-center
                                    text-orange-500 text-6xl font-bold">
                            D
                        </div>

                    </div>
                </div>

              
                <div>
                    <p class="text-orange-500 font-semibold uppercase tracking-widest text-sm mb-3">
                        Get to know me
                    </p>

                    <h1 class="text-4xl md:text-5xl font-bold mb-5">
                        About <span class="text-orange-500">Me</span>
                    </h1>

                    <h2 class="text-xl font-semibold mb-4">
                        Hi, I'm Divyansh!
                    </h2>

                    <p class="text-gray-600 leading-7 mb-4">
                        I'm an IT student who enjoys learning new technologies,
                        building websites, and solving problems through code.
                    </p>

                    <p class="text-gray-600 leading-7 mb-6">
                        I work with HTML, CSS, JavaScript, PHP, MySQL, and Tailwind CSS.
                        I'm continuously improving my development skills by creating
                        practical projects and exploring new ideas.
                    </p>

                    <a
                        href="index.php"
                        class="inline-block bg-orange-500 text-white px-7 py-3
                               rounded-xl font-semibold hover:bg-orange-600
                               transition duration-300"
                    >
                        Back to Home
                    </a>
                </div>

            </div>

       
            <div class="bg-gray-50 p-8 md:p-12 border-t border-gray-100">

                <h2 class="text-2xl font-bold mb-6 text-center">
                    My Skills
                </h2>

                <div class="flex flex-wrap justify-center gap-3">
                    <span class="px-5 py-2 bg-white border rounded-full">HTML</span>
                    <span class="px-5 py-2 bg-white border rounded-full">CSS</span>
                    <span class="px-5 py-2 bg-white border rounded-full">JavaScript</span>
                    <span class="px-5 py-2 bg-white border rounded-full">PHP</span>
                    <span class="px-5 py-2 bg-white border rounded-full">MySQL</span>
                    <span class="px-5 py-2 bg-white border rounded-full">Tailwind CSS</span>
                </div>

        </section>

    </main>

    <!-- Footer -->
    <footer class="text-center py-6 text-sm text-gray-500">
        &copy; <?php echo date("Y"); ?> Divyansh. All rights reserved.
    </footer>

</body>
</html>
```