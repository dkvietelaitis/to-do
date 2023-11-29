{{-- Stilius --}}
<style>
    body {
        /* display: flex; */
        /* flex-direction: column;
        justify-content: center;
        align-items: center; */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
.loginPanel {
    padding: 10px;
    width: 200px;
    border: 2px solid white;
    border-radius: 5px;
    box-shadow: 5px 10px #888888;
}
input {
    width: 170px;
    margin: 5px;
    padding: 3px;
    border: 2px solid white;
    border-radius: 3px;
    background-color: black;
    color: white;
    box-shadow: 3px 5px #888888;
}
label {
    color: white;
}
i {
    color: white;
}
</style>

<div class="loginPanel">
    <i class="fa-regular fa-clipboard"></i>
<form>
    <label for="userName">Vartotojo vardas:</label><br>
    <input type="text" id="userName" name="userName"><br>
    <label for="userPassw">Slaptažodis:</label><br>
    <input type="password" id="userPassw" name="userPassw"><br>
</form>

</div>