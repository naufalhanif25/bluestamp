<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluestamp</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Mynerve&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="bluestamp.ico">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex flex-col m-0 overflow-x-hidden">
    <!-- Header -->
    <header class="flex fixed m-0 items-center justify-between self-stretch">
        <svg id="menu" class="menu" viewBox="-0.5 -10 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="m12 5.217c-1.441 0-2.608-1.168-2.608-2.608s1.168-2.608 2.608-2.608c1.441 0 2.608 1.168 2.608 2.608s-1.168 2.608-2.608 2.608z"/>
            <path d="m20.609 5.217c-1.441 0-2.608-1.168-2.608-2.608s1.168-2.608 2.608-2.608c1.441 0 2.608 1.168 2.608 2.608s-1.168 2.608-2.608 2.608z"/>
            <path d="m2.609 5.217c-1.441 0-2.608-1.168-2.608-2.608s1.168-2.608 2.608-2.608c1.441 0 2.608 1.168 2.608 2.608s-1.168 2.608-2.608 2.608z"/>
        </svg>
        <div id="head-title" class="head-title items-center">
            <h1 onclick="window.location.href='{{ route('home') }}'" class="mynerve m-0 text-[16pt]">Bluestamp</h1>
        </div>
        <nav id="nav-buttons" class="flex-row items-center justify-center lato m-0 text-[10pt]">
            <a href="{{ route('home') }}" class="link underline underline-offset-[0.24em] decoration-[0.08em]" style="text-decoration-color: var(--grey);">Home</a>
            <a href="{{ route('share') }}" class="link">Share</a>
            <a href="{{ route('explore') }}" class="link">Explore</a>
        </nav>
        @if (Route::has('signin'))
            @auth
                <div class="header-profile flex flex-row items-center justify-end">
                    <h1 class="lato m-0 text-[10pt]">{{ Auth::user()->full_name }}</h1>
                    <svg onclick="window.location.href='{{ route('profile') }}'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.532 45.532">
                        <path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765 S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53 c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012 c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592 c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path> 
                    </svg>
                </div>
            @else
                <div class="acc-buttons flex items-center justify-end lato m-0 text-[10pt]">
                    <a href="{{ route('signin') }}" class="link">Sign in</a>
                    <a href="{{ route('signup') }}" class="link">Sign up</a>
                </div>
            @endauth
        @endif
    </header>

    <!-- Main -->
    <main>
        <!-- Navigation bar section -->
        <section id="navbar" class="navbar w-full flex flex-col items-center justify-center">
            <span class="flex items-center justify-center">
                <nav class="flex flex-row items-center justify-center lato m-0 text-[10pt]">
                    <a href="{{ route('home') }}" class="link underline underline-offset-[0.24em] decoration-[0.08em]" style="text-decoration-color: var(--grey);">Home</a>
                    <a href="{{ route('share') }}" class="link">Share</a>
                    <a href="{{ route('explore') }}" class="link">Explore</a>
                </nav>
            </span>
        </section>

        <!-- Top section -->
        <section class="top-section flex flex-col items-center justify-center text-center">
            <h1 class="mynerve m-0 text-[20pt]">
                Everyone has the right to share their feelings, 
                everyone has the right to be heard.
            </h1>
            <div class="inline-buttons flex">
                <button onclick="window.location.href='{{ route('share') }}'" class="solid-button flex items-center lato-bold text-[10pt]">
                    Share your story
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M9 16.5H17M12.5556 2.06071C12.9092 1.70169 13.3888 1.5 13.8889 1.5C14.389 1.5 14.8686 1.70169 15.2222 2.06071C15.5758 2.41973 15.7745 2.90667 15.7745 3.4144C15.7745 3.92213 15.5758 4.40906 15.2222 4.76808L4.55556 15.5975L1 16.5L1.88889 12.8902L12.5556 2.06071Z"/>
                    </svg>
                </button>
                <button onclick="window.location.href='{{ route('explore') }}'" class="outline-button flex items-center lato-bold text-[10pt]">
                    Explore the stories
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </button>
            </div>
        </section>

        <!-- Card section -->
        <section class="section w-full flex items-center">
            <div class=" section-left flex items-center justify-end">
                <div class="card-out flex flex-col items-center">
                    <div class="card-top flex flex-row items-center justify-between self-stretch">
                        <div class="card-user flex flex-row items-center">
                            <svg class="w-[1.8rem] h-[1.8rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                                <path d="M18 3C19.9698 2.99999 21.9204 3.38797 23.7402 4.14179C25.5601 4.8956 27.2137 6.00049 28.6066 7.39337C29.9995 8.78624 31.1044 10.4398 31.8582 12.2597C32.612 14.0796 33 16.0301 33 18C33 26.2843 26.2843 33 18 33C9.71576 33 3 26.2843 3 18C3 9.71576 9.71576 3 18 3ZM19.5 19.5H16.5C12.7864 19.5 9.59827 21.7491 8.22317 24.9597C10.3989 28.0106 13.9671 30 18 30C22.0328 30 25.601 28.0106 27.7769 24.9594C26.4018 21.7491 23.2136 19.5 19.5 19.5ZM18 7.5C15.5147 7.5 13.5 9.51474 13.5 12C13.5 14.4853 15.5147 16.5 18 16.5C20.4852 16.5 22.5 14.4853 22.5 12C22.5 9.51474 20.4853 7.5 18 7.5Z"/>
                            </svg>
                            <h2 class="lato m-0 text-[10pt]">Anonymous</h2>
                        </div>
                        <p class="lato m-0 text-[10pt]">#college</p>
                    </div>
                    <div class="card-in flex flex-col items-center">
                        <h1 class="mynerve w-full m-0 text-[16pt]">
                            Today is my graduation day
                        </h1>
                        <p class="lato fade-text w-full m-0 text-[10pt] text-justify">
                            Today I have finished my studies, I have graduated, I feel happy, and my loved ones feel it too. 🎓
                            <br><br>
                            Thanks to my parents, my siblings, and my friends. 🫰🏻
                        </p>
                        <div class="card-buttons w-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 26 26">
                                <path class="liked stroke" d="M20.42 4.58a5.4 5.4 0 00-7.65 0l-.77.78-.77-.78a5.4 5.4 0 00-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="1 0 40 40">
                                <path class="stroke-[0.15em]" d="M13.5495 29.5754C13.5495 28.9126 13.0123 28.3754 12.3495 28.3754H12.1825C10.5817 28.3754 9.05502 27.7624 7.93623 26.6847C6.81896 25.6084 6.2 24.1585 6.2 22.6566V11.9187C6.2 10.4168 6.81896 8.96693 7.93623 7.8907C9.05502 6.813 10.5817 6.2 12.1825 6.2H29.8175C31.4183 6.2 32.945 6.813 34.0638 7.8907C35.181 8.96693 35.8 10.4168 35.8 11.9187V22.6566C35.8 24.1585 35.181 25.6084 34.0638 26.6847C32.945 27.7624 31.4183 28.3754 29.8175 28.3754H21.9723C21.679 28.3754 21.3958 28.4828 21.1763 28.6774L13.5495 35.4389V29.5754ZM13.5495 36.1355V36.1343V36.1355Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 42 42">
                                <path class="stroke-[0.16em]" d="M32.1417 5.36938C32.2805 4.94056 32.1672 4.47017 31.8485 4.15147C31.5298 3.83278 31.0594 3.71953 30.6306 3.85827L4.63062 12.27C4.16048 12.4221 3.83165 12.8469 3.80214 13.3401C3.77263 13.8333 4.04849 14.2942 4.49713 14.5013L14.4383 19.0896C14.8297 19.2702 15.2879 19.227 15.6387 18.9765L20.4857 15.5143L17.0235 20.3613C16.773 20.7121 16.7298 21.1703 16.9104 21.5617L21.4987 31.5029C21.7058 31.9515 22.1667 32.2274 22.6599 32.1979C23.1531 32.1684 23.5779 31.8395 23.73 31.3694L32.1417 5.36938Z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-right flex items-center">
                <div class="paragraph w-[20rem] gap-[1rem] flex flex-col items-center">
                    <h1 class="mynerve w-full m-0 text-[16pt]">
                        Tell anything you want
                    </h1>
                    <p class="lato fade-text m-0 text-[10pt] text-justify">
                        Here you can share any story you want freely. You can tell it as yourself or anonymously. That's what freedom is all about, right?
                    </p>
                </div>
            </div>
        </section>

        <!-- Comments section -->
        <section class="section reply-section w-full flex items-center">
            <div class=" section-left flex items-center justify-end">
                <div class="paragraph w-[20rem] gap-[1rem] flex flex-col items-center">
                    <h1 class="mynerve w-full m-0 text-[16pt]">
                        Reply and support
                    </h1>
                    <p class="lato fade-text m-0 text-[10pt] text-justify">
                        Reply and support other people&apos;s stories to keep them motivated. Your support will be very valuable for them, trust me!                    </p>
                </div>
            </div>
            <div class="comment-section section-right flex flex-col gap-[0.8rem]">
                <div class="w-[100vw] h-full z-[1]">
                    <svg class="cursor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.8,39.7c-0.1,0-0.2,0-0.4-0.1c-0.2-0.1-0.4-0.3-0.6-0.5l-3.7-8.6l-4.5,4.2C18.5,34.9,18.3,35,18,35 c-0.1,0-0.3,0-0.4-0.1C17.3,34.8,17,34.4,17,34l0-22c0-0.4,0.2-0.8,0.6-0.9C17.7,11,17.9,11,18,11c0.2,0,0.5,0.1,0.7,0.3l16,15 c0.3,0.3,0.4,0.7,0.3,1.1c-0.1,0.4-0.5,0.6-0.9,0.7l-6.3,0.6l3.9,8.5c0.1,0.2,0.1,0.5,0,0.8c-0.1,0.2-0.3,0.5-0.5,0.6l-2.9,1.3 C28.1,39.7,27.9,39.7,27.8,39.7z"/>
                        <path d="M18,12l16,15l-7.7,0.7l4.5,9.8l-2.9,1.3l-4.3-9.9L18,34L18,12 M18,10c-0.3,0-0.5,0.1-0.8,0.2 c-0.7,0.3-1.2,1-1.2,1.8l0,22c0,0.8,0.5,1.5,1.2,1.8C17.5,36,17.8,36,18,36c0.5,0,1-0.2,1.4-0.5l3.4-3.2l3.1,7.3 c0.2,0.5,0.6,0.9,1.1,1.1c0.2,0.1,0.5,0.1,0.7,0.1c0.3,0,0.5-0.1,0.8-0.2l2.9-1.3c0.5-0.2,0.9-0.6,1.1-1.1c0.2-0.5,0.2-1.1,0-1.5 l-3.3-7.2l4.9-0.4c0.8-0.1,1.5-0.6,1.7-1.3c0.3-0.7,0.1-1.6-0.5-2.1l-16-15C19,10.2,18.5,10,18,10L18,10z"/>
                    </svg>
                </div>
                <div class="comment flex">
                    <div class="h-auto">
                        <svg class="w-[1.8rem] h-[1.8rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                            <path d="M18 3C19.9698 2.99999 21.9204 3.38797 23.7402 4.14179C25.5601 4.8956 27.2137 6.00049 28.6066 7.39337C29.9995 8.78624 31.1044 10.4398 31.8582 12.2597C32.612 14.0796 33 16.0301 33 18C33 26.2843 26.2843 33 18 33C9.71576 33 3 26.2843 3 18C3 9.71576 9.71576 3 18 3ZM19.5 19.5H16.5C12.7864 19.5 9.59827 21.7491 8.22317 24.9597C10.3989 28.0106 13.9671 30 18 30C22.0328 30 25.601 28.0106 27.7769 24.9594C26.4018 21.7491 23.2136 19.5 19.5 19.5ZM18 7.5C15.5147 7.5 13.5 9.51474 13.5 12C13.5 14.4853 15.5147 16.5 18 16.5C20.4852 16.5 22.5 14.4853 22.5 12C22.5 9.51474 20.4853 7.5 18 7.5Z"/>
                        </svg>
                    </div>
                    <div class="w-full flex flex-col gap-[0.16rem]">
                        <h1 class="lato fade-text m-0 text-[8pt]">john_doe12</h1>
                        <p class="lato m-0 text-[11pt] text-justify">
                            Wow, congratulations on your graduation. 🎉
                        </p>
                    </div>
                    <div class="h-auto w-[1.6rem] flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 26 26">
                            <path class="unliked stroke-[0.1em]" d="M20.42 4.58a5.4 5.4 0 00-7.65 0l-.77.78-.77-.78a5.4 5.4 0 00-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z" />
                        </svg>
                    </div>
                </div>
                <div class="comment flex">
                    <div class="h-auto">
                        <svg class="w-[1.8rem] h-[1.8rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                            <path d="M18 3C19.9698 2.99999 21.9204 3.38797 23.7402 4.14179C25.5601 4.8956 27.2137 6.00049 28.6066 7.39337C29.9995 8.78624 31.1044 10.4398 31.8582 12.2597C32.612 14.0796 33 16.0301 33 18C33 26.2843 26.2843 33 18 33C9.71576 33 3 26.2843 3 18C3 9.71576 9.71576 3 18 3ZM19.5 19.5H16.5C12.7864 19.5 9.59827 21.7491 8.22317 24.9597C10.3989 28.0106 13.9671 30 18 30C22.0328 30 25.601 28.0106 27.7769 24.9594C26.4018 21.7491 23.2136 19.5 19.5 19.5ZM18 7.5C15.5147 7.5 13.5 9.51474 13.5 12C13.5 14.4853 15.5147 16.5 18 16.5C20.4852 16.5 22.5 14.4853 22.5 12C22.5 9.51474 20.4853 7.5 18 7.5Z"/>
                        </svg>
                    </div>
                    <div class="w-full flex flex-col gap-[0.16rem]">
                        <h1 class="lato fade-text m-0 text-[8pt]">jane_doe24</h1>
                        <p class="lato m-0 text-[11pt] text-justify">
                            I want to be like you. 🥹 
                        </p>
                    </div>
                    <div class="h-auto w-[1.6rem] flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 26 26">
                            <path class="liked" d="M20.42 4.58a5.4 5.4 0 00-7.65 0l-.77.78-.77-.78a5.4 5.4 0 00-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z" />
                        </svg>
                    </div>
                </div>
                <div class="comment flex">
                    <div class="h-auto">
                        <svg class="w-[1.8rem] h-[1.8rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                            <path d="M18 3C19.9698 2.99999 21.9204 3.38797 23.7402 4.14179C25.5601 4.8956 27.2137 6.00049 28.6066 7.39337C29.9995 8.78624 31.1044 10.4398 31.8582 12.2597C32.612 14.0796 33 16.0301 33 18C33 26.2843 26.2843 33 18 33C9.71576 33 3 26.2843 3 18C3 9.71576 9.71576 3 18 3ZM19.5 19.5H16.5C12.7864 19.5 9.59827 21.7491 8.22317 24.9597C10.3989 28.0106 13.9671 30 18 30C22.0328 30 25.601 28.0106 27.7769 24.9594C26.4018 21.7491 23.2136 19.5 19.5 19.5ZM18 7.5C15.5147 7.5 13.5 9.51474 13.5 12C13.5 14.4853 15.5147 16.5 18 16.5C20.4852 16.5 22.5 14.4853 22.5 12C22.5 9.51474 20.4853 7.5 18 7.5Z"/>
                        </svg>
                    </div>
                    <div class="w-full flex flex-col gap-[0.16rem]">
                        <h1 class="lato fade-text m-0 text-[8pt]">Anonymous</h1>
                        <p class="lato m-0 text-[11pt] text-justify">
                            Your family must be proud. 👏🏻
                        </p>
                    </div>
                    <div class="h-auto w-[1.6rem] flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 26 26">
                            <path class="unliked stroke-[0.1em]" d="M20.42 4.58a5.4 5.4 0 00-7.65 0l-.77.78-.77-.78a5.4 5.4 0 00-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z" />
                        </svg>
                    </div>
                </div>
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
    <script src="js/cursor_hover.js"></script>
    <script src="js/open_nav.js"></script>
</body>
</html>