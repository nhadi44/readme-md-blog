<div class="row align-items-center justify-content-between d-sm-flex post_wrapper">
    <div class="col-md-6">
        <div class="d-flex align-items-center gap-2 mb-3">
            <img src="/assets/images/avatar.svg" alt="profile-avatar" class="profile-avatar-post">
            <h6 class="m-0 post_profile_name">{{ $post_profile_name }}</h6>
        </div>
        <h5 class="post_title">
            {{ $post_title }}
        </h5>
        <h6 class="text-muted post_description mb-3 d-none d-sm-block">
            {{ $post_description }}
        </h6>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-2">
                <small class="text-muted post_date">{{ $post_date }}</small>
                <i class="fa-solid fa-circle text-muted" style="font-size: 4px"></i>
                <small class="text-muted post_category">{{ $post_category }}</small>
            </div>
            <div>
                <button class="btn_bookmark">
                    <i class="fa-regular fa-bookmark"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-flex justify-content-end mt-3">
        <img src="{{ $image_url }}" alt="" class="post_image">
    </div>
</div>
