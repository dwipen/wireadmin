<div class="loginform-wrapper p-l-55 p-r-55 p-t-30 p-b-30">
  <div class="row justify-content-center m-b-10">
      <img class="logoRound" style="width: 152px;"
       src="{{ asset(setting('site.logo')) }}"
      alt="{{ setting('site.name') }}">
  </div>
  <form class="loginform validate-form" wire:submit.prevent>
    <span class="loginform-title p-b-27 p-t-10">
      {{ ucfirst(trans('auth.login.title')) }}
    </span>
    <div class="m-b-20">
      <input wire:model="userid" class="text-center form-input @error('userid') is-invalid @enderror" type="number" name="userid"
        placeholder="{{ ucfirst(trans('auth.enter_userid')) }}">
        @error ('userid')
          <span class="invalid-feedback" role="alert">
            <strong class="row justify-content-center">{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="m-b-20">
        <input wire:model="password" class="form-input text-center @error('password') is-invalid @enderror" type="password" name="password"
          placeholder="{{ ucfirst(trans('auth.enter_password')) }}">
          @error ('password')
            <span class="invalid-feedback" role="alert">
              <strong class="row justify-content-center">{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="flex-c p-b-10">
          <span class="txt1">
            {{ ucfirst(trans('auth.forgot-password')) }}
          </span>
          <a href="{{ route('password.forgot') }}" class="txt2 hov1">{{ ucfirst(trans('auth.buttons.reset-password')) }}</a>
        </div>

        <div class="loginform-container-form-btn">
          <button id="loginNow" wire:loading.attr="disabled" wire:click.prevent="login" type="button" class="loginform-btn" name="button">
            <span wire:loading.remove wire:target="login">
              {{ ucfirst(trans('aiomlm.buttons.login')) }}
            </span>
            <span wire:loading wire:target="login">
              {{ ucfirst(trans('aiomlm.buttons.wait')) }}
            </span>
          </button>
        </div>

        <div class="text-center p-t-57 p-b-20">
          @if (setting('software.demo'))
            <div class="col-md-12">
              <strong class="text-danger">Admin userid: 1000</strong>
              <br />
              <strong class="text-danger">Admin password: admin</strong>
            </div>
            <hr>
            <div class="col-md-12">
              <strong class="text-danger">Master userid: 1001</strong>
              <br />
              <strong class="text-danger">Master password master</strong>
            </div>
          @endif
        </div>
        <div class="text-center">
          <span class="txt1">
            {{ ucfirst(trans('auth.dont_have_account')) }}
          </span>
          <a href="{{ route('register') }}" class="txt2 hov1">{{ ucfirst(trans('auth.buttons.signup')) }}</a>
        </div>
      </form>
    </div>
