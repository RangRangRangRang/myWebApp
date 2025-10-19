<!-- USER STORY 6: VIEW -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài liệu học tập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container py-5">
    <h1 class="text-center text-info mb-4 fw-bold">Tài liệu học tập</h1>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-semibold text-light mb-0">Danh sách</h4>
        <a href="{{ route('videos.create') }}" class="btn btn-success">
            ➕ THÊM
        </a>
    </div>

    @if($videos->isEmpty())
        <div class="alert alert-warning text-center">
            <i class="bi bi-info-circle"></i> Chưa có tài liệu nào trong danh sách.
        </div>
    @else
        <table class="table table-dark table-striped table-hover align-middle text-center">
            <thead class="table-info text-dark">
                <tr>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Ghi chú</th>
                    <th>Liên kết</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($videos as $video)
                <tr>
                    <td class="fw-semibold">{{ $video->title }}</td>
                    <td>{{ $video->author }}</td>
                    <td>{{ $video->note }}</td>
                    <td>
                        <a href="{{ $video->youtube_link }}" target="_blank" class="btn btn-outline-info btn-sm">
                            Link
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-outline-warning btn-sm">Sửa</a>
                        <form action="{{ route('videos.destroy', $video->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
