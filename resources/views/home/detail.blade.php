@extends('layouts.frontbase')

@section('title', 'More || ' .$data->title)

@section('content')

    <div class="page-heading about-heading header-text" style="background-image: url({{ asset('assets/images/heading-6-1920x500.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4> Interested in</h4>
                        <h2>THE {{$data->CategoryId}}s?</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>MORE INFO</h2>
                    </div>

                    <h5></h5>



                    <h5 style="font-size: 30px">{{$data->title}}</h5>
                    <br>
                    <p style="font-size: 20px">{{$data->description}}</p>

                    <br>
                    <br>

                    <h5 style="font-size: 30px">With only {{$data->price}}$ for a week!</h5>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis.</p>

                    <br>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>liked it already? let's view the pictures then!</h2>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 100px">
                                <div class="right-image">
                                    <img src="{{Storage::url($data->image)}}"  alt="" height="300px">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-content">
                                    <h4>Lorem ipsum dolor sit amet.</h4>

                                </div>
                            </div>

                            @foreach($images as $rs)
                            <div class="col-md-6" style="margin-bottom: 80px">
                                <div class="right-image">
                                    <img src="{{Storage::url($rs->image)}}"  alt="" height="300px">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-content">
                                    <h4>{{$rs->title}}</h4>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <a href="#" class="filled-button">What are you waiting for? Book now!</a>
                    </div>




                </div>

            </div>

        </div>

    </div>

    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Leave a Comment</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Submit</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="left-content">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p>

                        <br>

                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
