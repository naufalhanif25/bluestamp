<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluestamp</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Mynerve&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="bluestamp.ico">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex flex-col m-0 overflow-x-hidden">
    <!-- Header -->
    <header class="flex fixed m-0 items-center justify-between self-stretch">
        <div class="head-title flex items-center gap-[0.8rem]">
            <!-- <svg onclick="window.history.back()" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                <path d="M30 10 L15 25 L30 40"/>
            </svg> -->
            <h1 onclick="window.location.href='{{ route('home') }}'" class="mynerve m-0 text-[16pt]">Bluestamp</h1>
        </div>
        <nav class="flex flex-row items-center justify-end lato m-0 text-[10pt]">
            <a href="{{ route('home') }}" class="link">Home</a>
            <a href="{{ route('share') }}" class="link">Share</a>
            <a href="{{ route('explore') }}" class="link">Explore</a>
        </nav>
    </header>

    <!-- Main -->
    <main class="flex justify-center items-center justify-center">
        <!-- Sign up box section -->
        <section class="signin-box flex flex-col items-center justify-center">
            <h2 class="mynerve m-0 text-[20pt]">Sign up</h2>

            <!-- Input form -->
            <form id="signup-form" class="input-form w-full flex flex-col" action="{{ route('signup') }}" method="POST">
                @csrf
                <div class="input-fields flex flex-col items-center justify-center">
                    <input id="full_name" name="full_name" type="text" placeholder="Full name" autocomplete="off" class="lato text-[10pt] w-full">
                    <input id="username" name="username" type="text" placeholder="Username" autocomplete="off" class="lato text-[10pt] w-full">
                    <input id="email" name="email" type="email" placeholder="Email" autocomplete="off" class="lato text-[10pt] w-full">
                    <div class="password w-full flex flex-row items-center justify-center">
                        <input id="password" name="password" type="password" placeholder="Password" autocomplete="off" class="lato text-[10pt] w-full">
                        <!-- SVG toggle password -->
                        <svg id="hide" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" onclick="togglePassword()">
                            <path d="M17.86,18.14l-.44.32-.48.29-.51.27c-.17.08-.35.17-.54.24l-.56.22-.6.18-.63.14-.67.11-.7.07L12,20l-.73,0-.7-.07L9.9,19.8l-.63-.14-.6-.18-.56-.22c-.19-.07-.37-.16-.54-.24l-.51-.27-.48-.29-.44-.32a4.46,4.46,0,0,1-.43-.33l-.39-.34L5,17.11l-.34-.36c-.11-.13-.22-.25-.32-.38L4,16l-.27-.37-.25-.38c-.08-.12-.15-.24-.22-.36l-.21-.36-.18-.34-.16-.33-.15-.32-.12-.29c0-.09-.08-.18-.11-.27l-.09-.24c0-.08-.06-.15-.08-.22l-.06-.18a1,1,0,0,1,0-.14.76.76,0,0,1,0-.11V12l0-.07a.76.76,0,0,1,0-.11l.06-.14.08-.18c0-.07.07-.14.1-.22L2.44,11c0-.09.09-.18.14-.27l.15-.29.18-.32C3,10,3,9.93,3.1,9.81l.22-.34c.07-.12.15-.24.23-.36l.26-.36c.08-.13.18-.25.27-.38L4.37,8l.32-.37L5,7.25l.35-.36.38-.36.4-.34"></path>
                            <path d="M10.14,4.2l.59-.11L11.36,4,12,4l.64,0,.63.07.59.11.58.14.55.18.53.22c.17.07.34.16.51.24l.49.27.46.29.44.32.42.33.4.34.38.36.35.36.34.38c.11.12.21.24.31.37s.2.25.3.37.19.25.27.38l.26.36c.08.12.16.24.23.36l.22.34c.06.12.13.23.19.33l.18.32.15.29c0,.09.1.18.14.27l.12.24c0,.08.07.15.1.22l.08.18.06.14a.76.76,0,0,1,0,.11L22,12v.11a.76.76,0,0,1,0,.11,1,1,0,0,1,0,.14l-.06.18c0,.07-.05.14-.08.22s-.06.16-.09.24-.07.18-.11.27l-.12.29-.15.32-.16.33-.18.34-.21.36"></path>
                            <path d="M14.83,14.83A4,4,0,0,1,9.17,9.17"></path>
                            <line x1="2" y1="2" x2="22" y2="22"></line>
                        </svg>
                        <svg id="show" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" onclick="togglePassword()">
                            <path d="M2,12S5,4,12,4s10,8,10,8-2,8-10,8S2,12,2,12Z"></path>
                            <circle cx="12" cy="12" r="4"></circle>
                        </svg>
                    </div>
                </div>
            </form>

            <!-- Sign up buttons -->
            <div class="buttons-container w-full flex flex-col">
                <!-- Submit form manually -->
                <button type="button" onclick="document.getElementById('signup-form').submit()" class="solid-button lato-bold text-[10pt] w-full">
                    Sign up
                </button>

                <!-- Google sign up -->
                <button class="outline-button lato-bold text-[10pt] w-full flex flex-row items-center justify-center">
                    <svg viewBox="-3 0 262 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4"></path>
                            <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853"></path>
                            <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05"></path>
                            <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335"></path>
                        </g>
                    </svg>
                    Sign up with Google
                </button>
            </div>
            <div class="w-full flex flex-row items-center justify-center gap-[0.4rem]">
                <p class="paragraph lato m-0 text-[10pt]">Already have an account?</p>
                <a href="{{ route('signin') }}" class="lato-bold m-0 text-[10pt]">Sign in</a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="flex flex-col items-center justify-center gap-[0.6rem] mt-[2rem]">
        <nav class="flex flex-row items-center justify-center lato m-0 text-[10pt]">
            <a href="{{ route('about') }}" class="link fade-text">About</a>
            <a href="" class="link fade-text">Feedback</a>
            <a href="{{ route('about') }}" class="link fade-text">Support</a>
        </nav>
        <p class="lato m-0 text-[10pt]">© 2025 HearMeOut. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="js/pass_visibility.js"></script>
</body>
</html>
