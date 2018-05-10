<?php include_once "config.php";?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,target-densitydpi=high-dpi,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link href="images/m.css" rel="stylesheet" type="text/css" />
    <script src="inc/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="inc/ajaxfileupload.js"></script>
    <script type="text/javascript" src="inc/toutiao.js"></script>
    <script type="text/javascript" src="inc/hammer.min.js"></script>
    <script type="text/javascript" src="http://www.primomedia.cn/m/bigdata/public/index.php/js/31PIB13FMKCJ8idE3naSgSk3oQ%253D%253D.js"></script>
<script>
var imgloading = new Image();
imgloading.src = "images/loading.jpg";
var newimages=[];
var img_arr;
function preloadimages(arr){
	var loadedimages=0;
	var postaction=function(){}  //此处增加了一个postaction函数
	var arr=(typeof arr!="object")? [arr] : arr;
	
	
	function imageloadpost(){
		loadedimages++;
		if (loadedimages==arr.length){
			
			postaction(newimages); //加载完成用我们调用postaction函数并将newimages数组做为参数传递进去
		}
	}
	
	for (var i=0; i<arr.length; i++){
		newimages[i]=new Image()
		newimages[i].src=arr[i]
		newimages[i].onload=function(){
			imageloadpost()
		}
		newimages[i].onerror=function(){
			imageloadpost()
		}
	}
	
	
	return { //此处返回一个空白对象的done方法
		done:function(f){
			postaction=f || postaction
		}
	}
}
function loadingSettime(loadedimages){



}
imgloading.onload=function(){
    img_arr=['images/0.png','images/1.png','images/10.png','images/11.png','images/2.png','images/3.png','images/3_0.png','images/3_1.png','images/3_2.png','images/3_3.png','images/3_4.png','images/3_5.png','images/3_6.png','images/4.png','images/5.png','images/6.png','images/7.png','images/7_0.png','images/7_1.png','images/7_2.png','images/7_3.png','images/7_4.png','images/7_5.png','images/7_6.png','images/7_7.png','images/7_8.png','images/7_9.png','images/8.png','images/9.png','images/age_left_bg.png','images/age_right_bg.png','images/arrow.png','images/bgm.mp3','images/dial_bt.png','images/dial_close.png','images/dot_1.png','images/dot_2.png','images/huazi_1.png','images/huazi_2.png','images/huazi_3.png','images/huazi_4.png','images/huazi_5.png','images/huazi_6.png','images/huazi_7.png','images/img_wall_1.png','images/img_wall_2.png','images/img_wall_3.png','images/img_wall_4.png','images/img_wall_5.png','images/img_wall_6.png','images/loading.jpg','images/makeElem','images/p1_1.png','images/p1_bg.jpg','images/p2_1.png','images/p2_10.png','images/p2_11.png','images/p2_12.png','images/p2_13.png','images/p2_14.png','images/p2_15.png','images/p2_16.png','images/p2_2.png','images/p2_3.png','images/p2_4.png','images/p2_5.png','images/p2_6.png','images/p2_7.png','images/p2_8.png','images/p2_9.png','images/p2_bg.jpg','images/p3_1.png','images/p3_2.png','images/p3_bg.jpg','images/p3_bt.png','images/p4_bt_1.png','images/p4_bt_2.png','images/p4_mb.png','images/p5_bg.jpg','images/p5_bt_1.png','images/p5_bt_2.png','images/p5_left.png','images/p5_right.png','images/p6_1.png','images/p6_bg.jpg','images/p6_bt.png','images/p7_bg.jpg','images/p8_1.png','images/p8_2.png','images/p8_3.png','images/p8_4.png','images/p8_5.png','images/p8_bt_1.png','images/p8_bt_2.png','images/shutup.png','images/shutup2.png',];
	preloadimages(img_arr).done(function(images){
		setTimeout(function(){
			$('#loadings').fadeOut(500);
		},200);
	});
};
</script>
<title>给妈妈的一封家书</title>
</head>
<body>

<div id="loadings" class="">
    <label id="loadings_lab" class="posit2 tec">Loading...</label>
