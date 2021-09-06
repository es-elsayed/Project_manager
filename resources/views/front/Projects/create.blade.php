@extends('layouts.site')
@section('content')
    @include('front.Projects.includes.create_middlebar')
    <div class="board-wrapper">
        <!-- Board -->
        <div class="board">
            <!-- Board Header -->
            <div class="board-header d-flex justify-content-between align-items-center mb-10">
                <h4 class="c2">Things To Do</h4>

                <!-- Dropdown Button -->
                <div class="dropdown-button">
                    <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                        <div class="menu-icon justify-content-center style--two mr-0">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#">Daily</a>
                        <a href="#">Sort By</a>
                        <a href="#">Monthly</a>
                    </div>
                </div>
                <!-- End Dropdown Button -->
            </div>
            <!-- End Board Header -->

            <!-- Boards Cards -->
            <div class="board-cards"></div>
            <!-- End Boards Cards -->

            <!-- Board Composer -->
            <div class="board-composer flex-column d-flex align-items-center justify-content-center">
                <a href="#" class="add-another-card">
                    <img src="{{ asset('assets/front/img/svg/plus.svg') }}" alt="" class="svg mr-1">
                    <span class="font-14 bold c4">Add another card</span>
                </a>

                {{-- <div class="add-card w-100">
                    <form action="#" method="POST">
                        <textarea class="theme-input-style style--five" placeholder="List Title"></textarea>

                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="date d-flex align-items-center">
                                <img src="{{ asset('assets/front/img/svg/watch.svg') }}" alt="" class="svg mr-1">
                                <span class="date-text">16 May 2020</span>
                            </div>

                            <div class="actions">
                                <a href="#" class="cancel font-14 bold mr-3"> Cancel </a>
                                <a href="#" class="btn save"> Save </a>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
            <!-- End Board Composer -->
        </div>

        <!-- Board -->
        <div class="board w-100">
            <!-- Board Composer -->
            <div class="board-composer flex-column d-flex justify-content-center">
                <a href="#" class="add-another-card board-list style--two align-items-center">
                    <div class="btn-circle style--three mr-2">
                        <img src="{{ asset('assets/front/img/svg/plus_white.svg') }}" alt="" class="svg">
                    </div>

                    <h4 class="c4">Add another list</h4>
                </a>

                <div class="add-card add-another-list">
                    <form action="#">
                        <input type="text" class="theme-input-style" placeholder="List Title">
                    </form>
                </div>
            </div>
            <!-- End Board Composer -->
        </div>
        <!-- End Board -->
    </div>
@endsection
