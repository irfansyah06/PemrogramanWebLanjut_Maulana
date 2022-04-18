@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<div class="row">
    <div style="margin:0px 0px 0px 70px;">
        <a class="btn btn-warning" href="{{ route('articles.create') }}">Add Article</a>
    </div>
</div><br>

<table class="table table-bordered" style="width: 95%; margin: 0 auto;">
    <tr>
        <th>Judul</th>
        <th>Konten</th>
        <th>Gambar</th>
    </tr> 
    @foreach ($articles as $article)
    <tr>
        <td>{{ $article->title }}</td>
        <td>{{ $article->content }}</td>
        <td><img src="{{ asset('storage/'.$article->featured_image) }}" width="150px"></td>
    </tr>
    @endforeach
</table>

@endsection
    