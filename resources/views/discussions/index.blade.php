@extends('layouts.app')

@section('content')

@foreach ($discussions as $discussion)
<div class="card mb-4">
    @include('partials.discussion-header')

    <div class="card-body text-center">
        <strong> {{ $discussion->title }} </strong>
    </div>
</div>

@endforeach
{{$discussions->appends(['channel', request()->query('channel')])->links()}}
@endsection
