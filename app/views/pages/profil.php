<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>User Profile - Internal Blog</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
                        "background-dark": "#191121",
                        "surface-dark": "#251b30",
                        "surface-light": "#ffffff",
                        "primary": "#7317cf",
                        "background-light": "#f7f6f8",
                        "surface-dark": "#1e1e1e",
                        "surface-dark-hover": "#2a2a2a",
                        "border-dark": "#333333",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
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
<body class="bg-background-light dark:bg-background-dark min-h-screen text-slate-900 dark:text-white transition-colors duration-200">
<?php  require_once __DIR__ . "/../layouts/header.temp.php"  ; ?>

<main class="flex-1 flex flex-col items-center justify-start pt-12 pb-20 px-4">
<div class="w-full max-w-[800px] flex flex-col gap-8">
<div class="bg-white dark:bg-[#25192f] rounded-xl shadow-xl overflow-hidden border border-slate-200 dark:border-[#362447]">
<div class="flex flex-col items-center p-8 @container">
<div class="flex w-full flex-col gap-6 items-center">
<div class="flex gap-4 flex-col items-center">
<div class="relative group">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full min-h-32 w-32 border-4 border-white dark:border-[#362447] shadow-lg overflow-hidden" data-alt="Modern professional portrait of a woman" style='background-image: url("../<?= $_SESSION['user']->photo ?>");'>
</div>
<div class="absolute bottom-0 right-0 bg-primary text-white p-2 rounded-full shadow-md cursor-pointer hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-sm">photo_camera</span>
</div>
</div>
<div class="flex flex-col items-center justify-center">
<h1 class="text-slate-900 dark:text-white text-3xl font-bold tracking-tight text-center">
    <?= $_SESSION['user']->name ?>
</h1>
<div class="flex items-center gap-2 mt-1">
<span class="px-3 py-0.5 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase tracking-wider italic"><?= $_SESSION['user']->role  ?></span>
<span class="text-slate-400 dark:text-[#ad93c8] text-sm">•</span>
<span class="text-slate-500 dark:text-[#ad93c8] text-sm"><?=  $_SESSION['user']->created_at   ?></span>
</div>
</div>
</div>
<div class="max-w-[540px]">
<p class="text-slate-600 dark:text-white text-base font-normal leading-relaxed text-center">
                                Passionate educator and tech enthusiast. Writing about the future of web development and its impact on modern classroom learning environments. Exploring how AI can bridge gaps in digital literacy.
                            </p>
</div>
<div class="flex gap-3 w-full justify-center mt-2">
<button class="flex min-w-[140px] cursor-pointer items-center justify-center rounded-lg h-10 px-6 bg-slate-100 dark:bg-[#362447] hover:bg-slate-200 dark:hover:bg-[#4d3465] text-slate-700 dark:text-white text-sm font-bold transition-colors">
<span class="material-symbols-outlined mr-2 text-lg">edit</span>
<span class="truncate">Edit Profile</span>
</button>
</div>
</div>
</div>
</div>
<div class="flex flex-col gap-4">
<div class="flex justify-center mt-4">
<a href="/logout" > <button class="flex min-w-[200px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-14 px-8 bg-slate-900 dark:bg-primary hover:bg-black dark:hover:bg-primary/80 text-white text-lg font-bold shadow-lg transition-all active:scale-95">
<span class="material-symbols-outlined mr-2">logout</span>
<span class="truncate">Logout</span>
</button></a>
</div>
<p class="text-center text-slate-400 dark:text-slate-500 text-sm">
          Logged in as <?= $_SESSION['user']->email  ?>
</p>
</div>
</div>
</main>
<?php  require_once __DIR__ . "/../layouts/footer.temp.php"  ; ?>

</body>
</html>
