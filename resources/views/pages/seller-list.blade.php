@extends('../layout/' . $layout)

@section('subhead')
    <title>Seller - ZenIT</title>
@endsection


@section('subcontent')
    {{-- {{ $seller }} --}}

    <h2 class="intro-y text-lg font-medium mt-10">Seller List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            {{-- <button class="btn btn-primary shadow-md mr-2">Add New Seller</button> --}}
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-lucide="align-left"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="users" class="w-4 h-4 mr-2"></i> Add Group
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="message-circle" class="w-4 h-4 mr-2"></i> Send Message
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
        {{-- @foreach (array_slice($fakers, 0, 1) as $faker) --}}
        @foreach ($seller as $item)
        @if ($item->level == 'customer'  )

        @else

            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div class="flex flex-col lg:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                            {{-- <img class="rounded-full" src=""> --}}
                            @if(isset($item->Profiles->gallery))
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{  $item->Profiles->gallery->first()->getUrl() }}">
                            @else
                            <div class="text-slate-500 text-xs mt-0.5"> No Image </div>
                            @endif
                        </div>
                        <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                            <a href="" class="font-medium">{{ $item->name }}</a>

                            <div class="text-slate-500 text-xs mt-0.5">{{ $item->level }}</div>

                        </div>
                        <div class="flex lg:ml-0 lg:justify-end mt-3 lg:mt-0">
                            <div>
                                {{-- <label>Banned</label> --}}
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap lg:flex-nowrap items-center justify-center p-5">
                        <button class="btn btn-primary py-1 px-2 mr-2">
                            <a href="https://www.tokopedia.com/" target="_blank">Store</a>
                        </button>
                        <button class="btn btn-outline-secondary py-1 px-2">
                            <a href="{{ route('show.seller', $item->id) }}">Detail</a>
                        </button>
                    </div>
                </div>
            </div>



            @endif

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

        </div>
        <!-- END: Pagination -->
    </div>
@endsection
