<div>
    <h1>this is a login page</h1>
<div>
@if($errors)
    @foreach($errors->all()  as $singleError)
        <p>{{$singleError}}</p>
    @endforeach

@endif
</div>
    <form action="loginInfo" method="post">
        @csrf
        <input type="text" name="username" placeholder="Username" >
        <span>@error('username'){{$message}}@enderror</span>
        <br>
        <input type="password" name="password" placeholder="Password" >
        <span>@error("password"){{$message}}@enderror</span>
        <!-- <div>
            <div>
                <input type="checkbox" name="sakil[]" id="java" value="java" >
                <label for="java">Java</label>
            </div>
            <div>
                <input type="checkbox" name="sakil[]" id="Javascriot" value="Javascriot">
                <label for="Javascriot">Javascriot</label>
            </div>
            <div>
                <input type="radio" name="gander" id="male" value="male">
                <label for="male">Male</label>
                <input type="radio" name="gander" id="female" value="female">
                <label for="female">Male</label>
            </div>
            <div>
               
            </div>
            
        </div> -->
        <p><button type="submit">Login</button></p>
    </form>
</div>