<div class="modal fade" id="usermodal"  role="dialog" >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adding or updating users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span>&times;</span>
                    </button>
                  </div>
                    <form id="addform" metod="POST" entype="multipart/form-data">
                       <div class="modal-body">
                            <div class="form-group">
                                <label>Name:</label> 
                                <div class="input-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark">
                                           <i class="fas fa-user-alt text-light"></i> 
                                        </span> 
                                   </div>
                                  <input type="text" class="form-control" placeholder="Enter your name" autcomplete="off" required="required" id="username" name="username"> 
                               </div>    
                            </div>
                            <div class="form-group">
                                <label>Email:</label> 
                                <div class="input-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark">
                                           <i class="fas fa-envelope-open text-light"></i> 
                                        </span> 
                                   </div>
                                  <input type="email" class="form-control" placeholder="Enter your email" autcomplete="off" required="required" id="email" name="email"> 
                               </div>    
                            </div>
                            <div class="form-group">
                                <label>Phone:</label> 
                                <div class="input-group">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark">
                                           <i class="fas fa-phone text-light"></i> 
                                        </span> 
                                   </div>
                                  <input type="text" class="form-control" placeholder="Enter your mobile" autcomplete="off" required="required" id="mobile" name="mobile" maxLength="10" minLength="10"> 
                               </div>    
                            </div>
                            <div class="form-group">
                                <label>Photo:</label> 
                                <div class="input-group">
                                    <label class="custom-file-label" for ="userphoto"> choose file</label>
                                   <input type="file" class="custom-file-input" name="photo" id="userphoto"> 
                                </div>    
                            </div>
                       </div>
                      <div class="modal-footer">
                            <button type="button" class="btn btn-dark">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>