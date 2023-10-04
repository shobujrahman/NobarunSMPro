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
        <h1>Administrative</h1>
    </div>
</header>


<!-- container -->
<section class="container">
    <div class="row">
        <br>
        <img src="user_assets/images/administrative.jpg" alt="" style="height: 460px;width: 1161px;">
    </div>

    <div class="row">

        <!-- main content -->
        <section class="col-sm-12 maincontent">

            <h3>Rules of the Organization</h3>

            <strong>01.</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos
                aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae
                soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
            <strong>02.</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos
                aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae
                soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
            <strong>03.</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos
                aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae
                soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
            <strong>04.</strong>
            <p>consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat
                consectetur quam aliquam!</p>
            <strong>05.</strong>
            <p>consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat
                consectetur quam aliquam!</p>
            <strong>06.</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos
                aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae
                soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
            <strong>07.</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos
                aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae
                soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
            <strong>08.</strong>
            <p>consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat
                consectetur quam aliquam!</p>
            <strong>09.</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos
                aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae
                soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
            <strong>10.</strong>
            <p>consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat
                consectetur quam aliquam!</p>

                <h3>Meet Our Committee</h3>
                <!-- <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p> -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <!-- Team Member -->
                        <div class="team-member">
                            <!-- Image Hover Block -->
                            <div class="member-img portfolio-item">
                                <!-- Image  -->
                                <img class="img-responsive" src="user_assets/images/photo-1.jpg" alt="">
                                <div class="portfolio-desc align-center">
												<div class="folio-info">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Details</button>
												</div>
											</div>
                            </div>
                            <!-- Member Details -->
                            <h4>John Doe</h4>
                            <!-- Designation -->
                            <span class="pos">CEO</span>
                            <!-- <div class="team-socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <!-- Team Member -->
                        <div class="team-member pDark">
                            <!-- Image Hover Block -->
                            <div class="member-img portfolio-item">
                                <!-- Image  -->
                                <img class="img-responsive" src="user_assets/images/photo-1.jpg" alt="">
                                <div class="portfolio-desc align-center">
												<div class="folio-info">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Details</button>
												</div>
											</div>
                            </div>
                            <!-- Member Details -->
                            <h4>Larry Doe</h4>
                            <!-- Designation -->
                            <span class="pos">Director</span>

                        </div>
                    </div>

                </div>

                <h3>Meet Our Current Governing Body</h3>
                <!-- <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p> -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <!-- Team Member -->
                        <div class="team-member">
                            <!-- Image Hover Block -->
                            <div class="member-img portfolio-item">
                                <!-- Image  -->
                                <img class="img-responsive" src="user_assets/images/photo-1.jpg" alt="">
                                <div class="portfolio-desc align-center">
												<div class="folio-info">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Details</button>
												</div>
											</div>
                            </div>
                            <!-- Member Details -->
                            <h4>John Doe</h4>
                            <!-- Designation -->
                            <span class="pos">CEO</span>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <!-- Team Member -->
                        <div class="team-member pDark">
                            <!-- Image Hover Block -->
                            <div class="member-img portfolio-item">
                                <!-- Image  -->
                                <img class="img-responsive" src="user_assets/images/photo-1.jpg" alt="">
                                <div class="portfolio-desc align-center">
												<div class="folio-info">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Details</button>
												</div>
											</div>
                            </div>
                            <!-- Member Details -->
                            <h4>Larry Doe</h4>
                            <!-- Designation -->
                            <span class="pos">Director</span>

                        </div>
                    </div>
                </div>

                <h3>Meet Our Heads of Institutions Received</h3>
                <!-- <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p> -->
                              <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <!-- Team Member -->
                                        <div class="team-member">
                                            <!-- Image Hover Block -->
                                            <div class="member-img portfolio-item">
                                <!-- Image  -->
                                <img class="img-responsive" src="user_assets/images/photo-1.jpg" alt="">
                                <div class="portfolio-desc align-center">
												<div class="folio-info">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Details</button>
												</div>
											</div>
                            </div>
                                            <!-- Member Details -->
                                            <h4>John Doe</h4>
                                            <!-- Designation -->
                                            <span class="pos">CEO</span>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <!-- Team Member -->
                                        <div class="team-member pDark">
                                            <!-- Image Hover Block -->
                                            <div class="member-img portfolio-item">
                                <!-- Image  -->
                                <img class="img-responsive" src="user_assets/images/photo-1.jpg" alt="">
                                <div class="portfolio-desc align-center">
												<div class="folio-info">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Details</button>
												</div>
											</div>
                            </div>
                                            <!-- Member Details -->
                                            <h4>Larry Doe</h4>
                                            <!-- Designation -->
                                            <span class="pos">Director</span>

                                        </div>
                                    </div>
                                </div>

                                <h3>Meet Our Teacher</h3>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p> -->
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <!-- Team Member -->
                                        <div class="team-member">
                                            <!-- Image Hover Block -->
                                            <div class="member-img portfolio-item">
                                <!-- Image  -->
                                <img class="img-responsive" src="user_assets/images/photo-1.jpg" alt="">
                                <div class="portfolio-desc align-center">
												<div class="folio-info">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Details</button>
												</div>
											</div>
                            </div>
                                            <!-- Member Details -->
                                            <h4>John Doe</h4>
                                            <!-- Designation -->
                                            <span class="pos">CEO</span>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <!-- Team Member -->
                                        <div class="team-member pDark">
                                            <!-- Image Hover Block -->
                                            <div class="member-img portfolio-item">
                                <!-- Image  -->
                                <img class="img-responsive" src="user_assets/images/photo-1.jpg" alt="">
                                <div class="portfolio-desc align-center">
												<div class="folio-info">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Details</button>
												</div>
											</div>
                            </div>
                                            <!-- Member Details -->
                                            <h4>Larry Doe</h4>
                                            <!-- Designation -->
                                            <span class="pos">Director</span>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <!-- Team Member -->
                                        <div class="team-member">
                                            <!-- Image Hover Block -->
                                            <div class="member-img portfolio-item">
                                <!-- Image  -->
                                <img class="img-responsive" src="user_assets/images/photo-1.jpg" alt="">
                                <div class="portfolio-desc align-center">
												<div class="folio-info">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Details</button>
												</div>
											</div>
                            </div>
                                            <!-- Member Details -->
                                            <h4>John Doe</h4>
                                            <!-- Designation -->
                                            <span class="pos">CEO</span>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <!-- Team Member -->
                                        <div class="team-member pDark">
                                            <!-- Image Hover Block -->
                                            <div class="member-img portfolio-item">
                                <!-- Image  -->
                                <img class="img-responsive" src="user_assets/images/photo-1.jpg" alt="">
                                <div class="portfolio-desc align-center">
												<div class="folio-info">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Details</button>
												</div>
											</div>
                            </div>
                                            <!-- Member Details -->
                                            <h4>Larry Doe</h4>
                                            <!-- Designation -->
                                            <span class="pos">Director</span>

                                        </div>
                                    </div>
                                </div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Larry Doc</h3>
          <h4 class="modal-title">Headmaster</h4>
          <h6 class="modal-title">0174...4554...</h6>
          <h6 class="modal-title">headmaster.info@gmail.com</h6>
        </div>
        <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.
                </p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>


        </section>
        <!-- /main -->

        <!-- Sidebar -->

        <!-- /Sidebar -->

    </div>
</section>
<!-- /container -->


<!-- require 'user_layout/footer.php'; -->
@endsection
