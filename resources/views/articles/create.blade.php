@extends('partials.layout')

@section('content')
    <div class="container mx-auto max-w-lg">
        <div class="card  bg-base-100 shadow-xl ">
            <form action="{{route('articles.store')}}" method="POST">
                @csrf
            <div class="card-body">
                <h2 class="card-title text-base">Title</h2>
                 <textarea name="title" class="textarea textarea-primary  @error('title') textarea-error @enderror " placeholder="Bio"></textarea>
                @error('title')
                <label class="label">
                <span class="label-text-alt text-error">{{$message}}</span>
                </label>
                @enderror
                <h2 class="card-title text-base">Content</h2>
                 <input name="body" type="text" placeholder="Type here" class="input input-bordered w-full max-w-lg @error('body') textarea-error @enderror " />

                @error('body')
                <label class="label">
                    <span class="label-text-alt text-error">{{$message}}</span>
                </label>
                @enderror
                 <input type="submit" value="Submit" class="btn btn-neutral w-28" />
            </div>
            </form>
        </div>
    </div>
@endsection
