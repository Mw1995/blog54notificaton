<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
    
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for blank page layout" name="description" />
        <meta content="" name="author" />
       <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
       <link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="assets/apps/css/inbox.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />

        <link href="assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>


        </head>
              




     <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">


       
    
        @include('layouts.partials._header')
    
       

        @yield('content')
        
     
        @include('layouts.partials._footer')
         
 <script  src="/StreamLab/StreamLab.js"></script>
       <script type="text/javascript">
        
              var message, ShowDiv=$('#showNotification'), count = $('#count'), c;
               var slh = new StreamLabHtml(); 
             var sls = new StreamLabSocket({
                       appId:"{{ config('stream_lab.app_id') }}",
                       channelName:"scrum",
                       event:"*",
                       
                            });       


            
                sls.socket.onmessage = function(res){
 
              slh.setData(res);
              if (slh.getSource()==='messages'){
                c=parseInt(count.html());
                count.html(c+1);
                message=slh.getMessage();
                var title=message['title'],description= message['description'],by=message['By'],timee=message['time'];
                ShowDiv.prepend('<li>  <a href="javascript:;">  <span class="time" >'+ timee +'</span> <span class="time" style="background-color: red">unread</span><span class="details"><span class="label label-sm label-icon label-warning">  <i class="fa fa-bell-o"></i> </span>' +  title +'</span></span> '+ description +'  <br>  <span  style="background-color: blue">'+ by + '</span></span></a> </li>');


              }
                              }
              $('.notinull').on('click',function(){

               count.html(0);
                $.get('MarkAllSeen' , function(){});



              });


                                               
                                                    
                                                   
                                                 
                                              






       </script>
    
    

     </body>



</html>
