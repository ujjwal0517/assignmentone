<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Assignment One</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="{{route('createFaculty')}}" method="Post">
                    @csrf
  
                    <div class="form-group mb-3">
                    <label for="faculty" class="form-label">Faculty</label>
                    <input type="text" class="form-control" name="name">
    

    
                </div>


 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
</div>
            
</body>
</html>
