@extends('layouts.app')

@section('content')

<div class="container-fluid p-0 m-0">
    <div class="map bg-white p-5">
        <a target="blank" href="https://www.google.com/maps/place/Beirut+Digital+District/@33.890585,35.505276,15z/data=!4m5!3m4!1s0x0:0x84af4efc0f005b6!8m2!3d33.8905851!4d35.5052761?hl=en-US">
            <img src="{{asset('assets/images/map.png')}}" alt="" class="mapimg">
        </a>
        <h2 class="text-center my-5">Bechara El Khoury Street, Beirut Digital District, Building 1288, 1st Floor, Beirut, Lebanon</h2>
    </div>

    <div class="contact-us-form" >
        <h1 class="text-center"><u>تواصل معنا</u></h1>

        <form action="/admin/questions/new" method="POST">
            @csrf
            <div class="row form-group">
                <div class="offset-3 col-6">
                    <input type="text" name="name" value="{{ old('name') }}" required autocomplete="name" class="form-control">
                </div>
                <div class="col-3">
                    <label for="name">اسم</label>
                </div>
            </div>

            <div class="row form-group">
                <div class="offset-3 col-6">
                    <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control">
                </div>
                <div class="col-3">
                    <label for="email">البريد الإلكتروني</label>
                </div>
            </div>

            <div class="row form-group">
                <div class="offset-3  col-6">
                    <select name="topic" class="form-select">
                        <option value="memvership process" selected>عملية العضوية</option>
                        <option value="suggestion">اقتراح</option>
                        <option value="technical issue">مسألة تقنية</option>
                        <option value="general inquiry">استفسار عام</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="topic">موضوع</label>
                </div>
            </div>

            <div class="row form-group">
                <div class="offset-3 col-6">
                    <input type="text" name="subject" value="{{ old('subject') }}" required autocomplete="subject" class="form-control">
                </div>
                <div class="col-3">
                    <label for="subject">موضوعات</label>
                </div>
            </div>

            <div class="row form-group">
                <div class="offset-3 col-6">
                    <textarea name="message" rows="5" class="form-control"></textarea>
                </div>
                <div class="col-3">
                    <label for="message">رسالة</label>
                </div>
            </div>
            
           <div class="row">
            <div class="col-3 offset-3">
                <button type="submit" class="btn btn-primary px-4">سلم</button>
            </div>
           </div>
           <br>
           
        </form>
    </div>
</div>


@endsection