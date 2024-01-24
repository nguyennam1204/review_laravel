@extends('../layout')

@section('content')
    <div class="container-fluid">
        <img src="/images/images/{{ $movie->image }}" style="width: 100%">
        <div
            style="margin-top: 30px; color: #fff; font-size: 30px; font-weight: 400; line-height: 34px; font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif; margin-left: 75px;margin-right: 75px; border-top: 1px solid #777;border-bottom: 1px solid #777;">
            <p style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #a3a3a3; text-align: center; font-size:15px"
                class="mt-3">{{ $movie->details1 }}</p>
        </div>

        <p
            style="padding-top: 50px; color: #fff; font-size: 30px; font-weight: 400; line-height: 34px; font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif; margin-left: 75px;">
            Tập <span style="font-weight: 100;">| <span
                    style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #a3a3a3; font-size:25px; font-weight:400">{{ $movie->title }}</span></span>
        </p>
        <p
            style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #fff;
        font-size: 16px;
        font-weight: 400;
        font-weight: 500;
        line-height: 22px;
        margin-left: 75px;">
            Năm phát hành: {{ $movie->year }}
        </p>
        <div class="">
            <div class="col-lg-6 col-md-12 col-12">
                <p style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #a3a3a3; font-weight:400;margin-left:60px;"
                    class="text-justify">
                    {{ $movie->details2 }}
                </p>
            </div>
        </div>
        </p>
        <p
            style="padding-top:50px;color: #fff;font-size: 30px;font-weight: 400;line-height: 34px;font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;margin-left:75px;">
            Tìm hiểu thêm
        </p>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <p style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #a3a3a3;">
                        Xem ngoại tuyến
                    </p>
                    <p style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #fff;">
                        Tải xuống và xem tại mọi nơi.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <p style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #a3a3a3; ">
                        Thể loại
                    </p>
                    <span style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #fff; ">
                        {{ $movie->genres1 }}
                    </span>

                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <p style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #a3a3a3">
                        Bộ phim này thuộc thể loại...
                    </p>
                    <span style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #fff; ">
                        {{ $movie->genres2 }}
                    </span>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <p style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #a3a3a3;">
                        Âm thanh
                    </p>
                    <span style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #fff; ">
                        {{ $movie->audio }}
                    </span>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <p style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #a3a3a3;">
                        Phụ đề
                    </p>
                    <span style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #fff; ">
                        {{ $movie->subtitle }}
                    </span>
                </div>
            </div>

            {{-- Diễn Viên --}}
            <p></p>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <p style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #a3a3a3;">
                        Dàn diễn viên
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <p style="font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;color: #fff;">
                        {{ $movie->actor }}
                    </p>

                </div>
            </div>
        </div>

        <p
            style="padding-top:50px;color: #fff;font-size: 30px;font-weight: 400;line-height: 34px;font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;margin-left:75px;">
            Nội dung tương tự
        </p>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('/images/logo2.png') }}" alt="" class="img-fluid">
                        @foreach ($alls as $all)
                            @if ($all->id != $movie->id)
                                @if (strcmp("$movie->genres1", "$all->genres1") == 0)
                                    {{ $all->genres1 }}
                                @endif
                            @endif
                        @endforeach
                    </a>
                </div>
            </div>
        </div>
        <p
            style="padding-top:50px;color: #fff;font-size: 30px;font-weight: 400;line-height: 34px;font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;margin-left:75px;">
            Sắp ra mắt
        </p>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-3">
                    <a href="#" class="d-flex align-items-center"
                        style="color: #fff;
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 22px;">
                        Title
                    </a>
                    <p style="color: #a3a3a3" class="text-justify">Khi vụ vô ý giết người dẫn đến vụ giết người khác,
                        sinh viên đại học bình
                        thường nọ mắc kẹt trong
                        cuộc rượt đuổi mèo vờn chuột không hồi kết với vị thám tử sắc sảo.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
