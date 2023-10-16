@extends('partials.layout')

@section('content')
    <div class="container mx-auto max-w-lg">
        <div class="card  bg-base-100 shadow-xl ">
            <form action="{{route('articles.update', ['article' => $article])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <h2 class="card-title text-base">Title</h2>
                    <input name="title" value="{{$article->title}}" class="textarea textarea-primary  @error('title') textarea-error @enderror " placeholder="Bio"/>
                    @error('title')
                    <label class="label">
                        <span class="label-text-alt text-error">{{$message}}</span>
                    </label>
                    @enderror
                    <h2 class="card-title text-base">Content</h2>
                    <textarea name="body" type="text"  placeholder="Type here" class="input input-bordered w-full max-w-lg @error('body') textarea-error @enderror ">{{$article->body}}</textarea>

                    @error('body')
                    <label class="label">
                        <span class="label-text-alt text-error">{{$message}}</span>
                    </label>
                    @enderror
                    <input type="submit" value="Update" class="btn btn-neutral w-28" />
                </div>
            </form>
        </div>
    </div>
@endsection
