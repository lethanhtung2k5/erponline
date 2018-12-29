<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="{{ asset('admin/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('admin/assets/plugins/bootstrapv3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/bootstrapv3/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="{{ asset('admin/webarch/css/webarch.css') }}" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class="error-body no-top lazy" data-original="{{ asset('admin/assets/img/work.jpg') }}" style="background-image: url('{{ asset('admin/assets/img/work.jpg') }}')">
    <div class="container">
      <div class="row login-container animated fadeInUp">
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
          <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">
            <h2 class="normal">
              Đăng nhập
            </h2>

            @if (count($errors) > 0)
              <ul>
                  @foreach($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                  @endforeach
              </ul>
            @endif

            @if (session('status'))
              <ul>
                <li class="text-danger">{{ session('status') }}</li>
              </ul>
            @endif
          </div>

          <div class="tiles grey p-t-20 p-b-20 no-margin text-black tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab_login">
              <form class="animated fadeIn validate" action="{{ route('getLogin') }}" method="post">
                {{ csrf_field() }}
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-6 col-sm-6">
                    <label class="form-label">Email</label>
                    <input class="form-control" id="login_username" name="txtEmail" type="email" />
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <label class="form-label">Mật khẩu</label>
                    <input class="form-control" id="login_pass" name="txtPassword" type="password" />
                  </div>
                </div>

                <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="control-group col-md-8">
                    <!--div class="checkbox checkbox check-success">
                      <input id="checkbox1" type="checkbox" value="1">
                      <label for="checkbox1">Nhớ tài khoản</label>
                    </div-->
                  </div>

                  <div class="control-group col-md-4">
                    <button class="btn btn-primary pull-right" type="submit">Đăng nhập</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END CONTAINER -->
    <script src="{{ asset('admin/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery-1.11.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrapv3/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-block-ui/jqueryblockui.min.js') }}" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
  </body>
</html>