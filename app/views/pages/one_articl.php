<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?= $data['title']  ?></title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
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
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display antialiased min-h-screen flex flex-col overflow-x-hidden selection:bg-primary selection:text-white">

<?php  require_once __DIR__ . "/../layouts/header.temp.php"  ; ?>

     
<main class="flex-grow w-full max-w-3xl mx-auto px-4 sm:px-6 py-10">
<article class="flex flex-col gap-6">
<div class="flex">
<div class="inline-flex h-8 items-center gap-2 rounded-full bg-primary/10 pl-3 pr-4 border border-primary/20">
<span class="material-symbols-outlined text-primary text-[18px]">tag</span>
<span class="text-primary text-sm font-medium"><?php print_r($data['elementBlog']['categorie']->name);?></span>
</div>
</div>
<div class="flex flex-col gap-4">
<div class=" flex gap-3">
 <div class="size-8 rounded-full bg-cover bg-center" data-alt="Author profile picture" style='background-image: url("../<?= $data['elementBlog']['user']->photo?>");'>
            
        </div>
    <span class="font-medium text-slate-900 dark:text-white"><?= $data['elementBlog']['user']->name?></span>

    </div>

<div class="flex items-center gap-3 text-sm text-slate-500 dark:text-[#ad93c8]">
<device class="flex flex-col sm:flex-row sm:items-center sm:gap-2 justify-between w-[100%]">
<h1 class="text-3xl md:text-5xl font-black leading-[1.1] tracking-tight text-slate-900 dark:text-white">
                    <?= $data['elementBlog']['articl']->title?>
                </h1>
<div><span class="hidden sm:inline">•</span>
<span><?= $data['elementBlog']['articl']->createdAt?></span>
<span class="hidden sm:inline">•</span>
</div>
</device>
</div>
</div>
<div class="w-full mt-2 mb-4">
<div class="aspect-video w-full rounded-xl overflow-hidden shadow-lg bg-surface-dark relative">
<div class="absolute inset-0 bg-cover bg-center transform hover:scale-105 transition-transform duration-700" data-alt="Abstract gradient waves representing technology flow" style='background-image: url("../<?= $data['elementBlog']['articl']->photo ;?>");'>
</div>
</div>
</div>
<div class="prose prose-lg dark:prose-invert max-w-none text-slate-600 dark:text-gray-300 leading-relaxed">
<p class="mb-6">
<?= $data['elementBlog']['articl']->content?>      
          </p>
</div>
<div class="flex items-center justify-between py-6 mt-8 border-t border-b border-gray-200 dark:border-[#362447]">
<div class="flex items-center gap-4">

<a href="/like?id=<?= $data['elementBlog']['articl']->id ?>"><button class="group flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 hover:bg-primary/20 transition-colors">
<?php if(!$data['elementBlog']['userlike'] ):?>
     <span class="material-symbols-outlined text-[20px] group-hover/btn:fill-current" style="font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;">favorite</span>
<?php else : ?>
<span
  class="material-symbols-outlined text-[25px] text-primary"style="font-variation-settings:'FILL' 1,'wght' 400,'GRAD' 0,'opsz' 24;">
  favorite
</span>
<?php endif ; ?>
<span class="font-bold text-primary"><?= $data['elementBlog']['likes']['numLike']?></span>
</button>
</a>

<button class="flex items-center gap-2 px-4 py-2 rounded-full hover:bg-gray-100 dark:hover:bg-[#362447] text-slate-600 dark:text-gray-400 transition-colors">
<span class="material-symbols-outlined">chat_bubble</span>
<span class="font-medium"> <?= $data['elementBlog']['commentsCount']['numComment']?> Comments</span>
</button>
</div>
</div>
<section class="mt-8">
<h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6">Discussion</h3>
<div class="flex gap-4 mb-10">
<div class="shrink-0 hidden sm:block">
<div class="size-10 rounded-full bg-cover bg-center" data-alt="Current user avatar" style='background-image: url("../<?= isset($_SESSION['user'])?$_SESSION['user']->photo:'assets/images/defulteImg.png' ?> ");'>
</div>
</div>
<div class="flex-grow">
<div class="relative">
<form action="/commenter" method='post'>
    <textarea class="w-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-[#362447] rounded-xl p-4 min-h-[120px] text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none resize-none placeholder:text-gray-400 dark:placeholder:text-gray-600" name='commenter' placeholder="What are your thoughts on this article?"></textarea>
    
    <input type="hidden" name="id" value="<?=  $data['elementBlog']['articl']->id ?>">
    <input type="hidden" name="user_id" value="<?=isset($_SESSION['user'])?$_SESSION['user']->id:''?>">
     

<div class="absolute bottom-3 right-3 flex justify-end">
<button class="bg-primary hover:bg-primary/90 text-white px-5 py-2 rounded-lg text-sm font-medium transition-colors shadow-lg shadow-primary/20">
        Post Comment
</button>
</form>
</div>
</div>
</div>
</div>

 <?php for ($i = 0 ;$i<count($data['elementBlog']['comments'][0]) ; $i++ ): ?>
<div class="space-y-8">
<div class="bg-[#66666630]">
  <hr class="border-0 h-[2px] w-1 mx-auto my-6 bg-[#4a4a4a1c]">
</div>
<div class="flex gap-4">
<div class="shrink-0">
<div class="size-10 rounded-full bg-cover bg-center" data-alt="Commenter avatar image" style='background-image: url("../<?= $data['elementBlog']['comments'][0][$i]->photo ?>");'>
</div>
</div>
<div class="flex flex-col gap-1">
<div class="flex items-center gap-2">
<span class="font-semibold text-slate-900 dark:text-white"><?= $data['elementBlog']['comments'][0][$i]->name ?></span>
<span class="text-xs text-slate-500 dark:text-gray-500"><?= $data['elementBlog']['comments'][1][$i]->updated_at ?></span>
</div>
<p class="text-slate-600 dark:text-gray-300 leading-relaxed">
                               <?= $data['elementBlog']['comments'][1][$i]->content ?>
                            </p>
<div class="flex items-center gap-4 mt-2">
<button class="text-xs font-medium text-primary flex items-center gap-1 transition-colors">
<span class="material-symbols-outlined text-[16px] fill-1">thumb_up</span>
                                    3 Likes
                    </button>

</div>
</div>
</div>
</div>
<?php endfor ; ?>
</section>
</article>
</main>

</body>

</html>