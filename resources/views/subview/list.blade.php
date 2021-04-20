@extends('subview.master')

@section('title', 'List of Books')

@section('content')
    <div class="heading">
        <h1>Here are the books that we have</h1>
    </div>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Category</th>
                    <th>Pages</th>
                </tr>
            </thead>
            @foreach($list as $book)
                <tr>
                    @foreach($book as $data)
                        <td>{{ $data }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>

@endsection
