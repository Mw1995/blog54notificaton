<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Dashboard 3</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo">
    
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
