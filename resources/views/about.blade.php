<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluestamp</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Mynerve&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex flex-col m-0 overflow-x-hidden">
    <!-- Header -->
    <header class="flex fixed m-0 items-center justify-between self-stretch">
        <div class="head-title flex items-center gap-[0.8rem]">
            <svg onclick="window.history.back()" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                <path d="M30 10 L15 25 L30 40"/>
            </svg>
            <h1 onclick="window.location.href='{{ route('home') }}'" class="mynerve m-0 text-[16pt]">Bluestamp</h1>
        </div>
        <nav class="flex flex-row items-center justify-center lato m-0 text-[10pt]">
            <a href="{{ route('home') }}" class="link">Home</a>
            <a href="{{ route('share') }}" class="link">Share</a>
            <a href="{{ route('explore') }}" class="link">Explore</a>
        </nav>
    </header>

    <!-- Main -->
    <main class="flex justify-center items-center min-h-[calc(100vh-180px)]">
        <div class="bg-[#FFFBF6] rounded-3xl p-8 w-full max-w-md mx-4">
          <h2 class="text-3xl font-mynerve text-center mb-6">About Bluestamp</h2>
          
          <p class="text-gray-600 text-center max-w-3xl mb-12">
            Bluestamp is a platform that provides a place for teenagers to freely express their feelings and others can reply and provide support for it.
          </p>
          
    
          <h3 class="text-3xl font-mynerve text-center mt-6 mb-6">Support Bluestamp</h3>
          
          <p class="text-gray-600 text-center max-w-3xl mb-8">
            Bluestamp will always be free to use! Therefore, if you'd like to support the development and server costs, you can voluntarily contribute to it through donation. Anything you give is greatly appreciated and can helps keep the platform running smoothly for everyone.
          </p>
    
          <div class="space-y-4">
            <button type="button" 
                    class="w-full bg-black text-white py-3 rounded-lg font-medium">
              Support Bluestamp (Saweria)
            </button>
            
            <button type="button" 
                    class="w-full bg-black text-white py-3 rounded-lg font-medium">
              Support Bluestamp (Buy Me a Coffee)
            </button>
          </div>
        </div>
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
