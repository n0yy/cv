<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="src/style.css">
</head>
<body class="bg-body">

    <?php include "src/components/navbar.html" ?>

    <main class="mx-28 flex items-center justify-between">
        <div class="w-5/12">
            <img src="src\assets\plane.png" alt="">
            <h1 class="text-slate-100 font-bold text-6xl">Let’s Discuss what you want!</h1>
            <img src="src\assets\person_with_plane.png" alt="">
        </div>
        <div class="w-6/12">
            <form action="#" class="flex flex-col space-y-3 text-slate-300">
                <input type="text" name="name" id="name" placeholder="Name" class="px-5 py-2 bg-transparent border border-slate-500/50 rounded-xl">
                <input type="text" name="email" id="email" placeholder="Email" class="px-5 py-2 bg-transparent border border-slate-500/50 rounded-xl">
                <textarea name="msg" id="msg" cols="30" rows="10" class="px-5 py-2 bg-transparent border border-slate-500/50 rounded-xl" placeholder="Message"></textarea>
                <button class="bg-gradient-to-r from-purple-600 to-pink-600 py-2 rounded-xl">SEND!</button>
            </form>
        </div>
    </main>

</body>
</html>