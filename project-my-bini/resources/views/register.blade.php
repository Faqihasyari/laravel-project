<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="flex h-screen w-full overflow-hidden">
        
        <div class="w-[40%] bg-[#282143]">
            <img src="{{ asset('images/bg-register.png') }}"
                 alt="Anime Graphic"
                 class="w-full h-full object-cover">
        </div>

        <div class="w-[60%] bg-[#6558FC] flex items-center justify-center relative">
            
            <div class="flex flex-col items-center text-center w-full max-w-lg z-10">

                <h1 class="text-4xl font-cinzel mb-6 text-white tracking-wider">
                    KISEKIDROP - REGISTER
                </h1>

                <div class="w-full space-y-6">
                    <input type="text"
                        placeholder="Username"
                        class="w-full p-5 rounded-2xl bg-indigo-700 text-black border-none placeholder:text-gray-300 outline-none">

                    <input type="email"
                        placeholder="Email"
                        class="w-full p-5 rounded-2xl bg-indigo-700 text-black border-none placeholder:text-gray-300 outline-none">

                    <input type="password"
                        placeholder="Password"
                        class="w-full p-5 rounded-2xl bg-indigo-700 text-black border-none placeholder:text-gray-300 outline-none">
                </div>

            </div>

            <img src="{{ asset('images/frieren-pojok.png') }}"
                 alt="Dekorasi Pojok"
                 class="absolute bottom-0 right-0 w-80 opacity-80 pointer-events-none">

        </div>
    </div>
</body>

</html>