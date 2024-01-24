@extends('../layout')

@section('content')
    <div style="background-color: #0a171a">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="box mt-5 mb-5 p-5">
                    <div class="m-5">
                        <form action="" method="post">
                            @csrf
                            <h3 style="color: white" class="mb-5">Login to your account</h3>
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control input mb-3"
                                    placeholder="Username or email" aria-describedby="helpId">
                                <input type="text" name="" id="" class="form-control input mb-5"
                                    placeholder="Your password  " aria-describedby="helpId">
                            </div>
                            <button type="submit" class="btn btn-warning button mb-2" style="width: 100%;">Login</button>
                            <a href="{{ route('registeruser') }}"><button type="button" class="btn btn-danger button mb-2"
                                    style="width: 100%;">Register</button></a>
                            <a href="{{ route('register') }}"><button type="button" class="btn btn-info button mb-2"
                                    style="width: 100%;">Register admin</button></a>
                            <a href="{{ route('login') }}"><button type="button" class="btn btn-success button"
                                    style="width: 100%;">Login admin</button></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection
