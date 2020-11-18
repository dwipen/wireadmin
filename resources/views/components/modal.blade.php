<div wire:ignore.self class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    @if (isset($modalClass))
      <div class="modal-dialog {{ $modalClass }} modal-dialog-scrollable" role="document">
    @else
      <div class="modal-dialog modal-dialog-scrollable" role="document">
    @endif
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalScrollableTitle">
          {{ ucfirst($prefix) }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <div class="row justify-content-around">
              @foreach ($inputs as $key => $input)
                  <div class="col-md-6 mb-2">
                    <i class="fas fa-hand-point-right text-success"></i>
                    <label class="text-info">
                      {{ ucfirst(trans('aiomlm.'.$prefix.'.'.$key)) }}
                    </label>
                     @include('components.input')
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
              @if (isset($extraInputs))
                <div class="col-md-10 mt-2 mb-2 row justify-content-center">
                  <i class="fas fa-hand-point-right text-success"></i>
                  <label class="text-info">
                    {{ ucfirst(trans('aiomlm.'.$prefix.'.fields')) }}
                  </label>
                  <button wire:click.prevent="showExtraFields" type="button" class="btn btn-sm btn-danger">{{ ucfirst(trans('aiomlm.buttons.click')) }}</button>
                </div>
                @if ($showFields)
                  @foreach ($extraInputs as $key => $input)
                    <div class="col-md-6 mb-2">
                      <i class="fas fa-hand-point-right text-success"></i>
                      <label class="text-info">
                        {{ ucfirst(trans('aiomlm.'.$prefix.'.'.$key)) }}
                      </label>
                       @include('components.input')
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
          </div>
      </div>
      <div class="modal-footer">
        <div class="col-md-12">
          <div class="row justify-content-around">
            @foreach ($modalButtons as $key => $button)
              <button id="{{ $key }}" wire:loading.attr="disabled" wire:click.prevent="{{ $button['method'] }}" type="button" class="btn btn-{{ $button['class'] }}" name="button">
                {{ ucfirst(trans('aiomlm.buttons.'.$key)) }}
              </button>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
