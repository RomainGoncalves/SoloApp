@extends('admin.master')

@section('container-main')

	 <ul class="bigBtnIcon">
        <li>
            <a href="#">
                <span class="icon icomoon-icon-users"></span>
                <span class="txt">Users</span>
                <span class="notification blue">{{ $users }}</span>
            </a>
        </li>
        <li>
            <a href="#" title="I`m with gradient" class="tipB">
                <span class="icon icomoon-icon-file-5"></span>
                <span class="txt">Total Flatplans</span>
                <span class="notification">154</span>
            </a>
        </li>
        <li>
            <a href="#" title="I`m with pattern" class="pattern tipB">
                <span class="icon icomoon-icon-copy-4"></span>
                <span class="txt">Total flatviews</span>
                <span class="notification green">10025</span>
            </a>
        </li>
        
    </ul>

    <div class="box gradient">

        <div class="title">

            <h4>
                <span class="icon16 icomoon-icon-power"></span>
                <span>Recent activity</span>
            </h4>

        </div>
        <div class="content noPad">

            <ul class="activity">
                <li>
                    <span class="icon16 icomoon-icon-plus gray"></span>
                    <a href="#"><strong>SuggeElson</strong></a> add <a href="#">3 users</a> 
                    <a href="#" class="btn btn-mini">Take action</a>
                    <small>23 seconds ago</small>
                </li>
                <li>
                <span class="icon16 icomoon-icon-envelop gray"></span>
                <a href="#"><strong>Ivanna</strong></a> send <a href="#">1 message and 1 PM</a> 
                <a href="#" class="btn btn-mini">Read messages</a>
                <small>5 minutes ago</small>
                </li>
                <li>
                <span class="icon16 icomoon-icon-images gray"></span>
                <a href="#"><strong>Joan Novotny</strong></a> delete <a href="#">5 pictures</a> 
                <a href="#" class="btn btn-mini">Undo delete</a>
                <small>1 hour ago</small>
                </li>
                <li>
                <span class="icon16 icomoon-icon-upload gray"></span>
                <a href="#"><strong>Admin Julia</strong></a> upload <a href="#">2 files</a> 
                <a href="#" class="btn btn-mini">View files</a>
                <small>2 days ago</small>
                </li>
                <li>
                <span class="icon16 icomoon-icon-bubbles-2 gray"></span>
                <a href="#"><strong>User Rayan</strong></a> post <a href="#">1 comment</a> 
                <a href="#" class="btn btn-mini">View comment</a>
                <small>1 week ago</small>
                </li>
                <li>
                <span class="icon16 icomoon-icon-copy gray"></span>
                <a href="#"><strong>SuggeElson</strong></a> add <a href="#">3 posts</a> 
                <a href="#" class="btn btn-mini">View posts</a>
                <small>1 month ago</small>
                </li>
            </ul>

        </div>

</div><!-- End .box -->

@endsection