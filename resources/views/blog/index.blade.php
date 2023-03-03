<!-- Layout Start -->
@extends('layouts.main')

<!-- title section -->
@section('title', 'Actualités')

<!-- content section -->
@section('content')


    <section class="page-title-area" style="background-image:url(https://via.placeholder.com/1920x430)">
        <div class="container">
            <div class="title-area-data">
                <h2>Actualités</h2>
                <p>Organisation engagée pour mettre fin au desastre environnemental dans le monde.</p>
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Actualités</li>
            </ol>
        </div>
    </section>
    <section class="gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="row g-5">
                        <div class="col-md-6 wow slideInUp hoverimg" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="https://via.placeholder.com/416x228" alt="">
                                    <a class="position-absolute top-0 start-0 text-white text-uppercase rounded-end mt-5 py-2 px-4"
                                        href="">Flore</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>Artur J</small>
                                        <small class="me-3 "><i
                                                class="far fa-comment-alt text-primary me-2 "></i>11</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>il y a 2
                                            semaines</small>
                                    </div>
                                    <h4 class="mb-3">Flore Epicentre de la vie</h4>
                                    <p>Savoir gerer sa nature est une source de richesse culturelle</p>
                                    <a class="text-uppercase" href="{{ route('blog.show') }}">Lire... <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 wow hoverimg slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="https://via.placeholder.com/416x228" alt="">
                                    <a class="position-absolute top-0 start-0 text-white text-uppercase rounded-end mt-5 py-2 px-4"
                                        href="">Flore</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>Artur J</small>
                                        <small class="me-3 "><i
                                                class="far fa-comment-alt text-primary me-2 "></i>11</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>il y a 2
                                            semaines</small>
                                    </div>
                                    <h4 class="mb-3">Flore Epicentre de la vie</h4>
                                    <p>Savoir gerer sa nature est une source de richesse culturelle</p>
                                    <a class="text-uppercase" href="{{ route('blog.show') }}">Lire... <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 hoverimg wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="https://via.placeholder.com/416x228" alt="">
                                    <a class="position-absolute top-0 start-0  text-white text-uppercase rounded-end mt-5 py-2 px-4"
                                        href="">Faune</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>Artur J</small>
                                        <small class="me-3 "><i
                                                class="far fa-comment-alt text-primary me-2 "></i>11</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>il y a 2
                                            semaines</small>
                                    </div>
                                    <h4 class="mb-3">Flore Epicentre de la vie</h4>
                                    <p>Savoir gerer sa nature est une source de richesse culturelle</p>
                                    <a class="text-uppercase" href="{{ route('blog.show') }}">Lire... <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 hoverimg wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="https://via.placeholder.com/416x228" alt="">
                                    <a class="position-absolute top-0 start-0  text-white text-uppercase rounded-end mt-5 py-2 px-4"
                                        href="">Foret</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>Artur J</small>
                                        <small class="me-3 "><i
                                                class="far fa-comment-alt text-primary me-2 "></i>11</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>il y a 2
                                            semaines</small>
                                    </div>
                                    <h4 class="mb-3">Flore Epicentre de la vie</h4>
                                    <p>Savoir gerer sa nature est une source de richesse culturelle</p>
                                    <a class="text-uppercase" href="{{ route('blog.show') }}">Lire... <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 wow slideInUp hoverimg" data-wow-delay="0.6s">
                          <div class="blog-item bg-light rounded overflow-hidden">
                              <div class="blog-img position-relative overflow-hidden">
                                  <img class="img-fluid" src="https://via.placeholder.com/416x228" alt="">
                                  <a class="position-absolute top-0 start-0  text-white text-uppercase rounded-end mt-5 py-2 px-4"
                                      href="">Flore</a>
                              </div>
                              <div class="p-4">
                                  <div class="d-flex mb-3">
                                      <small class="me-3"><i class="far fa-user text-primary me-2"></i>Artur J</small>
                                      <small class="me-3 "><i
                                              class="far fa-comment-alt text-primary me-2 "></i>11</small>
                                      <small><i class="far fa-calendar-alt text-primary me-2"></i>il y a 2
                                          semaines</small>
                                  </div>
                                  <h4 class="mb-3">Flore Epicentre de la vie</h4>
                                  <p>Savoir gerer sa nature est une source de richesse culturelle</p>
                                  <a class="text-uppercase" href="{{ route('blog.show') }}">Lire... <i
                                          class="bi bi-arrow-right"></i></a>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-6 wow hoverimg slideInUp" data-wow-delay="0.6s">
                          <div class="blog-item bg-light rounded overflow-hidden">
                              <div class="blog-img position-relative overflow-hidden">
                                  <img class="img-fluid" src="https://via.placeholder.com/416x228" alt="">
                                  <a class="position-absolute top-0 start-0 text-white text-uppercase rounded-end mt-5 py-2 px-4"
                                      href="">Flore</a>
                              </div>
                              <div class="p-4">
                                  <div class="d-flex mb-3">
                                      <small class="me-3"><i class="far fa-user text-primary me-2"></i>Artur J</small>
                                      <small class="me-3 "><i
                                              class="far fa-comment-alt text-primary me-2 "></i>11</small>
                                      <small><i class="far fa-calendar-alt text-primary me-2"></i>il y a 2
                                          semaines</small>
                                  </div>
                                  <h4 class="mb-3">Flore Epicentre de la vie</h4>
                                  <p>Savoir gerer sa nature est une source de richesse culturelle</p>
                                  <a class="text-uppercase" href="{{ route('blog.show') }}">Lire... <i
                                          class="bi bi-arrow-right"></i></a>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-6 hoverimg wow slideInUp" data-wow-delay="0.6s">
                          <div class="blog-item bg-light rounded overflow-hidden">
                              <div class="blog-img position-relative overflow-hidden">
                                  <img class="img-fluid" src="https://via.placeholder.com/416x228" alt="">
                                  <a class="position-absolute top-0 start-0 text-white text-uppercase rounded-end mt-5 py-2 px-4"
                                      href="">Climat</a>
                              </div>
                              <div class="p-4">
                                  <div class="d-flex mb-3">
                                      <small class="me-3"><i class="far fa-user text-primary me-2"></i>Artur J</small>
                                      <small class="me-3 "><i
                                              class="far fa-comment-alt text-primary me-2 "></i>11</small>
                                      <small><i class="far fa-calendar-alt text-primary me-2"></i>il y a 2
                                          semaines</small>
                                  </div>
                                  <h4 class="mb-3">Flore Epicentre de la vie</h4>
                                  <p>Savoir gerer sa nature est une source de richesse culturelle</p>
                                  <a class="text-uppercase" href="{{ route('blog.show') }}">Lire... <i
                                          class="bi bi-arrow-right"></i></a>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-6 hoverimg wow slideInUp" data-wow-delay="0.6s">
                          <div class="blog-item bg-light rounded overflow-hidden">
                              <div class="blog-img position-relative overflow-hidden">
                                  <img class="img-fluid" src="https://via.placeholder.com/416x228" alt="">
                                  <a class="position-absolute top-0 start-0 text-white text-uppercase rounded-end mt-5 py-2 px-4"
                                      href="">Flore</a>
                              </div>
                              <div class="p-4">
                                  <div class="d-flex mb-3">
                                      <small class="me-3"><i class="far fa-user text-primary me-2"></i>Artur J</small>
                                      <small class="me-3 "><i
                                              class="far fa-comment-alt text-primary me-2 "></i>11</small>
                                      <small><i class="far fa-calendar-alt text-primary me-2"></i>il y a 2
                                          semaines</small>
                                  </div>
                                  <h4 class="mb-3">Flore Epicentre de la vie</h4>
                                  <p>Savoir gerer sa nature est une source de richesse culturelle</p>
                                  <a class="text-uppercase" href="{{ route('blog.show') }}">Lire... <i
                                          class="bi bi-arrow-right"></i></a>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="sidebar">
                        <div class="posts recent-posts">
                            <h3>Articles Recents</h3>
                            <ul>
                                <li>
                                    <img alt="img" src="https://via.placeholder.com/100x90">
                                    <div>
                                        <a href="#"> 13, Mai 2022</a>
                                        <h6><a href="#">Protection Climatique</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <img alt="img" src="https://via.placeholder.com/100x90">
                                    <div>
                                        <a href="#"> 13, Mars 2022</a>
                                        <h6><a href="#">Rechauffement Climatique</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <img alt="img" src="https://via.placeholder.com/100x90">
                                    <div>
                                        <a href="#"> 23, Avril 2022</a>
                                        <h6><a href="#">Plantation des jeunes arbres</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="posts">
                            <h3>categories</h3>
                            <ul class="categories">
                                <li>
                                    <a href="#">environnement<span>10</span></a>
                                </li>
                                <li>
                                    <a href="#">Foret<span>12</span></a>
                                </li>
                                <li>
                                    <a href="#">Faune<span>09</span></a>
                                </li>
                                <li>
                                    <a href="#">Flore<span>06</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="posts">
                            <h3>Articles Populaires</h3>
                            <ul class="popular-posts">
                                <li>
                                    <img alt="img" src="https://via.placeholder.com/310x190">
                                    <h4><a href="#">Protection de la foret</a></h4>
                                    <div class="meta-info">
                                        <ul>
                                            <li>
                                                <p> 13, Mai 2023</p>
                                            </li>
                                            <li><i class="fa-solid fa-eye"></i>
                                                <h6>50K</h6>
                                            <li><i class="fa-solid fa-message"></i>
                                                <h6>50K</h6>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <img alt="img" src="https://via.placeholder.com/310x190">
                                    <h4><a href="#">Protection de l'environnement</a></h4>
                                    <div class="meta-info">
                                        <ul>
                                            <li>
                                                <p> 13, Mai 2023</p>
                                            </li>
                                            <li><i class="fa-solid fa-eye"></i>
                                                <h6>50K</h6>
                                            <li><i class="fa-solid fa-message"></i>
                                                <h6>50K</h6>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
