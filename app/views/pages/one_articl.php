<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Article Detail Page</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
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
     
<main class="flex-grow w-full max-w-3xl mx-auto px-4 sm:px-6 py-10">
<!-- Article Header Section -->
<article class="flex flex-col gap-6">
<!-- Category Chip -->
<div class="flex">
<div class="inline-flex h-8 items-center gap-2 rounded-full bg-primary/10 pl-3 pr-4 border border-primary/20">
<span class="material-symbols-outlined text-primary text-[18px]">tag</span>
<span class="text-primary text-sm font-medium">Engineering</span>
</div>
</div>
<!-- Title & Metadata -->
<div class="flex flex-col gap-4">
<h1 class="text-3xl md:text-5xl font-black leading-[1.1] tracking-tight text-slate-900 dark:text-white">
                    Getting Started with Internal Tools
                </h1>
<div class="flex items-center gap-3 text-sm text-slate-500 dark:text-[#ad93c8]">
<div class="size-8 rounded-full bg-cover bg-center" data-alt="Author profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCszp6PQ-H8ReVqk9NA4lKZf8zeeWaSXB8AwrX4CEn4eXO-Y85w0JsyWo1b7Yn9SjvjGmPoUNM3PtUYHdcsVHR4m1OrK42B8MhRKc4FsU4mtPVBOh0yd6eMc3V9jcMqckNWQgQ1PyP_vOKTH7gL75Jzf7ZKlVhTDJg2Kf4hwcoPO_p7f4Bjy20OMOd9FSxUU7LeSQC8mHgtBcQWm5_4QkILjmY4Xca-paOWILWlWfOD15k4UuDxV0Vkq4be-mg3emqgV9elUgtks1I");'>
</div>
<div class="flex flex-col sm:flex-row sm:items-center sm:gap-2">
<span class="font-medium text-slate-900 dark:text-white">Sarah Jenkins</span>
<span class="hidden sm:inline">•</span>
<span>Oct 24, 2023</span>
<span class="hidden sm:inline">•</span>
<span>5 min read</span>
</div>
</div>
</div>
<!-- Header Image -->
<div class="w-full mt-2 mb-4">
<div class="aspect-video w-full rounded-xl overflow-hidden shadow-lg bg-surface-dark relative">
<div class="absolute inset-0 bg-cover bg-center transform hover:scale-105 transition-transform duration-700" data-alt="Abstract gradient waves representing technology flow" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDSKOz1OGxwz8HDXnyS0yXMHNWHkkUGCOam_vAC7vVRhm_Y0IUJ2OkMFRcqEmmqE23B4GzRMrWyivQ8VTMwo_nqZ5RFzTkUHTaBIbobCDw9-0nJ4dreDI4NcT3txpYhfbUaS_bZsstlbczvqyxdj0Mop0vOelQnDxVIHE8wyWKMQzJLtCCgeMVaRuuLSHJhvLYHTkwUOVgyS5oD_vw9dwzf2VQd4n26L1Z4aGuc6amibuHbAE6ydMXpZctM75oH81vd4nGB3WefYVg");'>
</div>
</div>
</div>
<!-- Content Area -->
<div class="prose prose-lg dark:prose-invert max-w-none text-slate-600 dark:text-gray-300 leading-relaxed">
<p class="mb-6">
                    Building internal tools is often overlooked in favor of customer-facing features. However, robust internal tooling is the backbone of operational efficiency. When your support team can resolve issues in seconds instead of minutes, or when your sales team has real-time data at their fingertips, the entire organization moves faster.
                    Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada. Nulla facilisi. Curabitur convallis, diam a scelerisque viverra, dui felis cursus ligula, quis finibus libero nisl et libero.
                </p>



</div>
<!-- Engagement Bar -->
<div class="flex items-center justify-between py-6 mt-8 border-t border-b border-gray-200 dark:border-[#362447]">
<div class="flex items-center gap-4">
<button class="group flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 hover:bg-primary/20 transition-colors">
<span class="material-symbols-outlined text-primary group-active:scale-90 transition-transform fill-1">favorite</span>
<span class="font-bold text-primary">42</span>
</button>
<button class="flex items-center gap-2 px-4 py-2 rounded-full hover:bg-gray-100 dark:hover:bg-[#362447] text-slate-600 dark:text-gray-400 transition-colors">
<span class="material-symbols-outlined">chat_bubble</span>
<span class="font-medium">2 Comments</span>
</button>
</div>
</div>
<!-- Comments Section -->
<section class="mt-8">
<h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6">Discussion</h3>
<!-- Comment Input -->
<div class="flex gap-4 mb-10">
<div class="shrink-0 hidden sm:block">
<div class="size-10 rounded-full bg-cover bg-center" data-alt="Current user avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuArRKzrEqwlD062dpHOIBqCY3_2Gf0-K4tJwLhzIP9I7qbSrl6HzRp4F9fqEmKDrrYntz48bxD4tKayO-LlS7KrB2lfW6vbfpEveuwVzDNTc77a1G3sTObW3_112ri2QMAIEEsAt5iw9J3G3Z2FGHnXLPnB6ObotwralaeyYj7XLIptBfr5XXQMVsgQe086bThX-mD1Y19UJ0QVnSXuRKDWjMyXGQCGzeycbnLMtWR0OihmG6CR3rCOf1_8dGM5XIHX92H2E6lb1G8");'>
</div>
</div>
<div class="flex-grow">
<div class="relative">
<textarea class="w-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-[#362447] rounded-xl p-4 min-h-[120px] text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none resize-none placeholder:text-gray-400 dark:placeholder:text-gray-600" placeholder="What are your thoughts on this article?"></textarea>
<div class="absolute bottom-3 right-3 flex justify-end">
<button class="bg-primary hover:bg-primary/90 text-white px-5 py-2 rounded-lg text-sm font-medium transition-colors shadow-lg shadow-primary/20">
                                    Post Comment
                                </button>
</div>
</div>
</div>
</div>

<!-- Comment List -->
<div class="space-y-8">

<div class="flex gap-4">
<div class="shrink-0">
<div class="size-10 rounded-full bg-cover bg-center" data-alt="Commenter avatar image" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB0kUhwDUaxY3hC0TbmapPzqarMiOPx6bz2EwwwHcf6SeU0kHwprebl5fazouZZ0oC5Q5vPwkG3_Dis__xTwxR0nla1n9XqhQnwtz6_yBkV_Sb3ogZ72a_plRpBAUHU129rr6hJ4Sp6zFRXZWHOjyeir80w7F-FRLg9ayQYZplgObDb1phKzYmDv8liJPje7p5Xr1G695brzyfbX4FKk5tJbV9LFBqmSsUslMHMyNW8yUqM8Qxe5A45a1rcfu5_qYkTgW1rz3Gnma8");'>
</div>
</div>
<div class="flex flex-col gap-1">
<div class="flex items-center gap-2">
<span class="font-semibold text-slate-900 dark:text-white">Alex Morgan</span>
<span class="text-xs text-slate-500 dark:text-gray-500">5 hours ago</span>
</div>
<p class="text-slate-600 dark:text-gray-300 leading-relaxed">
                                Great intro! I'd love to see a follow-up post on security best practices for internal tools. It's often an afterthought.
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
</section>
</article>
</main>

</body>

</html>