@props(['type', 'message'])

<div class='flash_message'>
    <div class='container'>
        <div class='flash-{{$type}} alert p-0 d-flex justify-content-between align-items-center' >
            <div class='icon ion-happy-outline h-100'>
                <i class='fa fa-check'></i>
            </div>
            <div class='message mx-2'> {!! $message !!}</div>
            <button type="button" class="close text-{{$type}} mx-2" data-dismiss="alert">×</button>    
        </div>
    </div>
</div>
