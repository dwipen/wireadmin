<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ setting('site.name')." - ".ucfirst(\Route::currentRouteName()) }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/master/css/master.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/master/css/util.css') }}">

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@livewireStyles
</head>
<body>
	<div class="loginform-container" style="background-image: url('/assets/master/images/bg-01.png');">
		{{ $slot }}
		</div>
	@livewireScripts
	<script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
	@foreach (['success', 'error', 'warning', 'info'] as $key => $value)
    @if (session()->has($value))
      <script type="text/javascript">
          Toast.fire({
            title : @json(session()->get($value)),
            icon : @json($value)
          });
      </script>
    @endif
  @endforeach
</body>
</html>
