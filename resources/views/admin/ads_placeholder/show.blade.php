@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.ads_placeholder.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $ads_placeholder->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $ads_placeholder->ads_placeholder }}</td>
                </tr>
                {{-- <tr>
                    <td>Description</td>
                    <td>{{ $info->description }}</td>
                </tr>
                <tr>
                    <td>Icon</td>
                    <td>
                        <img src="/icons/{{$info->icon}}" width="80px">
                    </td>
                </tr> --}}
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
