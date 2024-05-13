<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
    <a class="cat-item rounded p-4" href="{{ route('category_show', ['category' => $category->name]) }}">
        <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
        <h6 class="mb-3">{{ $category->name }}</h6>
        <p class="mb-0">{{ $category->jobs->count() }} Vacancies</p>
    </a>
</div>