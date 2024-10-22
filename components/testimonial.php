<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials Carousel</title>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Slick Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .testimonial {
            background-color: #000522;
            padding: 24px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin: 0 10px; /* Adjusts the gap between testimonial cards */
        }

        .testimonial img {
            width: 64px; /* Image width */
            height: 64px; /* Image height */
            border-radius: 50%;
            margin-bottom: 16px; /* Space between image and text */
        }

        .slick-slide {
            margin: 0 15px; /* Additional margin for spacing */
        }
    </style>
</head>

<body class="bg-[#000319] text-gray-400">

    <section class="py-16">
        <div class="container mx-auto px-5">
            <h2 class="text-5xl font-extrabold mb-4 sm:mb-6 text-gray-200 text-center leading-tight">Our Testimonials</h2>
            <p class="text-lg text-gray-400 text-center">What Our Clients Say?</p>

            <div class="slider mt-8">
                <!-- Testimonial Item -->
                <div class="testimonial">
                    
                    <h3 class="text-lg font-bold text-white">Muhammad Usman Waheed</h3>
                    <p class="text-sm text-gray-400">Co- Founder & Chief Executive Officer</p>
                    <p class="mt-3 text-gray-300 leading-relaxed">"This company is simply the best. Excellent service and a dedicated team!"</p>
                </div>
                <div class="testimonial">
                   
                    <h3 class="text-lg font-bold text-white">Sean Dale</h3>
                    <p class="text-sm text-gray-400">Co- Founder & Management Director</p>
                    <p class="mt-3 text-gray-300 leading-relaxed">"Their solutions are top-notch! Highly recommended for web development and digital marketing."</p>
                </div>
                <div class="testimonial">
                   
                    <h3 class="text-lg font-bold text-white">Joel</h3>
                    <p class="text-sm text-gray-400">Production Head</p>
                    <p class="mt-3 text-gray-300 leading-relaxed">"They helped grow my business with amazing designs and marketing strategies."</p>
                </div>
                <div class="testimonial">
                    
                    <h3 class="text-lg font-bold text-white">Michael Green</h3>
                    <p class="text-sm text-gray-400">CTO at Tech Innovators</p>
                    <p class="mt-3 text-gray-300 leading-relaxed">"Their tech expertise is outstanding! Great collaboration and innovative solutions."</p>
                </div>
                <div class="testimonial">
                   
                    <h3 class="text-lg font-bold text-white">Nethane Blue</h3>
                    <p class="text-sm text-gray-400">Freelance Designer</p>
                    <p class="mt-3 text-gray-300 leading-relaxed">"Creative, professional, and reliable. A pleasure to work with."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Slick Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function () {
            // Initialize Slick Slider
            $('.slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>
