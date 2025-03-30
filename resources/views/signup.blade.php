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
        <div class="bg-white rounded-3xl shadow-lg p-8 w-full max-w-md mx-4">
      <h2 class="text-3xl font-mynerve text-center mb-8">Sign up</h2>
      
      <form class="space-y-4">
        <div>
          <input type="text" placeholder="John Doe" 
                 class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200">
        </div>

        <div>
          <input type="text" placeholder="john_doe12" 
                 class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200">
        </div>

        <div>
          <input type="email" placeholder="john.doe12@gmail.com" 
                 class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200">
        </div>
        
        <div class="relative">
          <input type="password" placeholder="johndoe12" 
                 class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200">
          <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
            </svg>
          </button>
        </div>

        <button type="submit" 
                class="w-full bg-black text-white py-3 rounded-lg font-medium">
          Sign up
        </button>

        <button type="button" 
                class="w-full border border-gray-200 py-3 rounded-lg flex items-center justify-center gap-2">
          <img src="https://www.google.com/favicon.ico" alt="Google" class="w-5 h-5">
          Sign up with Google
        </button>
      </form>

      <p class="text-center mt-6 text-gray-600">
        Already have an account? 
        <a href="./index.html" class="text-black font-medium">Sign in</a>
      </p>
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
