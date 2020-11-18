<div class="col-md-6 loginform-wrapper p-l-55 p-r-55 p-t-20 p-b-30">
  <div class="row justify-content-center m-b-10">
    <img class="logoRound" style="width: 152px;"
    src="{{ asset(setting('site.logo')) }}"
    alt="{{ setting('site.name') }}">
  </div>
  <div class="loginform m-t-5">
    <marquee class="text-danger">{{ ucfirst(trans('aiomlm.register.completed')) }}</marquee>
    <div class="row">
      <div class="m-b-20 col-md-6">
        <input readonly value="UserId : {{ $user->id }}" class="form-input text-center">
      </div>

      <div class="m-b-20 col-md-6">
        <input readonly value="Password : {{ $password }}" class="form-input text-center">
      </div>

      <div class="m-b-20 col-md-6">
        <input readonly value="Sponsor : {{ $user->sponsor }}" class="form-input text-center">
      </div>
      <div class="m-b-20 col-md-6">
        <input readonly value="Position : {{ $user->position }}" class="form-input text-center">
      </div>

      <div class="text-center p-t-57 p-b-20">
      </div>
      <div class="p-l-10 text-center">
        <span class="txt1">
          Register another User?
        </span>
        <a href="{{ route('register') }}" class="txt2 hov1">
          {{ ucfirst(trans('auth.buttons.signup')) }}
        </a>
      </div>

      <div class="p-l-30 text-center">
        <span class="txt1">
          Go to Login
        </span>
        <a href="{{ route('login') }}" class="txt2 hov1">
          {{ ucfirst(trans('auth.buttons.signin')) }}
        </a>
      </div>


  </div>
</div>
