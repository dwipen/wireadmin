<div class="row">

  @foreach ($boxes as $key => $box)
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-{{ $box['class'] }} elevation-1">
          @if (isset($box['icon']))
            <i class="{{ $box['icon'] }}"></i>
          @endif
        </span>

        <div class="info-box-content">
          <span class="info-box-text">{{ ucfirst(trans('aiomlm.'.$prefix.'.'.$key)) }}</span>
          <span class="info-box-number">
            {{ $data[$key] }}
            @if (isset($box['small']))
              <small>
                @if ($box['small']==='currency')
                  {{ setting('site.currency') }}
                @endif
              </small>
            @endif
          </span>
        </div>
      </div>
    </div>
  @endforeach

</div>
