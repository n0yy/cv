<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="src/style.css">
</head>
<body class="bg-slate-950 max-h-screen overflow-hidden">
    <?php include "src/components/navbar.html"; ?>
    
    <main class="mx-24 flex justify-between">
        <div class="mt-32 max-w-[700px]">
            <h1 class="text-6xl text-slate-100 poppins-bold relative">
                <img src="src\assets\geo_1.png" alt="" class="absolute -z-99 -top-10">
                <span class="relative">Hello, I'm Danang</span>
            </h1>
            <p class="text-slate-300 text-xl poppins-regular mt-3">A passionate 20 year-old 
                <span class="text-highlight">Web Developer specializing in NodeJS.</span>
                I've been freelancing at Fiverr since 2022.</p>
            <div class="mt-5 flex items-center space-x-5">
                <a href="#">
                    <img src="src\assets\gmail.png" alt="gmail">
                </a>
                <a href="#">
                    <img src="src\assets\linkedin.png" alt="gmail">
                </a>
                <a href="#">
                    <img src="src\assets\x.png" alt="gmail">
                </a>
                <a href="#">
                    <img src="src\assets\kaggle.png" alt="gmail">
                </a>
            </div>
            <div class="mt-5">
                <a href="#" class="px-6 py-2 bg-purple-600 w-40 text-center rounded-md poppins-semibold text-slate-200 text-sm bg-gradient-to-r from-purple-600 to-pink-600">Download CV</a>
            </div>
        </div>
        <div class="">
            <img src="src\assets\me.png"" alt="Me" width="450" height="600">
        </div>
        
    </main>
    
    
    
</body>
</html>