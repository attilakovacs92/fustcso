<div class="about-us" id="about" style="background-image: url('/img/bg-logo.png'); background-repeat: no-repeat; background-attachment: fixed;  background-position: center; padding-bottom: 70px; margin-bottom: 0px;">
    <div class="container">
        <div class="row">
            {{--iv class="col-md-3 col-md-offset-1 col-sm-4 col-xs-12">--}}
                {{--<div class="">--}}
                    {{--<img src="img/logo.jpg" alt="about image">--}}
                {{--</div>--}}
                {{--<div class="img-content text-center">--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-content" style="color: black; text-align: center; font-size: 15px;">
                    <h3>{{ trans('about.title') }}</h3>
                    <p>{{ trans('about.text') }}</p>
                    <hr>
                    <h4><strong>{{ trans('about.info') }}</strong></h4>
                   <p>{{ trans('about.info-text') }}</p>
                    <a class="center" type="button" data-toggle="modal" data-target="#myModal">{{ trans('about.certification') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tanúsítványaink</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-6"><img src="img/tanusitvanyok/tanusitvany1.jpg" alt=""></div>
              <div class="col-md-6"><img src="img/tanusitvanyok/tanusitvany2.jpg" alt=""></div>
              <div class="col-md-6"><img src="img/tanusitvanyok/tanusitvany3.jpg" alt=""></div>
              <div class="col-md-6"><img src="img/tanusitvanyok/tanusitvany4.jpg" alt=""></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{--<div class="about-bottom">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-7">--}}
                {{--<div class="about-left">--}}
                    {{--<h3>További információk</h3>--}}
                    {{--<p> Hegesztő mérnökünk, technológusunk folyamatos ellenőrzése mellett folyik a gyártás.</p>--}}
                    {{--<p>Előnyünk a gyors pontos rugalmas munkavégzés. </p>--}}
                    {{--<p>Vizsgázott, minősített hegesztőink száma 10 fő.</p>--}}
                    {{--<p>A következő hegesztési eljárásokat alkalmazzuk: 135,141,142</p>--}}
                    {{--<p>Anyagcsoport: DC01, S235JR, S355J2+N, 1.4301, 1.4404</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-5">--}}
                {{--<div class="about-right">--}}
                    {{--<h6>Telephelyünkön a következő gépek segítségével tudjuk kielégíteni megrendelőink igényeit:</h6>--}}
                    {{--<br>--}}
                    {{--<ul>--}}
                        {{--<li>Él hajlító (befogadás 4000 mm-ig)</li>--}}
                        {{--<li>Lángvágó (asztal méret: 6000 x 2000 mm)</li>--}}
                        {{--<li>Lemezolló (maximális vágási méret: 3000 mm)</li>--}}
                        {{--<li>Lézervágó asztal (munkaterület: 3000 x 1500 mm)</li>--}}
                        {{--<li>Porfestő (szélesség:1500 mm, magasság:1800 mm, hosszúság:3000 mm)</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

