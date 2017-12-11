@php 
    $items = DB::table('products')->get();
@endphp
<div class="container">
    <!-- Section Title Row Start -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="section-title" style="margin-bottom: 15px;">
                <h3>{{ trans('products.title') }}</h3>
                <div class="header-text">
                <a type="button" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">{{ trans('products.comments') }}</a>
                </div>

            </div>
            <div class="collapse" id="collapseExample">
                <div class="well">
                    <h4>{{ trans('products.smoke') }}</h4>
                    <p>{{ trans('products.smoke-text') }}</p>
                    <hr>
                    <h4>{{ trans('products.iron') }}</h4>
                    <p>{{ trans('products.iron-text') }}</p> <hr>
                    <h4>{{ trans('products.services') }}</h4>
                    <p>{{ trans('products.services-text') }}</p>
                </div>
            </div>
        </div>
    </div> <!-- End of Section Title Row -->
    <!-- Portfolio Filter Row Start -->
    <div class="row">
        <div class="col-md-12">
            <!-- Portfolio Filter Start -->
            <div class="portfolio-filter text-center">
                <ul class="nav">
                    <li class="active" data-filter=".fustcso" >{{ trans('products.smoke') }}</li>
                    <li data-filter=".other">{{ trans('products.other') }}</li>
                    <li data-filter=".vasudvar">{{ trans('products.iron') }}</li>
                    <li data-filter=".services">{{ trans('products.services') }}</li>
                </ul>
            </div> <!-- End of Portfolio Filter -->
        </div>
    </div>     <!-- Portfolio Items Row Start -->
    <div class="row">
        <div class="col-md-12">
            <!-- Portfolio Items Start -->
            <div class="porfolio-items">
                <!-- Single Portflio 1 Start -->
                @foreach($items as $item)
                    <div class="single-porfolio white-space {{ $item->type }}" style="background: #fff;">
                        <div class="img text-center">
                            <img class="img-responsive" src="{{ $item->img_path }}" alt="{{ $item->title }}">
                            <div class="porto-overlay"></div>
                            <div class="porto-body">
                                <div class="porto-text">
                                    <h4>{!! $item->title !!}</h4>
                                </div>
                                <div class="porto-icon">
                                    <a href="{{ $item->img_path }}" data-lightbox="roadtrip" data-title="{{ $item->title }}">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                    @if ($item->type != 'services')
                                        <a href="{{ $item->webshop_link }}" target="_blank">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div> <!-- End of Single Portflio 1 -->
                @endforeach
            </div> <!-- End of Portfolio Items -->
        </div>
    </div> <!-- End of Portfolio Items Row -->
</div> <!-- End of Container -->

