@php 
    $items = DB::table('products')->get();
@endphp
<div class="container">
    <!-- Section Title Row Start -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="section-title" style="margin-bottom: 15px;">
                <h3>Termékek & Szolgáltatások</h3>
                <div class="header-text">
                <a type="button" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Megjegyzések</a>
                </div>

            </div>
            <div class="collapse" id="collapseExample">
                <div class="well">
                    <h4>Füstcső</h4>
                    <p>Az általunk gyártott vastagfalú acél füstcsöveket különböző  szabványméretekben 250 mm-1000mm hosszúságban, illteve könyökidomainkat 45° és 90° fokos változatban 2 féle (szürke, fekete) színben  tudjuk kínálni. A füstcsövek falvastagsága 1,5 mm-2,0mm között változhat. Füstcsöveink megfelelnek az Uniós szabványoknak.</p>
                    <hr>
                    <h4>Vasudvar</h4>
                    <p>Vasáruinkat e-mailben vagy telefonon (korosszerkezt@gmail.com, 0630/303-7097) tudja megrendelni, mely telephelyünkön személyesen átvehető illetve igény szerint 30 km-es körzetben térítés ellenében kiszállítjuk.</p> <hr>
                    <h4>Szolgáltatásaink</h4>
                    <p>Cégünk több éves tapasztalat birtokában széleskörű szolgáltatást nyújt a lemezmegmunkálás terén. Különböző egyedi gyártású gépek gyártását, gyártmánytervezését kínáljuk meglévő és új ügyfeleink számára a legkorszerűbb technológiák használatával.</p>
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
                    <li class="active" data-filter=".fustcso" >Füstcső</li>
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

