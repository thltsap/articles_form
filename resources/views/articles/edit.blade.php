@extends('articles.app')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 mx-auto col-md-10 col-12">
        <form action="{{route('articles.update', $article->id)}}" method="POST" enctype="multipart/form-data" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control" name="title" required="required" placeholder="Judul" value="{{$article->title}}">
                    </div>

                    <div class="col-lg-12 col-12">
                        <textarea class="form-control" rows="6" name="content" required="required" placeholder="Konten">{{$article->content}}</textarea>
                    </div>

                    <div class="col-12">
                        <input type="file" name="image" required="required" placeholder="Masukan gambar..." value="{{$article->featured_image}}">
                    </div>

                    <div class="col-12 my-3 text-center">
                        <img src="{{asset('storage/' . $article->featured_image)}}" width="150px">
                    </div>

                    <div class="col-lg-5 mx-auto col-7">
                        <button type="submit" class="form-control" id="submit-button" name="submit">Ubah Data</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
