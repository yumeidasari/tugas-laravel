<html>
    <head>
        
    </head>
    <body>
        <div>
            <h1> Buat Account Baru!</h1>
            <h2> Sign Up Form</h2>
        </div>

        <form action="{{url('/welcome')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <label for="first_name"> First name:</label>
            <br><br>
            <input type="text" placeholder="" value="" name="first_name">
            <br><br>
            <label for="last_name"> Last Name:</label>
            <br><br>
            <input type="text" placeholder="" value="" name="last_name">
        
            <br><br>
            <label> Gender:</label>
            <br><br>
            <input type="radio" name="Gender" value="0"> Male <br>
            <input type="radio" name="Gender" value="1"> Female <br>
            <input type="radio" name="Gender" value="2"> Other <br>
        
            <br>
            <label> Nationality:</label>
            <br><br>
            <select>
                <option value="indonesia">Indonesian</option>
                <option value="malaysia">Malaysian</option>
                <option value="singapore">Singapore</option>
            </select>
        
            <br><br>
            <label> Language Spoken:</label>
            <br><br>
            <input type="checkbox" name="Bahasa" value="0"> Bahasa Indonesia <br>
            <input type="checkbox" name="Bahasa" value="1"> English <br>
            <input type="checkbox" name="Bahasa" value="2"> Other <br>
        
            <br>
            <label for="bio"> Bio:</label>
            <br><br>
            <textarea cols="40" rows="10" id="bio"></textarea>
       
            <br>
           <input type="submit"  value="Sign up"> 
                    
        </form>

    </body>
</html>
