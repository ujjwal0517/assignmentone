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
                <form action="{{route('createModule')}}" method="Post">
                    @csrf
                   
                    <div class="form-group mb-3">
                        <label for="module" class="form-label">Modules</label>
                        <select class="custom-select" name="module" id="module mutiple">
                        @if(faculty->name=="science"){
                        <option selected>physics</option>
                        <option value="1">chemestry</option>
                        <option value="2">Math</option>
                        <option value="3">English</option>
                        <option value="4">Biology</option>
                        }
                        @if(faculty->name=="Management"){
                            <option selected>Account</option>
                            <option value="1">Economics</option>
                            <option value="2"> English</option>
                            <option value="3">Nepali</option>
                        }
</select>
    
</div>
    

    
                </div>


 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
</div>
            
</body>
</html>
