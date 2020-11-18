@if (isset($button['status']) && isset($status))
      @if ($status===$button['status'])
         @if (isset($button['can']))
             @can ($button['can'])
               <div class="col-sm-12 col-md-3">
                 <div id="example1_filter" class="dataTables_filter">
                    <button wire:click.prevent="{{ $button['method'] }}" type="button" class="btn btn-{{ $button['class'] }} btn-md">
                        @if (isset($button['icon']))
                          <i class="{{ $button['icon'] }}"></i>
                        @else
                          {{ ucfirst(trans('aiomlm.buttons.'.$key)) }}
                        @endif
                    </button>
                 </div>
               </div>
             @endcan
         @else
           <div class="col-sm-12 col-md-3">
             <div id="example1_filter" class="dataTables_filter">
                <button wire:click.prevent="{{ $button['method'] }}" type="button" class="btn btn-{{ $button['class'] }} btn-md">
                    @if (isset($button['icon']))
                      <i class="{{ $button['icon'] }}"></i>
                    @else
                      {{ ucfirst(trans('aiomlm.buttons.'.$key)) }}
                    @endif
                </button>
             </div>
           </div>
         @endif
      @endif
@else
     @if (isset($button['can']))
        @can ($button['can'])
          <div class="col-sm-12 col-md-3">
            <div id="example1_filter" class="dataTables_filter">
               <button wire:click.prevent="{{ $button['method'] }}" type="button" class="btn btn-{{ $button['class'] }} btn-md">
                   @if (isset($button['icon']))
                     <i class="{{ $button['icon'] }}"></i>
                   @else
                     {{ ucfirst(trans('aiomlm.buttons.'.$key)) }}
                   @endif
               </button>
            </div>
          </div>
        @endcan
     @else
       <div class="col-sm-12 col-md-3">
         <div id="example1_filter" class="dataTables_filter">
            <button wire:click.prevent="{{ $button['method'] }}" type="button" class="btn btn-{{ $button['class'] }} btn-md">
                @if (isset($button['icon']))
                  <i class="{{ $button['icon'] }}"></i>
                @else
                  {{ ucfirst(trans('aiomlm.buttons.'.$key)) }}
                @endif
            </button>
         </div>
       </div>
     @endif
@endif
