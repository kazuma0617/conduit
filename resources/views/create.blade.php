<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Conduit</title>
  <!-- Import Ionicon icons & Google Fonts our Bootstrap theme relies on -->
  <link
    href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    rel="stylesheet"
    type="text/css"
  />
  <link
    href="//fonts.googleapis.com/css?family=Titillium+Web:700|Source+Serif+Pro:400,700|Merriweather+Sans:400,700|Source+Sans+Pro:400,300,600,700,300italic,400italic,600italic,700italic"
    rel="stylesheet"
    type="text/css"
  />
  <!-- Import the custom Bootstrap 4 theme from our hosted CDN -->
  <link rel="stylesheet" href="//demo.productionready.io/main.css" />
</head>
<body>
<div class="editor-page">
  <div class="container page">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-xs-12">
        <ul class="error-messages">
          <li>That title is required</li>
        </ul>

        <form action="/create" method="POST">
            @csrf
            <fieldset class="form-group">
                <input type="text" name="title" class="form-control form-control-lg" placeholder="Article Title" required>
            </fieldset>
            <fieldset class="form-group">
                <input type="text" name="subtitle" class="form-control" placeholder="What's this article about?" required>
            </fieldset>
            <fieldset class="form-group">
                <textarea name="content" class="form-control" rows="8" placeholder="Write your article (in markdown)" required></textarea>
            </fieldset>
            <fieldset class="form-group">
                <input type="text" name="tags" class="form-control" placeholder="Enter tags">
            </fieldset>
            <button class="btn btn-lg pull-xs-right btn-primary" type="submit">
                Publish Article
            </button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>