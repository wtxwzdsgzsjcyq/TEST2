	function HeadSlider(type){
		if(type=="mobile"){
			$(".Pic-list .Card").height($(".Pic-list").width());
			var TextSwiper =new Swiper('.Text-list',{
			initialSlide :0,
			wrapperClass : 'Text-ul',
			pagination: '.ChooseBg',
			paginationElement : 'li',
			paginationClickable : true,
			paginationBulletRender : function (index, className) {
				if (index == 0) {
					return '<li class="info ' + className + '" ><span class="fs1" aria-hidden="true" data-icon="b"></span><span>信息</span></li>';
				};
				if (index == 1) {
					return '<li class="data ' + className + '" ><span class="fs1" aria-hidden="true" data-icon="g"></span><span>数据</span></li>';
				};
				if (index == 2) {
					return '<li class="play ' + className + '" ><span class="fs1" aria-hidden="true" data-icon=""></span><span>玩法</span></li>';
				}; 
				if (index == 3) {
					return '<li class="other ' + className + '" ><span class="fs1" aria-hidden="true" data-icon=""></span><span>其他</span></li>';
				}; 
			},
            onSlideChangeEnd: function(swiper){
                var dx = swiper.activeIndex;
                $('.Text-ul').height($('.Text-ul>li').eq(dx).find('.slidebox').height()+45)
            },
            onInit: function(swiper){
                var dx = swiper.activeIndex;
                $('.Text-ul').height($('.Text-ul>li').eq(dx).find('.slidebox').height()+45)
            }
		});
		}
		else $(".Pic-list .Card").height(475);
		var mySwiper = new Swiper('.Pic-list',{
			wrapperClass : 'Pic-ul',
            loop:true,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });




		}
	function numout(data,seat){
		var PhoneVer = navigator.userAgent;
		var max = data.length;
		if (max >= 5){
			for (var i = 0; i < max; i++) {
                if(PhoneVer.substring(13,19) == "iPhone"){
                    $("."+seat).css({"width":"37%"})
                }
                else{$("."+seat).css({"width":"38%"})}
                $("."+seat).each(function(){
                    $(this).append("<li style='width:16%'></li>");
                })
                $("."+seat).each(function(){
                    $(this).find('li:eq('+i+')').addClass("font"+data.charAt(i));
                })
			}
		}
		else{
			for (var i = 0; i < max; i++) {
                $("."+seat).each(function(){
                    $(this).append("<li></li>");
                })
                $("."+seat).each(function(){
                    $(this).find('li:eq('+i+')').addClass("font"+data.charAt(i));
                })
            }
        }
		}
		function TureName(ID,type){
			ID=QiNiuPic(ID);
			
			PIC5=ID+"E.jpg";
			PIC1=ID+"A.jpg";
			PIC2=ID+"B.jpg";
			PIC3=ID+"C.jpg";
			PIC4=ID+"D.jpg";
			PICZ=ID+"Z.png";			
            picurl = STATIC_BASE_URL + "/fgo/card/servant/"+ID+"E.png";
			
			/*
			PIC5=ID+"E.jpg";
			PIC1=ID+"A.jpg";
			PIC2=ID+"B.jpg";
			PIC3=ID+"C.jpg";
			PIC4=ID+"D.jpg";
			PICZ=ID+"Z.png";			
            picurl = STATIC_BASE_URL + "/fgo/card/servant/"+ID+"E.jpg";
	*/		
	if(ID==83){
				$(".Pic-ul li:eq(0)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC1+")no-repeat 0 0","background-size":"100%"});
				$(".Pic-ul li:eq(1)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC2+")no-repeat 0 0","background-size":"100%"});
				if(type=="PC"){
					$(".Pic-ul li:eq(0)").empty();
					$(".Pic-ul li:eq(1)").empty();
				}
				$(".Pic-ul li:eq(4)").remove();
				$(".Pic-ul li:eq(3)").remove();
				$(".Pic-ul li:eq(2)").remove();
			}
			else if(ID == 149 || ID == 151 || ID == 152 || ID ==168){
				$(".Pic-ul li:eq(0)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC1+")no-repeat 0 0px","background-size":"100%"});
				$(".Pic-ul li:eq(1)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC2+")no-repeat 0 0px","background-size":"100%"});
				$(".Pic-ul li:eq(2)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC3+")no-repeat 0 0px","background-size":"100%"});
				$(".Pic-ul li:eq(3)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC4+")no-repeat 0 0px","background-size":"100%"});
				if(ID  == 149 || ID == 151 || ID == 152 || ID > 160){
					$(".Pic-ul li:eq(4)").remove();
				}				
				else{
					$(".Pic-ul li:eq(4)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC5+")no-repeat 0 20px","background-size":"100%"});
				}				
				$(".Pic-ul .job").remove();
				$(".Pic-ul .Star").remove();
				$(".Pic-ul .TureName").remove();
				$(".Pic-ul .Boder-head").remove();
				$(".Pic-ul .Boder-left").remove();
				$(".Pic-ul .Boder-right").remove();
				$(".Pic-ul .Boder-foot").remove();
				$(".Pic-ul .AtkNum").remove();
				$(".Pic-ul .HpNum").remove();
				
			}
			else{
				if( ID > 160){
					$(".Pic-ul li:eq(4)").remove();
				}	
				$(".TureName").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PICZ+") no-repeat bottom","background-size":"100%"});
				$(".Pic-ul li:eq(0)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC1+")no-repeat 0 20px","background-size":"100%"});
				$(".Pic-ul li:eq(1)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC2+")no-repeat 0 20px","background-size":"100%"});
				$(".Pic-ul li:eq(2)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC3+")no-repeat 0 20px","background-size":"100%"});
				$(".Pic-ul li:eq(3)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC4+")no-repeat 0 20px","background-size":"100%"});                
                $(".Pic-ul li:eq(4)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/servant/"+PIC5+")no-repeat 0 20px","background-size":"100%"});                
			}
		}
	function TureName2(ID,type){
		ID=QiNiuPic(ID);
		
		PIC5=ID+"E.png";
    	PIC1=ID+"A.png";
    	PIC2=ID+"B.png";
    	PIC3=ID+"C.png";
    	PIC4=ID+"D.png";
    	PICZ=ID+"Z.png";
		value1='https:'+STATIC_BASE_URL + '/fgo/card/servant/'+PIC1;
        value2='https:'+STATIC_BASE_URL + '/fgo/card/servant/'+PIC2;
        value3='https:'+STATIC_BASE_URL + '/fgo/card/servant/'+PIC3;
        value4='https:'+STATIC_BASE_URL + '/fgo/card/servant/'+PIC4;
        value5='https:'+STATIC_BASE_URL + '/fgo/card/servant/'+PIC5;
		
/*
		PIC5=ID+"E.png";
    	PIC1=ID+"A.png";
    	PIC2=ID+"B.png";
    	PIC3=ID+"C.png";
    	PIC4=ID+"D.png";
    	PICZ=ID+"Z.png";
		value1=STATIC_BASE_URL + '/fgo/card/servant/'+PIC1;
        value2=STATIC_BASE_URL + '/fgo/card/servant/'+PIC2;
        value3=STATIC_BASE_URL + '/fgo/card/servant/'+PIC3;
        value4=STATIC_BASE_URL + '/fgo/card/servant/'+PIC4;
        value5=STATIC_BASE_URL + '/fgo/card/servant/'+PIC5;
*/  
      var li1 = '<li class="swiper-slide"><img src="'+value1+'" /></li>';
        var li2 = '<li class="swiper-slide"><img src="'+value2+'" /></li>';
        var li3 = '<li class="swiper-slide"><img src="'+value3+'" /></li>';
        var li4 = '<li class="swiper-slide"><img src="'+value4+'" /></li>';
        var li5 = '<li class="swiper-slide"><img src="'+value5+'" /></li>';
        $('.oplist').append(li1);
        $('.oplist').append(li2);
        $('.oplist').append(li3);
        $('.oplist').append(li4);
        $('.oplist').append(li5);

        if(type == 'PC'){
            $('.opbtn a').eq(0).attr({'value':value1,'href':value1});
            $('.opbtn a').eq(1).attr({'value':value2,'href':value2});
            $('.opbtn a').eq(2).attr({'value':value3,'href':value3});
            $('.opbtn a').eq(3).attr({'value':value4,'href':value4});
            $('.opbtn a').eq(4).attr({'value':value5,'href':value5});
            if(ID==83){
                $('.opbtn a').eq(4).remove();
                $('.opbtn a').eq(3).remove();
                $('.opbtn a').eq(2).remove();
            }
        }else{
            $('.opbtn button').eq(0).attr({'value':value1,'href':value1});
            $('.opbtn button').eq(1).attr({'value':value2,'href':value2});
            $('.opbtn button').eq(2).attr({'value':value3,'href':value3});
            $('.opbtn button').eq(3).attr({'value':value4,'href':value4});
            $('.opbtn button').eq(4).attr({'value':value5,'href':value5});
            if(ID==83){
                $('.opbtn button').eq(4).remove();
                $('.opbtn button').eq(3).remove();
                $('.opbtn button').eq(2).remove();
            }
        }
    }
    function QiNiuPic(ID){
    	if(ID<10){
    		ID="00"+ID;
    	}
    	else if(ID<100){
    		ID="0"+ID;
    	}
    	else ID=ID;
    	return ID;
    }
	function Allnumout(Num1,Num2,Num3,Num4,seat){
			numout(Num1,seat+"-0");
			numout(Num1,seat+"-1");
			numout(Num2,seat+"-2");
			numout(Num3,seat+"-3");
			numout(Num4,seat+"-4");	
	}
	function RAbout(){
		$(".NAME").text(pet.NAME);
		$(".NAME_JP").text(pet.NAME_JP);
		$(".NAME_EN").text(pet.NAME_EN);
		$(".Height").text(pet.Height);
		$(".Weight").text(pet.Weight);
		$(".Origin").text(pet.Origin);
		$(".Region").text(pet.Region);
		$(".Attributes").text(pet.Attributes);
		$(".Gender").text(pet.Gender);
		$(".Camp").text(pet.Camp);
		$(".Property").text(pet.Property);
        $(".Property").attr('title',pet.Property);
		$(".Crit").text(pet.Crit);
		$(".Death").text(pet.Death);
		$(".CritPr").text(pet.CritPr);
		/*$(".InitiativeNp").text(((pet.InitiativeNp*1000000)/10000)+'%');
		$(".TdPointQ").text(((pet.TdPointQ*1000000)/10000)+'%');
        $(".TdPointA").text(((pet.TdPointA*1000000)/10000)+'%');
        $(".TdPointB").text(((pet.TdPointB*1000000)/10000)+'%');
        $(".TdPointEx").text(((pet.TdPointEx*1000000)/10000)+'%');
        $(".Passive").text(((pet.Passive*1000000)/10000)+'%');*/
        $(".InitiativeNp").text(pet.InitiativeNp);
        $(".TdPointQ").text(pet.TdPointQ);
        $(".TdPointA").text(pet.TdPointA);
        $(".TdPointB").text(pet.TdPointB);
        $(".TdPointEx").text(pet.TdPointEx);
        $(".Passive").text(pet.Passive);
		if(pet.ArtHit == 1){
			$(".ArtHit").text(pet.ArtHit+' Hit');
		}else{
			$(".ArtHit").text(pet.ArtHit+' Hits');
		}
		if(pet.BusHit == 1){
			$(".BusterHit").text(pet.BusHit+' Hit');
		}else{
			$(".BusterHit").text(pet.BusHit+' Hits');
		}
		if(pet.QuiHit == 1){
			$(".QuickHit").text(pet.QuiHit+' Hit');
		}else{
			$(".QuickHit").text(pet.QuiHit+' Hits');
		}
		if(pet.EXHit == 1){
			$(".ExtraHit").text(pet.EXHit+' Hit');
		}else{
			$(".ExtraHit").text(pet.EXHit+' Hits');
		}

		$(".LV1_HP").text(pet.LV1_HP);
		$(".LVMAX4_HP").text(pet.LVMAX4_HP);
		$(".LV1_ATK").text(pet.LV1_ATK);
		$(".LVMAX4_ATK").text(pet.LVMAX4_ATK);
		$(".CV").text(pet.CV);
		$(".ILLUST").text(pet.ILLUST);
		$(".tablebackground div").each(function(){
			if($(this).text()== "" || $(this).text() == "空" || $(this).text() == null)
			{$(this).text("　")}
//			if(n == "" || n == "空" || n == null){alert("1")}else{alert("0")};
			});
	}
	function CCards(Arts,Buster,Quick,url){
		var Buster = Number(Buster);
		var Arts = Number(Arts);
		var Quick = Number(Quick);
		var Two   = Buster+Arts;
		var Three = Buster+Arts+Quick;
		if(Buster==""&&Arts==""&&Quick=="")
			Arts=5;
		for (var i = 0; i < Arts; i++) {
		$(".CCards img:eq("+i+")").attr("src",url+"/images/Box/Arts.png");
		};
		for (var i = Arts; i < Two; i++) {
		$(".CCards img:eq("+i+")").attr("src",url+"/images/Box/Buster.png");
		};
		for (var i = Two; i < Three; i++) {
		$(".CCards img:eq("+i+")").attr("src",url+"/images/Box/Quick.png");
		};
	}
	function Skill(Place,Ico,Title,Text,lv,Num,CD,skillnum){
		if(Title == "" || Title == "空" || Title == null || Title == undefined){
			$("."+Place+" table:eq("+Num+")").hide();
		}else{
			$("."+Place+" table:eq("+Num+") img").attr("src",STATIC_BASE_URL+"/mobile/images/Skill/"+Ico);
			$("."+Place+" table:eq("+Num+") td:eq(1)").text(Title);
			$("."+Place+" table:eq("+Num+") td:eq(2)").find("p").text("固有等级："+lv);
			if($("."+Place+" table:eq("+Num+") img").attr("src").length > 0){
			}
			if(CD == "" || CD == "空" || CD == null || CD == undefined){
			$("."+Place+" table:eq("+Num+") td:eq(3)").find("p").text("");}
			else{
			$("."+Place+" table:eq("+Num+") td:eq(3)").find("p").text("冷却时间："+CD);}
		};
		if(skillnum == "" || skillnum == "空" || skillnum == null || skillnum == undefined){
			$("."+Place+" table:eq("+Num+") p").last().text(Text);//技能提示
		}else{
			var bj_arr = Text.split('&');
			var sz_arr = skillnum.split('-');
			for(var i=0;i<bj_arr.length;i++){
				var arr = sz_arr[i]
				if(arr){
					arr = arr.split('|');
					var dom = '<div class="intro">'+bj_arr[i]+'</div><div class="numBox"><div class="numList"></div></div>';
					$("."+Place+" table:eq("+Num+") p").last().append(dom);
					for(var j=0;j<arr.length;j++){
						// alert(arr[j]+" -"+arr.length)
						if(arr.length==1)var dom2 ='<span style="width:100%">'+arr[j]+'</span>';
						else{
						if(j>4)var dom2 ='<span style="width:'+1/arr.length*200+'%">'+arr[j]+'</span>';
						else if(j<4)dom2 ='<span style="border-bottom:none;width:'+1/arr.length*200+'%">'+arr[j]+'</span>';
						else dom2 ='<span style="border-right:none;border-bottom:none;width:'+1/arr.length*200+'%">'+arr[j]+'</span>';
						}
						$("."+Place+" table:eq("+Num+") p").last().find('.numList').eq(i).append(dom2)
					}
				}
				
			}

			var num = 0;
			$("."+Place).on('click','.nextBtn',function(){
				num++;
				var len = Math.ceil($(this).prev().find('span').length/5);
				if(num == len){
					$(this).prev().find('.numList').animate({'left': 0},'swing');
					$(this).removeClass('prevbtn')
					num = 0;
				}else{
					var left = -235*num;
					$(this).prev().find('.numList').animate({'left': left},'swing');
					if(len == (num+1)){
						$(this).addClass('prevbtn')
					}else{
						$(this).removeClass('prevbtn')
					}
				}
			})
		}
	}	
	function SkillPC(Place,Ico,Title,Text,lv,Num,CD,skillnum){
		if(Title == "" || Title == "空" || Title == null || Title == undefined){
			$("."+Place+" table:eq("+Num+")").hide();
		}else{
			$("."+Place+" table:eq("+Num+") img").attr("src",STATIC_BASE_URL+"/mobile/images/Skill/"+Ico);
			$("."+Place+" table:eq("+Num+") td:eq(1)").text(Title);
			$("."+Place+" table:eq("+Num+") td:eq(2)").find("p").text("固有等级："+lv);
			if($("."+Place+" table:eq("+Num+") img").attr("src").length > 0){
			}
			if(CD == "" || CD == "空" || CD == null || CD == undefined){
			$("."+Place+" table:eq("+Num+") td:eq(3)").find("p").text("");}
			else{
			$("."+Place+" table:eq("+Num+") td:eq(3)").find("p").text("冷却时间："+CD);}
		};
		if(skillnum == "" || skillnum == "空" || skillnum == null || skillnum == undefined){
			$("."+Place+" table:eq("+Num+") p").last().text(Text);//技能提示
		}else{
			var bj_arr = Text.split('&');
			var sz_arr = skillnum.split('-');
			for(var i=0;i<bj_arr.length;i++){
                // console.log(bj_arr[i],sz_arr[i]);
				var arr = sz_arr[i]
				if(arr){
					arr = arr.split('|');
					var dom = '<div class="intro">'+bj_arr[i]+'</div><div class="numBox"><div class="numList"></div></div>';
					$("."+Place+" table:eq("+Num+") p").last().append(dom);
					for(var j=0;j<arr.length;j++){
						var dom2 ='<span style="width:'+1/arr.length*100+'%">'+arr[j]+'</span>';
						$("."+Place+" table:eq("+Num+") p").last().find('.numList').eq(i).append(dom2)
					}
				}
				
			}

			var num = 0;
			$("."+Place).on('click','.nextBtn',function(){
				num++;
				var len = Math.ceil($(this).prev().find('span').length/5);
				if(num == len){
					$(this).prev().find('.numList').animate({'left': 0},'swing');
					$(this).removeClass('prevbtn')
					num = 0;
				}else{
					var left = -235*num;
					$(this).prev().find('.numList').animate({'left': left},'swing');
					if(len == (num+1)){
						$(this).addClass('prevbtn')
					}else{
						$(this).removeClass('prevbtn')
					}
				}
			})
		}
	}	

	function SkillzjPC(Place,Ico,Title,Text,lv,Num,CD){
		if(Title == "" || Title == "空" || Title == null || Title == undefined){
			$("."+Place+" table:eq("+Num+")").hide();
		}else{
			$("."+Place+" table:eq("+Num+") img").attr("src",STATIC_BASE_URL+"/mobile/images/Skill/"+Ico);
			$("."+Place+" table:eq("+Num+") td:eq(1)").find("p").text(Title);
			$("."+Place+" table:eq("+Num+") td:eq(2)").find("p").text("固有等级："+lv);
			$("."+Place+" table:eq("+Num+") p").last().text(Text)

		};
	}	
	function EquipSkill(Place,Ico,Text,Num){
		if(Text == "" || Text == "空" || Text == null || Text == "——"){
			$("."+Place).closest('table').hide();
		}else{
			$("."+Place+" li:eq("+Num+") img").attr("src",STATIC_BASE_URL+"/mobile/images/Skill/"+Ico);
			$("."+Place+" li:eq("+Num+") p:eq(0)").text(Text);
		}
	}
	
	function Tname(Name){
		if(Name.indexOf("（")== -1){
		$(".Skill-Text .CName").text(Name.substring(0,Start));
		}else{
		var Start = Name.indexOf("（");
	 	var	End	  = Name.length;
		$(".Skill-Text .CName").text(Name.substring(0,Start));
		$(".Skill-Text .EName").text(Name.substring(Start+1,End-1))}
	}
	function StarBorder(Star,job,url){
		var Metal = "";
        if (Star <= 0) {
            var Metal = "R";
            $(".Boder-head").addClass("Boder-Dark-head");
            $(".Boder-left").addClass("Boder-Dark-left");
            $(".Boder-right").addClass("Boder-Dark-right");
            $(".Boder-foot").addClass("Boder-Dark-foot"); };
		if (Star == 2 || Star == 1) {
			var Metal = "C";
			$(".Boder-head").addClass("Boder-Copper-head");
			$(".Boder-left").addClass("Boder-Copper-left");
			$(".Boder-right").addClass("Boder-Copper-right");
			$(".Boder-foot").addClass("Boder-Copper-foot"); };
		if (Star == 3) {
			var Metal = "S";
			$(".Boder-head").addClass("Boder-Silver-head");
			$(".Boder-left").addClass("Boder-Silver-left");
			$(".Boder-right").addClass("Boder-Silver-right");
			$(".Boder-foot").addClass("Boder-Silver-foot");};
		if (Star >= 4) {
			var Metal = "G";
			$(".Boder-head").addClass("Boder-Gold-head");
			$(".Boder-left").addClass("Boder-Gold-left");
			$(".Boder-right").addClass("Boder-Gold-right");
			$(".Boder-foot").addClass("Boder-Gold-foot");
			};
			$(".Databox-head").addClass("Databox-head-"+Metal);
			$(".Databox-foot").addClass("Databox-foot-"+Metal);
			$(".Skill-Item-Title").addClass("Databox-head-"+Metal);
			$(".Radar").addClass("Radar-"+Metal);
			$(".Databox").addClass("Databox-"+Metal);
			$(".Star").addClass("Star"+Star);
			if(job.indexOf("Grand ")>-1){job=job.replace("Grand ","");}
			$(".job img").attr({"src":url+"/images/Box/Detailed/"+job+"-"+Metal+".png"});		
	}
	function CardTureName(ID){
		ID=QiNiuPic(ID);
		PIC1=ID+"A.jpg";
		PIC2=ID+"B.png";
		$(".TureName").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/equip/"+PIC2+")no-repeat top","background-size":"100%"});
		$(".Pic-ul li:eq(0)").css({"background":"url(" + STATIC_BASE_URL + "/fgo/card/equip/"+PIC1+") 0 0","background-size":"100%"});
	}
	function CardTureName2(ID,type){
		ID=QiNiuPic(ID);
    	PIC1=ID+"A.png";
		value1=STATIC_BASE_URL + '/fgo/card/equip/'+PIC1;
        var li1 = '<li class="swiper-slide"><img src="'+value1+'" /></li>';
        $('.oplist').append(li1);
        if(type == 'PC'){
        	$('.opbtn a').eq(0).attr({'value':value1,'href':value1});
        }else{
        	$('.opbtn button').eq(0).attr({'value':value1,'href':value1});
        }
    }
	function StarFlower(Star){
		var Metal = "";
		if (Star <= 2) {
			var Metal = "C";
			$(".Flower-head").addClass("Flower-Copper-head");
			$(".Flower-foot").addClass("Flower-Copper-foot"); };
		if (Star == 3) {
			var Metal = "S";
			$(".Flower-head").addClass("Flower-Silver-head");
			$(".Flower-foot").addClass("Flower-Silver-foot");};
		if (Star >= 4) {
			var Metal = "G";
			$(".Flower-head").addClass("Flower-Gold-head");
			$(".Flower-foot").addClass("Flower-Gold-foot");
			};
			$(".Databox-head").addClass("Databox-head-"+Metal);
			$(".Databox-foot").addClass("Databox-foot-"+Metal);
			$(".Databox").addClass("Databox-"+Metal);
			$(".Star").addClass("Star"+Star);
	}
  	function UserItem(Arry,Ap,Award,map,url){
  			var Data = Arry.split(",");
  			var ApAp = Ap.split(",");
  			var Aitem = Award.split(",");
  			var Max  = Data.length;
  			var Dfirst = Data[0].substring(0,1);
  			var mapurl = map.split(",");
  			for (var i = 0; i < Max; i++) {
	  			if (Data[i].substring(0,1) == "F") {
	  				if(Data[i].substring(2)){
	  					if(mapurl[i] == 0){
							$(".PlaceLv").append("<li class='F_Q QQ'><a><div class='Place-name'>"+Data[i].substring(2)+"</div><div class='Awardico'><img src='"+url+"/mobile/images/Item/"+Aitem[i]+"'></div><div class='Apfont'>"+ApAp[i]+"</div></a></li>");
	  					}else{
	  			  			$(".PlaceLv").append("<li class='F_Q QQ'><a href='"+url+"/map/map"+mapurl[i]+"'><div class='Place-name'>"+Data[i].substring(2)+"</div><div class='Awardico'><img src='"+url+"/mobile/images/Item/"+Aitem[i]+"'></div><div class='Apfont'>"+ApAp[i]+"</div></a></li>");
	  					}
	  				}
	  			}else{
	  				if(Data[i].split('_')[1]){
	  					var flag = Data[i].split('_')[0];
	  					if(mapurl[i] == 0){
	  						$(".PlaceLv").append("<li class='QQ E_Q "+flag+"'><a><div class='Place-name'>"+Data[i].split('_')[1]+"</div><div class='Awardico'><img src='"+url+"/mobile/images/Item/"+Aitem[i]+"'></div><div class='Apfont'>"+ApAp[i]+"</div></a></li>");
	  					}else{
	  						$(".PlaceLv").append("<li class='QQ E_Q "+flag+"'><a href='"+url+"/map/map"+mapurl[i]+"'><div class='Place-name'>"+Data[i].split('_')[1]+"</div><div class='Awardico'><img src='"+url+"/mobile/images/Item/"+Aitem[i]+"'></div><div class='Apfont'>"+ApAp[i]+"</div></a></li>");
	  					}
	  				}
	  			}
  			}
  			if (Dfirst != "E" && Dfirst != "F"){
				$(".Databox.placetable").append("<div class='Databox-main tablelist'><table class='info-table'><tr><th class='Databox-head'>获得方法</th></tr><tr><td>"+Arry+"</td></tr></table></div>")
			}		
  	}
  	function ItemGroupSet (Img,Eq,Border,Num,Qp,url){
  		var img = Img.split("|");
		var zmax = img.length;
		var border = Border.split("|");
		var num = String(Num).split("|");
		var qparr = Qp.split("|");
		if (num == "" || num == "空" || num == null){
			$(".break-Items").remove();
			$(".break-databox").parents(".Databox").remove();
		}
		else{
			for (var i = 0; i < zmax; i++) {
				//box.find('.ItemGroup').append(dom);
				var box = '<div class="break-Items cf">'+
					'<ul class="ItemGroup"></ul>'+
					'<div class="QP">需要消耗QP：'+qparr[i]+'</div>'+
					'<div class="next Databox-head">下一级</div>'+
					'<div class="max Databox-head">最高</div>'+
					'<div class="lv">Lv '+(i+1)+'</div>'+
				'</div>';
				$(".break-databox").append(box);
				var arr = img[i].split(',');
				var arr2 = border[i].split(',');
				var arr3 = num[i].split(',');
				for(var j= 0;j<arr.length;j++){
					arr[j] = arr[j].replace('png','jpg');
					var dom = "<li><div class='ItemGroupBD'><img src='" + STATIC_BASE_URL + "/fgo/material/"+arr[j]+"'></div><div class='ItemGroupNum'>"+arr3[j]+"</li>";
					$('.break-Items').eq(i).find('.ItemGroup').append(dom)
				}
			};
			$('.break-Items').hide().eq(0).show();
			$('.break-Items').eq(zmax-1).find('.max').hide();
			$('.break-Items').find('.next').click(function(){
				var dx = $(this).closest('.break-Items').index();
				if(dx== (zmax-1)){
					$('.break-Items').hide().eq(0).show();
				}else{
					$(this).closest('.break-Items').hide().next().show();
				}
			})
			$('.break-Items').find('.max').click(function(){
				$('.break-Items').hide();
				$('.break-Items').last().show()
			})
			//$(".Skill-Items .QP:eq("+Eq+")").append(Qp);
			$(".break-Items .ItemGroup li").height($(".break-Items .ItemGroup li").width()*1.1);
			$(".break-Items .ItemGroupBD").height($(".break-Items .ItemGroup li").width()*1.1);
		}
	}
	function SkillItemGroupSet (Img,Eq,Border,Num,Qp,url){
			
		var img = Img.split("|");
		var zmax = img.length;
		var border = Border.split("|");
		var num = String(Num).split("|");
		var qparr = Qp.split("|");
		if (num == "" || num == "空" || num == null){
			$(".Skill-Items").remove();
			$(".skill-databox").parents(".Databox").remove();
		}
		else{
			for (var i = 0; i < zmax; i++) {
				//box.find('.ItemGroup').append(dom);
				var box = '<div class="Skill-Items cf">'+
					'<ul class="ItemGroup"></ul>'+
					'<div class="QP">需要消耗QP：'+qparr[i]+'</div>'+
					'<div class="next Databox-head">下一级</div>'+
					'<div class="max Databox-head">最高</div>'+
					'<div class="lv">Lv '+(i+1)+'</div>'+
				'</div>';
				$(".skill-databox").append(box);
				var arr = img[i].split(',');
				var arr2 = border[i].split(',');
				var arr3 = num[i].split(',');
				for(var j= 0;j<arr.length;j++){
					arr[j] = arr[j].replace('png','jpg');
					var dom = "<li><div class='ItemGroupBD'><img src='" + STATIC_BASE_URL + "/fgo/material/"+arr[j]+"'></div><div class='ItemGroupNum'>"+arr3[j]+"</li>";
					$('.Skill-Items').eq(i).find('.ItemGroup').append(dom)
				}
			};
			$('.Skill-Items').hide().eq(0).show();
			$('.Skill-Items').eq(zmax-1).find('.max').hide();
			$('.Skill-Items').find('.next').click(function(){
				var dx = $(this).closest('.Skill-Items').index();
				if(dx== (zmax-1)){
					$('.Skill-Items').hide().eq(0).show();
				}else{
					$(this).closest('.Skill-Items').hide().next().show();
				}
			})
			$('.Skill-Items').find('.max').click(function(){
				$('.Skill-Items').hide();
				$('.Skill-Items').last().show()
			})
			//$(".Skill-Items .QP:eq("+Eq+")").append(Qp);
			$(".Skill-Items .ItemGroup li").height($(".Skill-Items .ItemGroup li").width()*1.1);
			$(".Skill-Items .ItemGroupBD").height($(".Skill-Items .ItemGroup li").width()*1.1);
		}
	}
	function charts(D1,D2,D3,D4,D5,D6,url){
		$(".Ablility td").each(
		function(i){
		if(this.innerHTML.indexOf("img")>=0)
		{
	   	$(".Ablility td:eq("+i+")").addClass("TdimgHeight")}
		else{
		$(".Ablility td:eq("+i+")").addClass("TdHeight");
		}
		});
		$(".Ablility tr").find("td:eq(2)").addClass("LastHeight").removeClass("TdHeight");
		var AbilityData= [D1,D2,D3,D4,D5,D6];
		var AText = ["筋力","耐久","敏捷","魔力","幸运","宝具"];
		var imgposition	=[];	
		$.each(AbilityData,function(i,n){
		if(n == "EX") {imgposition[i]="center 2px"}
		if(n == "A++"){imgposition[i]="center -57px"}
		if(n == "A+") {imgposition[i]="center -57px"}
		if(n == "A")  {imgposition[i]="center -57px"}
		if(n == "B++") {imgposition[i]="center -117px"}
		if(n == "B+") {imgposition[i]="center -117px"}
		if(n == "B")  {imgposition[i]="center -117px"}
		if(n == "C++") {imgposition[i]="center -177px"}
		if(n == "C+") {imgposition[i]="center -177px"}
		if(n == "C")  {imgposition[i]="center -177px"}
		if(n == "D++") {imgposition[i]="center -237px"}
		if(n == "D+") {imgposition[i]="center -237px"}
		if(n == "D")  {imgposition[i]="center -237px"}
		if(n == "E")  {imgposition[i]="center -297px"}
        if(n == "E+")  {imgposition[i]="center -297px"}
        if(n == "E++")  {imgposition[i]="center -297px"}
		if(n == "？"){imgposition[i]="center -357px"}
		if(n == "???"){imgposition[i]="center -357px"}
		if(n == ""){imgposition[i]="center -357px"}
		});
	for(i=0;i<6;i++){	
				$(".Ablility tr:eq("+i+")").find("td:eq(0)").text(AText[i]);
				$(".Ablility tr:eq("+i+")").find("td:eq(1)").css("background-position",imgposition[i]);
				$(".Ablility tr:eq("+i+")").find("td:eq(2)").text(AbilityData[i]);
        		}
        		}
    function myroomSet(TRIP_LV0,TRIP_LV1,TRIP_LV2,TRIP_LV3,TRIP_LV4,TRIP_LV5,OWNER){
    	if(TRIP_LV0==""||TRIP_LV0==null){
    		$(".Myroom").parent(".Databox").remove();
    	}
    	else{
    		var MyroomData= [TRIP_LV0,TRIP_LV1,TRIP_LV2,TRIP_LV3,TRIP_LV4,TRIP_LV5,OWNER];
    		var MText = ["绊 Lv0","绊 Lv1","绊 Lv2","绊 Lv3","绊 Lv4","绊 Lv5","所属"];	
    		for(i=0;i<7;i++){	
    			$(".Myroom tr:eq("+i+")").find("td:eq(0)").text(MText[i]);
    			if(MyroomData[i]!=""&&MyroomData[i]!="无"&&MyroomData[i]!=null)
    				$(".Myroom tr:eq("+i+")").find("td:eq(1)").text(MyroomData[i]);
    			else
    				$(".Myroom tr:eq("+i+")").hide();
    		}
    	}
    }    		
    function TitleStar(){
    $(".AblilityT").text("数值图");
    $(".CardsT").text("Cards");
    $(".TnameT").text("宝具");
    $(".TnameLvT").text("宝具等级");
    $(".GskillT").text("固有技能");
    $(".JskillT").text("职阶技能");
    }
