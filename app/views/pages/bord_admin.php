<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Author Dashboard</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#7317cf",
                        "background-light": "#f7f6f8",
                        "background-dark": "#191121",
                        "surface-dark": "#23182e", // Slightly lighter for cards/sidebar
                        "surface-highlight": "#362447", // For inputs/secondary buttons
                        "border-dark": "#4d3465",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        /* Custom scrollbar for dark theme */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #191121; 
        }
        ::-webkit-scrollbar-thumb {
            background: #4d3465; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #7317cf; 
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white antialiased overflow-hidden">
<div class="flex h-screen w-full overflow-hidden">
<!-- Sidebar Navigation -->
<aside class="hidden lg:flex flex-col w-72 h-full bg-surface-dark border-r border-border-dark flex-shrink-0">
<div class="p-6 flex flex-col gap-8 h-full">
<!-- Profile Section -->
<div class="flex items-center gap-4">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-12 shadow-lg ring-2 ring-primary/30" data-alt="Profile picture of the author, Jane Doe" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBKtxFMnVQRXm8YTPBF8_v887Acwr1atSSyP23eu2mvx4FnV5Y5xxfRGBMxeYPOeT_f3s6FQ31UiQicw9lCJ7Yx5AWLp5wEpN164bD31HukDj-Y4Tby5j8bS4xryxq6Gnn0vSCYH0CDGRmrN27hHYY9zvwn15xRNkLtxgECSVy6yhG4MuNu8TkKGg85ypzM3Pa7tdnfcVxh3CVOdBEbAnWOjXxM7m381-xhi8CT8KEobnnSjrWt9iLGJCnqnBlj6IwibaOLIgyLIqA");'>
</div>
<div class="flex flex-col">
<h1 class="text-white text-base font-semibold leading-tight">Jane Doe</h1>
<p class="text-[#ad93c8] text-sm font-normal">Senior Author</p>
</div>
</div>
<!-- Navigation Links -->
<nav class="flex flex-col gap-2 flex-1">
<a class="group flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-highlight transition-colors text-[#ad93c8] hover:text-white" href="#">
<span class="material-symbols-outlined text-2xl group-hover:text-white transition-colors">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="group flex items-center gap-3 px-4 py-3 rounded-xl bg-primary shadow-lg shadow-primary/20 text-white" href="#">
<span class="material-symbols-outlined text-2xl fill-1">article</span>
<span class="text-sm font-medium">My Articles</span>
</a>
<a class="group flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-highlight transition-colors text-[#ad93c8] hover:text-white" href="#">
<span class="material-symbols-outlined text-2xl group-hover:text-white transition-colors">chat_bubble</span>
<span class="text-sm font-medium">Comments</span>
<span class="ml-auto bg-primary text-xs font-bold px-2 py-0.5 rounded-full text-white">3</span>
</a>
<a class="group flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-highlight transition-colors text-[#ad93c8] hover:text-white" href="#">
<span class="material-symbols-outlined text-2xl group-hover:text-white transition-colors">settings</span>
<span class="text-sm font-medium">Settings</span>
</a>
</nav>
<!-- Logout -->
<div class="mt-auto">
<a class="group flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-500/10 text-[#ad93c8] hover:text-red-400 transition-colors" href="#">
<span class="material-symbols-outlined text-2xl">logout</span>
<span class="text-sm font-medium">Logout</span>
</a>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 h-full overflow-y-auto relative flex flex-col">
<div class="w-full max-w-[1200px] mx-auto p-4 md:p-8 flex flex-col gap-8">
<!-- Page Heading & Actions -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
<div class="flex flex-col gap-1">
<h2 class="text-white text-3xl font-bold tracking-tight">My Articles</h2>
<p class="text-[#ad93c8] text-sm">Manage and edit your blog posts, track performance and analytics.</p>
</div>
<button class="flex items-center justify-center gap-2 bg-primary hover:bg-[#6012af] text-white px-6 py-2.5 rounded-lg text-sm font-medium transition-colors shadow-lg shadow-primary/25">
<span class="material-symbols-outlined text-[20px]">add</span>
<span>New Article</span>
</button>
</div>
<!-- Stats Overview -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="bg-surface-dark border border-border-dark rounded-xl p-6 flex flex-col gap-1 hover:border-primary/50 transition-colors cursor-default">
<div class="flex items-center justify-between">
<p class="text-[#ad93c8] text-sm font-medium">Total Articles</p>
<span class="material-symbols-outlined text-[#ad93c8] bg-surface-highlight p-1.5 rounded-lg">description</span>
</div>
<p class="text-white text-3xl font-bold">12</p>
<p class="text-emerald-400 text-xs font-medium mt-2 flex items-center gap-1">
<span class="material-symbols-outlined text-sm">trending_up</span> +2 this month
                        </p>