</div>
<div id="container">
    <audio id="bgm" src="images/bgm.mp3" loop autoplay ></audio>
    <img class="shutup posit10" style="z-index: 99;" src="images/shutup2.png">
    <img id="arrow" class="posit9" src="images/arrow.png">
	<div id="p1" class="p">
    	<img class="bg" src="images/p1_bg.jpg">
        <img id="p1_1" class="posit3" src="images/p1_1.png">
	</div> 
    <div id="p2" class="p">
        <img class="bg" src="images/p2_bg.jpg">
        <img id="p2_1" class="posit2 p2_img" src="images/p2_1.png">
        <img id="p2_2" class="posit2 p2_img" src="images/p2_2.png">
        <img id="p2_3" class="posit2 p2_img" src="images/p2_3.png">
        <img id="p2_4" class="posit2 p2_img" src="images/p2_4.png">
        <img id="p2_5" class="posit2 p2_img" src="images/p2_5.png">
        <img id="p2_6" class="posit2 p2_img" src="images/p2_6.png">
        <img id="p2_7" class="posit2 p2_img" src="images/p2_7.png">
        <img id="p2_8" class="posit2 p2_img" src="images/p2_8.png">
        <img id="p2_9" class="posit2 p2_img" src="images/p2_9.png">
        <img id="p2_10" class="posit2 p2_img" src="images/p2_10.png">
        <img id="p2_11" class="posit2 p2_img" src="images/p2_11.png">
        <img id="p2_12" class="posit2 p2_img" src="images/p2_12.png">
        <img id="p2_13" class="posit2 p2_img" src="images/p2_13.png">
        <img id="p2_14" class="posit2 p2_img" src="images/p2_14.png">
        <img id="p2_15" class="posit2 p2_img" src="images/p2_15.png">
        <img id="p2_16" class="posit2 p2_img" src="images/p2_16.png">
	</div>
    <div id="p3" class="p">
        <img class="bg" src="images/p3_bg.jpg">
        <img id="3_0" class="posit1 3_img" src="images/3_0.png">
        <img id="p3_bt" class="posit2" src="images/p3_bt.png">
        <img id="p3_1" class="posit3" src="images/p3_1.png">
        <img id="p3_2" class="posit3 dpl" src="images/p3_2.png">
        <input id="fileUpload" class="posit3" type="file" name="fileUpload" onChange="return ajaxFileUpload('fileUpload');" accept="image/*" />
<!--        <input id="fileUpload" class="posit3" type="file" name="fileUpload" onChange="return ajaxFileUpload('fileUpload');" accept="image/*" />-->

    </div>
    <div id="share_box" class="posit9 dpl page" style=" background: #fff;"></div>
    <div id="p4" class="page posit9 dpl">
        <!--图片文件名-->
        <input type="hidden" id="filename" name="filename" />
        <img id="p4_mb" class="posit2" src="images/p4_mb.png">
        <img id="superman" class="posit1" src="images/p1_bg.jpg" />
        <img id="p4_bt_1" class="posit3 p4_bt" src="images/p4_bt_1.png" onclick="$('#fileUpload').click()">
        <img id="p4_bt_2" class="posit3 p4_bt" src="images/p4_bt_2.png" onclick="cutimage()">
    </div>
    <div id="p5" class="page posit9 dpl">
        <img class="bg" src="images/p5_bg.jpg">
        <img id="superman2" class="posit1" src="images/p1_bg.jpg" />
        <img id="img_wall_1" class="posit2 img_wall_pl" src="images/img_wall_1.png" />
        <img id="img_wall_2" class="posit2 img_wall_pl" src="images/img_wall_2.png" />
        <img id="img_wall_3" class="posit2 img_wall_pl" src="images/img_wall_3.png" />
        <img id="img_wall_4" class="posit2 img_wall_pl" src="images/img_wall_4.png" />
        <img id="img_wall_5" class="posit2 img_wall_pl" src="images/img_wall_5.png" />
        <img id="img_wall_6" class="posit2 img_wall_pl" src="images/img_wall_6.png" />
        <div id="dot_bar" class="posit3">
            <img id="dot_1" class="dot_pl fl" src="images/dot_1.png">
            <img id="dot_2" class="dot_pl fl" src="images/dot_2.png">
            <img id="dot_3" class="dot_pl fl" src="images/dot_2.png">
            <img id="dot_4" class="dot_pl fl" src="images/dot_2.png">
            <img id="dot_5" class="dot_pl fl" src="images/dot_2.png">
        </div>
        <img id="p5_left" class="posit3 dpl" src="images/p5_left.png">
        <img id="p5_right" class="posit3" src="images/p5_right.png">
        <img id="p5_bt_1" class="posit3 p5_bt" src="images/p5_bt_1.png">
        <img id="p5_bt_2" class="posit3 p5_bt" src="images/p5_bt_2.png">
        <!-- 花字 -->
        <img id="huazi" class="posit9 hauzi_img" src="images/huazi_1.png">
    </div>
    <div id="p6" class="page posit9 dpl">
        <img id="p6_bg0" class="bg" style="position:absolute; left: 0; top: 0; z-index:0; " src="images/p6_bg.jpg">
        <img id="p6_bg" class="bg" style="position:absolute; left: 0; top: 0;z-index:2; " src="images/p6_bg.jpg">
        <img id="p6_1" class="posit3" src="images/p6_1.png">
        <img id="p6_bt" class="posit3" src="images/p6_bt.png">
        <img id="p6_bt2" class="posit3" src="images/p6_bt2.png">
    </div>
    <div id="p7" class="page posit9 dpl">
        <img class="bg" src="images/p7_bg.jpg">
        <img id="p7_close" class="posit9" src="images/close.png">
        <div id="tel_bar" class="posit3">

        </div>
        <input id="tel" type="hidden" class="posit3" name="tel" value="">
        <div id="number_bar" class="posit3">
            <img id="number_1" data-req="1" class="number_pl fl" src="images/1.png">
            <img id="number_2" data-req="2" class="number_pl fl" src="images/2.png">
            <img id="number_3" data-req="3" class="number_pl fl" src="images/3.png">
            <img id="number_4" data-req="4" class="number_pl fl" src="images/4.png">
            <img id="number_5" data-req="5" class="number_pl fl" src="images/5.png">
            <img id="number_6" data-req="6" class="number_pl fl" src="images/6.png">
            <img id="number_7" data-req="7" class="number_pl fl" src="images/7.png">
            <img id="number_8" data-req="8" class="number_pl fl" src="images/8.png">
            <img id="number_9" data-req="9" class="number_pl fl" src="images/9.png">
            <img id="number_10" class="number_10 fl" src="images/10.png">
            <img id="number_0" data-req="0" class="number_pl fl" src="images/0.png">
            <img id="number_11" class="number_11 fl" src="images/11.png">
        </div>
        <img id="dial_bt" class="posit3" src="images/dial_bt.png" onclick="cheakform();">
        <img id="dial_close" class="posit3" src="images/dial_close.png">
    </div>
    <div id="p8" class="page posit9 dpl">
        <img id="p8_bg0" class="bg" style="position:absolute; left: 0; top: 0; z-index:0; " src="images/p6_bg.jpg">
        <img id="p8_bg" class="bg" style="position:absolute; left: 0; top: 0;z-index:2; " src="images/p6_bg.jpg">
        <img id="p8_bt_1" class="posit3 p8_bt" src="images/p8_bt_1.png">
        <img id="p8_bt_2" class="posit3 p8_bt dpl" src="images/p8_bt_2.png" onclick="shareToutiao()">
        <img id="p8_1" class="posit3 p8_img" src="images/p8_1.png">
        <img id="p8_2" class="posit3 p8_img" src="images/p8_2.png">
        <img id="p8_3" class="posit3 p8_img" src="images/p8_3.png">
        <img id="p8_4" class="posit3 p8_img" src="images/p8_4.png">
        <img id="p8_5" class="posit3 p8_img" src="images/p8_5.png">
    </div>
