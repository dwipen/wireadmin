@extends('adminlte::page')
@section('title', setting('site.name').'-' .ucfirst(Route::currentRouteName()))


@section('adminlte_css_pre')
@stop

@section('adminlte_js')
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
@stop
@section('content')
  {{ $slot }}
@stop
@if (setting('site.footer') )
  @section('footer')
    <div class="row justify-content-center">
       <span>
         <strong>{{ ucfirst(setting('site.footer')) }}</strong>
         <span class="text-success">v.{{ setting('system.version') }}</span>
       </span>
    </div>
  @endsection
@endif
