@extends('layouts.site')
@section('content')
    @include('front.Projects.Tasks.includes.tasks-header')
    <div class="board-wrapper">
        <!-- Board -->
        @foreach ($tasks as $task)
            <div class="board">
                <!-- Board Header -->
                <div class="board-header d-flex justify-content-between align-items-center mb-10">
                    <h4 class="c2">{{ $task->title }}</h4>

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
                {{-- ******** task card ********* --}}

                @foreach ($cards as $card)
                    @if ($task->id == $card->task_id)
                        <div class="board-cards ui-sortable">
                            <div class="board-card">
                                <p class=" black mb-2">{{ $card->title }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="left d-flex align-items-center"><img
                                            src="{{ asset('assets/front/img/svg/watch.svg') }}" alt=""
                                            class="svg mr-1"><a href="#"
                                            class="text_color font-12">{{ $card->created_at }}</a>
                                    </div>
                                </div>
                            </div>
                            <span>{{ $card->priority }}</span>
                        </div>


                    @endif
                @endforeach
                {{-- ******** task card ********* --}}
                <!-- End Boards Cards -->

                <!-- Board Composer -->
                <div class="board-composer flex-column d-flex align-items-center justify-content-center">
                    <a href="#" style="display:flex;" class="add-another-card {{ 'hide_a' . $task->id }}"
                        onclick="document.querySelector('.{{ 'add_card' . $task->id }}').hidden=false;
                                                                                                                                                                                                                    document.querySelector('.{{ 'hide_a' . $task->id }}').style.display='none';">
                        <img src="{{ asset('/assets/front/img/svg/plus.svg') }}" alt="" class="svg mr-1">
                        <span class="font-14 bold c4">Add another card</span>
                    </a>
                    <div class="add-card {{ 'add_card' . $task->id }} w-100" hidden="true">
                        <form
                            action="{{ route('projects.tasks.card.store', ['pid' => $project->id, 'tid' => $task->id]) }}"
                            method="POST">
                            @csrf
                            <textarea class="theme-input-style style--five" name="card_title"
                                placeholder="List Title"></textarea>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <select name="priority" class="form-control w-50 d-flex" id="">
                                    <option value="#67cf94">normal</option>
                                    <option value="#FFB959">Important</option>
                                    <option value="#FC7383">urgent</option>
                                </select>
                                {{-- <div class="date d-flex align-items-center">
                                    <img src="{{ asset('/assets/front/img/svg/watch.svg') }}" alt=""
                                        class="svg mr-1">
                                    <span class="date-text">16 May 2020</span>
                                </div> --}}

                                <div class="actions">
                                    <a class="cancel font-14 bold mr-3"
                                        onclick="document.querySelector('.{{ 'add_card' . $task->id }}').hidden=true;
                                                                                                                                                                                document.querySelector('.{{ 'hide_a' . $task->id }}').style.display='flex';">
                                        Cancel
                                    </a>
                                    <button type="submit" class="btn save"> Save </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Board Composer -->
            </div>
        @endforeach

        <!-- End Board -->

        <!-- Doing Board -->
        {{-- <div class="board">
            <!-- Board Header -->
            <div class="board-header d-flex justify-content-between align-items-center mb-10">
                <h4 class="c2">Doing</h4>

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
                    <img src="{{ asset('/assets/front/img/svg/plus.svg') }}" alt="" class="svg mr-1">
                    <span class="font-14 bold c4">Add another card</span>
                </a>

                <div class="add-card w-100">
                    <form action="#">
                        <textarea class="theme-input-style style--five" placeholder="List Title"></textarea>

                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="date d-flex align-items-center">
                                <img src="{{ asset('/assets/front/img/svg/watch.svg') }}" alt="" class="svg mr-1">
                                <span class="date-text">16 May 2020</span>
                            </div>

                            <div class="actions">
                                <a href="#" class="cancel font-14 bold mr-3"> Cancel </a>
                                <a href="#" class="btn save"> Save </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Board Composer -->
        </div> --}}
        <!-- End Board -->

        <!-- Done Board -->
        {{-- <div class="board">
            <!-- Board Header -->
            <div class="board-header d-flex justify-content-between align-items-center mb-10">
                <h4 class="c2">Done</h4>

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
                    <img src="{{ asset('/assets/front/img/svg/plus.svg') }}" alt="" class="svg mr-1">
                    <span class="font-14 bold c4">Add another card</span>
                </a>

                <div class="add-card w-100">
                    <form action="#">
                        <textarea class="theme-input-style style--five" placeholder="List Title"></textarea>

                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="date d-flex align-items-center">
                                <img src="{{ asset('/assets/front/img/svg/watch.svg') }}" alt="" class="svg mr-1">
                                <span class="date-text">16 May 2020</span>
                            </div>

                            <div class="actions">
                                <a href="#" class="cancel font-14 bold mr-3"> Cancel </a>
                                <a href="#" class="btn save"> Save </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Board Composer -->
        </div> --}}
        <!-- End Board -->

        <!-- Board -->
        <div class="board w-100">
            <!-- Board Composer -->
            <div class="board-composer flex-column d-flex justify-content-center">
                <a href="#" class="add-another-card board-list style--two align-items-center">
                    <div class="btn-circle style--three mr-2">
                        <img src="{{ asset('/assets/front/img/svg/plus_white.svg') }}" alt="" class="svg">
                    </div>

                    <h4 class="c4">Add another list</h4>
                </a>

                <div class="add-card add-another-list">
                    <form method="POST" action="{{ route('projects.tasks.store', ['pid' => $project->id]) }}">
                        @csrf
                        <input type="text" class="theme-input-style" name="task_title" placeholder="List Title">
                    </form>
                </div>
            </div>
            <!-- End Board Composer -->
        </div>
        <!-- End Board -->
    </div>
@endsection