</div>

<script type="text/javascript">
//ajax 上传
var superman2_src;

var dx,dy,swidth,sheight,sleft,stop;
var p3_set;

ToutiaoJSBridge.call('config', {'client_id': '<?php echo $transKEY?>'}, function(e){
    $("#p8_bt_2").show();
})
function shareToutiao() {
    window.location.href="sslocal://repost_page?repost_type=215&schema=sslocal%3a%2f%2fwebview%3furl%3d<?php echo $transURL?>&title=<?php echo $transTITLE?>&cover_url=<?php echo $transICON?>&is_repost_weitoutiao=true";
    Rams_Count("share");
}
function ajaxFileUpload(fileUploadId) {
        p3_count2=0;
        $('#p3_2').show();
        p3_set=setInterval(function () {
            for(var i=0;i<=6;i++){
                setTimeout(function () {
                    $('#3_0').attr('src','images/3_'+p3_count2+'.png');
                    p3_count2++;
                    if(p3_count2==7){
                        p3_count2=0;
                    }
                },100*i);
            }
        },710);
        $("#fileUpload").hide();
        $.ajaxFileUpload({
            url:'doajaxfileupload.php?n='+fileUploadId,//用于文件上传的服务器端请求地址
            secureuri:false,//是否需要安全协议，一般设置为false
            fileElementId:fileUploadId,//文件上传域的ID
            dataType:'json',//返回值类型 一般设置为json
            //服务器成功响应处理函数
            success:function(data,status){
                console.log(data);
                switch (data.msg){
                    case 'Exceed the limit size':
                        alert('请上传小于64M的文件');
                        break;
                    case 'The suffix is not legal':
                        alert('请上传jpg或者png的图片');
                        break;
                    case 'upload success':
                        clearInterval(p3_set);
                        $('#p3_2').hide();
                        $('#3_0').attr('src','images/3_0.png');
                        document.getElementById("superman").onload=function () {
                            $('#p4').fadeIn(500);
                            //$('#p3').fadeOut(500);
                            $("#superman").show();

                            var mc = new Hammer(document.getElementById("p4_mb"));
                            mc.get('pan').set({ direction: Hammer.DIRECTION_ALL });
                            mc.get('pinch').set({ enable: true });
                            mc.on("panstart", function(ev) {
                                dy=0;
                                dx=0;
                            });
                            mc.on("panmove", function(ev) {
                                nextleft=parseInt($("#superman").css("left"))+(ev.deltaX-dx);
                                nexttop=parseInt($("#superman").css("top"))+(ev.deltaY-dy);
                                $("#superman").css({left:nextleft+"px",top:nexttop+"px"});
                                dy=ev.deltaY;
                                dx=ev.deltaX;
                            });
                            mc.on("pinchstart", function(ev) {
                                swidth=parseInt($("#superman").width());
                                sheight=parseInt($("#superman").height());
                                sleft=parseInt($("#superman").css("lfet"));
                                stop=parseInt($("#superman").css("top"));
                            });
                            mc.on("pinchmove", function(ev) {
                                $("#superman").css({width:swidth*ev.scale+"px",height:sheight*ev.scale+"px",left:(sleft+(1-ev.scale)*swidth/2)+"px",top:(stop+(1-ev.scale)*sheight/2)+"px"});
                            });
                        }

                        $('#superman').css({left:0,top:210/p+'px'});
                        $("#superman").attr("src","upload/"+data.filename);
                        $("#superman").css({"display":"block"});
                        $("#fileUpload").hide();
                        /*$.each(data.info.face_list,function (i,v) {
                            $.each(v.landmark72,function (li,lv) {
                                console.log(li);
                                console.log(lv);
                                var point=$("<div>");
                                point.css("background-color","#1cb9bf");
                                point.css("position","absolute");
                                point.css("left",lv.x+"px");
                                point.css("top",lv.y+"px");
                                point.css("width","3px");
                                point.css("height","3px");
                                $("#pointContainer").append(point);
                            })
                        })*/

                        break;
                    default:
                        $("#fileUpload").show();
                        alert(data.msg+'上传失败，请重新上传');
                        clearInterval(p3_set);
                        $('#3_0').attr('src','images/3_0.png');
                        break;
                }
            },
            //服务器响应失败处理函数
            error:function(data,status,e){
                alert(e);
            }
        })
        return false;
    }
