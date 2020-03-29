
    <!-- Modal -->  
   
        

    <div class="modal fade" id="myModalUpdate" role="dialog">  
        <div class="modal-dialog">  
          
          <!-- Modal content-->  
          <div class="modal-content">  
            <div class="modal-header">  
                <h4 class="modal-title">Update Movie</h4>  
              <button type="button" class="close" data-dismiss="modal">×</button>  
              
            </div>  
            <div class="modal-body">  
              @if($message=Session::get('success'))
              <div class="alert alert-success">
              <p>{{$message}}</p>
              </div>
              @endif
            <form action="/updateData{{$post->id}}" method="Post" class="form" enctype="multipart/form-data">
              
              {{ csrf_field() }}
               
                  <div class="form-group">
                  <label for="m_name" >Movie Name</label>
          
                  <input type="hidden"  name="movieId" id="m_id" class="form-control col-12" >
                   
                  <input type="text"  name="movieName" id="m_name" placeholder="Enter Movie Name" class="form-control col-12" >
                   
                </div>
                <div class="form-group">
                  <label for="m_genre">Genre</label>
                  <select class="custom-select" name="movieGenre" id="m_genre">
                    <option selected></option>
                    <option value="Horror">Horror</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Sci-Fi">Sci-Fi</option>
                    <option value="Comedy">Comedy</option>
                  </select>
                </div>
        
                <div class="form-group">
                    <label for="dateSelect" >Showing Date</label>
                    <br>
                    <input type="date" id="m_date" name="dateSelect" >
                   
                  </div>
                <div class="form-group">
                    <label for="m_desc" >Movie Description</label>
                  <textarea class="form-control col-12" name="movieDescription" id="m_desc" rows="3"></textarea>
                </div>
                  
               
                <button type="submit" name="submit" class="btn btn-success align-self-end" >Update Movie</button>  
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                
                </form> 
            </div>  
            <div class="modal-footer">  
                
            </div>  
          </div>  
            
        </div>  
      </div>  
    
      
     