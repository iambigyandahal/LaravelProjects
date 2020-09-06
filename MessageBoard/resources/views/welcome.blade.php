@extends('layouts.header')

@section('body')
        <div class="content">
            <table border="2">
                <thead>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Message Created</th>
                </thead>
                <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td><a href="/message/{{ $message->id }}">{{ $message->title }}</td>
                            <td>{{ $message->author }}</td>
                            <td>{{ $message->created_at->diffforHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
@endsection
