<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/99991856e7.js" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Nsu-cpc</title>
</head>

<body class="text-white"  style="background:#012447;">

<nav class="flex justify-between p-6 mb-6">
    <ul class="flex">
        <li>
            <a class="p-4 hover:text-red-300" href="/">Home</a>
        </li>
        <li>
            <a class="p-4 hover:text-red-300" href="/jobs">Job Portal</a>
        </li>
        <li>
            <a class="p-4 hover:text-red-300" href="/posts/create">Job Post</a>
        </li>
        @auth

            <li>
                <a class="p-4 hover:text-red-300" href="/posts/manage">Manage Posts</a>
            </li>
            <li>
                <form method="POST" action="/logout">
                    @csrf
                    <button class="hover:text-red-300">Logout</button>
                </form>
            </li>
        @else
            <li>
                <a class="p-4 hover:text-red-300" href="/register">Register</a>
            </li>
            <li>
                <a class="p-4 hover:text-red-300" href="/login">Login</a>
            </li>
         @endauth
    </ul>

    <ul class="flex">
        @auth
            <li>
                <a class="p-4 hover:text-red-300" href="/users/profile">Profile</a>
            </li>
            <li class="justify-end">
                <span class="uppercase font-bold hover:text-red-300 ">
                    Welcome, {{ auth()->user()->name }}
                </span>
            </li>
        @else
            <li>
                <a class="p-2" href="https://www.linkedin.com" target="_blank"><i
                        class="fa fa-linkedin"></i></a>
            </li>
            <li>
                <a class="p-3" href="https://www.facebook.com" target="_blank"><i
                        class="fa fa-facebook"></i></a>
            </li>
        @endauth
    </ul>
</nav>

<main>
    {{ $slot }}
</main>

<!-- Footer -->
<footer class="flex justify-start w-full items-center">
    <div class="flex w-6/12 ">
        <aside class="p-10">
            <img src="https://cpc.northsouth.edu//resource/images/cpc_try.png" class="vertical-center">
        </aside>
    </div>

    <div class="flex justify-end w-full">
        <aside class="w-6/12 p-10">
            <div style="text-align: right; padding-right: 5px;">
                <header><h4 class="text-2xl mb-6 font-semibold">Contact Us</h4></header>
                <address>
                    <strong>North South University</strong>
                    <br>
                    <span>5th Floor, Admin Building</span>
                    <br>
                    <span>Plot #15, Block #B, Bashundhara, Dhaka-1229, Bangladesh</span>
                    <br>
                    <abbr title="Telephone">Telephone:</abbr> +880-2-55668200 (Ext: 6045)
                    <br>
                    <abbr title="Email">Email:</abbr> <a href="mailto:cpc@northsouth.edu">cpc@northsouth.edu</a>
                    <br>
                    <abbr title="Email">Email Regarding Website:</abbr> <a href="mailto:cpc.web@northsouth.edu">cpc.web@northsouth.edu</a>
                    <br>
                    <span>Office Hour: Sun. – Thur.: 9:00am – 5:00pm</span>
                </address>
            </div>
        </aside>
    </div>
</footer>

<x-flash/>

<section id="copyright" class="p-10 text-center">
    <div>© Copyright 2022 - Jahid Aneek</div>
</section>
</body>

</html>
