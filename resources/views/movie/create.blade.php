<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');

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

<body>


    @extends('../layoutadmin')


    @section('content')
        <form action="{{ route('movie.store') }}" method="get">
            <table class="table" border="1px">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Time</th>
                        <th scope="col">Year</th>
                        <th scope="col">Star</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" name="image" id="">
                        </td>
                        <td>
                            <input type="text" name="title" id="">
                        </td>
                        <td>
                            <input type="text" name="long" id="">
                        </td>
                        <td>
                            <input type="text" name="year" id="">
                        </td>
                        <td>
                            <input type="text" name="star" id="">
                        </td>
                    </tr>
                </tbody>
                <footer>
                    <button type="submit" class="btn btn-success">Thêm mới</button>
                </footer>
            </table>
        </form>
    @endsection
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
