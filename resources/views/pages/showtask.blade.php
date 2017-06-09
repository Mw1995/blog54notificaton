@extends('layouts.master')



@section('content')




        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
          <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
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
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>My tasks
                                <small></small>
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
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN TODO SIDEBAR -->
                            <div class="todo-ui">
                                <div class="todo-sidebar">
                                  
                                    <div class="portlet light bordered">
                                        <div class="portlet-title">
                                            <div class="caption" data-toggle="collapse" data-target=".todo-project-list-content-tags">
                                                <span class="caption-subject font-red bold uppercase">TAGS </span>
                                                <span class="caption-helper visible-sm-inline-block visible-xs-inline-block">click to view</span>
                                            </div>
                                            <div class="actions">
                                                <div class="actions">
                                                  <a class="btn btn-circle grey-salsa btn-outline btn-sm" href="javascript:;" id="upload">
                                                        <i class="fa fa-upload"></i>Upload </a>
                                                <a class="btn btn-circle grey-salsa btn-outline btn-sm" href="javascript:;" id="delete">
                                                        <i class="fa fa-minus"></i>Delete </a>
                                                    <a class="btn btn-circle grey-salsa btn-outline btn-sm" href="javascript:;" id="log">
                                                        <i class="fa fa-plus"></i> Add </a>
                                                          
                                                </div>
                                            </div>
                                        </div>

                                        <div class="portlet-body todo-project-list-content todo-project-list-content-tags">
                                            <div class="todo-project-list">
                                                <ul class="nav nav-pills nav-stacked ">
                                                    <li class="nav-item">
                                                         
                                                         <a href="javascript:;" id="pend" class="nav-link nav-toggle">
                                                            <span class="badge badge-danger"> {!! $pendingtasknum !!} </span> Pending </a>
                                                            
                                                        
                                                           
                                                         <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th> ID # </th>
                                                            <th> Task Name </th>
                                                           
                                                            <th> created date </th>
                                                            <th> end date </th>
                                                            <th> status </th>
                                                          
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($task as $tasks)
                                                       @if($tasks->status=='pending')
                                                        <tr class="odd gradeX">
                                                           
                                                            <td>
                                                                {!! $tasks->id !!}
                                                            </td>
                                                            <td>
                                                                {!! $tasks->taskname !!}
                                                            </td>
                                                           
                                                            <td>
                                                               {!! $tasks->dt_created !!} 
                                                            </td>
                                                            <td class="center"> {!! $tasks->dt_planned_ended !!} </td>
                                                            <td> <button class="btn-sm btn-info AcceptButton" id="AcceptButton{{ $tasks->id }}">Accept
                                                            </button>
                                                            <button class="btn-sm btn-danger DeclineButton" id="DeclineButton{!! $tasks->id !!}">decline</button>
                                                            <button class="btn-sm btn-success hide AcceptedButton" id="AcceptedButton{!! $tasks->id !!}">Accepted</button>
                                                            <button class="btn-sm btn-danger hide DeclinedButton" id="DeclinedButton{!! $tasks->id !!}">Declined</button>
                                                             </td>
                                                            
                                                        </tr>
                                                        @endif
                                                        @endforeach
                                                     
                                                        </tbody>
                                                        </table>
                                                            
                                                    </li>
                                                    <li>
                                                  
                                                         <a href="javascript:;">
                                                            <span class="badge badge-info">{!! $completedtasknum !!}</span> Completed </a>
                                                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                              <thead>
                                                                <tr>
                                                            
                                                                  <th> ID # </th>
                                                                  <th> Task Name </th>
                                                           
                                                                  <th> created date </th>
                                                                  <th> end date </th>
                                                                 
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                @foreach($task as $tasks)
                                                                 @if($tasks->status=='completed')
                                                                  <tr class="odd gradeX">
                                                           
                                                            <td>
                                                                {!! $tasks->id !!}
                                                            </td>
                                                            <td>
                                                                {!! $tasks->taskname !!}
                                                            </td>
                                                           
                                                            <td>
                                                                 {!! $tasks->dt_created !!} 
                                                            </td>
                                                            <td class="center"> {!! $tasks->dt_planned_ended !!} </td>
                                                           
                                                            
                                                        </tr>
                                                                 @endif
                                                                @endforeach
                                                            </tbody>
                                                            </table>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="badge badge-success"> {!! $inprogresstasknum !!} </span> In Progress </a>
                                                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                              <thead>
                                                                <tr>
                                                            
                                                                  <th> ID # </th>
                                                                  <th> Task Name </th>
                                                           
                                                                  <th> created date </th>
                                                                  <th> end date </th>
                                                                 
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                @foreach($task as $tasks)
                                                                 @if($tasks->status=='in progress')
                                                                  <tr class="odd gradeX">
                                                           
                                                            <td>
                                                                {!! $tasks->id !!}
                                                            </td>
                                                            <td>
                                                                {!! $tasks->taskname !!}
                                                            </td>
                                                           
                                                            <td>
                                                                {!! $tasks->dt_created !!} 
                                                            </td>
                                                            <td class="center"> {!! $tasks->dt_planned_ended !!} </td>
                                                           
                                                            
                                                        </tr>
                                                                 @endif
                                                                @endforeach
                                                            </tbody>
                                                            </table>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="badge badge-warning"> {!! $failedtasknum !!} </span> failed</a>
                                                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                              <thead>
                                                                <tr>
                                                            
                                                                  <th> ID # </th>
                                                                  <th> Task Name </th>
                                                           
                                                                  <th> created date </th>
                                                                  <th> end date </th>
                                                                 
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                @foreach($task as $tasks)
                                                                 @if($tasks->status=='failed')
                                                                  <tr class="odd gradeX">
                                                           
                                                            <td>
                                                                {!! $tasks->id !!}
                                                            </td>
                                                            <td>
                                                                {!! $tasks->taskname !!}
                                                            </td>
                                                           
                                                            <td>
                                                                {!! $tasks->dt_created !!} 
                                                            </td>
                                                            <td class="center"> {!! $tasks->dt_planned_ended !!} </td>
                                                           
                                                            
                                                        </tr>
                                                                 @endif
                                                                @endforeach
                                                            </tbody>
                                                            </table>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="badge badge-info">{!! $deliveredtasknum !!} </span> Delivered </a>
                                                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                              <thead>
                                                                <tr>
                                                            
                                                                  <th> ID # </th>
                                                                  <th> Task Name </th>
                                                           
                                                                  <th> created date </th>
                                                                  <th> end date </th>
                                                                 
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                @foreach($task as $tasks)
                                                                 @if($tasks->status=='delivered')
                                                                  <tr class="odd gradeX">
                                                           
                                                            <td>
                                                                {!! $tasks->id !!}
                                                            </td>
                                                            <td>
                                                                {!! $tasks->taskname !!}
                                                            </td>
                                                           
                                                            <td>
                                                                {!! $tasks->dt_created !!} 
                                                            </td>
                                                            <td class="center"> {!! $tasks->dt_planned_ended !!} </td>
                                                           
                                                            
                                                        </tr>
                                                                 @endif
                                                                @endforeach
                                                            </tbody>
                                                            </table>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- END TODO SIDEBAR -->
                                <!-- BEGIN TODO CONTENT -->
                                <div class="todo-content">
                                    <div class="portlet light bordered">
                                        <!-- PROJECT HEAD -->
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-bar-chart font-green-sharp hide"></i>
                                                <span class="caption-helper">GlobalEx Tasks:</span> &nbsp;
                                                <span class="caption-subject font-green-sharp bold uppercase">Tune Website</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group">
                                                    <a class="btn green btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> MANAGE
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;"> New Task </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Pending
                                                                <span class="badge badge-danger"> 4 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Completed
                                                                <span class="badge badge-success"> 12 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Overdue
                                                                <span class="badge badge-warning"> 9 </span>
                                                            </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Delete Project </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end PROJECT HEAD -->
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-8 col-md-12">
                                                    <div class="todo-tasklist">
                                                        <div class="todo-tasklist-item todo-tasklist-item-border-green">
                                                            <img class="todo-userpic pull-left" src="../assets/pages/media/users/avatar4.jpg" width="27px" height="27px">
                                                            <div class="todo-tasklist-item-title"> Slider Redesign </div>
                                                            <div class="todo-tasklist-item-text"> Lorem dolor sit amet ipsum dolor sit consectetuer dolore. </div>
                                                            <div class="todo-tasklist-controls pull-left">
                                                                <span class="todo-tasklist-date">
                                                                    <i class="fa fa-calendar"></i> 21 Sep 2014 </span>
                                                                <span class="todo-tasklist-badge badge badge-roundless">Urgent</span>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                <div class="todo-tasklist-devider"> </div>
                                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TODO CONTENT -->
                            </div>
                        </div>
                        <!-- END PAGE CONTENT-->
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                <div class="page-quick-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                <span class="badge badge-danger">2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                <span class="badge badge-success">7</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-bell"></i> Alerts </a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-info"></i> Notifications </a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-speech"></i> Activities </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-settings"></i> Settings </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                            <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                <h3 class="list-heading">Staff</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">8</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Bob Nilson</h4>
                                            <div class="media-heading-sub"> Project Manager </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nick Larson</h4>
                                            <div class="media-heading-sub"> Art Director </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">3</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Hubert</h4>
                                            <div class="media-heading-sub"> CTO </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Wong</h4>
                                            <div class="media-heading-sub"> CEO </div>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="list-heading">Customers</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-warning">2</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lara Kunis</h4>
                                            <div class="media-heading-sub"> CEO, Loop Inc </div>
                                            <div class="media-heading-small"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="label label-sm label-success">new</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ernie Kyllonen</h4>
                                            <div class="media-heading-sub"> Project Manager,
                                                <br> SmartBizz PTL </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lisa Stone</h4>
                                            <div class="media-heading-sub"> CTO, Keort Inc </div>
                                            <div class="media-heading-small"> Last seen 13:10 PM </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">7</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Portalatin</h4>
                                            <div class="media-heading-sub"> CFO, H&D LTD </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Irina Savikova</h4>
                                            <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">4</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Maria Gomez</h4>
                                            <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                            <div class="media-heading-small"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="page-quick-sidebar-item">
                                <div class="page-quick-sidebar-chat-user">
                                    <div class="page-quick-sidebar-nav">
                                        <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                            <i class="icon-arrow-left"></i>Back</a>
                                    </div>
                                    <div class="page-quick-sidebar-chat-user-messages">
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> When could you send me the report ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> Its almost done. I will be sending it shortly </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> Alright. Thanks! :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:16</span>
                                                <span class="body"> You are most welcome. Sorry for the delay. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> No probs. Just take your time :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body"> Alright. I just emailed it to you. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> Great! Thanks. Will check it right away. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body"> Please let me know if you have any comment. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-quick-sidebar-chat-user-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type a message here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn green">
                                                    <i class="icon-paper-clip"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                            <div class="page-quick-sidebar-alerts-list">
                                <h3 class="list-heading">General</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 4 pending tasks.
                                                        <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> New order received with
                                                        <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Web server hardware needs to be upgraded.
                                                        <span class="label label-sm label-warning"> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="list-heading">System</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 4 pending tasks.
                                                        <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> New order received with
                                                        <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Web server hardware needs to be upgraded.
                                                        <span class="label label-sm label-default "> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                            <div class="page-quick-sidebar-settings-list">
                                <h3 class="list-heading">General Settings</h3>
                                <ul class="list-items borderless">
                                    <li> Enable Notifications
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Allow Tracking
                                        <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Log Errors
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Auto Sumbit Issues
                                        <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Enable SMS Alerts
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                </ul>
                                <h3 class="list-heading">System Settings</h3>
                                <ul class="list-items borderless">
                                    <li> Security Level
                                        <select class="form-control input-inline input-sm input-small">
                                            <option value="1">Normal</option>
                                            <option value="2" selected>Medium</option>
                                            <option value="e">High</option>
                                        </select>
                                    </li>
                                    <li> Failed Email Attempts
                                        <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                    <li> Secondary SMTP Port
                                        <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                    <li> Notify On System Error
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Notify On SMTP Error
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                </ul>
                                <div class="inner-content">
                                    <button class="btn btn-success">
                                        <i class="icon-settings"></i> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>


     <!--the start of add task modal-->
                                        
                            <div id="formModal" class="modal fade"  role="dialog">
                              <div class="modal-dialog" >
                                 <div class="modal-content"style="background-color: lightblue">
                                        <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                               <h4 class="modal-title">Add a task </h4>
                                         </div>
                                        <div class="modal-body" >
                                          <form action="task/store" method="post" class="form-inline">
                                             {{ csrf_field() }}
                                       
                                            <div class="form-group col-md-offset-2">
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control todo-taskbody-tasktitle" name="tasktitle" placeholder="Task Title..."  id="tasktitle" required> </div>
                                            </div>
                                                           
                                            <div class="form-group"> 
                                                
                                                   <select name="user_id"  class="form-control todo-taskbody-tags col-md-8" name="employees" required>
                                          <option value="none" class="btn-lg">select Employee</option>
                                        @foreach($users as $user)
                                              <option value="{!! $user->id !!}" id="user_id" class="btn-lg">{!! $user->name !!}</option>
                                        @endforeach
                                          </select>
                                                  
                                            </div>
                                          <div class="form-group col-md-offset-2 row">
                                                
                                                                        <input type="text" class="form-control todo-taskbody-due" placeholder="Date planned ended" onfocus="(this.type='date')" id="taskdate" name="taskdate" style="margin-top: 10px ; margin-left: 13px" required> 
                                           </div>

                                          
                                          </div><!--end modal body -->
                                          <div class="form-actions right todo-form-actions" style="margin-left: 500px; margin-bottom: 10px"> <input type="submit" class="btn btn-circle btn-sm red" id="submitform"></div>
                                         
                                            </form>
                                          </div>
                                    </div>
                               </div>
                                               
                           </div>
                                        
                                               <!--end of modal add task-->
            <!--the start of delete task modal-->
                                        
                            <div id="deleteModal" class="modal fade"  role="dialog">
                              <div class="modal-dialog" >
                                 <div class="modal-content"style="background-color: lightblue">
                                        <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                               <h4 class="modal-title">delete a task </h4>
                                         </div>
                                        <div class="modal-body" >
                                          <form action="task/delete" method="post" class="form-inline">
                                             {{ csrf_field() }}
                                       
                                            
                                            <div class="form-group"> 
                                                
                                                   <select name="task_id"  class="form-control todo-taskbody-tags col-md-8" name="employees" required>
                                          <option value="none" class="btn-lg">select task</option>
                                        @foreach($task as $tasks)
                                              <option value="{!! $tasks->id !!}" id="user_id" class="btn-lg">{!! $tasks->taskname !!}</option>
                                        @endforeach
                                          </select>
                                                  
                                            </div>

                                          
                                          </div><!--end modal body -->
                                          <div class="form-actions right todo-form-actions" style="margin-left: 500px; margin-bottom: 10px"> <input type="submit" class="btn btn-circle btn-sm red" value="delete" id="submitform"></div>
                                         
                                            </form>
                                          </div>
                                    </div>
                               </div>
                                               
                           </div>
                                        
                                               <!--end of modal delete task-->


                                               <!--the start of add file modal-->
                                        
                            <div id="uploadModal" class="modal fade"  role="dialog">
                              <div class="modal-dialog" >
                                 <div class="modal-content"style="background-color: lightblue">
                                        <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                               <h4 class="modal-title">Upload a file </h4>
                                         </div>
                                        <div class="modal-body" >
                                         {!! Form::open(array('url'=>'task/handleupload','files'=>true, 'class'=>'form-inline'))  !!}
                                            
                                       
                                            @if(count($errors))
                                            <ul>
                                            @foreach($errors->all() as $error)
                                               <li>{!! $error !!}</li>
                                            @endforeach
                                            </ul>
                                            
                                            @endif
                                            <div class="form-group"> 
                                            {!! Form::file('file'); !!}
                                            {!! Form::token(); !!}
                                                   <select name="task_id"  class="form-control todo-taskbody-tags col-md-8" name="employees" style="margin-top: 10px" required>
                                            
                                          <option value="none" class="btn-lg">select task</option>
                                        @foreach($task as $tasks)
                                          @if($tasks->status='in progress')
                                              <option value="{!! $tasks->id !!}" id="user_id" class="btn-lg">{!! $tasks->taskname !!}</option>
                                              @endif
                                        @endforeach
                                          </select>
                                                  
                                            </div>

                                          
                                          </div><!--end modal body -->
                                          <div class="form-actions right todo-form-actions" style="margin-left: 500px; margin-bottom: 10px"> <input type="submit" class="btn btn-circle btn-sm red" value="submit" id="submitform"></div>
                                         
                                             {!! Form::close() !!}
                                          </div>
                                    </div>
                               </div>
                                               
                           </div>
                                        
                                               <!--end of modal upload file-->
<script type="text/javascript">
 

</script>


@stop