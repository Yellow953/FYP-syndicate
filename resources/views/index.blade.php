@extends('layouts.app')

@section('content')
    <!-- Start Slider --> 
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            @forelse ($slides as $s)
                <li class="text-center">
                    <img src="{{asset('assets/images/uploads/'.$s->image)}}" alt="">
                </li>
            @empty
                <li class="text-center">
                    <img src="https://media-exp1.licdn.com/dms/image/C4E1BAQFqTvDBFI20Ug/company-background_10000/0/1560318589119?e=2147483647&v=beta&t=NVS2LblK2qAwfrqmtRahlN2JvsMV8QBrgs29LEnUGEg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>مرحبا بكم في النقابة</strong></h1>
                                <p class="m-b-40">منزل جميع علماء الكمبيوتر</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGIdi2CbpWgofbmKFGSz9Tkv9Hlw2DQCB4lQ&usqp=CAU" alt="">
                </li>
                <li class="text-center">
                    <img src="https://img4.schoolandcollegelistings.com/331/720/2368997013317203.jpg" alt="">
                </li>
            @endforelse
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="offer-box-products">
						<img class="syndicate-image" src="data:image/png;base64,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" alt="" />
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12">
					<div class="offer-box-products p-4">
						<h2 class="text-right"><u>SCSL:</u></h2>
                        <p>
                            <h3 class="text-right">تضم النقابة الأشخاص الذين يمارسون مهنتها والمستوفين الشروط المحددة في قانون العمل وفي المرسوم /7993/ تاريخ 3/4/1952 المتعلق بتنظيم النقابات وفي النظام الداخلي للنقابة.</h3>
                            <br>
                            <h3 class="text-right">تنحصر غاية النقابة في الأمور التالية:</h3> 
                            <ul>
                                <li class="text-right">حماية المهنة وتشجيعها ورفع مستواها والدفاع عن مصالحها والعمل على تقدمها وتطورها في جميع الوجوه الإقتصادية والصناعية والتجارية.</li>
                                <li class="text-right">رعاية مصالح أعضاء النقابة والدفاع عن حقوقهم والعمل على تحسين مستواهم وأوضاعهم الإجتماعية والصحية والثقافية والمادية والمهنية وفقاً للقوانين والأنظمة المرعية الإجراء.</li>
                                <li class="text-right">إنشاء مشاريع رياضية وإجتماعية وتعاونية إستهلاكية لأعضاء النقابة وفقاً للأنظمة المرعية الإجراء.</li>
                                <li class="text-right">توثيق عرى التعاون بين أصحاب العمل والعاملين في هذه المهنة وإيجاد وثيقة من التفاهم المتبادل، والسعي الجدي لحل كل خلاف قد ينشأ بينهما بالطرق الحبية وبالمفاوضات المنصوص عنها في القوانين المرعية الإجراء.</li>
                                <li class="text-right">تقديم المساعدات المهنية والمادية لأعضائها ضمن الإمكانيات المتوفرة لديها.</li>
                            </ul>
                        </p>
                        <button class="btn btn-primary details-btn"> تفاصيل</button>
					</div>
				</div>
			</div>
		</div>
	</div>

     <div class="categories-shop">
        <div class="container">
            <h1 class="text-center m-2 heading"> <u>أخبار</u></h1>
            <div class="row">
                @forelse ($news as $n)
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="shop-cat-box">
                            <img class="img-fluid" src="{{asset('assets/images/uploads/'.$n->image)}}" alt="" style="margin-bottom: 75px;"/>
                            <a class="btn hvr-hover" href="#">
                                {{$n->name}}
                                <p>{{$n->text}}</p>
                            </a>
                        </div>
                    </div>
                @empty
                    <h1 class="text-center m-2">لم ترد أنباء حتى الآن</h1>
                @endforelse
            </div>
        </div>
    </div>

    <div class="box-add-products">
        <div class="container">
            <h1 class="text-center m-2 heading"> <u>الأسئلة الأكثر شيوعًا</u></h1>
            <div class="questions">
                @forelse ($questions as $q)
                    <div class="row">
                        <div class="col-12">
                            <div class="question">
                                <h2><u>{{$q->question}}</u></h2>
                                <p>{{$q->answer}}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="row">
                        <div class="col-12">
                            <div class="question">
                                <p>لا أسئلة حتى الآن</p>
                            </div>
                        </div>
                    </div>
                    @endforelse
            <a href="#" class="btn btn-primary more">أكثر</a>
        </div>
    </div>

@endsection