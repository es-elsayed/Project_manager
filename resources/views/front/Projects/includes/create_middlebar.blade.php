<div class="row">
    <div class="col-12">
        <!-- Contact Header -->
        <div class="project-header d-flex align-items-md-center media flex-column flex-md-row bg-white mb-30">
            <div class="project-header-left media-body d-flex align-items-center w-100 mr-md-4">

                <!-- Add New Contact Btn -->
                <div class="add-new-contact mr-20">
                    <a href="{{ route('home') }}" class="btn-home">
                        <img src="{{ asset('assets/front/img/svg/home.svg') }}" alt="" class="svg">
                    </a>
                </div>
                <!-- End Add New Contact Btn -->

                <!-- Starred -->
                <div class="star mr-20">
                    <a href="#"><img src="{{ asset('assets/front/img/svg/star.svg') }}" alt=""
                            class="svg"></a>
                </div>
                <!-- End Starred -->

                <!-- Add Title -->
                <form method="POST" action="{{ route('projects.store') }}" class="add-title flex-grow">
                    @csrf
                    <input type="text" class="theme-input-style w-75 bold" name="project_title"
                        placeholder="Project title">
                    <input type="submit" value="Save Project" class="btn">
                </form>
                <!-- End Add Title -->
            </div>

            <div class="project-header-right d-flex align-items-center justify-content-md-end flex-wrap mt-3 mt-md-0">

                <!-- Member -->
                <div class="member style--two d-flex mb-2 mb-sm-0">
                    <a href="#"><img src="{{ asset('assets/front/img/avatar/m2.png') }}" alt=""></a>
                    <a href="#" class="btn-circle">
                        <img src="{{ asset('assets/front/img/svg/plus_white.svg') }}" alt="" class="svg">
                    </a>
                </div>
                <!-- End Member -->

                <!-- Create New Board -->
                {{-- <div class="create-new-board mb-2 mb-sm-0">
                    <a href="{{ route('projects.store') }}" class="btn">Save Project</a>
                </div> --}}
                <!-- End Create New Board -->

                <!-- Board Close -->
                <div class="___class_+?17___">
                    <a href="#" class="close-btn d-flex align-items-center justify-content-center">
                        <i class="icofont-close-line"></i>
                    </a>
                </div>
                <!-- End Attachment Close -->
            </div>
        </div>
        <!-- End Board Header -->
    </div>
</div>
