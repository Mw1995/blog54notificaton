@extends('layouts.master')

@section('content')
<div class="page-container">
<div class="page-sidebar-wrapper">
  <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start ">
                         
                            
                                <li class="nav-item start ">
                                    <a href="index.html" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Dashboard 1</span>
                                    </a>
                                </li>
                             
                        </li>

                    </ul>
                    <!-- END SIDEBAR MENU -->
   </div>
</div>

<div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
				
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Inbox
                                <small>user inbox</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                            <div class="btn-group btn-theme-panel">
                                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-settings"></i>
                                </a>
                                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <h3>HEADER</h3>
                                            <ul class="theme-colors">
                                                <li class="theme-color theme-color-default active" data-theme="default">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Dark Header</span>
                                                </li>
                                                <li class="theme-color theme-color-light " data-theme="light">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Light Header</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                            <h3>LAYOUT</h3>
                                            <ul class="theme-settings">
                                                <li> Layout
                                                    <select class="layout-option form-control input-small input-sm">
                                                        <option value="fluid" selected="selected">Fluid</option>
                                                        <option value="boxed">Boxed</option>
                                                    </select>
                                                </li>
                                                <li> Header
                                                    <select class="page-header-option form-control input-small input-sm">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </li>
                                                <li> Top Dropdowns
                                                    <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                        <option value="light">Light</option>
                                                        <option value="dark" selected="selected">Dark</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Mode
                                                    <select class="sidebar-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Menu
                                                    <select class="sidebar-menu-option form-control input-small input-sm">
                                                        <option value="accordion" selected="selected">Accordion</option>
                                                        <option value="hover">Hover</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Position
                                                    <select class="sidebar-pos-option form-control input-small input-sm">
                                                        <option value="left" selected="selected">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </li>
                                                <li> Footer
                                                    <select class="page-footer-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Apps</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="inbox">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="inbox-sidebar">
                                    <a href="javascript:;" id="login" data-title="Compose" class="btn red compose-btn btn-block">
                                        <i class="fa fa-edit"></i> Compose </a>
                                        <!--the start of compose modal-->
                                        
                                            <div id="loginModal" class="modal fade" role="dialog">
                                         <div class="modal-dialog">
                                          <div class="modal-content">
                                           <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                               <h4 class="modal-title">Notifications & messages </h4>
                                           </div>
                                           <div class="modal-body " >
                                            <form class="form-inline">
                                             
                                       
                                      <button type="button" id="Notification1" class=" btn btn-danger btn-lg">Notification
                                      </button>
                                          
                                        
                                        <button type="button" id="Message1" class=" btn btn-info btn-lg"
                                         >Message</button>
                                         
                                         
                                             </form>
                                            </div>
                                                  </div>
                                                </div>
                                               
                                        </div>
                                        
                                               <!--end of modal compose-->
                                               <!--notification modal-->
                                               <div id="notificationModal" class="modal fade" role="dialog">
                                         <div class="modal-dialog">
                                          <div class="modal-content">
                                           <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                               <h4 class="modal-title">Notifications & messages </h4>
                                           </div>
                                           <div class="modal-body " >
                                            <form class="form-inline" action="{{url('post')}}" method="post">
                                             {{ csrf_field() }}
                                       <div class="form-group">
                                      <input type="text" name="description" id="nottext" class=" btn-xs"
                                      placeholder="Type your notification">
                                      <input type="text" name="title" id="nottext" class=" btn-xs"
                                      placeholder="Type your title">
                                      </div>
                                      <hr>
                                          <select>
                                          <option value="" class="btn-lg">none</option>
                                        @foreach($users as $user)
                                              <option value="" class="btn-lg">{!! $user->name !!}</option>
                                        @endforeach
                                          </select>
                                        <div class="form-group">
                                        <input type="submit" id="send" value="Send" class=" btn btn-info btn-xs"/>
                                         
                                         </div>
                                        
                                         
                                         
                                             </form>
                                            </div>
                                                  </div>
                                                </div>
                                               </div>
                                               <!--end of notification modal-->
                                    <ul class="inbox-nav">
                                        <li class="active">
                                            <a href="javascript:;" data-type="inbox" data-title="Inbox"> Inbox
                                                <span class="badge badge-success">3</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-type="important" data-title="Inbox"> Important </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-type="sent" data-title="Sent"> Sent </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-type="draft" data-title="Draft"> Draft
                                                <span class="badge badge-danger">8</span>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:;" class="sbold uppercase" data-title="Trash"> Trash
                                                <span class="badge badge-info">23</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-type="inbox" data-title="Promotions"> Promotions
                                                <span class="badge badge-warning">2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-type="inbox" data-title="News"> News </a>
                                        </li>
                                    </ul>
                                    <ul class="inbox-contacts">
                                        <li class="divider margin-bottom-30"></li>
                                        <li>
                                            <a href="javascript:;">
                                                <img class="contact-pic" src="assets/pages/media/users/avatar4.jpg">
                                                <span class="contact-name">Adam Stone</span>
                                                <span class="contact-status bg-green"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img class="contact-pic" src="assets/pages/media/users/avatar2.jpg">
                                                <span class="contact-name">Lisa Wong</span>
                                                <span class="contact-status bg-red"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img class="contact-pic" src="assets/pages/media/users/avatar5.jpg">
                                                <span class="contact-name">Nick</span>
                                                <span class="contact-status bg-green"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img class="contact-pic" src="assets/pages/media/users/avatar6.jpg">
                                                <span class="contact-name">Anna Bold</span>
                                                <span class="contact-status bg-yellow"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img class="contact-pic" src="assets/pages/media/users/avatar7.jpg">
                                                <span class="contact-name">Richard Nilson</span>
                                                <span class="contact-status bg-green"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="inbox-body">
                                    <div class="inbox-header">
                                        <h1 class="pull-left">Inbox</h1>
                                        <form class="form-inline pull-right" action="index.html">
                                            <div class="input-group input-medium">
                                                <input type="text" class="form-control" placeholder="Password">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn green">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="inbox-content"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>

</div>


    

@stop