<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        // not working
        // function Delete(e){
		// 	let items = [];
		// 	JSON.parse(localStorage.getItem('items')).map(data=>{
		// 		if(data.id != e.parentElement.parentElement.children[0].textContent){
					
		// 			data.id.remove();
		// 		}
		// 	});
		// 	localStorage.setItem('items',JSON.stringify(items));
		// 	window.location.reload();
		// };
    </script>
</head>
<body>
    @include('navbar')
    @include('offer')
    @include('nearby')
    
</body>
</html>