var count=1;
var x,y,p,cx,cx1,cy,startX,startY,endX,endY,sx,sy,xs,ys,startX1,endX1,tx=0,ty=0;
var p5_count=1;
function cutimage(){
    var imagew=$("#superman").width();
    var imagel=parseFloat($("#superman").css("left"));
    var imaget=parseFloat($("#superman").css("top"));
    var mbw=$("#p4_mb").width();
    var filename=$("#superman").attr("src");
    $.ajax({
        url:"cutimage.php",
        type:"POST",
        dataType:"json",
        data:{
            imagew:imagew,
            imagel:imagel,
            imaget:imaget,
            mbw:mbw,
            filename:filename,
        },
        success:function (r) {
            switch(r.msg){
                case "only1face":
                    alert("请重新上传合照，秀出和妈妈在一起的美好瞬间");
                    $("#fileUpload").show();
                    $('#p4').fadeOut(500);
                    break;
                case "cut success":
                    $("#superman2").attr("src","cuted/"+r.filename);

                    $('#p4').fadeOut(500,function () {
                        p3_animate();
                    });
                    break;
            }
            console.log(r);
        }
    })
}
var huazi_count;
var p3_count2=0;
$(document).ready(function() {
	x=parseInt(window.innerWidth);
	y=parseInt(window.innerHeight);
	p=720/x;
	getWidth();

	//
    $('#p7_close').click(function () {
        $('#p7').fadeOut(500);
        $('#p8').fadeIn(500);
    });

    //音乐
    //音乐开关
    $('.shutup').click(function(){
        var i=$(this).attr('src').substr(13,1);
        if(i==2){
            $('.shutup').attr('src','images/shutup.png');
            document.getElementById('bgm').pause();
        }else{
            $('.shutup').attr('src','images/shutup2.png');
            document.getElementById('bgm').play();
        }
    });


    //上箭头
    var arrow_setInterval;
    arrow_setInterval=setInterval(function () {
        $('#arrow').animate({bottom:50+'px'},400,function () {
            $('#arrow').animate({bottom:30+'px'},400);
        });
    },805);


    $('#p5_right').click(function () {
        $('#p5_left').show();
        if(p5_count<5){
            $('.img_wall_pl').animate({left:"-="+x+'px'},500);
            p5_count++;
            for(var i=1;i<=5;i++){
                if(i!==p5_count){
                    $('#dot_'+i).attr('src','images/dot_2.png');
                }
            }
            $('#dot_'+p5_count).attr('src','images/dot_1.png');
        }
        if(p5_count==5){
            $('#p5_right').hide();
        }
    });
    $('#p5_left').click(function () {
        $('#p5_right').show();
        if(p5_count>1){
            $('.img_wall_pl').animate({left:"+="+x+'px'},500);
            p5_count--;
            for(var i=1;i<=5;i++){
                if(i!==p5_count){
                    $('#dot_'+i).attr('src','images/dot_2.png');
                }
            }
            $('#dot_'+p5_count).attr('src','images/dot_1.png');
        }
        if(p5_count==1){
            $('#p5_left').hide();
        }
    });

    $('#p5_bt_1').click(function () {
        $('#p4').fadeIn(500);
        $('#p5').fadeOut(500);
    });
    $('#p5_bt_2').click(function () {
        if(typeof(huazi_count) == "undefined") huazi_count=1;
        $.ajax({
            url:"makeimage.php",
            dataType:"json",
            type:"POST",
            data:{
                filename:$("#superman2").attr("src"),
                model:p5_count,
                huazi:huazi_count
            },
            success:function (r) {
                console.log(r);
                $("#p6_bg").attr("src","made/"+r.filename);
                $("#p8_bg").attr("src","made/"+r.filename);
                $('#p6').fadeIn(500);
                $('.shutup').css({left:10/p+'px',top:160/p+'px'});
                $('#p5').fadeOut(500);
            }
        })
    });

    $('#p6_bt').click(function () {
        //$('#p7').fadeIn(500);
        var p8_date_1=1000;
        var p8_date_2=1300;
        $('#p8').fadeIn(500,function () {
            $('#p8_1').width(145/p).height(82/p).css({left:37/p+'px',top:339/p+'px'});
            $('#p8_2').width(203/p).height(115/p).css({left:494/p+'px',top:370/p+'px'});
            $('#p8_3').width(147/p).height(84/p).css({left:550/p+'px',top:710/p+'px'});
            $('#p8_4').width(211/p).height(120/p).css({left:70/p+'px',top:825/p+'px'});
            $('#p8_5').width(103/p).height(59/p).css({left:530/p+'px',top:940/p+'px'});

            $('#p8_1').animate({width:145/p+'px',height:82/p+'px',left:27/p+'px',top:339/p+'px',opacity:0.6},p8_date_1,function () {
                $('#p8_1').animate({width:130/p+'px',height:74/p+'px',left:47/p+'px',top:339/p+'px',opacity:1},p8_date_1);
            });

            $('#p8_3').animate({width:130/p+'px',height:74/p+'px',left:550/p+'px',top:710/p+'px',opacity:0.6},p8_date_1,function () {
                $('#p8_3').animate({width:147/p+'px',height:84/p+'px',left:570/p+'px',top:710/p+'px',opacity:1},p8_date_1);
            });

            $('#p8_5').animate({width:103/p+'px',height:59/p+'px',left:530/p+'px',top:930/p+'px',opacity:0.6},p8_date_1,function () {
                $('#p8_5').animate({width:80/p+'px',height:46/p+'px',left:530/p+'px',top:950/p+'px',opacity:1},p8_date_1);
            });
            setInterval(function () {
                $('#p8_1').animate({width:145/p+'px',height:82/p+'px',left:27/p+'px',top:339/p+'px',opacity:0.6},p8_date_1,function () {
                    $('#p8_1').animate({width:130/p+'px',height:74/p+'px',left:47/p+'px',top:339/p+'px',opacity:1},p8_date_1);
                });

                $('#p8_3').animate({width:130/p+'px',height:74/p+'px',left:550/p+'px',top:710/p+'px',opacity:0.6},p8_date_1,function () {
                    $('#p8_3').animate({width:147/p+'px',height:84/p+'px',left:570/p+'px',top:710/p+'px',opacity:1},p8_date_1);
                });

                $('#p8_5').animate({width:103/p+'px',height:59/p+'px',left:530/p+'px',top:930/p+'px',opacity:0.6},p8_date_1,function () {
                    $('#p8_5').animate({width:80/p+'px',height:46/p+'px',left:530/p+'px',top:950/p+'px',opacity:1},p8_date_1);
                });
            },2*p8_date_1);
            setTimeout(function () {
                $('#p8_2').animate({width:180/p+'px',height:102/p+'px',left:494/p+'px',top:360/p+'px',opacity:0.8},p8_date_2,function () {
                    $('#p8_2').animate({width:203/p+'px',height:115/p+'px',left:494/p+'px',top:380/p+'px',opacity:1},p8_date_2);
                });

                $('#p8_4').animate({width:180/p+'px',height:102/p+'px',left:70/p+'px',top:815/p+'px',opacity:0.8},1500,function () {
                    $('#p8_4').animate({width:211/p+'px',height:120/p+'px',left:70/p+'px',top:835/p+'px',opacity:1},p8_date_2);
                });
                setInterval(function () {
                    $('#p8_2').animate({width:180/p+'px',height:102/p+'px',left:494/p+'px',top:360/p+'px',opacity:0.8},p8_date_2,function () {
                        $('#p8_2').animate({width:203/p+'px',height:115/p+'px',left:494/p+'px',top:380/p+'px',opacity:1},p8_date_2);
                    });

                    $('#p8_4').animate({width:180/p+'px',height:102/p+'px',left:70/p+'px',top:815/p+'px',opacity:0.8},p8_date_2,function () {
                        $('#p8_4').animate({width:211/p+'px',height:120/p+'px',left:70/p+'px',top:835/p+'px',opacity:1},p8_date_2);
                    });
                },2*p8_date_2);
            },500);
        });
        $('.shutup').css({left:10/p+'px',top:160/p+'px'});
        setTimeout(function () {
            $('#p8').fadeOut(500);
            $('#p7').fadeIn(500);
        },3000);
        $('#p6').fadeOut(500);
    });
    var tel_count=0;
    var s;
    var tel_sum=[];
    $('.number_pl').click(function () {
        s=$(this).data('req');
        var w=$('#tel').val();
        if(tel_count<11){
            tel_sum.unshift(s);
            $('#tel_bar').empty();
            for(var i=0;i<tel_sum.length;i++){
                $('#tel_bar').append('<img src="images/7_'+tel_sum[i]+'.png">');
                $('#tel_bar img').width(32/p).height(47/p);
            }
            $('#tel').val(w+s);
            tel_count++;
        }
    });
    $('#dial_close').click(function () {
        var w=$('#tel').val();
        console.log(tel_count);
        if(tel_count>=1){
            tel_sum.shift();
            console.log(tel_sum);
            $('#tel_bar').empty();
            for(var i=0;i<tel_sum.length;i++){

                $('#tel_bar').append('<img src="images/7_'+tel_sum[i]+'.png">');
                $('#tel_bar img').width(32/p).height(47/p);
            }
            var q=w.substring(0,w.length-1);
            $('#tel').val(q);
            tel_count--;
        }
    });


    //返回首页
    $('#p8_bt_1').click(function () {
        //window.location.href=window.location.href+'?timeline='+Math.random();
        window.location.href='index.php';
    });

	//手指滑动切换页面
	document.getElementById("container").addEventListener("touchstart", touchStart, false);
	document.getElementById("container").addEventListener("touchmove", touchMove, false);
	document.getElementById("container").addEventListener("touchend", touchEnd, false);
	
	function touchStart(event){
		startY = event.touches[0].clientY;
	}
	function touchMove(event){
		event.preventDefault();
	}
	function touchEnd(event){
		endY = event.changedTouches[0].clientY;
		if(startY-endY>30&&count<3){
			nextpage();
            count++;
            if(count==2){
                p2_animate();
            }
            if(count==3){

                $('#arrow').fadeOut(500);
            }
		}

	}




});

    function trim(str){ //删除左右两端的空格
        return str.replace(/(^\s*)|(\s*$)/g, "");
    }
    function cheakform() {
        var phone = document.getElementById('tel').value;
        var myregPhone = /^(13[0-9]|14[0-9]|15[0-9]|18[0-9])\d{8}$/i;
        if (phone == '') {
            alert('请输入您的手机号');
            return false;
        } else {
            if (!myregPhone.test(phone)) {
                alert('请输入有效的手机号');
                return false;
            }
        }
        $.ajax({
            url:"count_phone.php",
            type:"POST",
            data:{
                call:1
            },
            success:function (r) {
                console.log(r);
            }
        })
         window.location.href="tel:"+phone+"";

        $('#p7').fadeOut(500);

        $('#p8').fadeIn(500);
        $('.shutup').css({left:10/p+'px',top:160/p+'px'});
    }



