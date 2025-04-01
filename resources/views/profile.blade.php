<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluestamp</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Mynerve&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
    <main class="flex justify-center items-center">
        <!-- Profile box -->
        <section class="container flex flex-col items-center justify-center">
            <!-- Informations (short) -->
            <div class="profile-container w-full flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.532 45.532">
                    <path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765 S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53 c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012 c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592 c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path> 
                </svg>
                <div class="about-short flex flex-col grow">
                    <h1 class="mynerve m-0 text-[16pt]">John Doe</h1>
                    <p class="lato m-0 text-[10pt]">john.doe12@gmail.com</p>
                </div>
            </div>

            <!-- Informations (long) -->
            <div class="about-long w-full flex flex-col items-center justify-center">
                <div class="info-line flex justify-between items-center w-full">
                    <span class="lato m-0 text-[10pt]">Full name</span>
                    <span class="lato m-0 text-[10pt]">John Doe</span>
                </div>
                <div class="info-line flex justify-between items-center w-full">
                    <span class="lato m-0 text-[10pt]">Username</span>
                    <span class="lato m-0 text-[10pt]">john_doe12</span>
                </div>
                <div class="info-line flex justify-between items-center w-full">
                    <span class="lato m-0 text-[10pt]">Email</span>
                    <span class="lato m-0 text-[10pt]">john.doe12@gmail.com</span>
                </div>
                <div class="info-line flex justify-between items-center w-full">
                    <span class="lato m-0 text-[10pt]">Password</span>
                    <span class="lato m-0 text-[10pt]">*********</span>
                </div>
            </div>
    
            <!-- Action Buttons -->
            <div class="buttons-container w-full flex flex-col items-center justify-center">
                <div class="w-full flex flex-row items-center justify-center">
                    <button type="button" class="solid-button grow lato-bold m-0 text-[10pt]">Edit</button>
                    <button type="button" class="solid-button grow lato-bold m-0 text-[10pt]">Share</button>
                </div>
                <button onclick="window.location.href='{{ route('home') }}'" class="outline-button w-full lato-bold m-0 text-[10pt]">
                    Sign out
                </button>
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
</body>
</html>
