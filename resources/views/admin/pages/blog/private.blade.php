@extends('layout.admin')

@section('content')
    <h2>Blogs</h2>
    <a href="{{ route('admin.blog.create') }}" class="btn btn-success mb-3">Add Blog Item</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif

    {{--    <div>--}}
    {{--        --}}{{--        @dd(config('app.languages'))--}}
    {{--        @foreach(config('app.languages') as $lang)--}}
    {{--            @php--}}
    {{--                $urlLang = request()->segment(count(request()->segments()));--}}
    {{--                $backgroundClass = ($urlLang == $lang) ? 'bg-success text-white' : '';--}}
    {{--            @endphp--}}
    {{--            <a href="{{ route('admin.blog.index', ['lang' => $lang]) }}"--}}
    {{--               class="border-2 border-success rounded p-2  m-1 bg-secondary {{ $backgroundClass }}">--}}
    {{--                <span>{{ $lang }}</span>--}}
    {{--            </a>--}}
    {{--        @endforeach--}}
    {{--    </div>--}}

    <table class="table mt-3">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Image</th>
            {{--            <th>Slug</th>--}}
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {{--        @dd($blog)--}}
        @foreach($blogs as $blog)

            <tr>
                {{--                @dd($blog)--}}
                {{--@dd($blog)--}}
                <td>{{ $blog->id }}</td>
                <td><img src="{{ url('storage/' . $blog->image) }}" alt="Blog Item Image" width="100"></td>
                {{--                <td>{{ $blog->slug }}</td>--}}
                @if($blog->status == 0)
                    {{--                        @dd($blog->token)--}}
                    <td> <a href="{{route('front.tokens', ['token'=>$blog->token->value])}}">{{$blog->title}}</a></td>
                @else

                    <td>{{ $blog->title }}</td>
                    <td>{!! Str::limit(strip_tags($blog->description),20)  !!}</td>
                @endif
                <td>{{$blog->status}}</td>

                <td>
                    <a href="{{ route('admin.blog.edit', ['blog' => $blog->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.blog.destroy', ['blog' => $blog->id]) }}" method="POST"
                          class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
