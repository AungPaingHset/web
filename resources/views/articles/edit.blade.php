@extends("layouts.app")
@section("content")

<div class="article-form-wrapper my-5 py-5">
  @if ($errors->any())
  <div class="alert alert-warning">
    @foreach($errors->all() as $err)
      {{ $err }}<br>
    @endforeach
  </div>
  @endif

  <form method="post">
    @csrf
    
    <div class="mb-2">
      <textarea name="body" class="form-control">{{ $article->body }}</textarea>
    </div>

    <button class="btn btn-primary">Update Article</button>

    <a href="{{ url('/articles') }}" class="btn btm-primary" style=" display: inline-block;">
    ← Back to Articles
    </a>
    
  </form>
</div>
@endsection