//切换页面函数
function nextpage(){
	var s=$('#p3').css('top');
	s=parseFloat(s.substring(0,s.length-2));
	if(s-y>=0){
		for(var i=1;i<=3;i++){
			$('#p'+i).animate({top:"-="+y+"px"},500,function(){
                if(count==3){
                    $('#p2').hide();
                }
			});
		}

	}

}
function nextpage2(){
    var s=$('#p3').css('top');
    s=parseFloat(s.substring(0,s.length-2));

        for(var i=1;i<=3;i++){
            $('#p'+i).animate({top:"+="+y+"px"},500,function(){

            });
        }
}
var p2_count=1;
var p2_setInterval_1;
var p2_setInterval_2;
function p2_animate() {
    p2_setInterval_1=setInterval(function(){

        if(p2_count==9){
            clearInterval(p2_setInterval_1);
            setTimeout(function () {
                for(var i=1;i<=8;i++){
                    $('#p2_'+i).fadeOut(500);
                }
            },1000);

            p2_setInterval_2=setInterval(function(){
                if(p2_count==17){
                    clearInterval(p2_setInterval_2);
                }else{
                    p2_animate2(p2_count);
                    p2_count++;
                }

            },1000);


        }else{
            p2_animate2(p2_count);
            p2_count++;
        }
    },1000);



}
function p2_animate2(e) {
    $('#p2_'+e).animate({top:"-="+50/p+'px',opacity:1},2000);
}

