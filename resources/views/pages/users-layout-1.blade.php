@extends('../layout/' . $layout)

@section('subhead')
    <title>Customer - ZenIT</title>
@endsection


@section('subcontent')
    {{-- {{$cust}} --}}
    @include('sweetalert::alert')
    <h2 class="intro-y text-lg font-medium mt-10">Customer List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            {{-- <button class="btn btn-primary shadow-md mr-2">
                <a href="{{ route('form-cust') }}">Add New Customer</a>
            </button> --}}
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
            <div class="hidden xl:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                <select class="w-56 xl:w-auto form-select box ml-2">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">
                            <input class="form-check-input" type="checkbox">
                        </th>
                        <th class="whitespace-nowrap">USERNAME</th>
                        <th class="text-center whitespace-nowrap">EMAIL</th>
                        <th class="text-center whitespace-nowrap">PASSWORD</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">TOTAL CHECKOUT</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach (array_slice($fakers, 0, 5) as $faker) --}}
                    @foreach ($cust as $item)
                        <tr class="intro-x">
                            <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td class="!py-3.5">
                                <div class="flex items-center">
                                    <div class="w-9 h-9 image-fit zoom-in">

                                        @if(isset($item->Profiles->gallery))
                                        <img class="rounded-full" src="{{  $item->Profiles->gallery->first()->getUrl() }}">
                                        @else
                                        <div class="text-slate-500 text-xs mt-0.5"> No Image </div>
                                        @endif

                                    </div>
                                    <div class="ml-4">
                                        <a href="" class="font-medium whitespace-nowrap">{{ $item->name }}</a>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $item->level }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="flex items-center justify-center" href="javascript:;">{{ $item->email }}</a>
                            </td>
                            <td class="text-center capitalize"></td>
                            <td class="w-40">
                                <div class="flex items-center justify-center">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> active
                                </div>
                            </td>
                            <td class="text-center">- Items</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">



                                        @if($item->status == 1)

                                        <div class="btn-group">
                                            <a href="{{ route('up-status-user', ['user_id' => $item->id, 'status_code' => 0] ) }}" class="btn btn-danger" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>
                                            </a>
                                        </div>
                                        @else

                                        <div class="btn-group">
                                            <a href="{{ route('up-status-user', ['user_id' => $item->id, 'status_code' => 1] ) }}" class="btn btn-success" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                            </a>
                                        </div>

                                        @endif




                                    {{-- <a class="flex items-center mr-3" href="{{route('edit-cust')}}">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a> --}}
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
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
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" data-tw-dismiss="modal" class="btn btn-danger w-24 mr-1">Delete</button>

                        {{-- <form action="{{ route('delete-cust') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-24">Delete</button>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
@endsection
