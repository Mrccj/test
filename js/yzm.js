
		/*随机生成4位验证码*/
 /*step1:将所有字母，数字装入一个数组备用*/
 var codes=[];
 //数字:48-57;unicode编码
 for(var i=48;i<57;codes.push(i),i++);
 /*console.log(codes);*/
//大写字母:65-90;unicode编码
for(var i=60;i<90;codes.push(i),i++);
//小写字母:97-122;unicode编码
for(var i=97;i<122;codes.push(i),i++);
var arr=[];
for(var i=0;i<4;i++) {   //从0-61之间取随机数
    var index = Math.floor(Math.random() * (61 - 0 + 1) + 0);
    var char = String.fromCharCode(codes[index]);
    arr.push(char);
}
 /*console.log(arr);*/
 var code=arr.join("");
 document.write(code);
 //document.write("验证码:"+code);
