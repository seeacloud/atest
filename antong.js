
function setMenu(num)
{
	var n='#li'+num;

	$(n).css("background","#0A56BB");
}

// $("p").find("span").css('color','red');

function setImgCard()
{

	var divList=document.getElementsByClassName('imgDiv');
	console.log(divList.length);

	for(var i=0;i<divList.length;i++)
	{
		console.log(divList[i].offsetWidth);
		divList[i].style.height=divList[i].offsetWidth*(9/16)+'px';
		// divList[i].style.background="red";
	}
}

function setGiftImgDiv()
{
	var imgDivList=document.getElementsByClassName('giftImgDiv');
	for(var i=0;i<imgDivList.length;i++)
	{
		imgDivList[i].style.height=imgDivList[i].offsetWidth*(4/4)+'px';
		console.log('height is:',imgDivList[i].style.offsetHeight);
	}
}

// $("#right").click(function () {
//     $(".block").animate({ left: '+50px' }, "slow");
// });


function closePop()
{
	document.getElementById('popBg').style.display="none";
	document.getElementById('pop').style.display="none";

}


// $(".nav a").on("click", function(){
//    $(".nav").find(".active").removeClass("active");
//    $(this).parent().addClass("active");
// });