</div>
<div class="bg-surface-dark border border-border-dark rounded-xl p-6 flex flex-col gap-1 hover:border-primary/50 transition-colors cursor-default">
<div class="flex items-center justify-between">
<p class="text-[#ad93c8] text-sm font-medium">Total Likes</p>
<span class="material-symbols-outlined text-[#ad93c8] bg-surface-highlight p-1.5 rounded-lg">favorite</span>
</div>
<p class="text-white text-3xl font-bold">1.2k</p>
<p class="text-emerald-400 text-xs font-medium mt-2 flex items-center gap-1">
<span class="material-symbols-outlined text-sm">trending_up</span> +12% vs last month
                        </p>
</div>
<div class="bg-surface-dark border border-border-dark rounded-xl p-6 flex flex-col gap-1 hover:border-primary/50 transition-colors cursor-default">
<div class="flex items-center justify-between">
<p class="text-[#ad93c8] text-sm font-medium">Pending Reviews</p>
<span class="material-symbols-outlined text-[#ad93c8] bg-surface-highlight p-1.5 rounded-lg">rate_review</span>
</div>
<p class="text-white text-3xl font-bold">2</p>
<p class="text-orange-400 text-xs font-medium mt-2">Needs attention</p>
</div>
</div>
<!-- Filters & Toolbar -->
<div class="flex flex-col md:flex-row gap-4 justify-between items-center bg-surface-dark border border-border-dark p-2 rounded-xl">
<!-- Search -->
<div class="relative w-full md:w-96">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-[#ad93c8]">search</span>
</div>
<input class="block w-full pl-10 pr-3 py-2.5 border-none rounded-lg bg-surface-highlight text-white placeholder-[#ad93c8] focus:ring-2 focus:ring-primary sm:text-sm" placeholder="Search articles by title..." type="text"/>
</div>
<!-- Filter Chips -->
<div class="flex gap-2 w-full md:w-auto overflow-x-auto pb-1 md:pb-0 px-2 md:px-0">
<button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-primary/20 text-primary border border-primary/30 text-sm font-medium whitespace-nowrap">
                            All Status
                            <span class="material-symbols-outlined text-lg">expand_more</span>
</button>
<button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-surface-highlight hover:bg-[#452e5a] text-[#ad93c8] hover:text-white text-sm font-medium whitespace-nowrap transition-colors">
                            Category
                            <span class="material-symbols-outlined text-lg">expand_more</span>
</button>
<button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-surface-highlight hover:bg-[#452e5a] text-[#ad93c8] hover:text-white text-sm font-medium whitespace-nowrap transition-colors">
                            Date
                            <span class="material-symbols-outlined text-lg">sort</span>
</button>
</div>
</div>
<!-- Article List Table -->
<div class="overflow-hidden rounded-xl border border-border-dark bg-surface-dark">
<div class="overflow-x-auto">
<table class="min-w-full text-left text-sm whitespace-nowrap">
<thead class="bg-surface-highlight text-[#ad93c8]">
<tr>
<th class="px-6 py-4 font-semibold" scope="col">Article Title</th>
<th class="px-6 py-4 font-semibold" scope="col">Category</th>
<th class="px-6 py-4 font-semibold" scope="col">Published Date</th>
<th class="px-6 py-4 font-semibold" scope="col">Status</th>
<th class="px-6 py-4 font-semibold text-right" scope="col">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-border-dark">
<!-- Row 1 -->
<tr class="hover:bg-white/5 transition-colors group">
<td class="px-6 py-4 font-medium text-white">
                                        Getting Started with React
                                    </td>
<td class="px-6 py-4 text-[#ad93c8]">
<span class="inline-flex items-center rounded-full bg-blue-400/10 px-2.5 py-0.5 text-xs font-medium text-blue-400">
                                            Frontend
                                        </span>
</td>
<td class="px-6 py-4 text-[#ad93c8]">
                                        Oct 24, 2023
                                    </td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="h-2 w-2 rounded-full bg-emerald-500"></div>
<span class="text-emerald-400 font-medium">Published</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-white transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-red-400 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-white/5 transition-colors group">
<td class="px-6 py-4 font-medium text-white">
                                        Understanding CSS Grid
                                    </td>
<td class="px-6 py-4 text-[#ad93c8]">
<span class="inline-flex items-center rounded-full bg-purple-400/10 px-2.5 py-0.5 text-xs font-medium text-purple-400">
                                            Design
                                        </span>
</td>
<td class="px-6 py-4 text-[#ad93c8]">
                                        Oct 20, 2023
                                    </td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="h-2 w-2 rounded-full bg-yellow-500"></div>
<span class="text-yellow-400 font-medium">Draft</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-white transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-red-400 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-white/5 transition-colors group">
<td class="px-6 py-4 font-medium text-white">
                                        My Journey in Tech
                                    </td>
<td class="px-6 py-4 text-[#ad93c8]">
<span class="inline-flex items-center rounded-full bg-pink-400/10 px-2.5 py-0.5 text-xs font-medium text-pink-400">
                                            Personal
                                        </span>
</td>
<td class="px-6 py-4 text-[#ad93c8]">
                                        Oct 15, 2023
                                    </td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="h-2 w-2 rounded-full bg-orange-500"></div>
<span class="text-orange-400 font-medium">Pending Review</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-white transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-red-400 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-white/5 transition-colors group">
<td class="px-6 py-4 font-medium text-white">
                                        Mastering Tailwind CSS
                                    </td>
<td class="px-6 py-4 text-[#ad93c8]">
<span class="inline-flex items-center rounded-full bg-blue-400/10 px-2.5 py-0.5 text-xs font-medium text-blue-400">
                                            Frontend
                                        </span>
</td>
<td class="px-6 py-4 text-[#ad93c8]">
                                        Sep 28, 2023
                                    </td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="h-2 w-2 rounded-full bg-emerald-500"></div>
<span class="text-emerald-400 font-medium">Published</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-white transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-red-400 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 5 -->
<tr class="hover:bg-white/5 transition-colors group">
<td class="px-6 py-4 font-medium text-white">
                                        State Management 101
                                    </td>
<td class="px-6 py-4 text-[#ad93c8]">
<span class="inline-flex items-center rounded-full bg-teal-400/10 px-2.5 py-0.5 text-xs font-medium text-teal-400">
                                            Architecture
                                        </span>
</td>
<td class="px-6 py-4 text-[#ad93c8]">
                                        Sep 12, 2023
                                    </td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="h-2 w-2 rounded-full bg-emerald-500"></div>
<span class="text-emerald-400 font-medium">Published</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-white transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-red-400 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="bg-surface-dark border-t border-border-dark px-6 py-4 flex items-center justify-between">
<p class="text-sm text-[#ad93c8]">Showing <span class="font-medium text-white">1</span> to <span class="font-medium text-white">5</span> of <span class="font-medium text-white">12</span> results</p>
<div class="flex gap-2">
<button class="px-3 py-1.5 rounded-lg border border-border-dark text-[#ad93c8] hover:bg-surface-highlight hover:text-white disabled:opacity-50 text-sm font-medium transition-colors">Previous</button>
<button class="px-3 py-1.5 rounded-lg border border-border-dark text-[#ad93c8] hover:bg-surface-highlight hover:text-white text-sm font-medium transition-colors">Next</button>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>