<!DOCTYPE html>
<html>
<head><title>Thêm video</title></head>
<body>
<h1>Thêm video mới</h1>
<form action="{{ route('videos.store') }}" method="POST">
    @csrf
    <label>Tiêu đề:</label><input type="text" name="title"><br>
    <label>Tác giả:</label><input type="text" name="author"><br>
    <label>Ghi chú:</label><input type="text" name="note"><br>
    <label>Link YouTube:</label><input type="text" name="youtube_link" required><br>
    <button type="submit">Lưu</button>
</form>
</body>
</html>
