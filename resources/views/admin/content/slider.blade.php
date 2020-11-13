<a href="{{route('adminSliderUpdate')}}" class="btn btn-success">Редактировать слайдер</a>
<hr>

@if(!empty($slider[0]))
    <section class="slider">
        <div class="container">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @for($i=0; $i<count($slider); $i++)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"
                                @if($i==0)
                                class="active"
                                    @endif
                            ></li>
                        @endfor
                    </ol>
                    <div class="carousel-inner">
                        @for($i=0; $i<count($slider); $i++)
                            <div class="carousel-item
@if($i==0)
                                    active
@endif
                                    ">
                                <img class="d-block w-100" src="/uploads/slider/{{$slider[$i]->imglink}}" alt="{{$slider[$i]->alttext}}">
                            </div>
                        @endfor
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@else
    <div class="alert alert-warning">У вас нет изображений в слайдере</div>
@endif
