
@extends('Admin.master')
@section('content1')

<div class="wrapper">
    <div class="row">
        <div class="box">
            <img src=" {{asset('/img/admin/fanos.svg')}}" alt="">
            <span class="fas fa-tasks"></span>
            <span>100</span>
            <span>To Do</span>
        </div>
        <div class="box">
            <img src=" {{asset('/img/admin/zena.svg')}}" alt="">
            <span class="fas fa-spinner"></span>
            <span>100</span>
            <span>In progress</span>
        </div>
        <div class="box">
            <img src={{asset('/img/admin/zena.svg')}}"  alt="">
            <span class="fas fa-check-circle"></span>
            <span>100</span>
            <span>Completed</span>
        </div>
        <div class="box">
            <img src=" {{asset('/img/admin/fanos.svg')}}" alt="">
            <span class="fas fa-bug"></span>
            <span>100</span>
            <span>Issues</span>
        </div>
    </div>
    <div class="row">
       <div class="tableStart">
    
    <div class="table-body">
    <div class="table-row">
    <div>id</div>
    <div class="avatar">Avatar</div>
    <div>Name</div>
    <div class="status">Status</div>
    <div class="progress">Target Achievment</div>
    <div class="actions">Actions</div>
    
    </div>
        
    
        <div class="table-row">
        <div>01</div>
        <div class="avatar"><img src=" {{asset('/img/admin/user.jpg')}}" alt=""></div>
        <div>Syda Alzammanan</div>
        <div class="status"><span class="cancel">Cancel</span></div>
        <div class="progress"><div class="bar"></div></div>
        <div class="actions"><button>Hire</button>
            <button>Fire</button>
        </div>
        
        </div>
        
            <div class="table-row">
            <div>01</div>
            <div class="avatar"><img src=" {{asset('/img/admin/user.jpg')}}" alt=""></div>
            <div>Syda Alzammanan</div>
            <div class="status"><span class="accept">Accept</span></div>
            <div class="progress"><div class="bar"></div></div>
            <div class="actions"><button>Hire</button>
                <button>Fire</button>
            </div>
            
            </div>
    </div>
    
    
       </div>
    </div>
    <div class="row"></div>
    
    </div>
    @endsection