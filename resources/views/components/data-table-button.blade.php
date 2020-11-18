@if (isset($button['can']))
    @can ($button['can'])
        @if (isset($button['status']))
             @if ($value->status === $button['status'])
                 <button wire:click.prevent="{{ $button['method'] }}({{ $value->id }})" type="button" class="btn btn-sm btn-{{ $button['class'] }}">
                      @include('components.button-label')
                 </button>
             @endif
        @else
            <button wire:click.prevent="{{ $button['method'] }}({{ $value->id }})" type="button" class="btn btn-sm btn-{{ $button['class'] }}">
                 @include('components.button-label')
            </button>
        @endif
    @endcan
@else
  @if (isset($button['status']))
       @if ($value->status === $button['status'])
           <button wire:click.prevent="{{ $button['method'] }}({{ $value->id }})" type="button" class="btn btn-sm btn-{{ $button['class'] }}">
                @include('components.button-label')
           </button>
       @endif
  @else
      <button wire:click.prevent="{{ $button['method'] }}({{ $value->id }})" type="button" class="btn btn-sm btn-{{ $button['class'] }}">
           @include('components.button-label')
      </button>
  @endif
@endif
