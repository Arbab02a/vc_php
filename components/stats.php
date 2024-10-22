<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counting Animation with jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body class="bg-[#000319] text-gray-400">

    <section class="body-font py-24">
        <div class="container px-5 mx-auto">
            <div class="flex flex-col text-center w-full mb-16">
                <h1 class="text-5xl font-bold title-font text-gray-300 mb-4">📊 Our Statistics</h1>
                <p class="text-lg text-gray-400">Social Media Presence & Website Visitors</p>
            </div>

            <div class="flex flex-wrap font-medium -m-4 text-center">
                <!-- Visitors Card -->
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-800 px-4 py-8 rounded-lg hover:shadow-lg hover:scale-105 transform transition-all duration-300 ease-in-out">
                        <div class="text-5xl mb-4"><i class="fas fa-globe text-indigo-400"></i></div>
                        <h2 class="title-font font-bold text-3xl text-white" id="visitorCount">0</h2>
                        <p class="leading-relaxed text-gray-300">Visitors 🌍 per month</p>
                    </div>
                </div>

                <!-- Facebook Followers Card -->
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-800 px-4 py-8 rounded-lg hover:shadow-lg hover:scale-105 transform transition-all duration-300 ease-in-out">
                        <div class="text-5xl mb-4"><i class="fab fa-facebook text-blue-500"></i></div>
                        <h2 class="title-font font-bold text-3xl text-white" id="facebookCount">0</h2>
                        <p class="leading-relaxed text-gray-300">Followers 👍</p>
                    </div>
                </div>

                <!-- Instagram Followers Card -->
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-800 px-4 py-8 rounded-lg hover:shadow-lg hover:scale-105 transform transition-all duration-300 ease-in-out">
                        <div class="text-5xl mb-4"><i class="fab fa-instagram text-pink-500"></i></div>
                        <h2 class="title-font font-bold text-3xl text-white" id="instagramCount">0</h2>
                        <p class="leading-relaxed text-gray-300">Followers 📸</p>
                    </div>
                </div>

                <!-- LinkedIn Followers Card -->
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-800 px-4 py-8 rounded-lg hover:shadow-lg hover:scale-105 transform transition-all duration-300 ease-in-out">
                        <div class="text-5xl mb-4"><i class="fab fa-linkedin text-blue-700"></i></div>
                        <h2 class="title-font font-bold text-3xl text-white" id="linkedinCount">0</h2>
                        <p class="leading-relaxed text-gray-300">Followers 💼</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            // Function to animate counting
            function countUp(element, start, end, duration) {
                let startTime = null;

                function updateCount(timestamp) {
                    if (!startTime) startTime = timestamp;
                    const progress = timestamp - startTime;
                    const currentCount = Math.min(start + Math.floor(progress / (duration / (end - start))), end);
                    $(element).text(currentCount);

                    if (currentCount < end) {
                        requestAnimationFrame(updateCount);
                    }
                }

                requestAnimationFrame(updateCount);
            }

            // Start the count up for each statistic
            countUp('#visitorCount', 0, 1000, 2000); // Count from 0 to 1000 over 2000 milliseconds
            countUp('#facebookCount', 0, 6000, 2000); // Count from 0 to 6000 over 2000 milliseconds
            countUp('#instagramCount', 0, 5000, 2000); // Count from 0 to 5000 over 2000 milliseconds
            countUp('#linkedinCount', 0, 10000, 2000); // Count from 0 to 10000 over 2000 milliseconds
        });
    </script>

</body>

</html>
