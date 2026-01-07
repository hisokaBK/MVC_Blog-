<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Article Creation</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
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
                        "background-dark": "#1a1122",},
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="flex min-h-screen flex-col bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display overflow-x-hidden">

<main class="flex-1 flex justify-center py-10 px-4 md:px-10 lg:px-40">
<div class="w-full max-w-[960px] flex flex-col gap-6">
<div class="flex flex-wrap justify-between items-center gap-3 px-4">
<div>
<p class="text-white tracking-tight text-[32px] font-bold leading-tight">Create New Article</p>
<p class="text-[#ad93c8] text-sm mt-1">Share your knowledge with the team</p>
</div>
</div>
<form class="flex flex-col gap-6 p-4">
<div class="flex flex-col gap-2">
<label class="text-white text-base font-medium leading-normal">Article Title</label>
<input class="form-input w-full rounded-lg text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#4d3465] bg-[#261a32] focus:border-primary h-14 placeholder:text-[#ad93c8] px-[15px] text-base font-normal leading-normal transition-all" placeholder="Enter a catchy title..." type="text"/>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-white text-base font-medium leading-normal">Category</label>
<div class="relative">
<select class="form-select w-full rounded-lg text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#4d3465] bg-[#261a32] focus:border-primary h-14 placeholder:text-[#ad93c8] px-[15px] text-base font-normal leading-normal transition-all appearance-none">
<option disabled="" selected="" value="">Select a category</option>
<option value="engineering">Engineering</option>
<option value="design">Design</option>
<option value="marketing">Marketing</option>
<option value="culture">Company Culture</option>
</select>

</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-white text-base font-medium leading-normal">Article Photo</label>
<input accept="image/*" class="w-full rounded-lg text-[#ad93c8] focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#4d3465] bg-[#261a32] focus:border-primary h-14 text-sm font-normal leading-normal transition-all file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-[#362447] file:text-white hover:file:bg-[#4d3465] cursor-pointer pt-2 pl-2" type="file"/>
</div>
</div>
<div class="flex flex-col gap-2 flex-1">
<label class="text-white text-base font-medium leading-normal">Content</label>
<textarea class="form-textarea w-full rounded-lg text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#4d3465] bg-[#261a32] focus:border-primary min-h-[400px] placeholder:text-[#ad93c8] p-[15px] text-base font-normal leading-normal resize-y transition-all" placeholder="Start writing your article here... Markdown is supported."></textarea>
</div>
<div class="flex items-center justify-end gap-4 mt-4 pt-6 border-t border-[#362447]">
<button class="px-6 h-12 rounded-lg border border-[#4d3465] text-white hover:bg-[#362447] font-medium transition-colors focus:ring-2 focus:ring-[#4d3465]" type="button">
                        Cancel
                    </button>
<button class="px-8 h-12 rounded-lg bg-primary hover:bg-[#5f12ac] text-white font-bold shadow-lg shadow-purple-900/20 transition-all hover:shadow-purple-900/40 focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-[#1a1122]" type="button">
                        Save Article
                    </button>
</div>
</form>
</div>
</main>
</body></html>