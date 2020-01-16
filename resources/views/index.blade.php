@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="itemise_inner">
                <div class="profile_section_inner" style="padding-top: 40px;">
                    <div class="user_profile_image" style="background: url('assets/img/users/avatar3.jpg');
                            width: 100px;
                            height: 100px;
                            background-position: center;
                            background-size: contain;
                            border-radius: 100%;
                            border: 2px solid #f4f4f4;
                            margin: 0 auto;
                            margin-bottom: 30px;">
                    </div>
                    <div class="user_profile_name text-center">
                        <h2> Oziri Emeka Emmanuel</h2>
                    </div>
                </div>
                <div class="profile_info_section">
                    <section class="container py-4">
                        <div class="row">
                            <div class="col-md-12">
                                <ul id="tabs" class="nav nav-tabs nav-justified">
                                    <li class="nav-item"><a href="" data-target="#home1" data-toggle="tab" class="nav-link small text-uppercase  active">Profile</a></li>
                                    <li class="nav-item"><a href="" data-target="#followers" data-toggle="tab" class="nav-link small text-uppercase">Followers</a></li>
                                    <li class="nav-item"><a href="" data-target="#following" data-toggle="tab" class="nav-link small text-uppercase">Following</a></li>
                                    <li class="nav-item"><a href="" data-target="#people" data-toggle="tab" class="nav-link small text-uppercase">People ( 20 )</a></li>
                                </ul>
                                <br>
                                <div id="tabsContent" class="tab-content">
                                    <div id="home1" class="tab-pane fade  active show">
                                        <div class="list-group">
                                            <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">51</span>Followers </a>
                                            <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">8</span> Following </a>
                                            <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">23</span> Notification </a>
                                        </div>
                                    </div>
                                    <div id="followers" class="tab-pane fade">
                                        <div class="scrollbar-inner">
                                            <div class="scrollbar-inner_2">
                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                        width: 20px;
                                                                        height: 20px;
                                                                        background-size: cover;
                                                                        background-position: center;
                                                                        background-repeat: no-repeat;
                                                                        border-radius: 100px;
                                                                        float: left;
                                                                        margin-right: 20px;
                                                                "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right following followingship-status">Following</button>
                                                    </div>
                                                </div>

                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar2.jpg');
                                                                            width: 20px;
                                                                            height: 20px;
                                                                            background-size: cover;
                                                                            background-position: center;
                                                                            background-repeat: no-repeat;
                                                                            border-radius: 100px;
                                                                            float: left;
                                                                            margin-right: 20px;
                                                                    "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right following followingship-status">Following</button>
                                                    </div>
                                                </div>



                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar4.jpg');
                                                                            width: 20px;
                                                                            height: 20px;
                                                                            background-size: cover;
                                                                            background-position: center;
                                                                            background-repeat: no-repeat;
                                                                            border-radius: 100px;
                                                                            float: left;
                                                                            margin-right: 20px;
                                                                    "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right following followingship-status">Following</button>
                                                    </div>
                                                </div>


                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar5.jpg');
                                                                            width: 20px;
                                                                            height: 20px;
                                                                            background-size: cover;
                                                                            background-position: center;
                                                                            background-repeat: no-repeat;
                                                                            border-radius: 100px;
                                                                            float: left;
                                                                            margin-right: 20px;
                                                                    "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right following followingship-status">Following</button>
                                                    </div>
                                                </div>


                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar6.jpg');
                                                                            width: 20px;
                                                                            height: 20px;
                                                                            background-size: cover;
                                                                            background-position: center;
                                                                            background-repeat: no-repeat;
                                                                            border-radius: 100px;
                                                                            float: left;
                                                                            margin-right: 20px;
                                                                    "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right following followingship-status">Following</button>
                                                    </div>
                                                </div>


                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar7.jpg');
                                                                            width: 20px;
                                                                            height: 20px;
                                                                            background-size: cover;
                                                                            background-position: center;
                                                                            background-repeat: no-repeat;
                                                                            border-radius: 100px;
                                                                            float: left;
                                                                            margin-right: 20px;
                                                                    "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right following followingship-status">Following</button>
                                                    </div>
                                                </div>

                                                <div class="load_more_section text-center">
                                                    <button> <i class="fa fa-redo"></i> Load more </button>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div id="following" class="tab-pane fade">
                                        <div class="list-group following_you clearfix">
                                            <div class="list-group-item d-inline-block">
                                                <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                        width: 20px;
                                                                        height: 20px;
                                                                        background-size: cover;
                                                                        background-position: center;
                                                                        background-repeat: no-repeat;
                                                                        border-radius: 100px;
                                                                        float: left;
                                                                        margin-right: 20px;
                                                                "></div>
                                                <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Followed</button>
                                            </div>
                                        </div>

                                        <div class="list-group following_you clearfix">
                                            <div class="list-group-item d-inline-block">
                                                <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                            width: 20px;
                                                                            height: 20px;
                                                                            background-size: cover;
                                                                            background-position: center;
                                                                            background-repeat: no-repeat;
                                                                            border-radius: 100px;
                                                                            float: left;
                                                                            margin-right: 20px;
                                                                    "></div>
                                                <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Followed</button>
                                            </div>
                                        </div>


                                        <div class="list-group following_you clearfix">
                                            <div class="list-group-item d-inline-block">
                                                <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                                width: 20px;
                                                                                height: 20px;
                                                                                background-size: cover;
                                                                                background-position: center;
                                                                                background-repeat: no-repeat;
                                                                                border-radius: 100px;
                                                                                float: left;
                                                                                margin-right: 20px;
                                                                        "></div>
                                                <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Followed</button>
                                            </div>
                                        </div>


                                        <div class="list-group following_you clearfix">
                                            <div class="list-group-item d-inline-block">
                                                <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                                    width: 20px;
                                                                                    height: 20px;
                                                                                    background-size: cover;
                                                                                    background-position: center;
                                                                                    background-repeat: no-repeat;
                                                                                    border-radius: 100px;
                                                                                    float: left;
                                                                                    margin-right: 20px;
                                                                            "></div>
                                                <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Followed</button>
                                            </div>
                                        </div>


                                        <div class="list-group following_you clearfix">
                                            <div class="list-group-item d-inline-block">
                                                <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                                        width: 20px;
                                                                                        height: 20px;
                                                                                        background-size: cover;
                                                                                        background-position: center;
                                                                                        background-repeat: no-repeat;
                                                                                        border-radius: 100px;
                                                                                        float: left;
                                                                                        margin-right: 20px;
                                                                                "></div>
                                                <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Followed</button>
                                            </div>
                                        </div>


                                    </div>

                                    <div id="people" class="tab-pane fade">
                                        <form>
                                            <input class="se_people" type="text" placeholder="Search for people by username">
                                            <button class="se_people_icon"><i class="fa fa-search"></i></button>
                                        </form>


                                        <div class="scrollbar-inner">
                                            <div class="scrollbar-inner_2">

                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                                width: 20px;
                                                                                height: 20px;
                                                                                background-size: cover;
                                                                                background-position: center;
                                                                                background-repeat: no-repeat;
                                                                                border-radius: 100px;
                                                                                float: left;
                                                                                margin-right: 20px;
                                                                        "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Follow</button>
                                                    </div>
                                                </div>

                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                                width: 20px;
                                                                                height: 20px;
                                                                                background-size: cover;
                                                                                background-position: center;
                                                                                background-repeat: no-repeat;
                                                                                border-radius: 100px;
                                                                                float: left;
                                                                                margin-right: 20px;
                                                                        "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Follow</button>
                                                    </div>
                                                </div>



                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                                width: 20px;
                                                                                height: 20px;
                                                                                background-size: cover;
                                                                                background-position: center;
                                                                                background-repeat: no-repeat;
                                                                                border-radius: 100px;
                                                                                float: left;
                                                                                margin-right: 20px;
                                                                        "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Followed</button>
                                                    </div>
                                                </div>


                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                                    width: 20px;
                                                                                    height: 20px;
                                                                                    background-size: cover;
                                                                                    background-position: center;
                                                                                    background-repeat: no-repeat;
                                                                                    border-radius: 100px;
                                                                                    float: left;
                                                                                    margin-right: 20px;
                                                                            "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Followed</button>
                                                    </div>
                                                </div>


                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                                        width: 20px;
                                                                                        height: 20px;
                                                                                        background-size: cover;
                                                                                        background-position: center;
                                                                                        background-repeat: no-repeat;
                                                                                        border-radius: 100px;
                                                                                        float: left;
                                                                                        margin-right: 20px;
                                                                                "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Followed</button>
                                                    </div>
                                                </div>


                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar2.jpg');
                                                                            width: 20px;
                                                                            height: 20px;
                                                                            background-size: cover;
                                                                            background-position: center;
                                                                            background-repeat: no-repeat;
                                                                            border-radius: 100px;
                                                                            float: left;
                                                                            margin-right: 20px;
                                                                    "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right following followingship-status">Following</button>
                                                    </div>
                                                </div>



                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar2.jpg');
                                                                            width: 20px;
                                                                            height: 20px;
                                                                            background-size: cover;
                                                                            background-position: center;
                                                                            background-repeat: no-repeat;
                                                                            border-radius: 100px;
                                                                            float: left;
                                                                            margin-right: 20px;
                                                                    "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right following followingship-status">Following</button>
                                                    </div>
                                                </div>



                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar2.jpg');
                                                                            width: 20px;
                                                                            height: 20px;
                                                                            background-size: cover;
                                                                            background-position: center;
                                                                            background-repeat: no-repeat;
                                                                            border-radius: 100px;
                                                                            float: left;
                                                                            margin-right: 20px;
                                                                    "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right following followingship-status">Following</button>
                                                    </div>
                                                </div>


                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                                width: 20px;
                                                                                height: 20px;
                                                                                background-size: cover;
                                                                                background-position: center;
                                                                                background-repeat: no-repeat;
                                                                                border-radius: 100px;
                                                                                float: left;
                                                                                margin-right: 20px;
                                                                        "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Followed</button>
                                                    </div>
                                                </div>



                                                <div class="list-group following_you clearfix">
                                                    <div class="list-group-item d-inline-block">
                                                        <div class="user_profile_image" style=" background : url('assets/img/users/avatar1.jpg');
                                                                                    width: 20px;
                                                                                    height: 20px;
                                                                                    background-size: cover;
                                                                                    background-position: center;
                                                                                    background-repeat: no-repeat;
                                                                                    border-radius: 100px;
                                                                                    float: left;
                                                                                    margin-right: 20px;
                                                                            "></div>
                                                        <div class="followingship-username float-left">Oziri Emeka Emmanuel </div><button class="float-right followed followingship-status">Followed</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>
@stop

