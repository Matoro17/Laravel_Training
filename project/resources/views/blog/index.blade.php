@forelse($posts as $post)
    <h1>{{$post->title}}</h1>
    <h2>{{$post->description}}</h2>
    <h2>{{$post->user->posts}}</h2>
    {{$post->categorias}}
@empty
    Não há registros na tabela
@endforelse