
<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<title>Preview {{$data->name}}</title>

<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
<link href="{{ asset('css/index-home.css') }}" media="all" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/index-preview.css') }}" media="all" rel="stylesheet" type="text/css"/>

<script src="{{ asset('js/preview.js') }}" type="text/javascript"></script>
<script>
      //function to fix height of iframe!
      var calcHeight = function() {
        var headerDimensions = $('.preview__header').height();
        $('.full-screen-preview__frame').height($(window).height() - headerDimensions);
      }
      $(document).ready(function() {
        calcHeight();
      });
      $(window).resize(function() {
        calcHeight();
      }).load(function() {
        calcHeight();
      });
    </script>
</head>
<body class="full-screen-preview">
<div class="preview__header">
	<div class="preview__envato-logo">
		<a href="/">Envato Market</a>
	</div>
	<div class="preview__actions">
		<div class="preview__action--buy">
			<a href="/cart.html?add=1&id=20463" class="btn btn--primary">Buy now</a>
		</div>
		<div class="preview__action--close">
			<a href="http://obsolute.app.web2developers.in/">
			<i class="e-icon -icon-cancel"></i><span>Remove Frame</span>
			</a>
		</div>
	</div>
</div>
<iframe class="full-screen-preview__frame" src="{{$data->link_preview}}" name="preview-frame" frameborder="0" noresize="noresize" data-view="fullScreenPreview">
</iframe>




</body>
</html>