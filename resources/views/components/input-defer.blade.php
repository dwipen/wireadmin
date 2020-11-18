@if ($input['type'] ==="select")
  <select wire:model.defer="{{ $prefix }}.{{ $key }}" class="form-control @error($prefix.'.'.$key) is-invalid @enderror" name="{{ $key }}">
    @foreach ($input['options'] as $option)
      <option value="{{ $option }}">{{ $option }}</option>
    @endforeach
  </select>
@elseif ($input['type'] === "select-tag")
  <select multiple data-role="tagsinput" wire:model.defer="{{ $prefix }}.{{ $key }}" class="form-control @error($prefix.'.'.$key) is-invalid @enderror" name="{{ $key }}">
    @foreach ($input['options'] as $option)
      <option value="{{ $option }}">{{ $option }}</option>
    @endforeach
  </select>
@elseif ($input['type'] === "checkbox")
  <input wire:model.defer="{{ $prefix }}.{{ $key }}" type="{{ $input['type'] }}" name="{{ $key }}" class="@error($prefix.'.'.$key) is-invalid @enderror">
@elseif ($input['type'] === "file")
  <input wire:model.defer="{{ $key }}" type="{{ $input['type'] }}" name="{{ $key }}" class="form-control @error($key) is-invalid @enderror">
@elseif ($input['type'] ==="disabled")
  <input disabled wire:model.defer="{{ $prefix }}.{{ $key }}" type="{{ $input['type'] }}" name="{{ $key }}" class="form-control @error($prefix.'.'.$key) is-invalid @enderror">
@else
  <input wire:model.defer="{{ $prefix }}.{{ $key }}" type="{{ $input['type'] }}" name="{{ $key }}" class="form-control @error($prefix.'.'.$key) is-invalid @enderror">
@endif
