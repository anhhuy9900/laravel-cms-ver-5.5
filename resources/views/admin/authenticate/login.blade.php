<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login dashboard - Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('/admin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/font-awesome/4.2.0/css/font-awesome.min.css') }}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('/admin/fonts/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('/admin/css/ace.min.css') }}" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('/admin/css/ace-part2.min.css') }}" />
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('/admin/css/ace-rtl.min.css') }}" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('/admin/css/ace-ie.min.css') }}" />
    <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="{{ asset('/admin/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/admin/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body class="login-layout blur-login">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red">Admin</span>
                            <span class="white" id="id-text2">Login</span>
                        </h1>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        Please Enter Your Information
                                    </h4>

                                    <div class="space-6"></div>

                                    {!! Form::open(['route' => 'admin_post_login', 'id'=> 'admin-submit-login'])  !!}

                                    <fieldset>
                                        <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    {!! Form::text('username', null, ['class'  => 'form-control', 'data' => 'username', 'placeholder'=> 'Username']) !!}
                                                    <i class="ace-icon fa fa-user"></i>
                                                </span>
                                        </label>

                                        <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    {!! Form::password('password', ['class'  => 'form-control', 'data' => 'password', 'placeholder'=> 'Password']) !!}
                                                    <i class="ace-icon fa fa-lock"></i>
                                                </span>
                                        </label>

                                        <div class="space"></div>

                                        <div class="clearfix">
                                            <label class="inline">
                                                {!! Form::checkbox('remember', null, ['class'  => 'ace']) !!}

                                                <span class="lbl"> Remember Me</span>
                                            </label>

                                            <button type="button" id="submit-form-adlogin" class="width-35 pull-right btn btn-sm btn-primary">
                                                <i class="ace-icon fa fa-key"></i>
                                                <span class="bigger-110">Login</span>
                                            </button>
                                        </div>

                                        <div class="space-4"></div>

                                    </fieldset>

                                    {!! Form::close()  !!}

                                    <div class="space-6"></div>

                                </div><!-- /.widget-main -->

                                <div class="toolbar clearfix"></div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->

                    </div><!-- /.position-relative -->

                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->


<!-- start: Errors Messages-->
@include('admin.messages.errors')
<!-- end: Errors Messages -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{ asset('/admin/js/jquery.2.1.1.min.js') }}"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{ asset('/admin/js/jquery.1.11.1.min.js') }}"></script>
<![endif]-->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='{{ asset('/admin/js/jquery.min.js') }}'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='{{ asset('/admin/js/jquery1x.min.js') }}'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('/admin/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
</script>

<!-- bootstrap scripts -->
<script src="{{ asset('/admin/js/bootstrap.min.js') }}"></script>

<!-- file js common for admin pages -->
<script src="{{ asset('/admin/js/admin-main.js') }}"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $(document).on('click', '.toolbar a[data-target]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible');//hide others
            $(target).addClass('visible');//show target
        });

        $("#submit-form-adlogin").on('click',function(){
            $("#admin-submit-login").submit();
        });
    });



    //you don't need this, just used for changing background
    jQuery(function($) {
        $('#btn-login-dark').on('click', function(e) {
            $('body').attr('class', 'login-layout');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-light').on('click', function(e) {
            $('body').attr('class', 'login-layout light-login');
            $('#id-text2').attr('class', 'grey');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-blur').on('click', function(e) {
            $('body').attr('class', 'login-layout blur-login');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'light-blue');

            e.preventDefault();
        });

    });
</script>
</body>
</html>
