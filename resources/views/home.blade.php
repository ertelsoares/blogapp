@extends('master')

@section('header-intro')
        <h2>Buscar post</h2>
        <form action="{{route('Home')}}" method="get">
            <input type="text" name="search" id="" placeholder="Oque deseja Buscar?">
            <button type="submit">Buscar</button>
        </form>

@endsection

@section('main')

    <section class="text-center">
      <h4 class="mb-5"><strong>Últimos posts</strong></h4>
        
      <div class="posts">
        @forelse ($posts as $post)
        <div class="post">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="{{$post->thumb}}" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">
                {{Str::limit($post->content,10,'...')}}
              </p>
              <p>
               Autor: {{$post->user->fullName}} - {{$post->comments->count()}} comentários
              </p>
              <a href="{{ route('post',$post->slug)}}" class="btn btn-primary">Leia mais</a>
            </div>
          </div>
        </div>
        @empty
          <h2> Nenhum post encontrado</h2>
        @endforelse
        
      </div>
      @if (request()->input('search'))
      <div class="d-flex justify-content-center">
        <div>{{ $posts->appends(['search' => request()->input('search')])->links()}}</div>
        </div>
      @endif
     
    </section>
    
    
    
@endsection


