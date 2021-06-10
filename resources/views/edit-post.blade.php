<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Edit post</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   </head>
   <body>
      <section style="padding-top: 60px;">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3">
                  <div class="card">
                     <div class="card-header">
                        Edit Post <a href="/get-posts" class="btn btn-primary">View All Post</a>
                     </div>
                     <div class="card-body">
                        <!-- to display a message alert type this below code -->
                        @if(Session::has('post_updated'))
                        <div class="alert alert-success" role="alert">
                           {{Session::get('post_updated')}}
                        </div>
                        @endif
                        <!--form -->
                        <form method="POST" action="{{route('post.update')}}">
                           @csrf
                           <input type="hidden" name="id" value="{{$post->id}}" />
                           <div class="form-group">
                              <lable for="title">Post Title</lable>
                              <input type="text" name="title" class="form-control" placeholder="Enter Post Title" value="{{$post->title}}">
                           </div>
                           <div class="form-group">
                              <lable for="body">Post Descripton</lable>
                              <textarea name="body" class="form-control" rows="3">{{$post->body}}</textarea>
                           </div>
                           <br>
                           <button type="submit" class="btn btn-success">Update Post</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   </body>
</html>
