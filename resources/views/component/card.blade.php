<div class="card card-mb shadow">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3 ">
            <p class="mb-0 text-uppercase">
                {{ $icon }}
                {{ $title }}
            </p>
            <div class="">
                {{ $button }}
                @if(isset($btnMaxMin))
                    @if($btnMaxMin == "yes")
                <button class="btn btn-outline-secondary btn-sm btn-maximize" title="Maximize">
                    <i class="fas fa-expand-alt fa-fw"></i>
                </button>
                        @endif
                @endif
            </div>
        </div>
        <hr>
        {{ $body }}
    </div>
</div>



