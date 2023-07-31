@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit info</h3>
                        <a class="create__btn" href="{{ route('admin.ads_placeholder.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.ads_placeholder.update', $ads_placeholder->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> ADS :</strong>
                        <input type="text" name="ads_placeholder" value="{{ $ads_placeholder->ads_placeholder }}" class="form-control"> <br>

                        {{-- <strong> Description :</strong>
                        <input type="text" name="description" value="{{ $info->description }}" class="form-control"> <br>

                        <img src="/icons/{{$info->icon}}" width="70px"><br><br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="icon" class="form-control"> <br> --}}

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
