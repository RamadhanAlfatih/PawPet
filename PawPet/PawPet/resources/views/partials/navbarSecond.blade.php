<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>

<body class="font-poppins">

    <nav class="p-4 bg-neutral98">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-2 text-grey">
                <img src="{{ asset('image/pawpet_img.png') }}" width="43" height="58" alt="">
                <img src="{{ asset('image/pawpet_text.png') }}" width="129" height="40" alt="">
            </div>
            <!-- <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('home') }}" class="text-grey">Home</a>
                <a href="{{ route('home') }}" class="text-grey">About</a>
                <a href="{{ route('pet') }}" class="text-grey">Pet</a>
                <a href="{{ route('adoption') }}" class="text-grey">Adoption</a>
                <a href="{{ route('home') }}" class="text-grey">Contact</a>
            </div> -->
            <div class="flex items-center gap-10">
                <a href="{{ route('home') }}" class="text-grey">Home</a>
                <a href="{{ route('home') }}" class="text-grey">About</a>
                <a href="{{ route('pet') }}" class="text-grey">Pet</a>
                <a href="{{ route('adoption') }}" class="text-grey">Adoption</a>
                <a href="{{ route('home') }}" class="text-grey">Contact</a>
                <a href="{{ route('profil') }}">
                    <img src="{{ asset('image/avatar.svg') }}" alt="UserProfile" class="w-16 h-16">
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="rounded-full p-3 button-1 border-0 text-white" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>


</body>

</html>