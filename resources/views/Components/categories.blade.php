<!-- Categories Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
        <div class="row g-4">
            @foreach ($categories as $category)
                <x-category :$category />
            @endforeach
        </div>
    </div>
</div>
<!-- Categories End -->