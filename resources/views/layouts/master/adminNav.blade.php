<style>
.text_requried{
  color: red;
}
</style>

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
            <div class="dropdown-menu animated flipInY"> 
           
            </div> 
        <!-- End User profile text-->
       
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                {{--/////Second Start--}}
                
                 <li class="{{Request::is('dashboard')?'active':''}}"><a id="notInclude" class="waves-effect waves-dark navA" href="{{url('/dashboard')}}" aria-expanded="false"><i class="fas fa-tachometer-alt"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                
            <!-- Submissions -->
                <li class="{{Request::is('hrms/submission*')?'active':''}}"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-book" aria-hidden="true"></i><span class="hide-menu">Submissions</span></a>
                    <ul aria-expanded="false" class="collapse"> 
                        @canany(['sub edit record', 'sub view record'])
                        <li><a class="{{Request::is('hrms/submission')?'active':''}}" href="{{route('submission.index')}}">List of Submissions</a></li>
                        <li><a class="{{Request::is('hrms/submission/search')?'active':''}}" href="{{route('submission.search')}}">Search & Reports</a></li>
                        @endcanany
                                               
                    </ul>
                </li>
             
<!-- End Submissions -->






 




               
                {{--///////// Second End--}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
     
</aside>


