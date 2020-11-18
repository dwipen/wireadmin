<div class="container">
   @if ($info)
      <div class="card">
        <div class="card-header">
          System updater
        </div>
        <div class="card-body">
           <div class="col-md-12">
                 <strong class="text-success">Latest Version : {{ $info['version'] }} (<span class="text-secondary">current Version : {{ setting('system.version', 0) }}</span>) </strong>

                 <p class="text-info">{!! $info['description']  !!}</p>
           </div>
        </div>
        <div class="card-footer">
           <button id="showLoading" wire:click.prevent="update" type="button" class="btn btn-success" name="button">Update</button>
        </div>
      </div>
   @else
     <div class="text-success">
       <strong>No new updates detected</strong>
     </div>
   @endif
</div>
