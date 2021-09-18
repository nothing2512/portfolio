<!DOCTYPE html>
<html>
@include("components.main.head")

<body>
@include("components.main.sidenav")
<div class="main-content" id="panel">
    @include("components.main.topnav")
    @include("components.main.header")
    <div class="container-fluid mt--6">
        @yield("content")
    </div>
</div>

@include("components.main.scripts")
@include("components.models")
@yield("script")
</body>
</html>
