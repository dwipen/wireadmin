<div class="card">
     <div class="card-header">
        <div class="row justify-content-around">
            <h3 class="card-title text-danger row justify-content-center">
              <i class="fas fa-box text-success"></i>
              <span class="ml-2">{{ ucfirst(trans('aiomlm.'.$prefix.'.title', ['status'=>isset($status)?$status:''])) }}</span>
             </h3>
             @if (isset($cardButtons))
               @foreach ($cardButtons as $key => $button)
                   @include('components.data-table-header-button')
               @endforeach
             @endif
         </div>
      </div>
      <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row mb-2">
            <div class="col-sm-12 col-md-2">
              <div class="dataTables_length" id="example1_length">
                <label><span class="text-info">(total : {{ $data->total() }})</span>
                  <select wire:model="paginate" name="example1_length" aria-controls="example1"
                  class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="2">2 ({{ ucfirst(trans('aiomlm.table.entries')) }})</option>
                    <option value="10">10 ({{ ucfirst(trans('aiomlm.table.entries')) }})</option>
                    <option value="25">25 ({{ ucfirst(trans('aiomlm.table.entries')) }})</option>
                    <option value="50">50 ({{ ucfirst(trans('aiomlm.table.entries')) }})</option>
                    <option value="100">100 ({{ ucfirst(trans('aiomlm.table.entries')) }})</option>
                  </select>
              </div>
            </div>

            @if (isset($selectStatus))
              <div class="col-sm-12 col-md-2">
                <div class="dataTables_length" id="example1_length">
                  <label><span class="text-info">{{ ucfirst(trans('aiomlm.user.status')) }}</span>
                    <select wire:model="status" name="example1_length" aria-controls="example1"
                    class="custom-select custom-select-sm form-control form-control-sm">
                    @foreach ($selectStatus as $key => $item)
                      <option value="{{ $item }}">{{ ucfirst($item) }}</option>
                    @endforeach
                    </select>
                </div>
              </div>
            @endif

            <div class="col-sm-12 col-md-4">
              <div id="example1_filter" class="dataTables_filter">
                <label>{{ ucfirst(trans('aiomlm.table.search')) }}
                  <input wire:model.debounce.500ms="search" type="search" class="form-control form-control-sm" placeholder="search"
                  aria-controls="example1">
                </label>
              </div>
          </div>
          @if (isset($headerButtons))
            @foreach ($headerButtons as $key => $button)
                @include('components.data-table-header-button')
            @endforeach
          @endif

      </div>
        <div class="row table-responsive p-0">
          <div class="col-sm-12">

            <table class="table table-hover table-bordered text-nowrap">
              <thead>
                <tr class="text-info">
                  @if (isset($checkbox))
                    @if ($checkbox)
                      <th>
                        {{-- <input type="checkbox" name="checkbox"> --}}
                        <button wire:loading.attr="disabled" wire:click.prevent="deleteSelected" type="button" name="button" class="btn btn-sm btn-danger">
                          {{ $deleteAll? ucfirst(trans('aiomlm.buttons.sure')): ucfirst(trans('aiomlm.buttons.delete-selected')) }}
                        </button>
                      </th>
                    @endif
                  @endif
                  @foreach ($rows as $key => $value)
                      <th>{{ ucfirst(trans('aiomlm.'.$prefix.'.'.$value)) }}</th>
                  @endforeach
                  @php
                  $showAction = false;
                  @endphp
                  @if (isset($actions))
                    @foreach ($actions as $key => $action)
                       @if (isset($action['can']))
                           @can ($action['can'])
                             @php
                               $showAction = true;
                             @endphp
                           @endcan
                       @elseif (empty($action['can']))
                         @php
                           $showAction = true;
                         @endphp
                       @endif
                    @endforeach
                    @if ($showAction)
                      <th>{{ ucfirst(trans('aiomlm.table.actions')) }}</th>
                    @endif
                  @endif
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $value)
                  <tr>
                    @if (isset($checkbox))
                      @if ($checkbox)
                          <td>
                            <input wire:model="selected.{{ $value->id }}" class="checkbox" type="checkbox" name="checkbox">
                          </td>
                      @endif
                    @endif
                    @foreach ($rows as $row)
                    @if (strpos($row, '.'))
                          @php
                            $collection = \Str::of($row)->explode('.');
                          @endphp
                          @if (count($collection) == 2)
                            <td>{{ $value[$collection[0]][$collection[1]] }}</td>
                          @elseif (count($collection) == 3)
                            <td>{{ $value[$collection[0]][$collection[1]][$collection[2]] }}</td>
                          @endif
                    @elseif (strpos($row, ','))
                          @php
                            $collection = \Str::of($row)->explode(',');
                            $count =0;
                            for ($i=0; $i < count($collection) ; $i++) {
                               $count = $count + $value[$collection[$i]];
                            }
                          @endphp
                      <td>{{ $count }}</td>
                    @elseif (trim($row==="amount" || $row==="price"))
                        <td>{{ setting('site.currency') }} {{ trim($value[$row]) }}</td>
                    @elseif (trim($row) ==="created_at" || trim($row) == "updated_at")
                      <td>{{ $value[$row]->diffForHumans() }}</td>
                    @elseif (trim($row) ==="status")
                       <td class="text-{{ $value[$row]=='pending'?'warning':($value[$row]=='completed'?'success':'info') }} }}">{{ $value[$row] }}</td>
                    @else
                        <td>{{ $value[$row] }}</td>
                    @endif

                    @endforeach

                    @if (isset($actions) && $showAction)
                      <td>
                        @foreach ($actions as $key => $button)
                           @include('components.data-table-button')
                        @endforeach
                     </td>
                    @endif

                  </tr>
                @endforeach
              </tbody>

            </table>
          </div>
          {{-- pagination --}}
          @if ($data->total() >0)
            {{ $data->links() }}

          @else
             <strong class="text-danger">{{ ucfirst(trans('aiomlm.table.no-data')) }}</strong>
          @endif
         </div>
      </div>
    </div>
    @if (isset($modal))
      @include('components.modal')
    @endif
</div>
