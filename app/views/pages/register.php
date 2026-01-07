<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Internal Blog - Register</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#7317cf",
                        "background-dark": "#191121",
                        "surface-dark": "#2a1e36",
                        "input-dark": "#362447",
                        "text-muted": "#ad93c8",
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"]
                    },
                },
            },
        }
    </script>
</head>

<body class="font-display bg-background-dark min-h-screen flex flex-col text-white">

<header class="flex items-center gap-4 border-b border-[#362447] px-6 py-4">
    <span class="material-symbols-outlined text-primary text-[36px]">auto_stories</span>
    <h2 class="text-lg font-bold">Internal Blog</h2>
</header>

<main class="flex-grow flex items-center justify-center p-4">
    <div class="w-full max-w-[480px] flex flex-col gap-6">
        

        <div class="text-center">
            <h1 class="text-3xl font-bold">Create Account</h1>
            <p class="text-text-muted mt-2">Register to access the internal blog</p>
        </div>

        <div>
    <label class="font-medium">Profile Image</label>

    <div class="mt-1 flex items-center gap-4">
        <div class="w-16 h-16 rounded-full bg-input-dark flex items-center justify-center overflow-hidden border border-[#362447]">
            <img id="preview" class="hidden w-full h-full object-cover"/>
            <span id="icon" class="material-symbols-outlined text-text-muted">
                person
            </span>
        </div>

        <input
            type="file"
            accept="image/*"
            class="block w-full text-sm text-text-muted
                   file:mr-4 file:py-2 file:px-4
                   file:rounded-lg file:border-0
                   file:bg-primary file:text-white
                   hover:file:bg-primary/90 cursor-pointer"
        />
    </div>
</div>
        <from action="" method="post" class="bg-[#231a2e] rounded-xl border border-[#362447] p-6 flex flex-col gap-5">

            <div>
                <label class="font-medium">Name</label>
                <input
                    type="text"
                    placeholder="Your name"
                    class="mt-1 w-full h-12 rounded-lg bg-input-dark border-none text-white placeholder:text-text-muted focus:ring-2 focus:ring-primary"
                />
            </div>

            <div>
                <label class="font-medium">Email</label>
                <input
                    type="email"
                    placeholder="Your email"
                    class="mt-1 w-full h-12 rounded-lg bg-input-dark border-none text-white placeholder:text-text-muted focus:ring-2 focus:ring-primary"
                />
            </div>

            <div>
                <label class="font-medium">Password</label>
                <input
                    type="password"
                    placeholder="Password"
                    class="mt-1 w-full h-12 rounded-lg bg-input-dark border-none text-white placeholder:text-text-muted focus:ring-2 focus:ring-primary"
                />
            </div>

            <div>
                <label class="font-medium">Confirm Password</label>
                <input
                    type="password"
                    placeholder="Confirm password"
                    class="mt-1 w-full h-12 rounded-lg bg-input-dark border-none text-white placeholder:text-text-muted focus:ring-2 focus:ring-primary"
                />
            </div>

            <button class="h-12 rounded-lg bg-primary hover:bg-primary/90 font-bold transition">
                Register
            </button>
        </from>

        

        <p class="text-center text-text-muted text-sm">
            Already have an account?
            <a href="#" class="text-primary font-semibold hover:underline">Login</a>
        </p>

    </div>
</main>

</body>
</html>
