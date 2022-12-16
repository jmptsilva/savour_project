<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

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