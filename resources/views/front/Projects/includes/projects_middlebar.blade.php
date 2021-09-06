<div class="col-12">
    <!-- Contact Header -->
    <div class="project-header d-flex align-items-sm-center media flex-column flex-sm-row bg-white mb-30">
        <div class="project-header-left media-body d-flex align-items-center w-100 mr-sm-4">
            <!-- Add New Contact Btn -->
            <div class="add-new-contact mr-20">
                <a href="{{ route('projects.create') }}" class="btn-circle">
                    <img src="{{ asset('assets/front/img/svg/plus_white.svg') }}" alt="" class="svg">
                </a>
            </div>
            <!-- End Add New Contact Btn -->

            <!-- Search Form -->
            <form action="#" class="search-form flex-grow">
                <div class="theme-input-group style--two">
                    <input type="text" class="theme-input-style" placeholder="Search Here">

                    <button type="submit"><img src="{{ asset('assets/front/img/svg/search-icon.svg') }}" alt=""
                            class="svg"></button>
                </div>
            </form>
            <!-- End Search Form -->
        </div>

        <div class="project-header-right d-flex align-items-center justify-content-end mt-3 mt-sm-0">
            <!-- Custom Checkbox -->
            <label class="custom-checkbox position-relative">
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <!-- End Custom Checkbox -->

            <!-- Starred -->
            <div class="star">
                <a href="#"><img src="{{ asset('assets/front/img/svg/star.svg') }}" alt="" class="svg"></a>
            </div>
            <!-- End Starred -->

            <!-- Delete Mail -->
            <div class="delete_mail">
                <a href="#"><img src="{{ asset('assets/front/img/svg/delete.svg') }}" alt=""
                        class="svg"></a>
            </div>
            <!-- End Delete Mail -->
        </div>
    </div>
    <!-- End Contact Header -->
</div>
