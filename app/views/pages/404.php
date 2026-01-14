<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?= $data['title'] ?></title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
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
            },
            fontFamily: {
              "display": ["Inter"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
<style type="text/tailwindcss">
        body {
            font-family: 'Inter', sans-serif;
        }
        .hisoka-card-glow {
            box-shadow: 0 0 40px rgba(115, 23, 207, 0.4);
        }
        .suit-pattern {
            background-image: radial-gradient(circle, rgba(115, 23, 207, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col transition-colors duration-300">
<main class="flex-1 flex items-center justify-center px-4 py-12">
<div class="max-w-[960px] w-full flex flex-col items-center">
<div class="relative w-full max-w-[280px] md:max-w-[320px] mb-8 group">
<div class="absolute inset-0 bg-primary/20 blur-3xl rounded-full scale-110 opacity-50 group-hover:opacity-80 transition-opacity"></div>
<div class="relative aspect-[2/3] w-full bg-background-dark border-2 border-primary/40 rounded-xl overflow-hidden hisoka-card-glow transform group-hover:-translate-y-2 transition-transform duration-500">
<div class="absolute inset-0 suit-pattern opacity-30"></div>
<div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-transparent to-primary/10 pointer-events-none"></div>
<div class="absolute top-4 left-4 text-primary flex flex-col items-center">
<span class="text-3xl font-bold lowercase leading-none">h</span>
<span class="material-symbols-outlined text-base">style</span>
</div>
<div class="absolute bottom-4 right-4 text-primary flex flex-col items-center rotate-180">
<span class="text-3xl font-bold lowercase leading-none">h</span>
<span class="material-symbols-outlined text-base">style</span>
</div>
<div class="w-full h-full p-4 flex items-center justify-center">
<div class="w-full h-full bg-center bg-no-repeat bg-contain relative" data-alt="Stylized Hisoka character playing card illustration with purple details" style='background-image: url("../assets/images/hisoka.gif");'>
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-primary/5 rounded-full blur-2xl"></div>
</div>
</div>
</div>
</div>
<div class="text-center space-y-4 max-w-lg">
<h1 class="text-gray-900 dark:text-white tracking-tight text-[32px] md:text-[48px] font-extrabold leading-tight">
                404 - Page Not Found
            </h1>
<p class="text-gray-600 dark:text-gray-400 text-lg font-normal leading-relaxed px-4">
                Hisoka seems to have pulled a trick—it looks like you've taken a wrong turn. 
                Don't worry, the community is just one click away.
            </p>
</div>
<div class="mt-10 flex flex-col items-center gap-6">
<a href="/">
<button class="flex min-w-[220px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 px-8 bg-primary text-white text-lg font-bold shadow-lg shadow-primary/30 hover:scale-105 active:scale-95 transition-all">
<span class="truncate">Go Back Home</span>
</button>
</a>

</div>
</div>
</main>

</body></html>