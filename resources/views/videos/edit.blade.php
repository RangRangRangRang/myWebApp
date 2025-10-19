<!DOCTYPE html>
<html>
<head><title>Sửa video</title></head>
<body>
<h1>Sửa video</h1>
<form action="{{ route('videos.update', $video->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Tiêu đề:</label><input type="text" name="title" value="{{ $video->title }}"><br>
    <label>Tác giả:</label><input type="text" name="author" value="{{ $video->author }}"><br>
    <label>Ghi chú:</label><input type="text" name="note" value="{{ $video->note }}"><br>
    <label>Link YouTube:</label><input type="text" name="youtube_link" value="{{ old('youtube_link', $video->youtube_link) }}">
    <button type="submit">Cập nhật</button>
</form>
</body>
</html>
