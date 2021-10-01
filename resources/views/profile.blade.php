<?php $tab = TAB_PROFILE ?>

<!DOCTYPE html>
<html lang="en">
@include("components.main.head")

<body>
@include("components.main.sidenav")
<div class="main-content" id="panel">

    {{--  Top Nav  --}}
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-start ml-0">
                    <div class="h2 text-white d-inline-block mb-0">Welcome! {{ $user->name ?: "Admin" }}</div>
                </ul>
                <ul class="navbar-nav align-items-center ml-auto ml-md-auto">
                    <li class="nav-item">
                        <a class="nav-link pr-0" href="{{ route("logout") }}" role="button">
                            <button class="btn btn-danger btn-md media align-items-center">
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">Logout</span>
                                </div>
                                <i class="fas fa-sign-out-alt text-secondary" style="top: 0 !important;"></i>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    {{--  Header  --}}
    <div class="header pb-6 d-flex align-items-center profile-background" style="overflow: hidden">
        <span class="mask bg-primary opacity-3"></span>
        <div class="container-fluid" style="height: 500px">
            <div class="row h-100">
                <div class="col-md-6 align-self-center">
                    <h1 class="display-2 text-gray-dark">Hello {{ $user->name ?: "Admin" }}</h1>
                    <p class="text-gray-dark mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
                    <button class="btn btn-neutral text-gray-dark" id="btUpdateCover">Update cover photo</button>
                </div>
                <div class="col text-right h-100 align-self-end mt-lg-5 pt-lg-5">
                    <img style="height: 500px" src="{{ $user->cover ?: portfolio("img/custom/photo-no-bg.png") }}" alt="cover">
                </div>
            </div>
        </div>
    </div>

    {{--  Content  --}}
    <div class="container-fluid mt--6">
        <div class="row">

            {{-- Edit Social Media --}}
            <div class="col-xl-4 order-xl-2">
                <div class="card card-profile">
                    <img src="{{ admin("img/theme/img-1-1000x600.jpg") }}" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ $user->photo ?: admin("img/theme/team-4.jpg") }}" class="rounded-circle" alt="photo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">{{ $counter->project ?: 10 }}</span>
                                        <span class="description">Projects</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{ $counter->specializations ?: 10 }}</span>
                                        <span class="description">Specializations</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{ $counter->skills ?: 10 }}</span>
                                        <span class="description">Skills</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5 class="h3">
                                {{ $user->name ?: "Robet Atiq Maulana Rifqi" }}
                            </h5>
                            <div>
                                {{ $user->job ?: "DevOps developer" }}
                            </div>
                        </div>
                        <div class="form-group pt-3">
                            <button id="btUpdatePhoto" class="btn btn-success w-100">Update Photo</button>
                        </div>
                    </div>
                </div>
                <!-- Progress track -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <!-- Title -->
                        <h5 class="h3 mb-0">Social Media</h5>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- List group -->
                        <ul class="list-group list-group-flush list my--3">
                            <li class="list-group-item px-0">

                                <div class="form-group">
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fab fa-facebook" style="font-size: unset"></i>
                                            </span>
                                        </div>
                                        <label for="facebook"></label>
                                        <input id="facebook" class="form-control pl-2" placeholder="Facebook" type="text" value="{{ $social->facebook ?:"" }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fab fa-github" style="font-size: unset"></i>
                                            </span>
                                        </div>
                                        <label for="github"></label>
                                        <input id="github" class="form-control pl-2" placeholder="Github" type="text"  value="{{ $social->github ?:"" }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fab fa-instagram" style="font-size: unset"></i>
                                            </span>
                                        </div>
                                        <label for="instagram"></label>
                                        <input id="instagram" class="form-control pl-2" placeholder="Instagram" type="text" value="{{ $social->instagram ?:"" }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fab fa-linkedin" style="font-size: unset"></i>
                                            </span>
                                        </div>
                                        <label for="linkedin"></label>
                                        <input id="linkedin" class="form-control pl-2" placeholder="Linkedin" type="text"  value="{{ $social->linkedin ?:"" }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button id="btEditSocial" class="form-control btn btn-success">Edit Social Media</button>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Edit Profile --}}
            <div class="col-xl-8 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Edit profile </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="username">Username</label>
                                        <input type="text" id="username" class="form-control" placeholder="Username" value="{{ $user->username ?: "" }}" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Password</label>
                                        <input type="password" id="password" class="form-control" placeholder="***" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="name">Name</label>
                                        <input type="text" id="name" class="form-control" placeholder="Name" value="{{ $user->name ?: "" }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="job">Job</label>
                                        <input type="text" id="job" class="form-control" placeholder="Job" value="{{ $user->job ?: "" }}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="experience">Experience</label>
                                        <input type="number" id="experience" class="form-control" placeholder="Experience" value="{{ $user->experience ?: "" }}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="bio">Bio</label>
                                        <textarea type="text" id="bio" class="form-control" rows="9">{{ $user->bio ?: "" }}</textarea>
                                    </div>
                                </div>

                                <div class="col-12 text-right">
                                    <a href="{{ $user->cv ?: "#" }}" class="btn btn-primary">Download CV</a>
                                    <button id="btUploadCv" class="btn btn-success">Upload CV</button>
                                    <button id="btUpdateProfile" class="btn btn-success">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-none">
    <form method="post" enctype="multipart/form-data" action="{{ route("profile.update") }}">
        @csrf
        <input id="inputPhoto" name="photo" aria-labelledby="photo" type="file" accept="image/*">
        <input id="inputCover" name="cover" aria-labelledby="cover" type="file" accept="image/*">
    </form>
</div>

@include("components.main.scripts")
@include("components.models")

<script type="application/javascript">
    $("#btUpdateProfile").on('click', function(e) {
        e.preventDefault();

        const username = $("#username");
        const password = $("#password");
        const name = $("#name");
        const job = $("#job");
        const experience = $("#experience");
        const bio = $("#bio");

        const payload = {
            username: username.val(),
            password: password.val(),
            name: name.val(),
            job: job.val(),
            experience: experience.val(),
            bio: bio.html()
        };

        services.profile.edit(payload,
            (_) => success("Success Edit Profile"),
            () => danger(`Failed edit profile`));
    })

    $("#btEditSocial").on('click', function(e) {
        e.preventDefault();

        const payload = {
            facebook: $("#facebook").val(),
            github: $("#github").val(),
            instagram: $("#instagram").val(),
            linkedin: $("#linkedin").val(),
        };

        services.profile.edit(payload,
            (_) => success("Success Edit Profile"),
            () => danger(`Failed edit profile`));
    })

    $("#btUpdatePhoto").on('click', function (e) {
        e.preventDefault();
        $("#inputPhoto").click();
    })

    $("#btUpdateCover").on('click', function (e) {
        e.preventDefault();
        $("#inputCover").click();
    })

    $("#inputPhoto").on('change', function (_) {
        $(this).parent().get(0).submit()
    })

    $("#inputCover").on('change', function (_) {
        $(this).parent().get(0).submit()
    })
</script>

</body>
</html>

