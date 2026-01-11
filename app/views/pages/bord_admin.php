<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Admin Dashboard</title>

<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

<script src="https://cdn.tailwindcss.com?plugins=forms"></script>

<script>
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        "primary": "#7317cf",
        "background-dark": "#191121",
        "surface-dark": "#23182e",
        "surface-highlight": "#362447",
        "border-dark": "#4d3465",
      },
      fontFamily: {
        display: ["Inter", "sans-serif"]
      }
    }
  }
}
</script>
</head>

<body class="bg-background-dark font-display text-white">
<div class="flex h-screen">

<aside class="hidden lg:flex flex-col w-72 bg-surface-dark border-r border-border-dark p-6">
  <div class="flex items-center gap-3 mb-8">
    <span class="material-symbols-outlined text-primary text-3xl">shield</span>
    <h1 class="font-bold text-lg">Admin Panel</h1>
  </div>

  <nav class="flex flex-col gap-2 flex-1">
    <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary text-white" href="/bord_admin">
      <span class="material-symbols-outlined">dashboard</span>
      Users
    </a>
    <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-pink-500/5 text-white" href="/Categorys">
      <span class="material-symbols-outlined">Category</span>
      Categorys
    </a>

  <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-500/10 text-red-400" href="/logout">
    <span class="material-symbols-outlined">logout</span>
    Logout
  </a>
</aside>

<main class="flex-1 overflow-y-auto p-6 md:p-10">

<div class="mb-8">
  <h2 class="text-3xl font-bold">Admin Dashboard</h2>
  <p class="text-[#ad93c8] text-sm">Manage users and reports</p>
</div>

<div class="mb-10 bg-surface-dark border border-border-dark rounded-xl overflow-hidden">
  <div class="px-6 py-4 border-b border-border-dark">
    <h3 class="font-semibold text-lg">Users List</h3>
  </div>

  <table class="w-full text-sm">
    <thead class="bg-surface-highlight text-[#ad93c8]">
      <tr>
        <th class="px-6 py-3 text-left"></th>
        <th class="px-6 py-3 text-left">Name</th>
        <th class="px-6 py-3 text-left">Email</th>
        <th class="px-6 py-3 text-left">Role</th>
        <th class="px-6 py-3 text-right">Actions</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-border-dark">
    <?php foreach($data['users'] as $user) : 
      if($user->is_active) :?>  
      <tr class="hover:bg-white/5">
        <td class="px-6 py-4">
            <button class="relative h-9 w-9 overflow-hidden rounded-full ring-2 ring-transparent hover:ring-primary transition-all">
             <img alt="User Profile Avatar" class="h-full w-full object-cover" data-alt="User profile avatar close-up" src="../<?= $user->photo ?>"/>
             </button>
        </td>
        <td class="px-6 py-4"><?= $user->name ?></td>
        <td class="px-6 py-4 text-[#ad93c8]"><?= $user->email ?></td>
        <td class="px-6 py-4">
          <span class="px-2 py-1 text-xs rounded bg-blue-400/10 <?= $user->role=='AUTHOR'?'text-blue-400':'text-emerald-400' ?>"><?= $user->role ?></span>
        </td>
        <td class="px-6 py-4 text-right flex justify-end gap-2">
         
          <?php if($user->role!='ADMIN'): ?>
           <a href="/ban?id=<?= $user->id ?>"><button class="px-3 py-1 text-xs rounded bg-red-500/10 text-red-400">Ban</button></a>
           <?php endif;?>
        </td>
      </tr>
    <?php endif ;
           endforeach; ?>  
    </tbody>
  </table>
</div>

<div class="bg-surface-dark border border-border-dark rounded-xl overflow-hidden">
  <div class="px-6 py-4 border-b border-border-dark flex items-center gap-2">
    <span class="material-symbols-outlined text-red-400">report</span>
    <h3 class="font-semibold text-lg">Reported Users</h3>
  </div>

  <table class="w-full text-sm">
    <thead class="bg-surface-highlight text-[#ad93c8]">
      <tr>
        <th class="px-6 py-3 text-left"></th>
        <th class="px-6 py-3 text-left">User</th>
        <th class="px-6 py-3 text-left">Email</th>
        <th class="px-6 py-3 text-left">Reason</th>
        <th class="px-6 py-3 text-right">Action</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-border-dark">
      <?php foreach($data['users'] as $user) : 
      if(!$user->is_active) :?> 
      <tr class="hover:bg-white/5">
        <td class="px-6 py-4">
            <button class="relative h-9 w-9 overflow-hidden rounded-full ring-2 ring-transparent hover:ring-primary transition-all">
             <img alt="User Profile Avatar" class="h-full w-full object-cover" data-alt="User profile avatar close-up" src="../<?= $user->photo ?>"/>
             </button>
        </td>
        <td class="px-6 py-4"><?= $user->name ?></td>
        <td class="px-6 py-4"><?= $user->email ?></td>
        <td class="px-6 py-4 text-[#ad93c8]"><?php foreach ($data['bans'] as $ban) {if ($ban->userId == $user->id) {echo $ban->reason;break; }
        }?></td>
        <td class="px-6 py-4 text-right">
          <a href="/unban?id=<?= $user->id ?>"><button class="px-3 py-1 text-xs rounded bg-green-500/10 text-green-400">UnBan User</button></a>
        </td>
      </tr>
      <?php endif ;
           endforeach; ?> 
    </tbody>
  </table>
</div>
</main>
</div>
</body>
</html>
