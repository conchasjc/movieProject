@extends('/index')
@section('title',"Manage Movies")
@section('content')
   <div class="container">
   <br>
    <div class="row">     
        <div class="col-12 ml-auto ">
          <form action="/manageSearch" method="GET" class="form">
            <label for="searchMovie">Search:
            <input type="text" class="input form-control" name="searchTable" placeholder="Search Movies" id="searchMovie">
           
          </label>
          <button class="btn btn-primary mb-1"><i class="fas fa-search"></i></button>
          </form>
          <br>
          <button class="btn btn-success float-right " data-toggle="modal" data-target="#myModal">Add Movie</button>
        
        </div>
          
    </div>
    <br>

   @include('/component/modal')


    
   @if($message=Session::get('success'))
   <div class="alert alert-success">
   <p>{{$message}}</p>
   </div>
   @endif
    <div class="row">
      <div class="col-sm-12">
        <table id="datatable" class="table table-responsive-md table-light table-striped">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Movie Image</th>
                  <th scope="col">Movie List</th>
                  <th scope="col">Genre</th>
                  <th scope="col">Date Showing</th>
                  <th scope="col">Description</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                
                  @if (count($posts)>0)
                  @foreach ($posts as $post)
                  <tr>
                   
                  <td scope="row">{{$post->id}}</td>
                  <td>{{$post->movieImage}}</td>
                  <td>{{$post->movieName}}</td>
                  <td>{{$post->movieGenre}}</td>
                  <td>{{$post->showingDate}}</td>
                  <td>{{$post->description}}</td>
                  @include('/component/updateModal')
                   <td>
                     <button href="" class="btn btn-success col-12 updateButton" ><i class="fas fa-edit"></i></button>
                    </td>
                    <td>
                   
                    <a href="/Delete{{$post->id}}" onclick="return confirm('Delete movie?')" class="btn btn-danger col-12"><i class="fas fa-trash-alt"></i></a>
               
                  </td>
                    @endforeach
                  </tr>

                 
                  @else
                  <div>
                      <p>No Movies Found</p>
                    </div>
                  @endif
                  
                
              </tbody>
        </table>
    
      </div>
     
    </div>
</div>
@endsection