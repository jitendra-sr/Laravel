<div>
    <h2>Uploaded File</h2>
    <p>Path: {{ $filePath }}</p>

    {{-- Display file (works for images/PDFs) --}}
    <a href="{{ asset('storage/' . $filePath) }}" target="_blank">View File</a>

    <!-- asset() lookup for things in public folder therefore the storage/filepath becomes public/storage/filepath which is symlinked to storage/app/public -->

</div>
