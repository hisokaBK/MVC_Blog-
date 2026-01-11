<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>About Us | Internal Blog</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#7317cf",
                        "background-light": "#f7f6f8",
                        "background-dark": "#191121",
                        "primary": "#7317cf",
                        "background-light": "#f7f6f8",
                        "background-dark": "#121212", 
                        "surface-dark": "#1e1e1e",
                        "surface-dark-hover": "#2a2a2a",
                        "border-dark": "#333333",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen transition-colors duration-300">
<?php require_once __DIR__.'/../layouts/header.temp.php'  ?>
<main class="max-w-[1200px] mx-auto pb-20">
<section class="px-6 pt-16 pb-12 text-center md:text-left">
<div class="flex flex-col gap-4 max-w-3xl">
<h1 class="text-slate-900 dark:text-white text-5xl md:text-6xl font-black leading-tight tracking-tight">
                    Sharing Knowledge <br/>
<span class="text-primary">Building Skills.</span>
</h1>
<p class="text-slate-600 dark:text-[#ad93c8] text-lg md:text-xl font-normal leading-relaxed">
                    A collaborative platform designed for our community to explore web development, document progress, and learn together.
                </p>
</div>
</section>
<section class="px-6 py-12">
<div class="bg-slate-100 dark:bg-[#251a31] rounded-2xl p-8 md:p-12 border border-slate-200 dark:border-[#362447]">
<div class="flex flex-col gap-10">
<div class="flex flex-col gap-4">
<h2 class="text-slate-900 dark:text-white text-3xl md:text-4xl font-bold tracking-tight">
                            Our Mission
                        </h2>
