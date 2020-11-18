<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Monthly Recap Report</h5>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-wrench"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
              <a href="#" class="dropdown-item">Action</a>
              <a href="#" class="dropdown-item">Another action</a>
              <a href="#" class="dropdown-item">Something else here</a>
              <a class="dropdown-divider"></a>
              <a href="#" class="dropdown-item">Separated link</a>
            </div>
          </div>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <p class="text-center">
              <strong>Memebers status chart</strong>
            </p>
            <div id="orderReport" style="height: 180px;">
            </div>
            <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
            <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>

            <script type="text/javascript">
               const chart = new Chartisan({
                        el: "#orderReport",
                        url: "@chart('sample_chart')",
                        hooks: new ChartisanHooks()
                                  .legend()
                                  .colors()
                                  .tooltip(),
                  })
            </script>
          </div>
          <div class="col-md-4">
            <p class="text-center">
              <strong>Topup based</strong>
            </p>
            <div class="progress-group">
              Active members
              <span class="float-right"><b>{{ $data['active'] }}</b>/{{ $data['total_users'] }}</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-success" style="width: 80%">
                </div>
              </div>
            </div>
            <div class="progress-group">
              Pending users
              <span class="float-right"><b>{{ $data['pending'] }}</b>/{{ $data['total_users'] }}</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-info" style="width: 75%">
                </div>
              </div>
            </div>
            <div class="progress-group">
              <span class="progress-text">Temporary users</span>
              <span class="float-right"><b>{{ $data['temporary'] }}</b>/{{ $data['total_users'] }}</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-warning" style="width: 60%">
                </div>
              </div>
            </div>

            <div class="progress-group">
              Suspended users
              <span class="float-right"><b>{{ $data['active'] }}</b>/{{ $data['total_users'] }}</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-danger" style="width: 50%">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-3 col-6">
            <div class="description-block border-right">
              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> {{ $data['active'] / $data['total_users'] * 100 }} % </span>
              <h5 class="description-header"> {{ setting('site.curency') }} {{ $data['topup'] }} </h5>
              <span class="description-text">TOTAL TOPUPs</span>
            </div>
          </div>
          <div class="col-sm-3 col-6">
            <div class="description-block border-right">
              <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 100%</span>
              <h5 class="description-header">  {{ $data['topup'] }} </h5>
              <span class="description-text">TOTAL EARNINGS</span>
            </div>
          </div>
          <div class="col-sm-3 col-6">
            <div class="description-block border-right">
              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> {{ $data['members_earning'] / $data['topup'] }} %</span>
              <h5 class="description-header">{{ $data['members_earning'] }}</h5>
              <span class="description-text">MEMBERS EARNINGS</span>
            </div>
          </div>
          <div class="col-sm-3 col-6">
            <div class="description-block">
              <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 100%</span>
              <h5 class="description-header">{{ $data['orders'] }}</h5>
              <span class="description-text">PRODUCT SOLDS</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
