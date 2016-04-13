 
<!-- Page content -->
<div id="content" class="col-md-12">
   <!-- page header -->
   <div class="pageheader">
      <h2><i class="fa fa-shield" style="line-height: 50px;padding-left: 0;"></i> Form Wizard <span>// Place subtitle here...</span></h2>
      <div class="breadcrumbs">
         <ol class="breadcrumb">
            <li>You are here</li>
            <li><a href="index.html">Minimal</a></li>
            <li><a href="form-elements.html">Forms</a></li>
            <li class="active">Form Wizard</li>
         </ol>
      </div>
   </div>
   <!-- /page header -->
   <!-- content main container -->
   <div class="main">
      <!-- row -->
      <div class="row">
         <!-- col 12 -->
         <div class="col-md-12">
            <!-- tile -->
            <section id="rootwizard" class="tabbable transparent tile">
               <!-- tile header -->
               <div class="tile-header transparent">
                  <h1><strong>Form</strong> Wizard</h1>
                  <div class="controls">
                     <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                     <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                     <a href="#" class="remove"><i class="fa fa-times"></i></a>
                  </div>
               </div>
               <!-- /tile header -->
               <!-- tile widget -->
               <div class="tile-widget nopadding color transparent-black rounded-top-corners">
                  <ul>
                     <li><a href="#tab1" data-toggle="tab">User Data</a></li>
                     <li><a href="#tab2" data-toggle="tab">Contact</a></li>
                     <li><a href="#tab3" data-toggle="tab">EULA</a></li>
                  </ul>
               </div>
               <!-- /tile widget -->
               <!-- tile body -->
               <div class="tile-body">
                  <div id="bar" class="progress progress-striped active">
                     <div class="progress-bar progress-bar-cyan animate-progress-bar"></div>
                  </div>
                  <div class="tab-content">
                     <div class="tab-pane" id="tab1">
                        <form class="form-horizontal form1"  role="form" parsley-validate>
                           <div class="form-group">
                              <label for="fullname" class="col-sm-2 control-label">Full Name *</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="password" class="col-sm-2 control-label">Password *</label>
                              <div class="col-sm-10">
                                 <input type="password" class="form-control" id="password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="passwordconfirm" class="col-sm-2 control-label">Password Confirm *</label>
                              <div class="col-sm-10">
                                 <input type="password" class="form-control" id="passwordconfirm" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1" parsley-equalto="#password">
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane" id="tab2">
                        <form class="form-horizontal form2" role="form" parsley-validate id="contact">
                           <div class="form-group">
                              <label for="email" class="col-sm-2 control-label">Email *</label>
                              <div class="col-sm-10">
                                 <input type="email" class="form-control" id="email" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-type="email" parsley-validation-minlength="1">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="website" class="col-sm-2 control-label">Website</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" id="website" parsley-trigger="change" parsley-minlength="4" parsley-type="url" parsley-validation-minlength="1">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="phonenum" class="col-sm-2 control-label">Phone Number</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" id="phonenum" parsley-trigger="change" parsley-type="phone" parsley-validation-minlength="0" placeholder="1234567891">
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane" id="tab3">
                        <form class="form-horizontal form3" role="form" parsley-validate id="eula">
                           <div class="form-group">
                              <div class="col-sm-12">
                                 <div class="checkbox">
                                    <input type="checkbox" value="1" id="opt01" parsley-trigger="change" parsley-required="true" name="eula">
                                    <label for="opt01">EULA acceptation *</label>
                                 </div>
                                 <div class="checkbox">
                                    <input type="checkbox" value="1" id="opt02" name="newsletter">
                                    <label for="opt02">Receive newsletter</label>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- /tile body -->
               <!-- tile footer -->
               <div class="tile-footer border-top color white rounded-bottom-corners nopadding">
                  <ul class="pager pager-full wizard">
                     <li class="previous"><a href="javascript:;"><i class="fa fa-arrow-left fa-lg"></i></a></li>
                     <li class="next"><a href="javascript:;"><i class="fa fa-arrow-right fa-lg"></i></a></li>
                     <li class="next finish" style="display:none;"><button class="btn btn-cyan margin-bottom-20" type="submit" name="submit" ><i class="fa fa-check fa-lg"></i></button></li>
                  </ul>
               </div>

               <!-- /tile footer -->
            </section>
            <!-- /tile -->
         </div>
         <!-- /col 12 -->
      </div>
      <!-- /row -->
   </div>
   <!-- /content container -->
</div>
<!-- Page content end -->


