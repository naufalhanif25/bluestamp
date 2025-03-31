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
        <div class="bg-[#FFFBF6] rounded-3xl shadow-lg p-8 w-full max-w-md mx-4">
          
          <!-- Profile Header -->
          <div class="flex items-center gap-4 bg-gray-50 rounded-lg p-4 mb-8 border">
            <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div>
              <h2 class="font-medium">John Doe</h2>
              <p class="text-sm text-gray-500">john.doe12@gmail.com</p>
            </div>
          </div>
          
          <!-- Profile Fields -->
          <div class="space-y-4">
            <div class="flex justify-between items-center border-b border-gray-300 pb-2">
              <span class="text-sm text-gray-600">Full name</span>
              <span class="text-gray-900">John Doe</span>
            </div>
    
            <div class="flex justify-between items-center border-b border-gray-300 pb-2">
              <span class="text-sm text-gray-600">Username</span>
              <span class="text-gray-900">john_doe12</span>
            </div>
    
            <div class="flex justify-between items-center border-b border-gray-300 pb-2">
              <span class="text-sm text-gray-600">Email</span>
              <span class="text-gray-900">john.doe12@gmail.com</span>
            </div>
    
            <div class="flex justify-between items-center border-b border-gray-300 pb-2">
              <span class="text-sm text-gray-600">Password</span>
              <span class="text-gray-900">********</span>
            </div>
          </div>
    
          <!-- Action Buttons -->
          <div class="space-y-4">
            <div class="flex gap-4 mt-6">
              <button type="button" class="w-full bg-black text-white py-3 rounded-lg font-medium">Edit</button>
              <button type="button" class="w-full bg-black text-white py-3 rounded-lg font-medium">Share</button>
            </div>
    
            <button type="button" onclick="window.location.href='./index.html'" 
              class="w-full text-[#FF1600] border border-[#FF988E] py-3 rounded-lg font-medium">
              Sign out
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
