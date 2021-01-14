<!–– Toast Start ––>
@if(session('toast'))

    <div aria-live="polite" aria-atomic="true" style="position: fixed;z-index: 100;right: 10px;top: 75px;min-width: 250px;" >
        <div class="toast animate__animated  animate__bounceInRight" data-delay="5000">
            <div class="toast-header">
                <strong class="mr-auto text-primary">Hi! {{ Auth::user()->name }}</strong>
                <small>Just Now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body bg-light">
                {!! session('toast') !!}
            </div>
        </div>

    </div>

@endif
<!–– Toast End ––>
