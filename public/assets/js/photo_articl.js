const input = document.getElementById('photoInput');
const preview = document.getElementById('imagePreview');
const placeholder = document.getElementById('imagePlaceholder');

input.addEventListener('change', () => {
    const file = input.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = () => {
        preview.src = reader.result;
        preview.classList.remove('hidden');
        placeholder.classList.add('hidden');
    };
    reader.readAsDataURL(file);
});
