@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

  <section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">{{ $post->title }}</h2>
      <hr>
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">{{ $post->excerpt }}</h1>
      <hr>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">{{ $post->body }}</p>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Category : {{ $post->category->name }}</p>
    </div>
    <a class="flex mx-auto mt-16 bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" href="{{ route('home') }}">Back</a>
  </div>
</section>

  

</div>
            </div>
        </div>
    </div>
</div>

@endsection