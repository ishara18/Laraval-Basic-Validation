<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<div class="text-center">
     <h1>Form Validation</h1>
</div>

<form method="POST" action="formvalidation">
@csrf

    <div class="row justify-content-md-center">
        <div class="form-outline col-sm-4">
            <input type="text" id="fname" class="form-control" name="First_Name" placeholder="First Name"/>
        </div>
    </div>
    <br>

    <div class="row justify-content-md-center">
        <div class="form-outline col-sm-4">
            <input type="text" id="lname" class="form-control" name="Last_Name" placeholder="Last Name"/>
        </div>
    </div>
    <br>

    <div class="row justify-content-md-center">
        <div class="form-outline col-sm-4">
            <input type="email" id="email" class="form-control" name="Email" placeholder="Email"/>
        </div>
    </div>
    <br>

    <div class="row justify-content-md-center">
        <div class="form-outline col-sm-4">
            <input type="text" id="nic" class="form-control" name="NIC" placeholder="NIC"/>
        </div>
    </div>
    <br>

    <div class="row justify-content-md-center">
        <div class="form-outline col-sm-4">
            <input type="text" id="mobilenumber" class="form-control" name="Mobile_Number" placeholder="Mobile Number"/>
        </div>
    </div>
    <br>

  <div class="text-center">
    <button type="submit" class="btn btn-primary " style="padding-left: 50px; padding-right: 50px">Sign in</button>
  </div>

</form>

<div class="row justify-content-md-center">
@if ($errors->any())
    <div class="col-sm-4">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    </div>
    </div>

@endif
