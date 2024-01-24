@extends('../layoutadmin')


@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }

        <style>@import url('https://fonts.googleapis.com/css?family=Open+Sans');

        html {
            font-family: Arial;
            font-size: 16px;
            /* background: #5e42a6; */
        }

        .sidebar {
            position: fixed;
            width: 25%;
            height: 100vh;
            background: #312450;
            font-size: 0.65em;
        }

        .nav {
            position: relative;
            margin: 0 15%;
            text-align: right;
            top: 50%;
            transform: translateY(-50%);
            font-weight: bold;
        }

        .nav ul {
            list-style: none;

            li {
                position: relative;
                margin: 3.2em 0;

                a {
                    line-height: 5em;
                    text-transform: uppercase;
                    text-decoration: none;
                    letter-spacing: 0.4em;
                    color: rgba(#FFF, 0.35);
                    display: block;
                    transition: all ease-out 300ms;
                }

                &.active a {
                    color: white;
                }

                &:not(.active)::after {
                    opacity: 0.2;
                }

                &:not(.active):hover a {
                    color: rgba(#FFF, 0.75);
                }

                &::after {
                    content: '';
                    position: absolute;
                    width: 100%;
                    height: 0.2em;
                    background: black;
                    left: 0;
                    bottom: 0;
                    background-image: linear-gradient(to right, #5e42a6, #b74e91)
                }
            }
        }

        .twitter {
            position: relative;
            width: 75%;
            float: right;
            height: 100vh;

            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100%;
            }

            a {
                position: relative;

                img {
                    width: 48px;
                    height: 48px;
                }
            }

            p {
                text-transform: uppercase;
                font-size: 1em;
                letter-spacing: 0.1em;
                color: #FFF;
                font-weight: bold;
                margin-top: 20px;
            }
        }
    </style>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card uper">
                    <div class="card-header">
                        <h3>Edit</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br>
                        @endif
                        <form action="{{ route('movie.update', $movies->id) }}" method="post">
                            @csrf
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <td scope="row">
                                            <div class="form-group">
                                                <label for="name">image: </label>
                                                <input type="text" name="image" id="" class="form-control"
                                                    placeholder="Nha" aria-describedby="" value="{{ $movies->image }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">title: </label>
                                                <input type="text" name="title" id="" class="form-control"
                                                    placeholder="" aria-describedby="" value="{{ $movies->title }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="name">long: </label>
                                                <input type="text" name="long" id="" class="form-control"
                                                    placeholder="Nha" aria-describedby="" value="{{ $movies->long }}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <div class="form-group">
                                                <label for="name">year: </label>
                                                <input type="text" name="year" id="" class="form-control"
                                                    placeholder="Nha" aria-describedby="" value="{{ $movies->year }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">star: </label>
                                                <input type="text" name="star" id="" class="form-control"
                                                    placeholder="" aria-describedby="" value="{{ $movies->star }}">
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>



                            <button type="submit" class="btn btn-success">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
