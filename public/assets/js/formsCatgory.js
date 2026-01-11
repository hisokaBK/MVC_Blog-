function openCreateModal() {
  document.getElementById('createModal').classList.remove('hidden');
  document.getElementById('createModal').classList.add('flex');
}

function closeCreateModal() {
  document.getElementById('createModal').classList.add('hidden');
}

function openEditModal(id, name) {
  const modal = document.getElementById('editModal');
  modal.classList.remove('hidden');
  modal.classList.add('flex');

  modal.querySelector('input[name="id"]').value = id;
  modal.querySelector('input[name="nameCTG"]').value = name;
}

function closeEditModal() {
  const modal = document.getElementById('editModal');
  modal.classList.add('hidden');
  modal.classList.remove('flex');
}
