<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist-custom.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon.png') }}">

    <script src="https://cdn.tiny.cloud/1/dfr9jgkjbxykipuzj6tf6subql8p650vlmxxt3j5mbe1czuj/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
</head>

<body class="wysihtml5-supported">
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        @include('admin.includes.navbar')
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        @include('admin.includes.sidebar')
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="club-form-wrapper">
                        <div class="club-form-container">
                            <h2>Add Club</h2>
                            @if (session()->get('addClubStatus') === 1)
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close"><span aria-hidden="true">??</span></button>
                                    <i class="fa fa-check-circle"></i> Club added succesfully
                                </div>
                            @endif
                            @if (session()->get('addClubStatus') === 0)
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close"><span aria-hidden="true">??</span></button>
                                    <i class="fa fa-times-circle"></i> Something went wrong
                                </div>
                            @endif
                            <form class="image-upload" method="post" action="{{ route('club.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label>Logo</label>
                                    <input type="file" name="logo" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label>Manager</label>
                                    <input type="text" name="manager" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label>Coach</label>
                                    <input type="text" name="coach" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="textarea"
                                        style="width: 100%; height: 250px"></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="clubs-container">
                            <h2>Clubs</h2>
                            <div class="clubs-scroll-container">
                                @foreach ($clubs as $club)
                                    <div class="club-list">
                                        <div class="title-and-image">

                                            @if($club->logo)
                                                <div class="image"
                                                    style="background:url({{ asset('app_images/' . $club->logo) }})">
                                                </div>
                                            @else
                                                <div class="image"
                                                    style="background:url({{ asset('app_images/club-placeholder.png') }})">
                                                </div>
                                            @endif
                                            <div class="title">
                                                <h5>{{ \Illuminate\Support\Str::limit($club->name, 20, $end='...') }}</h5>
                                                <p>{!! \Illuminate\Support\Str::limit($club->description, 45, $end='...') !!}</p>
                                            </div>
                                        </div>
                                        <form action="{{ url('/admin/club/edit/' . $club->id) }}" method="get">
                                            <input class="btn btn-warning" type="submit" value="Edit" />
                                            @method('get')
                                            @csrf
                                        </form>&nbsp;&nbsp;
                                        <form action="{{ url('/admin/club/' . $club->id) }}" method="POST">
                                            <input onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit" value="Delete" />
                                            @method('delete')
                                            @csrf
                                        </form>&nbsp;&nbsp;
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; 2022 <a href="https://www.themeineed.com" target="_blank">Theme I
                        Need</a>. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('scripts/klorofil-common.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
</body>

</html>
