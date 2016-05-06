@extends('layouts.master')

@section('top-script')
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Template</title>


    <link rel="stylesheet" href="/css/stroll.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" href="/css/code_connection.css">
   
    <style type="text/css">

        

        #tweetResults{
            font-size: 25px;
        }

        body p {

           color :black;
        }

        #profiles{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 770px;
            border: 1px green;
            background-color: yellow;
            margin: 0 auto;
         }


        div#map-canvas {

            width: 73%;
            height: 500px;
            margin-left: 0px;
            margin-right: 0px;

        }

        form {
            width: 700px;
            margin: 0 auto;
            padding: 0px;
        }

        #container {
            margin: 0 auto;
            width: 100%;
          
            
            background-color: lightblue;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }



        #language{

            width: 225px;
        }

        .carousel-inner{
            display: flex;
            flex-direction: row;
            width: 350px;
            margin: 0 auto;

        }

       

        header{
            width: 100%;
        }

        tr {
            width: 100%;
            display: inline-table;
            table-layout: fixed;
        }

        table{
            height:300px;              /*Select the height of the table*/
            display: -moz-groupbox;    /*Firefox Bad Effect*/
        }

        tbody{
            overflow-y: scroll;      
            height: 200px;             /*Select the height of the body*/
            width: 100%;
            position: absolute;
        }

            .wave {
            position: relative;
            width: 800px;
            height: 510px;
            margin: 50px auto;
            padding: 0;
            overflow-x: hidden;
            overflow-y: scroll;
            list-style: none;
        }

        .wave li {
            position: relative;
            height: 200px;
            padding: 20px;
            background: #eee;
            color: #252525;
            z-index: 2;
            overflow: auto;
        }

        .wave li:nth-child(odd) {
            background: #fff;
       }

        h1 {
            text-align: center;
            color: rgba(0,0,0,0.8);
            margin-top: 25px;
            font: bold 80px Helvetica, Arila, sans-serif;
            text-shadow: 1px 1px 1px rgba(255,255,255,0.1);
        }

        h2 {
            margin-top: 25px;
            font: bold 30px Helvetica, Arila, sans-serif;
        }

        p {
            font: 13px/1.5 Georgia, Times, serif;
            color: #757575;
        }

        #coordinates{

            display: flex;
            flex-direction: row;
            justify-content: flex-start;

        }

        #data-lists{
            color: green;
        }

        li{
            border-style: 1px orange;
        }

        #insert_profiles {
            position:relative;

        }

        .container {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .panel-default .panel-heading {
            background-color: #6C8096;
            border-color: #506378;
            color: #F1F1F1;
        }

        .panel-body {
            border: 1.5px solid;
            border-color: #506378;
        }

        .account-txt {
            padding-bottom: 30px;
        }

        textarea {
            resize: none;
        }

        .btn-default {
            background-color: #F67366;
            color:white;
            margin-top: 15px;
        }

        .btn-default:hover {
            background-color: #F67366;
            color:white;
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
        }

        li.data-lists {
            border: 1px solid;
            border-color: #506378;
        }

        .account-box {
            background-color: #F1F1F1;
            color: #777777;
            padding: 15px;

            margin-bottom: 20px;
        }

        .account-box2 {
            background-color: #F1F1F1;
            color: #777777;
            padding: 15px;

            margin-bottom: 10px;
            margin-top: 20px;
        }

        .btn-color {
            color: white;
        }

        .btn-social {
            margin-left: 80px;
        }

       @media (max-width: 400px) {
            li.data-lists {
            border: 1px solid;
            border-color: #506378;
            width: 335px;
            }


        }


    </style>  
@stop

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><h2>Code Connection</h2></div>
            <div class="panel-body">
                <div class="row">

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJMMD6k9NVgkv5xDAcIaENzanI8psOI44"></script>
           
                <br>
                    <div class="col-md-3" id="coordinates">
                    <form>
                        <div class="form-group">
                           
                            <label for="address">Enter City:</label>
                                <input id="address" type="text" class="form-control">
                            <label for="language">Enter Language: </label>
                                <input id="language" type="text" placeholder="javascript or ruby or python" class="form-control">
                            <button class="btn btn-default" id="submit-address" type="submit">Submit</button>

                            <div class="account-box2">Connect with fellow Coders</div>

                            <button class="btn btn-default btn-social"><a href="#insert_profiles" class="btn-color"><i class="fa fa-github-alt"></i> GitHub</a>

                            <br>

                            <button class="btn btn-default btn-social"><a href="#insert_twitter" class="btn-color"><i class="fa fa-twitter"></i> Twitter</a>

                            <br>

                            <button class="btn btn-default btn-social"><a href="#insert_meetups" class="btn-color"><i class="fa fa-users"></i> Meetup</a>
                           
                        </div>
                    </form>
                </div>
                    <div id="map-canvas" style="margin-left:50px;margin-right:0px;"></div>
                </div>
            </div>
    </div>
</div>  <!--  end container -->

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><h2>Connect with fellow Coders</h2></div>
            <div class="panel-body">

                <div class="account-box"><h4>GitHub</h4></div>

                <div  id="insert_profiles"></div>

                <div class="account-box"><h4>Twitter</h4></div>

                <div id="insert_twitter"></div>

                <div class="account-box"><h4>Meetups</h4></div>

                <div id="insert_meetups"></div>

            </div>
        </div>
    </div>
</div>

@stop

@section('bottom-script')
         



<script src="/js/stroll.min.js"></script>

  
<script type="text/javascript">
     // (function(){
"use strict;"
var address;
var language;

$(document).ready(function() {

    var mapOptions = {
            
        zoom: 11,
         center: {
            lat:  29.4284595,
            lng: -98.492433,
        },
        scrollwheel: false,
       

        mapTypeId: google.maps.MapTypeId.HYBRID
    };

    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

function getGitHubData(language,address){
        
    $.get("https://api.github.com/search/users?q=language:"+"\""+language+"\""+"location:"+"\""+address+"\""+"sort:followers").done(function(data) {

            console.log(address);
            alert("AJAX call completed successfully!");

            console.log("Data returned from server:");

            console.log(data);

            console.log('This is the total users:'+data.total_count+' with '+language+' in '+address);

            var html = '<ul class="wave">';

            data.items.forEach(function (items, index, array) {

                html += "<li class=\"data-lists\">"+"<img src=\"/img/github.png\">"
                +"Rank by followers: "+(index+1)+"</br>"
                +" city: "+address+"</br>"
                +" Language: "+language+"</br>"
                +" Username: "+items.login+"</br>"
                +" html_url: "+"<a href=\""+items.html_url+"\" target=\"_blank\">"+items.html_url+"</a></li>"

               
            }); //end foreach
            $("#insert_profiles").html(html);

            stroll.bind( '#insert_profiles ul' );           


            
            var languageObj = [{//element

                language: "javascript",
                description: address,
                image: "<img src=\"/img/langicons/js.png\" alt=\"javascript\">",
                iconUrl: "/img/langicons/js.png",
                strokeColor: '#FFEA05',
                fillColor: '#FFEA05',
               
                },{//element..address,element.description,
                language: "python",
                description: address,
                image: "<img src=\"/img/langicons/python.jpeg\" alt=\"python\">",
                iconUrl: "/img/langicons/python.png",
                strokeColor: '#368EED',
                fillColor:  '#368EED'
                
                },{
                language: "ruby",
                description: address,
                image: "<img src=\"/img/langicons/ruby.png\" alt=\"ruby\">",
                iconUrl: "/img/langicons/ruby.png",
                strokeColor: '#FF0000',
                fillColor: '#FF0000'

                 },{
                language: "ruby on rails",
                description: address,
                image: "<img src=\"/img/langicons/ruby.png\" alt=\"rubyonrails\">",
                iconUrl: "/img/langicons/rubyonrails.jpeg",
                strokeColor: '#FF0000',
                fillColor: '#FF0000'


                 },{
                language: "c",
                description: address,
                image: "<img src=\"/img/langicons/c.png\" alt=\"c\">",
                iconUrl: "/img/langicons/c.png",
                strokeColor: '#5A4DE8',
                fillColor: '#5A4DE8'


                },{
                language: "c++",
                description: address,
                image: "<img src=\"/img/langicons/c++.jpeg\" alt=\"c++\">",
                iconUrl: "/img/langicons/c++.jpeg",
                strokeColor: '#5A4DE8',
                fillColor: '#5A4DE8'


                },{
                language: "c#",
                description: address,
                image: "<img src=\"/img/langicons/csharp.jpeg\" alt=\"c#\">",
                iconUrl: "/img/langicons/csharp.jpeg",
                strokeColor: '#5A4DE8',
                fillColor: '#5A4DE8'


                },{
                language: "c sharp",
                description: address,
                image: "<img src=\"/img/langicons/csharp.jpeg\" alt=\"c#\">",
                iconUrl: "/img/langicons/csharp.jpeg",
                strokeColor: '#5A4DE8',
                fillColor: '#5A4DE8'



                },{
                language: "lisp",
                description: address,
                image: "<img src=\"/img/langicons/lisp.jpeg\" alt=\"lisp\">",
                iconUrl: "/img/langicons/lisp.jpeg",
                strokeColor: '#4DE8A7',
                fillColor: '#4DE8A7'


                },{
                language: "lisp",
                description: address,
                image: "<img src=\"/img/langicons/lisp.jpeg\" alt=\"lisp\">",
                iconUrl: "/img/langicons/lisp.jpeg",
                strokeColor: '#4DE8A7',
                fillColor: '#4DE8A7'

            }];

            switch(language){

                case "javascript":
                console.log('js icon here');
                languageObj.image = "<img src=\"/img/langicons/js.png\" alt=\"javascript\">";
                languageObj.iconUrl = "/img/langicons/js.png";
                languageObj.strokeColor = '#FFEA05',
                languageObj.fillColor = '#FFEA05'

                break;

                case "python":
                console.log('python icon here');
                languageObj.image = "<img src=\"/img/langicons/python.jpeg\" alt=\"python\">";
                languageObj.iconUrl = "/img/langicons/python.jpeg";
                languageObj.strokeColor = '#368EED',
                languageObj.fillColor = '#368EED'

                break;

                case "ruby":
                console.log('ruby icon here');
                languageObj.image = "<img src=\"/img/langicons/ruby.png\" alt=\"ruby\">";
                languageObj.iconUrl = "/img/langicons/ruby.png";
                languageObj.strokeColor = '#FF0000',
                languageObj.fillColor = '#FF0000'
                break;

                case "ruby on rails":
                console.log('ruby on rails icon here');
                languageObj.image = "<img src=\"/img/langicons/rubyonrails.jpeg\" alt=\"rubyonrails\">";
                languageObj.iconUrl = "/img/langicons/rubyonrails.jpeg";
                languageObj.strokeColor = '#FFB3B3',
                languageObj.fillColor = '#FFB3B3'
                break;


                case "c":
                console.log('c icon here');
                languageObj.image = "<img src=\"/img/langicons/c.png\" alt=\"c\">";
                languageObj.iconUrl = "/img/langicons/c.png";
                languageObj.strokeColor = '#90A1D4',
                languageObj.fillColor = '#90A1D4'
                break;


                case "c++":
                console.log('c++ icon here');
                languageObj.image = "<img src=\"/img/langicons/c++.jpeg\" alt=\"c++\">";
                languageObj.iconUrl = "/img/langicons/c++.jpeg";
                languageObj.strokeColor = '#2EB89A',
                languageObj.fillColor = '#2EB89A'
                break;



                case "c#":
                console.log('c# icon here');
                languageObj.image = "<img src=\"/img/langicons/csharp.jpeg\" alt=\"c#\">";
                languageObj.iconUrl = "/img/langicons/csharp.jpeg";
                languageObj.strokeColor = '#FFB3B3',
                languageObj.fillColor = '#FFB3B3'
                break;


                case "c sharp":
                console.log('c# icon here');
                languageObj.image = "<img src=\"/img/langicons/csharp.jpeg\" alt=\"c#\">";
                languageObj.iconUrl = "/img/langicons/csharp.jpeg";
                languageObj.strokeColor = '#FFB3B3',
                languageObj.fillColor = '#FFB3B3'
                break;

                case "mysql":
                console.log('mysql icon here');
                languageObj.image = "<img src=\"/img/langicons/mysql.png\" alt=\"mysql\">";
                languageObj.iconUrl = "/img/langicons/mysql.png";
                languageObj.strokeColor = '#DAEBE7',
                languageObj.fillColor = '#DAEBE7'
                break;


                case "lisp":
                console.log('lisp icon here');
                languageObj.image = "<img src=\"/img/langicons/lisp.jpeg\" alt=\"lisp\">";
                languageObj.iconUrl = "/img/langicons/lisp.jpeg";
                languageObj.strokeColor = '#0D4035',
                languageObj.fillColor = '#0D4035'
                break;

            }

            var geocoder = new google.maps.Geocoder ();
            geocoder.geocode({"address": address}, function(results, status) {

                var lat = results[0].geometry.location.lat();

                var long = results[0].geometry.location.lng();

                var latlng = {
                    lat: lat,
                    lng: long
                };

                console.log(latlng);

                if (status == google.maps.GeocoderStatus.OK) {
                     console.log(results);
                     console.log(status);

                    var marker = new google.maps.Circle ({

                        center: latlng,
                        map: map,
                        strokeOpacity: 0.8,
                        strokeWeight: 1,
                        // draggable: true,
                        geodesic: true,
                        strokeColor: languageObj.strokeColor,
                        fillColor: languageObj.fillColor,
                        fillOpacity: 0.35,
                        label: data.total_count,
                        radius: Math.sqrt(data.total_count)*500,

                    }); 

                    marker.setMap(map);

                    var direction = 1;
                    var rMin = Math.sqrt(data.total_count)*500, rMax = Math.sqrt(data.total_count)*525;
                    setInterval(function() {
                        var radius = marker.getRadius();
                        if ((radius > rMax) || (radius < rMin)) {
                            direction *= -1;
                        }
                        marker.setRadius(radius + direction * 10);
                    }, 1);


                    var markerLanguage = new google.maps.Marker ({
                        
                        position: results[0].geometry.location,
                        map: map,
                        icon: languageObj.iconUrl,
                        animation : google.maps.Animation.DROP,
                        // draggable: true
                   
                    }); 

                    markerLanguage.addListener('click', toggleBounce);

                    function toggleBounce() {

                        if (markerLanguage.getAnimation() !== null) {
                            markerLanguage.setAnimation(null);
                        } else {
                            markerLanguage.setAnimation(google.maps.Animation.BOUNCE);
                        }
                    }

                    map.panTo(results[0].geometry.location);

                    var infowindow = new google.maps.InfoWindow({
                        content: "<span style=\"color:blue\"><b>"+language+" programmers in "+address+" is "+
                        data.total_count+"</b></span>",
                        position: latlng
                        
                    });

                    markerLanguage.addListener('mouseover', function(){
                        infowindow.open(map, marker);
                    });

                       markerLanguage.addListener('mouseout', function(){
                        infowindow.close(map, marker);
                    });

                }else {

                    alert("Geocoding was not successful - STATUS: " + status);

                }
                    
               
                var geocode = lat + ',' + long + ',60mi';
                var count = 100;

                $.get('/ajax/returntweets',{
                    geocode: geocode,
                    count: count,
                    language: language
                }).done(function(d){


                    alert("twitter get call completed successfully!");
                    console.log("Data returned from server:");
                    console.log(d);
                    console.log(address);
                    console.log(language);

                     var twitterHtml = '<ul class="wave">';

                    d.statuses.forEach(function (element, index, array) {

                    twitterHtml += "<li class=\"data-lists\">"+"<img src=\"/img/bird.jpg\">"
                    +"Username: "+element.user.name+"</br>"
                    +"Screen name: "+element.user.screen_name+"</br>"
                    +"Location: "+element.user.location+"</br>"
                    +"Language: "+language+"</br>"
                    +"Text: "+element.text+"</br>"
                    +"Created at: "+element.user.created_at+"</br>"
                    +"Description: "+element.user.description+"</br>"
                    +"</li>"


            }); //end foreach
             $("#insert_twitter").html(twitterHtml);

            stroll.bind( '#insert_twitter ul' ); 
               
            }).fail(function() {
                alert("There was an error!");
            }).always(function() {
                alert("And we're finished!");
            }); //end ajax twittter

            console.log(address);
            console.log(language);

             $.get('/ajax/returnmeetups',{
                    city: address,
                    text: language,
                    lat: lat,
                    lon: long
                }).done(function(events){
                    console.log('my meetup events below:');
                    console.log(events);
                    alert("Meetups get call completed successfully!");
                    console.log("Meetup data from server below:");
                    var meetupResults = '<ul class="wave">';

                    events.forEach(function (element, index, array) {
                   
                    // if( (element.venue.lat != null || element.venue.lat != undefined) && (element.venue.lon != null || element.venue.lat != undefined) ){
                    //     var latt = element.venue.lat;
                    //     var lonn = element.venue.lon;
                    //     console.log(latt + ' ' + lonn);

                    // }
                    

                    meetupResults += "<li class=\"data-lists\">"+"<img src=\"/img/meetup.png\">"+'URL:'+"<a href=\"" + element.event_url + "\" target=\"_blank\">"+element.event_url+"</a></br>"
                    +"Description :"+element.description+"<br>"
                    +"Venue name :"+element.venue.name+"<br>"
                    +"Name :"+element.name+"<br>"
                    +"RSVP maybe :"+element.maybe_rsvp_count+"<br>"
                    +"</li>"




                }); 
                    $("#insert_meetups").html(meetupResults);
                    stroll.bind('#insert_meetups ul');

                
            }).fail(function() {
                alert("There was an error!");
            }).always(function() {
                alert("And we're finished!");
            }); //end ajax meetup

        }); //end geocoder

    }).fail(function() {
                alert("There was an error!");
            }).always(function() {
                alert("And we're finished!");
            });//end ajax github

}//end getGitHubData

$("#submit-address").click(function(e){
    $("#main").innerHTML = "";
    $("#tweetResults").innerHTML = "";

    address = $("#address").val();
    language = $("#language").val();
    e.preventDefault();
    getGitHubData(language,address);
   
});


   
    console.log('hi'); 

    alert( 'The DOM has finished loading!');
                       
}); //end document scope
// })();   //end IFFE
                

</script>
<!---personalized js external file-->
@stop 