@extends('admin.layouts.main')
@section('infos')
active
@endsection
@section('content')

@if ($message = Session::get('warning'))
            <div class="alert alert-warning">
                <p style="color: black;">{{ $message }}</p>
            </div>
        @endif

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	<!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>ADS Placeholder</h3>
                  <a class="create__btn" href="{{ route('admin.ads_placeholder.create')}}"><i class="bx bxs-folder-plus">
                    </i>Yaratish</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ADS</th>
                            {{-- <th>Description</th> --}}
                            {{-- <th>Image</th> --}}
                            <th>Data</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ads_placeholder as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ $item->ads_placeholder }}</td>
                            {{-- <td>{{ \Str::limit($item->description,20) }}</td> --}}
                            {{-- <td><img src="/icons/{{$item->icon}}" width="40px"></td> --}}
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('admin.ads_placeholder.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.ads_placeholder.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                    <a class="btn btn-primary" href="{{ route('admin.ads_placeholder.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $ads_placeholder->links() }} --}}
            </div>
           
        </div>
    </main>
    <!-- MAIN -->
    
@endsection