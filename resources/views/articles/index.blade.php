@extends('articles.app') 
@section('content') 
@if ($message = Session::get('success')) 
        <div class="alert alert-success"> 
            <p>{{ $message }}</p> 
        </div> 
    @endif 
    <table class="table table-bordered" style="width:95%;margin: 0 auto;">        
        <tr> 
            <th>Judul</th> 
            <th>Konten</th> 
            <th>Gambar</th>             
        </tr> 
        @foreach ($articles as $article) 
        <tr> 
            <td><a href="{{route('articles.edit', ['article' => $article->id])}}">{{$article->title}}</a></td> 
            <td>{{ $article->content }}</td> 
            <td><img width="150px"src="{{asset('storage/'.$article->featured_image)}}"></td>  
        </tr> 
        @endforeach 
        <div class="row">
            <div style="margin: 0px 0px opxx 70px;">
                <a class="btn btn-success" href="{{route('article.cetak_pdf')}}">Cetak PDF</a>
            </div>
        </div><br/>
    </table> 
@endsection
