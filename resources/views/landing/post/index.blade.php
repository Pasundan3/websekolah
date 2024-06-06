@extends('layouts.landing')
 @section('description', 'SMA Pasundan 3 adalah ....')
 @section('keywords','sman, sma bandung , bandung, sma negeri, sman, sma pasundan 3, sma pasundan, pasunan, negeri pasundan')

 @section('content')
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-wrapper bg-img bg-overlay" style="background-image: url('img/bg-img/12.jpg');">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Berita PASTHREE</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <div class="saasbox-blog-area">
      <div class="container">
        <div class="row justify-content-center justify-content-lg-between g-md-5">
          <div class="col-12 col-md-7">
            <div class="row g-4 g-lg-5 justify-content-center">
              <!-- Blog Card -->
              @foreach($news as $x)
              <div class="col-12 col-sm-10 col-md-12">
                <div class="card blog-card border-0">
                    <a class="image-wrap d-block" href="{{route('blog-with-id', $x->id)}}">
                        <img src="{{$x->gambar_header}}" alt="gambar" style="width: 619px; height: 348px; object-fit: cover;">
                    </a>
                    <div class="card-body px-4 pb-0">
                        <a class="post-title d-block mb-3" href="{{route('blog-with-id', $x->id)}}">{{$x->title}}</a>
                        <div class="post-meta">
                            <span class="text-muted fz-14"><i class="bi bi-clock me-2"></i>2 min read</span>
                        </div>
                    </div>
                </div>
              </div>
              @endforeach
              <!-- Blog Card -->
              <div class="col-12 col-sm-10 col-md-12">
                <div class="card blog-card border-0"><a class="image-wrap d-block" href="blog-1.html"><img src="img/bg-img/blog20.jpg" alt=""></a>
                  <div class="card-body px-4 pb-0"><a class="badge bg-primary text-white mb-1" href="blog-1.html">News</a><a class="post-title d-block mb-3" href="blog-1.html">The reason why everyone love business.</a>
                    <div class="post-meta"><span class="text-muted fz-14"><i class="bi bi-clock me-2"></i>2 min read</span></div>
                  </div>
                </div>
              </div>
              <!-- Blog Card -->
              <div class="col-12 col-sm-10 col-md-12">
                <div class="card blog-card border-0"><a class="image-wrap d-block" href="blog-1.html"><img src="img/bg-img/blog21.jpg" alt=""></a>
                  <div class="card-body px-4 pb-0"><a class="badge bg-primary text-white mb-1" href="blog-1.html">News</a><a class="post-title d-block mb-3" href="blog-1.html">Seven ways agency can improve your business.</a>
                    <div class="post-meta"><span class="text-muted fz-14"><i class="bi bi-clock me-2"></i>2 min read</span></div>
                  </div>
                </div>
              </div>
              <!-- Blog Card -->
              <div class="col-12 col-sm-10 col-md-12">
                <div class="card blog-card border-0"><a class="image-wrap d-block" href="blog-1.html"><img src="img/bg-img/blog22.jpg" alt=""></a>
                  <div class="card-body px-4 pb-0"><a class="badge bg-primary text-white mb-1" href="blog-1.html">News</a><a class="post-title d-block mb-3" href="blog-1.html">The reason why everyone love business.</a>
                    <div class="post-meta"><span class="text-muted fz-14"><i class="bi bi-clock me-2"></i>2 min read</span></div>
                  </div>
                </div>
              </div>
              <!-- Blog Card -->
              <div class="col-12 col-sm-10 col-md-12">
                <div class="card blog-card border-0"><a class="image-wrap d-block" href="blog-1.html"><img src="img/bg-img/blog19.jpg" alt=""></a>
                  <div class="card-body px-4 pb-0"><a class="badge bg-primary text-white mb-1" href="blog-1.html">News</a><a class="post-title d-block mb-3" href="blog-1.html">Seven ways agency can improve your business.</a>
                    <div class="post-meta"><span class="text-muted fz-14"><i class="bi bi-clock me-2"></i>2 min read</span></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pagination  -->
            <!-- <div class="saasbox-pagination-area my-5 mb-lg-0">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mb-0">
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">-</a></li>
                  <li class="page-item"><a class="page-link" href="#">9</a></li>
                </ul>
              </nav>
            </div> -->
          </div>
          
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Cool Facts Area-->

    <div class="mb-120 d-block"></div>
 @endsection