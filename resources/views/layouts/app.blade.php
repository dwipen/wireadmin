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
  @if (\Auth::user()->hasPermissionTo('manage-administrator') && \Route::currentRouteName()==='dashboard')
    @if ($info = (new \App\Repositories\SystemUpdateRepository())->getLatestVersion())
      <div class="col-md-12 card">
        <div class="row justify-content-center">
          <div class="text-info">
                  <strong>System update available : version : {{ $info['version'] }}</strong>
                  <a href="{{ route('system.update') }}" class="btn btn-success btn-sm">Update now</a>
          </div>
        </div>
      </div>
    @endif
  @endif
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