//p3  逐帧动画
var p3_count=0;
function p3_animate() {
    $('#p3_1').width(720/p).height(905/p).css({left:0/p+'px',top:90/p+'px',opacity:0});
    $('#p3').show();
    $('#p5').hide();

    $('#share_box').show();
    setTimeout(function () {
        $('#share_box').hide();
    }, 50);
    p3_count=0;

    for(var i=0;i<=6;i++){
        setTimeout(function () {
            $('#3_0').attr('src','images/3_'+p3_count+'.png');
            p3_count++;
        },100*i);
    }

    setTimeout(function () {
        $('#p3_1').animate({width:449/p+'px',height:650/p+'px',left:(x-449/p)/2+'px',top:273/p+'px',opacity:1},1000,function () {
            $('#p3_1').width(720/p).height(905/p).css({left:0/p+'px',top:90/p+'px',opacity:0});
            $('#3_0').attr('src','images/3_0.png');
            huazi_count=Math.floor(Math.random()*7 + 1);
            $('#huazi').attr('src','images/huazi_'+huazi_count+'.png');
            //$('#p3').fadeOut(500);
            $('#p5').fadeIn(500);

        });
    },800);
}
function getWidth(){
    //全局页面的排序
    for(var i=1;i<=3;i++){
        $('#p'+i).css('top',(i-1)*y+'px');
    }
    $('.p,.bg,#container,#rule').width(x);
    $('.p,#container').height(y);
    $('#p1').css({left:0,top:0});
    $('#arrow').width(40/p).height(25/p).css({left:(x-40/p)/2+'px',bottom:40/p});
    $('.shutup').width(80/p).height(80/p);
    $('.shutup').css({left:30/p+'px',top:80/p+'px'});
    $('#loadings_lab').css({width:200/p+'px',height:50/p+'px',left:260/p+'px',top:(y-50/p)/2+'px',lineHeight:50/p+'px',fontSize:30/p+'px'});
    //p1

    $(".bg").width(x).height(1410/p).css({left:0,top:0});
    $('#p3_bt').width(313/p).height(163/p).css({left:(x-313/p)/2+'px',bottom:95/p});
    $('#fileUpload').width(313/p).height(163/p).css({left:(x-313/p)/2+'px',bottom:95/p});
    $('.page').width(x).height(y).css({left:0,top:0});
    $('#p1_1').width(560/p).height(95/p).css({left:80/p+'px',bottom:95/p+'px'});
    //p2
    $('.p2_img').width(432/p).height(42/p).css({left:72/p+'px'});
    $('#p2_1').css({top:300/p+'px'});
    $('#p2_2').css({top:352/p+'px'});
    $('#p2_3').css({top:404/p+'px'});
    $('#p2_4').css({top:510/p+'px'});
    $('#p2_5').css({top:562/p+'px'});
    $('#p2_6').css({top:670/p+'px'});
    $('#p2_7').css({top:732/p+'px'});
    $('#p2_8').css({top:784/p+'px'});

    $('#p2_9').css({top:300/p+'px'});
    $('#p2_10').css({top:352/p+'px'});
    $('#p2_11').css({top:404/p+'px'});
    $('#p2_12').css({top:456/p+'px'});
    $('#p2_13').css({top:560/p+'px'});
    $('#p2_14').css({top:612/p+'px'});
    $('#p2_15').css({top:664/p+'px'});
    $('#p2_16').css({top:716/p+'px'});
    //p3
    $('.3_img').width(x).height(1410/p).css({left:0,top:0});
    //$('#p3_1').width(517/p).height(740/p).css({left:137/p+'px',top:270/p+'px'});
    $('#p3_1').width(720/p).height(905/p).css({left:0/p+'px',top:90/p+'px'});
    $('#p3_2').width(220/p).height(56/p).css({left:(x-220/p)/2+'px',top:810/p+'px'});
    //p4
    $('#p4_mb').width(x).height(1410/p).css({left:0,top:0});
    $('.p4_bt').width(232/p).height(63/p).css({bottom:95/p+'px'});
    $('#p4_bt_1').css({left:48/p+'px'});
    $('#p4_bt_2').css({left:442/p+'px'});
    $('#superman').width(x);
    $('#superman2').width(448/p).css({left:137/p+'px',top:270/p+'px'});
    //
    $('.img_wall_pl').width(x).height(1410/p).css({left:0,top:0});
    for(var i=1;i<=6;i++){
        $('#img_wall_'+i).css('left',(i-1)*x+'px');
    }
    $('#p5_left').width(100/p).height(200/p).css({left:0/p+'px',top:425/p+'px'});
    $('#p5_right').width(100/p).height(200/p).css({right:0/p+'px',top:425/p+'px'});
    $('.p5_bt').width(268/p).height(73/p).css({bottom:65/p+'px'});
    $('#p5_bt_1').css({left:76/p+'px'});
    $('#p5_bt_2').css({left:376/p+'px'});
    $('#dot_bar').width(120/p).height(18/p).css({left:(x-120/p)/2+'px',top:978/p+'px'});
    $('.dot_pl').width(17/p).height(18/p).css({marginLeft:3/p+'px',marginRight:3/p+'px'});
    $('#age_left_bar').width(82/p).height(78/p).css({left:164/p+'px',top:391/p+'px'});
    $('#age_left_bg,#age_right_bg').width(82/p).height(78/p).css({left:0/p+'px',top:0/p+'px'});
    $('#age_left_lab').width(72/p).height(78/p).css({left:0/p+'px',top:6/p+'px',lineHeight:78/p+'px',fontSize:30/p+'px'});
    $('#age_right_lab').width(82/p).height(78/p).css({left:5/p+'px',top:0/p+'px',lineHeight:78/p+'px',fontSize:30/p+'px'});
    $('#age_right_bar').width(82/p).height(78/p).css({left:494/p+'px',top:288/p+'px'});
    $('#huazi').width(265/p).height(166/p).css({left:142/p+'px',top:525/p+'px'});
    //p6
    $('#p6_1').width(373/p).height(35/p).css({left:(x-373/p)/2+'px',top:925/p+'px'});
    $('#p6_bt').width(200/p).height(95/p).css({left:(x-200/p)/2+'px',bottom:106/p+'px'});
    $('#p6_bt2').width(312/p).height(60/p).css({left:(x-312/p)/2+'px',bottom:40/p+'px'});
    //
    $('#tel').width(450/p).height(70/p).css({left:(x-450/p)/2+'px',top:208/p+'px',fontSize:50/p+'px'});
    $('#number_bar').width(537/p).height(540/p).css({left:(x-537/p)/2+'px',top:420/p+'px'});
    $('.number_pl,#number_10,#number_11').width(99/p).height(99/p).css({marginLeft:40/p+'px',marginRight:40/p+'px',marginBottom:35/p+'px'});
    $('#dial_bt').width(121/p).height(121/p).css({left:(x-121/p)/2+'px',top:960/p+'px'});
    $('#dial_close').width(50/p).height(33/p).css({left:540/p+'px',top:1009/p+'px'});
    $('#tel_bar').width(380/p).height(70/p).css({left:(x-380/p)/2+'px',top:208/p+'px',fontSize:50/p+'px'});
    $('#tel_bar img').width(32/p).height(47/p);
    //
    $('#p7_close').width(100/p).height(100/p).css({right:20/p+'px',top:20/p+'px'});
    //p8
    $('.p8_bt').width(268/p).height(73/p).css({bottom:65/p+'px'});
    $('#p8_bt_1').css({left:76/p+'px'});
    $('#p8_bt_2').css({left:376/p+'px'});
    $('#p8_1').width(145/p).height(82/p).css({left:37/p+'px',top:339/p+'px'});
    $('#p8_2').width(203/p).height(115/p).css({left:494/p+'px',top:370/p+'px'});
    $('#p8_3').width(147/p).height(84/p).css({left:550/p+'px',top:710/p+'px'});
    $('#p8_4').width(211/p).height(120/p).css({left:70/p+'px',top:825/p+'px'});
    $('#p8_5').width(103/p).height(59/p).css({left:530/p+'px',top:910/p+'px'});
    $('#p8_bg,#p6_bg').height(1170/p);
}
</script>
</body>
</html>