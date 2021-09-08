<div class="row">
    <div class="col-12">
        <!-- Contact Header -->
        <div class="project-header d-flex align-items-md-center media flex-column flex-md-row bg-white mb-30">
            <div class="project-header-left media-body d-flex align-items-center w-100 mr-md-4">

                <!-- Dropdown Button -->
                <div class="dropdown-button">
                    <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                        <div class="menu-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#">Daily</a>
                        <a href="#">Sort By</a>
                        <a href="#">Monthly</a>
                    </div>
                </div>
                <!-- End Dropdown Button -->

                <!-- Add New Contact Btn -->
                <div class="add-new-contact mr-20">
                    <a href="{{ route('projects.index') }}" class="btn-home">
                        <img src="{{ asset('assets/front/img/svg/calender-color.svg') }}" alt=""
                            class="svg">
                    </a>
                </div>
                <!-- End Add New Contact Btn -->

                <!-- Starred -->
                <div class="star mr-20">
                    <a href="#"><img src="{{ asset('assets/front/img/svg/star.svg') }}" alt=""
                            class="svg"></a>
                </div>
                <!-- End Starred -->

                <!-- Title -->
                <div class="title">
                    <h4 class="font-20">{{ $project->title }}</h4>
                </div>
                <!-- End Title -->
            </div>

            <div class="project-header-right d-flex align-items-center justify-content-md-end flex-wrap mt-3 mt-md-0">
                <!-- Main Header Notification -->
                <div class="main-header-notification mb-2 mb-sm-0">
                    <a href="#" class="header-icon notification-icon">
                        <span class="count"
                            data-bg-img="{{ asset('assets/front/img/count-bg.png') }}">4</span>
                        <img src="{{ asset('assets/front/img/svg/notification-icon.svg') }}" alt=""
                            class="svg">
                    </a>
                </div>
                <!-- End Main Header Notification -->

                <!-- Member -->
                <div class="member style--two d-flex mb-2 mb-sm-0">
                    <a href="#"><img src="{{ asset('assets/front/img/avatar/m27.png') }}" alt=""></a>
                    {{-- <a href="#"><img src="{{ asset('assets/front/img/avatar/m12.png') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/front/img/avatar/m2.png') }}" alt=""></a> --}}
                    <button class="btn-circle task-header" onclick="myfun()">
                        <img src="{{ asset('assets/front/img/svg/plus_white.svg') }}" alt="" class="svg">
                    </button>
                </div>
                {{-- Start Pop-up --}}
                <div id="projectMemberModal" class="add-display"
                    style="display: hidden; left: calc(100% - 350px); top: 180px;">
                    <!-- Modal Content -->
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header justify-content-center pt-0">
                            <!-- Cover -->
                            <h6 class="title text_color">Members</h6>
                            <!-- End Cover -->

                            <!-- Modal Close -->
                            <div class="modal-close">
                                <img src="../../../assets/img/svg/close.svg" alt="" class="svg">
                            </div>
                            <!-- End Modal Close -->
                        </div>
                        <!-- End Modal Header -->

                        <!-- Modal Body -->
                        <div class="modal-body p-0">
                            <!-- Search Form -->
                            <form action="{{ route('') }}" method="POST" class="search-form mb-3">
                                @csrf
                                <input type="search" name="user_name" class="theme-input-style"
                                    placeholder="Search Members">
                            </form>
                            <!-- End Search Form -->

                            <h6 class="mb-2 text_color">Board Members</h6>
                            <ul class="board-members-list list-unstyled mb-2">
                                <li class="member-item selected">
                                    <a class="name select-member d-flex align-items-center p-1" href="#"
                                        title="Timothy Littel">
                                        <span class="member" title="Timothy Littel">
                                            <img src="../../../assets/img/avatar/m4.png" class="img-30 mr-2" alt="">
                                        </span>
                                        <span class="full-name">Timothy Littel</span>

                                        <span class="icon-check checked-icon"></span>
                                    </a>
                                </li>

                                <li class="member-item">
                                    <a class="name select-member d-flex align-items-center p-1" href="#"
                                        title="Ripon Hossain Chopol">
                                        <span class="member" title="Ripon Hossain Chopol">
                                            <img src="../../../assets/img/avatar/m5.png" class="img-30 mr-2" alt="">
                                        </span>
                                        <span class="full-name">Ripon Hossain Chopol</span>

                                        <span class="icon-check checked-icon"></span>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="light-btn d-block text-center">Show other Team Members</a>
                        </div>
                        <!-- End Modal Body -->

                    </div>
                    <!-- End Modal Content -->
                </div>
                {{-- End Pop-up --}}
                <!-- End Member -->

                <!-- Create New Board -->
                {{-- <div class="create-new-board mb-2 mb-sm-0">
                    <a href="#" class="btn">Create New Board</a>
                </div> --}}
                <!-- End Create New Board -->
            </div>
        </div>
        <!-- End Contact Header -->
    </div>
</div>
<script>
    var flag = true;

    function myfun() {
        if (flag) {
            document.querySelector('.add-display').style.display = 'block'
        } else {
            document.querySelector('.add-display').style.display = 'none'

        }
        flag = !flag;
    }
</script>
