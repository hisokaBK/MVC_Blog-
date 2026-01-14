<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?= $data['title'] ?></title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="../assets/styles/style.css">

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
                        "surface-dark": "#1e1e1e",
                        "surface-dark-hover": "#2a2a2a",
                        "border-dark": "#333333",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white transition-colors duration-300">

<?php  require_once __DIR__ . "/../layouts/header.temp.php"  ; ?>

<main class="flex flex-col flex-1">
<div class="@container">
<div class="@[480px]:py-8">
<div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-6 text-center border border-white/5" data-alt="Abstract purple and dark violet gradient pattern" style='background-image: linear-gradient(rgba(25, 17, 33, 0.85) 0%, rgba(25, 17, 33, 0.95) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBEI9RE-xT4K6KnNPEiEuJW5DYziV4k0_tRqV4gyIwhtUSW0WAY1q3UTXMnJ86xKBFevZmaUK2EQdHrCbzCs6eyhgsHdgun9b_CbGQV81O-F3cF4ggOoEMyLP76TfmOi0kGzhNQNrxHKSSPTvnP9TL6xt6soltlfRRQpCjUVEM_a3HSjC-G9xpPj60RvsEIOWrgp06_2AQHwWF3-r3GoNxDyQG4Bz6UUIUflFL6pSS9sSiW9OqG0mZdCKPkyj0FBen46W_ejPlS-IM");'>
<div class="flex flex-col gap-4 max-w-[720px]">
<h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-6xl">
                                            Welcome to our <span class="text-primary">Community Hub</span>
</h1>
<p class="text-slate-300 text-base font-normal leading-relaxed @[480px]:text-lg">
                                            A dedicated internal platform for students and faculty. Share project updates, creative writing, and educational insights in a safe, collaborative environment.
                                        </p>
</div>
<div class="flex flex-col sm:flex-row gap-4">
<a href="/blogs"><button class="flex min-w-[160px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-primary/20 transition-all">
<span class="truncate">Show Blogs</span>
</button></a>
<button class="flex min-w-[160px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-white/10 hover:bg-white/20 text-white text-base font-bold leading-normal tracking-[0.015em] border border-white/10 transition-all">
<span class="truncate">Learn More</span>
</button>
</div>
</div>
</div>
</div>
<div class="flex flex-col gap-10 px-4 py-16 @container">
<div class="flex flex-col gap-4 text-center items-center">
<h2 class="text-white tracking-light text-3xl font-bold leading-tight @[480px]:text-4xl">
                                    Why we blog
                                </h2>
<p class="text-slate-400 text-base font-normal leading-normal max-w-[640px]">
                                    Empowering our internal community through digital storytelling and shared knowledge across departments.
                                </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="flex flex-1 gap-5 rounded-xl border border-primary/20 bg-primary/5 p-8 flex-col hover:border-primary/40 transition-colors group">
<div class="w-12 h-12 flex items-center justify-center rounded-lg bg-primary/20 text-primary group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined text-3xl">school</span>
</div>
<div class="flex flex-col gap-2">
<h3 class="text-white text-xl font-bold leading-tight">Students</h3>
<p class="text-slate-400 text-sm leading-relaxed">Publish your project updates, portfolios, and creative expressions to inspire your peers.</p>
</div>
</div>
<div class="flex flex-1 gap-5 rounded-xl border border-primary/20 bg-primary/5 p-8 flex-col hover:border-primary/40 transition-colors group">
<div class="w-12 h-12 flex items-center justify-center rounded-lg bg-primary/20 text-primary group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined text-3xl">menu_book</span>
</div>
<div class="flex flex-col gap-2">
<h3 class="text-white text-xl font-bold leading-tight">Teachers</h3>
<p class="text-slate-400 text-sm leading-relaxed">Share educational insights, resource links, and classroom news with the entire faculty.</p>
</div>
</div>
<div class="flex flex-1 gap-5 rounded-xl border border-primary/20 bg-primary/5 p-8 flex-col hover:border-primary/40 transition-colors group">
<div class="w-12 h-12 flex items-center justify-center rounded-lg bg-primary/20 text-primary group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined text-3xl">groups</span>
</div>
<div class="flex flex-col gap-2">
<h3 class="text-white text-xl font-bold leading-tight">Community</h3>
<p class="text-slate-400 text-sm leading-relaxed">Keep everyone connected with school-wide announcements and shared achievements.</p>
</div>
</div>
</div>
</div>
<div class="@container">
<div class="flex flex-col items-center gap-8 px-4 py-20 bg-primary/10 rounded-xl border border-primary/20 mb-10">
<div class="flex flex-col gap-4 text-center">
<h2 class="text-white tracking-light text-3xl font-bold leading-tight @[480px]:text-4xl">
                                        Ready to dive in?
                                    </h2>
<p class="text-slate-300 text-base font-normal leading-normal max-w-[600px]">
                                        Join over 500 active contributors and explore the diverse voices of our school.
                                    </p>
</div>
<div class="flex justify-center w-full">
<a href="/blogs"><button class="flex min-w-[200px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 px-8 bg-primary hover:bg-primary/90 text-white text-lg font-bold leading-normal tracking-[0.015em] transition-transform active:scale-95 shadow-xl shadow-primary/30">
<span class="truncate">Show Blogs</span>
</button></a>
</div>
</div>
</div>
</main>
     
</div>
</div>
</div>
</div>
<?php  require_once __DIR__ . "/../layouts/footer.temp.php" ; ?>
</body>
</html>

