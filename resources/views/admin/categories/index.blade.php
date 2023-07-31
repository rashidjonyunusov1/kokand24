@extends('admin.layouts.main')
@section('categories')
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
                    <h3>categories</h3>
                  <a class="create__btn" href="{{ route('admin.categories.create')}}"><i class="bx bxs-folder-plus">
                    </i>Yaratish</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            {{-- <th>Description</th> --}}
                            {{-- <th>Image</th> --}}
                            <th>Data</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ $item->category_name }}</td>
                            {{-- <td>{{ \Str::limit($item->description,20) }}</td> --}}
                            {{-- <td><img src="/icons/{{$item->icon}}" width="40px"></td> --}}
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('admin.categories.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.categories.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                    <a class="btn btn-primary" href="{{ route('admin.categories.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $categories ->links() }} --}}
            </div>
           
        </div>
    </main>
    <!-- MAIN -->
    
@endsection