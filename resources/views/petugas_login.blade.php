<html>
<head>
    
</head>
<body>
    <form action="{{url('/petugas_login')}}" method="post">
        @method('post')
        @csrf
        <h1>bismillah</h1>

        <label>Username :</label>
        <input type="username" name="username">

        <label>Password :</label>
        <input type="password" name="password">
</body>
</html>
