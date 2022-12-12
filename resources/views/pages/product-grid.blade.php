@extends('../layout/' . $layout)

@section('subhead')
    <title>Product Ctegories - ZenIT</title>
@endsection

@section('subcontent')


    {{-- <p>{{$category}}</p> --}}



    <h2 class="intro-y text-lg font-medium mt-10">Categories</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2">
                <a href="{{ route('form-cat') }}">Add New Categories</a>
            </button>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-lucide="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        {{-- @foreach (array_slice($fakers, 0, 4) as $faker) --}}
        @foreach ($category as $item)
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                <div class="box">
                    <div class="p-5">
                        {{-- <div class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t">
                            <img alt="Midone - HTML Admin Template" class="rounded-md" src="{{ asset('build/assets/images/' . $faker['images'][0]) }}">
                            @if ($faker['true_false'][0])
                                <span class="absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span>
                            @endif

                                @if($item -> photo)
                                    <div style="display: flex; margin-top: 10px; justify-content: center; align-items: center;">
                                        <a href="{{ $item->photo->getUrl() }}" target="_blank">
                                            <img src="{{ $item->photo->getUrl() }}" width="200px" height="350px">
                                        </a>
                                    </div>
                                @else
                                    <span class="badge badge-warning">No Image</span>
                                @endif

                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                                <a href="" class="block font-medium text-base"{{ $item->name }}</a>
                                <span class="text-white/90 text-xs mt-3">{{ $item->name }}</span>
                            </div>
                        </div> --}}


                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <div class="flex items-center mt-2" style="display:flex; justify-content: center; align-items: center;">
                                {{-- <i data-lucide="layers" class="w-4 h-4 mr-2"></i> Remaining Stock:  --}}
                                {{-- {{ $faker['stocks'][0] }} --}}

                                <h1 style="font-size:25px; font-weight:bold; display:flex; justify-content: center; align-items: center;">{{ $item->name }}</h1>

                                {{-- <i data-lucide="layers" class="w-4 h-4 mr-2"></i>   --}}
                            </div>
                            <div class="flex items-center mt-4" style="font-weight:bold;">
                                <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Status: Active
                                {{-- {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }} --}}
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">

                        {{-- <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">

                        </a> --}}

                        <form onclick="return confirm('are you sure ?');" action="{{ route('delete-cate', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" ><i data-lucide="trash-2" class="w-4 h-4"></i> </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Users Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevrons-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>
@endsection
