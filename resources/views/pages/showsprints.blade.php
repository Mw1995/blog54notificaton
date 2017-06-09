@extends('layouts.master')



@section('content')
        
        <!-- BEGIN CONTAINER -->
       
            <!-- BEGIN SIDEBAR -->
           <div class="portlet light portlet-fit bordered" style="margin-top: 55px">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-microphone font-green"></i>
                                <span class="caption-subject bold font-green uppercase"> Timeline 2</span>
                                <span class="caption-helper">Alternating Vertical Timeline</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                    <button class="btn  red btn-outline btn-circle btn-sm" name="options" class="toggle" id="deletesprint"> Delete Sprint </button>
                                   
                                        <button class="btn  red btn-outline btn-circle btn-sm" name="options" class="toggle" id="addsprint"> Add Sprint</button>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-timeline-2">
                                <div class="mt-timeline-line border-grey-steel"></div>
                                <ul class="mt-container">
                                @foreach($sprints as $sprint)
                                    <li class="mt-item">
                                    @if(empty($sprint->dt_ended) && $sprint->dt_estimated > $nowdate)
                                        <div class="mt-timeline-icon bg-blue bg-font-red border-grey-steel">
                                            <i class="icon-calendar"></i>
                                        </div>
                                        @elseif(empty($sprint->dt_ended) && $sprint->dt_estimated < $nowdate || ($sprint->dt_ended > $sprint->dt_estimated))
                                        <div class="mt-timeline-icon bg-red bg-font-red border-grey-steel">
                                            <i class="glyphicon glyphicon-alert"></i>
                                        </div>
                                        @else
                                        <div class="mt-timeline-icon bg-green bg-font-red border-grey-steel">
                                            <i class="glyphicon glyphicon-check"></i>
                                        </div>
                                        @endif
                                        <div class="mt-timeline-content">
                                            <div class="mt-content-container">
                                                <div class="mt-title">
                                                    <h3 class="mt-content-title">{!! $sprint->sprint_title !!}</h3>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Created at</a>
                                                    </div>
                                                    <div class="mt-author-notes font-grey-mint">{!! $sprint->created_at !!}</div>
                                                </div>
                                                <div class="mt-content border-grey-salt">
                                                    <p>{!! $sprint->description !!}</p>
                                                    <a href="javascript:;" class="btn btn-circle red">Show tasks</a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only blue">
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
       


       <!--the start of add sprint modal-->
                                        
                            <div id="addsprintModal" class="modal fade"  role="dialog">
                              <div class="modal-dialog" >
                                 <div class="modal-content"style="background-color: lightblue">
                                        <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                               <h4 class="modal-title">Add a sprint </h4>
                                         </div>
                                        <div class="modal-body" >
                                          <form action="sprint/Add" method="post" class="form-inline">
                                             {{ csrf_field() }}
                                       
                                            
                                            <div class="form-group"> 
                                                
                                           <input type="text" name="sprinttitle" placeholder="sprint title" style="width: 250px">
                                            <br>
                                           <input type="text" class="form-control todo-taskbody-due" placeholder="Date planned ended" onfocus="(this.type='date')" id="sprintdate" name="sprintdate" style="margin-top: 10px ;width: 250px " required> 
                                           
                                          
                                                  
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea placeholder="sprint description" name="sprintdescription" style="margin-top: 10px ;width: 550PX;height: 150PX "></textarea>



                                            </div>
                                          
                                          </div><!--end modal body -->
                                          <div class="form-actions right todo-form-actions" style="margin-left: 500px; margin-bottom: 10px"> <input type="submit" class="btn btn-circle btn-sm red" value="delete" id="submitform"></div>
                                         
                                            </form>
                                          </div>
                                    </div>
                               </div>
                                               
                           </div>
                                        
                                               <!--end of modal add sprint-->
        <!--the start of delete sprint modal-->
                                        
                            <div id="deletesprintModal" class="modal fade"  role="dialog">
                              <div class="modal-dialog" >
                                 <div class="modal-content"style="background-color: lightblue">
                                        <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                               <h4 class="modal-title">delete sprint </h4>
                                         </div>
                                        <div class="modal-body" >
                                          <form action="sprint/delete" method="post" class="form-inline">
                                             {{ csrf_field() }}
                                       
                                            
                                            <div class="form-group"> 
                                                
                                                   <select name="sprint_id"  class="form-control todo-taskbody-tags col-md-8" name="employees" required>
                                          <option value="none" class="btn-lg">select sprint</option>
                                        @foreach($sprints as $sprint)
                                              <option value="{!! $sprint->id !!}" id="user_id" class="btn-lg">{!! $sprint->sprint_title !!}</option>
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
                                        
                                               <!--end of modal delete sprint-->
        @stop