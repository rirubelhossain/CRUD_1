<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">

                 
                    <div class="card-header">
                        <h2>Edit Posts</h2>
                    </div>
                    @if(Session::has('post_updated'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_updated')}}
                                </div>
                            @endif
                    <form action = "{{route('post.update')}}" method = "post">
                        @csrf
                        <input type = "hidden" name = "id" value="{{$posts->id}}"/>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Title</label>
                                <input type="text" class="form-control" id="fname" value="{{$posts->title}}"name= "title">
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Body</label>  
                                <input type="text" class="form-control" id="lname" value="{{$posts->body}}"name="body">
                            </div>                  
                            <!-- <button type="submit" class="btn btn-success">Submit</button-->
                            <!-- <a href="/add-post" class="btn btn-success">Back to Main</a> -->
                            <input type = "submit" class = "btn btn-success" value="Update"/>
                            <a href="/add-post" class="btn btn-success">Back to Main</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>