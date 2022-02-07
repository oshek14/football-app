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
                    <div class="player-form-wrapper">
                        <div class="player-form-container">
                            <h2>Edit player</h2>
                            @if (session()->get('updatePlayerStatus') === 1)
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <i class="fa fa-check-circle"></i> Player updated succesfully
                                </div>
                            @endif
                            @if (session()->get('updatePlayerStatus') === 0)
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <i class="fa fa-times-circle"></i> Something went wrong
                                </div>
                            @endif
                            <form class="image-upload" method="POST" action="{{ route('player.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" required value="{{$player->name}}" />
                                </div>
                                <label>Club</label>
                                <select class="form-control" name="club_id" id="club_id">
                                    @foreach ($clubs as $club)
                                    @if($club->id == $player->club_id)
                                        <option selected value="{{$club->id}}">{{$club->name}}</option>
                                    @else
                                        <option value="{{$club->id}}">{{$club->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <br>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" required value="{{$player->image}}" />
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <textarea name="designation" class="textarea"
                                        style="width: 100%; height: 250px">{{$player->designation}}</textarea>
                                </div>
                                <input type="hidden" name="id" class="form-control" value="{{$player->id}}" />
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                                </div>
                            </form>
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
