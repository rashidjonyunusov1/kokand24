@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.app_download.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $app_download->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $app_download->title }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $app_download->description }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $app_download->playmarket }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $app_download->appstore }}</td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <img src="/img/{{$app_download->img}}" width="80px">
                    </td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
