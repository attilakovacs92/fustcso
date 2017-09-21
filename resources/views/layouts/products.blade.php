@php 
    $items = DB::table('products')->get();
@endphp
<div class="container">
    <!-- Section Title Row Start -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="section-title">
                <h3>Termékek & Szolgáltatások</h3>
                <p>Hegesztő mérnökünk, technológusunk folyamatos ellenőrzése mellett folyik a gyártás.</p>
            </div>
        </div>
    </div> <!-- End of Section Title Row -->
    <!-- Portfolio Filter Row Start -->
    <div class="row">
        <div class="col-md-12">
            <!-- Portfolio Filter Start -->
            <div class="portfolio-filter text-center">
                <ul class="nav">
                    <li class="active" data-filter=".fustcso">Füstcső</li>
                    <li data-filter=".other">Egyéb termékek</li>
                    <li data-filter=".vasudvar">Vasudvar</li>
                    <li data-filter=".services">Szolgáltatásaink</li>
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