<p class="text-slate-700 dark:text-slate-200 text-lg leading-relaxed max-w-[800px]">
                            This internal blog was created as a hub for beginners to dive into the world of tech. We believe that the best way to learn is by explaining concepts to others. Whether you're writing about your first HTML tag or a complex backend integration, this space belongs to you.
                        </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-[#1a1122] p-6 rounded-xl border border-slate-200 dark:border-[#362447] group">
<div class="w-full h-40 mb-5 bg-center bg-no-repeat bg-cover rounded-lg overflow-hidden relative" data-alt="Group of students working together on laptops" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA-CgHV1zePDbKp6JW0xJ27VviBjRoc0S7P2E0_SCwZiV1hpPGRUsxvvJ7DXBXIY1_2_wkjallastFH3UsypUl26pvWy84wy-IyTFn8zQl_X64JAPXPBye7ihqtTcxvNrhrunYNKykRmK8dR3up5ARYJmUpTEJ220zMPLS4oAX2QZWGhGKlbecWZUoBBvoxVmSx9F8gG5r69RYwobMxFr3g73iMFW3Ldq6WisbIr4k3O9OCQaSSHfBypetiieErOCs0oP-OB8u4VJU");'>
<div class="absolute inset-0 bg-primary/10 group-hover:bg-primary/0 transition-colors"></div>
</div>
<h3 class="text-slate-900 dark:text-white text-xl font-bold mb-2">Learn Together</h3>
<p class="text-slate-600 dark:text-[#ad93c8] text-sm leading-normal">Collaborate with peers on various topics through shared posts and code snippets.</p>
</div>
<div class="bg-white dark:bg-[#1a1122] p-6 rounded-xl border border-slate-200 dark:border-[#362447] group">
<div class="w-full h-40 mb-5 bg-center bg-no-repeat bg-cover rounded-lg overflow-hidden relative" data-alt="Close up of hand writing notes in a notebook" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCqg6NaoRU9yBNn45rsuJuW2F4zJO5Uz1zRTT4NUP8u51TRbB6jiPbuH81WMJeNVDDBwvTcRUBacwZamhFn8qPuB-NxT86w395WbWTamF4QATqRTcyiSQT4FsJRIfVD2ie4fSHhleIcW2QnSwvRvptYhkv-6FfG6hyoBvjEMhlLGfarLkN8J0sJnz8pSyvZa-l196Hn1v3xD8wvGF32Z4WP5AV0Af1Mxnz3fwLcWZxxxNaqIuYpcazcUbO2UC0zos5a_wzwP7ReBNw");'>
<div class="absolute inset-0 bg-primary/10 group-hover:bg-primary/0 transition-colors"></div>
</div>
<h3 class="text-slate-900 dark:text-white text-xl font-bold mb-2">Share Insights</h3>
<p class="text-slate-600 dark:text-[#ad93c8] text-sm leading-normal">Publish articles and get constructive feedback from the community experts.</p>
</div>
<div class="bg-white dark:bg-[#1a1122] p-6 rounded-xl border border-slate-200 dark:border-[#362447] group">
<div class="w-full h-40 mb-5 bg-center bg-no-repeat bg-cover rounded-lg overflow-hidden relative" data-alt="Modern office desk with coding setup on monitors" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDaurHjBZ5ZvIgcm2UziW1c6VhcpnYlmK-jbMiqx55CF9ZnD3sDaPKaoIsIbMn2Th0P67VixvhkEFheg1_m8h_OFdmcRXshgH2kPn9gDNeU2oC3uDvBwWQSPVCs6JQkEFosrbfaC-smhLtI9aO7hDLAtlI8mRMW2S07vycF7dkE7bRJ3ByLY2_eSCM0wGqJFa2DbnIA_Yx1M4dPzHB9Q8MufJOCTdy57qXoh_gSn9LmiJ2J4vgqrOakMgA_xTo5yTs_UTGEbUbwT1o");'>
<div class="absolute inset-0 bg-primary/10 group-hover:bg-primary/0 transition-colors"></div>
</div>
<h3 class="text-slate-900 dark:text-white text-xl font-bold mb-2">Build Skills</h3>
<p class="text-slate-600 dark:text-[#ad93c8] text-sm leading-normal">Improve your technical writing and development skills through consistent practice.</p>
</div>
</div>
</div>
</div>
</section>
<section class="px-6 pt-10 pb-4">
<div class="flex items-center gap-4">
<span class="h-px bg-primary grow opacity-30"></span>
<h2 class="text-slate-900 dark:text-white text-2xl font-bold leading-tight tracking-tight">Meet the Team</h2>
<span class="h-px bg-primary grow opacity-30"></span>
</div>
</section>
<section class="px-6 py-6">
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
<div class="flex flex-col items-center md:items-start gap-4 p-4 hover:bg-slate-100 dark:hover:bg-[#251a31] rounded-xl transition-all border border-transparent hover:border-slate-200 dark:hover:border-[#362447]">
<div class="w-32 h-32 bg-center bg-no-repeat bg-cover rounded-full border-4 border-white dark:border-[#362447] shadow-lg" data-alt="Portrait of Alex Chen, smiling man with glasses" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCTbaBMK9lTpMlSKxseiO5wkuzu5mvB8rS64svCt8Drn3bTrYAAiijz86cAcARBp0zUwU6_Th5gN_dOOhODEOa96J9Zi7AZMBgaL4o0E4RbKKacvoXgv8kGSmIOzhslXyArI3UZbTB4Xs_RvR5CfYfmmDZDGpT9Aj92i8gMGG4o2IwVtU_SwRad0b8PbX8P7HIMFOunbew-iKIobV1frQ7RAqDvr3RnIdCRvXn6fkbE0sqTrln5N0JsKYpI3gqV0m6F31QwlKLpz34");'></div>
<div class="text-center md:text-left">
<p class="text-slate-900 dark:text-white text-lg font-bold leading-none mb-1">Alex Chen</p>
<p class="text-primary text-sm font-medium">Lead Developer</p>
</div>
</div>
<div class="flex flex-col items-center md:items-start gap-4 p-4 hover:bg-slate-100 dark:hover:bg-[#251a31] rounded-xl transition-all border border-transparent hover:border-slate-200 dark:hover:border-[#362447]">
<div class="w-32 h-32 bg-center bg-no-repeat bg-cover rounded-full border-4 border-white dark:border-[#362447] shadow-lg" data-alt="Portrait of Jordan Smith, professional woman smiling" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC-rM-ZIum9BhEJSfGZUX2rtBnNhnegqGVgDN_nBPWaNqiKJy7JOFogDgsrWlifsTqO6AVC2c-J6hOv3qkXFZfid9fmYdptbMO_KTis34C7tE9KNCTWk64FbVTicfQS-bDBxCkjkib0nZRGEQWN1cKWOdM2j1HYy5857yqrwbjvg9SSohzpigNOb_VbKRMLQTd3QHr5OHO8FZimyxy93lr2c5QLgXV98F4T8zgwnNvdKqfXRJLrqrYmpz4WcaKw1asxtY5a2tcfHA4");'></div>
<div class="text-center md:text-left">
<p class="text-slate-900 dark:text-white text-lg font-bold leading-none mb-1">Jordan Smith</p>
<p class="text-primary text-sm font-medium">Content Strategy</p>
</div>
</div>
<div class="flex flex-col items-center md:items-start gap-4 p-4 hover:bg-slate-100 dark:hover:bg-[#251a31] rounded-xl transition-all border border-transparent hover:border-slate-200 dark:hover:border-[#362447]">
<div class="w-32 h-32 bg-center bg-no-repeat bg-cover rounded-full border-4 border-white dark:border-[#362447] shadow-lg" data-alt="Portrait of Taylor Reed, man in a casual t-shirt" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA_IXMGBj2-ctH-BoCck9kqtpPa-zkJr3zh51J2HpOKTpDHCzRhZc9_RJ6SJhTRnlLtvSvrekEZ49Vb5UAgtpRRSdykso63nGJZi8EAv6sMPAR2RnNpa3E6BTOI_MHNljhSIdgYVqI6MGj6T4fRquM48AcphJ8PjrQOijyZymtipuvXhBikccNceIXZOaDQS1WuBmCXYkEQSTHxHQ5EMZFjLZgl6WlSU24k8Ny9fkvsk6x5H2XyB1nHlHEyFTJA6W93BO0J_EELUHE");'></div>
<div class="text-center md:text-left">
<p class="text-slate-900 dark:text-white text-lg font-bold leading-none mb-1">Taylor Reed</p>
<p class="text-primary text-sm font-medium">UI Designer</p>
</div>
</div>
<div class="flex flex-col items-center md:items-start gap-4 p-4 hover:bg-slate-100 dark:hover:bg-[#251a31] rounded-xl transition-all border border-transparent hover:border-slate-200 dark:hover:border-[#362447]">
<div class="w-32 h-32 bg-center bg-no-repeat bg-cover rounded-full border-4 border-white dark:border-[#362447] shadow-lg" data-alt="Portrait of Sam Lee, woman looking directly at camera" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuApuFoq7bTpTMMi9Z4f1N27-ajfRj6KkS2RLPKEJVF1nygK0IrrWj-e_yTAPdbwsF1EhJ0FkAu4H7ItvmvnX9HQ6D5DqsD7shd2fJZOpns0yE3oNnwvcx78buLtZQPQtag3Fklx0Hvrjy6reohO2Yn1whekB8M2uweIWcaViiqPhzYvItViZsZhFgUmAKqjSqB1PW93Wqk9LMTZggn_bxib2V_94S4xPtUw7fi_nrZWNADWReyUSYF4mmPZD9mooRN2LEoydKeNdpo");'></div>
<div class="text-center md:text-left">
<p class="text-slate-900 dark:text-white text-lg font-bold leading-none mb-1">Sam Lee</p>
<p class="text-primary text-sm font-medium">Editor</p>
</div>
</div>
<div class="flex flex-col items-center md:items-start gap-4 p-4 hover:bg-slate-100 dark:hover:bg-[#251a31] rounded-xl transition-all border border-transparent hover:border-slate-200 dark:hover:border-[#362447]">
<div class="w-32 h-32 bg-center bg-no-repeat bg-cover rounded-full border-4 border-white dark:border-[#362447] shadow-lg" data-alt="Portrait of Casey Morgan, man with a beard smiling" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAcNtaIfvdVLKD5GANpCMT7DGXnUZsqbXuvOvp6ZaD1J48IEbOiypSr0hQetubfQNQUi-uAZWzdn7WequqyFE_1EVUGVf--Lo2lo1hnbT5uN5CcjcZ_BJ2k6bvku6ecBqiW5ustrqr9_hOdBSpCw66EKpSVX2q_8i5Aa3Wor_-o5M5F4dCuWY1tNFC_t9wyW0OFQ3lTUJw-TY4iXrtWRWGKp068RhUeKV0TQApDQKAhoVtQ-sJoZmNpSI8SLSBpwp1hveEoiZecugQ");'></div>
<div class="text-center md:text-left">
<p class="text-slate-900 dark:text-white text-lg font-bold leading-none mb-1">Casey Morgan</p>
<p class="text-primary text-sm font-medium">Community Lead</p>
</div>
</div>
</div>
</section>
<footer class="mt-20 pt-10 border-t border-slate-200 dark:border-[#362447] text-center px-6">
<div class="flex flex-col items-center gap-6">
<div class="flex items-center gap-2 text-slate-400">
<span class="material-symbols-outlined text-xl">favorite</span>
<span class="text-sm font-medium">Built by students for students</span>
</div>
<div class="flex gap-8 text-xs text-slate-500 dark:text-slate-400 font-medium uppercase tracking-widest">
<a class="hover:text-primary transition-colors" href="#">Documentation</a>
<a class="hover:text-primary transition-colors" href="#">Privacy</a>
<a class="hover:text-primary transition-colors" href="#">Terms</a>
<a class="hover:text-primary transition-colors" href="#">GitHub</a>
</div>
<p class="text-slate-400 text-xs mb-10">© 2023 Internal Blog Project. All rights reserved.</p>
</div>
</footer>
</main>
</body></html>