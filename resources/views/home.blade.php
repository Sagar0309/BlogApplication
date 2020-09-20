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

                    <section class="text-gray-700 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        <hr>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-warning">
            <p>{{ $message }}</p>
        </div>
        <hr>
    @endif
    
    
  @if(auth()->user()->is_admin == 1)
  <div class="-my-8">
      <div class="py-8 flex flex-wrap md:flex-no-wrap">
      <a href="{{ route('create') }}" class="flex mx-auto mt-16 bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Create New</a>
      </div>
  </div>
  <hr>
  @endif
  
  @if(count($posts)>0)
  @foreach($posts as $post)
    <div class="-my-8">
      <div class="py-8 flex flex-wrap md:flex-no-wrap">
      <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="tracking-widest font-medium title-font text-gray-900">{{ $post->category->name }}</span>
          
        </div>
      </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $post->title }}</h2>
          <p class="leading-relaxed">{{ $post->excerpt }}</p>
          <a href="{{ route('show',$post->id) }}" class="text-indigo-500 inline-flex items-center mt-4">Learn More
          </a>
          @if(auth()->user()->is_admin == 1)
          <br>
          <a href="{{ route('edit',$post->id) }}">edit</a> | <a href="{{ route('destroy',$post->id) }}">delete</a>
          @endif
        </div>
      </div>
      <hr>
    </div>
    @endforeach
    @else
    <div class="alert alert-warning">
      <p>No Articles found.</p>
    </div>
    @endif
  </div>
</section>
  <nav>
  {{ $posts->links() }}
  </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
