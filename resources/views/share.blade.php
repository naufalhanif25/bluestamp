<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluestamp</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/share.css">
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
            <a href="{{ route('home') }}" class="link">Home</a>
            <a href="{{ route('share') }}" class="link underline underline-offset-[0.24em] decoration-[0.08em]" style="text-decoration-color: var(--grey);">Share</a>
            <a href="{{ route('explore') }}" class="link">Explore</a>
        </nav>
        @if (Route::has('signin'))
            @auth
                <div class="header-profile flex flex-row items-center justify-end">
                    <h1 id="user-full-name" class="lato m-0 text-[10pt]">{{ Auth::user()->full_name }}</h1>
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
                    <a href="{{ route('home') }}" class="link">Home</a>
                    <a href="{{ route('share') }}" class="link underline underline-offset-[0.24em] decoration-[0.08em]" style="text-decoration-color: var(--grey);">Share</a>
                    <a href="{{ route('explore') }}" class="link">Explore</a>
                </nav>
            </span>
        </section>

        <!-- Tools section -->
        <section class="tools w-full flex flex-row items-center justify-center">
            <div class="flex flex-row items-center jutsify-center">
                <button class="icon-button lato-bold text-[12pt] flex items-center justify-center">B</button>
                <button class="icon-button lato text-[12pt] flex items-center justify-center">I</button>
                <button class="icon-button lato text-[12pt] underline underline-offset-[0.12em] decoration-[0.08em] flex items-center justify-center">U</button>
                <span class="pipe"></span>
                <form action="" method="POST">
                    @csrf
                    <span class="color-picker flex items-center justify-center">
                        <input id="color" type="color" name="color">
                    </span>
                </form>
                <button id="anonymous-button" class="icon-button flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                        <path d="M16.6 20.6667H11.4M27 15.3334C23.8059 13.6975 19.1649 12.6668 14 12.6668C8.8351 12.6668 4.1941 13.6975 1 15.3334M7.5 18.0001C6.46566 18.0001 5.47368 18.4215 4.74228 19.1716C4.01089 19.9218 3.6 20.9392 3.6 22C3.6 23.0609 4.01089 24.0783 4.74228 24.8284C5.47368 25.5786 6.46566 26 7.5 26C8.53434 26 9.52632 25.5786 10.2577 24.8284C10.9891 24.0783 11.4 23.0609 11.4 22C11.4 20.9392 10.9891 19.9218 10.2577 19.1716C9.52632 18.4215 8.53434 18.0001 7.5 18.0001ZM20.5 18.0001C19.4657 18.0001 18.4737 18.4215 17.7423 19.1716C17.0109 19.9218 16.6 20.9392 16.6 22C16.6 23.0609 17.0109 24.0783 17.7423 24.8284C18.4737 25.5786 19.4657 26 20.5 26C21.5343 26 22.5263 25.5786 23.2577 24.8284C23.9891 24.0783 24.4 23.0609 24.4 22C24.4 20.9392 23.9891 19.9218 23.2577 19.1716C22.5263 18.4215 21.5343 18.0001 20.5 18.0001Z" />
                        <path d="M23.1 13.3334L21.7246 4.28286C21.4451 2.43755 19.4899 1.43756 17.9117 2.33222L17.1122 2.78555C16.1598 3.32673 15.0889 3.61067 14 3.61067C12.9112 3.61067 11.8403 3.32673 10.8878 2.78555L10.0883 2.33222C8.51012 1.4389 6.55492 2.43888 6.27542 4.28286L4.90002 13.3334" />
                    </svg>
                </button>
            </div>
            <button class="share-button lato-bold text-[10pt] flex items-center justify-center" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -4 42 42">
                    <path d="M32.1417 5.36938C32.2805 4.94056 32.1672 4.47017 31.8485 4.15147C31.5298 3.83278 31.0594 3.71953 30.6306 3.85827L4.63062 12.27C4.16048 12.4221 3.83165 12.8469 3.80214 13.3401C3.77263 13.8333 4.04849 14.2942 4.49713 14.5013L14.4383 19.0896C14.8297 19.2702 15.2879 19.227 15.6387 18.9765L20.4857 15.5143L17.0235 20.3613C16.773 20.7121 16.7298 21.1703 16.9104 21.5617L21.4987 31.5029C21.7058 31.9515 22.1667 32.2274 22.6599 32.1979C23.1531 32.1684 23.5779 31.8395 23.73 31.3694L32.1417 5.36938Z"/>
                </svg>
            </button>
        </section>

        <!-- Card section -->
        <section class="story w-full h-[100vh] flex flex-row items-center justify-center">
            <div id="card-out" class="card-out flex flex-col items-center">
                <div class="card-top flex flex-row items-center justify-between self-stretch">
                    <div class="card-user flex flex-row items-center">
                        <svg class="w-[1.8rem] h-[1.8rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                            <path d="M18 3C19.9698 2.99999 21.9204 3.38797 23.7402 4.14179C25.5601 4.8956 27.2137 6.00049 28.6066 7.39337C29.9995 8.78624 31.1044 10.4398 31.8582 12.2597C32.612 14.0796 33 16.0301 33 18C33 26.2843 26.2843 33 18 33C9.71576 33 3 26.2843 3 18C3 9.71576 9.71576 3 18 3ZM19.5 19.5H16.5C12.7864 19.5 9.59827 21.7491 8.22317 24.9597C10.3989 28.0106 13.9671 30 18 30C22.0328 30 25.601 28.0106 27.7769 24.9594C26.4018 21.7491 23.2136 19.5 19.5 19.5ZM18 7.5C15.5147 7.5 13.5 9.51474 13.5 12C13.5 14.4853 15.5147 16.5 18 16.5C20.4852 16.5 22.5 14.4853 22.5 12C22.5 9.51474 20.4853 7.5 18 7.5Z"/>
                        </svg>
                        <h2 id="sender-name" class="lato m-0 text-[10pt]">{{ Auth::user()->full_name }}</h2>
                    </div>
                    <form class="flex grow items-center" action="" method="POST">
                        @csrf
                        <input id="tag" class="lato m-0 text-[10pt] text-right flex grow" type="text" name="tag" autocomplete="off" placeholder="#tag">
                    </form>
                </div>
                <div class="card-in flex flex-col items-center">
                    <form class="w-full flex flex-col gap-[0.4rem]" action="" method="POST">
                        @csrf
                        <input id="title" class="mynerve w-full m-0 text-[16pt]" type="text" name="title" autocomplete="off" placeholder="Title"></input>
                        <textarea id="story" class="lato fade-text w-full m-0 text-[10pt] text-justify" name="story" placeholder="Write a story"></textarea>
                    </form>
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
    <script src="js/card_color.js"></script>
    <script src="js/open_nav.js"></script>
    <script src="js/anonymous.js"></script>
</body>
</html>