@extends("admin.app")

@section("title") Profile @endsection
@section("content")
    <div class="p-3">
        <div class="row">
            <div class="col-12 col-md-4">
                @component("component.card")
                    @slot('icon') <i class="mr-1 fas fa-images text-primary"></i> @endslot
                    @slot('title') Change Photo @endslot
                    @slot('button')  @endslot
                    @slot('body')
                        <img src="{{ isset(Auth::user()->photo) ? asset('storage/profile/'.Auth::user()->photo) : asset('img/profile_default.png') }}" class="d-block w-50 mx-auto rounded-circle my-3" alt="">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="input-group">
                                        <input type="file" class="form-control-file" name="photo" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                        <button class="btn btn-primary mt-3" type="submit" id="inputGroupFileAddon04"><i class="fas fa-upload"></i> Change</button>
                                </div>
                            </div>

                            @error("photo")
                            <small class="font-weight-bold text-danger text-center">{{ $message }}</small>
                            @enderror
                        </form>
                    @endslot
                @endcomponent
            </div>

            <div class="col-12 col-md-4">
                @component("component.card")
                    @slot('icon') <i class="mr-1 fas fa-user text-primary"></i> @endslot
                    @slot('title') Change Info @endslot
                    @slot('button')  @endslot
                    @slot('body')
                        <form action="{{ route("profile.info.update") }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">
                                    <i class="mr-1 feather-user"></i>
                                    Your Name
                                </label>
                                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                                @error("name")
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    <i class="mr-1 feather-mail"></i>
                                    Your Email
                                </label>
                                <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}">
                                @error("email")
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center">

                                <button type="submit" class="btn btn-primary">
                                    <i class="mr-1 fas fa-user-edit"></i>
                                    Change Info
                                </button>
                            </div>
                        </form>
                    @endslot
                @endcomponent
            </div>

            <div class="col-12 col-md-4">
                @component("component.card")
                    @slot('icon') <i class="mr-1 fas fa-user-lock text-primary"></i> @endslot
                    @slot('title') Change Password @endslot
                    @slot('button')  @endslot
                    @slot('body')
                        <form action="{{ route("profile.password.update") }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">
                                    <i class="mr-1 feather-lock"></i>
                                    Current Password
                                </label>
                                <input type="password" name="current_password" class="form-control" placeholder="Current Password">
                                @error("current_password")
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="current">
                                    <i class="mr-1 feather-refresh-ccw"></i>
                                    Change Password
                                </label>
                                <input type="password" name="new_password" class="form-control" id="current" placeholder="New Password">
                                @error("new_password")
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    <i class="mr-1 feather-check"></i>
                                    Confirm Password
                                </label>
                                <input type="password" name="new_confirm_password" class="form-control" id="repeat" placeholder="Confirm Password">
                                @error("new_confirm_password")
                                <small class="font-weight-bold text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <button type="submit" class="btn btn-primary">
                                    <i class="mr-1 fas fa-user-edit"></i>
                                    Change Now
                                </button>
                            </div>
                        </form>
                    @endslot
                @endcomponent
            </div>

        </div>
    </div>
@endsection


