
    <!-- Modal -->  
    <div class="modal fade" id="myModal" role="dialog">  
        <div class="modal-dialog">  
          
          <!-- Modal content-->  
          <div class="modal-content">  
            <div class="modal-header">  
                <h4 class="modal-title">Add Movies</h4>  
              <button type="button" class="close" data-dismiss="modal">×</button>  
              
            </div>  
            <div class="modal-body">  
            <form action="{{route('addData')}}" method="POST" class="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="form-group">
                  <label for="movieText" >Movie Name</label>
                  <input type="text" name="movieName" placeholder="Enter Movie Name" class="form-control col-12" id="movieText">
                </div>
                <div class="form-group">
                  <label for="inputGroupSelect01">Genre</label>
                  <select class="custom-select" name="movieGenre"  id="inputGroupSelect01">
                    <option selected></option>
                    <option value="Horror">Horror</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Sci-Fi">Sci-Fi</option>
                    <option value="Comedy">Comedy</option>
                  </select>
                </div>
                <label for="img_name">Movie Image</label>
                <div class="input-group">
                    <div class="custom-file"  >
                        <input type="file" name="movieImage" id ="img_name"  class="custom-file-input" accept="image/*">
                        <label class="custom-file-label">Choose Image</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dateSelect" >Showing Date</label>
                    <br>
                    <input type="date" name="dateSelect" >
                   
                  </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" >Movie Description</label>
                  <textarea class="form-control col-12" name="movieDescription" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                  
               
                <button type="submit" name="submit" class="btn btn-success align-self-end" >Post Movie</button>  
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                
                </form> 
            </div>  
            <div class="modal-footer">  
                
            </div>  
          </div>  
            
        </div>  
      </div>  
    
      
