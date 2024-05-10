<x-sidebar>
 

<div class="container py-md-5 container--narrow">
        <form action="/project/{{$project->user->id}}" method="POST">
            @method('PUT')
          @csrf
          <div class="form-group">
            <label for="post-title" class="text-muted mb-1"><small>Title</small></label>
            <input value="{{old('title',$project->title)}}" name="title" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
            @error('title')
            <p class="m-0 small alert alert-danger shadow-sm">Title required</p>
            @enderror
            </div>
  
          <div class="form-group">
            <label for="post-body" class="text-muted mb-1"><small>description</small></label>
            <textarea  name="body" id="post-body" class="body-content tall-textarea form-control" type="text">{{old('description',$project->description)}}</textarea>
            @error('description')
            <p class="m-0 small alert alert-danger shadow-sm">Body required</p>
            @enderror
          </div>
  
          <button class="btn btn-primary">Save the change</button>
        </form>
      </div>
  
    
</x-sidebar>