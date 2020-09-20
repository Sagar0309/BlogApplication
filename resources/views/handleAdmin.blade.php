@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                @if(auth()->user()->is_admin == 1)
  <div class="-my-8">
      <div class="py-8 flex flex-wrap md:flex-no-wrap">
      <a href="#" class="flex mx-auto mt-16 bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Create New</a>
      </div>
  </div>
  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection