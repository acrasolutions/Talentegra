
<x-app-layout>
<style>
.ce{
    background: white;
    width: 30%;
    margin-top: 3rem;
}
</style>
<x-slot name="header">
         </x-slot>
         <div>
         @include('flash-message')
         </div>
         <div class="container content ce">

<!-- ****************************** close job model START ******************************* -->
<div class="modal small fade" id="closeJobModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel"> Close post? </h4>
            </div>
            
            <div class="modal-footer">
                <a href="javascript:void(0);" onclick="closeJob();" type="button" id="delModalBtn" class="btn-u btn-u-red"> Close Post</a>
                <button type="button" class="btn-u btn-u-default" onclick="resetCloseJobLink();" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- ****************************** close job model END ******************************* -->


    
    
        <div class="text-center">
            You haven't posted any requirements yet.
            <div>
                <a class="btn btn-primary rounded text-center margin-top-20" href="https://www.teacheron.com/post-requirement">
                    Post a requirement
                </a> <br><br> or <br>
                <a class="btn btn-danger rounded text-center margin-top-20" href="https://www.teacheron.com/tutors">
                    Find teachers
                </a>
            </div>
        </div>
    
    




</div>
</x-app-layout>