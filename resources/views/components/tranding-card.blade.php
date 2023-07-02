<div class="d-flex gap-2">
    <h3 class="mt-2 tranding_number_text">{{ $trending_number }}</h3>
    <a href="#" class="text-decoration-none w-100">
        <div class="card">
            <div class="card-body overflow-hidden whitespace-nowrap trending_card">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img src="/assets/images/avatar.svg" alt="profile-avatar" class="profile-avatar">
                    <h6 class="m-0 trending_profile">{{ $trending_profile }}</h6>
                </div>
                <h5 class="tranding_title mb-2">
                    {{ $trending_title }}
                </h5>
                <div class="d-flex align-items-center gap-2 ">
                    <small class="text-muted trending_date">{{ $trending_date }}</small>
                    <i class="fa-solid fa-circle text-muted" style="font-size: 4px"></i>
                    <small class="text-muted trending_category">{{ $trending_category }}</small>
                </div>
            </div>
        </div>
    </a>
</div>
