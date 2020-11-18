<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Latest Members</h3>
      <div class="card-tools">
        <span class="badge badge-danger">{{ count($latest_members) }} New Members</span>
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body p-0">
      <ul class="users-list clearfix">
        @foreach ($latest_members as $key => $member)
          <li>
            <img src="{{ asset('/storage/uploads/profiles/user.png') }}">
            <a class="users-list-name" href="{{ route('profile', ['id'=>$member->id]) }}">{{ $member->name }}</a>
            <span class="users-list-date">{{ $member->created_at->diffForHumans() }}</span>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="card-footer text-center">
      <a href="{{ route('members', ['status'=>'active']) }}">View All Users</a>
    </div>
  </div>
</div>
