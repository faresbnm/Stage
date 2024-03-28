@extends('Layout.master')
@section('content')
<style>
    .ApplyForm {
      display: flex;
      align-items: flex-start;
      flex-direction: column;
      gap: 10px;
      width: 80vw;
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 30px 30px -30px rgba(27, 26, 26, 0.315);
    }
    
    .ApplyForm .Applytitle {
      color: royalblue;
      font-size: 30px;
      font-weight: 600;
      letter-spacing: -1px;
      line-height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .ApplyForm input {
      outline: 0;
      border: 1px solid rgb(219, 213, 213);
      padding: 8px 14px;
      border-radius: 8px;
      width: 30%;
      height: 50px;
    }

    .ApplyForm textarea {
      border-radius: 8px;
      height: 100px;
      width: 100%;
      resize: none;
      outline: 0;
      padding: 8px 14px;
      border: 1px solid rgb(219, 213, 213);
    }
    
    .ApplyForm button {
      align-self: center;
      padding: 8px;
      outline: 0;
      border: 0;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 500;
      background-color: royalblue;
      color: #fff;
      cursor: pointer;
    }   

    .custum-file-upload {
      border-radius: 8px;
      align-self: center;

      height: 100px;
      width: 200px;
      resize: none;
      outline: 0;
      padding: 8px 14px;
      border: 1px solid rgb(219, 213, 213);
}

.custum-file-upload .icon {
  display: flex;
  align-items: center;
  justify-content: center;
}

.custum-file-upload .icon svg {
  height: 80px;
  fill: rgba(75, 85, 99, 1);
}

.custum-file-upload .text {
  display: flex;
  align-items: center;
  justify-content: center;
}

.custum-file-upload .text span {
  font-weight: 400;
  color: rgba(75, 85, 99, 1);
}

.custum-file-upload input {
  display: none;
}
    </style>
    <center>
    <form action="{{route('offer.doneApply', ['id' => $offer->id])}}" class="ApplyForm" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="Applytitle">Apply For: {{$offer->title}} </div>
        <input name="email" type="text" placeholder="Your email" class="input">
        <textarea name="motivationLetter" placeholder="Motivation Letter"></textarea>
        <label class="custum-file-upload" for="file">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
            </div>
            <div class="text">
               <span>Click to upload CV</span>
            </div>
               <input type="file" name="CV" id="file">
        </label>
       <button type="submit">Apply Now !</button>
    </form></center>

    @if(Session::has('error'))
    <div id="flash-message" style="display: none;">{{ Session::get('error') }}</div>
  @endif
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
      var flashMessage = document.getElementById('flash-message');
      if (flashMessage) {
          alert(flashMessage.textContent);
      }
  });
</script>

    @endsection

