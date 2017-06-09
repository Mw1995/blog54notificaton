 <!-- BEGIN FOOTER -->
 <footer>
        <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>



</footer>

       <!-- END FOOTER -->
        
       
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
       <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!--calendar -->
         <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
         <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
          <script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
          <script src="../assets/apps/scripts/calendar.min.js" type="text/javascript"></script>
         <!--calendar -->
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
        
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/apps/scripts/inbox.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->

        <script src="assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!--my own scripts-->
        <script type="text/javascript">
         $("#login").click(function() {
            $("#loginModal").modal('show');
        });
         $("#Notification1").click(function() {
            $("#notificationModal").modal('show');
            $("#loginModal").modal('hide');
        });
         $('#log').click(function(){

            
        $('#formModal').modal('show');

         });
         $('#delete').click(function(){

            
        $('#deleteModal').modal('show');

         });
         $('#upload').click(function(){

            
        $('#uploadModal').modal('show');

         });
         $('#deletesprint').click(function(){

            
        $('#deletesprintModal').modal('show');

         });
          $('#addsprint').click(function(){

            
        $('#addsprintModal').modal('show');

         });

      /* $('#submitform').click(function(){
          var date=new Date($('#taskdate').val());
          var name1=$('#tasktitle').val();
          var username1=$('#username1').val();
          //console.log(date);
          //var date1=date.getDate();
           alert(date);
           alert(name1+username1);
           $.ajax({
            method: 'POST',
            
            url:"{{ URL::to('task/store') }}",
             data: {
                "_token": "{{ csrf_token() }}",
            'user_id': username1,
            'taskname':name1,
            'date':date,
         },
                });
        });*/
         $('.AcceptButton').click(function(event){
          var class1=event.target.id;
         alert(class1);
          var classreal=class1.substring(12,class1.length);
          alert(classreal);
          $('#DeclineButton'+classreal).hide();
          $('#AcceptButton'+classreal).hide();
          $('#AcceptedButton'+classreal).removeClass('btn-sm btn-success hide').addClass('btn-sm btn-success');
          $.ajax({
            method: 'POST',
            
            url:"{{ URL::to('AcceptedTask') }}",
             data: {
                "_token": "{{ csrf_token() }}",
            'task_id': classreal,
         },
                });
         });
         $('.DeclineButton').click(function(){
            var class1=event.target.id;
          //alert(class1);
          var classreal=class1.substring(13,class1.length);
          //alert(classreal);
          $('#DeclineButton'+classreal).hide();
          $('#AcceptButton'+classreal).hide();
          $('#DeclinedButton'+classreal).removeClass('btn-sm btn-danger hide').addClass('btn-sm btn-danger');
            $.ajax({
            method: 'POST',
            
            url:"{{ URL::to('DeclinedTask') }}",
             data: {
                "_token": "{{ csrf_token() }}",
            'task_id': classreal,
         },
                });

         });
        </script>

