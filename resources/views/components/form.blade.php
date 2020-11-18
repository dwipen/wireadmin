<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-edit text-info"></i>
        <span class="text-success">
          <strong> {{ ucfirst(trans('aiomlm.'.$prefix.'.title', ['status'=>isset($status)?$status:''])) }}</strong>
        </span>
        @isset($marquee)
          <span class="text-danger"> <marquee>{{ ucfirst(trans($marquee)) }}</marquee> </span>
        @endisset
      </div>
      <div class="card-body">
        <div class="form-group">
          <div class="row justify-content-around">
              @foreach ($inputs as $key => $input)
                 @if (isset($input['can']))
                    @can ($input['can'])
                      <div wire:key="input-field-{{ $key }}" class="col-md-6 mb-2">
                        <i class="fas fa-hand-point-right text-success"></i>
                        <label class="text-info">
                          {{ ucfirst(trans('aiomlm.'.$prefix.'.'.$key)) }}
                        </label>
                        @if (isset($input['defer']))
                          @include('components.input-defer')
                        @else
                          @include('components.input')
                        @endif
                        @if ($input['type']==='file')
                          @error ($key)
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        @else
                          @error ($prefix.'.'.$key)
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        @endif
                     </div>
                    @endcan
                 @else
                   <div wire:key="input-field-{{ $key }}" class="col-md-6 mb-2">
                     <i class="fas fa-hand-point-right text-success"></i>
                     <label class="text-info">
                       {{ ucfirst(trans('aiomlm.'.$prefix.'.'.$key)) }}
                     </label>
                     @if (isset($input['defer']))
                       @include('components.input-defer')
                     @else
                       @include('components.input')
                     @endif
                     @if ($input['type']==='file')
                       @error ($key)
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                         </span>
                       @enderror
                     @else
                       @error ($prefix.'.'.$key)
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                         </span>
                       @enderror
                     @endif
                  </div>
                 @endif
              @endforeach

              @if (isset($extraInputs))
                <div wire:key="input-field-{{ $key }}" class="col-md-10 mt-2 mb-2 row justify-content-center">
                  <i class="fas fa-hand-point-right text-success"></i>
                  <label class="text-info">
                    {{ ucfirst(trans('aiomlm.'.$prefix.'.fields')) }}
                  </label>
                  <button wire:click.prevent="showExtraFields" type="button" class="btn btn-sm btn-danger">{{ ucfirst(trans('aiomlm.buttons.click')) }}</button>
                </div>
                @if ($showFields)
                  @foreach ($extraInputs as $key => $input)
                    <div wire:key="input-field-{{ $key }}" class="col-md-6 mb-2">
                      <i class="fas fa-hand-point-right text-success"></i>
                      <label class="text-info">
                        {{ ucfirst(trans('aiomlm.'.$prefix.'.'.$key)) }}
                      </label>
                      @if (isset($input['defer']))
                        @include('components.input-defer')
                      @else
                        @include('components.input')
                      @endif
                       @if ($input['type']==='file')
                         @error ($key)
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                       @else
                         @error ($prefix.'.'.$key)
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                       @endif
                    </div>
                  @endforeach
                @endif
              @endif

          </div>
          <div class="row justify-content-around">
            @foreach ($buttons as $key => $button)
              <button  wire:key="input-field-{{ $key }}" id="{{ $key }}" wire:loading.attr="disabled" wire:click.prevent="{{ $button['method'] }}" type="button"
              class="mt-2 btn btn-{{ $button['class'] }}" name="button">
                {{  ucfirst(trans('aiomlm.buttons.'.$key)) }}
              </button>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
