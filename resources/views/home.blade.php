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
<form action="" method="Post">
    @csrf
  <div class="form-group mb=3">
    <label for="lecturer_name" class="form-label">Lecturer's Name</label>
    <input type="text" class="form-control" id="lecturer_name" name="lecturer_name">
  </div>
  <div class="form-group mb=3">
    <label for="gender" class="form-label"></label>
    <input type="radio" class="form-control" id="genderm" name="gender" value="male">
    <label>Male</label>
    <input type="radio" class="form-control" id="genderf" name="gender" value="female">
    <label>Female</label>
  </div>
  <div class="form-group mb=3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone">
  </div>
  <div class="form-group mb=3">
    <label for="email" class="form-label">Email Id</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group mb=3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address">
  </div>
  <div class="form-group mb=3">
    <label for="lecturer_name" class="form-label">Nationality</label>
    <input type="text" class="form-control" id="Nationality" name="Nationality">
  </div>
<div class="form-group mb-3">
    <label for="dob" class="form-label">DOB</label>
    <input type="number" class="form-control" id="dob" name="dob">
</div>

    
</div>

</div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
            <div class="col-sm-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Lecturer's Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Nationality</th>
                        <th>DOB</th>
                        <th>Faculty</th>
                        <th>Modules</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $std)
                    <tr>
                        <td>{{$std->id}}</td>
                        <td>{{$std->lecturer_name}}</td>
                        <td>{{$std->gender}}</td>
                        <td>{{$std->phone}}</td>
                        <td>{{$std->email}}</td>
                        <td>{{$std->address}}</td>
                        <td>{{$std->nationality}}</td>
                        <td>{{$std->dob}}</td>
                        <td>{{$std->faculty}}</td>
                        <td>{{$std->module}}</td>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>


</body>
</html>
