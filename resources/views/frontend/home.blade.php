<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>DeviceTime — Understand Your Digital Time</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: '#0C0C0C',
                        card: '#151515',
                        primary: '#F97316',
                        accent: '#EA580C'
                    }
                }
            }
        }
    </script>


</head>

<body class="bg-dark text-white">


    <!-- ================= NAVBAR ================= -->

    <header class="border-b border-gray-800">
        <nav class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">

            <!-- Logo -->
            <a href="#" class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-orange-500 flex items-center justify-center font-bold">
                    D
                </div>

                <span class="text-xl font-bold">
                    DeviceTime
                </span>
            </a>

            <!-- Navigation -->
            <div class="hidden md:flex items-center gap-8 text-sm text-gray-400">
                <a href="#features" class="hover:text-white transition">
                    Features
                </a>

                <a href="#how-it-works" class="hover:text-white transition">
                    How It Works
                </a>

                <a href="#privacy" class="hover:text-white transition">
                    Privacy
                </a>

                <a href="#about" class="hover:text-white transition">
                    About
                </a>
            </div>

            <!-- Buttons -->
            <div class="flex items-center gap-4">

                <a href="#" class="hidden sm:block text-gray-300 hover:text-white">
                    Login
                </a>

                <a href="#download"
                   class="px-5 py-2.5 bg-orange-500 hover:bg-orange-600 rounded-lg font-medium transition">
                    Get Started
                </a>

            </div>

        </nav>
    </header>


    <!-- ================= HERO ================= -->

    <section class="relative overflow-hidden">

        <!-- Background glow -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2
                w-[600px] h-[300px]
                bg-emerald-500/20 blur-[120px] rounded-full">
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-24 lg:py-32">

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Hero Text -->

                <div>

                    <div
                        class="inline-flex items-center gap-2
                            px-4 py-2 mb-6
                            rounded-full
                            bg-emerald-500/10
                            border border-emerald-500/20
                            text-emerald-400 text-sm">

                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>

                        Your digital activity, understood.

                    </div>


                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight">

                        Know where your
                        <span class="text-emerald-400">
                            time goes.
                        </span>

                    </h1>


                    <p class="mt-6 text-lg text-gray-400 max-w-xl leading-relaxed">

                        DeviceTime automatically tracks how you use your
                        computer, applications, and websites — then turns
                        your activity into useful insights.

                    </p>


                    <div class="mt-8 flex flex-wrap gap-4">

                        <a href="#download"
                            class="px-6 py-3 bg-emerald-500 hover:bg-emerald-600
                              rounded-xl font-semibold transition">

                            Start Tracking →

                        </a>

                        <a href="#how-it-works"
                            class="px-6 py-3 border border-gray-700
                              hover:border-gray-500
                              rounded-xl font-semibold transition">

                            See How It Works

                        </a>

                    </div>


                    <div class="mt-8 flex gap-8 text-sm text-gray-500">

                        <span>✓ Automatic tracking</span>

                        <span>✓ Privacy focused</span>

                        <span>✓ Detailed analytics</span>

                    </div>

                </div>


                <!-- Dashboard Preview -->

                <div class="relative">

                    <div
                        class="bg-card border border-gray-800
                            rounded-2xl shadow-2xl overflow-hidden">

                        <!-- Dashboard Header -->

                        <div
                            class="px-6 py-5 border-b border-gray-800
                                flex justify-between">

                            <div>
                                <p class="text-sm text-gray-400">
                                    Today's Activity
                                </p>

                                <h2 class="text-3xl font-bold mt-1">
                                    8h 24m
                                </h2>
                            </div>

                            <div class="text-right">
                                <p class="text-sm text-gray-500">
                                    September 29
                                </p>

                                <span class="text-green-400 text-sm">
                                    ↑ 12%
                                </span>
                            </div>

                        </div>


                        <!-- Applications -->

                        <div class="p-6">

                            <div class="flex justify-between mb-5">

                                <h3 class="font-semibold">
                                    Applications
                                </h3>

                                <span class="text-gray-500 text-sm">
                                    Today
                                </span>

                            </div>


                            <!-- VS Code -->

                            <div class="mb-5">

                                <div class="flex justify-between text-sm mb-2">

                                    <span>
                                        VS Code
                                    </span>

                                    <span class="text-gray-400">
                                        3h 12m
                                    </span>

                                </div>

                                <div class="h-2 bg-gray-800 rounded-full">

                                    <div
                                        class="h-2 bg-emerald-500
                                            rounded-full w-[80%]">
                                    </div>

                                </div>

                            </div>


                            <!-- Chrome -->

                            <div class="mb-5">

                                <div class="flex justify-between text-sm mb-2">

                                    <span>
                                        Chrome
                                    </span>

                                    <span class="text-gray-400">
                                        2h 41m
                                    </span>

                                </div>

                                <div class="h-2 bg-gray-800 rounded-full">

                                    <div
                                        class="h-2 bg-emerald-500/80
                                            rounded-full w-[65%]">
                                    </div>

                                </div>

                            </div>


                            <!-- YouTube -->

                            <div class="mb-5">

                                <div class="flex justify-between text-sm mb-2">

                                    <span>
                                        YouTube
                                    </span>

                                    <span class="text-gray-400">
                                        1h 12m
                                    </span>

                                </div>

                                <div class="h-2 bg-gray-800 rounded-full">

                                    <div
                                        class="h-2 bg-emerald-500/60
                                            rounded-full w-[40%]">
                                    </div>

                                </div>

                            </div>


                            <!-- Discord -->

                            <div>

                                <div class="flex justify-between text-sm mb-2">

                                    <span>
                                        Discord
                                    </span>

                                    <span class="text-gray-400">
                                        42m
                                    </span>

                                </div>

                                <div class="h-2 bg-gray-800 rounded-full">

                                    <div
                                        class="h-2 bg-emerald-500/40
                                            rounded-full w-[25%]">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Productivity -->

                        <div class="px-6 py-5 border-t border-gray-800">

                            <div class="flex justify-between mb-4">

                                <span class="text-gray-400">
                                    Productivity
                                </span>

                                <span class="text-green-400">
                                    62%
                                </span>

                            </div>

                            <div class="flex h-3 rounded-full overflow-hidden">

                                <div class="bg-green-500 w-[62%]"></div>

                                <div class="bg-yellow-500 w-[23%]"></div>

                                <div class="bg-red-500 w-[15%]"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>







    <!-- ================= ARCHITECTURE ================= -->

    <section class="border-t border-gray-800">

        <div class="max-w-5xl mx-auto px-6 py-24 text-center">

            <p class="text-emerald-400 font-semibold">
                SIMPLE ARCHITECTURE
            </p>

            <h2 class="text-4xl font-bold mt-3">
                Your data, connected.
            </h2>

            <div class="mt-12 grid md:grid-cols-4 gap-4 items-center">

                <div class="p-6 bg-card border border-gray-800 rounded-xl">
                    <div class="text-3xl">💻</div>
                    <p class="font-semibold mt-3">
                        DeviceTime Agent
                    </p>
                </div>

                <div class="text-gray-600 hidden md:block">
                    →
                </div>

                <div class="p-6 bg-card border border-gray-800 rounded-xl">
                    <div class="text-3xl">⚡</div>
                    <p class="font-semibold mt-3">
                        Laravel API
                    </p>
                </div>

                <div class="text-gray-600 hidden md:block">
                    →
                </div>

                <div class="p-6 bg-card border border-gray-800 rounded-xl">
                    <div class="text-3xl">🗄️</div>
                    <p class="font-semibold mt-3">
                        MySQL
                    </p>
                </div>

            </div>

        </div>

    </section>


    <!-- ================= CTA ================= -->

    <section id="download" class="border-t border-gray-800">

        <div class="max-w-4xl mx-auto px-6 py-24 text-center">

            <h2 class="text-4xl lg:text-5xl font-bold">
                Take control of your digital time.
            </h2>

            <p class="text-gray-400 mt-5 text-lg">
                Start tracking your computer activity and
                discover where your time really goes.
            </p>

            <div class="mt-8">

                <a href="#"
                    class="inline-block px-8 py-4
                      bg-emerald-500 hover:bg-emerald-600
                      rounded-xl font-semibold transition">

                    Download DeviceTime Agent →

                </a>

            </div>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer id="about" class="border-t border-gray-800">

        <div class="max-w-7xl mx-auto px-6 py-10">

            <div class="flex flex-col md:flex-row
                    justify-between gap-6">

                <div>

                    <div class="flex items-center gap-3">

                        <div
                            class="w-8 h-8 bg-emerald-500
                                rounded-lg flex items-center
                                justify-center font-bold">

                            D

                        </div>

                        <span class="font-bold">
                            DeviceTime
                        </span>

                    </div>

                    <p class="text-gray-500 mt-3 text-sm">
                        Understand your digital time.
                    </p>

                </div>


                <div class="flex gap-6 text-sm text-gray-500">

                    <a href="#" class="hover:text-white">
                        Documentation
                    </a>

                    <a href="#" class="hover:text-white">
                        Privacy
                    </a>

                    <a href="#" class="hover:text-white">
                        GitHub
                    </a>

                </div>

            </div>


            <div class="border-t border-gray-800 mt-8 pt-6
                    text-sm text-gray-600">

                © 2026 DeviceTime. All rights reserved.

            </div>

        </div>

    </footer>

</body>

</html>
