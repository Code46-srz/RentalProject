@extends('layout.app')

@section('content')
    <div class="container-fluid g-0" id="homePageContainer">
        <div class="row ">

            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/space.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slideff label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/van_goth.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/van_goth3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>
    <!-- write a for loop that will create 5 cards in a row -->
    <!--container for rental figures -->
    <div class="container">
        <div class="row" id="rentalProperties">

            <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
                <a href="#">
                    <figure class="figure border border-3  rounded-3 ">
                        <img src="img/rental2.jfif" class="figure-img img-fluid rounded w-100" alt="...">
                        <figcaption class="figure-caption text-end">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="d-flex float-left">
                                            $300,900
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="d-flex float-left">
                                            3 beds| 2 baths| 1,200 sqft | 0.25 acres lot|
                                        </td>
                                    </tr>
                                    <tr>
                                        House for sale
                                    </tr>
                                    <tr>
                                        <td class="d-flex float-left">
                                            100 W El Prado Dr Unit 113, Olmos Park..
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex float-left">
                                            All Star Co Realtors
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <figure class="figure border">
                    <img src="img/rental3.jfif" class="figure-img img-fluid rounded w-100" alt="...">
                    <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                </figure>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <figure class="figure border">
                    <img src="img/rental4.jfif" class="figure-img img-fluid rounded w-100" alt="...">
                    <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                </figure>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <figure class="figure border">
                    <img src="img/rental1.jfif" class="figure-img img-fluid rounded w-100" alt="...">
                    <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                </figure>
            </div>
        </div>
    </div>
@endsection
