<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Post List</title>
  <style>
    body {
      font-family: sans-serif;
      padding: 20px;
      background: #f9f9f9;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 0 8px rgba(0,0,0,0.05);
    }

    th, td {
      padding: 12px 15px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #173a36;
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .badge {
      padding: 4px 8px;
      border-radius: 5px;
      font-size: 12px;
      color: white;
    }

    .published {
      background-color: #28a745;
    }

    .unpublished {
      background-color: #dc3545;
    }
  </style>
</head>
<body>

<h2>Posts Table</h2>

<table>
  <thead>
    <tr>
      <th>Title</th>
      <th>Content</th>
      <th>Author</th>
      <th>Published</th>
      <th>User ID</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->author }}</td>
        <td class=""><span style="background-color: black;" class="badge {{ $post->is_published ? 'true' : 'false' }}">{{ $post->is_published ? 'Yes' : 'No' }}</span></td>
        <td>{{ $post->user->name }}</td>
        @can('edit-post', $post)
    <td><a href="{{ route('dashboard', $post->id) }}">Edit Post</a></td>
@endcan

    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>
