@php
    use App\Models\Profile;
@endphp
<!-- BEGIN: Top Bar -->
<div class="border-b border-white/[0.08] -mt-10 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
    <div class="top-bar-boxed flex items-center mt-2">
        <!-- BEGIN: Logo -->
        <a href="" class="-intro-x hidden md:flex">
            <img alt="Rubick Tailwind HTML Admin Template" class="w-20" src="{{ asset('dist/pbflogo.png') }}">
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
            <ol class="breadcrumb breadcrumb-light">
                <li class="breadcrumb-item"><a href="#">MYPBF</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ Str::title($title) }}</li>
            </ol>
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        {{-- <div class="intro-x relative mr-3 sm:mr-6">
            <div class="search hidden sm:block">
                <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                <i data-feather="search" class="search__icon dark:text-slate-500"></i>
            </div>
            <a class="notification notification--light sm:hidden" href=""> <i data-feather="search"
                    class="notification__icon dark:text-slate-500"></i> </a>
            <div class="search-result">
                <div class="search-result__content">
                    <div class="search-result__content__title">Pages</div>
                    <div class="mb-5">
                        <a href="" class="flex items-center">
                            <div
                                class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full">
                                <i class="w-4 h-4" data-feather="inbox"></i>
                            </div>
                            <div class="ml-3">Mail Settings</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div
                                class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full">
                                <i class="w-4 h-4" data-feather="users"></i>
                            </div>
                            <div class="ml-3">Users & Permissions</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div
                                class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full">
                                <i class="w-4 h-4" data-feather="credit-card"></i>
                            </div>
                            <div class="ml-3">Transactions Report</div>
                        </a>
                    </div>
                    <div class="search-result__content__title">Users</div>
                    <div class="mb-5">
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-6.jpg">
                            </div>
                            <div class="ml-3">Johnny Depp</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                johnnydepp@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-6.jpg">
                            </div>
                            <div class="ml-3">Denzel Washington</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                denzelwashington@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-13.jpg">
                            </div>
                            <div class="ml-3">Denzel Washington</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                denzelwashington@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-11.jpg">
                            </div>
                            <div class="ml-3">Brad Pitt</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                bradpitt@left4code.com</div>
                        </a>
                    </div>
                    <div class="search-result__content__title">Products</div>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/preview-3.jpg">
                        </div>
                        <div class="ml-3">Sony Master Series A9G</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/preview-9.jpg">
                        </div>
                        <div class="ml-3">Dell XPS 13</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/preview-10.jpg">
                        </div>
                        <div class="ml-3">Apple MacBook Pro 13</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/preview-10.jpg">
                        </div>
                        <div class="ml-3">Nikon Z6</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                    </a>
                </div>
            </div>
        </div> --}}
        <!-- END: Search -->
        <!-- BEGIN: Notifications -->
        {{-- <div class="intro-x dropdown mr-4 sm:mr-6">
            <div class="dropdown-toggle notification notification--light notification--bullet cursor-pointer"
                role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="bell"
                    class="notification__icon dark:text-slate-500"></i> </div>
            <div class="notification-content pt-2 dropdown-menu">
                <div class="notification-content__box dropdown-content">
                    <div class="notification-content__title">Notifications</div>
                    <div class="cursor-pointer relative flex items-center ">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/profile-6.jpg">
                            <div
                                class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of
                                passages of Lorem Ipsum available, but the majority have suffered alteration in some
                                form, by injected humour, or randomi</div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/profile-6.jpg">
                            <div
                                class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">03:20 PM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a
                                reader will be distracted by the readable content of a page when looking at its
                                layout. The point of using Lorem </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/profile-13.jpg">
                            <div
                                class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of
                                passages of Lorem Ipsum available, but the majority have suffered alteration in some
                                form, by injected humour, or randomi</div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/profile-11.jpg">
                            <div
                                class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Brad Pitt</a>
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a
                                reader will be distracted by the readable content of a page when looking at its
                                layout. The point of using Lorem </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/profile-11.jpg">
                            <div
                                class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Christian Bale</a>
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of
                                passages of Lorem Ipsum available, but the majority have suffered alteration in some
                                form, by injected humour, or randomi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Profile"
                    src="@if (Profile::where('id_user', Auth::user()->id_perusahaan)->first()->logo_perusahaan) {{ url('storage/logo_perusahaan/' . Profile::where('id_user', Auth::user()->id_perusahaan)->first()->logo_perusahaan) }}@else {{ url('dist/images/belum_tersedia.jpg') }} @endif">
            </div>
            <div class="dropdown-menu w-56">
                <ul
                    class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">{{ Auth::user()->name }}</div>
                        <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">DevOps Engineer</div>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="/profile-perusahaan" class="dropdown-item hover:bg-white/5"> <i data-feather="user"
                                class="w-4 h-4 mr-2"></i> Profile </a>
                    </li>
                    <li>
                        <a href="/set-user" class="dropdown-item hover:bg-white/5"> <i data-feather="edit"
                                class="w-4 h-4 mr-2"></i> Add Account </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item hover:bg-white/5"> <i
                                    data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
<!-- END: Top Bar -->
