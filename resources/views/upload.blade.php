<h1>Upload Images</h1>

<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"><br><br>
    <input type="submit" name="submit" value="upload">

</form>
