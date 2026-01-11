<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Internal Blog - Homepage</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
                        "background-dark": "#121212", 
                        "surface-dark": "#1e1e1e",
                        "surface-dark-hover": "#2a2a2a",
                        "border-dark": "#333333",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.375rem", "md": "0.375rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom scrollbar for better look in dark mode */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #121212; 
        }
        ::-webkit-scrollbar-thumb {
            background: #333; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #444; 
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen flex flex-col font-display">

<?php  require_once __DIR__ . "/../layouts/header.temp.php"  ; ?>

<div class="mx-auto flex w-full max-w-7xl flex-1 items-start gap-10 px-4 py-8 sm:px-6 lg:px-8">
<aside class="sticky top-24 hidden w-64 shrink-0 lg:block">
<h2 class="mb-4 px-3 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                Categories
            </h2>
<nav class="space-y-1">
<a class="group flex items-center rounded-lg bg-primary px-3 py-2 text-sm font-medium text-white transition-all" href="#">
<span class="material-symbols-outlined mr-3 text-[20px]">grid_view</span>
                    All Posts
</a>
<?php foreach($data['allCategories'] as $categorie): ?>
<a class="group flex items-center rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-surface-dark-hover transition-all" href="#">
<span class="material-symbols-outlined mr-3 text-[20px] text-slate-400 group-hover:text-primary dark:text-slate-500 dark:group-hover:text-primary">terminal</span>
                <?= $categorie->name ?>
</a>
<?php endforeach; ?>

</nav>
<div class="my-6 border-t border-slate-200 dark:border-border-dark"></div>
<h2 class="mb-4 px-3 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                Trending Tags
            </h2>
<div class="flex flex-wrap gap-2 px-1">
<a class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600 hover:bg-slate-200 dark:bg-surface-dark dark:text-slate-300 dark:hover:bg-surface-dark-hover border border-slate-200 dark:border-border-dark" href="#">#roadmap</a>
<a class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600 hover:bg-slate-200 dark:bg-surface-dark dark:text-slate-300 dark:hover:bg-surface-dark-hover border border-slate-200 dark:border-border-dark" href="#">#typescript</a>
<a class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600 hover:bg-slate-200 dark:bg-surface-dark dark:text-slate-300 dark:hover:bg-surface-dark-hover border border-slate-200 dark:border-border-dark" href="#">#figma</a>
<a class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600 hover:bg-slate-200 dark:bg-surface-dark dark:text-slate-300 dark:hover:bg-surface-dark-hover border border-slate-200 dark:border-border-dark" href="#">#offsite</a>
</div>
</aside>
<main class="flex min-w-0 flex-1 flex-col gap-6">
<div class="flex lg:hidden overflow-x-auto pb-2 -mx-4 px-4 gap-2 scrollbar-hide">
<button class="whitespace-nowrap rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white">All Posts</button>
<button class="whitespace-nowrap rounded-lg bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700 dark:bg-surface-dark dark:text-slate-300">Engineering</button>
<button class="whitespace-nowrap rounded-lg bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700 dark:bg-surface-dark dark:text-slate-300">Design</button>
<button class="whitespace-nowrap rounded-lg bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700 dark:bg-surface-dark dark:text-slate-300">Marketing</button>
</div>
<div class="flex items-center justify-between mb-2">
<h1 class="text-2xl font-bold text-slate-900 dark:text-white">Latest Updates</h1>
<div class="flex items-center gap-2">
<span class="text-sm text-slate-500 dark:text-slate-400">Sort by:</span>
<select class="bg-transparent border-none text-sm font-medium text-slate-900 dark:text-white focus:ring-0 cursor-pointer pr-8">
<option>Newest First</option>
<option>Most Popular</option>
</select>
</div>
</div>

 <?php for( $i=0 ; $i<count($data['blogs']['users']);$i++): ?>
<article class="group relative flex flex-col sm:flex-row overflow-hidden rounded-lg bg-white shadow-sm ring-1 ring-slate-900/5 transition-all hover:shadow-md hover:ring-slate-900/10 dark:bg-surface-dark dark:ring-white/10 dark:hover:ring-primary/50">
<div class="flex flex-1 flex-col justify-between p-6">
<div class="flex-1">
<div class="flex items-center gap-x-3 text-xs">
<img alt="Sarah Jenkins" class="h-6 w-6 roundusersed-full bg-slate-800" data-alt="Female author portrait" src="../<?=  $data['blogs']['users'][$i]->photo ?>"/>
<span class="font-medium text-slate-900 dark:text-white"><?= $data['blogs']['users'][$i]->name ?></span>
<span class="text-slate-500 dark:text-slate-400">•</span>
<time class="text-slate-500 dark:text-slate-400" datetime="2023-10-24"><?=  $data['blogs']['articls'][$i]->createdAt ?>  </time>
<span class="inline-flex items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-primary ring-1 ring-inset ring-purple-700/10 dark:bg-primary/10 dark:ring-primary/30 ml-auto sm:ml-2"><?= $data['blogs']['categories'][$i]->name ?></span>
</div>
<div class="group relative max-w-xl">
<h3 class="mt-3 text-lg font-bold leading-6 text-slate-900 group-hover:text-primary dark:text-white dark:group-hover:text-primary transition-colors">
<a href="#">
<span class="absolute inset-0"></span>
    <?=  $data['blogs']['articls'][$i]->title ?>           
</a>
</h3>
<p class="mt-3 line-clamp-2 text-sm leading-6 text-slate-600 dark:text-slate-300">
    <?=  $data['blogs']['articls'][$i]->content ?>                           
</p>
</div>
</div>
<div class="mt-6 flex items-center gap-6 border-t border-slate-100 pt-4 dark:border-border-dark/50">
<a href="/like?id=<?= $data['blogs']['articls'][$i]->id ?>&&place=blogs"><button class="group/btn flex items-center gap-1.5 text-sm font-medium text-slate-500 hover:text-red-500 dark:text-slate-400 dark:hover:text-red-400 transition-colors z-10">
<?php if(!$data['blogs']['userlike'][$i]):?>
     <span class="material-symbols-outlined text-[18px] group-hover/btn:fill-current" style="font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;">favorite</span>
<?php else : ?>
<span
  class="material-symbols-outlined text-[18px] text-primary"style="font-variation-settings:'FILL' 1,'wght' 400,'GRAD' 0,'opsz' 24;">
  favorite
</span>
<?php endif ; ?>
<span><?= $data['blogs']['likes'][$i] ?></span>
</button></a>
<a href="/one_blog?id=<?= $data['blogs']['articls'][$i]->id  ?>"><button class="group/btn flex items-center gap-1.5 text-sm font-medium text-slate-500 hover:text-primary dark:text-slate-400 dark:hover:text-primary transition-colors z-10">
<span class="material-symbols-outlined text-[18px]">chat_bubble</span>
<span><?= $data['blogs']['commentsCount'][$i] ?></span>
</button></a>

<a href="one_blog?id=<?= $data['blogs']['articls'][$i]->id  ?>">
    <button class="ml-auto flex items-center gap-1 text-sm font-medium text-primary hover:text-primary/80 z-10">
          Read More <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
    </button>
</a>    
    



</div>
</div>
<div class="sm:w-64 sm:shrink-0 h-48 sm:h-auto bg-slate-200 dark:bg-surface-dark-hover overflow-hidden">
<img alt="Code on screen" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Computer screen displaying code" src="../<?=  $data['blogs']['articls'][$i]->photo ?>"/>
</div>
</article>

<?php  endfor ;  ?>


<!-- 
<div class="flex justify-center mt-4 mb-8"> 
<button class="px-6 py-2.5 rounded-lg border border-slate-300 bg-white text-sm font-semibold text-slate-700 shadow-sm hover:bg-slate-50 dark:bg-surface-dark dark:border-border-dark dark:text-slate-300 dark:hover:bg-surface-dark-hover dark:hover:border-primary transition-all">
                    Load More Articles
                </button>
</div>
 -->


</main>
</div>

<?php  require_once __DIR__ . "/../layouts/footer.temp.php" ; ?>

</body>

</html>

