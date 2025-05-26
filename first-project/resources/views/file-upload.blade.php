<div>
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="userfile" />
        <button type="submit">Upload</button>
    </form>
</div>
