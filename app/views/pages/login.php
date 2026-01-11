<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?= $data['title'] ?></title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#7317cf",
                        "background-light": "#f7f6f8",
                        "background-dark": "#191121",
                        "surface-dark": "#2a1e36",
                        "input-dark": "#362447",
                        "text-muted": "#ad93c8",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark min-h-screen flex flex-col text-slate-900 dark:text-white overflow-x-hidden transition-colors duration-200">
 <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-[#362447] px-6 lg:px-10 py-4 bg-white dark:bg-background-dark z-10">
<div class=" flex items-center w-[100%] gap-4">

<div class=" flex justify-between w-[100%]">
    <h2 class="text-slate-900  first-letter:text-purple-300 first-letter:text-3xl first-letter:font-thin dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]"><a href="/" class="">Blog</a></h2>
     <p><?php  echo isset($_SESSION['error'])?"<p class='text-red-500 border border-red-400 rounded-lg py-2 px-4'>{$_SESSION['error']}</p>":'' ?></p>
<h2 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] "><a href="/" class="hover:text-primary">  ✕ </a></h2>
</div>

</div>
</header>
<main class="flex-grow flex items-center justify-center p-4">
<div class="w-full max-w-[480px] flex flex-col gap-6">
<div class="flex flex-col items-center justify-center pb-4">
<h1 class="text-slate-900 dark:text-white tracking-tight text-3xl md:text-[32px] font-bold leading-tight text-center">Welcome Back</h1>
<p class="text-slate-500 dark:text-text-muted text-center mt-2">Enter your credentials to access your dashboard</p>
</div>
<form action='/login' method='post' class="bg-white dark:bg-[#231a2e] rounded-xl shadow-sm border border-slate-200 dark:border-[#362447] p-6 md:p-8 flex flex-col gap-6">
<div class="flex flex-col gap-2">
<label class="text-slate-900 dark:text-white text-base font-medium leading-normal">Email</label>
<div class="flex items-center rounded-lg bg-slate-50 dark:bg-input-dark overflow-hidden border border-slate-200 dark:border-transparent focus-within:ring-2 focus-within:ring-primary focus-within:border-primary transition-all">
<span class="pl-4 text-slate-400 dark:text-text-muted flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">person</span>
</span>
<input class="w-full bg-transparent border-none text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-text-muted h-12 px-4 focus:ring-0 text-base font-normal leading-normal" placeholder="Enter your email" type="text" name="email"/>
</div>
</div>
<div class="flex flex-col gap-2"> 
<div class="flex justify-between items-center">
       <label class="text-slate-900 dark:text-white text-base font-medium leading-normal">Password</label>
</div>
<div class="flex items-center rounded-lg bg-slate-50 dark:bg-input-dark overflow-hidden border border-slate-200 dark:border-transparent focus-within:ring-2 focus-within:ring-primary focus-within:border-primary transition-all">
<span class="pl-4 text-slate-400 dark:text-text-muted flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">lock</span>
</span>
<input class="w-full flex-1 bg-transparent border-none text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-text-muted h-12 px-4 focus:ring-0 text-base font-normal leading-normal" placeholder="Enter your password" type="password" name="password"/>

</div>
</div>
<div--- class="pt-2">
<button class="w-full cursor-pointer flex items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary hover:bg-primary/90 transition-colors text-white text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-primary/20">
<span class="truncate">Login</span>
</button>
</div--->
</div---------------->
<p class="text-center text-slate-500 dark:text-text-muted text-sm">
                Don't have an account? 
                <a class="text-primary hover:text-primary/80 font-semibold transition-colors" href="/register">Sign up</a>
</p>
</div>
</main>
</body></html>
