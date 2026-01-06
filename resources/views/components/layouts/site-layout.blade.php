<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoulSell — Premium Laptops & Accessories</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts - Inter for Premium Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        // Tailwind Custom Configuration
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0A0A0A', // Deep Black
                        secondary: '#1A1A1A', // Charcoal
                        accent: '#3B82F6', // Refined Blue
                        muted: '#6B7280', // Subtle Gray
                        light: '#F9FAFB', // Off White
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        * {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        /* Smooth Interactions */
        html {
            scroll-behavior: smooth;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Hide Scrollbar but Keep Functionality */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Premium Hover Effect */
        .hover-lift {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-4px);
        }

        /* Fade In Animation */
        .fade-in {
            animation: fadeIn 0.6s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-white text-primary antialiased">
    <x-util.header />

{{ $slot }}






    <x-util.footer />
    <!-- ============================================
         JAVASCRIPT - Minimal Interactions
         ============================================ -->
    <script>
        /**
         * Scroll Collections Carousel
         * @param {string} direction - 'left' or 'right'
         */
        function scrollCollections(direction) {
            const container = document.getElementById('collectionsContainer');
            const scrollAmount = 350;

            container.scrollBy({
                left: direction === 'left' ? -scrollAmount : scrollAmount,
                behavior: 'smooth'
            });
        }
    </script>

</body>

</html>
