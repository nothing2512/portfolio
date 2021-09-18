<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">{{ $pageTitle ?? "Dashboard" }}</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    {{--                    <a href="#" class="btn btn-sm btn-neutral">New</a>--}}
                    {{--                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>--}}
                    @yield("header_content")
                </div>
            </div>
            @yield("header")
        </div>
    </div>
</div>
