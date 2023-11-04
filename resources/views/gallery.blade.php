<!--/**-->
<!--* Created by atom.-->
<!--* User: RPJ-->
<!--* Date: 1/21/2021-->
<!--* Time: 03:13 PM-->
<!--*/-->
@extends('layouts.user_layout.layout')
@section('content')
<!-- require 'user_layout/header.php'; -->


<header id="head" class="secondary">
    <div class="container">
        <h1>Gallery</h1>
    </div>
</header>


<!-- container -->
<section class="container">
    <div class="row">
        <div class="col-md-12">
            <section id="portfolio" class="page-section section appear clearfix">
                <br />
                <br />
                <div class="row">
                    <nav id="filter" class="col-md-12 text-center">

                        <ul>
                            <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                            <!-- <li><a href="#" class="btn-theme btn-small" data-filter=".picturelibrary">Picture
                                    Library</a></li>
                            <li><a href="#" class="btn-theme btn-small" data-filter=".videolibrary">Video Library</a>
                            </li> -->
                            @foreach($gallery as $key => $value)
                            <li><a href="#" class="btn-theme btn-small"
                                    data-filter=".{{ $key }}">{{ $value->title }}</a></li>
                            @endforeach
                        </ul>

                    </nav>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="portfolio-items isotopeWrapper clearfix" id="3">

                                @foreach($gallery as $key => $value)
                                @foreach($value->gallery_details as $item)
                                <article class="col-sm-4 isotopeItem {{ $key }}">
                                    <div class="portfolio-item">
                                        <img src="{{ asset('images/gallery-images/' . $item->image) }}" alt="" />
                                        <!-- Additional content for the article can be added here -->
                                    </div>
                                </article>
                                @endforeach
                                @endforeach

                                <!-- <article class="col-sm-4 isotopeItem picturelibrary">
                                    <div class="portfolio-item">
                                        <img src="user_assets/images/portfolio/img1.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <a href="assets/images/portfolio/img1.jpg" class="fancybox">
                                                    <h5>Project Title</h5>
                                                    <i class="fa fa-link fa-2x"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-sm-4 isotopeItem videolibrary">
                                    <div class="portfolio-item">
                                        <img src="user_assets/images/portfolio/img2.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <a href="assets/images/portfolio/img2.jpg" class="fancybox">
                                                    <h5>Project Title</h5>
                                                    <i class="fa fa-link fa-2x"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article> -->



                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</section>
<!-- /container -->
<!-- require 'user_layout/footer.php'; -->
@endsection
