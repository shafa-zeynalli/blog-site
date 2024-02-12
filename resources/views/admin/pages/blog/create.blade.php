@extends('layout.admin')

@section('content')
    <h2>Add Blog Item</h2>
    <div class="card">
        <div class="card-body">
            <form
                action="{{route('admin.blog.create')}}"
                  method="POST" enctype="multipart/form-data">
                 @csrf
{{--                <div class="card card-primary card-tabs">--}}
{{--                    <div class="card-header p-0 pt-1">--}}
{{--                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">--}}
{{--                            @foreach(config('app.languages') as $lang)--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link {{$loop->first ? 'active show' : ''}} @error("$lang.title") text-danger @enderror"--}}
{{--                                       id="custom-tabs-one-home-tab" data-bs-toggle="pill" href="#tab-{{$lang}}"--}}
{{--                                       role="tab"--}}
{{--                                       aria-controls="custom-tabs-one-home" aria-selected="true">{{$lang}}</a>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
{{--                            @php--}}
{{--                                $categoryTranslation =[];--}}
{{--                                   foreach ($categories as $category){--}}
{{--                                    $categoryTranslation[] = $category->translations--}}
{{--                                        ->where('language.lang', 'tr')->first();--}}
{{--                                    }--}}
{{--//                                    dd($categories);--}}
{{--//                                       echo '<pre>';--}}
{{--//                                       print_r($categoryTranslation);--}}
{{--                            @endphp--}}

{{--                            @foreach(config('app.languages') as $index => $language)--}}
{{--                                --}}{{--                                @dd($language)--}}


                                <div class="tab-pane fade active show">

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" placeholder="Title" name="title"
{{--                                               value="{{old($language.'.title')}}"--}}
                                               class="form-control" id="title">
                                        @error("title")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="summernote">Description</label>
                                        <textarea type="text" name="description"
                                                  id="summernote"
                                                  class="form-control blogs">{{old('description')}}</textarea>
                                        @error("description")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
{{--                            @endforeach--}}
                        </div>
                    </div>

                <div class="form-group my-3">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" id="status">
                        <option value="">Select a status</option>
                                    <option value="1" >1</option>
                                    <option value="0" >0</option>

                    </select>
                    @error('status')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group my-3">
                                    <label for="status">Is Public</label>
                                    <select name="is_public" class="form-control" id="status">
                                        <option value="">Select a status</option>
                                                    <option value="1" >1</option>
                                                    <option value="0" >0</option>

                                    </select>
                                    @error('is_public')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                <div class="form-group py-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" >
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>

    <script>
        $('#summernote.blogs').summernote({
            placeholder: 'Description blogs',
            tabsize: 5,
            height: 700,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

{{--    <script>--}}
{{--        document.addEventListener('DOMContentLoaded', function () {--}}
{{--            var tabs = new bootstrap.Tab(document.querySelector('#custom-tabs-one-home-tab'));--}}
{{--            tabs.show();--}}

{{--            @foreach(config('app.languages') as $index => $lang)--}}
{{--            new Summernote($('#summernote{{$index}}'), {--}}
{{--                placeholder: 'desc{{$lang}}',--}}
{{--                height: 200,--}}
{{--            });--}}
{{--            @endforeach--}}
{{--        });--}}
{{--    </script>--}}

@endsection
