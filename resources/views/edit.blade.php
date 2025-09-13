<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Edit Article</title>
  <!-- Bootstrap やアイコンなどは必要に応じて読み込んでください -->
  <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="//demo.productionready.io/main.css" />
</head>
<body>
<div class="editor-page">
  <div class="container page">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-xs-12">
        <form method="POST" action="{{ url('/article/'.$article->id.'/update') }}">
          @csrf

          <fieldset>
            <fieldset class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control form-control-lg" value="{{ $article->title }}" />
            </fieldset>

            <fieldset class="form-group">
              <label>Subtitle</label>
              <input type="text" name="subtitle" class="form-control" value="{{ $article->subtitle }}" />
            </fieldset>

            <fieldset class="form-group">
              <label>Content</label>
              <textarea name="content" class="form-control" rows="8">{{ $article->content }}</textarea>
            </fieldset>

            <fieldset class="form-group">
              <label>Tags</label>
              <input type="text" name="tags" class="form-control" value="{{ $article->tags }}" />
            </fieldset>

            <button type="submit" class="btn btn-lg btn-primary">Update Article</button>
          </fieldset>
        </form>

      </div>
    </div>
  </div>
</div>
</body>
</html>
