<template>
	<aside class="lg-side">
          <div class="inbox-head">
              <h3>Inbox</h3>
              <form action="#" class="pull-right position">
                  <div class="input-append">
                      <input type="text" class="sr-input" placeholder="Search Mail">
                      <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                  </div>
              </form>
          </div>
          <div class="inbox-body">
             <div class="mail-option">
                 <div class="chk-all">
                     <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                     <div class="btn-group">
                         <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                             All
                             <i class="fa fa-angle-down "></i>
                         </a>
                         <ul class="dropdown-menu">
                             <li><a href="#"> None</a></li>
                             <li><a href="#"> Read</a></li>
                             <li><a href="#"> Unread</a></li>
                         </ul>
                     </div>
                 </div>

                 <div class="btn-group">
                     <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                         <i class=" fa fa-refresh"></i>
                     </a>
                 </div>
                 <div class="btn-group hidden-phone">
                     <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                         More
                         <i class="fa fa-angle-down "></i>
                     </a>
                     <ul class="dropdown-menu">
                         <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                         <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                         <li class="divider"></li>
                         <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                     </ul>
                 </div>
                 <div class="btn-group">
                     <a data-toggle="dropdown" href="#" class="btn mini blue">
                         Move to
                         <i class="fa fa-angle-down "></i>
                     </a>
                     <ul class="dropdown-menu">
                         <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                         <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                         <li class="divider"></li>
                         <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                     </ul>
                 </div>

                 <ul class="unstyled inbox-pagination">
                     <li><span>1-50 of 234</span></li>
                     <li>
                         <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                     </li>
                     <li>
                         <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                     </li>
                 </ul>
             </div>
              <userlist></userlist>
          </div>
        </aside>

</template>

<script>
	import userlist from '../User/index';
	export default{
		components:{
			userlist
		}
	}
</script>