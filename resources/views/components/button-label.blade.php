@if (isset($button['confirm']))
      @if ($confirm[$key]===$value->id)
         {{ ucfirst(trans('aiomlm.buttons.sure')) }}
      @else
          @if (isset($button['icon']))
            <i class="{{ $button['icon'] }}"></i>
          @else
            {{ ucfirst(trans('aiomlm.buttons.'.$key)) }}
          @endif
      @endif
@else
      @if (isset($button['icon']))
        <i class="{{ $button['icon'] }}"></i>
      @else
        {{ ucfirst(trans('aiomlm.buttons.'.$key)) }}
      @endif
@endif
