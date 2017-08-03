<!DOCTYPE html>
<!--
  This is a starter template page. Use this page to start your new project from
  scratch. This page gets rid of all links and provides the needed markup only.
  -->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Herbarium Management</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/AdminLTE/plugins/datepicker/datepicker3.css")}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
      page. However, you can choose any other skin. Make sure you
      apply the skin class to the body tag so the changes take effect.
      -->
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app-template.css') }}" rel="stylesheet">
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/summernote/summernote.css")}}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    <!-- Main Header -->
    @include('layouts.header')
    <!-- Sidebar -->
    @include('layouts.sidebar')
    @yield('content')
    <!-- /.content-wrapper -->
    <!-- Footer -->
    @include('layouts.footer')
    <!-- ./wrapper -->
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <script  src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}" type="text/javascript" ></script>
    <script  src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js") }}" type="text/javascript" ></script>
    <script  src="{{ asset ("/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}" type="text/javascript" ></script>
    <script  src="{{ asset ("/bower_components/AdminLTE/plugins/fastclick/fastclick.js") }}" type="text/javascript" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script  src="{{ asset ("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.js") }}" type="text/javascript" ></script>
    <script  src="{{ asset ("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js") }}" type="text/javascript" ></script>
    <script  src="{{ asset ("/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js") }}" type="text/javascript" ></script>
    <script  src="{{ asset ("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js") }}" type="text/javascript" ></script>
    <script  src="{{ asset ("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}" type="text/javascript" ></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/dist/js/demo.js") }}" type="text/javascript"></script>

    <script src="{{ asset("/bower_components/AdminLTE/dist/css/summernote/summernote.min.js")}}" type="text/javascript" />
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}} " type="text/javascript" ></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
      <script>
          $(document).ready(function() {
            //Date picker
            $('#birthDate').datepicker({
              autoclose: true,
              format: 'yyyy/mm/dd'
            });
            $('#hiredDate').datepicker({
              autoclose: true,
              format: 'yyyy/mm/dd'
            });
            $('#from').datepicker({
              autoclose: true,
              format: 'yyyy/mm/dd'
            });
            $('#to').datepicker({
              autoclose: true,
              format: 'yyyy/mm/dd'
            });
          });
      </script>
      
      <!--JS Active SlideBar-->
       <script type='text/javascript'>
        $(document).ready(function() {
            $(".nav a").on("click", function(){
              $(".nav").find(".active").removeClass("active");
              $(this).parent().addClass("active");
            });
        });
      </script>

      <!--untuk editor text-->
    <script type="text/javascript" src="{{ asset('/js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
            tinymce.init({
                selector : "textarea",
                plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
                toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
    </script>

    <!--Add field-->
    <script>
        $(document).ready(function() {
            var max_fields      = 5; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $("#rm").remove(); 
                    if(x%2==0){
                        $(wrapper).append('<div class="col-md-6"><div class="col-md-6"><input type="file" name="gambar" id="inputgambar" clas="validate"/><input type="hidden" value="{{ csrf_token() }}" name="_token"><img src="http://placehold.it/200x200" id="showgambar" style="max-width: 200px;max-height:200px;float:left;"/><a href="#" id="rm" class="remove_field">Remove</a></div></div>'); //add input box
                       // $(wrapper).append('<div class="col-md-2 col-md-offset-2">')
                    }else{
                        $(wrapper).append('<div class="col-md-6"><div class="col-md-6"><input type="file" name="gambar" id="inputgambar" clas="validate"/><input type="hidden" value="{{ csrf_token() }}" name="_token"><img src="http://placehold.it/200x200" id="showgambar" style="max-width: 200px;max-height:200px;float:left;"/><a href="#" id="rm" class="remove_field">Remove</a></div></div>'); //add input box
                    }
                }
            });

            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $("#divs").remove(); x--;
                $("#divs").remove(); x--;
                $("#divs").remove(); x--;
                $("#divs").remove(); x--;

                })
        });
    </script>

  </body>
</html>
