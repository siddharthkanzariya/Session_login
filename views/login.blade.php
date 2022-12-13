
<html>
    <body>
        <form method="post" action="{{URL::to('/home')}}">
            @csrf
        <input type="text" name="txt1"/>
        <input type="submit"/>
    </form>
    </body>
</html>