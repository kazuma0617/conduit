<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>{{ $article->title }}</title>
  <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
  <link href="//fonts.googleapis.com/css?family=Titillium+Web:700|Source+Serif+Pro:400,700|Merriweather+Sans:400,700|Source+Sans+Pro:400,300,600,700,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="//demo.productionready.io/main.css" />
</head>
<body>
<div class="article-page">
  <div class="banner">
    <div class="container">
      <h1>{{ $article->title }}</h1>

      <div class="article-meta">
        &nbsp;&nbsp;
        <button class="btn btn-sm btn-outline-secondary"
        onclick="location.href='{{ url('/article/'.$article->id.'/edit') }}'">
        <i class="ion-edit"></i> Edit Article
        </button>
        <form method="POST" action="{{ url('/article/'.$article->id.'/delete') }}" style="display:inline;">
            @csrf
            <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('本当に削除しますか？')">
                <i class="ion-trash-a"></i> Delete Article
            </button>
        </form>
      </div>
    </div>
  </div>

  <div class="container page">
    <div class="row article-content">
      <div class="col-md-12">
        <p>{{ $article->content }}</p>

        <ul class="tag-list">
          @if($article->tags)
            @foreach(explode(',', $article->tags) as $tag)
              <li class="tag-default tag-pill tag-outline">{{ $tag }}</li>
            @endforeach
          @endif
        </ul>
      </div>
    </div>
  </div>
</div>
</body>
</html>
