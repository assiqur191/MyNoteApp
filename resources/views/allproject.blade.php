<x-sidebar>

    <h1>All projects</h1>
    <div class="list-group w-auto">
      
      @foreach ($projects as $project)
      <a href="/dashboard/add-new-project/{{$project->id}}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
        <div class="d-flex gap-2 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">{{$project->title}}</h6>
            <p class="mb-0 opacity-75">{{$project->description}}</p>
          </div>
          <small class="opacity-50 text-nowrap">{{$project->created_at}}</small>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </div>
       </a>
    
      @endforeach
     
      
    
    </div>
      

</x-sidebar>