 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets//css/profile.css">

     <title> profile </title>
 </head>
 <body>
    <div class="container">
        <header>
          <i class="fa fa-bars" aria-hidden="true"></i>
        </header>
        <main>
          <div class="row">
            <div class="left col-lg-4">
              <div class="photo-left">
                <img class="photo" src="{{asset('uploads/'.$user->images->first()->name)}}"/>
                <div class="active"></div>
              </div>
              <h4 class="name">{{$user->name}}</h4>
              <p class="info1"style="margin-top: 30px">{{$user->email}}</p>
{{--              <div class="stats row">--}}
{{--                <div class="stat col-xs-4" >--}}
{{--                  <p class="number-stat">3,619</p>--}}
{{--                  <p class="desc-stat">Followers</p>--}}
{{--                </div>--}}
{{--                <div class="stat col-xs-4">--}}
{{--                  <p class="number-stat">42</p>--}}
{{--                  <p class="desc-stat">Following</p>--}}
{{--                </div>--}}
{{--                <div class="stat col-xs-4" >--}}
{{--                  <p class="number-stat">38</p>--}}
{{--                  <p class="desc-stat">Uploads</p>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <p class="desc">Hi ! My name is Eman Ibrahim . I'm a computer Engineer   from Palestine, in Gaza.I am good cooker so that I am searching for tasty recipes .</p>--}}
            </div>
            <div class="right col-lg-8">
              <ul class="nav">
               <li> My WishList</li>
               <li ><a id ="CAta" href="{{route('website.index')}}">  Home</a> </li>
              </ul>
              <span class="follow">Follow</span>
    <div class ="Card">

        <div class="wrapper">
            <div class="header1"></div>

            <h1 class="name">Spinach Beetroot Salad</h1>

            <p class="info">This is one of the simplest salads ever, tastes amazing and looks like you've made a real effort.</p>

        </div>
        <div class="wrapper">

            <div class="header2"></div>

            <h1 class="name">Palestine Chicken </h1>

            <p class="info">This is one of the simplest salads ever, tastes amazing and looks like you've made a real effort.</p>

        </div>

    </div>

        </main>
      </div>
 </body>
 </html>
