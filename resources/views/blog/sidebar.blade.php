<div class="uk-width-expand@m">
    <!-- widget content begin -->
    <aside class="uk-margin-medium-bottom">
        <form class="uk-search uk-search-default uk-width-1-1">
            <a href="#" class="uk-search-icon-flip" data-uk-search-icon></a>
            <input class="uk-input uk-border-pill" type="search" placeholder="Search here...">
        </form>
    </aside>
    <!-- widget content end -->
    <!-- widget content begin -->
    <aside class="uk-margin-medium-bottom">
        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
            <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Categories</h5>
            <ul class="uk-list in-widget-category">
                <?php $Categories = DB::table('categories')->limit(10)->get(); ?>
                @foreach ($Categories as $Cat)
                <li><a href="{{url('/')}}/articles/category/{{$Cat->slung}}">{{$Cat->title}}<span class="uk-label uk-label-success uk-border-pill uk-float-right"><?php echo count($Blogs = DB::table('blogs')->where('category',$Cat->id)->get()) ?></span></a></li>
                @endforeach
            </ul>
        </div>
    </aside>
    <!-- widget content end -->
    <?php $popular = DB::table('blogs')->inRandomOrder()->limit('10')->get(); ?>
    <!-- widget content begin -->
    <aside class="uk-margin-medium-bottom">
        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
            <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Popular</h5>
            <ul class="uk-list in-widget-popular">
                @foreach ($popular as $popular)
                <li>
                    <div class="uk-grid-collapse uk-flex uk-flex-middle" data-uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-border-rounded" src="{{url('/')}}/uploads/blogs/{{$popular->image_one}}" alt="{{$popular->title}}" width="84" height="74">
                        </div>
                        <div class="uk-width-expand uk-margin-left">
                            <a href="{{url('/')}}/articles/{{$popular->slung}}">{{$popular->title}}
                                <span class="uk-article-meta uk-text-small"><br><i class="fas fa-clock fa-sm uk-margin-small-right"></i>
                                    <?php 
                                        $RawDate = $popular->created_at;
                                        $FormatDate = strtotime($RawDate);
                                        $Month = date('M',$FormatDate);
                                        $Date = date('D',$FormatDate);
                                        $date = date('d',$FormatDate);
                                        $Year = date('Y',$FormatDate);
                                    ?>
                                    {{$Date}} {{$Month}} {{$date}}, {{$Year}}
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </aside>
    <!-- widget content end -->
    <!-- widget content begin -->
    <aside class="uk-margin-medium-bottom">
        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
            <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Tags</h5>
            <div class="uk-margin-top in-widget-tag">
                <a href="#"><span class="uk-label uk-border-pill">Asia</span></a>
                <a href="#"><span class="uk-label uk-border-pill">Business</span></a>
                <a href="#"><span class="uk-label uk-border-pill">Startups</span></a>
                <a href="#"><span class="uk-label uk-border-pill">Automotive</span></a>
                <a href="#"><span class="uk-label uk-border-pill">Travels</span></a>
                <a href="#"><span class="uk-label uk-border-pill">Marketing</span></a>
                <a href="#"><span class="uk-label uk-border-pill">Technology</span></a>
                <a href="#"><span class="uk-label uk-border-pill">Politics</span></a>
            </div>
        </div>
    </aside>
    <!-- widget content end -->
</div>