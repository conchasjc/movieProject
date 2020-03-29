<br>
<div class="row">     
    <div class="col-md ml-auto ">
    <form class="form" action="/search" method="Get">
        <label for="searchMovie" class="ml-3">Search: 
        <input class="form-control" type="text" class="input" name="search"placeholder="Search Movies" id="searchMovie">
        </label>
        <button class="btn btn-primary mb-1" type="submit"><i class="fas fa-search"></i></button>
    
        <label for="searchBy" class="ml-3">Search By:
        <select class="custom-select "    name="movieGenre"  id="searchBy">
           
            <option value="movieName">Movie Name</option>
            <option value="movieGenre">Genre</option>
            <option value="showingDate">Showing Date</option>
        </select>
        </label>
        <label for="searchBy" class="ml-3">Sort By:
        <select class="custom-select " name="movieSort"  id="searchBy">
          <option value="asc">Ascending</option>
          <option value="desc">Descending</option>
        </select>
      </label>

    </form>
  
    
  </div>

</div>