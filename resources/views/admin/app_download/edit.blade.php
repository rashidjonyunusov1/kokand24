@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit App Download</h3>
                        <a class="create__btn" href="{{ route('admin.app_download.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.app_download.update', $app_download->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> title :</strong>
                        <input type="text" name="title" value="{{ $app_download->title }}" class="form-control"> <br>

                        <strong> Description :</strong>
                        <input type="text" name="description" value="{{ $app_download->description }}" class="form-control"> <br>

                        <strong> Description :</strong>
                        <input type="text" name="playmarket" value="{{ $app_download->playmarket }}" class="form-control"> <br>

                        <strong> Description :</strong>
                        <input type="text" name="appstore" value="{{ $app_download->appstore }}" class="form-control"> <br>


                        <img src="/img/{{$app_download->img}}" width="70px"><br><br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"> <br>

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
