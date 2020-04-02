<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Student management system</title>
  </head>
  <body>
      @include("navbar")
    <h1>Hello, world!</h1>
    @if($layout == 'index')
        <div class="container-fluid">
            <div class="row">   
            <section class="col-md-7">
            @include("studentslist")
            </section>
            <section class="col-md-5"></section>    
            </div>
        </div>


    @elseif($layout == 'create')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col">
                <form action="{{ url('/store')}}" method="post">
                        @csrf
                        <div class="form-group">
                          <label >CNE</label>
                          <input name="cne" type="text" class="form-control"  placeholder="Enter cne">
                        </div>
                        <div class="form-group">
                            <label >First Name</label>
                            <input name="firstName" type="text" class="form-control" placeholder="Enter the First Name">
                          </div>
                          <div class="form-group">
                            <label >Second Name</label>
                            <input name="secondName" type="text" class="form-control" placeholder="Enter the Second Name">
                          </div>
                          <div class="form-group">
                            <label>Age</label>
                            <input name="age" type="text" class="form-control" placeholder="Enter Age">
                          </div>
                          <div class="form-group">
                            <label >Sepeciality</label>
                            <input name="speciality" type="text" class="form-control" placeholder="Enter sepeciality">
                          </div>

                          <input type="submit" class="btn btn-info" value="save">
                          <input type="reset" class="btn btn-warning" value="reset">


                    </form>



                </section>   
            </div> 
        </div>
    @elseif($layout == 'show')
    <div class="container-fluid">
            <div class="row">
            <section class="col">
            @include("studentslist")
            </section>
            <section class="col"></section>  
        </div>  
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
            @include("studentslist")
            </section>
            <section class="col">
                <form action="{{ url('/update/'.$student->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label >CNE</label>
                    <input  value="{{$student->cne}}" name="cne" type="text" class="form-control"  placeholder="Enter cne">
                    </div>
                    <div class="form-group">
                        <label >First Name</label>
                        <input  value="{{$student->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter the First Name">
                      </div>
                      <div class="form-group">
                        <label >Second Name</label>
                        <input value="{{$student->secondName}}" name="secondName" type="text" class="form-control" placeholder="Enter the Second Name">
                      </div>
                      <div class="form-group">
                        <label>Age</label>
                        <input value="{{$student->age}}" name="age" type="text" class="form-control" placeholder="Enter Age">
                      </div>
                      <div class="form-group">
                        <label >Speciality</label>
                        <input  value="{{$student->speciality}}" name="speciality" type="text" class="form-control" placeholder="Enter sepeciality">
                      </div>

                      <input type="submit" class="btn btn-info" value="Update">
                      <input type="reset" class="btn btn-warning" value="reset">


                </form>
            </section>    
        </div>
    </div>
    @endif
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>