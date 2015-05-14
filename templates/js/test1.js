var myVariable = "hello world";
document.write(myVariable.big()+"<br/>");
document.write(myVariable.fixed()+"<br/>");
document.write(myVariable.blink()+"<br/>");
document.write(myVariable.fontcolor()+"<br/>");
document.write(myVariable.big()+"<br/>");

var firstString = "my String";
var finalString = firstString.bold().fontcolor("red");

document.write(finalString);

var newArray1= [2,"nihao","wohehao",9,"ten"];

document.write(newArray1[3]+"<br/>");

document.write(newArray1.sort());

//split 分割

var myValiable1 = "a,c,d,e";

var strintArray = myValiable1.split(",");
for(var i=0; i<strintArray.length;i++){
	document.write(strintArray[i]+"<br/>");
}
console.log(strintArray.length);

//var result = window.confirm("确定退出？");

function multiple(numble1,numble2){
	var result = numble1 * numble2;
	return result;
}

console.log(multiple(20,40));

//var userchoice = window.confirm("请问你是男生吗？");

//var result = (userchoice == true)?"我是男士":"我是女士";

//document.write(result);


window.setTimeout("multiple(90,100)",1000);

var obj1 = [1,2,3,4];

$.each(obj1, function(i,n) {    
	console.log("索引值："+i+"对应值"+n);                                                     
});
function hello(){
	console.log("hello");
}
//window.setTimeout('hello()',1000);
//setInterval('hello()',1000);
//window.clearTimeout(myTimeout);

var thisdate = new Date();




















