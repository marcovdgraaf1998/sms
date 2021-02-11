<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css' integrity='sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==' crossorigin='anonymous'/>
    <link rel='stylesheet' href="{{ asset('css/style.css') }}"/>
    <title>Student Management System</title>
</head>
<body>
@include("navbar")

<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-12 col-sm-12">
                    @include("studentlists")
                </section>
            </div>
        </div>

    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentlists")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">List of students</h5>
                        <p class="card-text">You can find here all the information about students in the system.</p>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="cne">CNE</label>
                                <input name="cne" type="text" class="form-control"  placeholder="Enter CNE">
                            </div>
                            <div class="form-group">
                                <label for="firstName">First name</label>
                                <input name="firstName" type="text" class="form-control"  placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last name</label>
                                <input name="lastName" type="text" class="form-control"  placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input name="age" type="number" class="form-control"  placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label for="speciality">Speciality</label>
                                <input name="speciality" type="text" class="form-control"  placeholder="Enter speciality">
                            </div>
                            <!-- <div class="input-group">
                                <div class="custom-file">
                                    <input name="image" type="file" class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div> -->
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div> 
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentlists")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img class="card-img-top" src="https://vrs.amsi.org.au/wp-content/uploads/sites/78/2017/12/tobinsouth_vrs_2017-18.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <form action="{{ url('/update/' .$student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="cne">CNE</label>
                                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"  placeholder="Enter CNE">
                            </div>
                            <div class="form-group">
                                <label for="firstName">First name</label>
                                <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last name</label>
                                <input value="{{ $student->lastName }}" name="lastName" type="text" class="form-control"  placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input value="{{ $student->age }}" name="age" type="number" class="form-control"  placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label for="speciality">Speciality</label>
                                <input value="{{ $student->speciality }}"  name="speciality" type="text" class="form-control"  placeholder="Enter speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div> 
    </div>
    @endif
</body>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' integrity='sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js' integrity='sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==' crossorigin='anonymous'></script>
</html>