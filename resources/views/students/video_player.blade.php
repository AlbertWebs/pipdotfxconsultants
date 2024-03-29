@extends('students.master')
@section('content')
<div id="content-wrapper">
    <div class="container-fluid pb-0">
        <div class="video-block-right-list section-padding">
           <div class="row mb-4">
              <div class="col-md-8">
                 <div class="single-video">
                    <iframe class="myPlayer" width="100%" height="315" src="https://www.youtube-nocookie.com/embed/kXYiU_JCYtU?rel=0&controls=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="video-slider-right-list">
                    <div class="video-card video-card-list">
                       <div class="video-card-image">
                          <form id="nextVid" method="GET">
                           {{csrf_field()}}
                           <input type="hidden" id="url" name="url" value="https://www.youtube-nocookie.com/embed/r00ikilDxW4?rel=0&amp;controls=0&amp;showinfo=0">
                          <button type="submit" class="play-icon"><i class="fas fa-play-circle"></i></button>
                          <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v1.png')}}" alt=""></a>
                          <div class="time">3:50</div>
                          </form>
                       </div>
                       <div class="video-card-body">
                          <div class="btn-group float-right right-action">
                             <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                             </a>
                             <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                             </div>
                          </div>
                          <div class="video-title">
                             <a href="#">Here are many variati of passages of Lorem</a>
                          </div>
                          <div class="video-page text-success">
                             Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                          </div>
                          <div class="video-view">
                             1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                          </div>
                       </div>
                    </div>
                    <div class="video-card video-card-list active">
                       <div class="video-card-image">
                          <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                          <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v2.png')}}" alt=""></a>
                          <div class="time">3:50</div>
                       </div>
                       <div class="video-card-body">
                          <div class="btn-group float-right right-action">
                             <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                             </a>
                             <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                             </div>
                          </div>
                          <div class="video-title">
                             <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                          </div>
                          <div class="video-page text-success">
                             Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                          </div>
                          <div class="video-view">
                             1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                          </div>
                       </div>
                    </div>
                    <div class="video-card video-card-list">
                       <div class="video-card-image">
                          <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                          <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v3.png')}}" alt=""></a>
                          <div class="time">3:50</div>
                       </div>
                       <div class="video-card-body">
                          <div class="btn-group float-right right-action">
                             <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                             </a>
                             <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                             </div>
                          </div>
                          <div class="video-title">
                             <a href="#">Culpa qui officia deserunt mollit anim</a>
                          </div>
                          <div class="video-page text-success">
                             Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                          </div>
                          <div class="video-view">
                             1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                          </div>
                       </div>
                    </div>
                    <div class="video-card video-card-list">
                       <div class="video-card-image">
                          <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                          <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v4.png')}}" alt=""></a>
                          <div class="time">3:50</div>
                       </div>
                       <div class="video-card-body">
                          <div class="btn-group float-right right-action">
                             <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                             </a>
                             <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                             </div>
                          </div>
                          <div class="video-title">
                             <a href="#">Deserunt mollit anim id est laborum.</a>
                          </div>
                          <div class="video-page text-success">
                             Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                          </div>
                          <div class="video-view">
                             1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                          </div>
                       </div>
                    </div>
                    <div class="video-card video-card-list">
                       <div class="video-card-image">
                          <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                          <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v5.png')}}" alt=""></a>
                          <div class="time">3:50</div>
                       </div>
                       <div class="video-card-body">
                          <div class="btn-group float-right right-action">
                             <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                             </a>
                             <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                             </div>
                          </div>
                          <div class="video-title">
                             <a href="#">Exercitation ullamco laboris nisi ut.</a>
                          </div>
                          <div class="video-page text-success">
                             Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                          </div>
                          <div class="video-view">
                             1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                          </div>
                       </div>
                    </div>
                    <div class="video-card video-card-list">
                       <div class="video-card-image">
                          <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                          <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v6.png')}}" alt=""></a>
                          <div class="time">3:50</div>
                       </div>
                       <div class="video-card-body">
                          <div class="btn-group float-right right-action">
                             <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                             </a>
                             <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                             </div>
                          </div>
                          <div class="video-title">
                             <a href="#">There are many variations of passages of Lorem</a>
                          </div>
                          <div class="video-page text-success">
                             Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                          </div>
                          <div class="video-view">
                             1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="video-block section-padding">
           <div class="row">
              <div class="col-md-8">
                 <div class="single-video-left">
                    <div class="single-video-title box mb-3">
                       <h2><a href="#">Contrary to popular belief, Lorem Ipsum (2020) is not.</a></h2>
                       <p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
                    </div>
                    <div class="single-video-author box mb-3">
                       <div class="float-right"><button class="btn btn-danger" type="button">Subscribe <strong>1.4M</strong></button> <button class="btn btn btn-outline-danger" type="button"><i class="fas fa-bell"></i></button></div>
                       <img class="img-fluid" src="{{asset('userdashboard/img/s4.png')}}" alt="">
                       <p><a href="#"><strong>Osahan Channel</strong></a> <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span></p>
                       <small>Published on Aug 10, 2020</small>
                    </div>
                    <div class="single-video-info-content box mb-3">
                       <h6>Cast:</h6>
                       <p>Nathan Drake , Victor Sullivan , Sam Drake , Elena Fisher</p>
                       <h6>Category :</h6>
                       <p>Gaming , PS4 Exclusive , Gameplay , 1080p</p>
                       <h6>About :</h6>
                       <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as evolved over the years, sometimes </p>
                       <h6>Tags :</h6>
                       <p class="tags mb-0">
                          <span><a href="#">Uncharted 4</a></span>
                          <span><a href="#">Playstation 4</a></span>
                          <span><a href="#">Gameplay</a></span>
                          <span><a href="#">1080P</a></span>
                          <span><a href="#">ps4Share</a></span>
                          <span><a href="#">+ 6</a></span>
                       </p>
                    </div>
                    <div class="box mb-3 single-video-comment-tabs">
                       <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                             <a class="nav-link active" id="retro-comments-tab" data-toggle="tab" href="#retro-comments" role="tab" aria-controls="retro" aria-selected="false">vidoe Comments</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" id="disqus-comments-tab" data-toggle="tab" href="#disqus-comments" role="tab" aria-controls="disqus" aria-selected="true">Disqus Comments</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" id="facebook-comments-tab" data-toggle="tab" href="#facebook-comments" role="tab" aria-controls="facebook" aria-selected="false">Facebook Comments</a>
                          </li>
                       </ul>
                       <div class="tab-content">
                          <div class="tab-pane fade" id="disqus-comments" role="tabpanel" aria-labelledby="disqus-comments-tab">
                             <h1>Soon...</h1>
                          </div>
                          <div class="tab-pane fade" id="facebook-comments" role="tabpanel" aria-labelledby="facebook-comments-tab">
                             <h1>Soon...</h1>
                          </div>
                          <div class="tab-pane fade show active" id="retro-comments" role="tabpanel" aria-labelledby="retro-comments-tab">
                             <div class="reviews-members pt-0">
                                <div class="media">
                                   <a href="#"><img class="mr-3" src="{{asset('userdashboard/img/s1.png')}}" alt="Generic placeholder image"></a>
                                   <div class="media-body">
                                      <div class="form-members-body">
                                         <textarea rows="1" placeholder="Add a public comment..." class="form-control"></textarea>
                                      </div>
                                      <div class="form-members-footer text-right mt-2">
                                         <b class="float-left">12,725 Comments
                                         </b>
                                         <button class="btn btn-outline-danger btn-sm" type="button">CANCEL</button> <button class="btn btn-danger btn-sm" type="button">COMMENT</button>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="reviews-members">
                                <div class="media">
                                   <a href="#"><img class="mr-3" src="{{asset('userdashboard/img/s2.png')}}" alt="Generic placeholder image"></a>
                                   <div class="media-body">
                                      <div class="reviews-members-header">
                                         <h6 class="mb-1"><a class="text-black" href="#">Gurdeep Osahan </a> <small class="text-gray">2 months ago</small></h6>
                                      </div>
                                      <div class="reviews-members-body">
                                         <p> reacthe last order. Even though they had Chefs in their open kitchen they weren’t flexible to dish out few more items. Anyway the food was super specially their stone dessert.</p>
                                      </div>
                                      <div class="reviews-members-footer">
                                         <a class="total-like" href="#"><i class="fas fa-thumbs-up"></i> 123</a> <a class="total-like" href="#"><i class="fas fa-thumbs-down"></i> 02</a>
                                         <span dir="rtl" class="total-like-user-main ml-2">
                                         <a href="#" title="Gurdeep Osahan" data-placement="top" data-toggle="tooltip"><img class="total-like-user" src="{{asset('userdashboard/img/s1.png')}}" alt="Generic placeholder image"></a>
                                         <a href="#" title="Gurdeep Osahan" data-placement="top" data-toggle="tooltip"><img class="total-like-user" src="{{asset('userdashboard/img/s2.png')}}" alt="Generic placeholder image"></a>
                                         <a href="#" title="Gurdeep Osahan" data-placement="top" data-toggle="tooltip"><img class="total-like-user" src="{{asset('userdashboard/img/s3.png')}}" alt="Generic placeholder image"></a>
                                         <a href="#" title="Gurdeep Osahan" data-placement="top" data-toggle="tooltip"><img class="total-like-user" src="{{asset('userdashboard/img/s4.png')}}" alt="Generic placeholder image"></a>
                                         </span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="reviews-members">
                                <div class="media">
                                   <a href="#"><img alt="Generic placeholder image" src="{{asset('userdashboard/img/s3.png')}}" class="mr-3"></a>
                                   <div class="media-body">
                                      <div class="reviews-members-header">
                                         <h6 class="mb-1"><a href="#" class="text-black">Gurdeep Osahan </a> <small class="text-gray">2 months ago</small></h6>
                                      </div>
                                      <div class="reviews-members-body">
                                         <p>Was here impromptu in their first week, reacthe last order. Even though they had Chefs in their open kitchen they weren’t flexible to dish out few more items.</p>
                                      </div>
                                      <div class="reviews-members-footer">
                                         <a href="#" class="total-like"><i class="fas fa-thumbs-up"></i> 123</a> <a href="#" class="total-like"><i class="fas fa-thumbs-down"></i> 02</a>
                                         <span class="total-like-user-main ml-2" dir="rtl">
                                         <a data-toggle="tooltip" data-placement="top" title="Gurdeep Osahan" href="#"><img alt="Generic placeholder image" src="{{asset('userdashboard/img/s5.png')}}" class="total-like-user"></a>
                                         <a data-toggle="tooltip" data-placement="top" title="Gurdeep Osahan" href="#"><img alt="Generic placeholder image" src="{{asset('userdashboard/img/s6.png')}}" class="total-like-user"></a>
                                         <a data-toggle="tooltip" data-placement="top" title="Gurdeep Osahan" href="#"><img alt="Generic placeholder image" src="{{asset('userdashboard/img/s7.png')}}" class="total-like-user"></a>
                                         <a data-toggle="tooltip" data-placement="top" title="Gurdeep Osahan" href="#"><img alt="Generic placeholder image" src="{{asset('userdashboard/img/s8.png')}}" class="total-like-user"></a>
                                         </span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="single-video-right">
                    <div class="row">
                       <div class="col-md-12">
                          <div class="adblock">
                             <div class="img">
                                Google AdSense<br>
                                336 x 280
                             </div>
                          </div>
                          <div class="main-title">
                             <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                   <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                   <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                </div>
                             </div>
                             <h6>Up Next</h6>
                          </div>
                       </div>
                       <div class="col-md-12">
                          <div class="video-card video-card-list">
                             <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v1.png')}}" alt=""></a>
                                <div class="time">3:50</div>
                             </div>
                             <div class="video-card-body">
                                <div class="btn-group float-right right-action">
                                   <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                   </div>
                                </div>
                                <div class="video-title">
                                   <a href="#">Here are many variati of passages of Lorem</a>
                                </div>
                                <div class="video-page text-success">
                                   Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                   1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                </div>
                             </div>
                          </div>
                          <div class="video-card video-card-list">
                             <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v2.png')}}" alt=""></a>
                                <div class="time">3:50</div>
                             </div>
                             <div class="video-card-body">
                                <div class="btn-group float-right right-action">
                                   <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                   </div>
                                </div>
                                <div class="video-title">
                                   <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                </div>
                                <div class="video-page text-success">
                                   Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                   1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                </div>
                             </div>
                          </div>
                          <div class="video-card video-card-list">
                             <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v3.png')}}" alt=""></a>
                                <div class="time">3:50</div>
                             </div>
                             <div class="video-card-body">
                                <div class="btn-group float-right right-action">
                                   <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                   </div>
                                </div>
                                <div class="video-title">
                                   <a href="#">Culpa qui officia deserunt mollit anim</a>
                                </div>
                                <div class="video-page text-success">
                                   Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                   1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                </div>
                             </div>
                          </div>
                          <div class="video-card video-card-list">
                             <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v4.png')}}" alt=""></a>
                                <div class="time">3:50</div>
                             </div>
                             <div class="video-card-body">
                                <div class="btn-group float-right right-action">
                                   <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                   </div>
                                </div>
                                <div class="video-title">
                                   <a href="#">Deserunt mollit anim id est laborum.</a>
                                </div>
                                <div class="video-page text-success">
                                   Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                   1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                </div>
                             </div>
                          </div>
                          <div class="video-card video-card-list">
                             <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v5.png')}}" alt=""></a>
                                <div class="time">3:50</div>
                             </div>
                             <div class="video-card-body">
                                <div class="btn-group float-right right-action">
                                   <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                   </div>
                                </div>
                                <div class="video-title">
                                   <a href="#">Exercitation ullamco laboris nisi ut.</a>
                                </div>
                                <div class="video-page text-success">
                                   Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                   1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                </div>
                             </div>
                          </div>
                          <div class="video-card video-card-list">
                             <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v6.png')}}" alt=""></a>
                                <div class="time">3:50</div>
                             </div>
                             <div class="video-card-body">
                                <div class="btn-group float-right right-action">
                                   <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                   </div>
                                </div>
                                <div class="video-title">
                                   <a href="#">There are many variations of passages of Lorem</a>
                                </div>
                                <div class="video-page text-success">
                                   Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                   1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                </div>
                             </div>
                          </div>
                          <div class="adblock mt-0">
                             <div class="img">
                                Google AdSense<br>
                                336 x 280
                             </div>
                          </div>
                          <div class="video-card video-card-list">
                             <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v1.png')}}" alt=""></a>
                                <div class="time">3:50</div>
                             </div>
                             <div class="video-card-body">
                                <div class="btn-group float-right right-action">
                                   <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                   </div>
                                </div>
                                <div class="video-title">
                                   <a href="#">Here are many variati of passages of Lorem</a>
                                </div>
                                <div class="video-page text-success">
                                   Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                   1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                </div>
                             </div>
                          </div>
                          <div class="video-card video-card-list">
                             <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{asset('userdashboard/img/v2.png')}}" alt=""></a>
                                <div class="time">3:50</div>
                             </div>
                             <div class="video-card-body">
                                <div class="btn-group float-right right-action">
                                   <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                   </div>
                                </div>
                                <div class="video-title">
                                   <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                </div>
                                <div class="video-page text-success">
                                   Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                   1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    @include('students.footer')

 </div>
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
 <script>
    
   $("#nextVid").submit(function(e) {
      alert('')
      e.preventDefault(); 
      var url = $("#url").val();
      
      $.ajax({
         type: "GET",
         url: {{url('/')}}/apps/get-vid-url,
         data: { url:url}, 
         success: function( msg ) {
            alert( msg );
         }
      });
   });
 
 </script>
@endsection
