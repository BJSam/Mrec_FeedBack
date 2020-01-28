<html>
<body>

<h1>My Web Page</h1>

<script>
function random_item(items)
{
  
return items[Math.floor(Math.random()*items.length)];
     
}
var itm=[];
var items = [254, 45, 212, 365, 2543];
  for(var k=0;k<=items.length;k++){
	itm[k]=random_item(items);
  }
                                   
   var uniqueArray = Array.from(new Set(itm));
   if(uniqueArray.length==items.length){
console.log(uniqueArray);
                                   }
    else{
        
var array3 = items.concat(uniqueArray).unique(); 
console.log(array3);                          
                                   
                                   }
</script>

</body>
</html>