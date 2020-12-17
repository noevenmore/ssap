<form action="" class="formMain">
    <div class="formMain_title">
        {{__('Leave your comment')}}
    </div>
    <input type="text" class="formMain_input" placeholder="{{__('Your name')}}">
    <input type="email" class="formMain_input" placeholder="{{__('Your E-mail')}}" required="@">
    <textarea placeholder="{{__('Your comment')}}" class="formMain_text"></textarea>
    <button class="formMain_button">
        {{__('Leave comment')}}
    </button>
</form>