<select wire:change="updateState({{ $id }}, $event.target.value)"
        x-data
        x-on:change="
            $el.className = $el.value === 'done'
                ? 'text-[11px] cursor-pointer appearance-none rounded-md border px-2 py-[2px] pr-6 bg-green-50 text-green-800 border-green-400'
                : 'text-[11px] cursor-pointer appearance-none rounded-md border px-2 py-[2px] pr-6 bg-amber-50 text-amber-800 border-amber-400'
        "
        x-bind:class="{{ $state == 'done' ? 'true' : 'false' }}
            ? 'text-[11px] cursor-pointer appearance-none rounded-md border px-2 py-[2px] pr-6 bg-green-50 text-green-800 border-green-400'
            : 'text-[11px] cursor-pointer appearance-none rounded-md border px-2 py-[2px] pr-6 bg-amber-50 text-amber-800 border-amber-400'">

    <option value="not done" {{ $state == 'not done' ? 'selected' : '' }}>Sin Hacer</option>
    <option value="done"     {{ $state == 'done'     ? 'selected' : '' }}>Hecho</option>

</select>
<!-- Modal de imagen -->
<div id="imageModal"
     onclick="closeImageModal()"
     style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.75); z-index:9999;
            align-items:center; justify-content:center; cursor:zoom-out;">
    <img id="modalImg" src=""
         style="max-width:90vw; max-height:90vh; border-radius:10px; box-shadow:0 8px 40px rgba(0,0,0,0.5);">
</div>

<script>
function openImageModal(url) {
    const modal = document.getElementById('imageModal');
    document.getElementById('modalImg').src = url;
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}
function closeImageModal() {
    document.getElementById('imageModal').style.display = 'none';
    document.body.style.overflow = '';
}
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeImageModal(); });
</script>
