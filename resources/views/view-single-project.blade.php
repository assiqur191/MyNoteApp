<x-sidebar>
 

      <div class="container py-md-5 container--narrow">
        <div class="d-flex justify-content-between">
          <h2>{{$project->title}}</h2>
          @can('update',$project)
          <span class="pt-2">
            <a href="/post/{{$project->user->id}}/edit" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
            <form class="delete-post-form d-inline" action="/post/{{$project->id}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="delete-post-button text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button>
            </form>
          </span>
        </div>
        @endcan
    
        <p class="text-muted small mb-4">
          <a href="#"><img class="avatar-tiny" src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" /></a>
          Posted by <a href="#">{{$project->user->username}}  </a> {{$project->created_at->format('n/j/Y')}}
        </p>
    
        <div class="body-content">
          <p>{{$project->description}}</p>
        </div>
      </div>


      <!--------------------->
      </main>
      <div class="d-flex gap-5 justify-content-center">
        <div class="list-group mx-0 w-auto">
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
            <span>
              First checkbox
              <small class="d-block text-muted"></small>
            </span>
          </label>
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="checkbox" value="">
            <span>
              Second checkbox
              <small class="d-block text-muted"></small>
            </span>
          </label>
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="checkbox" value="">
            <span>
              Third checkbox
              <small class="d-block text-muted"></small>
            </span>
          </label>
        </div>
      
        
      </div>
    
</x-sidebar>