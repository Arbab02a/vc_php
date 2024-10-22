<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>

    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .team-member {
            background-color: #000522;
            padding: 24px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.3s;
        }

        .team-member:hover {
            transform: scale(1.05);
        }

        .social-icon {
            color: #4b5563;
            transition: color 0.3s;
        }

        .social-icon:hover {
            color: #ffffff;
        }
    </style>
</head>

<body class="bg-[#000319] text-gray-400">

    <section class="py-24">
        <div class="container mx-auto px-5">
            <div class="flex flex-col text-center mb-20">
                <h1 class="text-5xl font-extrabold mb-4 sm:mb-6 text-gray-200 leading-tight">Our Team</h1>
                <p class="text-base sm:text-lg md:text-2xl leading-relaxed mb-6 sm:mb-8 text-gray-100">
                    Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.
                </p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="team-member h-full flex flex-col items-center text-center">
                        <img alt="Alper Kamu" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="./assets/images/logo.png" />
                        <div class="w-full">
                            <h2 class="title-font font-medium text-lg text-white">Alper Kamu</h2>
                            <h3 class="text-gray-300 mb-2">UX/UI Designer</h3>
                            <p class="mb-4 text-gray-400">Passionate about creating user-centered designs that enhance user experience. Always eager to learn and adapt.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="team-member h-full flex flex-col items-center text-center">
                        <img alt="Holden Caulfield" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="/images/member2.jpg" />
                        <div class="w-full">
                            <h2 class="title-font font-medium text-lg text-white">Holden Caulfield</h2>
                            <h3 class="text-gray-300 mb-2">Graphic Designer</h3>
                            <p class="mb-4 text-gray-400">A creative mind with a flair for aesthetics and visual storytelling. Always striving for design perfection.</p>
                           
                          
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="team-member h-full flex flex-col items-center text-center">
                        <img alt="Atticus Finch" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="/images/member3.jpg" />
                        <div class="w-full">
                            <h2 class="title-font font-medium text-lg text-white">Atticus Finch</h2>
                            <h3 class="text-gray-300 mb-2">Video Editor</h3>
                            <p class="mb-4 text-gray-400">An expert in crafting compelling narratives through video. Focused on detail and pacing to engage audiences.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="team-member h-full flex flex-col items-center text-center">
                        <img alt="Henry Letham" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="/images/member4.jpg" />
                        <div class="w-full">
                            <h2 class="title-font font-medium text-lg text-white">Henry Letham</h2>
                            <h3 class="text-gray-300 mb-2">Web Developer</h3>
                            <p class="mb-4 text-gray-400">Skilled in both front-end and back-end development. Loves tackling complex problems with elegant solutions.</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
