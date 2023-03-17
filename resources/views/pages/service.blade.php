@extends('layouts/app')

@section('title')
    HR Outsource
@endsection

@section('content')
    <!-- hero -->
    <div class="hero mt-5 d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-6 align-self-center">
                    <h1>HR Outsourcing</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                    <button class="btn btn-primary">Consult Now</button>
                </div>
                <div class="col-6">
                    <img src="{{ url('images/hero-find.png') }}" alt="" class="hero-image" align="right">
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- about -->
    <div class="about mt-4 d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-6">
                    <img src="./images/about.png" alt="" class="about-image">
                </div>
                <div class="col-6 align-self-center">
                    <h2>About service</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- why us -->
    <div class="why-us mt-4">
        <div class="container">
            <h2>Why should our resources?</h2>
            <div class="row mt-5">
                <div class="col-md-6 col-12">
                    <div class="content me-4 my-4 p-2">
                        <div class="header d-flex align-self-center">
                            <img src="./images/icon-why.svg" alt="" width="50px" class="me-3">
                            <strong class="my-auto">Cuts cost</strong>
                        </div>
                        <div class="body">
                            <div class="description">
                                Operational and labour costs are significantly reduced when you start outsourcing. You
                                don’t have to fork out a fortune of your hard-earned money to develop and establish a
                                department in your company. Through outsourcing, you can minimise on unnecessary
                                expenditures and inject your capital more in other aspects of your business
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="content me-4 my-4 p-2">
                        <div class="header d-flex align-self-center">
                            <img src="./images/icon-why.svg" alt="" width="50px" class="me-3">
                            <strong class="my-auto">Access to professionals</strong>
                        </div>
                        <div class="body">
                            <div class="description">
                                Just by outsourcing, you will short-cut your way into the pool of global knowledge and
                                have the best experts in the field working alongside you and your company. Complex tasks
                                will be operated by professionals with extensive knowledge and vast experience.
                                Outsourcing helps you to increase efficiency in your business.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="content me-4 my-4 p-2">
                        <div class="header d-flex align-self-center">
                            <img src="./images/icon-why.svg" alt="" width="50px" class="me-3">
                            <strong class="my-auto">Save time and energy</strong>
                        </div>
                        <div class="body">
                            <div class="description">
                                You thought that you’ll only save time, right? Well, more good news coming your way!
                                Outsourcing also saves you a ton of your time and energy. You will be doing yourself a
                                favour by freeing up your schedule, which will allow you to focus on improving
                                and scaling your business to the next level.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="content me-4 my-4 p-2">
                        <div class="header d-flex align-self-center">
                            <img src="./images/icon-why.svg" alt="" width="50px" class="me-3">
                            <strong class="my-auto">Reduces risk</strong>
                        </div>
                        <div class="body">
                            <div class="description">
                                Outsourcing with a notable firm will help you to mitigate the risks in your company.
                                Instead of pouring time, energy and money into creating areas of professional skills and
                                development such as HR or ITs, it is much better to outsource these responsibilities.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end why us -->

    <!-- quotes -->
    <div class="quotes">
        <div class="container">
            <h4 class="text-center quotes-text fst-italic">“ Let us supply you with trained professionals in that area
                who can help you to smoothly iron out these critical duties ”</h4>
        </div>
    </div>
    <!-- end quotes -->

    <!-- our service -->
    <div class="our-service">
        <div class="container">
            <h2>Check our there service</h2>
            <div class="row mt-5">
                <div class="col-4">
                    <div class="card p-3 py-auto m-2 bg-blue-dark white">
                        <img src="./images/icon-why.svg" alt="" width="24px">
                        <h6>Development Human Capital Program 1</h6>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card p-3 py-auto m-2 bg-blue-dark white">
                        <img src="./images/icon-why.svg" alt="" width="24px">
                        <h6>Development Human Capital Program 1</h6>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card p-3 py-auto m-2 bg-blue-dark white">
                        <img src="./images/icon-why.svg" alt="" width="24px">
                        <h6>Development Human Capital Program 1</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end quotes -->
@endsection
