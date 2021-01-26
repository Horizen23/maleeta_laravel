<br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
    <form method='POST' action='/user'>
        @csrf
                 <input type="text"  name="user" placeholder="user" required>
                    <br>
                    <input  type="password" placeholder="Password"   name="password" required>
                    <br>
                    <button type="submit" class="log-in"> Log In </button>
        </form>