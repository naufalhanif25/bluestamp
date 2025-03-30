<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluestamp</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/explore.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Mynerve&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex flex-col m-0 overflow-x-hidden">
    <!-- Header -->
    <header class="flex fixed m-0 items-center justify-between self-stretch">
        <div class="head-title flex items-center">
            <h1 onclick="window.location.href='{{ route('home') }}'" class="mynerve m-0 text-[16pt]">Bluestamp</h1>
        </div>
        <nav class="flex flex-row items-center justify-center lato m-0 text-[10pt]">
            <a href="{{ route('home') }}" class="link">Home</a>
            <a href="{{ route('share') }}" class="link">Share</a>
            <a href="{{ route('explore') }}" class="link underline underline-offset-[0.24em] decoration-[0.08em]" style="text-decoration-color: var(--grey);">Explore</a>
        </nav>
        <div class="acc-buttons flex items-center justify-right lato m-0 text-[10pt]">
            <a href="{{ route('signin') }}" class="link">Sign in</a>
            <a href="{{ route('signup') }}" class="link">Sign up</a>
        </div>
    </header>

    <!-- Main -->
    <main>
        <!-- Search bar -->
        <section class="search lato text-[10pt] w-[100vw] flex flex-col items-center justify-center">
            <form class="w-full flex gap-[0.8rem]" action="" method="POST">
                @csrf
                <input id="query" class="flex grow" type="text" name="query" autocomplete="off" placeholder="Search by #tag">
                <button class="lato-bold" type="submit">Search</button>
            </form>
        </section>

        <!-- Results section -->
        <section class="results w-[100vw] h-full flex flex-row grow items-center justify-center">
            <section id="col-1" class="h-full flex flex-col grow items-center justify-center"></section>
            <section id="col-2" class="h-full flex flex-col grow items-center justify-center"></section>
            <section id="col-3" class="h-full flex flex-col grow items-center justify-center"></section>
        </section>
    </main>

    <!-- Footer -->
    <footer class="flex flex-col items-center justify-center gap-[0.6rem] mt-[2rem]">
        <nav class="flex flex-row items-center justify-center lato m-0 text-[10pt] gap-[2rem]">
            <a href="{{ route('about') }}" class="link fade-text">About</a>
            <a href="{{ route('home') }}" class="link fade-text">Feedback</a>
            <a href="{{ route('about') }}" class="link fade-text">Support</a>
        </nav>
        <p class="lato m-0 text-[10pt]">© 2025 HearMeOut. All rights reserved.</p>
    </footer>
</body>
</html>