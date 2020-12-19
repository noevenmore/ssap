<form id="leave_comment_form" onsubmit="return leaveComment();" class="formMain">
    <div class="formMain_title">
        {{__('Leave your comment')}}
    </div>
    <input id="comment_id" name="id" value="{{$id}}" hidden>
    <input id="comment_type" name="type" value="{{$type}}" hidden>
    <input id="comment_name" type="text" minlength="2" class="formMain_input" placeholder="{{__('Your name')}}">
    <input id="comment_email" type="email" class="formMain_input" placeholder="{{__('Your E-mail')}}" required="@">
    <textarea  id="comment_text" minlength="4" placeholder="{{__('Your comment')}}" class="formMain_text"></textarea>
    <button class="formMain_button">
        {{__('Leave comment')}}
    </button>
</form>

<form id="leave_comment_form_done" onsubmit="return false;" class="formMain" style="display: none;">
    <div class="formMain_title mb-0" style="text-align: center;">
        {{__('Done!')}}
    </div>
</form>