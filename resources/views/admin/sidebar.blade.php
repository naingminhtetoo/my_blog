<div class="sidebar-profile d-flex justify-content-center my-3 position-relative">
    <h5 class="mb-0 sidebar-close text-danger d-lg-none position-absolute rounded-circle shadow-lg d-flex justify-content-center align-items-center"><i class="fas fa-times"></i></h5>
    <h4 class="mb-0 font-weight-bolder text-primary" style="letter-spacing: 2px">{{ \App\Custom::$info['name'] }}</h4>
</div>
<div class="sidebar-menu">
    @component('component.menu-item')
        @slot("className") dashboard @endslot
        @slot("link") {{ route("dashboard") }} @endslot
        @slot("icon") <i class="fas fa-chart-bar mr-2"></i> @endslot
        @slot("name") <span class="m-0">Dashboard</span> @endslot
    @endcomponent
    @component('component.menu-item')
            @slot("className") userpanel @endslot
        @slot("link") {{ route("dashboard") }} @endslot
        @slot("icon") <i class="fas fa-chalkboard mr-2"></i> @endslot
        @slot("name") <span class="m-0">User Panel</span> @endslot
    @endcomponent
    @component('component.menu-item')
            @slot("className") category @endslot
        @slot("link") {{ route("category.index") }} @endslot
        @slot("icon") <i class="fas fa-stream mr-2"></i> @endslot
        @slot("name") <span class="m-0">Category</span> @endslot
        @slot("total") <span class="mr-2 text-dark totalNum">5</span> @endslot
    @endcomponent
    @component('component.menu-item')
            @slot("className") tag @endslot

        @slot("link") {{ route("dashboard") }} @endslot
        @slot("icon") <i class="fas fa-tags mr-2"></i> @endslot
        @slot("name") <span class="m-0">Tag</span> @endslot
        @slot("total") <span class="mr-2 text-dark totalNum">5</span> @endslot
    @endcomponent
    @component("component.menu-spacer") @endcomponent
    @component("component.menu-title")
        @slot("name") Post @endslot
    @endcomponent
    @component('component.menu-item')
            @slot("className") postAdd @endslot
        @slot("link") {{ route("dashboard") }} @endslot
        @slot("icon") <i class="fas fa-plus mr-2"></i> @endslot
        @slot("name") <span class="m-0">Add Post</span> @endslot
    @endcomponent
    @component('component.menu-item')
            @slot("className") post @endslot
        @slot("link") {{ route("dashboard") }} @endslot
        @slot("icon") <i class="fas fa-list-ul mr-2"></i> @endslot
        @slot("name") <span class="m-0">Post List</span> @endslot
        @slot("total") <span class="mr-2 text-dark totalNum">5</span> @endslot
    @endcomponent

</div>
