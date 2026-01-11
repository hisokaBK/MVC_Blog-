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
<script src="../assets/js/formsCatgory.js" defer></script>

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
    <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-pink-500/5  text-white" href="bord_admin">
      <span class="material-symbols-outlined">dashboard</span>
      Users
    </a>
    <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary text-white" href="/Categorys">
      <span class="material-symbols-outlined">Category</span>
      Categorys
    </a>

  <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-500/10 text-red-400" href="/logout">
    <span class="material-symbols-outlined">logout</span>
    Logout
  </a>
</aside>

<main class="flex-1 overflow-y-auto p-6 md:p-10">

<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 pb-9">
<div class="flex flex-col gap-1">
<h2 class="text-white text-3xl font-bold tracking-tight">Admin Dashboard</h2>
<p class="text-[#ad93c8] text-sm">Manage Categorys</p>
</div>
<div class="flex gap-3 mb-4">
  <button onclick="openCreateModal()"
    class="px-4 py-2 rounded-lg bg-primary text-white font-medium hover:bg-primary/90">
    + New Category
  </button>
</div>
</div>

<div class="mb-10 bg-surface-dark border border-border-dark rounded-xl overflow-hidden">
  <div class="px-6 py-4 border-b border-border-dark">
    <h3 class="font-semibold text-lg">Categorys List</h3>
  </div>

  <table class="w-full text-sm">
    <thead class="bg-surface-highlight text-[#ad93c8]">
      <tr>
        <th class="px-6 py-3 text-left">Name</th>
        <th class="px-6 py-3 text-left">created at</th>
        <th class="px-6 py-3 text-left">updated at</th>
        <th class="px-6 py-3 text-right">Actions</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-border-dark">
    <?php  foreach($data['Categorys'] as $category): ?>
      <tr class="hover:bg-white/5">
        <td class="px-6 py-4"><?= $category->name ?></td>
        <td class="px-6 py-4 text-[#ad93c8]"> <span class="px-2 py-1 text-xs rounded bg-blue-400/10 text-green-400"><?= $category->created_at ?></span></td>
        <td class="px-6 py-4">
          <span class="px-2 py-1 text-xs rounded bg-blue-400/10 text-blue-400"><?= $category->updated_at ?></span>
        </td>
        <td class="px-6 py-4 text-right">
          <div class="flex items-center justify-end gap-2">
          <button
               type="button"
               onclick="openEditModal(<?= $category->id ?>, '<?= htmlspecialchars($category->name, ENT_QUOTES) ?>')"
               class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-white transition-colors">
               <span class="material-symbols-outlined text-[20px]">edit</span>
          </button>
          <a href="/deleteCategory?id=<?= $category->id ?>">
                <button class="p-1.5 hover:bg-surface-highlight rounded-md text-[#ad93c8] hover:text-red-400 transition-colors">
                <span class="material-symbols-outlined text-[20px]">delete</span>
                </button>
          </a>
          </div>
        </td>
      </tr>
   <?php endforeach ;?>
    </tbody>
  </table>
</div>

<div id="createModal"
     class="fixed inset-0 bg-black/60 hidden items-center justify-center z-50 p-4">

  <div class="bg-surface-dark border border-border-dark rounded-xl w-full max-w-md p-6">
    <h3 class="text-lg font-semibold mb-4">Create Category</h3>

    <form action="/createCategory" method="post" class="flex flex-col gap-4">
      <input
        type="text"
        name="nameCTG"
        placeholder="Category name"
        class="h-12 rounded-lg bg-[#261a32] border border-border-dark px-4 text-white
               placeholder:text-[#ad93c8] focus:ring-2 focus:ring-primary focus:outline-none"
        required
      />

      <div class="flex justify-end gap-3 mt-2">
        <button type="button" onclick="closeCreateModal()"
          class="px-4 h-10 rounded-lg border border-border-dark text-[#ad93c8] hover:bg-surface-highlight">
          Cancel
        </button>

        <button type="submit"
          class="px-6 h-10 rounded-lg bg-primary text-white font-semibold hover:bg-primary/90">
          Save
        </button>
      </div>
    </form>
  </div>
</div>

<div id="editModal" class="hidden fixed inset-0 bg-black/60 items-center justify-center z-50">
  <div class="bg-surface-dark border border-border-dark rounded-xl w-full max-w-md p-6">

    <h3 class="text-lg font-semibold mb-4">Edit Category</h3>

    <form action="/editCategory" method="post" class="flex flex-col gap-4">

      <input
        type="text"
        name="nameCTG"
        class="h-12 rounded-lg bg-[#261a32] border border-border-dark px-4 text-white"
        required
      >

      <div class="flex justify-end gap-3 mt-4">
        <button type="button" onclick="closeEditModal()" class="px-4 h-10 rounded-lg border border-border-dark">
          Cancel
        </button>
        <button type="submit" class="px-6 h-10 rounded-lg bg-primary font-medium">
          Update
        </button>
      </div>
    </form>

  </div>
</div>



</div>
</main>
</div>
</body>
</html>
